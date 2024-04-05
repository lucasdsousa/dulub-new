@extends('layouts.app')

@section('content')

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
    
    #marca_cresce_mob {
        display: none;
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
    
    #marca_cresce_web {
        display: none;
    }
    
    #marca_cresce_mob {
        display: block;
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


<div class="container mb-5">
    <img class="mt-5 shadow mb-5 bg-body rounded" src="images/Banner A Dunax.png" alt="" style="width: 100%">
</div>

<!-- <h1 class="mb-5" style="text-align:center; color:red; font-size:48px"><strong>Sobre a nossa fábrica</strong></h1> -->

<div class="container">
    <h4 style="text-align: justify; color:#A9ABAE">Em duas décadas de história, a Dunax destaca-se nacionalmente como um dos maiores e mais importantes produtores de lubrificantes do país. Com Matriz situada na cidade de São Gonçalo dos Campos/BA, próximo ao Polo de petroquímico de Camaçari, a empresa possui um moderno parque fabril distribuídos em mais de 8.000,00 metros quadrados de área construídas implantadas em um terreno de 36.000,00 metros quadrados de área privada.</h4>

    <br>

    <h4 style="text-align: justify; color:#A9ABAE">A Dunax lubrificantes investe intensamente em infraestrutura e tecnologia de produção possibilitando, nos dias atuais, produzir 250 mil litros diários de lubrificantes. Os suportes dos nossos laboratórios na produção dos lubrificantes permitem que a Dunax entregue ao mercado produtos que atendem as mais rigorosas normas internacionais e padrões nacionais, estabelecidos e monitorados pela ANP.</h4>

    <br>

    <h4 style="text-align: justify; color:#A9ABAE">Para desenvolver lubrificantes de alta performance, a Dunax Lubrificantes submete os insumos e matérias primas a um rigoroso controle de qualidade, observando as melhores metodologias de estocagem e armazenamento dos materiais. O Processo de elaboração do lubrificante é supervisionado em todas as etapas da produção, afim de garantir a qualidade Dulub em nossos produtos finais.</h4>

    <br>

    <h4 style="text-align: justify; color:#A9ABAE">O nosso propósito é produzir e disponibilizar ao mercado uma completa linha de lubrificantes de alto padrão, observando sempre a economia, eficiência e performance que permite a Dulub ofertar lubrificantes vanguardista nos diversos nichos e seguimentos da lubrificação.</h4>

    <br>

    <h4 style="text-align: justify; color:#A9ABAE">A linha de lubrificantes Dulub foi desenvolvida para suprir as exigências e necessidades da indústria automobilística, maquinários e equipamentos em geral. O lubrificante Dulub é produzido dentro de rigorosos padrões de qualidade, utilizando-se de matérias primas especiais e selecionadas que permitem a Dunax entregar aos consumidores e clientes produtos de elevados padrões de qualidade e desempenho.</h4>

    <br>

    <h4 style="text-align: justify; color:#A9ABAE">O Uso do lubrificante correto é essencial para conservação, durabilidade e bom funcionamento do seu equipamento. Muito além de escolher o certo, investir em produtos que contemplem garantias de qualidade traz a segurança que você busca para seu veículo e/ou equipamento.</h4>

    <br>
</div>

<h1 class="mb-5" style="text-align:center; color:red; font-size:48px"><strong>Garantimos o que Produzimos</strong></h1>

<div class="container mb-5">
    <h4 style="text-align: justify; color:#A9ABAE">Na nossa indústria, todos os produtos passam por um criterioso processo de inspeção de qualidade que inicia na qualificação, certificações de produtos e fornecedores e finaliza com as etapas de produção assistidas por uma equipe técnica laboratorial que realiza mais de 30.000 analises mensais em lotes de lubrificantes. Um time comprometido e atuante que projeta o lubrificante Dulub para um padrão superior de conformidade e atendimento as normativas internacionais para que você tenha sempre o melhor lubrificante no seu veículo e/ou equipamento.</h4>
</div>



<div class="container-fluid mx-auto" id="marca_cresce_web">
  <img class="d-block mx-auto" src="images/Banner - A MARCA QUE MAIS CRESCE.png" alt="">
</div>

<div class="container-fluid mx-auto" id="marca_cresce_mob">
  <img class="d-block mx-auto" id="marca_cresce" src="images/mobile/Banner - A MARCA QUE MAIS CRESCE.png" alt="">
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


@endsection