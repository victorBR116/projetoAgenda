<?php

namespace AGD;

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
      return $this->data;
    }
  
    public function setData($data) {
      $this->data = $data;
    }
  
    public function getHora() {
      return $this->hora;
    }
  
    public function setHora($hora) {
      $this->hora = $hora;
    }
  
    public function getDescricao() {
      return $this->descricao;
    }
  
    public function setDescricao($descricao) {
      $this->descricao = $descricao;
    }
    
  }
