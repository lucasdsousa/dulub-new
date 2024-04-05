@extends('layouts.app')

@section('content')

            <x-navbar />

                <div class="container" style="margin-top:175px">

                    <div class="flex items-center mt-4 container" style="margin-top: 150px">                            
                        <a href="/admin" class="btn btn-outline-danger mb-5" type="submit">Voltar</a>
                    </div>
                    
                    <a class="btn btn-outline-primary mx-3" href="Rotas-GR-Geral">Relatório Geral</a>

                    <button class="btn btn-outline-info mx-3" id="rel-periodo" type="button">Periodo</button>
                    <button class="btn btn-outline-success mx-3" id="rel-driver" type="button">Motorista</button>
                    <button class="btn btn-outline-danger mx-3" id="rel-plate" type="button">Placa</button>
                    <button class="btn btn-outline-warning mx-3" id="rel-base" type="button">Unidade</button>
                    <button class="btn btn-outline-secondary mx-3" id="rel-status" type="button">Status</button>
                </div>

                <div class="container">
                
                <div class="row">
                    <div class="col" id="div-periodo" style="display: none">
                        <form class="mt-5" method="GET" action="{{ route('filtrar_rotas_data') }}" enctype="multipart/form-data">
                            @csrf

                            <!-- Data Address -->
                            <div class="col-sm-3 mb-2">
                                <label for="data_I">Data Inicial</label>
                                <input class="form-control" id="data_I" class="block mt-1" type="date" name="data_I" required>
                            </div>

                            <div class="col-sm-3 mb-2">
                                <label for="data_F">Data Final</label>
                                <input class="form-control" id="data_F" class="block mt-1" type="date" name="data_F" required>
                            </div>

                            <div class="flex items-center justify-start mt-4">
                                <button class="btn btn-outline-info ml-3 mb-5" type="submit">
                                    Buscar Periodo
                                </button>
                            </div>
                        </form>
                    </div>

                    <div class="col" id="div-motorista" style="display: none">
                        <form class="mt-5" action="{{ route('filtrar_rotas_motorista') }}" method="GET" enctype="multipart/form-data">
                            @csrf
                        

                            <div class="row mb-2">
                                <div class="col-sm-8">
                                    <label for="driver">Motorista</label>
                                    <input list="drivers" type="text" name="driver" id="driver">
                                    
                                    <datalist id="drivers">
                                        <option disabled>Motorista</option>
                                        @foreach($response_motorista->data as $m)
                                            <option value="{{ $m->name }}">{{ $m->name }}</option>
                                        @endforeach
                                    </datalist>
                                </div>
                            </div>

                            <div class="flex items-center justify-start mt-4">
                                <button class="btn btn-outline-info ml-3 mb-5" type="submit">
                                    Buscar Motorista
                                </button>
                            </div>
                        </form>
                    </div>

                    <div class="col" id="div-placa" style="display: none">
                        <form class="mt-5" method="GET" action="{{ route('filtrar_rotas_placa') }}" enctype="multipart/form-data">
                            @csrf

                            <div class="col-sm-3 mb-2" id="plate_text">
                                <label for="plate_text">Placa</label>
                                <input list="plates" class="form-control" class="block mt-1" type="text" name="plate_text">
                                
                                <datalist id="plates">
                                    <option disabled>Placa</option>
                                    @foreach($response_placa->data as $p)
                                        <option value="{{ $p->license_plate }}">{{ $p->license_plate }}</option>
                                    @endforeach
                                </datalist>
                            </div>

                            <div class="flex items-center justify-start mt-4">
                                <button class="btn btn-outline-info ml-3 mb-5" type="submit">
                                    Buscar Placa
                                </button>
                            </div>
                        </form>
                    </div>

                    <div class="col" id="div-base" style="display: none">
                        <form class="mt-5" method="GET" action="{{ route('filtrar_rotas_base') }}" enctype="multipart/form-data">
                            @csrf
                            <div class="col-sm-3 mb-2" id="plate_text">
                                <label for="plate_text">Base Inicial</label>
                                <input list="bases" class="form-control" class="block mt-1" type="text" name="base">
                                
                                <datalist id="bases">
                                    <option disabled>Base Inicial</option>
                                    @foreach($response_base->data as $b)
                                        <option value="{{ $b->name }}">{{ $b->name }}</option>
                                    @endforeach
                                </datalist>
                            </div>

                            <div class="flex items-center justify-start mt-4">
                                <button class="btn btn-outline-info ml-3 mb-5" type="submit">
                                    Buscar Unidade
                                </button>
                            </div>
                        </form>
                    </div>

                    <div class="col" id="div-status" style="display: none">
                        <form class="mt-5" method="GET" action="{{ route('filtrar_rotas_status') }}" enctype="multipart/form-data">
                            @csrf
                            <div class="col-sm-3 mb-2" id="plate_text">

                                <!-- Data Address -->
                                <div class="col mb-2">
                                    <label for="data_I">Data Inicial</label>
                                    <input class="form-control" id="data_I" class="block mt-1" type="date" name="data_I" required>
                                </div>
    
                                <div class="col mb-2">
                                    <label for="data_F">Data Final</label>
                                    <input class="form-control" id="data_F" class="block mt-1" type="date" name="data_F" required>
                                </div>
                                
                                <label for="plate_text">Status</label>
                                <input list="status" class="form-control" class="block mt-1" type="text" name="status">
                                
                                <datalist id="status">
                                    <option disabled>Status</option>
                                    <option value="success">Sucesso</option>
                                    <option value="fail_gps">Falha GPS</option>
                                    <option value="fail_cpf">Falha CPF</option>
                                </datalist>
                            </div>

                            <div class="flex items-center justify-start mt-4">
                                <button class="btn btn-outline-info ml-3 mb-5" type="submit">
                                    Buscar Status
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
                
                </div>
        </div>
        

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

        <script>
            $(document).ready(function(){
                $('#group').on('change', function(){
                    var demovalue = $(this).val();

                    if(demovalue != "") {
                        $("#plate_select").hide();
                        $("#plate_text").hide();
                    }
                    else {
                        $("#plate_select").hide();
                        $("#plate_text").show();
                    }
                });
                
                $("#plate_select").on('change', function(){            
                    $("#plate_text").hide();          
                    $("#group").hide();
                });
                
                $("#plate_text").on('change', function(){            
                    $("#plate_select").hide();       
                    $("#group").hide();
                });
                
                $('#rel-geral').on('click', function(){             
                    $("#div-geral").show();         
                    $("#div-motorista").hide();   
                    $("#div-placa").hide();      
                    $("#div-base").hide();    
                    $("#div-status").hide();
                });
                
                $('#rel-periodo').on('click', function(){             
                    $("#div-periodo").show();         
                    $("#div-motorista").hide();   
                    $("#div-placa").hide();      
                    $("#div-base").hide();
                    $("#div-status").hide();
                });

                $('#rel-driver').on('click', function(){    
                    $("#div-motorista").show();           
                    $("#div-periodo").hide();   
                    $("#div-placa").hide();      
                    $("#div-base").hide();
                    $("#div-status").hide();
                });

                $('#rel-plate').on('click', function(){      
                    $("#div-placa").show();        
                    $("#div-periodo").hide();           
                    $("#div-motorista").hide();      
                    $("#div-base").hide();
                    $("#div-status").hide();
                });

                $('#rel-base').on('click', function(){      
                    $("#div-base").show();              
                    $("#div-placa").hide();        
                    $("#div-periodo").hide();           
                    $("#div-motorista").hide();
                    $("#div-status").hide();
                });

                $('#rel-status').on('click', function(){      
                    $("#div-base").hide();              
                    $("#div-placa").hide();        
                    $("#div-periodo").hide();           
                    $("#div-motorista").hide();
                    $("#div-status").show();
                });
                
            });
        </script>

        <!--
        <script>
            function showUser(str) {
            if (str == "") {
                document.getElementById("plate_select").innerHTML = "";
                return;
            } else {
                var xmlhttp = new XMLHttpRequest();
                xmlhttp.onreadystatechange = function() {
                if (this.readyState == 4 && this.status == 200) {
                    document.getElementById("plate_select").innerHTML = this.responseText;
                }
                };
                xmlhttp.open("GET","getuser.php?q="+str,true);
                xmlhttp.send();
            }
            }
        </script> -->
        
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>

@endsection