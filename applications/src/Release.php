<?php

namespace RSYS;

use RSYS\State\Ready as ReadyState;

class Release
{
  private $state;

  public function __construct(\RSYS\Dba\Pool $pool)
  {
    $this->state = new ReadyState($this, $pool);
  }

  public function changeState(\RSYS\ContextState $state): void
  {
    $this->state = $state;
  }

  public function getState(): \RSYS\ContextState
  {
    return $this->state;
  }

  public function __toString()
  {
    return (string) $this->state;
  }
}