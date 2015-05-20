<?php

require_once('add.php');
class AdditionTest extends PHPUnit_Framework_TestCase
{
public function setUp(){}
public function tearDown(){}
public function testeven()
{
$no=10;
$sum=new Even($no);
$this->assertTrue($sum->sumdivisible());
}
}
?>
