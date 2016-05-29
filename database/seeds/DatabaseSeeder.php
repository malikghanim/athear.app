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
        // $this->call(UserTableSeeder::class);
        DB::table('users')->delete();

        $users = array(
            ['name' => 'Malik Ghanim', 'email' => 'malikghanim@gmail.com', 'password' => Hash::make('secret')]
        );

        // Loop through each user above and create the record for them in the database
        foreach ($users as $user)
        {
            App\Models\User::create($user);
        }

    }
}
