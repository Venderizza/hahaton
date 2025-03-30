<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('statuses')->insert([
            ['id' => 1,'name' => "Горячая", 'description' => 'Клиент готов совершить покупку','created_at' => now(), 'updated_at' => now()],
            ['id' => 2,'name' => "Теплая", 'description' => 'Клиент сомневается в покупке','created_at' => now(), 'updated_at' => now()],
            ['id' => 3,'name' => "Холодная", 'description' => 'Клиенту это не нужно','created_at' => now(), 'updated_at' => now()],
        ]);
    }
}
