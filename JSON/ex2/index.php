<?php 
  // array multidimensional
  $turmas = array(
    "turma A" => ["João", "Maria", "Carlos"],
    "turma B" => ["Ana", "Luiz", "Pedro"]
  );
  
  //converte array para json
  $json_turmas = json_encode($turmas);

  //exibir resultado

  echo $json_turmas;

?>