<!doctype html>
<html>
    <head>
        
        <script type="text/javascript">
    		WebFontConfig = {
    		  custom: {
    		  	families: ['Halo'],
    		  	urls: ['assets/fonts/fonts.css']
    		  }
    		};

    		(function(d) {
    		   var wf = d.createElement('script'), s = d.scripts[0];
    		   wf.src = 'http://ajax.googleapis.com/ajax/libs/webfont/1.5.18/webfont.js';
    		   s.parentNode.insertBefore(wf, s);
    		})(document);
    	</script>


        <meta charset="utf-8">
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Major III - Travel roulette</title>
        <link rel="stylesheet" href="css/style.css">
    </head>
    <body>

		<nav>
			<main>
				<div class="inner-nav">
					<img src="assets/images/logo.jpg" width="193" alt="Thomas Cook logo">
					<a href="http://thomascook.be">Bezoek onze hoofdsite</a>
				</div>
			</main>
		</nav>

		<main>
			<header>
				<h2>Nog niet zeker <span>waar</span> je heen wil?</h2>

				<section class="header-cols">
					<div class="col">
						<img src="assets/images/form/stap-1.png" height="54" alt="Stap 1 tekening" width="55">
						<h3>Stap 1</h3>
						<p>Vul de gele vakken in onderstaande postkaart aan.</p>
					</div>

					<div class="col">
						<img src="assets/images/form/stap-2.png" height="52" width="73" alt="Stap 2 tekening">
						<h3>Stap 2</h3>
						<p>Vul je gegevens rechts correct in.</p>
					</div>

					<div class="col last-col">
						<img src="assets/images/form/stap-3.png" height="57" width="58" alt="Stap 3 tekening">
						<h3>Stap 3</h3>
						<p>Ontdek meteen van waaruit jouw postkaartje verstuurd word!</p>
					</div>
				</section>
			</header>

			<div class="formulier">
				<form method="post">
					
					<section class="kaart">
						<h2>Hey!</h2>
						<p>
							Het is geweldig hier! Ik heb al héél veel
							
							<select name="optie1" required>
								<option value=""></option>
								<option value="cultuur">culturele uitstappen gemaakt!</option>
								<option value="zon">in de zon gelegen!</option>
								<option value="zee">gezwommen in de zee!</option>
								<option value="uitgang">gedronken met vrienden!</option>
							</select>

							! Het was echt een goed idee om zo'n 

							<select name="optie2" required>
								<option value=""></option>
								<option value="kort">korte reis</option>
								<option value="lang">lange reis</option>
								<option value="ver">verre reis</option>
							</select>

							te maken. Met 

							<select name="optie3" required>
								<option value=""></option>
								<option value="vliegtuig">het vliegtuig</option>
								<option value="trein">de trein</option>
								<option value="auto">de auto</option>
							</select>

							gaan was ook best gezellig! Alvast vele groeten!
						</p>
						<h3>Tot gauw!</h3>
					</section>

					<section class="form">
						<input type="text" name="naam" id="naam" placeholder="Naam" required />
						<input type="text" name="email" id="email" placeholder="Email" required />
						<input type="text" name="telefoon" id="telefoon" placeholder="Telefoon" required />

						<input type="submit" value="Versturen" />
					</section>

				</form>
			</div>
		</main>
        
        <script src="js/script.js"></script>
    </body>
</html>