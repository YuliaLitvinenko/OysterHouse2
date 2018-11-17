const formButton = document.getElementById('button');

formButton.onclick = function(event) {
	event.preventDefault();
	const phone = document.getElementById('phone');
	const email = document.getElementById('email');
	const message = document.getElementById('formMessage');
	let classPhone = phone.classList;
	let classEmail = email.classList;
	let classMessage = message.classList;
	let classButton = formButton.classList;
		if (phone.value === "" && email.value === "") {
			classPhone.add ("alert");
			classEmail.add ("alert");
  			} 
  		
		if (phone.value != "" || email.value != "") {
			classPhone.remove ("alert");
			classEmail.remove ("alert");
			classMessage.add ("form-message_submitted");
			classMessage.remove ("form-message_nonsubmitted");
			classButton.add ("submitted");
			document.getElementById('form').reset()
  	}
}