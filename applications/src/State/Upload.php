<?php

namespace RSYS\State;

use RSYS\ContextState;

class Upload extends ContextState
{
  public function __construct(\RSYS\Release $release)
  {
    parent::__construct($release);
  }

  public function __toString()
  {
    return 'Upload state' . PHP_EOL;
  }
}