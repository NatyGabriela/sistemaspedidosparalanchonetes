<?php

use App\Livewire\CadastroCliente;
use App\Models\Cliente;
use Illuminate\Support\Facades\Route;




Route::get('/cliente/create', Cliente::class);
