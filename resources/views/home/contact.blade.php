<style>
  .contact {padding: 50px 0px; background-color: #FECD0D;}
  input, textarea {display:inline-block; width: 100%; border:none; border-bottom: 1px solid #999; margin: 15px 0; font-size: 2rem; background-color: #FECD0D; resize: none;}
  input:focus, textarea:focus {border-bottom: 1px solid red;outline: none;}
  .contact-h1 {padding: 0 0 30px 0; text-align: center;}
  .contact-me-description{line-height: 2em; padding-top: 20px;}
  #errormessage{display: block; background-color: #333; color: red; text-align: center; padding: 10px; font-size: 1.3em; font-weight: 400;}
  #sendmessage{display: block; background-color: #333; color: #0f0; text-align: center; padding: 10px; font-size: 1.3em; font-weight: 400;}
</style>
<div class="container-fluid contact" id="contact">
  <div class="row">
    <div class="col-xs-12">
      <h1 class="contact-h1">Have you got any question? Contact me!</h1>
    </div>
  </div>

  <div class="row">
    <div class="col-sm-10 col-sm-offset-1">
      <div class="col-md-6">
        <p class="contact-me-description">If you have any further question about me, or if you want my detailed CV, or even if you have a project for me,
          feel free to send me a message there  <span class="glyphicon glyphicon-arrow-right"></span> , or send me a mail to
          <strong>david[at]dcmf[dot]hu</strong>.
        </p>
      </div>
      <div class="col-md-6">
        <div id="errormessage"></div>
        <form action="go_home" method="post" id="contactForm">
          {{ csrf_field() }}
          <input type="text" name="name" placeholder="name" id="name">
          <input type="email" name="email" placeholder="e-mail" id="email">
          <p style="display: none"><input type="text" name="url" id="url"></p>
          <textarea name="message" rows="6" placeholder="message" id="message"></textarea>
          <button type="submit" class="btn btn-block" name="send_message" id="send_message">send message</button>
          <div class="col-xs-8 col-xs-offset-2" id="recaptcha-here"></div>
        </form>
        <div id="sendmessage">Your message has been sent!<br>I will write back soon!</div>
      </div>

    </div>
  </div>
</div>
<script src='https://www.google.com/recaptcha/api.js'></script>
<script src="/js/contact_form.js"></script>
