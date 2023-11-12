<?php

namespace Tests\Unit;

//use PHPUnit\Framework\TestCase;
use Tests\TestCase;

class EmployeeTest extends TestCase
{
    /**
     * A basic unit test example.
     * @return void
     */
    public function test_Employee_store(): void
    {
       $response= $this->call('POST','/admin/add-employee',[
            'company_id'=>25,
            'firstname' =>'Parthi',
            'lastname' =>'Leo',
            'email' => 'parthiban@gmail.com',
            'phone' =>'0754876995'
        ]);
      //  dd($response);

      // $this->assertTrue(true);
        $response-> assertStatus($response-> status(),200);
    }
}
