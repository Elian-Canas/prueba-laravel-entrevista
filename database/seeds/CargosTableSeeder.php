<?php

use Illuminate\Database\Seeder;

class CargosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = array(
            [
                'id'           => null,
                'nombre'       => 'Ingeniero de soporte'
            ],
            [
                'id'           => null,
                'nombre'       => 'Ingeniero de desarrollo'
            ],
            [
                'id'           => null,
                'nombre'       => 'Practicante'
            ],
            [
                'id'           => null,
                'nombre'       => 'Coordinador'
            ],
            [
                'id'           => null,
                'nombre'       => 'Gerente'
            ],
            [
                'id'           => null,
                'nombre'       => 'Contador'
            ],
            [
                'id'           => null,
                'nombre'       => 'Revisor fiscal'
            ],
        );
        App\Cargo::insert($data);
    }
}
