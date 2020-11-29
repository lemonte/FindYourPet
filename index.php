<!DOCTYPE html>
<html lang="pt-Br">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>FindYourPet</title>

  <!-- CSS  -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection" />
  <link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection" />
</head>
<style>

</style>

<body>
  <nav class="white" role="navigation">
    <div class="nav-wrapper" style="background-color: #2C2C8C;">
      <div class="container">
        <a id="logo-container" href="#" class="brand-logo white-text">FindYourPet</a>
        <ul class="right hide-on-med-and-down">
          <a class="white-text" onclick='abri_modal("modal1")'><i class="material-icons left">exit_to_app</i> Login</a>
        </ul>

        <ul id="nav-mobile" class="sidenav">
          <li><a href="#">Navbar Link</a></li>
        </ul>
        <a href="#" data-target="nav-mobile" class="sidenav-trigger"><i class="material-icons">menu</i></a>
      </div>
    </div>
  </nav>

  <div id="index-banner" class="parallax-container">
    <div class="section no-pad-bot">
      <div class="container">
        <br><br>
        <h1 class="header left white-text" style="text-shadow: 5px 5px 5px #000;">ENCONTRE SEU DOG IDEAL</h1>
        <div class="row left">
          <h3 class="header col s12 light" style="text-shadow: 5px 5px 5px rgb(0, 0, 0);">Adote e ganhe um melhor amigo
          </h3>
        </div>
        <br><br>

      </div>
    </div>
    <div class="parallax"><img src="imagem1.png" alt="Unsplashed background img 1"></div>
  </div>

  <div id="modal1" class="modal">
    <div class="modal-content">
      <div class="container">
        <div class="row">
          <div class="col m12">
            <h2 class="center-align">Login</h2>
            <div class="row">
              <form class="col s12">
                <div class="row">
                  <div class="input-field col s12">
                    <input id="email" type="email" class="validate">
                    <label for="email">Email</label>
                  </div>
                </div>
                <div class="row">
                  <div class="input-field col s12">
                    <input id="pass" type="password" class="validate">
                    <label for="pass">Password</label>
                  </div>
                </div>

                <div class="divider"></div>
                <div class="row">
                  <div class="col m12">
                    <p class="right-align">
                      <button class="btn btn-large" style="background-color: #2C2C8C;" type="button" name="action" onclick="entrar()">Login</button>
                    </p>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="container">
    <div class="section">
      <div class="row">
        <?php
        $array = array(
          '{"nome":"Joao", "idade":15,"breve_descricao" : "Ele precisa de um novo lar", "sobre" : "cachorro muito docil e muito simpatico, adora brincar", "sexo": "M", "animal": "cachorro", "telefone" : "27988109108", "imagem" : "https://www.nationalgeographic.com/content/dam/animals/thumbs/rights-exempt/mammals/d/domestic-dog_thumb.jpg"}',
          '{"nome":"Joao", "idade":15, "breve_descricao" : "Ele precisa de um novo lar","sobre" : "cachorro muito docil e muito simpatico, adora brincar", "sexo": "M", "animal": "cachorro", "telefone" : "27988109108", "imagem" : "https://www.nationalgeographic.com/content/dam/animals/thumbs/rights-exempt/mammals/d/domestic-dog_thumb.jpg"}',
          '{"nome":"Joao", "idade":15, "breve_descricao" : "Ele precisa de um novo lar", "sobre" : "cachorro muito docil e muito simpatico, adora brincar", "sexo": "M", "animal": "cachorro", "telefone" : "27988109108", "imagem" : "https://www.nationalgeographic.com/content/dam/animals/thumbs/rights-exempt/mammals/d/domestic-dog_thumb.jpg"}',
          '{"nome":"Joao", "idade":15, "breve_descricao" : "Ele precisa de um novo lar", "sobre" : "cachorro muito docil e muito simpatico, adora brincar", "sexo": "M", "animal": "cachorro", "telefone" : "27988109108", "imagem" : "https://www.nationalgeographic.com/content/dam/animals/thumbs/rights-exempt/mammals/d/domestic-dog_thumb.jpg"}',
          '{"nome":"Joao", "idade":15, "breve_descricao" : "Ele precisa de um novo lar", "sobre" : "cachorro muito docil e muito simpatico, adora brincar", "sexo": "M", "animal": "cachorro", "telefone" : "27988109108", "imagem" : "https://www.nationalgeographic.com/content/dam/animals/thumbs/rights-exempt/mammals/d/domestic-dog_thumb.jpg"}',
          '{"nome":"Joao", "idade":15, "breve_descricao" : "Ele precisa de um novo lar", "sobre" : "cachorro muito docil e muito simpatico, adora brincar", "sexo": "M", "animal": "cachorro", "telefone" : "27988109108", "imagem" : "https://www.nationalgeographic.com/content/dam/animals/thumbs/rights-exempt/mammals/d/domestic-dog_thumb.jpg"}',
          '{"nome":"Joao", "idade":15, "breve_descricao" : "Ele precisa de um novo lar", "sobre" : "cachorro muito docil e muito simpatico, adora brincar", "sexo": "M", "animal": "cachorro", "telefone" : "27988109108", "imagem" : "https://www.nationalgeographic.com/content/dam/animals/thumbs/rights-exempt/mammals/d/domestic-dog_thumb.jpg"}',
          '{"nome":"Joao", "idade":15, "breve_descricao" : "Ele precisa de um novo lar",  "sobre" : "cachorro muito docil e muito simpatico, adora brincar", "sexo": "M", "animal": "cachorro", "telefone" : "27988109108", "imagem" : "https://www.nationalgeographic.com/content/dam/animals/thumbs/rights-exempt/mammals/d/domestic-dog_thumb.jpg"}',
          '{"nome":"Joao", "idade":15, "breve_descricao" : "Ele precisa de um novo lar", "sobre" : "cachorro muito docil e muito simpatico, adora brincar", "sexo": "M", "animal": "cachorro", "telefone" : "27988109108", "imagem" : "https://www.nationalgeographic.com/content/dam/animals/thumbs/rights-exempt/mammals/d/domestic-dog_thumb.jpg"}'
        );
        foreach ($array as $value) {
          $arr = json_decode($value, true);
          $nome = $arr["nome"];
          $idade = $arr["idade"];;
          $sexo = $arr["sexo"];
          $animal = $arr["animal"];
          $telefone = $arr["telefone"];
          $imagem = $arr["imagem"];
          $sobre = $arr["sobre"];
          $breve_descricao = $arr["breve_descricao"];
          print("
        <div class='col s12 m4 l3'>
        <div class='card sticky-action hoverable' style='height: 450px;'>
        <div class='card-image' >
        <img class='activator' src=$imagem style='height: 250px;' />
          </div>
          <div class='card-content'>
            <span class='card-title activator grey-text text-darken-4'> $nome  <i class='material-icons right'> more_vert </i> </span>
                  <p>$breve_descricao </p> </div> <div class='card-action'>
                      <button data-target='modal_card' class='btn modal-trigger' style='background-color: #2C2C8C;'  onclick='myFunction($value)'>
                        Ver mais sobre </button> </div> <div class='card-reveal'>
                          <span class='card-title grey-text text-darken-4'> $nome <i class='material-icons right'> close </i> </span class='center'>
                                <p>  $sobre </p> </div> </div> </div>");
        }
        ?>
      </div>
    </div>
  </div>

  <div id='modal_card' class='modal'>
    <div class='modal-content' style=" font-size: larger;">
      <h4 id="modal_nome_item" class="center"> </h4>
      <div class='col s12 m7'>
        <div class='row'>
          <div class='col s6' id="modal_imagem_item"></div>
          <div class='col s6 row center'><span style='font-weight: bolder; ' class="col s6 ">breve_descricao</span>
            <div class="col s6" id="modal_breve_descricao_item"></div>
          </div>
          <div class='col s6 row center'><span style='font-weight: bolder;' class="col s6 ">Idade</span>
            <div class="col s6" id="modal_idade_item"></div>
          </div>
          <div class='col s6 row center'><span style='font-weight: bolder;' class="col s6">sexo</span>
            <div class="col s6" id="modal_sexo_item"></div>
          </div>
          <div class='col s6 row center'><span style='font-weight: bolder;' class="col s6">animal</span>
            <div class="col s6" id="modal_animal_item"></div>
          </div>
          <div class='col s6 row center'><span style='font-weight: bolder;' class="col s6">telefone</span>
            <div class="col s6" id="modal_telefone_item"></div>
          </div>
          <div class='col s6 row center'><span style='font-weight: bolder;' class="col s6">sobre</span>
            <div class="col s6" id="modal_sobre_item"></div>
          </div>
        </div>
      </div>

    </div>
  </div>

  <div id='modal_cadastrar' class='modal'>
    <div class='modal-content' style=" font-size: larger;">
      <h4 id="modal_nome_item" class="center"> </h4>
      <div class='col s12 m7'>
        <div class='row'>
          <div class='col s6' id="modal_imagem_item"></div>
          <div class='col s6 row center'><span style='font-weight: bolder; ' class="col s6 ">breve_descricao</span>
            <div class="col s6" id="modal_breve_descricao_item"></div>
          </div>
          <div class='col s6 row center'><span style='font-weight: bolder;' class="col s6 ">Idade</span>
            <div class="col s6" id="modal_idade_item"></div>
          </div>
          <div class='col s6 row center'><span style='font-weight: bolder;' class="col s6">sexo</span>
            <div class="col s6" id="modal_sexo_item"></div>
          </div>
          <div class='col s6 row center'><span style='font-weight: bolder;' class="col s6">animal</span>
            <div class="col s6" id="modal_animal_item"></div>
          </div>
          <div class='col s6 row center'><span style='font-weight: bolder;' class="col s6">telefone</span>
            <div class="col s6" id="modal_telefone_item"></div>
          </div>
          <div class='col s6 row center'><span style='font-weight: bolder;' class="col s6">sobre</span>
            <div class="col s6" id="modal_sobre_item"></div>
          </div>
        </div>
      </div>

    </div>
  </div>




  <div id="index-banner" class="parallax-container">
    <div class="section no-pad-bot">
      <div class="container">
        <br><br>
        <h1 class="header left white-text" style="text-shadow: 5px 5px 5px #000;">DESEJA DOAR UM AMIGUINHO ?</h1>
        <div class="row left">
          <h3 class="header col s12 light" style="text-shadow: 5px 5px 5px rgb(0, 0, 0);">Cadastre ele em nossa
            plataforma para que possamos ajudar a encontrar o dono ideal.
          </h3>
          <div class="row left">
            <button class="btn-large" style="background-color: #2C2C8C;" onclick='abri_modal("modal2")'> Doar</button>
          </div>
        </div>
        <br><br>

      </div>
    </div>
    <div class="parallax"><img src="dog.png" alt="Unsplashed background img 1"></div>
  </div>


  <div id="modal2" class="modal">
    <div class="modal-content">
      <h4 class="center">Doe um animalzinho</h4>
      <div class="row">

        <div class="col s12 m6">
          <h5>Adicione uma imagem para que possamos conhece-lo</h5>
          <form enctype="multipart/form-data">
            <div>
              <input id="img-input" type="file" name="imagem">
            </div>
            <div id="img-container">
              <img id="preview" src="" class="col s12">
            </div>
          </form>
        </div>



        <form class="col s12 m6">
          <div class="row">
            <div class="input-field col s12">
              <i class="material-icons prefix">mode_edit</i>
              <input placeholder="ScoobyDoo" id="nome_animal" type="text" class="validate">
              <label for="nome_animal">Nome do animal</label>
            </div>
            <div class="input-field col s12">
              <i class="material-icons prefix">mode_edit</i>
              <input placeholder="Cachorro" id="tipo_animal" type="text" class="validate">
              <label for="tipo_animal">Qual tipo de animal ?</label>
            </div>
            <div class="input-field col s12">
              <i class="material-icons prefix">mode_edit</i>
              <input id="sobre" placeholder="Um amigo e muito animado..." type="text" class="validate">
              <label for="sobre">Sobre o animal</label>
            </div>
            <div class="input-field col s12">
              <i class="material-icons prefix">mode_edit</i>
              <input placeholder="12" id="idade" type="number" class="validate">
              <label for="idade">idade</label>
            </div>
            <div class="input-field col s12">
              <i class="material-icons prefix">mode_edit</i>
              <input id="contato" placeholder="(27)99999999" type="number" class="validate">
              <label for="contato">Contato</label>
            </div>
            <div class="input-field col s12">
              <i class="material-icons prefix">mode_edit</i>
              <input id="nome_dono" placeholder="João" type="text" class="validate">
              <label for="nome_dono">Nome do dono</label>
            </div>
          </div>
        </form>
      </div>
    </div>
    <div class="modal-footer">
      <a href="#!" class="modal-close left waves-effect waves-green btn-flat">Descartar</a>
      <a href="#!" class="modal-close waves-effect waves-green btn-flat">Enviar</a>
    </div>
  </div>

  <div class="container">
    <div class="section">

      <div class="row">
        <div class="col s12 center">
          <h3><i class="mdi-content-send brown-text"></i></h3>
          <h4>Encontrou um amiguinho e deseja doar ?</h4>
          <h5 class="center-align light">
            Se você encontrou um amiguinho perdido ou talvez irá fazer uma mudança e não pode levar o seu com você,
            cadastre ele de uma forma bem simples em nosso sistema
            para que ele venha a ser adotado por uma nova família.
          </h5>
        </div>
      </div>

    </div>
  </div>




  <div class="parallax-container valign-wrapper">
    <div class="section no-pad-bot">
      <div class="container">
        <br><br>
        <h1 class="header right white-text" style="text-shadow: 5px 5px 5px #000;">QUE SOMOS NÓS ?</h1>
        <div class="row right">
          <h3 class="header right col s6 light" style="text-shadow: 5px 5px 5px rgb(0, 0, 0);">
            Somos uma plataforma
            que conecta doadores
            com pessoas que buscam pelo seu melhor amigo!
          </h3>
        </div>
        <br><br>

      </div>
    </div>
    <div class="parallax"><img src="imagem4.png" alt="Unsplashed background img 3"></div>
  </div>



  <div class="container">
    <div class="section">

      <div class="row">
        <div class="col s12 center">
          <h3><i class="mdi-content-send brown-text"></i></h3>
          <h4>Sobre a plataforma</h4>
          <h5 class="center-align light">
            Somos uma plataforma sem fins lucrativos que busca trazer
            a felicidade dos nossos amiguinhos peludos e de seus novos
            donos, de modo que a busca de ambos acabem e consigam ter
            muitos momentos alegres e felizes juntos
            <br />
            Não perca tempo e entre em contato com o doador para que você e seu novo amiguinho possam se divertir já no
            proximo final de semana. Aposto que ele está esperando por sua ligação para ter um novo lar.

          </h5>
        </div>
      </div>

    </div>
  </div>


  <div class="parallax-container valign-wrapper">
    <div class="section no-pad-bot">
      <div class="container">
        <br><br>
        <h1 class="header center white-text" style="text-shadow: 5px 5px 5px #000;">Obrigado pela visita em nosso site!
        </h1>
        <div class="row center">
          <h3 class="header col s12 light" style="text-shadow: 5px 5px 5px rgb(0, 0, 0);">Esperamos ter te ajudado a
            encontrar seu amigo ideal
          </h3>
        </div>
        <br><br>

      </div>
    </div>
    <div class="parallax"><img src="imagem3.png" alt="Unsplashed background img 3"></div>
  </div>
  <div class="container">
    <div class="section">

      <!--   Icon Section   -->
      <div class="row">
        <div class="col s12 m4">
          <div class="icon-block">
            <h2 class="center brown-text"><i class="material-icons">flash_on</i></h2>
            <h5 class="center">Encontre de forma rápida</h5>

            <p class="light">Nossa plataforma tras uma forma rapida e simples para você colocar seu animal para doação e um local simples para
              que voce encontre o mais rapido seu novo amiguinho de acordo com a forma que deseja, realizando assim seu sonho e o do seu novo
              amiguinho.</p>
          </div>
        </div>

        <div class="col s12 m4">
          <div class="icon-block">
            <h2 class="center brown-text"><i class="material-icons">group</i></h2>
            <h5 class="center">De pessoa para pessoa</h5>

            <p class="light">Uma interação realizada de pessoa para pessoa de forma que fica algo simples para a adoção e
              um diálogo bem rápido entre quem quer adotar e o doador, tornando um processo bem simples e facil.</p>
          </div>
        </div>

        <div class="col s12 m4">
          <div class="icon-block">
            <h2 class="center brown-text"><i class="material-icons">settings</i></h2>
            <h5 class="center">Como fazemos</h5>

            <p class="light">Nossa plataforma entra em contato com todas as pessoas que desejam doar um animal antes de divulga-lo para sabermos
              sobre as pessoas e sobre o animal que querem doar.</p>
          </div>
        </div>
      </div>

    </div>
  </div>
  <footer class="page-footer" style="background-color: #2C2C8C;">
    <div class="container">
      <div class="row">
        <div class="col l6 s12">
          <h5 class="white-text">FindYourPet</h5>
          <p class="grey-text text-lighten-4">Somos uma plataforma que disponibiliza um espaço para que os doadores
            possam divulgar sus animais e um local onde possíveis donos possam encontrar o seu amiguinho peludo dos
            sonhos.
            <br />
            Somos uma plataforma totalmente gratuita e sem fins lucrativos.
          </p>


        </div>
        <div class="col l3 s12">
        </div>
        <div class="col l3 s12">
          <h5 class="white-text">Contato</h5>
          <ul>
            <li><a class="white-text" href="#!">Link 1</a></li>
            <li><a class="white-text" href="#!">Link 2</a></li>
            <li><a class="white-text" href="#!">Link 3</a></li>
            <li><a class="white-text" href="#!">Link 4</a></li>
          </ul>
        </div>
      </div>
    </div>
    <div class="footer-copyright">
      <div class="container">
        © 2014 Copyright Text
      </div>
    </div>
  </footer>



  <script>
    document.addEventListener('DOMContentLoaded', function() {
      var elems = document.querySelectorAll('.modal');
      var instances = M.Modal.init(elems, {});
    });

    function entrar(){
     const email = document.getElementById("email").value;
     const senha = document.getElementById("pass").value ; 
    // console.log("  email ==>  " + email +  "  senha ==>  " + senha)
      window.location.href = "home_administrativo.php"
    }

    function myFunction(arr) {
      var image = `<img class='activator center' src=${arr.imagem} style='max-height: "100%"; max-width: 400px; ' />`
      document.getElementById("modal_nome_item").innerHTML = arr.nome;
      document.getElementById("modal_imagem_item").innerHTML = image;
      document.getElementById("modal_idade_item").innerHTML = arr.idade;
      document.getElementById("modal_sexo_item").innerHTML = arr.sexo;
      document.getElementById("modal_animal_item").innerHTML = arr.animal;
      document.getElementById("modal_telefone_item").innerHTML = arr.telefone;
      document.getElementById("modal_sobre_item").innerHTML = arr.sobre;
      document.getElementById("modal_breve_descricao_item").innerHTML = arr.breve_descricao;
      console.log(arr)
    }



    function abri_modal(type) {
      document.querySelectorAll("input").forEach(i => i.value = '')
      document.querySelectorAll("select").forEach(i => i.value = '')
      document.querySelectorAll("textarea").forEach(i => i.value = '')
      const elem = document.getElementById(type);
      const instance = M.Modal.init(elem, {});
      return instance ? instance.open() : 0;
    }



    function readImage() {
      if (this.files && this.files[0]) {
        var file = new FileReader();
        file.onload = function(e) {
          document.getElementById("preview").src = e.target.result;
        };
        file.readAsDataURL(this.files[0]);
      }
    }
    document.getElementById("img-input").addEventListener("change", readImage, false);


  </script>
  <!--  Scripts-->
  <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <script src="js/materialize.js"></script>
  <script src="js/init.js"></script>

</body>

</html>


<!--

<div class="col s12 m4 l3">
  <div class='card sticky-action'>
    <div class='card-image waves-effect waves-block waves-light'>
      <img class='activator' src='https://www.nationalgeographic.com/content/dam/animals/thumbs/rights-exempt/mammals/d/domestic-dog_thumb.jpg' />
    </div>
    <div class='card-content'>
      <span class='card-title activator grey-text text-darken-4'> Card Title <i class='material-icons right'> more_vert </i> </span>
            <p> Este cachorrinho foi encontrado no bairro tal perto de uma padaria do joao. </p> </div> <div class='card-action'>
                <a class='modal-trigger' href='#modal_card'>
                  This is a link </a> </div> <div class='card-reveal'>
                    <span class='card-title grey-text text-darken-4'> Card Title <i class='material-icons right'> close </i> </span>
                          <p> Here is some more information about this product that is only revealed once clicked on. </p> </div> </div> </div>



  -->