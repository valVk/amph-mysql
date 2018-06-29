<?php

namespace RSYS\State;

use RSYS\ContextState;

class Dump extends ContextState
{
  public function __construct(\RSYS\Release $release)
  {
    parent::__construct($release);
  }

  public function __toString()
  {
    return 'Dump state' . PHP_EOL;
  }
}