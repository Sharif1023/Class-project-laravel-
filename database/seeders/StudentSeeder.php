<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Student;
use Faker\Factory as Faker;

class StudentSeeder extends Seeder
{
    public function run(): void
    {
        $faker = Faker::create();

        // আগের দুইটা ডামি ডেটা রাখতে চাইলে uncomment করো
        Student::create([
            'name'    => 'John Doe',
            'roll'    => 'R101',
            'class'   => '10',
            'section' => 'A',
            'dob'     => '2008-05-10',
            'email'   => 'john@example.com',
        ]);

        Student::create([
            'name'    => 'Jane Smith',
            'roll'    => 'R102',
            'class'   => '10',
            'section' => 'B',
            'dob'     => '2008-08-15',
            'email'   => 'jane@example.com',
        ]);
        

        
    }
}
