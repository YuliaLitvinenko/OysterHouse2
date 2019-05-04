<?php 
if (!empty($_POST['phone']) OR !empty($_POST['email'])){
  
 $headers = 'From: Oyster House' . "\r\n" .
    'Reply-To: welcome@oyster-house.ru' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();
             
  $theme = 'Новое сообщение с сайта';

  $letter ='Имя: '.$_POST['name'].'';
  $letter .= "\r\n";
  $letter .='Email: '.$_POST['email'].'';
  $letter .= "\r\n";
  $letter .='Телефон: '.$_POST['phone'].'';
  $letter .= "\r\n";
  $letter .='Сообщение: '.$_POST['message'].'';
  
  if (mail('welcome@oyster-house.ru', $theme, $letter, $headers)){
    echo '<span class="form-message_submitted">' . "Ваше сообщение отправлено, и мы скоро с вами свяжемся!" . '</span>';
  } else {
    echo "Ошибка при отправке!";
  }
}