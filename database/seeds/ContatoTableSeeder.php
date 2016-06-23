<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\models\Contato;

class ContatoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('contatos')->delete();

        Contato::create(array(
            'nome' => 'Bruno',
            'telefone' => '9999-2222'
        ));

        Contato::create(array(
            'nome' => 'Sandra',
            'telefone' => '9999-3333'
        ));

        Contato::create(array(
            'nome' => 'Mariana',
            'telefone' => '9999-9999'
        ));        
    }
}
