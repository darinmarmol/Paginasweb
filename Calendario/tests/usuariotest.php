<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class usuariotest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
  /** public function testExample()
    {
        $this->assertTrue(true);
    }
    */
    public function testBasicExample()
	{
    	$this->visit('/')
         ->click('About Us')
         ->seePageIs('/about-us');
	}
}
