<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Member;

class MemberSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $members = 
        [
           [
             'name' =>'Zulharith',
             'email' =>'zulharith1995@gmail.com',
             'address' =>'No 46 jalan'
           ],
           [
            'name' =>'harith',
            'email' =>'harith@gmail.com',
            'address' =>'No 46 jalan'
          ],

        ];

        foreach($members as $key => $value)
        {
            Member::create($value);
        }
    }
}
