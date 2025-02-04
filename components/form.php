<form action="/send_form.php" method="post" class="<?php echo $form_style_class ?? "default-form"; ?>">
  <label for="first_name">
    <input type="text" name="first_name" id="first_name">
  </label>
  <label for="phone_number">
    <input type="tel" name="phone_number" id="phone_number">
  </label>
  <label for="email">
    <input type="email" name="email" id="email">
  </label>
  <div class="submit-wrapper">
    <button type="submit">Send</button>
    <span class="agree-with-policy">
      By clicking the button you agree to the <a href="/policy">privacy policy</a>
    </span>
  </div>
</form>