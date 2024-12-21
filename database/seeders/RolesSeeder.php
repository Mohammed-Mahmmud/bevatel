<?php

namespace Database\Seeders;

use \Spatie\Permission\Models\Role;
use Illuminate\Database\Seeder;

class RolesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public $roles = [
        'Admin',
        'Author',
    ];
    public function run(): void
    {
        foreach ($this->roles as $role) {
            Role::create([
                'name' => $role
            ]);
        }
    }
}
