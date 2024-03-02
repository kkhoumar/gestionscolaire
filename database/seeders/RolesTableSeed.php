<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class RolesTableSeed extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('roles')->insert([
            'name' => 'admin',
            'description' => 'admin',
        ]);
        DB::table('roles')->insert([
            'name' => 'enseignant',
            'description' => 'enseignant',
        ]);
        DB::table('roles')->insert([
            'name' => 'etudiant',
            'description' => 'etudiant',
        ]);
    }
}
