<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Validação simples dos campos obrigatórios
    $errors = array();

    if (empty($_POST["nome"])) {
        $errors[] = "O campo 'Nome' é obrigatório.";
    }
    // Adicione validações adicionais para outros campos conforme necessário.

    if (count($errors) > 0) {
        // Se houver erros, redirecione de volta ao formulário com uma mensagem de erro
        $error_message = implode("<br>", $errors);
        header("Location: seuformulario.html?error=" . urlencode($error_message));
        exit;
    } else {
        // Se não houver erros, processe os dados e armazene-os no banco de dados ou faça o que for necessário.

        // Aqui, você pode acessar os campos do formulário usando $_POST.
        $nome = $_POST["nome"];
        $sobrenome = $_POST["sobrenome"];
        $telefone = $_POST["telefone"];
        $email = $_POST["email"];
        $rg = $_POST["rg"];
        $cpf = $_POST["cpf"];
        $rua = $_POST["rua"];
        $bairro = $_POST["bairro"];
        $cidade = $_POST["cidade"];
        // Adicione mais campos conforme necessário.

        // Processar os documentos médicos (raio X e laudo médico) pode ser mais complexo e envolver o upload de arquivos.

        // Dados de Contato de Emergência
        $nomeContatoEmergencia = $_POST["nome_contato_emergencia"];
        $telefoneContatoEmergencia = $_POST["telefone_contato_emergencia"];
        // Adicione mais campos de contato de emergência conforme necessário.

        // Faça a conexão com o banco de dados e insira os dados.
        // Por exemplo:
        // $db = new PDO("mysql:host=localhost;dbname=seubanco", "seuusuario", "suasenha");
        // $query = "INSERT INTO pacientes (nome, sobrenome, telefone, email, rg, cpf, rua, bairro, cidade, nome_contato_emergencia, telefone_contato_emergencia) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
        // $stmt = $db->prepare($query);
        // $stmt->execute([$nome, $sobrenome, $telefone, $email, $rg, $cpf, $rua, $bairro, $cidade, $nomeContatoEmergencia, $telefoneContatoEmergencia]);

        // Redirecionar para uma página de sucesso
        header("Location: login.html");
        exit;
    }
} else {
    // Redirecionar para o formulário se não for uma solicitação POST.
    header("Location: cadastro.html");
    exit;
}
