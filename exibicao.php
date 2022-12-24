<?php

namespace AGD;
date_default_timezone_set("America/Sao_Paulo");

use DateTime;
class Agendamento {
    private $data;
    private $hora;
    private $descricao;
  
    public function __construct($data, $hora, $descricao) {
      $this->data = $data;
      $this->hora = $hora;
      $this->descricao = $descricao;
    }
  
    public function getData() {
      $dataAtual = new DateTime(); // cria uma nova data com a data atual
      $data = new DateTime($this->data); // cria uma nova data com a data armazenada na propriedade $this->data
      if ($data > $dataAtual) { // verifica se a data armazenada é maior que a data atual
        return $data->format('d/m'); // retorna apenas o dia, caso a data seja maior que a atual
      }
      return null; // caso contrário, retorna null
    }
    
  
    public function setData($data) {
      $this->data = $data;
    }
  
    public function getHora() {
      if (empty($this->hora)) {
        // Obtém a hora atual
        $hora_atual = date("H:i");
        return $hora_atual;
      }
      return $this->hora;
    }
    
  
    public function setHora($hora) {
      $this->hora = $hora;
    }
  
    public function getDescricao() {
      if (empty($this->descricao)) {
        return "Descrição não informada";
      }
      return $this->descricao;
    }
    
    public function setDescricao($descricao) {
      $this->descricao = $descricao;
    }
    
  }
