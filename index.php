<!DOCTYPE html>
<html lang="ru">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <div class="top-bar">
    <img src="" alt="logo" class="logo">
    <nav class="navigation">
      <a href="#about">About us</a>
      <a href="#reviews">Reviews</a>
      <a href="stages">Work steps</a>
      <a href="contacts">Contacts</a>
    </nav>
  </div>
  <header>
    <!-- //sdfsdfsdf -->
     <div class="form-container">
      <?php include "components/form.php"; ?>
     </div>
  </header>
  <main>
    <section id="about">

    </section>
    <section id="we-work-with">

    </section>
    <section id="benefits">

    </section>
    <section id="reviews">

    </section>
    <section id="stages">

    </section>
    <section id="feedback">
      <?php 
      $form_style_class = "feedback-form";
      include "components/form.php";
      ?>
    </section>
    <section id="faq">

    </section>
    <section id="contacts">
      <div class="footer-contacts">
        <h1>Contacts</h1>
        <div class="contacts-with-logo">
          <img src="" alt="logo">
          <div class="address">
            <span class="firm-name">Firm name</span>
            <span class="address">Oldenzaalsestraat 212, 7557GC Hengelo, Netherlands</span>
          </div>
        </div>
        <a href="tel:+" class="call">+31 123 123 12 12</a>
        <div class="socials"></div>
        <span class="support"></span>
      </div>
      <!-- Location -->
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d12598.599909396678!2d14.487383778296486!3d50.0916125608894!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x470b9339e54d3141%3A0xed65985f57f6463d!2sJarov%2C%20130%2000%20Praha%203!5e1!3m2!1scs!2scz!4v1738649689078!5m2!1scs!2scz" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </section>
  </main>
  <footer>
    <span class="copyright">The firm</span>
    <a href="/agreement" class="agreement">Agreement</a>
    <a href="/policy" class="policy">Policy</a>
  </footer>
</body>

</html>