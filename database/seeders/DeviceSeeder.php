<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Device;

class DeviceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $devices = 
        [
           [
             'name' =>'mobile',
             'member_id' =>'1'
           ],
           [
            'name' =>'laptop',
            'member_id' =>'2'
          ],
          [
            'name' =>'smart Watch',
            'member_id' =>'2'
          ],
          [
            'name' =>'computer',
            'member_id' =>'2'
          ],
          [
            'name' =>'laptop',
            'member_id' =>'1'
          ],

        ];

        foreach($devices as $key => $value)
        {
            Device::create($value);
        }
    }
}
