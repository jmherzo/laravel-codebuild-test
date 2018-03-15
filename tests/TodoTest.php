<?php

namespace Tests\Unit;

use App\Todo;
use TestCase;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class TodoTest extends TestCase
{
    use DatabaseMigrations;
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testMostPriorTask()
    {
        //Assumption
        factory(Todo::class,3)->create();
        factory(Todo::class)->create(['priority'=>'2']);
        $importantTask = factory(Todo::class)->create(['priority'=>'3']);
        //Call actual methods to test
        $tasks=Todo::prioritize()->get();
        //Test using assertions
        $this -> assertEquals($importantTask->id, $tasks->first()->id);
    }
}