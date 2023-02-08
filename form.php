<?php
//jeżeli zmienna "email" została wypełniona, wysyłamy wiadomość
  if (isset($_REQUEST['email']))  {
  
  //Informację o emailu, na który będzie wysyłana wiadomość
  $admin_email = "kacper.niec@onet.pl";
  $email = $_REQUEST['email'];
  $subject = $_REQUEST['subject'];
  $message = $_REQUEST['message'];
  
  //wysyłamy email
  mail($admin_email, "$subject", $message, "From:" . $email);
  
  //komunikat potwierdzający
  echo "Dziękujemy za kontakt z nami!";
  }
  
  //jeżeli zmienna z wartością "email" nie została wypełniona pokazujemy ponownie formularz
  else  {
?>

 <form method="post">
  Email: <input name="email" type="text" /><br />
  Temat: <input name="subject" type="text" /><br />
  Wiadomość:<br />
  <textarea name="message" rows="15" cols="40"></textarea><br />
  <input type="submit" value="Wyślij" />
  </form>
  
<?php
  }
?>