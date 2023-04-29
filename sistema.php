<?php

    session_start();
    include_once('config.php');
    if((!isset($_SESSION['usuario']) == true) and (!isset($_SESSION['senha']) == true))
    {
      unset($_SESSION['usuario']);
      unset($_SESSION['senha']);
      header('Location: login.php');
    }

    $logado = $_SESSION['usuario'];
   
    $sql = "SELECT * FROM solicitacoes ORDER BY idsolicitacoes DESC";

    $result = $mysqli->query($sql);


?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Recycle Oil - Sistema</title>

    <link rel="stylesheet" href="./assets/style/style-sistemas.css" />
    <link rel="stylesheet" href="./assets/style/style.css" />
    <link rel="stylesheet" href="./assets/style/style-footer.css" />


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
          <ul class="logged">
            <li>Logado como: <?php
         echo "$logado"
       ?></li>
          </ul>
           <a
            id="button-space"
            class="button"
            onclick="closeMenu()"
            href="sair.php"
            >Sair</a
          >

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
  <section id="table">
    <div id="table-config">
          <h1 class="painel-adm">Painel Administrativo</h1>
<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Nome</th>
      <th scope="col">Email</th>
      <th scope="col">Telefone</th>
      <th scope="col">Cidade</th>
      <th scope="col">Sexo</th>
      <th scope="col">Data de nascimento</th>
      <th scope="col">Quantidade de óleo doado</th>
      <th scope="col">Tipo de consulta</th>
      <th scope="col">...</th>
    </tr>
  </thead>
  <tbody>
    <?php
         while($user_data = mysqli_fetch_assoc($result))
         {
             echo "<tr>";
             echo "<td>".$user_data['idsolicitacoes']."</td>";
             echo "<td>".$user_data['nome']."</td>";
             echo "<td>".$user_data['email']."</td>";
             echo "<td>".$user_data['telefone']."</td>";
             echo "<td>".$user_data['cidade']."</td>";
             echo "<td>".$user_data['sexo']."</td>";
             echo "<td>".$user_data['data_nascimento']."</td>";
             echo "<td>".$user_data['qnt_oleo']."</td>";
             echo "<td>".$user_data['consultatype']."</td>";
             echo "<td> <a class='icon-lixeira' href='delete.php?idsolicitacoes=$user_data[idsolicitacoes]' title='Deletar'>
             <svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-trash3' viewBox='0 0 16 16'>
            <path d='M6.5 1h3a.5.5 0 0 1 .5.5v1H6v-1a.5.5 0 0 1 .5-.5ZM11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3A1.5 1.5 0 0 0 5 1.5v1H2.506a.58.58 0 0 0-.01 0H1.5a.5.5 0 0 0 0 1h.538l.853 10.66A2 2 0 0 0 4.885 16h6.23a2 2 0 0 0 1.994-1.84l.853-10.66h.538a.5.5 0 0 0 0-1h-.995a.59.59 0 0 0-.01 0H11Zm1.958 1-.846 10.58a1 1 0 0 1-.997.92h-6.23a1 1 0 0 1-.997-.92L3.042 3.5h9.916Zm-7.487 1a.5.5 0 0 1 .528.47l.5 8.5a.5.5 0 0 1-.998.06L5 5.03a.5.5 0 0 1 .47-.53Zm5.058 0a.5.5 0 0 1 .47.53l-.5 8.5a.5.5 0 1 1-.998-.06l.5-8.5a.5.5 0 0 1 .528-.47ZM8 4.5a.5.5 0 0 1 .5.5v8.5a.5.5 0 0 1-1 0V5a.5.5 0 0 1 .5-.5Z'/></svg>
            </a>
            </td>";
             echo "</tr>";

         }

    ?>
  </tbody>

</table>
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

    <a id="backToTopButton" href="index.php">
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
