<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function test_example()
    {
        $this->assertTrue(true);
    }
    public function test_login(){
        $user=new user([
        'name'="Admin",
        'email'="bachurahul@gmail.com",
        'password'=bcrypt("123456789")
            ]);
        $this->assertEquals('Admin', $user->name);
                            
}
