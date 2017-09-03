<?php

use Illuminate\Database\Seeder;

class sucursalTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $array = ["Casa Matriz", "Santo Domingo", "Tiscapa"];
        for ($i = 0; $i < 3; $i++) {
            DB::table('catsucursal')->insert([
                'sucursal' => $array[$i],
            ]);
        }
    }
}
