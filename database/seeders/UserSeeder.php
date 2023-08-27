<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Role;
use App\Models\User;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        // admin user
        $adminuser = User::create([
            'name' => 'Super Admin',
            'email' => 'admin@app.com',
            'password' => Hash::make('admin123'),
        ]);
        $adminrole = Role::where('name','admin')->first();
        $adminuser->assignRole([$adminrole->id]);


        // instructor user
        $instructoruser = User::create([
            'name' => 'Instructor',
            'email' => 'instructor@app.com',
            'password' => Hash::make('123456789'),
        ]);
        $instructorrole = Role::where('name','instructor')->first();
        $instructoruser->assignRole([$instructorrole->id]);



        // student user
        $studentuser = User::create([
            'name' => 'Student',
            'email' => 'student@app.com',
            'password' => Hash::make('123456789'),
        ]);
        $studentrole = Role::where('name','student')->first();
        $studentuser->assignRole([$studentrole->id]);

    }
}
