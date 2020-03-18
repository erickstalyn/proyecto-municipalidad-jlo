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
        $this->call('SectorSeeder');
        $this->call('TipoBandejaSeeder');
        $this->call('AreaSeeder');
        $this->call('BandejaSeeder');
        $this->call('GrupoRiesgoSeeder');
        $this->call('RiesgoSeeder');
        $this->call('ConfiguracionSeeder');
        $this->call('TipoCertificadoSeeder');
        $this->call('TipoPuestoSeeder');
        $this->call('TramiteSeeder');
    }
}
