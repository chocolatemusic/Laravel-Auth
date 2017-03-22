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
        $this->call(UsersTableSeeder::class);
		$this->command->info('User Table Seeded!');
    }
}


class UsersTableSeeder extends Seeder {
public function run()
{
DB::table('users')->delete();
DB::table('users')->insert([
'username' => 'admin',
'email' => 'chocolate_music@hot.com',
'password' => Hash::make('mazda2'),
'name' => 'Nakarin',
'type' => 'admin',
'created_at' => date('Y-m-d H:i:s')
]);
}
}