<?php

namespace RSYS\State;
use RSYS\ContextState;

class GetInfoSite extends ContextState
{
  private $data;

  public function __construct(\RSYS\Release $release, \RSYS\Dba\Pool $pool, ...$data)
  {
    parent::__construct($release, $pool);
    $this->data = $data;
  }
  
  public function getLayers()
  {
    [[$data]] = $this->data;
    return $this->pool->queryStream('SELECT distinct rl.layer FROM mds_en.rp_resource rr
    INNER JOIN mds_en.rp_site rs ON (rr.site_id = rs.id)
    INNER JOIN mds_en.rp_layer rl ON (rr.layer_id = rl.id)
    WHERE rs.site = ?;', [$data]);
  }

  public function __toString()
  {
    return 'GetInfoSite state' . PHP_EOL;
  }
}