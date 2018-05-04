<!doctype html>
<html lang="pt">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="vendor/twbs/bootstrap/dist/css/bootstrap.min.css">

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="css/ivanstyle.css">

     <script>
        $(function () {
            $('[data-toggle="popover"]').popover()
        })
	  </script>

    <title>northWind</title>
  </head>

  <body>


  <!--Navbar on top  -->
	<nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark  ">


			<a href="index.php" class="navbar-brand bg-warning mb-0"><h4>&nbsp; Banco Norte&nbsp;</h4></a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsite">
				<span class="navbar-toggler-icon"></span>
			</button>
		<div class="collapse navbar-collapse" id="navbarsite">
					<ul class="navbar-nav mr-auto">

					<!--Menu Items-->

            <li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" id="navDrop">Funcionários</a>
							<div class="dropdown-menu">
								<a class="dropdown-item" href="funcionario-form.php">Cadastrar</a>
								<a class="dropdown-item" href="funcionario-lista.php">Listar</a>
							</div>
            </li>

            <li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" id="navDrop">Região</a>
							<div class="dropdown-menu">
								<a class="dropdown-item" href="regiao-lista.php">Listar</a>
							</div>
            </li>

            <li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" id="navDrop">Territórios</a>
							<div class="dropdown-menu">
								<a class="dropdown-item" href="territorios-lista.php">Listar</a>
							</div>
            </li>

			<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" id="navDrop">Funcionario-Território</a>
							<div class="dropdown-menu">
								<a class="dropdown-item" href="funcionario-territorio-form.php">Cadastrar</a>
								<a class="dropdown-item" href="funcionario-territorio-lista.php">Listar</a>
							</div>
            </li>

          </ul>
					<form action="" class="form-inline">
						<input placeholder="Buscar..." type="search" class="form-control ml-5 mr-1">
						<button class="btn btn-warning" type="submit">OK</button>
					</form>

				</div>
			</div>
	</nav>
    <div class="container">
	<div class="mb-5"></div><br>




    <div class="container ">

        <div class="principal">
