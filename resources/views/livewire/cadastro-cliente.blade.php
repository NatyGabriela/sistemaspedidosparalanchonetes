<div>
    <form wire:submit.prevent="salvar">
        <div class="form-group">
            <label for="nome">Nome</label>
            <input type="text" id="nome" wire:model="nome" class="form-control">
            @error('nome') <span class="text-danger">{{ $message }}</span> @enderror
        </div>

        <div class="form-group">
            <label for="cpf">CPF</label>
            <input type="text" id="cpf" wire:model="cpf" class="form-control">
            @error('cpf') <span class="text-danger">{{ $message }}</span> @enderror
        </div>

        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" id="email" wire:model="email" class="form-control">
            @error('email') <span class="text-danger">{{ $message }}</span> @enderror
        </div>

        <div class="form-group">
            <label for="telefone">Telefone</label>
            <input type="text" id="telefone" wire:model="telefone" class="form-control">
            @error('telefone') <span class="text-danger">{{ $message }}</span> @enderror
        </div>

        <div class="form-group">
            <label for="endereco">Endereço</label>
            <input type="text" id="endereco" wire:model="endereco" class="form-control">
            @error('endereco') <span class="text-danger">{{ $message }}</span> @enderror
        </div>

        <div class="form-group">
            <label for="senha">Senha</label>
            <input type="password" id="senha" wire:model="senha" class="form-control">
            @error('senha') <span class="text-danger">{{ $message }}</span> @enderror
        </div>

        <button type="submit" class="btn btn-primary mt-2">Cadastrar</button>
    </form>

    @if (session()->has('message'))
        <div class="alert alert-success mt-3">
            {{ session('message') }}
        </div>
    @endif
</div>

