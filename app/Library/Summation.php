<?php
namespace App\library;
use App\Library\Cube;

class Summation {
  static function execute($dataText) {
    $arrayByLine = explode("\n", $dataText);
    $output=array();
    $numberTestCases = intval(array_shift($arrayByLine));
    for ($t=0; $t < $numberTestCases ; $t++) {
      $nAndMLine = array_shift($arrayByLine)  ;
      $arrayNandM = preg_split('/\s+/', $nAndMLine);
      $dimention = intval($arrayNandM[0]);
      $cube = new Cube($dimention);
      $numberOfOperations = intval($arrayNandM[1]);
      for ($m=0; $m < $numberOfOperations ; $m++) {
        $operation = array_shift($arrayByLine);
        $oArray = preg_split('/\s+/', $operation);
        if (strpos($oArray[0], 'UPDATE') !== false) {
          $cube->update($oArray[1],$oArray[2],$oArray[3],$oArray[4]);
        }
        else if (strpos($oArray[0], 'QUERY') !== false) {
          array_push($output, $cube->query($oArray[1],$oArray[2],$oArray[3],$oArray[4],$oArray[5],$oArray[6]));
        }
      }
    }
      return  $output;
  }
}
