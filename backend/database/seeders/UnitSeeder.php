<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UnitSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = ['Pcs', 'Dus', 'Box', 'Pack', 'Kg', 'Ltr'];

        foreach ($data as $item) {
            \App\Models\Unit::create([
                'name' => $item,
            ]);
        }
    }
}
