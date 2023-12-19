<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class AtasanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(User $user): void
    {
        $user->nama_depan   = 'Atasan';
        $user->nama_belakang= 'pertama';
        $user->email        = 'atasan1@gmail.com';
        $user->password     = Hash::make('12345678');
        $user->role_id      = 3;
        $user->save();
    }
}
