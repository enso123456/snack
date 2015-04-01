<?php 
  class UsersTableSeeder extends Seeder {
 
     public function run()
     {
       //delete users table records
       DB::table('users')->delete();
       //insert some dummy records
       DB::table('users')->insert(array(
          array('firstname' => 'romeo','lastname' => 'enso','username'=>'romeo','email'=>'romeo@enso.com','password'=> Hash::make('admin'),'dob' => '1993-12-05 00:00:00'),
           array('firstname' => 'john','lastname' => 'clivern','username'=>'john','email'=>'john@clivern.com','password'=> Hash::make('admin'),'dob' => '1993-12-13 00:00:00' ),
           array('firstname' => 'mark','lastname' => 'clivern','username'=>'mark','email'=>'mark@clivern.com','password'=> Hash::make('admin'),'dob' => '1991-11-23 00:00:00'),
           array('firstname' => 'karl','lastname' => 'clivern','username'=>'Karl','email'=>'karl@clivern.com','password'=> Hash::make('admin'),'dob' => '1992-10-11 00:00:00'),
           array('firstname' => 'marl','lastname' => 'clivern','username'=>'marl','email'=>'marl@clivern.com','password'=> Hash::make('admin'),'dob' => '1995-09-10 00:00:00'),
           array('firstname' => 'mary','lastname' => 'clivern','username'=>'mary','email'=>'mary@clivern.com','password'=> Hash::make('admin'),'dob' => '1996-08-16 00:00:00'),
           array('firstname' => 'sels','lastname' => 'clivern','username'=>'sels','email'=>'sels@clivern.com','password'=> Hash::make('admin'),'dob' => '1997-07-24 00:00:00'),
           array('firstname' => 'taylor','lastname' => 'clivern','username'=>'taylor','email'=>'taylor@clivern.com','password'=> Hash::make('taylor@clivern.com'),'dob' => '1992-06-30 00:00:00'),

        ));
     } 
    public function down()
    {
      DB::table('users')->delete();
    }

  }
