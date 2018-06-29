<?php

namespace RSYS\State;

use RSYS\ContextState;
use RSYS\State\{Release as ReleaseState,
  Rollback as RollbackState,
  Dump as DumpState,
  Upload as UploadState,
  GetInfoSite as GetInfoSiteState,
  GetInfoLayer as GetInfoLayerState,
  Prepare as PrepareState};

class Ready extends ContextState
{
  public function __construct(\RSYS\Release $release, \RSYS\Dba\Pool $pool)
  {
    parent::__construct($release, $pool);
  }
  
  public function ready()
  {
    $this->release->changeState(new self($this->release));
    return $this->release->getState();
  }

  public function release(): \RSYS\ContextState
  {
    $this->release->changeState(new ReleaseState($this->release));
    return $this->release->getState();
  }

  public function dump(): \RSYS\ContextState
  {
    $this->release->changeState(new DumpState($this->release));
    return $this->release->getState();
  }

  public function prepare(): \RSYS\ContextState
  {
    $this->release->changeState(new PrepareState($this->release));
    return $this->release->getState();
  }

  public function rollback(): \RSYS\ContextState
  {
    $this->release->changeState(new RollbackState($this->release));
    return $this->release->getState();
  }

  public function upload(): \RSYS\ContextState
  { 
    $this->release->changeState(new UploadState($this->release));
    return $this->release->getState();
  }

  public function getInfo(string $type, ...$data): \RSYS\ContextState
  {
    switch ($type) {
      case 'site':
        $this->release->changeState(new GetInfoSiteState($this->release, $this->pool, $data));
      break;
      case 'layer':
        $this->release->changeState(new GetInfoLayerState($this->release, $this->pool, $data));
      break;
      default:
        throw new \Exception('There is no any information with type: ' . $type);
      break;
    }
    return $this->release->getState();
  }

  public function __toString()
  {
    return 'Ready state' . PHP_EOL;
  }
}