<?php

namespace Database\Seeders;

use App\Enums\NewsStatus;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class StatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \DB::table('statuses')->insert([
            ['name' => NewsStatus::DRAFT],
            ['name' => NewsStatus::PUBLISHED]
        ]);
    }
}