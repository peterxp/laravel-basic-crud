<?php

class UserTableSeeder extends Seeder
{
  public function run()
  {
    DB::table('users')->delete();
    Users::create(array(
      'name'      =>'Peter Pradabsri',
      'username'  =>'peterxp',
      'email'     =>'peterxp@hotmail.com',
      'password'  => Hash::make('1234')
      ));
  }
}