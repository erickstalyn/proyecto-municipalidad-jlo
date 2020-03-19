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
        DB::table('tramite')->insert(array(array(
            'id' => 1,
            'descripcion' => 'Tramite para la APERTURA del certificado de LICENCIA DE FUNCIONAMIENTO',
            'requisito' =>  json_encode([
                                            0 => 'Copia de DNI simple',
                                            1 => '2 fotos tamaño carnet con fondo blanco y a colores',
                                            2 => 'Copia de voucher de pago',
                                            3 => 'Solicitud de declaracion jurada',
                                            4 => 'Copia de comprobante de informacion registrada de la SUNAT',
                                            5 => [
                                                'condicion' => 'Si el giro de negocio es: "Consultorio medico"',
                                                'subrequisito' => [
                                                    0 => 'Copia de certificado de GERESA'
                                                ]
                                            ],
                                            6 => [
                                                'condicion' => 'Si el giro de negocio es: "Galeria", "Venta de alimentos", "Camal"',
                                                'subrequisito' => [
                                                    0 => 'Copia de certificado de SENASA'
                                                ]
                                            ],
                                            7 => [
                                                'condicion' => 'Si el giro de negocio es: "Venta de gas"',
                                                'subrequisito' => [
                                                    0 => 'Copia de certificado de OSINERMING'
                                                ]
                                            ],
                                            8 => [
                                                'condicion' => 'Si el giro de negocio es: "Lavadero de autos"',
                                                'subrequisito' => [
                                                    0 => 'Copia de certificado de EPSEL'
                                                ]
                                            ]
                                        ])
        )));
        
        // TRAMITES DE SALUBRIDAD
        DB::table('tramite')->insert(array(array(
            'id' => 2,
            'descripcion' => 'Tramite para la APERTURA del certificado de SALUBRIDAD',
            'requisito' =>  json_encode([
                                            0 => 'Copia de DNI simple',
                                            1 => 'Copia de comprobante de informacion registrada de la SUNAT',
                                            2 => 'Documento de adquisicion o titulo profesional',
                                            3 => 'Copia de voucher de pago',
                                            4 => 'Copia de certificado de fumigacion'
                                        ])
        ), array(
            'id' => 3,
            'descripcion' => 'Tramite para la RENOVACION del certificado de SALUBRIDAD',
            'requisito' =>  json_encode([
                                            0 => 'Certificado de salubridad vencido',
                                            1 => 'Copia de voucher de pago de acuerdo a la categoria'
                                        ])
        )));
        
        // // TRAMITES DE DEFENSA CIVIL
        DB::table('tramite')->insert(array(array(
            'id' => 4,
            'descripcion' => 'Tramite para la APERTURA del certificado de DEFENSA CIVIL',
            'requisito' =>  json_encode([
                                            0 => 'Copia de DNI simple',
                                            1 => 'Documento de adquisicion o titulo profesional',
                                            2 => 'Copia de voucher de pago',
                                            3 => 'Copia de comprobante de informacion registrada de la SUNAT',
                                            4 => 'Copia de certificado de fumigacion'
                                        ])
        ), array(
            'id' => 5,
            'descripcion' => 'Tramite para la RENOVACION del certificado de DEFENSA CIVIL',
            'requisito' =>  json_encode([
                                            0 => 'Copia de DNI simple',
                                            1 => 'Copia de voucher de pago',
                                            2 => [
                                                'condicion' => 'Si el riesgo es alto o muy alto: ',
                                                'subrequisito' => [
                                                    0 => 'Expediente tecnico',
                                                    1 => 'Planos del establecimiento',
                                                    2 => 'Certificacion de puesta a tierra',
                                                    3 => 'Certificado de defensa civil vencido'
                                                ]
                                            ]
                                        ])
        )));
    }
}
