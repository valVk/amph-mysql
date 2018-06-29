<?php

namespace RSYS\State;

use RSYS\ContextState;

class Rollback extends ContextState
{
  public function __construct(\RSYS\Release $release)
  {
    parent::__construct($release);
  }

  public function __toString()
  {
    return 'Rollback state' . PHP_EOL;
  }
}