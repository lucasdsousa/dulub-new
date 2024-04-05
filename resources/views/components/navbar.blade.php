<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>Dulub</title>
        <link rel="icon" href="images/Logo - Dulub.svg">
        
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
        <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>        
        
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
  
  .navbar-brand {
      margin-left: -75px;
  }
  
  #ig-mobile {
      display:none;
  }
  
  @media only screen and (max-width: 768px) {
      .navbar-brand {
          margin-left: 0;
      }
  
      #ig-web {
          display: none;
      }
      
      #ig-mobile {
          display: block;
      }
  }
</style>

<nav class="navbar navbar-expand-lg shadow fixed-top" id="navbar" style="background-color: black">
    <div class="container">
      <a class="navbar-brand" href="/">
        <img src="images/Logo DULUB.png" alt="" width="100">
      </a>
      
        <strong><a class="nav-link text-light text-nowrap" id="ig-mobile" href="https://www.instagram.com/duluboficial/" target="_blank" style="font-size:25px; margin-left: 9rem; margin-top: 5px"><i class="fab fa-instagram"></i></a></strong>

      <button class="navbar-toggler" style="margin-right:20px" type="button" data-bs-toggle="collapse" data-bs-target="#navbar-content" aria-controls="navbar-content" aria-expanded="false" aria-label="Toggle navigation">
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

          <!-- <li class="nav-item dropdown dropdown-mega position-static">
            <a class="nav-link dropdown-toggle me-4" href="#" data-bs-toggle="dropdown" data-bs-auto-close="outside" style="font-size:14px">PRODUTOS</a>
            <div class="dropdown-menu shadow dropdown-center container-fluid">
              <div class="mega-content px-4 container">
                <div class="container">
                  <div class="row container">
                    <div class="col container">
                      <a href="#" style="color:red">Veículos Leves</a>
                      <div>
                        <a class="list-group-item" href="#">Ultratech</a>
                        <a class="list-group-item" href="#">Supreme</a>
                        <a class="list-group-item" href="#">Probasic</a>
                        <a class="list-group-item" href="#">Fluidtech</a>
                        <a class="list-group-item" href="#">Unitech</a>
                      </div>
                      <hr class="dropdown-divider" style="width:150px">
                      <a href="#" style="color:red">Motocicletas</a>
                      <div>
                        <a class="list-group-item" href="#">Moto 4T</a>
                        <a class="list-group-item" href="#">Moto 2T</a>
                      </div>
                    </div>
                    <div class="col">
                      <a href="#" style="color:red">Veículos Pesados</a>
                      <div>
                        <a class="list-group-item" href="#">Turbotech</a>
                        <a class="list-group-item" href="#">Maxturbo</a>
                        <a class="list-group-item" href="#">Stopdiesel</a>
                      </div>
                      <hr class="dropdown-divider" style="width:100px">
                      <a href="#" style="color:red">Transmissões</a>
                      <div>
                        <a class="list-group-item" href="#">ATF</a>
                        <a class="list-group-item" href="#">TDH Tractor</a>
                        <a class="list-group-item" href="#">Totac</a>
                      </div>
                    </div>
                    <div class="col">
                      <a href="#" style="color:red">Engrenagens</a>
                      <div>
                        <a class="list-group-item" href="#">Hipóides Gl4</a>
                        <a class="list-group-item" href="#">Hipóides Gl5</a>
                      </div>
                      <hr class="dropdown-divider" style="width:100px">
                      <a href="#" style="color:red">Graxas</a>
                      <div>
                        <a class="list-group-item" href="#">Graxlub CA-2</a>
                        <a class="list-group-item" href="#">Dulub Rol MP-2</a>
                      </div>
                    </div>
                    <div class="col">
                      <a href="#" style="color:red">Industriais</a>
                      <div>
                        <a class="list-group-item" href="#">Hidráulico</a>
                        <a class="list-group-item" href="#">Refrigeração</a>
                        <a class="list-group-item" href="#">Compressores</a>
                        <a class="list-group-item" href="#">Térmicos</a>
                        <a class="list-group-item" href="#">Desmoldantes</a>
                        <a class="list-group-item" href="#">Têxtil</a>
                        <a class="list-group-item" href="#">Transformadores</a>
                      </div>
                    </div>
                    <div class="col">
                      <a href="#" style="color:red">Arla 32</a>
                      <div>
                        <a class="list-group-item" href="#">Renox ARLA32</a>
                      </div>
                      <hr class="dropdown-divider" style="width:100px">
                      <a href="#" style="color:red">Fluidos de Freios</a>
                      <div>
                        <a class="list-group-item" href="#">Dots</a>
                      </div>
                      <hr class="dropdown-divider" style="width:100px">
                      <a href="#" style="color:red">Super Aditivos</a>
                      <div>
                        <a class="list-group-item" href="#">Orgânicos</a>
                        <a class="list-group-item" href="#">Base MEG</a>
                        <a class="list-group-item" href="#">Água Bi Desm.</a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </li> -->
          
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
          
          <li class="nav-item">
            <a class="nav-link ms-2 btn text-light text-nowrap" href="/Trabalhe-Conosco" style="background-color:red; border-radius:0 !important; font-size:14px">TRABALHE CONOSCO</a>
          </li>
          
          <li class="nav-item mx-auto">
            <a class="nav-link mx-3 text-nowrap" href="/admin">
                <span class="badge bg-light text-dark">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-file-lock-fill" viewBox="0 0 16 16" style="color: red">
                      <path d="M7 6a1 1 0 0 1 2 0v1H7V6zM6 8.3c0-.042.02-.107.105-.175A.637.637 0 0 1 6.5 8h3a.64.64 0 0 1 .395.125c.085.068.105.133.105.175v2.4c0 .042-.02.107-.105.175A.637.637 0 0 1 9.5 11h-3a.637.637 0 0 1-.395-.125C6.02 10.807 6 10.742 6 10.7V8.3z"/>
                      <path d="M12 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2zm-2 6v1.076c.54.166 1 .597 1 1.224v2.4c0 .816-.781 1.3-1.5 1.3h-3c-.719 0-1.5-.484-1.5-1.3V8.3c0-.627.46-1.058 1-1.224V6a2 2 0 1 1 4 0z"/>
                    </svg> Área Restrita
                </span>
            </a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <script>
    document.addEventListener('click',function(e){
      // Hamburger menu
      if(e.target.classList.contains('hamburger-toggle')){
        e.target.children[0].classList.toggle('active');
      }
    }) 
  </script>

    </body>
</html>