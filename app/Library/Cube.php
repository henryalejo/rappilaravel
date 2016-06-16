<?php
namespace App\library;

class Cube {

  private $cube3D;

  function __construct($dimension) {

    $z = array_fill(0, $dimension, 0);
    $y = array_fill(0, $dimension, $z);
    $x = array_fill(0, $dimension, $y);
    $this->cube3D = $x;
  }
  public function update($x,$y,$z,$val) {
    $this->cube3D[$x-1][$y-1][$z-1]= $val;
  }
  public function query($x1, $y1, $z1, $x2, $y2, $z2) {
    $sum =0;
    $x1 = $x1-1;
    $x2 = $x2-1;
    $z1 = $z1-1;
    $z2 = $z2-1;
    $y1 = $y1-1;
    $y2 = $y2-1;
    for ($x=$x1; $x <= $x2 ; $x++) {
      for ($y=$y1; $y <= $y2; $y++) {
        for ($z=$z1; $z <= $z2; $z++) {
          $sum = $sum + $this->cube3D[$x][$y][$z];
        }
      }
    }
    return $sum;
  }
  public function get(){
    return $this->cube3D;
  }
}
