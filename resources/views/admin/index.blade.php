@extends('layouts.app')

@section('content')

    <x-navbar />
    
    <div class="d-flex aligns-items-center justify-content-center card text-center w-50 mx-auto" style="margin-top:250px">
        <div class="card-header">{{ $login->name }}
            <div class="card-body">
                <h3 class="mb-5">Escolha o que deseja fazer abaixo.</h3>

                        @if($login->telemetria == 1)
                            <a href="/Telemetria" class="btn btn-success mx-2">Telemetria</a>
                        @endif
                        
                        @if($login->id == 6)
                            <a href="/admin/show" class="btn btn-primary mx-2">Usuários</a>
                        @endif

                        @if($login->id == 8)
                            <a href="/Vagas" class="btn btn-primary mx-2">Vagas</a>
                        @endif

                        @if($login->rotas_gr == 1)
                            <a href="/Rotas-GR" class="btn btn-primary mx-2">Rotas GR</a>
                        @endif
                        
                        @if($login->rotas_gr == 1)
                            <a class="btn btn-danger mx-2" href="Enviar-Rota">Enviar Rota</a>
                        @endif
                        
                        <a class="btn btn-secondary mx-2" href="reset-password/{{ $login->id }}">Alterar Senha</a>

                
                <form method="POST" action="/logout" enctype="multipart/form-data">
                    @csrf
                    
                    <button class="btn btn-outline-danger mt-5" type="submit">Sair</button>
                </form>

            </div>
        </div>
    </div>

@endsection
