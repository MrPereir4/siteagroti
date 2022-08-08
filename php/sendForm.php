<!DOCTYPE html>
<html lang="pt-br" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Contato</title>
    <link rel="stylesheet" href="../css/navbar.css">
    <link rel="stylesheet" href="../css/basics.css">
    <link rel="stylesheet" href="../css/inputStyle.css">
    <link rel="stylesheet" href="../css/logoSlider.css">
    <link rel="stylesheet" href="../css/socialMediaIcons.css">
    <link rel="stylesheet" href="../css/headerWithImage.css">
    <link rel="stylesheet" href="../css/default.css">
    <link rel="stylesheet" href="../css/contato.css">
    <link rel="shortcut icon" type="image/png" href="../favicon.png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.js"></script>


    <meta name="viewport" content="width=divice-width, initial-scale=1.0">
  </head>
  <body>

    <?php

      ini_set('default_charset','UTF-8');

      if(isset($_POST['submit'])) {

        $companyName = $_POST['nomeEmp'];

        $cnpj = $_POST['cnpj'];

        $contactName = $_POST['nomeCont'];

        $cargo = $_POST['cargo'];

        $phone = $_POST['telefone'];

        $message = $_POST['mensagem'];







         $mailTo = "contato@agroti.com.br";
         $subject = "Contato - Resposta";
         $headers = "From: ".$email. "Reply-to: ".$email;

         $txt = "Contato de: " .$contactName. "\n\n".
                "Nome da empresa: " .$companyName. "\n\n".
                "Telefone: " .$phone. "\n\n".
                "CNPJ: ".$cnpj. "\n\n".
                "Cargo: ".$cargo. "\n\n".
                "Mensagem: ".$message
                ;


        mail($mailTo, $subject, $txt, $headers);
      }

    ?>

    <div class="black-panel-anim"></div>

    <div class="popup-complete">
      <img src="../imagens/correct.png" alt="">
      <h1>Obrigado!</h1>
      <h2>Formulário enviado com sucesso.</h2>
      <a href="../../index.html"><button type="button" name="button">Ok</button></a>
    </div>

    <section class="navigation">
      <div class="nav-container">
        <div class="brand">
           <a href="../default.html"><img src="../imagens/AGRO_B.png" alt="Logomarca"></a>
        </div>
        <nav>
           <div class="nav-mobile"><a id="nav-toggle" href="#!"><span></span></a></div>
           <ul class="nav-list">
              <li>
                 <a href="../default.html">Início</a>
              </li>
              <li>
                 <a href="../default.html?goto=1">Empresa</a>
              </li>
              <li>
                 <a href="./servicos.html">Serviços</a>
              </li>
              <li>
                 <a href="#!">Produtos</a>
                 <ul class="nav-dropdown">
                    <li>
                       <a href="./agricola.html">Agricola</a>
                    </li>
                    <li>
                       <a href="./sifrota.html">Sifrota</a>
                    </li>
                    <li>
                       <a href="./bi.html">B.I.</a>
                    </li>
                    <li>
                       <a href="./sigind.html">Sigind</a>
                    </li>
                    <li>
                       <a href="./wineplus.html">Wine Plus</a>
                    </li>
                    <li>
                       <a href="./siman.html">Siman</a>
                    </li>
                    <li>
                       <a href="./mobile.html">Mobile</a>
                    </li>
                    <li>
                       <a href="./sicap.html">Sicap</a>
                    </li>
                 </ul>
              </li>
              <li>
                 <a href="../default.html?goto=0">Cliente</a>
              </li>
              <li>
                 <a href="./blog.html">Blog</a>
              </li>
              <li>
                 <a href="./contato.html">Contato</a>
              </li>
              <li><a href="https://agroti.atlassian.net/servicedesk/customer/user/login?destination=portals" style="color: #F49D1E;">Suporte</a></li>
           </ul>
        </nav>
     </div>
    </section>

    <section class="header_with_image_section" style="background-image: url(../imagens/bannerHome.png);">

      <div class="header_title_with_icon full_width" data-aos="fade-right">
        <div class="icon_holder">
          <img src="../imagens/AGRO_SETAlaranja.png" alt="">
        </div>
        <div class="text_header_content">
          <ul>
            <li class="main_title">Nossa equipe está pronta para te atender</li>
          </ul>
        </div>
      </div>
    </section>

    <div class="full_width left_float posRel same_parent_spacing">

      <div class="icon_with_text_holder_custom posRel">
        <div class="image_holder_custom">
          <img src="../imagens/tracos.png" alt="">
        </div>
        <div class="right_text_holder_ul" style="margin-left: 20px;">
          <div class="crtl_holder">
            <ul>
              <li class="main_title_ul">Contato</li>
              <li class="main_sub_ul">Como podemos te ajudar?</li>
            </ul>
          </div>
        </div>
      </div>

    </div>

    <section class="input_form posRel same_parent_spacing">
      <div class="left60">

          <form class="form_form" action="index.html" method="post">
            <div class="form_holder">
              <div class="group">
                <input type="text" required>
                <span class="highlight"></span>
                <span class="bar"></span>
                <label>Nome da Empresa</label>
              </div>

              <div class="group">
                <input type="number" required>
                <span class="highlight"></span>
                <span class="bar"></span>
                <label>CNPJ</label>
              </div>

              <div class="group">
                <input type="text" required>
                <span class="highlight"></span>
                <span class="bar"></span>
                <label>Nome do contato:</label>
              </div>

              <div class="group">
                <input type="text" required>
                <span class="highlight"></span>
                <span class="bar"></span>
                <label>Cargo:</label>
              </div>

              <div class="group">
                <input type="number" required>
                <span class="highlight"></span>
                <span class="bar"></span>
                <label>Telefone:</label>
              </div>

              <div class="group">
                <input type="text" required>
                <span class="highlight"></span>
                <span class="bar"></span>
                <label>Mensagem:</label>
              </div>
            </div>

            <div class="button_holder same_parent_spacing">
              <button type="button" class="send_button" name="button">Enviar</button>

              <ul>
                <li><b>Horario de atendimento</b></li>
                <li>Segunda a sexta-feira das 08h00 às 17h30</li>
              </ul>
            </div>


          </form>

      </div>

      <div class="rightImage_desk">
        <div class="left_centered_img posAbs vertical_aligned" style="top: 50%;">
          <img src="../imagens/AGRO_SETAlaranja.png" alt="">
        </div>
      </div>
    </section>

    <div class="rightImage_mobile">
      <img class="centered_image_dim centered_content same_parent_spacing" src="../imagens/AGRO_SETA.png" alt="">
    </div>

    <div class="single_info_block bigger_top_spacing bigger_bottom_spacing" data-aos="fade-right" >

        <div class="single_map_unity" data-aos="fade-right">
          <h1>Unidade Ribeirão Preto/SP</h1>

          <iframe src="https://www.google.com/maps?q=R.%20Dr.%20Alberto%20G%C3%A1spar%20Gomes,%20Sala%2001%20-%20861%20-%20Santo%20Antonio,%20Batatais%20-%20SP,%2014315-116&t=&z=15&ie=UTF8&iwloc=&output=embed" width="100%" height="500" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" class="small_top_spacing"></iframe>
        </div>

        <div class="single_map_unity bigger_top_spacing" data-aos="fade-right">
          <h1>Unidade Belém/PA</h1>

          <iframe src="https://www.google.com/maps?q=R.%20Dr.%20Alberto%20G%C3%A1spar%20Gomes,%20Sala%2001%20-%20861%20-%20Santo%20Antonio,%20Batatais%20-%20SP,%2014315-116&t=&z=15&ie=UTF8&iwloc=&output=embed" width="100%" height="500" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" class="small_top_spacing"></iframe>
        </div>
      </div>

      <footer>
        <div class="mobile_footer">
          <div class="logo_footer centered_content">
            <img src="../imagens/AGRO_B.png" alt="Logomarca">
          </div>

          <div class="adr_footer full_width same_parent_spacing">
            <div class="full_width">
              <img src="../SiteIcones/localizacao.png" class="centered_content" alt="">
            </div>
            <h1 class="full_width">Unidade Ribeirão Preto/SP</h1>
            <h2>Rua Milton Jose Robusti 75, Sala 605</h2>
            <h2>Ed. Centro Empresarial Jardim Botánico</h2>
          </div>

          <div class="adr_footer full_width same_parent_spacing">
            <div class="full_width">
              <img rc="../SiteIcones/localizacao.png" class="centered_content" alt="">
            </div>
            <h1 class="full_width">Unidade Belém/PA</h1>
            <h2>Av. Governador José Malcher 153, Sala 12</h2>
            <h2>Ed. Futura Office Nazaré</h2>
          </div>

          <div class="social_media_footer same_parent_spacing">
            <h1>Nossas redes</h1>
            <ul class="wrapper centered_content">
              <li class="icon facebook">
                <span class="tooltip">Facebook</span>
                <span><i class="fab fa-facebook-f"></i></span>
              </li>
              <li class="icon instagram" href="https://www.instagram.com/agrotirp/">
                <span class="tooltip">Instagram</span>
                <span><i class="fab fa-instagram"></i></span>
              </li>
              <li class="icon youtube">
                <span class="tooltip">Linkedin</span>
                <span><i class="fab fa-linkedin"></i></span>
              </li>
            </ul>
          </div>

          <div class="contact_footer full_width left_float same_parent_spacing">
            <div class="iconWithText">
              <div class="left_float centered_content">
                <div class="icon_img">
                  <img src="../SiteIcones/telefone.png" alt="">
                </div>
                <h2>(16) 3234-0947</h2>
              </div>
            </div>
            <div class="iconWithText">
              <div class="left_float centered_content">
                <div class="icon_img">
                  <img src="../SiteIcones/email.png" alt="">
                </div>
                <h2>contato@agroti.com.br</h2>
              </div>
            </div>
          </div>

          <div class="copyright_footer left_float same_parent_spacing full_width">
            <ul>
              <li>Copyright © 2022 All rights reserved | AGRO TI</li>
              <li>Desenvolvido por <b>Musa Criativa</b></li>
            </ul>
          </div>

        </div>

        <div class="desktop_footer left_float posRel">
          <div class="full_width posRel left_float">
            <div class="quarter">
              <div class="logo_footer centered_content posRel" style="top: 50px">
                <img src="../imagens/AGRO_B.png" alt="Logomarca"></a>
              </div>
            </div>

            <div class="quarter">
              <div class="adr_footer full_width">
                <div class="full_width">
                  <img src="../SiteIcones/localizacao.png" class="centered_content" alt="">
                </div>
                <h1 class="full_width">Unidade Ribeirão Preto/SP</h1>
                <h2>Rua Milton Jose Robusti 75, Sala 605</h2>
                <h2>Ed. Centro Empresarial Jardim Botánico</h2>
              </div>
            </div>
            <div class="quarter">
              <div class="adr_footer full_width">
                <div class="full_width">
                  <img src="../SiteIcones/localizacao.png" class="centered_content" alt="">
                </div>
                <h1 class="full_width">Unidade Belém/PA</h1>
                <h2>Av. Governador José Malcher 153, Sala 12</h2>
                <h2>Ed. Futura Office Nazaré</h2>
              </div>
            </div>
            <div class="quarter posRel">
              <div class="social_media_footer">
                <h1>Nossas redes</h1>
                <ul class="wrapper centered_content">
                  <a href="https://www.facebook.com/agrotisistemas/" style="color: black;"><li class="icon facebook">
                    <span class="tooltip">Facebook</span>
                    <span><i class="fab fa-facebook-f"></i></span>
                  </li></a>
                  <a href="https://www.instagram.com/agrotirp/" style="color: black;"><li class="icon instagram">
                    <span class="tooltip">Instagram</span>
                    <span><i class="fab fa-instagram"></i></span>
                  </li></a>
                  <a href="https://www.linkedin.com/company/agro-ti" style="color: black;"><li class="icon youtube">
                    <span class="tooltip">Linkedin</span>
                    <span><i class="fab fa-linkedin"></i></span>
                  </li></a>
                </ul>
              </div>

              <div class="contact_footer full_width left_float same_parent_spacing" style="
              position: absolute;
              width: 100%;
              left: 50%;
              transform: translateX(-50%);
              top: 80px;">

                <div class="iconWithText">
                  <div class="left_float centered_content">
                    <div class="icon_img">
                      <img src="../SiteIcones/telefone.png" alt="">
                    </div>
                    <h2>(16) 3234-0947</h2>
                  </div>
                </div>

                <div class="iconWithText">
                  <div class="left_float centered_content">
                    <div class="icon_img">
                      <img src="../SiteIcones/email.png" alt="">
                    </div>
                    <h2>contato@agroti.com.br</h2>
                  </div>
                </div>

              </div>
            </div>

          </div>

          <div class="full_width left_float posRel">
            <div class="copyright_footer same_parent_spacing">
              <ul>
                <li>Copyright © 2022 All rights reserved | AGRO TI</li>
                <li>Desenvolvido por <b>Musa Criativa</b></li>
              </ul>
            </div>


          </div>
        </div>


      </footer>


    <script src="../javaScript/hamb.js" type="text/javascript"></script>
    <script type="text/javascript" src="../javaScript/slider.js"></script>
  </body>
</html>
