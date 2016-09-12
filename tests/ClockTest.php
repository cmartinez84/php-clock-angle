<?php
  require_once __DIR__."/../src/Clock.php";

  class LeetspeakTest extends PHPUnit_Framework_TestCase
    {
        function test_Clock(){
          $input_hours = "4";
          $input_minutes = "50";

          $newClock = new Clock;
          $results = $newClock->getDegrees($input_hours, $input_minutes);

          $this->assertEquals("0", $results);
        }

    }

?>
