<?php

  class Clock
  {
    public $hoursDegrees;
    public $minutesDegrees;
    function getDegrees($hours, $minutes){
      $output = abs((($hours + ($minutes/60))*30)-($minutes*6));
      if (($output/180)>1){
        $output = 360-$output;
      }
      return $output;
    }
    function getDisplayDegrees($hours, $minutes){
      $this->hoursDegrees = ($hours+($minutes/60))*30;
      $this->minutesDegrees = $minutes*6;
    }
  }
 ?>
