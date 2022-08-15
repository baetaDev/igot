<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        DB::table('users')->insert([
            'name' => 'Ricardo Paiva',
            'email' => 'ricardo.paiva@itone.com.br',
            'password' => bcrypt(123456789),
            'status' => 'ativo',
            'sexo' => "masculino",
            'tipo_de_conta' => "administrador",
            'departamento' => "ISE",
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),            
        ]);

        DB::table('users')->insert([
            'name' => 'Felipe Baeta',
            'email' => 'baetafelipe2@gmail.com',
            'password' => bcrypt(123456789),
            'status' => 'ativo',
            'sexo' => "masculino",
            'tipo_de_conta' => "administrador",
            'departamento' => "ISE",
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),            
        ]);

        DB::table('users')->insert([
            'name' => 'Rafael Teixeira',
            'email' => 'rafael.teixeira@itone.com.br',
            'password' => bcrypt(123456789),
            'status' => 'ativo',
            'sexo' => "masculino",
            'tipo_de_conta' => "usuario",
            'departamento' => "ISE",
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),            
        ]);
    }
}
