<?php

$dataAtual = new DateTime(); // Obtém a data atual
$dataInformada = new DateTime($_POST['data']); // Obtém a data informada pelo usuário

if ($dataInformada->getTimestamp() < $dataAtual->getTimestamp()) {
  // A data informada é anterior à data atual
  echo 'A data informada é inválida';
} else {
  // A data informada é válida
  // ...
}

?>