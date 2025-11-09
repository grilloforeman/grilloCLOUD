<?php 
// Deve ser a PRIMEIRA linha de código PHP que produz saída,
// ANTES de carregar qualquer classe, Controller, ou HTML.
session_start();
include "model/modelo.php";
include "control/controler.php";
// Verifica e exibe a mensagem de erro (se o controlador a definiu)
        if (isset($_SESSION['error_message'])) {
            echo '<p style="color:red; font-weight: bold;">' . htmlspecialchars($_SESSION['error_message']) . '</p>';
            // Limpa a mensagem da sessão para que não apareça na próxima visita
            unset($_SESSION['error_message']); 
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
        <a href="#"> DOCKER GUI</a>
	<a href="https://www.youtube.com/watch?v=nJ046CijyYE&t=1844s&pp=ygURdGVpazNuIGV4ZWN1dGFibGU%3D"> Executable </a>
	<a href="https://www.youtube.com/watch?v=95Uh9Ab_QWQ&pp=ygUQdGVpazNuIGFzc2VtYmxlcg%3D%3D"> Assembler</a>
	<a href="https://www.youtube.com/watch?v=32XsfeIX_rM"> boa vinda</a>
	<a href="https://www.youtube.com/watch?v=bZRemXbO7kU"> boa vindas</a>
</header>
    <main>
        <div id="divCenter" >
            <form action="control/controler.php" method="POST">
            usuario <input type="text"  name="nome" /></br>
            _senha <input type="text"  name="senha" /></br>
            <input type="submit" value="OKKK"/>
            </form>
</br>
            <img src="images/pngegg.png" width="400px" height="400px">
            <p> Cloud Grillo</p>
	    </br>
	    </br>
            <a href="criarusuario.html"> Criar Usuario</a>
</br>
</br>
        </div> 
    </main>
 <footer class="footer">
        <p>Criador: Grillo Foreman | Data: 2019/09</p>
        <p>&copy; 2025. Todos os direitos reservados.</p>
    </footer>
</body>
</html>

