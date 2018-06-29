<?php

namespace RSYS\Interfaces;

interface IContextState
{
  public function prepare();
  public function dump();
  public function release();
  public function upload();
  public function rollback();
  public function getInfo(string $type, ...$data);
}