const formButton = document.getElementById('button');

formButton.onclick = function(event) {
	event.preventDefault();
	const phone = document.getElementById('phone');
	const email = document.getElementById('email');
	let classPhone = phone.classList;
	let classEmail = email.classList;
		if (phone.value === "" && email.value === "") {
			classPhone.add ("alert");
			classEmail.add ("alert");
  			} 
  		
		if (phone.value != "" || email.value != "") {
			classPhone.remove ("alert");
			classEmail.remove ("alert");
	  	}
}