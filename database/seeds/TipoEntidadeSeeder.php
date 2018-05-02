<?php

use Illuminate\Database\Seeder;

class TipoEntidadeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table ( 'tb_tipo_entidade' )->insert ( [
            'id' => 1,
            'sg_tipo_entidade' => 'AC Raiz',
            'nm_tipo_entidade' => 'Autoridade Certificadora Raiz'
        ] );
        DB::table ( 'tb_tipo_entidade' )->insert ( [
            'id' => 2,
            'sg_tipo_entidade' => 'AC 1º Nível',
            'nm_tipo_entidade' => 'Autoridade Certificadora de 1º Nível'
        ] );
        DB::table ( 'tb_tipo_entidade' )->insert ( [
            'id' => 3,
            'sg_tipo_entidade' => 'AC 2º Nível',
            'nm_tipo_entidade' => 'Autoridade Certificadora de 2º Nível'
        ] );
        DB::table ( 'tb_tipo_entidade' )->insert ( [
            'id' => 4,
            'sg_tipo_entidade' => 'AR',
            'nm_tipo_entidade' => 'Autoridade de Registro'
        ] );
        DB::table ( 'tb_tipo_entidade' )->insert ( [
            'id' => 5,
            'sg_tipo_entidade' => 'IT',
            'nm_tipo_entidade' => 'Instalação Técnica'
        ] );
        DB::table ( 'tb_tipo_entidade' )->insert ( [
            'id' => 6,
            'sg_tipo_entidade' => 'ITS',
            'nm_tipo_entidade' => 'Instalação Técnica Secundária'
        ] );
        DB::table ( 'tb_tipo_entidade' )->insert ( [
            'id' => 7,
            'sg_tipo_entidade' => 'PP',
            'nm_tipo_entidade' => 'Posto Provisório'
        ] );
        DB::table ( 'tb_tipo_entidade' )->insert ( [
            'id' => 8,
            'sg_tipo_entidade' => 'ACT',
            'nm_tipo_entidade' => 'Autoridade de Carimbo de Tempo'
        ] );
        DB::table ( 'tb_tipo_entidade' )->insert ( [
            'id' => 9,
            'sg_tipo_entidade' => 'PSC',
            'nm_tipo_entidade' => 'Prestador de Serviço de Confiança'
        ] );
        DB::table ( 'tb_tipo_entidade' )->insert ( [
            'id' => 10,
            'sg_tipo_entidade' => 'PSS',
            'nm_tipo_entidade' => 'Prestador de Serviço de Suporte'
        ] );
        DB::table ( 'tb_tipo_entidade' )->insert ( [
            'id' => 11,
            'sg_tipo_entidade' => 'PSBio',
            'nm_tipo_entidade' => 'Prestador de Serviço Biométrico'
        ] );
    }
}
