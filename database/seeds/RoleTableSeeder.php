<?php

use Illuminate\Database\Seeder;

class RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       
        DB::table('roles')->insert(['name'=>'admin','guard_name'=>'web']);
        DB::table('roles')->insert(['name'=>'teacher','guard_name'=>'web']);
        DB::table('roles')->insert(['name'=>'student','guard_name'=>'web']);
        DB::table('roles')->insert(['name'=>'parent','guard_name'=>'web']);
        
    }
}
