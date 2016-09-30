<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
	   DB::table(users)->delete();//delete the users Manually created on before 6:60am 30 Sep 2016
       User::create(array(
	   'name'	=>'Sanya',
	   'emailaddress' 	=> 'sanya@hllogroup.co.za',
	   'password'	=> Hash::make('magic'))
    }
}
