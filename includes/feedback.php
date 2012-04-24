<div id="feedback">
<?php
  $to='mail@vpopolam.ru';
  $messageSubject='Сообщение с сайта vpopolam.ru';
  $confirmationSubject='Ваше сообщение для vpopolam.ru';
  $confirmationBody="Кто-то (мы надеемся, что вы) отправил сообщение с сайта vpopolam.ru, указав данный адрес email.\r\n Если это были не вы, просто проигнорируйте это сообщение!\r\n Текст сообщения приведён ниже:\r\n";
  $email='';
  $body='';
  $displayForm=true;
  if ($_POST){
    $email=stripslashes($_POST['email']);
    $body=stripslashes($_POST['messagebody']);
    // validate e-mail address
    $valid=eregi('^([0-9a-z]+[-._+&])*[0-9a-z]+@([-0-9a-z]+[.])+[a-z]{2,6}$',$email);
    $crack=eregi("(\r|\n)(to:|from:|cc:|bcc:)",$body);
    if ($email && $body && $valid && !$crack){
      if (mail($to,$messageSubject,$body,'From: '.$email."\r\n")
          && mail($email,$confirmationSubject,$confirmationBody.$body,'From: '.$to."\r\n")){
        $displayForm=false;
?>
<p>
  Ваше сообщение успешно отправлено!</br>
  Копия сообщения была отправлена на адрес <b><?php echo htmlspecialchars($email); ?></b>.</br>
  Вот то, что вы отправили нам:
</p>
<?php
        echo '<p>'.htmlspecialchars($body).'</p>';
      }else{ // the messages could not be sent
?>
<p>
  Что-то произошло с сервером во время отправки сообщения.</br>
  Это иногда случается и в этом нет вашей вины. Не корите себя за это.</br>
  Приносим извинения за моральные страдания!</br>
  Попробуйте связаться с нами другими способами.
</p>
<?php
      }
    }else if ($crack){ // cracking attempt
?>
<p><strong>
  Ваше сообщение несёт в себе зло.</br>
  Похоже на то, что вы пытаетесь ломать нас полностью.</br>
  Пожалуй, мы не будем отправлять ваше сообщение, уж извините!
</strong></p>
<?php
    }else{ // form not complete
?>
<p><strong>
  Сообщение не может быть отправлено.</br>
  Вы должны указать как корректный адрес email, так и написать несколько слов.
</strong></p>
<?php
    }
  }
  if ($displayForm){
?>
<form action="contact.php" method="post">
<span class="email">
<label for="email">Ваша электронная почта</label>
<input type="text" name="email" id="email" value="<?php echo htmlspecialchars($email); ?>" size="30">
</span>
<span class="message">
<label for="messagebody">Сообщение</label>
<textarea name="messagebody" id="messagebody" cols="30" rows="5">
<?php echo htmlspecialchars($body); ?>
</textarea>
</span>
<button type="submit">Телеграфировать</button>
</form>
<?php
  }
?>
</div>