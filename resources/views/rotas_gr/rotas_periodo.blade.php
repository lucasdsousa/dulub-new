@extends('layouts.app')

@section('content')
    <x-navbar />

    <div class="container mt-5">
        <a href="/Rotas-GR" class="btn btn-outline-danger mb-5 mt-5" type="submit">Voltar</a>
    </div>
    
    <div class="container">
        <table class="table table-hover table-bordered">
            <thead>
                <tr>
                <th scope="col">Data</th>
                <th scope="col">Placa</th>
                <th scope="col">Motorista</th>
                <th scope="col">Unidade</th>
                <th scope="col">ID Vuupt</th>
                <th scope="col">Status</th>
                <th scope="col">SM</th>
                </tr>
            </thead>
            <tbody>
                @for($i=0; $i<count($id_rotas_server); $i++)  
                    @if(is_numeric($rotas_server[$i]['msg'][0]))
                        <tr>
                        <th scope="row" style="color:green">{{ $rotas_server[$i]['data'] }}</th>
                        <td style="color:green">{{ $rotas_server[$i]['placa'] }}</td>
                        <td style="color:green">{{ $rotas_server[$i]['driver'] }}</td>
                        <td style="color:green">{{ $rotas_server[$i]['base'] }}</td>
                        <td style="color:green">{{ $rotas_server[$i]['id_rota'] }}</td>
                        <td style="color:green">{{ substr($rotas_server[$i]['msg'], 8) }}</td>
                        <td style="color:green">{{ substr($rotas_server[$i]['msg'], 0, 7) }}</td>
                        </tr>
                    @else 
                        <tr>
                        <th scope="row" style="color:red">{{ $rotas_server[$i]['data'] }}</th>
                        <td style="color:red">{{ $rotas_server[$i]['placa'] }}</td>
                        <td style="color:red">{{ $rotas_server[$i]['driver'] }}</td>
                        <td style="color:red">{{ $rotas_server[$i]['base'] }}</td>
                        <td style="color:red">{{ $rotas_server[$i]['id_rota'] }}</td>
                        <td style="color:red">{{ $rotas_server[$i]['msg'] }}</td>
                        <td style="color:red">N/A</td>
                        </tr>
                    @endif
                @endfor
            </tbody>
        </table>
    </div>

@endsection