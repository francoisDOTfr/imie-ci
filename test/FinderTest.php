<?php namespace SimilarText\Test;

use \SimilarText\Finder;

/**
 * Class FinderTest
 * @package SimilarText\Test
 */
class FinderTest extends \PHPUnit_Framework_TestCase
{
    public function testOk() {
        //$this->assertTrue(true);

        $a = new Finder("bananne",["kiwi","banane"]);
        //echo $a->first();

        $this->assertEquals(
            'banane',
            $a->first()
        );

       	$this->assertEquals(
            'banane',
            $a->first()
        );
    }

    public function testOk2() {
        //$this->assertTrue(true);

        $a = new Finder("bananne",["kiwi","banane"]);
        //echo $a->first();

        $this->assertEquals(
            'banane',
            $a->first()
        );
    }
}
