<?php

namespace App\Livewire;

use App\Models\Cliente;
use Livewire\Component;

class CadastroCliente extends Component
{

    protected $rules = [
        'nome' => 'required|string|max:255',
        'cpf' => 'required|cpf|unique:clientes,cpf',
        'email' => 'required|email|unique:clientes,email',
        'telefone' => 'required|string|max:15',
        'endereco' => 'required|string|max:255',
        'senha' => 'required|string|min:8|confirmed',
    ];

    public function create()
    {
        
        Cliente::create([
            'nome' => $this->nome,
            'cpf' => $this->cpf,
            'email' => $this->email,
            'telefone' => $this->telefone,
            'endereco' => $this->endereco,
            'senha' => Hash::make($this->senha),
        ]);

       session()->flash('message', 'Cliente cadastrado com sucesso!');
    }


    public function render()
    {
        return view('livewire.cadastro-cliente');
    }
}


