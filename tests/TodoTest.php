<?php

namespace Tests\Unit;

use App\Todo;
use TestCase;

class TodoTest extends TestCase
{
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