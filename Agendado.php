<?php

require_once 'exibicao.php';

use AGD\Agendamento;

var_dump($_POST);
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
    <title>Agendamento</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
  </head>
  <body>
    <h1 class="text-center">Agendamento realizado com sucesso!</h1>
    <p class="text-center">Seu agendamento para o dia <?php echo $agendamento->getData() . ', '.  $agendamento->getHora() . ', ' .  $agendamento->getDescricao() . ', '; ?>foi confirmado.</p>
    <div class="text-center">
      <button onclick="window.history.back()" class="btn btn-primary">Voltar</button>
      <button onclick="window.location.href='/agenda.php'" class="btn btn-primary">Continuar</button>
    </div>
  </body>
</html>