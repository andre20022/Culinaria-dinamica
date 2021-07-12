<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<link rel="shortcut icon" href="img/icon.png" type="image/x-icon">
	<link rel="stylesheet" href="css/estilos.css">
	<title>Culinária Dinâmica</title>
</head>
<body>
     <div class="container-fluid">
	     <div class="row">
		     <nav style="background-color: #041e42;" class="navbar navbar-light justify-content-start p-3">
					<span style="color: yellow;font-size: 1.9em;margin-right: 10px;" class="material-icons">
					     lunch_dining
					</span>
					<a class="navbar-brand text-white" href="#">Culinária dinâmica</a>
			 </nav>
		 </div><!-- /ROW -->
		 <div class="row">
		     <div class="col-lg-12 p-2 header-cafe d-flex align-items-end">
			     <div class="container d-flex justify-content-center" style="height: 230px;">
					<div class="row">
					     <p class="text-white text-center format">Se divirta com a culinária dinâmica respondendo as questões dos videos e aprendendo novas receitas para fazer com sua familia.</p>
						<span id="move" style="color: white;font-size: 2.5em;" class="material-icons text-center align-self-end move-botao">
							expand_more
						</span>
					</div><!-- /ROW -->
				 </div>
			 </div>
		 </div><!-- /ROW -->

		 <div id="msg" style="width: 300px;margin: auto;display: none;" class="alert alert-primary position-fixed fixed-top mt-2" role="alert">
		      
		</div>

		 <div id="questoes" class="row pt-4 pb-4">

		     <div class="col-lg-12 d-flex justify-content-center">
				<span style="color: red;" class="material-icons align-self-center">
				     assignment
				</span>
				<h2 style="margin-left: 5px;" class="text-center">Questionários</h2>
		     </div>

		     <div class="col-lg-4">
			    <div class="row justify-content-center">
				
					<div class="card m-2" style="width: 18rem;">
							<video style="height: 200px;" controls>
							<source src="video/basica.mp4" type="video/mp4">
							Your browser does not support the video tag.
							</video> 
						<div class="card-body">
							<h5 class="card-title">Responda</h5>

							<form method="GET" id="form1">
								<label for="">Qual a receita ?</label>
								<select name="rsp1" id="rs1">
									<option value="Lasanha">Lasanha</option>
									<option value="Pizza">Pizza</option>
									<option value="Pão">Pão</option>
									<option value="Risoto">Risoto</option>
									<option value="Broa">Broa</option>
								</select>
								<label for="">Qual o tempo de preparo ?</label>
								<select class="mb-2" style="display: block;" name="rsp2" id="rs2">
									<option value="10">10 Minutos</option>
									<option value="5">5 Minutos</option>
									<option value="30">30 Minutos</option>
									<option value="15">15 Minutos</option>
								</select>

								<input class="btn btn-primary" type="submit" value="Enviar">
							</form>
						</div>
					</div>


					<div class="card m-2" style="width: 18rem;">
							<video style="height: 200px;" controls>
							<source src="video/basica.mp4" type="video/mp4">
							Your browser does not support the video tag.
							</video> 
						<div class="card-body">
							<h5 class="card-title">Responda</h5>

							<form method="GET" id="form2">
								<label for="">Qual a receita ?</label>
								<select name="rsp3" id="rs3">
									<option value="Lasanha">Lasanha</option>
									<option value="Pizza">Pizza</option>
									<option value="Pão">Pão</option>
									<option value="Risoto">Risoto</option>
									<option value="Broa">Broa</option>
								</select>
								<label for="">Qual o tempo de preparo ?</label>
								<select class="mb-2" style="display: block;" name="rsp4" id="rs4">
									<option value="10">10 Minutos</option>
									<option value="5">5 Minutos</option>
									<option value="30">30 Minutos</option>
									<option value="15">15 Minutos</option>
								</select>

								<input class="btn btn-primary" type="submit" value="Enviar">
							</form>
						</div>
					</div>	
				
				</div><!-- /ROW -->

			 </div>
			 
			 <div class="col-lg-4">
			    <div class="row justify-content-center">
				
					<div class="card m-2" style="width: 18rem;">
							<video style="height: 200px;" controls>
							<source src="video/basica.mp4" type="video/mp4">
							Your browser does not support the video tag.
							</video> 
						<div class="card-body">
							<h5 class="card-title">Responda</h5>
							<form method="GET" id="form3">
								<label for="">Qual a receita ?</label>
								<select name="rsp5" id="rs5">
								    <option value="Lasanha">Lasanha</option>
									<option value="Pizza">Pizza</option>
									<option value="Pão">Pão</option>
									<option value="Risoto">Risoto</option>
									<option value="Broa">Broa</option>
								</select>
								<label for="">Qual o tempo de preparo ?</label>
								<select class="mb-2" style="display: block;" name="rsp6" id="rs6">
									<option value="10">10 Minutos</option>
									<option value="5">5 Minutos</option>
									<option value="30">30 Minutos</option>
									<option value="15">15 Minutos</option>
								</select>

								<input class="btn btn-primary" type="submit" value="Enviar">
							</form>
						</div>
					</div>


					<div class="card m-2" style="width: 18rem;">
							<video style="height: 200px;" controls>
							<source src="video/basica.mp4" type="video/mp4">
							Your browser does not support the video tag.
							</video> 
						<div class="card-body">
							<h5 class="card-title">Responda</h5>
							<form method="GET" id="form4">
								<label for="">Qual a receita ?</label>
								<select name="rsp7" id="rs7">
								    <option value="Lasanha">Lasanha</option>
									<option value="Pizza">Pizza</option>
									<option value="Pão">Pão</option>
									<option value="Risoto">Risoto</option>
									<option value="Broa">Broa</option>
								</select>
								<label for="">Qual o tempo de preparo ?</label>
								<select class="mb-2" style="display: block;" name="rsp8" id="rs8">
									<option value="10">10 Minutos</option>
									<option value="5">5 Minutos</option>
									<option value="30">30 Minutos</option>
									<option value="15">15 Minutos</option>
								</select>

								<input class="btn btn-primary" type="submit" value="Enviar">
							</form>
						</div>
					</div>	
				
				</div><!-- /ROW -->

			 </div>

			 <div class="col-lg-4">
			    <div class="row justify-content-center">
				
					<div class="card m-2" style="width: 18rem;">
							<video style="height: 200px;" controls>
							<source src="video/basica.mp4" type="video/mp4">
							Your browser does not support the video tag.
							</video> 
						<div class="card-body">
							<h5 class="card-title">Responda</h5>
							<form method="GET" id="form5">
								<label for="">Qual a receita ?</label>
								<select name="rsp9" id="rs9">
								    <option value="Lasanha">Lasanha</option>
									<option value="Pizza">Pizza</option>
									<option value="Pão">Pão</option>
									<option value="Risoto">Risoto</option>
									<option value="Broa">Broa</option>
								</select>
								<label for="">Qual o tempo de preparo ?</label>
								<select class="mb-2" style="display: block;" name="rsp10" id="rs10">
									<option value="10">10 Minutos</option>
									<option value="5">5 Minutos</option>
									<option value="30">30 Minutos</option>
									<option value="15">15 Minutos</option>
								</select>

								<input class="btn btn-primary" type="submit" value="Enviar">
							</form>
						</div>
					</div>

					<div class="card m-2" style="width: 18rem;">
							<video style="height: 200px;" controls>
							<source src="video/basica.mp4" type="video/mp4">
							Your browser does not support the video tag.
							</video> 
						<div class="card-body">
							<h5 class="card-title">Responda</h5>
							<form method="GET" id="form6">
								<label for="">Qual a receita ?</label>
								<select name="rsp11" id="rs11">
							     	<option value="Lasanha">Lasanha</option>
									<option value="Pizza">Pizza</option>
									<option value="Pão">Pão</option>
									<option value="Risoto">Risoto</option>
									<option value="Broa">Broa</option>
								</select>
								<label for="">Qual o tempo de preparo ?</label>
								<select class="mb-2" style="display: block;" name="rsp12" id="rs12">
									<option value="10">10 Minutos</option>
									<option value="5">5 Minutos</option>
									<option value="30">30 Minutos</option>
									<option value="15">15 Minutos</option>
								</select>

								<input class="btn btn-primary" type="submit" value="Enviar">
							</form>
						</div>
					</div>	
				
				</div><!-- /ROW -->

			 </div>

		 </div><!-- /ROW -->
		 
		 <div style="background-color: #041e42;" class="row p-4">
			<div class="col-lg-12 text-center text-white">
			     <p class="m-0">Creative Developer &copy; 2021</p>
			</div>
		 </div><!-- /ROW -->
     </div>
	 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
	 <script src="function.js"></script>
</body>
</html>