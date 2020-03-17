<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run() {
        $this->call(SectorSeeder::class);
        $this->call(TipoBandejaSeeder::class);
        $this->call(AreaSeeder::class);
        $this->call(BandejaSeeder::class);
        $this->call(GrupoRiesgoSeeder::class);
    }
}
