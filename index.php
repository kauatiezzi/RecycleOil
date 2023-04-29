<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Recycle Oil</title>
    <link rel="shortcut icon" href="/assets/favicon.ico" />

    <link rel="stylesheet" href="./assets/style/style.css" />

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
        <a class="logo" href="#home">
          <img src="./assets/logo-home.svg" alt="" />
        </a>
        <div class="menu">
          <ul>
            <li>
              <a onclick="closeMenu()" href="#home">Início</a>
            </li>
            <li><a onclick="closeMenu()" href="#services">Beneficios</a></li>
            <li><a onclick="closeMenu()" href="#about">Como funciona</a></li>
          </ul>

          <a
            id="button-space"
            class="button"
            onclick="closeMenu()"
            href="./form.php"
            >Agende já
          </a>

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
              <a
                target="_blank"
                href="https://www.youtube.com/@Universidadedeararaquara"
              >
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

    <section id="home">
      <div class="wrapper">
        <div class="col-a">
          <header>
            <h4>BOAS-VINDAS A RECYCLE OIL 👋</h4>
            <h1>Recicle seu óleo usado e troque por serviços odontológicos.</h1>
          </header>

          <div class="content">
            <p>
              Você sabia que o óleo de cozinha usado ainda possui uma vida útil
              pela frente? É possível fazer biocombustível e itens de pintura
              com ele. Em uma parceria inédita oferecemos serviços odontológicos
              gratuito em troca do óleo de cozinha usado, veja mais clicando no
              botão abaixo.
            </p>
            <a class="button" href="#about"> Saiba como participar </a>
          </div>
        </div>

        <div class="col-b">
          <img
            src="./assets/wepik-export-20230428023351.png"
            alt="Mulher negra vestindo moletom verde com as duas mãos no peito e sorrindo"
          />
        </div>

        <div class="stats">
          <div class="stat">
            <h3>+0.000</h3>
            <p>Pacientes atendidos</p>
          </div>

          <div class="stat">
            <h3>+10</h3>
            <p>Especialistas disponíveis</p>
          </div>

          <div class="stat">
            <h3>+0</h3>
            <p>Anos no mercado</p>
          </div>
        </div>
      </div>
    </section>

    <section id="services">
      <div class="wrapper">
        <header>
          <h4>Reciclagem do óleo</h4>
          <h2>
            Veja o quanto você deixa de poluir descartando corretamente seu óleo
            de cozinha usado.
          </h2>
        </header>

        <div class="content">
          <div class="cards">
            <div class="card">
              <svg
                width="24"
                height="24"
                viewBox="0 0 24 24"
                fill="none"
                xmlns="http://www.w3.org/2000/svg"
              >
                <circle cx="12" cy="12" r="12" fill="#DCE9E2" />
                <path
                  d="M17.091 8.18182L10.091 15.1818L6.90918 12"
                  stroke="#e8590c96"
                  stroke-width="1.5"
                  stroke-linecap="round"
                  stroke-linejoin="round"
                />
              </svg>

              <h3>Evita a contaminação</h3>
              <p>
                O óleo de cozinha é altamente poluente, você descartando
                corretamente evita a contaminação e impermeabilização do solo.
              </p>
            </div>

            <div class="card">
              <svg
                width="24"
                height="24"
                viewBox="0 0 24 24"
                fill="none"
                xmlns="http://www.w3.org/2000/svg"
              >
                <circle cx="12" cy="12" r="12" fill="#DCE9E2" />
                <path
                  d="M17.091 8.18182L10.091 15.1818L6.90918 12"
                  stroke="#e8590c96"
                  stroke-width="1.5"
                  stroke-linecap="round"
                  stroke-linejoin="round"
                />
              </svg>

              <h3>Evita a contaminação dos rios</h3>
              <p>
                A cada 1 litro de óleo descartado corretamente você evita que 25
                mil litros de água dos rios e mares sejam contaminados.
              </p>
            </div>

            <div class="card">
              <svg
                width="24"
                height="24"
                viewBox="0 0 24 24"
                fill="none"
                xmlns="http://www.w3.org/2000/svg"
              >
                <circle cx="12" cy="12" r="12" fill="#DCE9E2" />
                <path
                  d="M17.091 8.18182L10.091 15.1818L6.90918 12"
                  stroke="#e8590c96"
                  stroke-width="1.5"
                  stroke-linecap="round"
                  stroke-linejoin="round"
                />
              </svg>

              <h3>Combustível Renovável</h3>
              <p>
                Depois do óleo ser usado na cozinha, é possível fabricar
                biodiesel, um combustível totalmente derivado de fontes
                renováveis. A cada 1 litro de óleo usado é possível fabricar 1
                litro de biodiesel, não gerando nenhum resíduo ao planeta.
              </p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section id="about">
      <div class="wrapper">
        <div class="col-a">
          <header>
            <h4>Como funciona</h4>
            <h2>Entenda sobre nosso novo programa</h2>
          </header>

          <div class="content">
            <p>
              Esse programa foi criado para incentivar as pessoas a descartarem
              o óleo vegetal corretamente, e evitarem de poluir o meio ambiente.
              Com a partir de um litro de óleo doado já é possível você resgatar
              uma consulta ou procedimento odontológico na Uniara Araraquara,
              onde a mais de 15 anos formam excelentes profissionais. Para
              agendar sua consulta, basta preencher o formulário clicando no
              botão abaixo e aguardar que entraremos em contato agendando o mais
              rápido possível.
            </p>
            <a
              id="button-space2"
              class="button"
              onclick="closeMenu()"
              href="./form.php"
              >Agende já
            </a>
          </div>
        </div>

        <div class="col-b">
          <img src="./assets/wepik-export-20230428030812.png" alt="" />
        </div>
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
