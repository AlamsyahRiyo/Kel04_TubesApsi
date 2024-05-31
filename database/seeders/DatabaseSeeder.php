<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder {
    /**
     * Seed the application's database.
     */
    public function run(): void {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        // buat login
        $user = new User();
        $user->name = "Lathifa";
        $user->email = "lathifa@email.com";
        $user->password = Hash::make("lath");
        $user->save();

        $user = new User();
        $user->name = "Riyo";
        $user->email = "alamsyah@email.com";
        $user->password = Hash::make("magelang");
        $user->save();

        $user = new User();
        $user->name = "Azis";
        $user->email = "ajis@email.com";
        $user->password = Hash::make("boyolali");
        $user->save();

        $user = new User();
        $user->name = "Tiara";
        $user->email = "tita@email.com";
        $user->password = Hash::make("tangerang");
        $user->save();

        $user = new User();
        $user->name = "Celin";
        $user->email = "celin@email.com";
        $user->password = Hash::make("temanggung");
        $user->save();

        $user = new User();
        $user->name = "Steven";
        $user->email = "pepen@email.com";
        $user->password = Hash::make("singkawang");
        $user->save();

        
        $user = new User();
        $user->name = "Berliana";
        $user->email = "ber@email.com";
        $user->password = Hash::make("purwokerto");
        $user->save();

        $this->call([
            KPSeeder::class,
            KKNSeeder::class,
            MBKMSeeder::class,
        ]);
    }
}
