<?php

use Illuminate\Database\Seeder;

class PatientSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       DB::table('patients')->delete();
       $patients = array(

       		array(
       			'lastname' => 'Marley',
       			'firstname' => 'Cruz',
       			'middlename' => 'Marcel',
       			'age' => '20',
       			'sex' => 'Female',
       			'civilstatus' => 'Single',
       			'address' => '4057 Bee Street, Norton Shores Michigan',
       			'contact' => '231-780-2843',
       			'occupation' => 'Help-desk technician',
       		),

       		array(
       			'lastname' => 'Yang',
       			'firstname' => 'Gilberto',
       			'middlename' => 'Goro',
       			'age' => '26',
       			'sex' => 'Male',
       			'civilstatus' => 'Married',
       			'address' => '3930 Ferry Street, Cedar Bluff Alabama',
       			'contact' => '256-779-1259',
       			'occupation' => 'Mortgage banker',
       		),

       		array(
       			'lastname' => 'Lange',
       			'firstname' => 'Tomas',
       			'middlename' => 'Jordan',
       			'age' => '22',
       			'sex' => 'Male',
       			'civilstatus' => 'Single',
       			'address' => '889 Daylene Drive, GRAND RAPIDS Minnesota',
       			'contact' => '734-549-8959',
       			'occupation' => 'Cementing and gluing machine operator',
       		),

       		array(
       			'lastname' => 'Austin',
       			'firstname' => 'Jane',
       			'middlename' => 'Aric',
       			'age' => '24',
       			'sex' => 'Female',
       			'civilstatus' => 'Married',
       			'address' => '4611 Despard Street, Dunwoody Georgia',
       			'contact' => '404-774-1601',
       			'occupation' => 'Database administrator',
       		),

       		array(
       			'lastname' => 'Beltran',
       			'firstname' => 'Susan',
       			'middlename' => 'Troy',
       			'age' => '29',
       			'sex' => 'Female',
       			'civilstatus' => 'Married',
       			'address' => '4737 D Street, Bloomfield Township Michigan',
       			'contact' => '586-480-6577',
       			'occupation' => 'Industrial designer',
       		),

       		array(
       			'lastname' => 'Reed',
       			'firstname' => 'Vivian',
       			'middlename' => 'Pronc',
       			'age' => '23',
       			'sex' => 'Female',
       			'civilstatus' => 'Single',
       			'address' => '2161 Northwest Boulevard, River Edge New Jersey',
       			'contact' => '201-986-5791',
       			'occupation' => 'Measurer',
       		),

       		array(
       			'lastname' => 'Whitted',
       			'firstname' => 'Martin',
       			'middlename' => 'Pastina',
       			'age' => '32',
       			'sex' => 'Male',
       			'civilstatus' => 'Separated',
       			'address' => '1179 Horizon Circle, Kent Washington',
       			'contact' => '253-639-8888',
       			'occupation' => 'Fish cutter',
       		),

       		array(
       			'lastname' => 'Egan',
       			'firstname' => 'Brenda',
       			'middlename' => 'Huiller',
       			'age' => '26',
       			'sex' => 'Female',
       			'civilstatus' => 'Married',
       			'address' => '3308 Church Street, New York',
       			'contact' => '718-414-3737',
       			'occupation' => 'Dredge operator',
       		),

       		array(
       			'lastname' => 'Woodson',
       			'firstname' => 'Emma',
       			'middlename' => 'Jose',
       			'age' => '40',
       			'sex' => 'Female',
       			'civilstatus' => 'Married',
       			'address' => '2433 Pick Street, Aurora Colorado',
       			'contact' => '970-643-6289',
       			'occupation' => 'Head hunter',
       		),

       		array(
       			'lastname' => 'Hil',
       			'firstname' => 'Noreen',
       			'middlename' => 'Morgan',
       			'age' => '28',
       			'sex' => 'Female',
       			'civilstatus' => 'Married',
       			'address' => '982 Taylor Street, ZALMA Missouri',
       			'contact' => '914-686-4056',
       			'occupation' => 'Literary interpreter',
       		),
       	);
     DB::table('patients')->insert($patients);
    }
}
