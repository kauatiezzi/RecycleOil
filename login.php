<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Recycle Oil - Login</title>

    <link rel="stylesheet" href="./assets/style/style.css" />
    <link rel="stylesheet" href="./assets/style/style-form.css" />
    <link rel="stylesheet" href="./assets/style/style-login.css" />

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
              <a onclick="closeMenu()" href="index.php">Pagina Inicial</a>
            </li>
            <li><a onclick="closeMenu()" href="form.php">Formulários</a></li>
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
              <a target="_blank" href="https://youtube.com/universidadedeararaquara">
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

    <section id="login">
      <div class="tela-login">
        <h1>Login</h1>
        <br />
        <form action="testLogin.php" method="POST">
           <input class="nome" type="text" name="usuario" placeholder="Usuario" />
           <br />
           <br />
           <input class="senha" type="password" name="senha" placeholder="Senha" />
           <br />
           <br />
           <input class="imputSubmit" type="submit" name="submit" value="Entrar">
        </form>
      </div>
    </section>

<footer>
      <div class="wrapper">
        <div class="col-a">
          <a class="logo" href="#home">
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
