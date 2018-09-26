<?php

use Illuminate\Database\Seeder;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('students')->insert([
            [
                'name' => 'quangnc',
                'email' => 'quangnc@mainjs.net',
                'address' => ' Khuất Duy Tiến'
		    ],
		    [
                'name' => 'quangnc1',
                'email' => 'quangnc1@mainjs.net',
                'address' => ' Khuất Duy Tiến'
            ],
            [
                'name' => 'quangnc2',
                'email' => 'quangnc2@mainjs.net',
                'address' => ' Khuất Duy Tiến'
            ],
            [
                'name' => 'quangnc3',
                'email' => 'quangnc3@mainjs.net',
                'address' => ' Khuất Duy Tiến'
		    ],
        ]);
    }
}
