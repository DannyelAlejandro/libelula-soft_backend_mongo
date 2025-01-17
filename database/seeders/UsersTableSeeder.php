<?php
namespace Database\Seeders;

use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                'name' => 'Dannyel Alulema',
                'email' => 'admin@admin.com',
                'email_verified_at' => now(),
                'password' => Hash::make('password'),
                'created_at' => now(),
                'updated_at' => now()
            ]
        ];

        foreach ($data as $user) {
            User::create($user);
        }
    }
}
