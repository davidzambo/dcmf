<style>
  .contact {padding: 30px 10px; background-color: #FECD0D;}
  input, textarea {display:inline-block; width: 90%; border:none; border-bottom: 1px solid #999; margin: 15px 0; font-size: 2rem; background-color: #FECD0D; resize: none;}
  input:focus, textarea:focus {border-bottom: 1px solid red;}
  .contact-h1 {padding: 0 0 30px 0; text-align: center;}
</style>
<div class="container-fluid contact" id="contact">
  <div class="row">
    <div class="col-xs-12">
      <h1 class="contact-h1">Have you got any question? Contact me!</h1>
    </div>
  </div>

  <div class="row">
    <div class="col-md-5 col-md-offset-1">
      <form action="index.html" method="post">
        <input type="text" name="contact-name" placeholder="name">
        <input type="email" name="contact-email" placeholder="e-mail">
        <textarea name="message" rows="6" placeholder="message"></textarea>
        <button type="button" class="btn btn-secondary" name="send_message">send message</button>
      </form>
    </div>
    <div class="col-md-5">
      <p>If you have any further question about me, or if you want my detailed CV, or even if you have a project for me,
      feel free to send me a message there <span class="glyphicon glyphicon-arrow-left"></span>, or send me a mail to
      <strong>david[at]dcmf[dot]hu</strong>.</p>
    </div>

  </div>
</div>
