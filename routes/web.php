<?php

use App\Livewire\Tarefa\Create;
use App\Livewire\Tarefa\Editar;
use App\Livewire\Tarefa\Index;
use Illuminate\Support\Facades\Route;

Route::get('/tarefa/create', Create::class); //chamando a função render

Route::get('/tarefa/index' , Index::class);

Route::get('editar/{id}', Editar::class)->name('tarefa.editar');