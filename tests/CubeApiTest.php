<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class CubeApiTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */

     private $textInput =[
       'testcases' => "2\n4 5\n".
       "UPDATE 2 2 2 4\n".
       "QUERY 1 1 1 3 3 3\n".
       "UPDATE 1 1 1 23\n".
       "QUERY 2 2 2 4 4 4\n".
       "QUERY 1 1 1 3 3 3\n".
       "2 4\n".
       "UPDATE 2 2 2 1\n".
       "QUERY 1 1 1 1 1 1\n".
       "QUERY 1 1 1 2 2 2\n".
       "QUERY 2 2 2 2 2 2\n",
       ];

    public function testExample()
    {
        $this->assertTrue(true);
    }
    public function testPostAlgoritm(){
      $response = $this->call('POST','/cube', $this->textInput );
      $this->assertEquals(200, $response->status());
    }
    public function testFormView(){
      $this->visit('/')
         ->press('Evaluate')
         ->seePageIs('/cube');
    }
}
