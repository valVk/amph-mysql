<?php
namespace RSYS;

use RSYS\Interfaces\IContextState;

class ContextState implements IContextState 
{
  /**
   * Undocumented variable
   *
   * @var \RSYS\Release
   */
  protected $release;
  /**
   * Undocumented variable
   *
   * @var \RSYS\Dba\Pool
   */
  protected $pool;

  public function __construct(\RSYS\Release $release, \RSYS\Dba\Pool $pool)
  {
    $this->release = $release;
    $this->pool = $pool; 
  }

  public function release()
  {
    throw new \Exception('Method release does not allowed in ' . $this->release->getState());
  }

  public function rollback()
  {
    throw new \Exception('Method rollback does not allowed in ' . $this->release->getState());
  }

  public function upload()
  {
    throw new \Exception('Method upload does not allowed in ' . $this->release->getState());
  }

  public function getInfo(string $type, ...$data)
  {
    throw new \Exception('Method getInfo does not allowed in ' . $this->release->getState());
  }

  public function dump()
  {
    throw new \Exception('Method dump does not allowed in ' . $this->release->getState());
  }

  public function prepare()
  {
    throw new \Exception('Method prepare does not allowed in ' . $this->release->getState());
  }
}