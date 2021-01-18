<!DOCTYPE html>
<html lang="en">


<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/style.css">
  <script src="https://kit.fontawesome.com/8a86f7e73f.js" crossorigin="anonymous"></script>

  <title>Pecunia</title>
</head>

<body>
  <nav>
    <div class="default__nav">
      <div class="links">

        <a class="oNama">O nama</a>
        <a class="tecajnaLista">Tecajna lista</a>
        <a class="konvertor">Konvertor valuta</a>
        <a class="kontakt">Kontakt</a>
        <a href="login.php">Login</a>
      </div>
    </div>
  </nav>
  <section class="landing">
    <div class="landing__text">
      <h1>Pecunia</h1>
      <h2>Your place to convert money</h2>
    </div>
  </section>
  <section class="about__us">
    <div class="about__us__text">
      <h2>O nama</h2>
      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Animi eius quisquam nulla modi libero nobis debitis
        nisi, adipisci eligendi excepturi doloremque itaque tempore pariatur voluptatem eum harum enim cumque placeat in
        saepe, sequi dicta nesciunt laudantium labore. Quo libero aperiam illum animi, modi quod cumque sunt, illo,
        voluptates eum odit voluptatem et eaque cupiditate alias sapiente ipsum molestiae delectus corporis vel dicta!
        Unde commodi assumenda debitis asperiores nesciunt. Maiores voluptatem laudantium tempore minima provident quos
        non dicta? In consequatur quos, numquam alias ab commodi iure facilis dolorem libero tenetur explicabo fugit
        praesentium, illo amet cupiditate inventore atque. Omnis ipsum debitis amet alias qui distinctio accusamus at
        quae aspernatur commodi est ab labore praesentium ullam officia soluta, sint aliquid itaque nobis consectetur
        quasi harum porro nihil. Odit, velit ullam provident reiciendis pariatur deserunt rem saepe cupiditate alias
        nihil quisquam vitae omnis animi iusto voluptatum nisi. Nulla harum assumenda non praesentium voluptas.</p>
    </div>
  </section>
  <section class="tecajna__lista">

    <h3>Tečajna lista na dan: 16.01.2021.</h3>
    <?php
    require_once("php/tecajna_lista.php");

    ?>

  </section>
  <section class="converter">
    <div class="converter__holder">
      <h2>Otkup valute</h2>
      <form action="">
        <input type="number" name="iznos" id="iznosOtkup" placeholder="Otkup valute">
        <select name="valute" id="valuteOtkup">
          <option value="AUD">AUD</option>
          <option value="CAD">CAD</option>
          <option value="CZK">CZK</option>
          <option value="DKK">DKK</option>
          <option value="HUF">HUF</option>
          <option value="JPY">JPY</option>
          <option value="NOK">NOK</option>
          <option value="SEK">SEK</option>
          <option value="CHF">CHF</option>
          <option value="GBP">GPB</option>
          <option value="USD">USD</option>
          <option value="BAM">BAM</option>
          <option value="EUR">EUR</option>
          <option value="PLN">PLN</option>
        </select>

        <i class="fas fa-arrow-right fa-3x"></i>
        <select name="valute" id="uKune">
          <option value="">HRK</option>
        </select>
        <button type="button" class="izracunajOtkup">izracunaj</button>
        <h2 class="izracunOtkup">
          0.00 KN
        </h2>
      </form>

      <h2>Prodaja valute</h2>
      <form action="">
        <input type="number" name="iznos" id="iznosProdaja" placeholder="Prodaja valute">
        <select name="valute" id="valuteProdaja">
          <option value="AUD">AUD</option>
          <option value="CAD">CAD</option>
          <option value="CZK">CZK</option>
          <option value="DKK">DKK</option>
          <option value="HUF">HUF</option>
          <option value="JPY">JPY</option>
          <option value="NOK">NOK</option>
          <option value="SEK">SEK</option>
          <option value="CHF">CHF</option>
          <option value="GBP">GPB</option>
          <option value="USD">USD</option>
          <option value="BAM">BAM</option>
          <option value="EUR">EUR</option>
          <option value="PLN">PLN</option>
        </select>

        <i class="fas fa-arrow-right fa-3x"></i>
        <select name="valute" id="uKune">
          <option value="">HRK</option>
        </select>
        <button type="button" class="izracunajProdaja">izracunaj</button>
        <h2 class="izracunProdaja">
          0.00 KN
        </h2>
      </form>
    </div>
  </section>
  <section class="contact__form">
    <?php
    require_once("php/forma.php");

    ?>
    <?php
    if ($message_sent) :
    ?>
      <h2>Poruka poslana!</h2>
    <?php
    else :
    ?>
      <h1 class="contactFormHeading">Kontaktirajte nas!</h1>
      <form action="index.php" method="POST" class="nasaForma">

        <input type="text" id="fname" name="name" placeholder="Ime i prezime">

        <input type="text" id="email" name="email" placeholder="E-mail">

        <input type="text" id="subject" name="subject" placeholder="Naslov poruke">


        <textarea name="poruka" id="poruka" cols="30" rows="10" placeholder="Vaša poruka"></textarea>
        <input type="submit" value="submit">
      <?php
    endif;
      ?>
      </form>
  </section>
  <footer>
    <div class="mapHolder"></div>
    <div class="contactNumbers">
      <div class="adresa">
        <p>Pecunia d.o.o.</p>
        <p>Put Trnoružice 60</p>
        <p>21000 Split</p>
      </div>
      <div class="brojevi">

        <p><i class="fas fa-phone fas-2x"></i> 021 834 052 </p>
        <p><i class="fas fa-fax fas-2x"></i> 021 131 123 </p>
      </div>
      <div class="ikone">
        <div><i class="fab fa-facebook-f fas-2x"></i></div>
        <div><i class="fab fa-instagram fas-2x"></i></div>


      </div>
    </div>


  </footer>
  <script src="otkup.js"></script>
  <script src="prodaja.js"></script>
  <script src="main.js"></script>
</body>

</html>