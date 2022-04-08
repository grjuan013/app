<?php

namespace Database\Seeders;

use DB;

use Illuminate\Database\Seeder;



class ResultadosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('resultados')->delete();

        DB::table('resultados')->insert([
            'id_usuario'=> '34',
            'fecha'=> '2022-01-01',
            'transporte'=> '0.4136',
            'vivienda'=> '230.39',
            'alimentacion'=> '15.42213',
            'total' => '246.22573'
        ]);
        DB::table('resultados')->insert([
            'id_usuario'=> '34',
            'fecha'=> '2022-02-01',
            'transporte'=> '0.4136',
            'vivienda'=> '230.39',
            'alimentacion'=> '15.42213',
            'total' => '146.22573'
        ]);
        DB::table('resultados')->insert([
            'id_usuario'=> '34',
            'fecha'=> '2022-03-01',
            'transporte'=> '0.4136',
            'vivienda'=> '230.39',
            'alimentacion'=> '15.42213',
            'total' => '200.22573'
        ]);
    }
}
