<?php
use App\User;
use App\Role;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
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
        User::truncate();
        DB::table('role_user')->truncate();
        $adminRole = Role::where('name', 'admin')->first();
        $authorRole = Role::where('name', 'author')->first();
        $userRole = Role::where('name', 'user')->first();

        $admin = User::create([
            'fname' => 'Admin',
            'lname' => 'User',
            'email' => 'admin@bdsoftpro.com',
            'password' => Hash::make('del674569')
        ]);
        $author = User::create([
            'fname' => 'Author',
            'lname' => 'User',
            'email' => 'author@bdsoftpro.com',
            'password' => Hash::make('del674569')
        ]);
        $user = User::create([
            'fname' => 'Generic',
            'lname' => 'User',
            'email' => 'user@bdsoftpro.com',
            'password' => Hash::make('del674569')
        ]);
        $admin->roles()->attach($adminRole);
        $author->roles()->attach($authorRole);
        $user->roles()->attach($userRole);
    }
}
