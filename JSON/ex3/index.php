<?php 
  // um string em json
  $json_string = '{
  "nome":"Lucas", 
  "idade":25, 
  "cidade":"São Paulo"
  }';

  // converte JSON em array associativo

  $dados_array = json_decode($json_string, true); // o segunda parametro (true) retorna como array associativo

  //exibir meus dados em array
  echo "Nome: " . $dados_array["nome"] . "<br>";
  echo "Idade: " . $dados_array["idade"];

  echo "<hr>";
  echo "<pre>";
  print_r($dados_array);
  echo "</pre>";

?>