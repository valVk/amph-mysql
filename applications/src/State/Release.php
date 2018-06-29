<?php

namespace RSYS\State;

use RSYS\ContextState;

class Release extends ContextState
{
  public function __construct(\RSYS\Release $release)
  {
    parent::__construct($release);
  }

  public function __toString()
  {
    return 'Release state' . PHP_EOL;
  }

  public function makeRelease()
  {
    return 'makeRelease';
  }
}