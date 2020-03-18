<?php

use Illuminate\Database\Seeder;

class TramiteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {

        // TRAMITES DE LICENCIAS
        DB::table('tramite')->create(array(array(
            'id' => 1,
            'descripcion' => 'Tramite para la APERTURA del certificado de LICENCIA DE FUNCIONAMIENTO',
            'requisito' =>  [
                                '0' => 'Copia de DNI simple',
                                '1' => '2 fotos tamaño carnet con fondo blanco y a colores',
                                '2' => 'Copia de voucher de pago',
                                '3' => 'Solicitud de declaracion jurada',
                                '4' => 'Copia de comprobante de informacion registrada de la SUNAT',
                                '5' => 'Si el giro de negocio es: "Consultorio medico", se requiere copia de certificado de GERESA ',
                                '6' => 'Si el giro de negocio es: "Galeria", "Venta de alimentos", "Camal", se requiere copia de certificado de SENASA',
                                '7' => 'Si el giro de negocio es: "Venta de gas", se requiere copia de certificado de OSINERMING',
                                '8' => 'Si el giro de negocio es: "Lavadero de autos", se requiere copia de certificado de EPSEL'
                            ]
        )));
        
        // TRAMITES DE SALUBRIDAD
        // DB::table('tramite')->create(array(array(
        //     'id' => 2,
        //     'descripcion' => 'Tramite para la APERTURA del certificado de SALUBRIDAD',
        //     'requisito' =>  '[
        //                         0: "Copia de DNI simple",
        //                         3: "Copia de comprobante de informacion registrada de la SUNAT",
        //                         1: "Documento de adquisicion o titulo profesional",
        //                         2: "Copia de voucher de pago",
        //                         4: "Copia de certificado de fumigacion"
        //                     ]'
        // ), array(
        //     'id' => 3,
        //     'descripcion' => 'Tramite para la RENOVACION del certificado de SALUBRIDAD',
        //     'requisito' =>  '[
        //                         0: "Certificado de salubridad vencido",
        //                         1: "Copia de voucher de pago de acuerdo a la categoria"
        //                     ]'
        // )));
        
        // // TRAMITES DE DEFENSA CIVIL
        // DB::table('tramite')->create(array(array(
        //     'id' => 4,
        //     'descripcion' => 'Tramite para la APERTURA del certificado de DEFENSA CIVIL',
        //     'requisito' =>  '[
        //                         0: "Copia de DNI simple",
        //                         1: "Documento de adquisicion o titulo profesional"
        //                         2: "Copia de voucher de pago",
        //                         3: "Copia de comprobante de informacion registrada de la SUNAT",
        //                         4: "Copia de certificado de fumigacion"
        //                     ]'
        // )));
    }
}
