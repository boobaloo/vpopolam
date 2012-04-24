<div id="feedback">
<?php
  $to='mail@vpopolam.ru';
  $messageSubject='Message from vpopolam.ru';
  $confirmationSubject='Your message for vpopolam.ru';
  $confirmationBody="Someone (we're hope it was you) send us a message from http://vpopolam.ru, with this email.\r\n If this wasn't you simply ignore this message!\r\n Text of the message sent shown below:\r\n";
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
  Your message was succesfully sent!</br>
  Copy of the message was cc-ed to <b><?php echo htmlspecialchars($email); ?></b>.</br>
  That is your message to us:
</p>
<?php
        echo '<p>'.htmlspecialchars($body).'</p>';
      }else{ // the messages could not be sent
?>
<p>
  Something went wrong with server while sending message.</br>
  That happens sometimes and we are not responsible to that. And you too.</br>
  We're really sorry for this!</br>
  Please, try again later!
</p>
<?php
      }
    }else if ($crack){ // cracking attempt
?>
<p><strong>
  Your message contains hidden evil.</br>
  Seems you're trying to crack us.</br>
  We will not send your message, sorry!
</strong></p>
<?php
    }else{ // form not complete
?>
<p><strong>
  Your message couldn't be sent.</br>
  You would type correct email and some message.
</strong></p>
<?php
    }
  }
  if ($displayForm){
?>
<form action="contact.php" method="post">
<span class="email">
<label for="email">Your email address</label>
<input type="text" name="email" id="email" value="<?php echo htmlspecialchars($email); ?>" size="30">
</span>
<span class="message">
<label for="messagebody">Your message</label>
<textarea name="messagebody" id="messagebody" cols="30" rows="5">
<?php echo htmlspecialchars($body); ?>
</textarea>
</span>
<button type="submit">Send it to us</button>
</form>
<br/>
<?php
  }
?>
</div>