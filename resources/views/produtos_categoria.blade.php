<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>Dulub</title>
        <link rel="icon" href="images/Logo - Dulub.svg">
        
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
        
        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

        <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500;800&display=swap" rel="stylesheet"> 
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500&display=swap" rel="stylesheet">
        <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css'>
        
        <!-- Google Fonts -->
        <link rel='stylesheet' href='https://fonts.googleapis.com/css2?family=Source+Sans+Pro:wght@400;700&display=swap'>
                
        <!-- Scripts -->
        <script src="https://kit.fontawesome.com/0043fbe818.js" crossorigin="anonymous"></script>
        @vite(['resources/css/app.css', 'resources/js/app.js'])

    
        <style>
            *{
                font-family: 'Montserrat', sans-serif;
            }
        </style>
    </head>
    
    <body class="antialiased" style="margin-top:70px">

        <style>
            .nav-hover:hover {
                background-color: red;
                transition: 0.5s
            }
            
            #categorias {
                background: #F6F9FC;
            }
            
            #categorias:hover {
                background: red;
                color: white;
                transition: 0.4s;
            }  
            
            #footer {
                padding: 10px 10px 0px 10px;
                bottom: 0;
                width: 100%;
            }     

            hr {
                color: white;
                border: solid 1px white;
                border-radius: 100px;
                width: 1000px;
                margin-right: auto;
                margin-left: auto;
            }
            
            #mobile {
                display: none;
            }
                
            #mobile button {
                display: none;
            }
                
            #mobile div {
                display: none;
            }
        
            @media only screen and (max-width: 768px) {
                #web {
                    display: none;
                }
                
                #web button {
                    display: none;
                }
                
                #web div {
                    display: none;
                }
                
                #mobile {
                    display: block;
                }
                
                #mobile button {
                    display: block;
                }
                    
                #mobile div {
                    display: block;
                }
            }
        </style>

<!-- ///////////////// NAVBAR //////////////////// -->
<style>
  .nav-hover:hover {
    background-color: red;
    transition: 0.5s
  }
  
  .navbar-brand {
      margin-left: -75px;
  }
  
  #ig-mobile {
      display:none;
  }
  
  @media only screen and (max-width: 768px) {
      .navbar-brand {
          margin-left: -5rem;
      }
  
      #ig-web {
          display: none;
      }
      
      #ig-mobile {
          display: block;
      }
      
      #trabalhe_conosco {
          width: 50%;
          margin-left: 5rem;
      }
      
      #restrita {
          margin-left: 6rem;
      }
  }
</style>

<nav class="navbar navbar-expand-lg shadow fixed-top" id="navbar" style="background-color: black">
    <div class="container" style="margin-left:5rem; height:4rem">
      <a class="navbar-brand" href="/">
        <img src="images/Logo DULUB.png" alt="" width="100">
      </a>
      
        <strong><a class="nav-link text-light text-nowrap" id="ig-mobile" href="https://www.instagram.com/duluboficial/" target="_blank" style="font-size:25px; margin-left: 9rem;"><i class="fab fa-instagram"></i></a></strong>

      <button class="navbar-toggler" style="margin-right:20px; width:15%" type="button" data-bs-toggle="collapse" data-bs-target="#navbar-content" aria-controls="navbar-content" aria-expanded="false" aria-label="Toggle navigation">
        <span><img src="images/mobile/3 traços.svg" style="width:200%;"></span>
      </button>
      
      <div class="collapse navbar-collapse" id="navbar-content" style="margin-left:25px">
        <ul class="navbar-nav mr-auto mb-2 mb-lg-0">
          <li class="nav-item mx-auto">
            <a class="nav-link active me-4 text-nowrap" aria-current="page" href="/" style="color: red; font-size:14px">HOME</a>
          </li>
          
          <li class="nav-item mx-auto">
            <a class="nav-link me-4 text-light nav-hover text-nowrap" href="/Empresa" style="font-size:14px">A DUNAX</a>
          </li>
          
          <li class="nav-item mx-auto">
            <a class="nav-link me-4 link-light nav-hover text-nowrap" href="/Produtos" style="font-size:14px">PRODUTOS</a>
          </li>
          
          <li class="nav-item mx-auto">
            <a class="nav-link me-4 text-light nav-hover text-nowrap" href="/Catalogos" style="font-size:14px">CATÁLOGOS</a>
          </li>
          
          <li class="nav-item mx-auto">
            <a class="nav-link me-4 text-light nav-hover text-nowrap" href="/Renox" style="font-size:14px">ARLA 32</a>
          </li>
          
          <li class="nav-item mx-auto">
            <a class="nav-link me-4 text-light nav-hover" text-nowrap href="/Comercial" style="font-size:14px">COMERCIAL</a>
          </li>
          
          <!--
          <li class="nav-item">
            <a class="nav-link me-5 text-light nav-hover" href="http://dulub.servehttp.com:4040" style="font-size:14px; white-space: nowrap;">ÁREA RESTRITA</a>
          </li>-->
          
          <li class="nav-item mx-auto">
            <strong><a class="nav-link text-light text-nowrap" id="ig-web" href="https://www.instagram.com/duluboficial/" target="_blank" style="font-size:14px;"><i class="fab fa-instagram"></i> DULUBOFICIAL</a></strong>
          </li>
          
          <li class="nav-item" id="trabalhe_conosco">
            <a class="nav-link btn text-light text-nowrap" href="/Trabalhe-Conosco" style="background-color:red; border-radius:0 !important; font-size:14px">TRABALHE CONOSCO</a>
          </li>
          
          <li class="nav-item" id="restrita">
            <a class="nav-link mx-3 text-nowrap" href="/admin">
                <span class="badge bg-light text-danger">Área Restrita
                </span>
            </a>
          </li>
        </ul>
      </div>
    </div>
  </nav>


        <img src="images/Banner - Produtos.png" style="width:100%" alt="">

        <div class="container mb-5 mt-3">
            <a class="text-decoration-none" href="/" style="color: red;">HOME</a> > <a class="text-decoration-none text-dark" href="#">PRODUTOS</a>
        </div>

        <div clas="container mb-5">
            <h1 style="text-align: center; color: red"><strong>Nossos Produtos</strong></h1>
            <div class="container mt-4">
                <h5 class="mb-5" style="text-align: center; color:#A9ABAE">Mantenha o foco em seu destino, enquanto os produtos Dulub cuidam da performance, economia de combustível e vida útil do motor de seu veículo. 
                                    A marca Dulub apresenta um portfolio completo de lubrificantes para o seu veículo, máquina ou equipamento.</h5>
            </div>
            
        </div>

        <div class="d-grid gap-2 col-9 mx-auto mb-5" id="web">
                    <button class="btn" id="categorias" style="text-align:left; border-radius:0 !important;" type="button" data-bs-toggle="collapse" data-bs-target="#collapse_{{ $categorias->id }}" aria-expanded="false" aria-controls="collapse_{{ $categorias->id }}">
                        {{ $categorias->nomeCategoria }}
                    </button>
                    <div class="collapse mb-3" id="collapse_{{ $categorias->id }}">
                            @foreach($produtos as $p)
                                @if($p->categoria_id == $categorias->id)
                            <div class="card card-body mb-4" style="background-color: #F6F9FC; border-radius:0 !important;">
                                    <div class="row" style="background-color: #F6F9FC;">
                                        <div class="col">
                                            <img class="w-100 d-block" src="{{ asset($p->imagem) }}" alt="">
                                        </div>
                                        <div class="col-8 mt-5">
                                            @if( $p->id > 78 && $p->id < 83 )
                                                <h3 style="display: inline;"><strong>{{ substr($p->nome, 0 ,13) }}   </strong></h3>
                                                <h5 style="display: inline;"><strong>{{ substr($p->nome, 14) }}</strong></h5>
                                                <br><br>
                                            @else
                                                <h3 style="padding-right:50px"><strong>{{ $p->nome }}</strong></h3>
                                            @endif
                                            
                                            <p style="text-align:justify; padding-right:50px">{{ $p->descricao }}</p>
                                            
                                            @if(isset($p->comp_quimica))
                                                <p style="text-align:justify; padding-right:50px"><strong>Composição Química:</strong> {{ $p->comp_quimica }}</p>
                                            @endif
                                            
                                            @if($p->id < 70)
                                                <p><strong>VISCOSIDADE:</strong> {{ $p->viscosidade }}</p>
                                            @elseif($p->categoria_id == 9)
                                                <p><strong>GRAU NLGI:</strong> {{ $p->viscosidade }}</p>
                                            @endif
                                            
                                            <img class="d-block w-25 me-5" src="{{ asset($p->tamanhos) }}" alt="" style="float:right">
                                            <div class="container" style="float:right; margin-right:20px">
                                                <a class="btn me-3 mt-5 mb-4" href="{{ asset($p->ficha) }}" download style="color:white; background-color:#333333; float:right; border-radius:0 !important">Ver Ficha Técnica<i class="fa-light fa-list-tree"></i></a>
                                                <a class="btn me-3 mt-5 mb-4" href="{{ asset($p->fispq) }}" download style="color:white; background-color:red; float:right; border-radius:0 !important">BAIXAR FISPQ</a>
                                            </div> 
                                        </div>
                                    </div>
                        </div>
                                @endif
                            @endforeach
                    </div>
        </div>
        
        <div class="d-grid gap-2 col-9 mx-auto mb-5" id="mobile">
                    <button class="btn" id="categorias" style="text-align:left; border-radius:0 !important;" type="button" data-bs-toggle="collapse" data-bs-target="#collapse_{{ $categorias->id }}" aria-expanded="false" aria-controls="collapse_{{ $categorias->id }}">
                        {{ $categorias->nomeCategoria }}
                    </button>
                    <div class="collapse mb-3" id="collapse_{{ $categorias->id }}">
                            @foreach($produtos as $p)
                                @if($p->categoria_id == $categorias->id)
                            <div class="card card-body mb-4" style="background-color: #F6F9FC; border-radius:0 !important;">
                                    <div style="background-color: #F6F9FC;">
                                        <div>
                                            <img class="w-100 d-flex" src="{{ asset($p->imagem) }}" alt="">
                                        </div>
                                        <div class="mt-5" style="align-items: center; justify-content: center;">
                                            @if( $p->id > 78 && $p->id < 83 )
                                                <h3 style="display: flex;"><strong>{{ substr($p->nome, 0 ,13) }}   </strong></h3>
                                                <h5 style="display: flex;"><strong>{{ substr($p->nome, 14) }}</strong></h5>
                                                <br><br>
                                            @else
                                                <h3><strong>{{ $p->nome }}</strong></h3>
                                            @endif
                                            
                                            <p style="text-align:justify;">{{ $p->descricao }}</p>
                                            
                                            @if(isset($p->comp_quimica))
                                                <p style="text-align:justify;"><strong>Composição Química:</strong> {{ $p->comp_quimica }}</p>
                                            @endif
                                            
                                            @if($p->id < 70)
                                                <p><strong>VISCOSIDADE:</strong> {{ $p->viscosidade }}</p>
                                            @elseif($p->categoria_id == 9)
                                                <p><strong>GRAU NLGI:</strong> {{ $p->viscosidade }}</p>
                                            @endif
                                            
                                            <img class="d-block w-100 mx-auto" src="{{ asset($p->tamanhos) }}" alt="">
                                            <div class="container-fluid" style="algin-items: center; justify-content: center;">
                                                <a class="btn mx-auto mt-5" href="{{ asset($p->ficha) }}" download style="color:white; background-color:#333333; border-radius:0 !important">Ver Ficha Técnica<i class="fa-light fa-list-tree"></i></a>
                                                <a class="btn mx-auto mt-5" href="{{ asset($p->fispq) }}" download style="color:white; background-color:red; border-radius:0 !important">BAIXAR FISPQ</a>
                                            </div> 
                                        </div>
                                    </div>
                        </div>
                                @endif
                            @endforeach
                    </div>
        </div>

        <img class="mb-5 d-block mx-auto" src="images/POWERED BY DULUB.png" alt="" style="width:15%;">



        <!-- ///////////////// FOOTER //////////////////// -->
<style>    
    #footer-web {
        padding: 10px 10px 0px 10px;
        bottom: 0;
        width: 100%;
    }   
    
    #footer-mobile {
        display: none;
    }  

    hr {
        color: white;
        border: solid 1px white;
        border-radius: 100px;
        width: 1000px;
        margin-right: auto;
        margin-left: auto;
    }
    
    @media only screen and (max-width: 768px) {
        #footer-web {
            display:none;
        }
        
        #footer-mobile {
            display: block;
        }

        #hr {
            color: white;
            border: solid 1px white;
            width: 300px;
            margin-bottom: auto;
            margin-top: auto;
        }
    }
</style>

<div id="footer-web" class="container-fluid" style="background-color: black; height:340px">
    <div class="container">
        <img class="d-block mx-auto mb-2 mt-3" src="images/Logo - Rodapé.svg" alt="" style="width:15%">
        <div class="container text-center mb-2">
            <h3 style="display: inline; color:white"><strong>85</strong> </h3><h2 style="display: inline; color:white"><strong>3275.3070 / 0800 730 30 70</strong></h2>
        </div>
        <h6 class="text-center mb-4" style="color:white">
            <a class="text-decoration-none me-2" href="/Comprar-Dulub" style="color:white">COMO COMPRAR</a> | 
            <a class="text-decoration-none me-2 ms-2" href="/Vender-Dulub" style="color:white">COMO VENDER</a> | 
            <a class="text-decoration-none me-2 ms-2" href="/Produtos" style="color:white">PRODUTOS</a> | 
            <a class="text-decoration-none me-2 ms-2" href="/Renox" style="color:white">ARLA 32</a> | 
            <a class="text-decoration-none me-2 ms-2" href="/Catalogos" style="color:white">DOWNLOADS</a> | 
            <a class="text-decoration-none me-2 ms-2" href="/Comercial" style="color:white">COMERCIAL</a> 
        </h6>
    </div>

    <div class="container-fluid" style="background:#0F0F0F">
        <h6 class="text-center" style="color:white; padding-top:15px; padding-bottom:15px">DUNAX LUBRIFICANTES LTDA. Núcleo CIS, Lote 02, Quadra 03 - S/N - São Gonçalo dos Campos - BA - CEP 44.330-000</h6>
    </div>
    
    <div class="container mt-4">
        <p style="text-align:center; font-size: 12px; color:white;">&copy 2022 Todos os direitos reservados.</p>
        <p style="text-align:center; font-size: 12px; color:white; margin-top:-15px;">Design by <a class="text-decoration-none" href="#">Paulo Vinícius</a> e Desenvolvimento por <a class="text-decoration-none" href="#">Lucas Santana</a></p>
    </div>       
</div>

<!-- /////////////////////////////////// -->

<div id="footer-mobile" class="container-fluid" style="background-color: black; height:auto">
    <div class="container">
        <div class="row">
            <div class="col" style="margin-top: 10px">
                <img class="d-block mb-4" src="images/Logo - Rodapé.svg" alt="" style="width:150%;">
            </div>
            <div class="col"></div>
            <div class="col">
                <strong><a class="nav-link text-light text-nowrap" href="https://www.instagram.com/duluboficial/" target="_blank" style="font-size:40px; margin-top: 20px"><i class="fab fa-instagram"></i></a></strong>
            </div>
        </div>
        
        <h5 class="ms-4 mb-3" style="color:white">
            <strong><a class="text-decoration-none me-2 ms-2" href="/Comprar-Dulub" style="color:white">COMO COMPRAR</a></strong>
        </h5>
        <div class="ms-3 mb-3" id="hr"></div>
        <h5 class="ms-4 mb-3" style="color:white">
            <strong><a class="text-decoration-none me-2 ms-2" href="/Vender-Dulub" style="color:white">COMO VENDER</a></strong>
        </h5>
        <div class="ms-3 mb-3" id="hr"></div>
        <h5 class="ms-4 mb-3" style="color:white">
            <strong><a class="text-decoration-none me-2 ms-2" href="/Produtos" style="color:white">PRODUTOS</a></strong>
        </h5>
        <div class="ms-3 mb-3" id="hr"></div>
        <h5 class="ms-4 mb-3" style="color:white">
            <strong><a class="text-decoration-none me-2 ms-2" href="/Renox" style="color:white">ARLA 32</a></strong>
        </h5>
        <div class="ms-3 mb-3" id="hr"></div>
        <h5 class="ms-4 mb-3" style="color:white">
            <strong><a class="text-decoration-none me-2 ms-2" href="/Catalogos" style="color:white">DOWNLOADS</a></strong>
        </h5>
        <div class="ms-3 mb-3" id="hr"></div>
        <h5 class="ms-4 mb-3" style="color:white">
            <strong><a class="text-decoration-none me-2 ms-2" href="/Comercial" style="color:white">COMERCIAL</a> </strong>
        </h5>
    </div>
    
    <div class="container">
        <img class="d-block mx-auto" src="images/mobile/Powered by Dulub bk.png" alt="" style="width:100%;">
    </div>       
</div>



        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    </body>
</html>



