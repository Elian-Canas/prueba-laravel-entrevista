<?php

use Illuminate\Database\Seeder;

class EmpleadoSeeder extends Seeder
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
                'id' => null,
                'cargo_id' => '3',
                'nombres' => 'Elian Santiago',
                'p_apellido' => 'Cañas',
                's_apellido' => 'Barragan',
                'email' => 'eliansa123@gmail.com',
                'direccion' => 'Mz B casa 5 Vasconia Reservado',
                'telefono' => '3165788961',
                'fecha_ingreso' => '2024/02/20',
                'salario' => '2000000'
            ],

            [
                'id' => null,
                'cargo_id' => '1',
                'nombres' => 'David Felipe',
                'p_apellido' => 'Cañas',
                's_apellido' => 'Barragan',
                'email' => 'david@gmail.com',
                'direccion' => 'Mz B casa 5 Vasconia Reservado',
                'telefono' => '3213292928',
                'fecha_ingreso' => '2024/01/10',
                'salario' => '1800000'
            ],

            [
                'id' => null,
                'cargo_id' => '5',
                'nombres' => 'Milton Hernando',
                'p_apellido' => 'Otavo',
                's_apellido' => 'Varon',
                'email' => 'milton@gmail.com',
                'direccion' => 'Mz A casa 3 Valparaiso',
                'telefono' => '3112002546',
                'fecha_ingreso' => '2022/02/10',
                'salario' => '4000000'
            ],

            [
                'id' => null,
                'cargo_id' => '2',
                'nombres' => 'Hernando',
                'p_apellido' => 'Cañas',
                's_apellido' => 'Florez',
                'email' => 'hernando@gmail.com',
                'direccion' => 'Mz B casa 5 Vasconia Reservado',
                'telefono' => '3156737077',
                'fecha_ingreso' => '2023/12/05',
                'salario' => '2500000'
            ],

            [
                'id' => null,
                'cargo_id' => '4',
                'nombres' => 'Luz Neida',
                'p_apellido' => 'Barragan',
                's_apellido' => 'Garcia',
                'email' => 'luz@gmail.com',
                'direccion' => 'Mz B casa 5 Vasconia Reservado',
                'telefono' => '3177823944',
                'fecha_ingreso' => '2024/02/20',
                'salario' => '2000000'
            ],


        );
        App\Empleado::insert($data);

    }
}
