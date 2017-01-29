<?php

use Illuminate\Database\Seeder;

class TypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('account_types')->delete();
        $types = array(
      		'type' => 'Administrator'
        );
      	DB::seed('account_types')->insert($types);
    }
}
