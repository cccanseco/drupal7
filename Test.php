<?php
class Test extends PHPUnit_Framework_TestCase
{
	public function testOnePlusOne() {
            $miBlog = new BlogTestCase();
            $this->assertEquals($miBlog->testBlog(), true);
  	}
}
?>