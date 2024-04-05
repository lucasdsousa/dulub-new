@extends('layouts.app')

@section('content')

<style>
    #mobile {
        display: none;
    }
    
    @media only screen and (max-width: 768px) {
        #web {
            display: none;
        }
        
        #mobile {
            display: block;
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
  
  #banner_mob {
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
  
      #banner_web {
          display: none;
      }
      
      #banner_mob {
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


<img src="images/Banner PAG - Renox Arla 32.png" id="banner_web" alt="" style="width: 100%;">
<img src="images/mobile/Banner Arla Site Resp.png" id="banner_mob" alt="" style="width: 100%;">

<div id="web">

<div class="container">
    <div class="row">
        <div class="col">
            <img src="images/Site RENOX - 1L.png" alt="" style="width:80%">
        </div>
        <div class="col-8">
            <h1 style="text-align:center; color:#046362"><strong>O que é RENOX ARLA 32?</strong></h1>
            <h5 class="mb-5 mt-4" style="color:#A9ABAE; text-align:justify">Arla é a abreviação de agente redutor líquido de óxidos de nitrogênio (NOx) automotivo. O número 32 
                refere-se ao nível de concentração da solução de ureia (32,5%) em água desmineralizada. Atua nos 
                sistemas de exaustão como agente redutor de emissões de óxidos de nitrogênio (NOx). O Renox Arla 
                32 é uma solução não inflamável, não tóxica, não perigosa e não explosiva e, portanto, muito segura. 
                Não é nocivo ao meio ambiente e está classificado na categoria dos fluidos transportáveis de baixo 
                risco. Comercializamos o produto, em nossa rede de postos, com a marca RENOX ARLA 32.</h5>

            <h1 style="text-align:center; color:#046362"><strong>Composição</strong></h1>
            <h5 class="mb-5 mt-4" style="color:#A9ABAE">Multi agente Redutor Líquido Automotivo de Nox é uma solução aqcuosa que envolve 32,5%de uréia pura 
                dissolvida e misturada em água deionizada.</h5></div>
    </div>

    <h1 style="text-align:center; color:#046362"><strong>Como funciona o SCR?</strong></h1>
    <h5 class="mb-5 mt-4" style="color:#A9ABAE; text-align:justify">SCR é um sistema que injeta quantidades precisas de Arla 32, na corrente de gases de escapedo veículo, 
        este passam por um catalisador, normalmente instalado na saída do escape (como se fosse um 
        silencioso). Ao passar pelo catalisador os gases sofrem uma mudança, se transformando em Nitrogênio 
        (N2) e Água (H20), que são eliminados na atmosfera. Esse sistema é importante para eliminar poluentes 
        que são produzidos por veículos movidos a diesel.</h5>

    <img class="mb-5 mx-auto d-block" src="images/Banner PAG - EX.png" alt="" style="width:80%;">
    
    <h1 style="text-align:center; color:#046362"><strong>Vantagens</strong></h1>
    <h5 class="mt-4" style="text-align:center; color:#A9ABAE">• Contribui diretamente para a redução das emissões dos novos motores com tecnologia SCR.</h5>
    <h5 style="text-align:center; color:#A9ABAE">• Redução das emissões de óxidos de nitrogênio (Nox) em até 98% transformando em nitrogênio e água;</h5>
    <h5 style="text-align:center; color:#A9ABAE">• Aprovado conforme as normas da ABNT e número de registro perante o INMETRO;</h5>
    <h5 class="mb-5" style="text-align:center; color:#A9ABAE">• Disponível em embalagens de 1L, 20L, 1.000 L e a Granel.</h5>


    <h1 style="text-align:center; color:#046362"><strong>MODO DE USAR</strong></h1>
    <h5 class="mb-5 mt-4" style="color:#A9ABAE; text-align:justify">Abra a bombona e conecte o bico aplicador especial que acompanha a embalagem (acoplada na 
        bombona atrás do contra-rótulo). Adicione o  líquido da bombona dentro do reservatório de Arla 32 do 
        veículo. Siga as recomendações do fabricante do veículo.</h5>
        
    <img class="mx-auto d-block w-100 mb-5" src="images/Banner - Renox 20L.png" alt="">

    <h1 style="text-align:center; color:#046362"><strong>Armazenamento</strong></h1>
    <h5 class="mb-5 mt-4" style="color:#A9ABAE; text-align:justify">O RENOX ARLA 32 deve ser estocado em local seco, arejado, ao abrigo de intempéries e luz solar e na 
        temperatura inferior a 30ºC. ATENÇÃO: Manter fora do alcance de crianças e animais domésticos.</h5>

    <h1 style="text-align:center; color:#046362"><strong>Cuidados com o Meio Ambiente</strong></h1>
    <h5 class="mb-5 mt-4" style="color:#A9ABAE; text-align:justify">A embalagem original deste produto é reciclável. Não dispor em lixo comum. Não descartar o produto 
        no sistema de esgoto, drenagem pluvial, em corpos d'água ou no solo. Em caso de derramamento, 
        evitar a contaminação de corpos d'água ou do solo. Confinar o produto e sua embalagem para posterior 
        recuperação ou descarte. Não reutilizar esta embalagem para outros fins.</h5>
</div>


<img class="mx-auto d-block w-100 mb-5" src="images/Banner - Renox Logo MRA.png" alt="">

<div class="container">
    <div class="row">
        <div class="col">
            <h1 style="text-align:center; color:#046362"><strong>Especialmente projetado para abastecer ARLA 32</strong></h1>
            <h5 class="mb-5 mt-4" style="color:#A9ABAE; text-align:justify">Disponível em configurações para atender o mercado
                            consumidor e varejo, oferece conveniência no 
                            abastecimento e possibilita maximização dos lucros 
                            na venda do Agente Redutor Líquido Automotivo 
                            (ARLA).
                            <br><br>
                            O Dispensador Renox MRA 3000 GEN 2 contribui com
                            o Programa de Controle da Poluição do Ar por Veículo
                            automotores (PROCONVE) e sua meta de redução da
                            emissão de Nox (óxido de nitrogênio) por veículos 
                            pesados movidos a diesel que utilizam ARLA 32 
                            injetado no escapamento.
            </h5>

        </div>
        <div class="col">
            <img class="mx-auto d-block w-75" src="images/Banner PAG - MRA 3000.png" alt="">
        </div>
    </div>
</div>
    
<div>
    <img class="mx-auto w-100" src="images/Banner - Renox Plano de Fundo.png" alt="">
</div>

<div class="container" style="margin-top:-750px;">
    <h1 style="text-align: center; color:white;"><strong>Qualidade</strong></h1>
    <h5 class="mb-5 mt-3" style="text-align:justify; color:white">Inclui componentes hidráulicos especiais de alta qualidade para 
        evitar a contaminação do ARLA 32. Estes componentes são provados e
        comprovados por mais de 5 anos em uso nos EUA e Europa. A qualidade da
        hidráulica Dulub para abastecimento de ARLA ajuda proteger o sistema Redutor Catalítico Seletivo (SCR) 
        dos veículos de danos causados por um produto impuro.
    </h5>

    <h1 style="text-align: center; color:white;"><strong>Automação</strong></h1>
    <h5 class="mb-5 mt-3" style="text-align:center; color:white">A MRA 3000 GEN 2 apresenta tecnologia de última geração e inclui o computador eletrônico Powered
        by Dulub, permitindo integração a automação existente.</h5>

    <h1 style="text-align: center; color:white;"><strong>Temperatura de Operação</strong></h1>
    <h5 class="mb-5 mt-3" style="text-align:center; color:white">Projetado para uso em temperaturas de -11ºC a +50ºC, ajuda a garantir a qualidade do ARLA 32.</h5>
    
    <h5 style="text-align:center; color:white">EM CASO DE DÚVIDAS, ENTRAR EM CONTATO</h5>
    
    <div class="container text-center" style="margin-bottom:150px">
        <h2 style="display: inline; color:white"><strong>85</strong> </h2><h1 style="display: inline; color:white"><strong>3275.3070 / 0800 730 30 70</strong></h1>
    </div>
</div>

</div>

<!-- ///////////////////////////  -->

<div id="mobile">

<div class="container mt-5">
        <div>
            <h1 style="text-align:center; font-size:36px; color:#046362"><strong>O que é</strong><br><strong>RENOX ARLA 32?</strong></h1>
            <h5 class="mb-5 mt-4" style="color:#A9ABAE; text-align:justify">Arla é a abreviação de agente redutor líquido de óxidos de nitrogênio (NOx) automotivo. O número 32 
                refere-se ao nível de concentração da solução de ureia (32,5%) em água desmineralizada. Atua nos 
                sistemas de exaustão como agente redutor de emissões de óxidos de nitrogênio (NOx). O Renox Arla 
                32 é uma solução não inflamável, não tóxica, não perigosa e não explosiva e, portanto, muito segura. 
                Não é nocivo ao meio ambiente e está classificado na categoria dos fluidos transportáveis de baixo 
                risco. Comercializamos o produto, em nossa rede de postos, com a marca RENOX ARLA 32.</h5>

            <h1 style="text-align:center; color:#046362"><strong>Composição</strong></h1>
            <h5 class="mb-5 mt-4" style="color:#A9ABAE">Multi agente Redutor Líquido Automotivo de Nox é uma solução aqcuosa que envolve 32,5%de uréia pura 
                dissolvida e misturada em água deionizada.</h5></div>

    <h1 style="text-align:center; color:#046362"><strong>Como funciona o SCR?</strong></h1>
    <h5 class="mb-5 mt-4" style="color:#A9ABAE; text-align:justify">SCR é um sistema que injeta quantidades precisas de Arla 32, na corrente de gases de escapedo veículo, 
        este passam por um catalisador, normalmente instalado na saída do escape (como se fosse um 
        silencioso). Ao passar pelo catalisador os gases sofrem uma mudança, se transformando em Nitrogênio 
        (N2) e Água (H20), que são eliminados na atmosfera. Esse sistema é importante para eliminar poluentes 
        que são produzidos por veículos movidos a diesel.</h5>

    <img class="mb-5 mx-auto d-block" src="images/Banner PAG - EX.png" alt="" style="width:80%;">
    
    <h1 style="text-align:center; color:#046362"><strong>Vantagens</strong></h1>
    <h5 class="mt-4" style="text-align:center; color:#A9ABAE">• Contribui diretamente para a redução das emissões dos novos motores com tecnologia SCR.</h5>
    <h5 style="text-align:center; color:#A9ABAE">• Redução das emissões de óxidos de nitrogênio (Nox) em até 98% transformando em nitrogênio e água;</h5>
    <h5 style="text-align:center; color:#A9ABAE">• Aprovado conforme as normas da ABNT e número de registro perante o INMETRO;</h5>
    <h5 class="mb-5" style="text-align:center; color:#A9ABAE">• Disponível em embalagens de 1L, 20L, 1.000 L e a Granel.</h5>


    <h1 style="text-align:center; color:#046362"><strong>MODO DE USAR</strong></h1>
    <h5 class="mb-5 mt-4" style="color:#A9ABAE; text-align:justify">Abra a bombona e conecte o bico aplicador especial que acompanha a embalagem (acoplada na 
        bombona atrás do contra-rótulo). Adicione o  líquido da bombona dentro do reservatório de Arla 32 do 
        veículo. Siga as recomendações do fabricante do veículo.</h5>
        
    <img class="mx-auto d-block w-100 mb-5" src="images/Banner - Renox 20L.png" alt="">

    <h1 style="text-align:center; color:#046362"><strong>Armazenamento</strong></h1>
    <h5 class="mb-5 mt-4" style="color:#A9ABAE; text-align:justify">O RENOX ARLA 32 deve ser estocado em local seco, arejado, ao abrigo de intempéries e luz solar e na 
        temperatura inferior a 30ºC. ATENÇÃO: Manter fora do alcance de crianças e animais domésticos.</h5>

    <h1 style="text-align:center; color:#046362"><strong>Cuidados com o Meio Ambiente</strong></h1>
    <h5 class="mb-5 mt-4" style="color:#A9ABAE; text-align:justify">A embalagem original deste produto é reciclável. Não dispor em lixo comum. Não descartar o produto 
        no sistema de esgoto, drenagem pluvial, em corpos d'água ou no solo. Em caso de derramamento, 
        evitar a contaminação de corpos d'água ou do solo. Confinar o produto e sua embalagem para posterior 
        recuperação ou descarte. Não reutilizar esta embalagem para outros fins.</h5>
</div>


<img class="mx-auto d-block w-100 mb-5" src="images/Banner - Renox Logo MRA.png" alt="">

<div class="container">
        <div>
            <h1 style="text-align:center; color:#046362"><strong>Especialmente projetado para abastecer ARLA 32</strong></h1>
            <h5 class="mb-5 mt-4" style="color:#A9ABAE; text-align:justify">Disponível em configurações para atender o mercado
                            consumidor e varejo, oferece conveniência no 
                            abastecimento e possibilita maximização dos lucros 
                            na venda do Agente Redutor Líquido Automotivo 
                            (ARLA).
                            <br><br>
                            O Dispensador Renox MRA 3000 GEN 2 contribui com
                            o Programa de Controle da Poluição do Ar por Veículo
                            automotores (PROCONVE) e sua meta de redução da
                            emissão de Nox (óxido de nitrogênio) por veículos 
                            pesados movidos a diesel que utilizam ARLA 32 
                            injetado no escapamento.
            </h5>

        </div>
        <div>
            <img class="mx-auto d-block w-75" src="images/Banner PAG - MRA 3000.png" alt="">
        </div>
</div>
    

<div class="container mt-5">
    <h1 style="text-align: center; color:#046362"><strong>Qualidade</strong></h1>
    <h5 class="mb-5 mt-3" style="text-align:justify; color:#A9ABAE">Inclui componentes hidráulicos especiais de alta qualidade para 
        evitar a contaminação do ARLA 32. Estes componentes são provados e
        comprovados por mais de 5 anos em uso nos EUA e Europa. A qualidade da
        hidráulica Dulub para abastecimento de ARLA ajuda proteger o sistema Redutor Catalítico Seletivo (SCR) 
        dos veículos de danos causados por um produto impuro.
    </h5>

    <h1 style="text-align: center; color:#046362"><strong>Automação</strong></h1>
    <h5 class="mb-5 mt-3" style="text-align:center; color:#A9ABAE">A MRA 3000 GEN 2 apresenta tecnologia de última geração e inclui o computador eletrônico Powered
        by Dulub, permitindo integração a automação existente.</h5>

    <h1 style="text-align: center; color:#046362"><strong>Temperatura de Operação</strong></h1>
    <h5 class="mb-5 mt-3" style="text-align:center; color:#A9ABAE">Projetado para uso em temperaturas de -11ºC a +50ºC, ajuda a garantir a qualidade do ARLA 32.</h5>
    
    <p style="text-align:center; color:#046362">EM CASO DE DÚVIDAS, ENTRAR EM CONTATO</p>
    
    <div class="container text-center mb-5">
        <h2 style="display: inline; color:#046362"><strong>85</strong> </h2><h1 style="display: inline; color:#046362"><strong>3275.3070 / 0800 730 30 70</strong></h1>
    </div>
</div>

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

