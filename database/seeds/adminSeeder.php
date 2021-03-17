<?php
namespace Database\Seeders;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class adminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        

        DB::table('admin_table')->insert([
            'admin_id'=> 1,
            'admin_name' => Str::random(10),
            'admin_email' => 'abc@gmail.com',
            'admin_password' => 'password',
            'admin_phone' => 12345
        ]);
    }
    
}
