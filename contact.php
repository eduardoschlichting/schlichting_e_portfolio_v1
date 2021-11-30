<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta property="og:image" content="https://eduardoschlichting.com/ogp.jpg" /> <!-- thumbnail -->

    <!-- favicon stuff -->
  <link rel="apple-touch-icon" sizes="180x180" href="favicon/apple-touch-icon.png">
  <link rel="icon" type="image/png" sizes="32x32" href="favicon/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="favicon/favicon-16x16.png">
  <link rel="manifest" href="favicon/site.webmanifest">
  <link rel="mask-icon" href="favicon/safari-pinned-tab.svg" color="#5bbad5">
  <meta name="msapplication-TileColor" content="#da532c">
  <meta name="theme-color" content="#ffffff">

    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,wght@0,400;0,500;0,700;1,400;1,500;1,700&display=swap"
      rel="stylesheet"
    />

    <link rel="stylesheet" href="css/main.css" />

    <title>Eduardo Schlichting - Front-end Web Developer</title>
  </head>
  <body>

    <!-- cursor stuff -->
    <div class="cursor"></div>
    <div class="cursor2"></div>

    
    <main>
      <h1 class="hidden">Dui - Front-end Web Developer</h1>

      <header class="nav-header">
        <h1 class="hidden">Header - Nav</h1>
        <div class="nav-wrapper">
          <div class="logo-dui-nav">
              <a href="index.html">
              <img src="dist/logo_dui_d.svg" id="imgLogo" alt="Logo Dui">
              </a>
          </div>

          <div class="menu-btn" v-on:click="menu">
            <span class="menu-btn__burger"></span>
          </div>
          
        </div>
          
        </header>

      <nav class="nav">
        <h2 class="hidden">Nav - mobile</h2>
        <ul class="menu-nav">
          <li class="menu-nav__item">
            <a href="index.html" class="menu-nav__link"> Work. </a>
          </li>

          <li class="menu-nav__item">
            <a href="about.html" class="menu-nav__link"> About me. </a>
          </li>

          <li class="menu-nav__item">
            <a href="contact.html" class="menu-nav__link"> Contact me. </a>
          </li>

          <li class="menu-nav__item">
            <div>
              <img src="dist/logo-footer-purple-m.svg" alt="Logo footer" />
              <p>Made with <span><3</span> by Eduardo Schlichting - 2021</p>
            </div>
          </li>
        </ul>
      </nav>

      <section class="contact">
        <div class="contact-content">
          <h3>Liked what you've seen so far?</h3>
          <h2 class="gradient-text">Let's work together then!</h2>
          <p>I promise to get back to you as soon as I can :D</p>
        </div>

        <div class="form-cont">
          <form action="./includes/mail/send.php" method="POST" id="mail-form">
            <!-- "for" associate label with the input (same as id)-->
            <label class="form-group">
              <input
                type="text"
                id="firstname"
                class="form-control"
                name="firstname"
                required
              />
              <span for="firstname">Your First Name *</span>
              <span><?= $name_required ?></span>
              <span class="border"></span>
              
            </label>

            <label class="form-group">
              <input
                type="text"
                id="lastname"
                class="form-control"
                name="lastname"
                required
              />
              <span for="lastname">Your Last Name *</span>
              <span><?= $name_required ?></span>
              <span class="border"></span>
            </label>

            <label class="form-group">
              <input
                type="email"
                id="email"
                class="form-control"
                name="email"
                required
              />
              <span for="email">Your Email *</span>
              <span class="border"></span>
              <span><?= $email_required ?></span>
            </label>

            <label class="form-group">
            <select type="text" name="subject" id="subject">
                <option value="Development">I need a website!</option>
                <option value="Design">I need some designs!</option>
                <option value="Other">I have a bit of everything to do!</option>
            </select>
            <span for="email">Subject</span>
              <span class="border"></span>
            </label>

            <label class="form-group">
              <textarea
                name="message"
                id="message"
                class="form-control-area"
                cols="30"
                rows="10"
              ></textarea>
              <span for="message">Your Message *</span>
              <span class="border"></span>
            </label>
            <button type="submit" class="submit-wrapper">Submit</button>

            <input type="hidden" name="recaptcha_response" id="recaptchaResponse">
          </form>
        </div>
      </section>

      <section class="links-fixed">
        <div class="links">
          <a href="https://www.linkedin.com/in/eduardoschlichting/" target="_blank"><img src="dist/linkedin-logo.svg" alt="Linkedin Link"></a>
          <a href="https://www.behance.net/eduardoschlichting" target="_blank"><img src="dist/behance-logo.svg" alt="Behance Link"></a>
          <a href="https://github.com/eduardoschlichting/" target="_blank"><img src="dist/github-link.svg" alt="Github Link"></a>
        </div>

        <img class="line" src="dist/line.svg" alt="line" />
      </section>

      <section class="text-fixed">
        <div class="link">
          <p>Design.</p>
          <p>Motion.</p>
          <p>Front-end.</p>
        </div>

        <img class="line" src="dist/line.svg" alt="line" />
      </section>

      <footer>
        <div>
          <img src="dist/logo-footer-purple-m.svg" alt="Logo footer" />
          <p>Made with   by Eduardo Schlichting - 2021</p>
        </div>
      </footer>
    </main>

    <script src="https://www.google.com/recaptcha/api.js?render=6LfbtGsdAAAAAOF1R_yOBqEYEoQocyGafRkRNIko"></script>
    
    <script>
        grecaptcha.ready(() => {
            grecaptcha.execute('6LfbtGsdAAAAAOF1R_yOBqEYEoQocyGafRkRNIko', { action: 'contact' }).then(token => {
              document.querySelector('#recaptchaResponse').value = token;
            });
        });
    </script>

    <!-- <script src="https://cdn.jsdelivr.net/npm/vue@2/dist/vue.js"></script> -->
    <script type="module" src="js/pages.js" defer></script>
    <script type="module" src="./js/components/mailFunctionality.js" defer></script>
    <script type="module" src="js/cursor.js" defer></script>
    <!-- <script type="module" src="js/main.js" defer></script> -->
  </body>
</html>
