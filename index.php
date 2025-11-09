<?php
 
session_start();
 require_once __DIR__ . '/control/controler.php'; 
// Verifica se a variável de sessão 'user_id' existe (definida no LoginController)
if (!isset($_SESSION['user_id'])) {
    // Se não estiver logado, redireciona para a página de login
    header("Location: login.php"); // Altere 'login.php' para o nome do seu arquivo de login
    exit;
}

?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liberdade</title>
    <link href="css/style.css" rel="stylesheet">
</head>
<body>
    <header class="header">
    <nav id="menu_index">
        <ul>
            <li> <a href="index.php" class="other">HOME</a> </li>
            <li> <a href="index_containers2.php"> CRIAR</a> </li>
            <li> <a href="nada.php"> CONTAINERS PS -A</a> </li>
        </ul>
</nav>
</header>
</header>
    <main id="main_body">
      <h1> TROGNIZADOR</h1>
      <div icons8-ferramentas>
<div class="fotos_menus2">
<a href="index_containers2.php">   <img src="images/icons8-virtualbox.png"></a>
</div>
     
<div class="fotos_menus2">
       <img src="images/icons8-ferramentas.png" width="150px" height="150px">
</div>
            
    </main>
      <footer class="footer">
        <p>Criador: Grillo Foreman | Data: 2019/09</p>
        <p>&copy; 2025. Todos os direitos reservados.</p>
    </footer>

</body>
</html> 