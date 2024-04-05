@extends('layouts.app')

<style>
    .background-web {
        background-image: url('images/IMAGEM FUNDO - TRABALHE CONOSCO.png');
        background-position: center;
        height:1500px;
        background-repeat: no-repeat;
        background-size: cover;
        position: relative;
    }
    
    #mobile {
        display: none;
    }
    
    @media only screen and (max-width: 768px) {
        .background-mobile {
            background-image: url('images/mobile/Faça parte da nossa equipe.png');
            background-position: center;
            height:1000px;
            background-repeat: no-repeat;
            background-size: cover;
            position: relative;
        }
        
        #web {
            display: none;
        }
        
        #mobile {
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



<div class="background-web" id="web">
    <div class="container text-justify" style="padding: 300px 0;">
            @if(!isset($jobs))
                @foreach($jobs as $j)
                    <div class="card mb-4" style="width: 70rem; border-radius: 0;">
                        <div class="card-body">
                            <h3 class="card-title" style="font-style: italic"><strong>{{ $j->title }}</strong></h3>
                            <h6 class="card-subtitle mb-2 text-muted">Vagas: {{ $j->vagas }}</h6>
                            <p class="card-text mb-4"><strong>LOCAL DE TRABALHO: </strong>{{ $j->local }}</p>
                            <p class="card-text mb-4"><strong>DESCRIÇÃO DE ATIVIDADES: </strong>{{ $j->descricao }}</p>
                            <p class="card-text mb-4"><strong>REQUISITOS: </strong>{{ $j->requisitos }}</p>
                            <p class="card-text mb-4"><strong>SALÁRIO: </strong>{{ $j->salario }}</p>
                            <p class="card-text mb-4"><strong>BENEFÍCIOS: </strong>{{ $j->beneficios }}</p>
                            <p class="card-text mb-4"><strong>HORÁRIO DE TRABALHO: </strong>{{ $j->jornada }}</p>
                            <button type="button" class="card-link btn" style="color:white; background:red; border-radius: 0;" data-bs-toggle="modal" data-bs-target="#curriculoModal{{ $j->id }}">Cadidatar-se</button>
                        </div>
                    </div>
    
                    <!-- Modal -->
                    <div class="modal fade" id="curriculoModal{{ $j->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <form action="{{ route('enviar_curriculo') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Candidatura: <strong>{{ $j->title }}</strong></h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    
                                    <div class="modal-body">
                                            <label class="form-label" id="basic-addon1">Nome Completo</label>
                                            <div class="input-group mb-3">
                                                <input type="text" class="form-control" name="name" aria-label="name" aria-describedby="basic-addon1" required>
                                            </div>
    
                                            <label class="form-label" id="basic-addon2">E-mail</label>
                                            <div class="input-group mb-3">
                                                <input type="email" class="form-control" name="email" aria-label="email" aria-describedby="basic-addon2"required>
                                            </div>
    
                                            <label class="form-label" id="basic-addon3">Telefone</label>
                                            <div class="input-group mb-3">
                                                <input type="text" class="form-control" name="phone" id="basic-url" aria-describedby="basic-addon3"required>
                                            </div>
                                            
                                            <div class="input-group mb-3">
                                                <input type="text" class="form-control" name="vaga" value="{{ $j->id }}" required style="display:none">
                                            </div>
                                            
                                            <div class="input-group mb-3">
                                                <input type="text" class="form-control" name="vaga_title" value="{{ $j->title }}" required style="display:none">
                                            </div>
    
                                            <label class="form-label">Currículo</label>
                                            <div class="input-group">
                                                <input type="file" class="form-control" name="resume" required>
                                            </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="submit" class="btn" style="color:white; background: red; border-radius: 0;">Enviar Currículo</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                @endforeach
            @else
                <div class="card mb-4" style="width: 70rem; border-radius: 0;">
                    <div class="card-body">
                        <h3 class="card-title" style="font-style: bold">Não há vagas disponiveis no momento.</h3>
                    </div>
                </div>
            @endif
            
    </div>
    <x-footer />
</div>

<!-- //////////////////////////// -->

<div class="background-mobile" id="mobile">
    <div class="container text-justify" style="padding: 300px 0; margin-top: 100px">
            @if(!isset($jobs))
                @foreach($jobs as $j)
                    <div class="card mb-4" style="border-radius: 0;">
                        <div class="card-body">
                            <h3 class="card-title" style="font-style: italic"><strong>{{ $j->title }}</strong></h3>
                            <h6 class="card-subtitle mb-2 text-muted">Vagas: {{ $j->vagas }}</h6>
                            <p class="card-text mb-4"><strong>LOCAL DE TRABALHO: </strong>{{ $j->local }}</p>
                            <p class="card-text mb-4"><strong>DESCRIÇÃO DE ATIVIDADES: </strong>{{ $j->descricao }}</p>
                            <p class="card-text mb-4"><strong>REQUISITOS: </strong>{{ $j->requisitos }}</p>
                            <p class="card-text mb-4"><strong>SALÁRIO: </strong>{{ $j->salario }}</p>
                            <p class="card-text mb-4"><strong>BENEFÍCIOS: </strong>{{ $j->beneficios }}</p>
                            <p class="card-text mb-4"><strong>HORÁRIO DE TRABALHO: </strong>{{ $j->jornada }}</p>
                            <button type="button" class="card-link btn" style="color:white; background:red; border-radius: 0;" data-bs-toggle="modal" data-bs-target="#curriculoModal{{ $j->id }}">Cadidatar-se</button>
                        </div>
                    </div>
    
                    <!-- Modal -->
                    <div class="modal fade" id="curriculoModal{{ $j->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <form action="{{ route('enviar_curriculo') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Candidatura: <strong>{{ $j->title }}</strong></h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    
                                    <div class="modal-body">
                                            <label class="form-label" id="basic-addon1">Nome Completo</label>
                                            <div class="input-group mb-3">
                                                <input type="text" class="form-control" name="name" aria-label="name" aria-describedby="basic-addon1" required>
                                            </div>
    
                                            <label class="form-label" id="basic-addon2">E-mail</label>
                                            <div class="input-group mb-3">
                                                <input type="email" class="form-control" name="email" aria-label="email" aria-describedby="basic-addon2"required>
                                            </div>
    
                                            <label class="form-label" id="basic-addon3">Telefone</label>
                                            <div class="input-group mb-3">
                                                <input type="text" class="form-control" name="phone" id="basic-url" aria-describedby="basic-addon3"required>
                                            </div>
                                            
                                            <div class="input-group mb-3">
                                                <input type="text" class="form-control" name="vaga" value="{{ $j->id }}" required style="display:none">
                                            </div>
                                            
                                            <div class="input-group mb-3">
                                                <input type="text" class="form-control" name="vaga_title" value="{{ $j->title }}" required style="display:none">
                                            </div>
    
                                            <label class="form-label">Currículo</label>
                                            <div class="input-group">
                                                <input type="file" class="form-control" name="resume" required>
                                            </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="submit" class="btn" style="color:white; background: red; border-radius: 0;">Enviar Currículo</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                @endforeach
            @else
                <div class="card mb-4" style="border-radius: 0;">
                    <div class="card-body">
                        <h3 class="card-title" style="font-style: bold">Não há vagas disponiveis no momento.</h3>
                    </div>
                </div>
            @endif
            
    </div>
    
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
                <strong><a class="nav-link text-light text-nowrap" href="https://www.instagram.com/duluboficial/" target="_blank" style="font-size:40px; margin-top: 20px; margin-left: 40px"><i class="fab fa-instagram"></i></a></strong>
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

</div>

