<?php
// Ler o nome de usuário e senha enviados pelo formulário de login
$username = $_POST['username'];
$password = $_POST['password'];

// Ler o arquivo de texto com as informações dos usuários
$users = file("users.txt");

// Verificar se as informações estão corretas
foreach ($users as $user) {
	$details = explode("\t", $user);
	if ($details[0] == $username && rtrim($details[1]) == $password) {
		// Se as informações estão corretas, redirecionar para a página de boas-vindas
		header("Location: welcome.php");
		exit();
	}
}

// Se as informações estão incorretas, mostrar uma mensagem de erro
?>
<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <title>Document</title>
</head>
<body  class="bg-dark-subtle">
    <div class="container text-center" >
        <div class="row" >
          <div class="col-1 "  >
            &nbsp;  
          </div>
          <div class="col bg-dark " > 
            <nav class="navbar bg-dark" data-bs-theme="dark" id="menu">
                <div class="container-fluid">
                  <a class="navbar-brand" href="index.php">Sistema Login</a>
                  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                  </button>
                  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                  </div>
                </div>
            </nav>
          </div>
          <div class="col-1" >
            &nbsp;
          </div>
        </div>
        <div class="row" >
            <div class="col-1">
                &nbsp;
            </div >
            <div class="col bg-white p-4">   
                <form  class="bg-white"  method = "POST" action ="index.php">
                <?php
                echo "Nome de usuário ou senha incorretos.";
                ?>
                </br></br> <input type="submit" value="Tentar Novamente" class="btn btn-dark">
                  </form>         
            </div>
            <div class="col-1">
                &nbsp;
            </div>
          </div>
      </div>
</body>
</html>
