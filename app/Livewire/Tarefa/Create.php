<?php

namespace App\Livewire\Tarefa;

use App\Models\Tarefa;
use Livewire\Component;

class Create extends Component
{
    public $nome;
    public $data_hora;
    public $descricao;


    public function render() 
    {

        return view('livewire.tarefa.create');
    }

    public function store(){
      Tarefa::Create([
        'nome'=>$this->nome, //this serve para chamar a variável , acessa algo de dentro da classe
        'data_hora'=>$this->data_hora, // o dd serviu para mostrar se estava gravando as informações
        'descricao'=>$this->descricao
        
      ]);

      session()->flash('success' , 'Cadastro Realizado');

    }

   


}
