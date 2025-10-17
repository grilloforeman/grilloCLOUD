<?php
require_once __DIR__ . '/../model/modelo.php'; 
class LoginController {
    public function autenticar($nome, $senha) {
        // Cria o objeto do usuário com os dados recebidos
        $usuario = new Usera(null, $nome, $senha, null, null);

        // Conecta ao banco
        $db = new MySqlConnection();
        $db->connect();

        // Verifica se o usuário existe e a senha está correta
        $resultado = $db->searcha($usuario);

        if ($resultado) {
            echo "<p style='color:green;'>Login bem-sucedido! Bem-vindo, " . htmlspecialchars($resultado['nome']) . ".</p>";
            header("Location: index.php");
        } else {
            echo "<p style='color:red;'>Usuário ou senha inválidos.</p>";
        }
    }
}

// Verifica se o formulário foi enviado via POST
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $nome = $_POST["nome"] ?? '';
    $senha = $_POST["senha"] ?? '';

    // Instancia o controller e chama o método de autenticação
    $controller = new LoginController();
    $controller->autenticar($nome, $senha);
}
?>