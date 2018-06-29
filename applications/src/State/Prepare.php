<?php

namespace RSYS\State;

use RSYS\ContextState;

class Prepare extends ContextState
{
  public function __construct(\RSYS\Release $release)
  {
    parent::__construct($release);
  }

  public function rollback()
  {

  }

  public function __toString()
  {
    return 'Prepare state' . PHP_EOL;
  }
}