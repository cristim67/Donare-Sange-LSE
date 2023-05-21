<!DOCTYPE html>

<?php require_once "controllerUserData.php"; ?>

<?php require_once "request.php"; ?>


<html lang="en">

<head>
	<title>Donare de sange</title>

	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width,initial-scale=1" />

	<link rel="stylesheet" href="/css/style.css">
	<link rel="stylesheet" href="/css/calendar.css">
	<link rel="stylesheet" href="/css/navbar.css">
	<link rel="stylesheet" href="/css/informatii.css">
	<link rel="stylesheet" href="/css/despre.css">
	<link rel="stylesheet" href="/css/footer.css">
	<link rel="stylesheet" href="/css/beneficii.css">
	<link rel="stylesheet" href="/css/recomandari.css">

	<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" />

	<script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>

<body>
	<div>

		<section id="afis" class="img-bg section">
		</section>

		<section id="calendar" class="calendar-section section">

			<div class="calendar-div">
				<div class="calendar-div-stanga">
					<img class="calendar-svg" src="/img/calendar-svg.svg" alt="">
					<div class="calendar-div-stanga-text">
						<h1 class="calendar-text">Nu te-ai programat inca? Programeaza-te acum!</h1>
						<!-- HTML !-->
						<a href="calendar.php">
						<button class="button-74" role="button">Programeaza-te</button>
						</a>
					</div>
				</div>
				<div class="calendar-div-dreapta">
					<h2>Este recomandat sa veniti cu 5 minute mai devreme!</h2>
					<h4>Circuitul de donare va dura aproximativ o ora de la ora programarii
						Vrei sa te programezi de pe telefonul mobil? Da zoom orei la care doresti sa te programezi si
						tine apasat lung in dreptul orei respective.</h4>
				</div>
			</div>
			<div class="calendar-div-tel">
				<img class="calendar-svg" src="/img/calendar-svg.svg" alt="">
				<div class="calendar-div-text-tel">
					<h1 class="calendar-text">Nu te-ai programat inca? Programeaza-te acum!</h1>
					<!-- HTML !-->
					<a href="calendar.php">
					<button class="button-74" role="button">Programeaza-te</button>
					</a>
				</div>
			</div>

		</section>

		<section id="recomandari" class="recomandari-section section">

			<div class="recomandari-div-beneficii" style="">
				<h1>Beneficii</h1>
				<main>
					<ol class="gradient-list">
						<li>Fiecare donator primeste un card de bonuri de
							masa in valoare de 70 de lei.</li>
						<li>Anazile pentru identificarea virusurilor.</li>
						<li>Carnet de donator ce iti aduce diverse avantaje.</li>
						<li>O zi libera de la locul de munca in ziua donarii.</li>
					</ol>
				</main>
			</div>

			<div class="recomandari-div-info">
				<h1>Recomandari</h1>
				<!-- <ul class="info-ul">
					<li class="info-li">
						Este recomandat sa aveti 8 ore de somn.
					</li>
					<li class="info-li">
						Este recomandat sa consumati o mancare usoara si sa va hidratati inainte de donare.
					</li>
					<li class="info-li">
						Este recomandat cat mai putin efort fizic inaintea donarii.
					</li>
				</ul> -->
				<main>
					<ol class="gradient-list">
						<li>Este recomandat sa aveti 8 ore de somn.</li>
						<li>Este recomandat sa consumati o mancare usoara si sa va hidratati inainte de donare.</li>
						<li>Este recomandat cat mai putin efort fizic inaintea donarii.</li>
					</ol>
				</main>
			</div>

		</section>

		<section id="informatii" class="Informatii-si-restrictii section">
			<div class="informatii-div-text">
				<h2>Informatii si restrictii</h2>
			</div>
			<div class="ag-format-container">
				<div class="ag-courses_box">
					<div class="ag-courses_item">
						<a class="ag-courses-item_link">
							<div class="ag-courses-item_bg" ;"></div>

							<div class="ag-courses-item_title">
								<i class="fa fa-beer" style="z-index: 100;"></i>
								<div class="titleag">Consum alcool</div>

							</div>

							<div class="ag-courses-item_date-box">

								<span class="ag-courses-item_date">
									<div class="contentag">
										Nu se consuma alcool cu 24 de ore inainte de a dona
									</div>
								</span>
							</div>
						</a>
					</div>

					<div class="ag-courses_item">
						<a class="ag-courses-item_link">
							<div class="ag-courses-item_bg"></div>

							<div class="ag-courses-item_title">
								<i class="fa fa-weight-scale"></i>
								<div class="titleag">Greutate</div>

							</div>

							<div class="ag-courses-item_date-box">
								<span class="ag-courses-item_date">
									Greutatea minima ceruta este de 50 de kg
								</span>
							</div>
						</a>
					</div>

					<div class="ag-courses_item">
						<a class="ag-courses-item_link">
							<div class="ag-courses-item_bg"></div>

							<div class="ag-courses-item_title">
								<i class="fa fa-ban"></i>
								<div class="titleag">Fumat</div>
							</div>

							<div class="ag-courses-item_date-box">
								<span class="ag-courses-item_date">
									Nu fumati in ziua donarii
								</span>
							</div>
						</a>
					</div>

					<div class="ag-courses_item">
						<a class="ag-courses-item_link">
							<div class="ag-courses-item_bg"></div>

							<div class="ag-courses-item_title">
								<i class="fa fa-heartbeat"></i>
								<div class="titleag">Interventii chirurgicale</div>
							</div>

							<div class="ag-courses-item_date-box">
								<span class="ag-courses-item_date">
									Sa nu aveti interventii chirurgicale in ultimele 3 saptamana ( regula se aplica si
									in cazul persoanelor care urmeaza tratament medical)
								</span>
							</div>
						</a>
					</div>

					<div class="ag-courses_item">
						<a class="ag-courses-item_link">
							<div class="ag-courses-item_bg"></div>

							<div class="ag-courses-item_title">
								<i class="fa fa-paint-brush"></i>
								<div class="titleag">Tatuaj/Piercing</div>
							</div>

							<div class="ag-courses-item_date-box">

								<span class="ag-courses-item_date">
									Nu se poate dona daca ai facut un tatuaj/piercing in ultimele 6 luni
								</span>
							</div>
						</a>
					</div>

					<div class="ag-courses_item">
						<a class="ag-courses-item_link">
							<div class="ag-courses-item_bg"></div>

							<div class="ag-courses-item_title">
								<i class="fa fa-thermometer"></i>
								<div class="titleag">Simptome</div>
							</div>

							<div class="ag-courses-item_date-box">
								<span class="ag-courses-item_date">
									Sa nu aveti simptome de raceala sau sa nu fiti vaccinati cu 48 de ore
									inainte de a dona
								</span>
							</div>
						</a>
					</div>

				</div>
			</div>
		</section>

		<section id="despre" class="despre section">
			<div class="despre-div-text">
				<h2>Persoane de contact</h2>
			</div>
			<div class="container">
				<div class="card first">
					<img src="/img/prost2" alt="Person" class="card__image">
					<p class="card__name">Teodor Furtuna</p>
					<div class="Nrtel">
						<div class="textnr">Numar telefon:</div>
						<div class="numarphone">0741986949</div>
					</div>
				</div>
				<div class="card">
					<img src="/img/prost2" alt="Person" class="card__image">
					<p class="card__name">Soare Cristina</p>
					<div class="Nrtel">
						<div class="textnr">Numar telefon:</div>
						<div class="numarphone">0766868484</div>
					</div>
				</div>
				<div class="card">
					<img src="/img/prost2" alt="Person" class="card__image">
					<p class="card__name">Craciun Ramona</p>
					<div class="Nrtel">
						<div class="textnr">Numar telefon:</div>
						<div class="numarphone">0763165987</div>
					</div>
				</div>
				<div class="card last">
					<img src="/img/prost2" alt="Person" class="card__image">
					<p class="card__name">Iancu Fabian</p>
					<div class="Nrtel">
						<div class="textnr">Numar telefon:</div>
						<div class="numarphone">0742286314</div>
					</div>
				</div>
			</div>

		</section>

		<footer style="height: 250px;" class=" blog-principal">
			<div class="left-side">
				<div class="patrat">

					<div class="sus">
						<div class="facebook">
							<a href="https://www.facebook.com/lseorgro">
								<i class="fa fa-facebook"></i>
							</a>
						</div>

						<div class="instagram">
							<a href="https://www.instagram.com/ligastudentilorelectronistilse/">
								<i class="fa fa-instagram"></i>
							</a>
						</div>
					</div>

					<div class="jos">
						<div class="youtube">
							<a href="https://www.youtube.com/@lsebucuresti">
								<i class="fa fa-youtube"></i>
							</a>
						</div>
						<div class="google">
							<a href="https://lsebucuresti.org/">
								<i class="fa fa-google"></i>
							</a>
						</div>
					</div>
				</div>
			</div>

			<div class="middle-side">
				<div class="title">
					<span class="colorat">Donare </span>
					<span class="nocolor">LSE </span>
					<span class="colorat">Sange</span>
				</div>

				<div class="buttonsPages">
					<button class="home" onclick="location.href='index.php'">Acasa</button>
					<button class="programari" onclick="location.href='calendar.php'">Programari</button>
					<button class="logari" onclick="location.href='LogInRegister.php'">Logare</button>
				</div>

				<div class="copyright">Departamentul IT &#169; 2023</div>
			</div>

			<div class="left-sidePhone">
				<div class="patrat">

					<div class="sus">
						<div class="facebook">
							<a href="https://www.facebook.com/lseorgro">
								<i class="fa fa-facebook"></i>
							</a>
						</div>

						<div class="instagram">
							<a href="https://www.instagram.com/ligastudentilorelectronistilse/">
								<i class="fa fa-instagram"></i>
							</a>
						</div>
					</div>

					<div class="jos">
						<div class="youtube">
							<a href="https://www.youtube.com/@lsebucuresti">
								<i class="fa fa-youtube"></i>
							</a>
						</div>
						<div class="google">
							<a href="https://lsebucuresti.org/">
								<i class="fa fa-google"></i>
							</a>
						</div>
					</div>
				</div>
			</div>

			<div class="right-side">
				<div class="text">Contacteaza-ne</div>
				<input type="email" placeholder="Email" class="email">
				<input type="text" placeholder="Message" class="message">
				<input type="submit" value="Trimite" class="send-button">
			</div>

			<div class="copyrightPhone">Departamentul IT &#169; 2023</div>

		</footer>

		<div class="navbar">
			<div class="navbar-home navbar-element" onclick="handleNavbar(0)">
				<div class="dot"><i class="fa fa-lg fa-home" aria-hidden="true"></i></div>
				<h2>Acasa</h2>
			</div>
			<div class="navbar-beneficii navbar-element" onclick="handleNavbar(1)">
				<div class="dot"><i class="fa fa-lg fa-calendar-check-o" aria-hidden="true"></i></div>
				<h2>Calendar</h2>
			</div>
			<div class="navbar-recomandari navbar-element" onclick="handleNavbar(2)">
				<div class="dot"></div>

				<h2>Beneficii</h2>
			</div>
			<div class="navbar-informatii navbar-element" onclick="handleNavbar(3);">
				<div class=" dot"><i class="fa fa-lg fa-exclamation" aria-hidden="true"></i>
				</div>
				<h2>Restrictii</h2>
			</div>
			<div class="navbar-despre navbar-element" onclick="
				
				handleNavbar(4);
			">
				<div class="dot">

				</div>
				<h2>Despre</h2>
			</div>
		</div>

	</div>

	<script src="js/navbar.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="js/snap-scroll.js"></script>
	<script>

		var snapScroll = $("header, section, footer").SnapScroll({
			hashes: true
		});
		// console.log(snapScroll);

		//Listen for active element change
		//You could listen globally like $(document)
		$("header").on(snapScroll.eventChangeActive, function (evt, newActive) {
			// console.log(evt, newActive);
		});

		//Listen for visible element change
		//You could listen on a specific element like $("header")
		$(document).on(snapScroll.eventChangeVisible, function (evt, visibleList) {
			// console.log(evt, visibleList.data);
		});
	</script>
</body>

</html>