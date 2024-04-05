@extends('layouts.app')

@section('content')

<style>
        .reload {
            font-family: Lucida Sans Unicode
        }
</style>

    <x-navbar />
    
    <div class="d-flex aligns-items-center justify-content-center card text-center w-50 mx-auto" style="margin-top:250px">
        <div class="card-header">Login
            <div class="card-body">
                @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div><br />
                @endif
                <form method="POST" action="{{ route('login') }}" enctype="multipart/form-data">
                    @csrf
            
                      <div class="mb-3 row">
                        <label for="staticEmail" class="col-sm-2 col-form-label">Email</label>
                        <div class="col-sm-10">
                          <input type="email" class="form-control" name="email" id="staticEmail" placeholder="email@dulub.com.br" required autofocus>
                        </div>
                      </div>
                      <div class="mb-3 row">
                        <label for="inputPassword" class="col-sm-2 col-form-label">Senha</label>
                        <div class="col-sm-10">
                          <input type="password" class="form-control" name="password" id="inputPassword" required>
                        </div>
                      </div>
                        <div class="mb-3 row">
                            <div class="captcha">
                                <span>{!! captcha_img() !!}</span>
                                <button type="button" class="btn btn-outline-danger" class="reload" id="reload" onClick="window.location.reload();">
                                    &#x21bb;
                                </button>
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <input id="captcha" type="text" class="form-control" placeholder="Digite o Captcha" name="captcha" required>
                        </div>
                      <div class="mt-3 row">
                          <button type="submit" class="btn btn-sm btn-outline-primary w-25 mx-3">Login</button>
                      </div>
                </form>
            </div>
        </div>
    </div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

@endsection
