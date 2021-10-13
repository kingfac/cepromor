<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use App\Models\objet;

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
        objet::create(['lib'=> 'Devenir partenaire']);
        objet::create(['lib'=> 'Faire un don en nature']);
    }
}
