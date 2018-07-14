<?php 

	$db = mysqli_connect("localhost", "root", "", "salon") or die('Error connection');

	$form_error = "";
	$name_error = "";
	$mail_error = "";
	$phone_error = "";
	$reg = "";
	
	
	$name = "";
	$phone = "";
	$mail = "";
	
	
	
	if(isset($_POST['reg'])){
		
		$name = $_POST['name'];
		$mail = $_POST['mail'];
		$phone = $_POST['phone'];
		$textarea = $_POST['textarea'];
		
		
		if (empty($_POST['name']) && empty($_POST['mail']) && empty($_POST['phone']) && empty($_POST['textarea'])){
			
			
			
			$form_error = '
							
							<div class="alert alert-warning">
							  <strong>Предупреждение!</strong> Заполните всю форму.
							</div>
						';
			
		}
		if(empty($_POST['name'])){
			$name_error = '
							
							<div class="alert alert-warning">
							  <strong>Предупреждение!</strong> Заполните поле "Ваше имя".
							</div>
						';
			
		}
		if(empty($_POST['mail'])){
			$mail_error = '
							
							<div class="alert alert-warning">
							  <strong>Предупреждение!</strong> Заполните поле "Ваше E-mail".
							</div>
						';
			
		}
		if(empty($_POST['phone'])){
			$phone_error = '
							
							<div class="alert alert-warning">
							  <strong>Предупреждение!</strong> Заполните поле "Мобильный телефон".
							</div>
						';
			
		}
		else{
			
			
			
			
			$insert = mysqli_query($db, "INSERT INTO users(name, mail, phone, textarea) VALUES ('$name', '$mail', '$phone', '$textarea')");
			
			$name = "";
			$phone = "";
			$mail = "";
			
			$reg = '
							
							<div class="alert alert-warning">
							  <strong>ПОЗДРАВЛЯИМ!</strong> Ваши данные успешно отправлино.
							</div>
						';
	
			
			
		}
		
		

	}




?>




<html>
	
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Салон красоты</title>
		<meta charset="UTF-8">
		<link rel="stylesheet" href="css/bootstrap.css">
		<link rel="stylesheet" href="css/style.css">
		<script  src="js/jquery-3.2.1.js"> </script>
		<script  src="js/bootstrap.js"> </script>
		<script  src="js/main.js"> </script>
	</head>
	
	
	<body>
		<div class="block">
			<section id="header">
				<header class="container head">
					<div id="logo" class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
						<a href="#"><img src="images/logo.png"></a>
					</div>
					<div id="header-contacts" class="col-xs-12 col-sm-6 col-md-4 col-md-offset-4 col-lg-4 col-lg-offset-4">
						<div id="address">
							<span class="glyphicon glyphicon-map-marker"></span>п.Тим ул. Карла Маркса,17
						</div>
						<div id="phone">
							<span class="glyphicon glyphicon-earphone"></span>(8960) 696-03-07
						</div>		
					</div>
				</header>
			</section>
			<nav class="navbar navbar-default nav_bg">
				<div class="container">
					<!-- Brand and toggle get grouped for better mobile display -->
					<div class="navbar-header">
						<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
					  
					</div>

					<!-- Collect the nav links, forms, and other content for toggling -->
					<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
						<ul class="nav navbar-nav" id="navs">
							<li><a class="menu m1"  name="about" href="#">О нас</a></li>
							<li><a class="menu m2" name="price" href="#">Услуги и цены</a></li>
							<li><a  class="menu m3"  name="portfolio"hre f="#">Наши работы</a></li>
							<li><a class="menu m4" name="news" href="#">Новости</a></li>
							<li><a class="menu m5" name="contacts"  href="#">Контакты</a></li>
						
						</ul>
					 
					 
					</div><!-- /.navbar-collapse -->
				</div><!-- /.container-fluid -->
			</nav>
			
			<div class="carousel_my">
				<div class='pages'></div>
				<div class="carousel">
				
					<div id="carousel-topol" class="carousel slide" data-ride="carousel">
						<ol class="carousel-indicators">
							<li data-target="#carousel-topol" data-slide-to="0" class="active"></li>
							<li data-target="#carousel-topol" data-slide-to="1" class=""></li>
							<li data-target="#carousel-topol" data-slide-to="2" class=""></li>
						</ol>

						<!-- Wrapper for slides -->
						<div class="carousel-inner" role="listbox">
							<div class="item active">
								<img src="images/slide-1.jpg" alt="Салон красоты Надежда">
								<div class="carousel-caption">
									На свадьбу
								</div>
							</div>
							<div class="item">
								<img src="images/slide-2.jpg" alt="Салон красоты Надежда">
								<div class="carousel-caption">
									Для деловых встреч
								</div>
							</div>
							<div class="item">
								<img src="images/slide-3.jpg" alt="Салон красоты Надежда">
								<div class="carousel-caption">
									Для вечеринок
								</div>
							</div>
						</div>

						<!-- Controls -->
						<a class="left carousel-control" href="#carousel-topol" role="button" data-slide="prev">
							<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
							<span class="sr-only">Предыдущий</span>
						</a>
						<a class="right carousel-control" href="#carousel-topol" role="button" data-slide="next">
							<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
							<span class="sr-only">Следующий</span>
						</a>
					</div>
				
					<section id="mainbody-wrap">
						<article class="container">
							<h1>Салон красоты</h1>
							<p>
								Приглашаем вас посетить салон красоты "Надежда". У нас вы найдете самых профессиональных мастеров своего дела, имеющих высокую квалификацию и большой опыт в своей деятельности. Мы существуем уже более десяти лет, и за это время наш салон зарекомендовал себя как самый лучший в городе. Мастера "Надежды" всегда в курсе самых последних трендов индустрии красоты, мы говорим с вами на одном языке. Вы учитесь у нас, а мы учимся у вас. Поэтому недовольных клиентов у нас просто не бывает.
							</p>
							<p>
								Благодаря богатому опыту и утонченному вкусу наших мастеров мы можем предложить вам то, чего вы не найдете больше нигде. Это самые низкие цены, самое высокое качество, а также самая высокая скорость работы. Посидеть в кресле в салоне красоты всегда приятно, но, уверяем, мы не задержим вас ни секундой дольше, чем это потребуется. Неземная красота теперь доступна для всех. Приходите и убедитесь в этом сами!
							</p>

					 
						

						</article>
					</section>
				</div>
			</div>	
			<div id="triggers-wrap">
				<section id="triggers" class="container">
					<h3>Надежда — это</h3>
					<div class="row">
						<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 trigger">
							<img src="images/trigger-1.png" alt="Красиво">
							<h4>Красиво</h4>
						</div>
						<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 trigger">
							<img src="images/trigger-2.png" alt="Быстро">
							<h4>Быстро</h4>
						</div>
						<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 trigger">
							<img src="images/trigger-3.png" alt="Недорого">
							<h4>Недорого</h4>
						</div>
					</div>
				</section>
			</div>
			<section id="feedback-wrap">
				<div id="feedback" class="container">
					<div id="feedback-left" class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
						<p class="h4">
							Дамы и господа! Запишитесь к мастеру прямо сейчас. Оставьте свои данные, мы свяжемся с вами в ближайшее время.
						</p>
						<div id="fbl-social">
							<h4>Давайте дружить!</h4>
							<div id="social-block">
								<a href="#" id="soc-vk" target="_blank">
									<img src="images/icon-vkontakte.png" alt="ВКонтакте">
								</a>
								<a href="#" id="soc-tw" target="_blank">
									<img src="images/icon-twitter.png" alt="Twitter">
								</a>
								<a href="#" id="soc-in" target="_blank">
									<img src="images/icon-instagram.png" alt="Instagram">
								</a>
								<a href="#" id="soc-fb" target="_blank">
									<img src="images/icon-facebook.png" alt="Facebook">
								</a>
								<a href="#" id="soc-ok" target="_blank">
									<img src="images/icon-odnoklassniki.png" alt="Одноклассники">
								</a>				
							</div>
						
						</div>
					</div>
					<div id="feedback-right" class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
						<h3>Записаться к мастеру</h3>
						<div id="API_FEX_FORM3" class="api-feedbackex">
							<div class="theme-uikit theme- color-default">
								<form  class="uk-form  uk-form-stacked"  enctype="multipart/form-data" method="POST" action="">
									<div class="uk-form-row">
										<div class="uk-form-controls">
											<input type="text" name="name"   placeholder="Ваше имя" value="<?php echo $name;  ?>" class="uk-form-default form-control">
											<div class="api-field-error"></div>
											<?php echo "$name_error";?>
										</div>
									</div>
									<div class="uk-form-row">
										<div class="uk-form-controls">
											<input type="email"  name="mail"  value="<?php echo $mail;  ?>" placeholder="Ваш E-mail *" class="required  uk-form-default form-control">
											<div class="api-field-error"></div>
											<?php echo "$mail_error";?>	
										</div>
									</div>
									<div class="uk-form-row" >
										<div class="uk-form-controls">
											<input type="text"  value="<?php echo $phone;?>" name="phone" placeholder="Мобильный телефон" class="uk-form-default form-control">
											<div class="api-field-error"></div>
											<?php echo "$phone_error";?>
										</div>
									</div>
									<div class="uk-form-row">
										<div class="uk-form-controls">
											<textarea  placeholder="Сообщение *" name="textarea" rows="5" class="required  uk-form-default form-control" style="overflow: hidden; word-wrap: break-word; resize: horizontal; height: 114px;"></textarea>
											<div class="api-field-error"></div>
										</div>
									</div>
									<?php  echo "$form_error"; ?>
									<?php  echo "$reg"; ?>
											
										
											
									
									
									
									<div  class="uk-form-row group-button" id="btn">
										<div class="uk-form-controls">
											<button type="submit" class="btn btn-primary btn-lg http://localhost/Salon/images/trigger-2.pngbtn-block uk-button-default"  name="reg" ><i class="api-icon-load"></i> Отправить</button>
											<div class="api-field-warning"></div>
										</div>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
			</section>
			
			<section id="big-map">
				<h3 class="container">Где мы находимся</h3>
				<div id="map">
					<iframe style="display: block; width: 100%; height: 320px;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1238.5861411384578!2d37.12174795672079!3d51.62005317965379!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x412f83f2df9d026b%3A0x2198beca72171c45!2zdWwuIE1ha3NpbWEgR29ya29nbywgVGltLCBLdXJza2F5YSBvYmxhc3QnLCDVjNW41oLVvdWh1b3Vv9Wh1bYsIDMwNzA2MA!5e0!3m2!1shy!2s!4v1503478784467" width="600" height="450" frameborder="0" style="border:0" allowfullscreen>
					</iframe>
				</div>
			</section>
			
			<section id="footer-wrap">
				<footer class="container">
					
					<div class="row">
						<div id="footer-left" class="col-xs-12 col-sm-6 col-md-8 col-lg-8">
							<div id="fl-address">
								<span class="glyphicon glyphicon-map-marker"></span>п.Тим ул. Карла Маркса,17
							</div>
							<div id="fl-phone">
								<span class="glyphicon glyphicon-earphone"></span>(8960) 696-03-07
							</div>			
						</div>
						<div id="footer-right" class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
							
							<div id="copyright">
								<h5>© 2017 Салон красоты Надежда</h5>
							</div>
						</div>
					</div>
				</footer>
			</section>
		</div>
		
	
	</body>

</html>