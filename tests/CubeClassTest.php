<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use App\Library\Cube;

class CubeClassTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */

    public function testExample()
    {
        $this->assertTrue(true);
    }

    public function testCubeClass()
    {
        $cube = new Cube(4);
        $cube->update(2,2,2,4);
        $this->assertEquals('4', $cube->query(1,1,1,3,3,3));
        $cube->update(1,1,1,23);
        $this->assertEquals('4', $cube->query(2,2,2,4,4,4));
        $this->assertEquals('27', $cube->query(1,1,1,3,3,3));
        $cube = new Cube(2);
        $cube->update(2,2,2,1);
        $this->assertEquals('0', $cube->query(1,1,1,1,1,1));
        $this->assertEquals('1', $cube->query(1,1,1,2,2,2));
        $this->assertEquals('1', $cube->query(2,2,2,2,2,2));

    }

}
