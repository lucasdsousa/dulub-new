@extends('layouts.app')

@section('content')

    <x-navbar />
    
    <div class="d-flex aligns-items-center justify-content-center card text-center w-50 mx-auto mb-4" style="margin-top:100px">
        <div class="card-header">Cadastro
          
        @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div><br />
        @endif
            <div class="card-body">
                @if (session('status'))
                    <div class="alert alert-success">
                        {{ session('status') }}
                    </div>
                @endif
                <form method="POST" action="{{ route('password.update', [$user->id]) }}" enctype="multipart/form-data">
                    @csrf

                        <div class="mb-3 row">
                        <label for="current_password" class="col-sm-2 col-form-label">Senha Atual</label>
                        <div class="col-sm-10">
                            <input type="password" class="form-control w-75" name="current_password" id="current_password" required>
                        </div>
                        </div>

                        <div class="mb-3 row">
                        <label for="password" class="col-sm-2 col-form-label">Nova Senha</label>
                        <div class="col-sm-10">
                            <input type="password" class="form-control w-75" name="password" id="password" required>
                        </div>
                        </div>

                        <div class="mb-3 row">
                        <label for="password_confirmation" class="col-sm-2 col-form-label">Confirme a Senha</label>
                        <div class="col-sm-10">
                            <input type="password" class="form-control w-75" name="password_confirmation" id="password_confirmation" required>
                        </div>
                        </div>

                        <div class="mb-3 row" style="display: none">
                            <select name="user" id="user">
                                <option selected value="{{ $user->id }}">{{ $user->name }}</option>
                            </select>
                        </div>

                      <div class="mt-3 row">
                          <button type="submit" class="btn btn-sm btn-outline-primary w-25 mx-3">Atualizar</button>
                          <a class="btn btn-sem btn-outline-danger w-25 mx-3" href="/admin">Voltar</a>
                      </div>
                </form>
            </div>
        </div>
    </div>

@endsection
