@extends('layouts.app')

@section('content')

            <x-navbar />

                <div class="container" style="margin-top:175px">

                    <div class="flex items-center justify-start mt-4 container" style="margin-top: 150px">                            
                        <a href="/admin" class="btn btn-outline-danger mb-5" type="submit">Voltar</a>
                    </div>
                    
                    @if($errors->any())
                        <h4 class="mb-5">{{ $errors->first() }}</h4>
                    @endif
                    
                    <form method="POST" action="{{ route('post_rota_mg') }}" enctype="multipart/form-data">
                        @csrf
                                
                        <label for="route_id">ID Rota</label>
                        <input class="form-control" id="route_id" class="block mt-1" type="text" name="route_id" style="width: 25%" required />
                        
                        <button class="btn btn-outline-primary mx-3 mt-3" type="submit">Enviar MG</button>
                    </form>
                    
                    <form class="mt-5" method="POST" action="{{ route('post_rota_ba') }}" enctype="multipart/form-data">
                        @csrf
                                
                        <label for="route_id">ID Rota</label>
                        <input class="form-control" id="route_id" class="block mt-1" type="text" name="route_id" style="width: 25%" required />
                        
                        <button class="btn btn-outline-success mx-3 mt-3" type="submit">Enviar BA</button>
                    </form>
                    
                </div>
                
@endsection