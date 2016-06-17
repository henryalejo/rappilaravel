<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use App\Library\Summation;

class SummationClassTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
     private $textInput ="2\n4 5\n".
       "UPDATE 2 2 2 4\n".
       "QUERY 1 1 1 3 3 3\n".
       "UPDATE 1 1 1 23\n".
       "QUERY 2 2 2 4 4 4\n".
       "QUERY 1 1 1 3 3 3\n".
       "2 4\n".
       "UPDATE 2 2 2 1\n".
       "QUERY 1 1 1 1 1 1\n".
       "QUERY 1 1 1 2 2 2\n".
       "QUERY 2 2 2 2 2 2"
       ;
    public function testExample()
    {
        $this->assertTrue(true);
    }
    public function testSummationClass(){
      $result = Summation::execute($this->textInput);
      $this->assertEquals([4,4,27,0,1,1], $result);

    }
}
