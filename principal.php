<html>

<head>
	<title>Reprezentanta auto</title>

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
	integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" 
	integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
	</script>
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
	 integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
	</script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
	 integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
	</script>
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>

	<style type="text/css">
		.form-input {
			width: 90%;
		}

		.zona {
			text-align: center;
			float: center;
			border: solid;
			border-color: rgb(230, 220, 220);
			border-radius: 5%;
			background-color: rgb(230, 220, 220);
		}

		.categorie {
			border-style: outset;
			background-color: #66d9ff;
			text-align: center;
			font-size: 20px;
			font-weight: bold;
			list-style-type: none;
			height: 20%;
			padding: 5%;
		}

		li.categorie:hover {
			color: #00001a;
			background-color: #99ebff;
			font-size: 25px;
		}

		.marca {
			text-align: center;
		}
	</style>
</head>

<body style="width: 100%; font-family: Calibri;">
	<button type="button" class="btn btn-primary">Afiseaza mărci</button>
	<!--Div principal-->
	<div style="width: 100%; padding: 2%">
		<!--Linie zona A + zona B-->
		<div class="row">
			<!--Coloana zona A + categorii-->
			<div style="border-style: solid; border-color: rgb(27, 86, 175); width: 30%; height: auto; padding: 1%">
				<h3 class="zona">Mărci autoturisme</h3>
				<li class="categorie">Mercedes</li>
				<li class="categorie">Opel</li>
				<li class="categorie">Skoda</li>
				<li class="categorie">Audi</li>
			</div>
			<!--Coloana zona B + detalii model-->
			<div style="border-style: solid; border-color: rgb(27, 86, 175); width: 70%; height: auto; padding: 1%">
				<h3 class="zona">Detalii autoturisme</h3>
				<!--Linie primul model-->
				<div class="row">
					<!--Coloana cu denumire + buton stergere-->
					<div class="marca col-3">
						<h3>Marca</h3>
						<button type="button" class="btn btn-danger">Sterge</button>
					</div>
					<!--Coloana imagine-->
					<div class="col-2" style="border-style: solid">
						<img src="images.jfif" alt="img" height="100%" width="100%">
					</div>
					<!--Coloana detalii model-->
					<div class="col-5" style="border-style: solid; text-align: center">
						<h5><b>Model</b></h5>
						<h6>Data fabricatie</h6>
						<h6>Pret</h6>
					</div>
				</div>
				<!--Linie al doilea model-->
				<div class="row">
					<!--Coloana cu denumire + buton stergere-->
					<div class="marca col-3">
						<h3>Marca</h3>
						<button type="button" class="btn btn-danger">Sterge</button>
					</div>
					<!--Coloana imagine-->
					<div class="col-2" style="border-style: solid">
						<img src="images.jfif" alt="img" height="100%" width="100%">
					</div>
					<!--Coloana detalii model-->
					<div class="col-5" style="border-style: solid; text-align: center">
						<h5><b>Model</b></h5>
						<h6>Data fabricatie</h6>
						<h6>Pret</h6>
					</div>
				</div>
				<!--Coloana cu al treilea model-->
				<div class="row">
					<!--Coloana cu denumire + buton stergere-->
					<div class="marca col-3">
						<h3>Marca</h3>
						<button type="button" class="btn btn-danger">Sterge</button>
					</div>
					<!--Coloana imagine-->
					<div class="col-2" style="border-style: solid">
						<img src="images.jfif" alt="img" height="100%" width="100%">
					</div>
					<!--Coloana detalii model-->
					<div class="col-5" style="border-style: solid; text-align: center">
						<h5><b>Model</b></h5>
						<h6>Data fabricatie</h6>
						<h6>Pret</h6>
					</div>
				</div>
			</div>
		</div>
		<br />
		<!--Linie formular(Zona C)-->
		<div class="row" style="border-style: solid; border-color: rgb(27, 86, 175); padding-top: 1%">
			<!--Zona C-->
			<div class="col-2" style="padding: 1%">
				<h3 class="zona">Adaugă autoturism<h3>
			</div>
			<!--Formular-->
			<div class="col">
				<form>
					<input class="form-input" type="text" placeholder="Denumire model">
					<select class="form-input">
						<option value="" selected="selected">Marca</option>
						<option value="Mercedes">Mercedes</option>
						<option value="Opel">Opel</option>
						<option value="Skoda">Skoda</option>
						<option value="Audi">Audi</option>
					</select>
					<input class="form-input" type="text" placeholder="Data fabricatie">
					<input class="form-input" type="text" placeholder="Pret">
					<div class="form-input">
						<label>Aer conditionat?</label>
						<input type="radio" value="Da">Da</input>
						<input type="radio" value="Nu">Nu</input>
					</div>
				</form>
			</div>
			<!--Buton trimitere-->
			<div class="col-1">
				<button type="button" class="btn btn-primary" style="padding: 7%">Trimite</button>
			</div>
		</div>
	</div>
</body>

</html>