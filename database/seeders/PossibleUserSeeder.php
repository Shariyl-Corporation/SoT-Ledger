<?php

namespace Database\Seeders;

use App\Models\PossibleUser;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PossibleUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $names = [
            'GIVANDRA HAIKAL ADJIE',
            'AXELLIANO RAFAEL SITUMEANG',
            'DIMAS FAWWAZ PRABOWO KUSUMAJI',
            'FAIZAL HUSAIN ADIASHA',
            'LUCIANO RIZKY PRATAMA',
            'MUHAD DZAKI PRASETYO',
            'NAUFAL DZAKI IMTIYAZ',
            'ZIDAN RAFINDRA UTOMO'
        ];

        foreach ($names as $name) {
            PossibleUser::factory()->create([
                'name' => $name
            ]);
        }
    }
}
