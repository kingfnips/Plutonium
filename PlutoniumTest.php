<?php

use kingfnips\Plutonium\Plutonium;

class PlutoniumTest extends PHPUnit_Framework_TestCase {

  public function testMiningReturnsPlutonium()
  {
    $mining = new Plutonium;
    $this->assertEquals('plutonium', $mining->mine());
  }

}
