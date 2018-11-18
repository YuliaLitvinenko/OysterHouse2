$('[type="button"]').click(function() {
  $.post( 
  
  "submit.php", //url
  
  { //данные из формы
    name: $('[name="name"]').val(),
    phone: $('[name="phone"]').val(),
    email: $('[name="email"]').val(),
    message: $('[name="message"]').val()
  }, 
  
  function( data ) { //после отправки данных
    $( ".result" ).html(data);
  }
  
  );
});