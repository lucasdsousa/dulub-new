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
                <form method="POST" action="/cadastrar" enctype="multipart/form-data">
                    @csrf
                    
                    <div class="mb-3 row">
                        <label for="name" class="col-sm-2 col-form-label">Nome</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control w-75" name="name" id="name" placeholder="Nome Sobrenome" required autofocus>
                        </div>
                    </div>
                      <div class="mb-3 row">
                        <label for="staticEmail" class="col-sm-2 col-form-label">Email</label>
                        <div class="col-sm-10">
                          <input type="email" class="form-control w-75" name="email" id="staticEmail" placeholder="email@dulub.com.br" required>
                        </div>
                      </div>
                      <div class="mb-3 row">
                        <label for="setor" class="col-sm-2 col-form-label">Setor </label>
                        <select class="form-select w-50" name="setor" aria-label="Default select example" required>
                          <option selected disabled>Selecione o setor</option>
                            @foreach($setores as $s)
                                <option value="{{ $s->setor }}">{{ $s->setor }}</option>
                            @endforeach
                        </select>
                      </div>
                      <br>
                      <div class="col-sm-4">
                          <p><strong>Relatórios</strong></p>
                          <hr>
                          <br>
                        </div>
                        @foreach($relatorios as $r)
                      <div class="mb-3 row form-check">
                          <div class="col-sm-2">
                            <input class="form-check-input" type="checkbox" name="{{ $r->nome }}" value="{{ $r->nome }}" id="flexCheckDefault">
                            <label class="form-check-label" for="flexCheckDefault">
                              {{ $r->nome }}
                            </label>
                          </div>
                      </div>
                        @endforeach
                        <hr>
                        <br><br>
                      <div class="mb-3 row">
                        <label for="senha" class="col-sm-2 col-form-label">Senha</label>
                        <div class="col-sm-10">
                          <input type="password" class="form-control w-75" name="senha" id="senha" required>
                        </div>
                      </div>
                      <div class="mt-3 row">
                          <button type="submit" class="btn btn-sm btn-outline-primary w-25 mx-3">Cadastrar</button>
                      </div>
                </form>
            </div>
        </div>
    </div>

@endsection
