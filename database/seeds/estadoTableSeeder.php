<?php

use Illuminate\Database\Seeder;

class estadoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $array = ["Activo", "Inactivo"];
        for ($i = 0; $i < 2; $i++) {
            DB::table('catestado')->insert([
                'estado' => $array[$i],
            ]);
        }
    }
}
