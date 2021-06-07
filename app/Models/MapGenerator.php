<?php
declare(strict_types=1);

namespace App\Models;


class MapGenerator
{

 public function createMap(): Map
 {
     $tiles= $tile->get;
     $tokens=[];
     $nodes=[];
     $map = new Map($tiles,$tokens,$nodes);
    return $map;
 }

}
