<?php

namespace Database\Seeders;

use App\Models\Usuario;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UsuarioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $cidade = collect(['Presidente Epitácio' , 'Presidente Venceslau', 'Presidente Prudente','Campinas',
         'Sorocaba', 'Piracicaba', 'Florianópolis', 'Salvador', 'Joinville', 'Santos']);
        
        $estado = collect(['São Paulo', 'Minas Gerais', 'Pernanbuco', 'Rio de Janeiro', 'Santa Catarina', 'Paraná' ]);
        for($i = 0; $i <400; $i++){
            Usuario::create([
                'nome'=>'Yan Gabriel' . $i,
                'email'=> $i .'edu@gmail.com',
                'celular'=> '18981529533' ,
                'estado_civil'=>'solteiro',
                'data_nascimento'=> rand(1990, 2005) . '-' . rand(01,12) . '-' .rand(01,28),
                'cidade'=>$cidade->random(),
                'estado'=>$estado->random(),
                'endereco'=>'Rua Cuiabá',
                'cep'=>19470000,
                'password'=>'yan123'

               
            ]);

           
        }
    }
}
