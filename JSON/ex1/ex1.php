<?php 

// array associativo 

$dados = [
  "nome" => "João",
  "idade" => 25,
  "profissao" => "Joalheiro"
];
// converte o array para JSON
$json_dados = json_encode($dados);

//exibe o resultado
echo $json_dados;

?>