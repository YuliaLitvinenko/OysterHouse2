function setup_for_width(mql) {
	if (mql.matches) {
		document.getElementById("tab1").innerHTML = '<img class="tab_image_1" src="./images/oyster_h.svg" alt="" height=60px width=60px/>';
		document.getElementById("tab2").innerHTML = '<img class="tab_image" src="./images/oyster_i.svg" alt="" height=40px width=40px/>';
		document.getElementById("tab3").innerHTML = '<img class="tab_image" src="./images/scallop.svg" alt="" height=60px width=60px/>';
		document.getElementById("tab4").innerHTML = '<img class="tab_image" src="./images/crab.svg" alt="" height=60px width=60px/>';
	} else {
		document.getElementById("tab1").innerText = 'Хасанские устрицы';
		document.getElementById("tab2").innerText = 'Императорские устрицы';
		document.getElementById("tab3").innerText = 'Гребешок';
		document.getElementById("tab4").innerText = 'Краб';
	}
}

var mql = window.matchMedia("screen and (max-width: 1023px)");

mql.addListener(setup_for_width); 

setup_for_width(mql);