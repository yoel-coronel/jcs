<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Models\Marca;
use App\Models\Ubigeo;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UserSeeder::class);

       factory(User::class)->times(10)->create();
       factory(Marca::class)->times(100)->create();
       factory(Ubigeo::class)->times(10)->create();
    }
}
