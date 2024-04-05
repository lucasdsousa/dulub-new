@include('layouts.app')


@section('content')

<style>
  .container-img {
    position: relative;
    width: 25%;
    margin-bottom:50px;
  }
  
  .image {
    opacity: 1;
    display: block;
    width: 100%;
    height: auto;
    transition: .5s ease;
    backface-visibility: hidden;
  }
  
  .middle {
    position: absolute;
    top: 90%;
    left: 50%;
    transform: translate(-50%, -50%);
    -ms-transform: translate(-50%, -50%);
  }
  
  .container-img:hover .image {
    opacity: 0.3;
  }
  
  .container-img:hover .middle {
    opacity: 1;
  }
  
  .text {
    background-color: #04AA6D;
    color: white;
    font-size: 16px;
    padding: 16px 32px;
  }

  .img-centered {
    position: absolute;
    margin: auto;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
  }
    
  .carousel .carousel-indicators button {
      width:10px;
      height:10px;
      border-radius:100%;
      background-color:red;
      margin-right:7px;
    }

  @-webkit-keyframes scroll {
  0% {
  -webkit-transform: translateX(0);
  transform: translateX(0);
  }
  100% {
  -webkit-transform: translateX(calc(-250px * 7));
  transform: translateX(calc(-250px * 7));
  }
  }
  @keyframes scroll {
  0% {
  -webkit-transform: translateX(0);
  transform: translateX(0);
  }
  100% {
  -webkit-transform: translateX(calc(-250px * 7));
  transform: translateX(calc(-250px * 7));
  }
  }
  .slider {
  background: pr;
  box-shadow: 0 10px 20px -5px rgba(0, 0, 0, 0.125);
  height: 100px;
  margin: auto;
  overflow: hidden;
  position: relative;
  width: 1000px;
  }
  .slider::before, .slider::after {
  background: linear-gradient(to right, white 0%, rgba(255, 255, 255, 0) 100%);
  content: "";
  height: 100px;
  position: absolute;
  width: 200px;
  z-index: 2;
  }
  .slider::after {
  right: 0;
  top: 0;
  -webkit-transform: rotateZ(180deg);
  transform: rotateZ(180deg);
  }
  .slider::before {
  left: 0;
  top: 0;
  }
  .slider .slide-track {
  -webkit-animation: scroll 50s linear infinite;
  animation: scroll 50s linear infinite;
  display: flex;
  width: calc(250px * 14);
  }
  .slider .slide {
  height: 100px;
  width: 250px;
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
        width: 100%;
    }
    
    #categoria_button {
        background: red;
        font-weight: bold;
        border-radius: 0 !important;
        width:175px
    }
    
    #categoria_button2 {
        background: red;
        font-weight: bold;
        border-radius: 0 !important;
        width:175px
    }
    
    #categoria_button3 {
        background: red;
        font-weight: bold;
        border-radius: 0 !important;
        width:175px
    }
    
    #btn_insta_mobile {
        display:none;
    }
    
    #btn-renox-mobile {
        display:none;
    }
    
    #carousel-mobile {
        display: none;
    }
    
    #caroulsel-cats-mob {
        display: none;
    }
    
    #marca_cresce_web img {
        width:100%;
        margin-top:40px;
    }
    
    #marca_cresce_mob {
        display: none;
    }
    
    #empresa_mob {
        display: none;
    }
  
      
      #comprar_vender_desk {
          display:block;
      }
      
      #comprar_vender_mob {
          display:none;
      }
  @media only screen and (max-width: 768px){
      html, body{
        width: 100%;
        height: 100%;
        margin: 0px;
        padding: 0px;
        overflow-x: hidden; 
      }
      
      #business {
          text-align: justify;
          align-items: center;
      }
      
      #business_2 {
          text-align: justify;
          align-items: center;
      }
      
      #desktop {
          display: none;
      }
      
      #mobile {
          display: flex;
          width: 100%;
      }
    
    #carousel-web {
        display: none;
    }
    
    #carousel-mobile {
        display: block;
    }
    
    #caroulsel-cats-web {
        display: none;
    }
    
    #caroulsel-cats-mob {
        display: block;
    }
    
    #categoria_button {
        background: red;
        font-weight: bold;
        font-size: 8px;
        text-align:center;
        margin:auto;
        border-radius: 0 !important;
        width: 100%;
    }
    
    #categoria_button2 {
        background: red;
        font-weight: bold;
        font-size: 8px;
        text-align:center;
        margin:auto;
        border-radius: 0 !important;
        width: 100%;
    }
    
    #categoria_button3 {
        background: red;
        font-weight: bold;
        font-size: 8px;
        text-align:center;
        margin:auto;
        border-radius: 0 !important;
        width: 100%;
    }
    
    #marca_cresce_web {
        display: none;
    }
    
    #marca_cresce_mob {
        display: block;
        width: 100%;
        margin-top: -70px;
    }
    
    #empresa_web {
        display: none;
    }
    
    #empresa_mob{
        display: block;
    }

    
    #btn_insta_mobile {
        display:flex;
    }
    
    #btn-renox-mobile {
        display:flex;
    }
    
    #img_insta {
        display:none;
    }
    
    #btn-img-insta {
        display:none;
    }
    
    #img-renox {
        display:none;
    }
    
    #btn-img-renox {
        display:none;
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
      
      .yt {
          aspect-ratio: 16/9;
          width: 75%;
      }
  
  #ig-mobile {
      display:none;
  }
  
  #comprar h1 {
      margin-right: 50px;
  }
  
  #vender h1 {
      margin-left: 50px;
  }
  
  #comprar h5 {
      margin-right: 50px;
  }
  
  #vender h5 {
      margin-left: 50px;
  }
  
  #comprar a {
      margin-right: 50px;
  }
  
  #vender a {
      margin-left: 50px;
  }
  
  #produtos_mobile {
      display: none;
  }
  
  @media only screen and (max-width: 768px) {
      .navbar-brand {
          margin-left: -5rem;
      }
      
      .yt {
          aspect-ratio: 16/9;
          width: 100%;
      }
      
      #comprar_vender_desk {
          display:none;
      }
      
      #comprar_vender_mob {
          display:block;
      }
  
      #produtos_web {
          display: none;
      }
      
      #produtos_mobile {
          display: block;
      }
          
      #ig-web {
          display: none;
      }
      
      #ig-mobile {
          display: block;
      }
      
      #restrita {
          margin-left: 4rem;
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
      
      <div class="collapse navbar-collapse container-fluid" id="navbar-content" style="background-color:black">
        <ul class="navbar-nav mr-auto mb-2 mb-lg-0">
          <li class="nav-item mx-auto">
            <a class="nav-link active me-4 text-nowrap" aria-current="page" href="/" style="color: red; font-size:14px">HOME</a>
          </li>
          
          <li class="nav-item mx-auto">
            <a class="nav-link me-4 text-light nav-hover text-nowrap" href="/Empresa" style="font-size:14px">A DUNAX</a>
          </li>
          
          <li class="nav-item mx-auto" id="produtos_web">
            <a class="nav-link me-4 link-light nav-hover text-nowrap" href="/Produtos" style="font-size:14px">PRODUTOS</a>
          </li>
          
          <li class="nav-item mx-auto" id="produtos_mobile">
            <a class="nav-link me-4 link-light nav-hover text-nowrap" href="/ProdutosM" style="font-size:14px">PRODUTOS</a>
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

<!-- /////////// CAROUSEL WEB ////////////// -->

<div id="carousel-web">

<div id="carouselBanners" class="carousel slide carousel-fade mb-5" data-bs-ride="true">
  <div class="carousel-indicators" style="bottom:-3.5rem;">
    <button type="button" data-bs-target="#carouselBanners" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselBanners" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselBanners" data-bs-slide-to="2" aria-label="Slide 3"></button>
    <button type="button" data-bs-target="#carouselBanners" data-bs-slide-to="3" aria-label="Slide 4"></button>
    <button type="button" data-bs-target="#carouselBanners" data-bs-slide-to="4" aria-label="Slide 5"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active" data-bs-interval="3000">
      <img src="images/SITE IMAGE 08.png" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item " data-bs-interval="3000">
      <img src="images/SITE IMAGE 05.png" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item" data-bs-interval="3000">
      <img src="images/SITE IMAGE 10.png" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item" data-bs-interval="3000">
      <img src="images/SITE IMAGE 09.png" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item" data-bs-interval="3000">
      <img src="images/IMAGE 04.jpg" class="d-block w-100" alt="...">
    </div>
  </div>
  <button id="button_prev"class="carousel-control-prev" type="button" data-bs-target="#carouselBanners" data-bs-slide="prev">
    <img src="images/SETA ESQUERDA.svg" alt="" style="width:15%">
    <span class="visually-hidden">Previous</span>
  </button>
  <button id="button_next" class="carousel-control-next" type="button" data-bs-target="#carouselBanners" data-bs-slide="next">
    <img src="images/SETA DIREITA.svg" alt="" style="width:15%">
    <span class="visually-hidden">Next</span>
  </button>
</div>

<div class="container mb-5">
  <h1 class="mb-4" style="color:red; text-align:center; font-style:bold; margin-top:100px"><strong>Mantenha o foco em seu destino</strong></h1>
  <h5 style="text-align:center; color:#A9ABAE">Os produtos Dulub cuidam da performance, economia de combustível e durabilidade do seu veículo. A Dulub possui um portfólio completo de produtos automotivos.</h5>
</div>

</div>

<!-- /////////// CAROUSEL MOBILE ////////////// -->

<div id="carousel-mobile">

<div id="carouselBannersMob" class="carousel slide carousel-fade mb-5" data-bs-ride="true">
  <div class="carousel-indicators" style="bottom:-3.5rem;">
    <button type="button" data-bs-target="#carouselBannersMob" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselBannersMob" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselBannersMob" data-bs-slide-to="2" aria-label="Slide 3"></button>
    <button type="button" data-bs-target="#carouselBannersMob" data-bs-slide-to="3" aria-label="Slide 4"></button>
    <button type="button" data-bs-target="#carouselBannersMob" data-bs-slide-to="4" aria-label="Slide 5"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active" data-bs-interval="3000">
      <img src="images/mobile/Banner 07.png" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item " data-bs-interval="3000">
      <img src="images/mobile/Banner 11.png" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item" data-bs-interval="3000">
      <img src="images/mobile/Banner 10.png" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item" data-bs-interval="3000">
      <img src="images/mobile/Banner 06.png" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item" data-bs-interval="3000">
      <img src="images/mobile/Banner 08.png" class="d-block w-100" alt="...">
    </div>
  </div>
  <button id="button_prev"class="carousel-control-prev" type="button" data-bs-target="#carouselBannersMob" data-bs-slide="prev">
    <img src="images/SETA ESQUERDA.svg" alt="" style="width:50%">
    <span class="visually-hidden">Previous</span>
  </button>
  <button id="button_next" class="carousel-control-next" type="button" data-bs-target="#carouselBannersMob" data-bs-slide="next">
    <img src="images/SETA DIREITA.svg" alt="" style="width:50%">
    <span class="visually-hidden">Next</span>
  </button>
</div>

<div class="container mb-5">
  <h1 class="mb-4" style="color:red; text-align:center; font-style:bold; font-size: 36px; margin-top:100px"><strong>Mantenha o foco em seu destino</strong></h1>
  <h5 style="text-align:center; color:#A9ABAE">Os produtos Dulub cuidam da performance, economia de combustível e durabilidade do seu veículo. A Dulub possui um portfólio completo de produtos automotivos.</h5>
</div>

</div>

<!-- ////////////////// CAROUSEL CATEGORIAS WEB /////////////////// -->

<div id="caroulsel-cats-web">

<div id="carouselCategorias" class="carousel slide mb-5" data-bs-ride="true">
  <div class="carousel-indicators" style="bottom:-1rem;">
    <button type="button" data-bs-target="#carouselCategorias" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselCategorias" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselCategorias" data-bs-slide-to="2" aria-label="Slide 2"></button>
  </div>

  <div class="carousel-inner">

    <div class="carousel-item active">
      <div class="row container mx-auto">
        @foreach($cats as $c)
          @if($c->id < 5)
          <div class="container-img col">
            <img class="image" src="{{ asset($c->imagem) }}" alt="" style="width:100%">
            <div class="middle">
              <a class="btn d-block text-white text-nowrap" id="categoria_button" href="{{ route('produtos_categoria', $c->id) }}">{{ $c->nomeCategoria }}</a>
            </div>
          </div>
          @endif
        @endforeach
      </div>
    </div>

    <div class="carousel-item">
      <div class="row container mx-auto">
        @foreach($cats as $c)
          @if($c->id > 4 && $c->id < 9)
            <div class="container-img col">
              <img class="image" src="{{ asset($c->imagem) }}" alt="" style="width:100%">
              <div class="middle">
                <a class="btn d-block text-white text-nowrap" id="categoria_button2" href="{{ route('produtos_categoria', $c->id) }}">{{ $c->nomeCategoria }}</a></a>
              </div>
            </div>
          @endif
        @endforeach
      </div>
    </div>

    <div class="carousel-item">
      <div class="row container mx-auto">
        @foreach($cats as $c)
          @if($c->id > 8)
            <div class="container-img col">
              <img class="image" src="{{ asset($c->imagem) }}" alt="" style="width:100%">
              <div class="middle">
                <a class="btn d-block text-white text-nowrap" id="categoria_button3" href="{{ route('produtos_categoria', $c->id) }}">{{ $c->nomeCategoria }}</a>
              </div>
            </div>
          @endif
        @endforeach
      </div>
    </div>

  </div>

  <button class="carousel-control-prev" id="button_prev2" type="button" data-bs-target="#carouselCategorias" data-bs-slide="prev">
    <img src="images/SETA ESQUERDA.svg" alt="" style="width:15%">
    <span class="visually-hidden">Previous</span>
  </button>

  <button class="carousel-control-next" id="button_next2" type="button" data-bs-target="#carouselCategorias" data-bs-slide="next">
    <img src="images/SETA DIREITA.svg" alt="" style="width:15%">
    <span class="visually-hidden">Next</span>
  </button>
</div>

</div>

<!-- ////////////////// CAROUSEL CATEGORIAS MOBILE /////////////////// -->

<div id="caroulsel-cats-mob">

<div id="carouselCategoriasMob" class="carousel slide mb-5" data-bs-ride="true">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselCategoriasMob" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselCategoriasMob" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselCategoriasMob" data-bs-slide-to="2" aria-label="Slide 3"></button>
    <button type="button" data-bs-target="#carouselCategoriasMob" data-bs-slide-to="3" aria-label="Slide 4"></button>
    <button type="button" data-bs-target="#carouselCategoriasMob" data-bs-slide-to="4" aria-label="Slide 5"></button>
    <button type="button" data-bs-target="#carouselCategoriasMob" data-bs-slide-to="5" aria-label="Slide 6"></button>
  </div>

  <div class="carousel-inner">

    <div class="carousel-item active">
      <div class="row container mx-auto">
        @foreach($cats as $c)
          @if($c->id < 3)
          <div class="container-img col">
            <img class="image" src="{{ asset($c->imagem) }}" alt="" style="width:100%">
            <div class="middle">
              <a class="btn d-block text-white text-nowrap" id="categoria_button" href="{{ route('produtos_categoria', $c->id) }}">{{ $c->nomeCategoria }}</a>
            </div>
          </div>
          @endif
        @endforeach
      </div>
    </div>

    <div class="carousel-item">
      <div class="row container mx-auto">
        @foreach($cats as $c)
          @if($c->id == 3 || $c->id == 4)
            <div class="container-img col">
              <img class="image" src="{{ asset($c->imagem) }}" alt="" style="width:100%">
              <div class="middle">
                <a class="btn d-block text-white text-nowrap" id="categoria_button2" href="{{ route('produtos_categoria', $c->id) }}">{{ $c->nomeCategoria }}</a></a>
              </div>
            </div>
          @endif
        @endforeach
      </div>
    </div>

    <div class="carousel-item">
      <div class="row container mx-auto">
        @foreach($cats as $c)
          @if($c->id == 5 || $c->id == 6 )
            <div class="container-img col">
              <img class="image" src="{{ asset($c->imagem) }}" alt="" style="width:100%">
              <div class="middle">
                <a class="btn d-block text-white text-nowrap" id="categoria_button3" href="{{ route('produtos_categoria', $c->id) }}">{{ $c->nomeCategoria }}</a>
              </div>
            </div>
          @endif
        @endforeach
      </div>
    </div>

    <div class="carousel-item">
      <div class="row container mx-auto">
        @foreach($cats as $c)
          @if($c->id == 7 || $c->id == 8 )
            <div class="container-img col">
              <img class="image" src="{{ asset($c->imagem) }}" alt="" style="width:100%">
              <div class="middle">
                <a class="btn d-block text-white text-nowrap" id="categoria_button3" href="{{ route('produtos_categoria', $c->id) }}">{{ $c->nomeCategoria }}</a>
              </div>
            </div>
          @endif
        @endforeach
      </div>
    </div>

    <div class="carousel-item">
      <div class="row container mx-auto">
        @foreach($cats as $c)
          @if($c->id == 9 || $c->id == 10 )
            <div class="container-img col">
              <img class="image" src="{{ asset($c->imagem) }}" alt="" style="width:100%">
              <div class="middle">
                <a class="btn d-block text-white text-nowrap" id="categoria_button3" href="{{ route('produtos_categoria', $c->id) }}">{{ $c->nomeCategoria }}</a>
              </div>
            </div>
          @endif
        @endforeach
      </div>
    </div>

    <div class="carousel-item">
      <div class="row container mx-auto">
        @foreach($cats as $c)
          @if($c->id == 11 || $c->id == 12 )
            <div class="container-img col">
              <img class="image" src="{{ asset($c->imagem) }}" alt="" style="width:100%">
              <div class="middle">
                <a class="btn d-block text-white text-nowrap" id="categoria_button3" href="{{ route('produtos_categoria', $c->id) }}">{{ $c->nomeCategoria }}</a>
              </div>
            </div>
          @endif
        @endforeach
      </div>
    </div>

  </div>

  <button class="carousel-control-prev" id="button_prev2" type="button" data-bs-target="#carouselCategoriasMob" data-bs-slide="prev">
    <img src="images/SETA ESQUERDA.svg" alt="" style="width:50%; margin-top: -25px">
    <span class="visually-hidden">Previous</span>
  </button>

  <button class="carousel-control-next" id="button_next2" type="button" data-bs-target="#carouselCategoriasMob" data-bs-slide="next">
    <img src="images/SETA DIREITA.svg" alt="" style="width:50%; margin-top: -25px">
    <span class="visually-hidden">Next</span>
  </button>
</div>

</div>

<!-- ///////////////////////////////////// -->

<div class="container-fluid mx-auto" id="marca_cresce_web">
  <img class="d-block mx-auto" src="images/Banner - A MARCA QUE MAIS CRESCE.png" alt="">
</div>

<div class="container-fluid mx-auto" id="marca_cresce_mob">
  <img class="d-block" id="marca_cresce" src="images/mobile/Banner - A MARCA QUE MAIS CRESCE.png" style="width: 99%" alt="">
</div>

<!-- //////////////////////////////////// -->


<!-- COMPRAR / VENDER WEB -->

<div class="container-fluid" id="comprar_vender_desk">
  <div class="row">
    <div class="col" id="comprar" style="background:#F6F9FC;">
      <h1 class="mt-5" id="business" style="color:red; text-align:right;"><strong>QUER COMPRAR <br> LUBRIFICANTES DULUB <br> PARA SUA EMPRESA?</strong></h1>
      <br>
      <h5 class="me-5" style="text-align:right;">Conheça as vantagens de ser um revendedor e encontre um distribuidor perto de você.</h5>
      <br><br>
        <a class="btn mb-5" href="/Comprar-Dulub" style="color:white; background-color:red; float: right; border-radius:0 !important"><strong>FALE COM UM CONSULTOR</strong></a>
    </div>
    <div class="col" id="vender" style="background:red">
      <h1 class="mt-5" id="business_2" style="color: white;"><strong>QUERO VENDER <br> DULUB</strong></h1>
      <br><br>
      <h5 style="color: white;">Conheça nossos distribuidores autorizados e vire um parceiro da Dulub no Brasil.</h5>
      <br><br>
      <a class="btn mb-5" href="/Vender-Dulub" style="background-color: #F6F9FC; border-radius:0 !important"><strong>FALE COM NOSSA EQUIPE</strong></a>
    </div>
  </div>
</div>


<!-- COMPRAR / VENDER MOBILE -->

<div class="container-fluid" id="comprar_vender_mob">
  <div class="row">
    <div class="mx-auto" id="comprar" style="background:#F6F9FC;">
      <h1 class="mt-5 mx-auto" id="business" style="color:red; text-align:center;"><strong>QUER COMPRAR <br> LUBRIFICANTES DULUB <br> PARA SUA EMPRESA?</strong></h1>
      <br>
      <h5 class="mx-auto" style="text-align:center;">Conheça as vantagens de ser um revendedor e encontre um distribuidor perto de você.</h5>
      <br><br>
        <a class="btn mb-5 mx-auto" href="/Comprar-Dulub" style="color:white; background-color:red; border-radius:0 !important; display:flex"><strong>FALE COM UM DE NOSSOS CONSULTORES</strong></a>
    </div>
    <div class="mx-auto" id="vender" style="background:red">
      <h1 class="mt-5 mx-auto" id="business_2" style="color: white; text-align:center;"><strong>QUERO VENDER <br> DULUB</strong></h1>
      <br>
      <h5 class="mx-auto" style="color: white; text-align:center;">Conheça nossos distribuidores autorizados e vire um parceiro da Dulub no Brasil.</h5>
      <br><br>
      <a class="btn mb-5 mx-auto" href="/Vender-Dulub" style="color:red; background-color: #F6F9FC; border-radius:0 !important; display:flex"><strong>ENTRE EM CONTATO COM NOSSA EQUIPE</strong></a>
    </div>
  </div>
</div>

<div class="container mb-5">
  <div class="row align-items-center">
    <div class="col">
      <img class="d-block mx-auto" src="images/Logo Dunax H.png" alt="" style="width: 75%;">
      <h5 id="empresa_text" style="color:#A9ABAE; text-align:justify; margin-top:-30px; hyphens: auto;">
        Fundada no início dos anos 2000 com o propósito de desenvolver lubrificantes de última geração para automóveis, máquinas e equipamentos, a Dunax lubrificantes disponibiliza ao mercado uma gama diversificada de produtos de qualidade superior e tecnologia avançada.
      </h5>
      <br>
      <a class="btn" id="empresa_web" href="/Empresa" style="background-color:red; color:white; border-radius:0 !important; float: right;">Saiba mais</a>
    </div>
    <div class="col mt-5" id="desktop" style="margin-left:100px">
      <img src="images/FACHADA FÁBRICA - Imagem meramente ilustrativa.png" alt="" style="width: 100%">
    </div>
  </div>
    <div class="col" id="mobile">
      <img src="images/FACHADA FÁBRICA - Imagem meramente ilustrativa.png" alt="" style="width: 100%">
    </div>
    
    <a class="btn mt-4 w-50" id="empresa_mob" href="/Empresa" style="background-color:red; color:white; border-radius:0 !important; float: center;">Saiba mais</a>

</div>

<br>

<img src="images/Banner site - INSTA.png" id="img_insta" alt="" style="width:100%; margin-bottom:-100px">
<a class="btn mt-3 mb-5" id="btn-img-insta" href="https://www.instagram.com/duluboficial/" target="_blank" style="background-color:red; color:white; border-radius:0 !important; margin-left:700px;">Ver perfil</a>

<a href="https://www.instagram.com/duluboficial/" target="_blank" id="btn_insta_mobile"><img src="images/mobile/Instagram  -Melhores Dicas.png" alt="" style="width:100%;"></a>

<strong><h1 class="mt-5 mb-5 text-center" style="color:red; font-size: 30px"><strong>Conheça nosso canal no YouTube</strong></h1></strong>

<div class="container" style="display:flex; align-items:center; justify-content:center;">
  <iframe class="yt" src="https://www.youtube.com/embed/8UPTLako7oc" title="Dulub - Tecnologia Fluida" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
</div>

<img class="mt-5" src="images/Banner - Renox Arla 32.png" id="img-renox" alt="" style="width: 100%;">
<a class="btn" href="/Renox" id="btn-img-renox" style="color:white; background:#42B219; border-radius: 0 !important; margin-left:275px; margin-top:-175px"><strong>Saiba mais</strong></a>

<a href="/Renox" id="btn-renox-mobile"><img class="mt-5" src="images/mobile/ARLA 32 - PUB.png" alt="" style="width: 100%;"></a>



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
        <p style="text-align:center; font-size: 12px; color:white;">Design by <a class="text-decoration-none" href="#">Paulo Vinícius</a> e Desenvolvimento por <a class="text-decoration-none" href="#">Lucas Santana</a></p>
    </div>       
</div>

<!-- /////////////////////////////////// -->

<div id="footer-mobile" class="container-fluid mt-3" style="background-color: black; height:auto">
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

<script type="text/javascript" src="{{ URL::asset('assets/js/jquery.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('assets/js/bootstrap.min.js') }}"></script>