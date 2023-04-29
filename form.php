<?php 
    
    if(isset($_POST['submit']))

    {
      // print_r('Nome: '. $_POST['nome']);
      // print_r('<br>');
      // print_r('Email: '. $_POST['email']);
      // print_r('<br>');
      // print_r('Telefone: '. $_POST['telefone']);
      // print_r('<br>');
      // print_r('Cidade: '. $_POST['cidade']);
      // print_r('<br>');
      // print_r('Sexo: '. $_POST['genero']);
      // print_r('<br>');
      // print_r('Data de nascimento: '. $_POST['data_nascimento']);
      // print_r('<br>');
      // print_r('Quantidade de óleo doado: '. $_POST['oleo-quantidade']);
      // print_r('<br>');
      // print_r('Tipo de consulta: '. $_POST['consulta_type']);
      // print_r('<br>');
      // print_r('Observações: '. $_POST['obs']);
      // print_r('<br>');

      include_once('config.php');

      $nome = $_POST['nome'];
      $email = $_POST['email'];
      $telefone = $_POST['telefone'];
      $cidade = $_POST['cidade'];
      $sexo = $_POST['genero'];
      $data_nascimento = $_POST['data_nascimento'];
      $qnt_oleo = $_POST['oleo-quantidade'];
      $consultatype = $_POST['consultatype'];

      $mysqli = mysqli_query($mysqli, "INSERT INTO solicitacoes(nome,email,telefone,cidade,sexo,data_nascimento,qnt_oleo,consultatype) VALUES ('$nome','$email','$telefone','$cidade','$sexo','$data_nascimento','$qnt_oleo','$consultatype')");

      header("Location: confirmation.html");
    }
?>



<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Recycle Oil - Formulário</title>
     <link rel="shortcut icon" href="/assets/favicon.ico" />

    <link rel="stylesheet" href="./assets/style/style.css" />
    <link rel="stylesheet" href="./assets/style/style-form.css" />

    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;700&display=swap"
      rel="stylesheet"
    />
  </head>
  <body>
    <nav id="navigation">
      <div class="wrapper">
        <a class="logo" href="index.php">
          <img src="./assets/logo-home.svg" alt="" />
        </a>
        <div class="menu">
          <ul>
            <li>
              <a onclick="closeMenu()" href="index.php">‎ ‎ ‎ Voltar para a página inicial</a>
            </li>
          </ul>

          <ul class="social-links">
            <li>
              <a target="_blank" href="https://instagram.com/uniara">
                <img src="./assets/insta-logo.svg" alt="" />
              </a>
            </li>
            <li>
              <a target="_blank" href="https://facebook.com/uniara">
                <img src="./assets/face-logo.svg" alt="" />
              </a>
            </li>
            <li>
              <a target="_blank" href="https://youtube.com/@universidadedeararaquara">
                <img src="./assets/yt-logo.svg" alt="" />
              </a>
            </li>
            <li>
              <a target="_blank" href="login.php">
                <img src="./assets/admin-tools-svgrepo-com.svg" alt="" />
              </a>
            </li>
          </ul>
        </div>

        <button
          aria-expanded="false"
          aria-label="Abrir menu"
          onclick="openMenu()"
          class="open-menu"
        >
          <svg
            width="40"
            height="40"
            viewBox="0 0 40 40"
            fill="none"
            xmlns="http://www.w3.org/2000/svg"
          >
            <path
              d="M10 20H30"
              stroke="#e8590c96"
              stroke-width="2"
              stroke-linecap="round"
              stroke-linejoin="round"
            />
            <path
              d="M10 12H30"
              stroke="#e8590c96"
              stroke-width="2"
              stroke-linecap="round"
              stroke-linejoin="round"
            />
            <path
              d="M18 28L30 28"
              stroke="#e8590c96"
              stroke-width="2"
              stroke-linecap="round"
              stroke-linejoin="round"
            />
          </svg>
        </button>
        <button
          aria-expanded="true"
          aria-label="Fechar menu"
          onclick="closeMenu()"
          class="close-menu"
        >
          <svg
            width="40"
            height="40"
            viewBox="0 0 40 40"
            fill="none"
            xmlns="http://www.w3.org/2000/svg"
          >
            <path
              d="M30 10L10 30M10 10L30 30"
              stroke="#FFFAF1"
              stroke-width="2"
              stroke-linecap="round"
              stroke-linejoin="round"
            />
          </svg>
        </button>
      </div>
    </nav>

    <section id="form">
      <div class="box">
        <form action="form.php" method="POST">
          <fieldset>
            <legend><b>Formulário de cadastro</b></legend>
            <br />
            <div class="inputBox">
              <input
                type="text"
                name="nome"
                id="nome"
                class="inputUser"
                required
              />
              <label for="nome" class="labelInput">Nome completo</label>
            </div>
            <br />
            <div class="inputBox">
              <input
                type="text"
                name="email"
                id="email"
                class="inputUser"
                required
              />
              <label for="email" class="labelInput">Email</label>
            </div>
            <br />
            <div class="inputBox">
              <input
                type="tel"
                name="telefone"
                id="telefone"
                class="inputUser"
                required
              />
              <label for="telefone" class="labelInput">Telefone</label>
            </div>
            <br />
            <div class="inputBox">
              <input
                type="text"
                name="cidade"
                id="cidade"
                class="inputUser"
                required
              />
              <label for="cidade" class="labelInput">Cidade</label>
            </div>
            <br />
            <div id="sexo">
              <p>Sexo:</p>
              <input
                type="radio"
                id="feminino"
                name="genero"
                value="Feminino"
                required
              />
              <label for="feminino">Feminino</label>
              <br />
              <input
                type="radio"
                id="masculino"
                name="genero"
                value="Masculino"
                required
              />
              <label for="masculino">Masculino</label>
              <br />
              <input
                type="radio"
                id="outro"
                name="genero"
                value="Outro"
                required
              />
              <label for="outro">Outro</label>
            </div>
            <br />
            <div id="sexo">
              <label for="data_nascimento">Data de Nascimento:</label>
              <input
                type="date"
                name="data_nascimento"
                id="data_nascimento"
                required
              />
            </div>
            <br />
            <div id="sexo">
              <p>Quantidade de óleo que será doado:</p>
              <input
                type="radio"
                id="1litro"
                name="oleo-quantidade"
                value="1 Litro"
                required
              />
              <label for="1litro">1 Litro</label>
              <br />
              <input
                type="radio"
                id="2litro"
                name="oleo-quantidade"
                value="2 Litros"
                required
              />
              <label for="2litro">2 Litros</label>
              <br />
              <input
                type="radio"
                id="3litro"
                name="oleo-quantidade"
                value="3 Litros"
                required
              />
              <label for="3litro">3 Litros</label>
              <br />
              <input
                type="radio"
                id="4litro"
                name="oleo-quantidade"
                value="4 Litros ou mais"
                required
              />
              <label for="4litro">4 Litros ou mais</label>
            </div>
            <br />
            <div class="inputBox" id="sexo">
              <label for="consultatype">Tipo de consulta:</label>
              <select id="consultatype" name="consultatype">
                <option value="fiat" selected>Selecione</option>
                <option value="limpeza">Limpeza Bucal</option>
                <option value="tratamento">Tratamento</option>
                <option value="dente">Dente</option>
                <option value="audi">Audi</option>
              </select>
            </div>
            <br /><br />
            <input type="submit" name="submit" id="submit"/>
          </fieldset>
        </form>
      </div>
    </section>

<footer>
      <div class="wrapper">
        <div class="col-a">
          <a class="logo" href="index.php">
            <img src="./assets/logo-footer.svg" alt="" />
          </a>

          <p>
            2023 RecycleOil. <br />
            Projeto para fim educacional.
          </p>
        </div>

        <div class="col-b">
          <ul class="social-links">
            <li>
              <a target="_blank" href="https://instagram.com/uniara">
                <img src="./assets/insta-logo.svg" alt="" />
              </a>
            </li>
            <li>
              <a target="_blank" href="https://www.facebook.com/Uniara">
                <img src="./assets/face-logo.svg" alt="" />
              </a>
            </li>
            <li>
              <a
                target="_blank"
                href="https://www.youtube.com/@Universidadedeararaquara"
              >
                <img src="./assets/yt-logo.svg" alt="" />
              </a>
            </li>
            <li>
              <a target="_blank" href="login.php">
                <img src="./assets/admin-tools-svgrepo-com.svg" alt="" />
              </a>
            </li>
          </ul>
        </div>
      </div>
    </footer>

    <a id="backToTopButton" href="#home">
      <svg
        width="40"
        height="40"
        viewBox="0 0 40 40"
        fill="none"
        xmlns="http://www.w3.org/2000/svg"
      >
        <circle cx="20" cy="20" r="20" fill="#e8590c96" />
        <path
          d="M20 27V13"
          stroke="white"
          stroke-width="2"
          stroke-linecap="round"
          stroke-linejoin="round"
        />
        <path
          d="M13 20L20 13L27 20"
          stroke="white"
          stroke-width="2"
          stroke-linecap="round"
          stroke-linejoin="round"
        />
      </svg>
    </a>

    <!-- ScrollReaveal Lib -->
    <script src="https://unpkg.com/scrollreveal"></script>
    <script src="./main.js"></script>
  </body>
</html>
