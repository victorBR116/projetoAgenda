<?php

require 'E:\Estudos\Projeto\exibicao.php';

use AGD\Agendamento;

// Pega a data do agendamento
if (isset($_POST['data'])) {
  $data = $_POST['data'];
}

// Pega a hora do agendamento
if (isset($_POST['hora'])) {
  $hora = $_POST['hora'];
}

// Pega a descrição do agendamento
if (isset($_POST['descricao'])) {
  $descricao = $_POST['descricao'];
}

$agendamento = new Agendamento($_POST['data'], $_POST['hora'], $_POST['descricao']);

?>

<!DOCTYPE html>
<html>
  <head>
    <title>Agendamento realizado com sucesso</title>
  </head>
  <body>
    <h1>Agendamento realizado com sucesso!</h1>
    <p>Seu agendamento para o dia <?php echo $agendamento->getData(), $agendamento->getHora(), $agendamento->getDescricao(); ?> às XXhXX foi confirmado.</p>
    <button onclick="window.history.back()">Voltar</button>
    <button onclick="window.location.href='/agenda.php'">Continuar</button>
  </body>

</html>