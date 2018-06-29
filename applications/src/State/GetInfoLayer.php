<?php

namespace RSYS\State;
use RSYS\ContextState;

class GetInfoLayer extends ContextState
{
  private $data;

  public function __construct(\RSYS\Release $release, ...$data)
  {
    parent::__construct($release);
    $this->data = $data;
  }
  
  public function __toString()
  {
    return 'GetInfoLayer state' . PHP_EOL;
  }
}