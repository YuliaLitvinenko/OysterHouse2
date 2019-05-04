<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<title>Oyster House</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Свежие морские деликатесы дома">
	<link rel="stylesheet" type="text/css" href="eric-meyer-reset.min_.css">
  	<link rel="stylesheet" type="text/css" href="normalize.css">
  	<link rel="stylesheet" type="text/css" href="style2.css">
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  	<script src="script_tabs_Smallscreen.js"></script>
  	<script src="script_tabs_Largescreen.js"></script>
  	<script src="jquery.maskedinput.min.js"></script>

</head>
<body>

	<header class="header">
		<div class="header-title">
			<h1>Я хочу сделать заказ домой</h1>
		</div>
	</header>
 
	<main>

		<section class="section-ourproducts">

				<h2 class="section-title">Наши продукты</h2>		

				<div class="ourproducts-description">

					<div class="ourproducts-flexbox">

						<ul class="ourproducts-flexbox__nav">
							<li><a id="tab1" href="#t1">Хасанские устрицы</a></li>
							<li><a id="tab2" href="#t2">Императорские устрицы</a></li>
							<li><a id="tab3" href="#t3">Гребешок</a></li>
							<li><a id="tab4" href="#t4">Краб</a></li>
						</ul>

						<div class="ourproducts-flexbox__col1">
							<div id="t1">
								<img src="./images/oyster_h.jpg" height=200px width=200px alt="Хасанские устрицы">
								<p> <strong>Цена:</strong> 1500 рублей за 1 кг (6-7 шт.)</p>
							</div>
							<div id="t2">
								<img src="./images/oyster_i.jpg" height=200px width=200px alt="Императорские устрицы">
								<p> <strong>Цена:</strong> 1500 рублей за 1 кг (6-7 шт.)</p>
							</div>
							<div id="t3">								
								<img src="./images/scallop.jpg" height=200px width=200px alt="Морской гребешок">
								<p> <strong>Цена:</strong> 2000 рублей за 1 кг (4-5 шт.)</p>
							</div>
							<div id="t4">
								<img src="./images/crab.jpg" height=200px width=200px alt="Фаланги краба">
								<p> <strong>Цена:</strong> 3800 рублей за 1 кг</p>
							</div>
						</div>

						<div class="ourproducts-flexbox__col2"></div>

						<div class="ourproducts-flexbox__col3">
							<div class="ourproducts-flexbox__col3--mobflex" id="t1">
								<h3>Хасанские устрицы</h3>
								<img src="./images/oyster_h.jpg" height=200px width=200px alt="Хасанские устрицы">
								<p class="ourproducts-text">Красивая волнистая раковина хасанской устрицы &ndash; ее характерная особенность. Это глубоководная устрица из акватории Владивостока, более сложная в добыче, чем устрицы из прибрежных вод. Морские течения, глубина определяют ее вкус &ndash; слабосоленый, сладковатый. Эти устрицы обладают плотной, мясистой текстурой.</p>
								<p class="ourproducts-price h"><strong>Цена:</strong> 1500 рублей за 1 кг (6-7 шт.)</p>
								<a href="#order">Заказать</a>
							</div>
							<div id="t2">
								<h3>Императорские устрицы</h3>
								<img src="./images/oyster_i.jpg" height=200px width=200px alt="Императорские устрицы">
								<p class="ourproducts-text">Императорские устрицы &ndash; крупные и продолговатые. Это распространенный на Дальнем Востоке вид устриц, они обитают на разной глубине большими колониями. Императорские устрицы имеют классический солоноватый вкус, аромат моря и мягкую текстуру.</p>
								<p class="ourproducts-price other"><strong>Цена:</strong> 1500 рублей за 1 кг (6-7 шт.)</p>
								<a href="#order">Заказать</a>
							</div>
							<div id="t3">
								<h3>Гребешок</h3>
								<img src="./images/scallop.jpg" height=200px width=200px alt="Морской гребешок">
								<p class="ourproducts-text">Дальневосточный гребешок &ndash; морепродукт, богатый белком и микроэлементами. Его мясо нежное, сладковатое на вкус и легкое в приготовлении. Гребешок приедет в Москву в свежем, не замороженном виде, чтобы вы могли получить максимум пользы и удовольствия.</p>
								<p class="ourproducts-price other"><strong>Цена:</strong> 2000 рублей за 1 кг (4-5 шт.)</p>
								<a href="#order">Заказать</a>
							</div>
							<div id="t4">
								<h3>Краб</h3>
								<img src="./images/crab.jpg" height=200px width=200px alt="Фаланги краба">
								<p class="ourproducts-text">Камчатский краб &ndash; самый крупный вид ракообразных Дальнего Востока и самый популярный деликатес. Его часто называют Королевским крабом. Способ приготовления на удивление прост, а вкус поражает своей насыщенностью.</p>
								<p class="ourproducts-price other"><strong>Цена:</strong> 3800 рублей за 1 кг</p>
								<a href="#order">Заказать</a>
							</div>
						</div>

					</div>

				</div>

		</section>

		<section class="section-delivery">

			<h2 class="section-title">О доставке</h2>

			<div class="delivery-flexbox">

				<ul class="delivery-flexbox__images">

					<li class="delivery-flexbox__images_steps">
						<div class="delivery-imagewrap">
							<img class="delivery_image" src="./images/smartphone.svg" alt="" height="60px">
						</div>
					</li>

					<li class="delivery-flexbox__images_steps">
						<div class="delivery-imagewrap">
							<img class="delivery_image" src="./images/sea-waves.svg" alt="" height="60px">
						</div>
					</li>

					<li class="delivery-flexbox__images_steps">
						<div class="delivery-imagewrap">
							<img class="delivery_image" src="./images/aeroplane.svg" alt="" height="60px">
						</div>
					</li>

				</ul>

				<ul class="delivery-flexbox__description">

					<li class="delivery-flexbox__description_steps">
						<p class="delivery_description">Сделайте заказ, позвонив или написав нам. Мы проконсультируем и поможем с выбором!</p>
					</li>

					<li class="delivery-flexbox__description_steps">
						<p class="delivery_description">Уже на следующий день во Владивостоке опытные водолазы отправятся за добычей вашего деликатеса в море.</p>
					</li>

					<li class="delivery-flexbox__description_steps">
						<p class="delivery_description">В течение 24 часов после вылова ваш заказ будет доставлен к вам на стол.</p></div>
					</li>

				</ul> 

			</div>

		</section>

		<section class="section-order">

			<div><a name="order"></a></div>

			<h2 class="section-title">Сделать заказ</h2>

			<div class="order-flexbox">

				<div class="order-flexbox__form"> 
					<p class="order-flexbox__form_text">Оставьте нам свои контакты</p>
						<form id="form">
							<input class="form-input-contact" type="text" name="name" placeholder="Как Вас зовут?" id="name">
							<input class="form-input-contact" type="text" name="phone" placeholder="Ваш номер телефона" id="phone">
							<input class="form-input-contact" type="text" name="email" placeholder="или Email" id="email">
							<textarea class="form-input-message" type="text" name="message" placeholder="Пожелания или вопросы" id="message"></textarea>
							<input class="form-input-button" type="button" value="Отправить сообщение" id="button">
							<div class="form-input-PD">Нажимая на кнопку, вы даете согласие на обработку персональных данных</div>
							<div class="result"></div>
							<div class="form-message_nonsubmitted" id="formMessage">
								<p>Ваше сообщение отправлено, и мы скоро с вами свяжемся!</p>
							</div>
						</form>
				</div>

				<div class="order-flexbox__or">
					<p class="order-flexbox__or_text">или</p>
				</div>

				<div class="order-flexbox__contacts">
					<p class="order-flexbox__contacts_text">Свяжитесь с нами</p>
					<p class="contacts-phone"><a class="link" href="tel:"+79165997179>8 916 599 71 79</a></p>
					<p class="contacts-hours">(9:00 – 21:00, без выходных)</p>
					<p class="picture"><a href="https://wa.me/79165997179"><img src="./images/whatsapp-logo.svg" height="40px"></a></p>
				</div>

			</div>

		</section>

	</main>

	<footer class="footer">

		<h5>Oyster House</h5>
		<div><a href="https://www.instagram.com/oystersinmoscow"><img class="footer__instagram-logo" src="./images/instagram.svg" height="40px"></a></div>
		<a href="" class="footer-link">Сертификат качества</a>
		<p class="footer-text">Владивосток - Москва <br>2019</p>
	
		<script type="text/javascript" src="script_tabs_Adaptation.js"></script>
		<script type="text/javascript" src="script_phonemask.js"></script>
		<script type="text/javascript" src="script_formvalidation.js"></script>
		<script type="text/javascript" src="script_php.js"></script>

	</footer>

</body>
</html>