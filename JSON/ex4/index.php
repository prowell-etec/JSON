<?php 
  //array com dados
  $dados = array(
    "produto" => "Notebook",
    "preço" => 2500.99,
    "quantidade" => 3
  );

  //converter array em JSON (função json_encode())
  $json_dados = json_encode($dados);
 
  // função que escreve os dados JSON e transforma em arquivo
  file_put_contents('dados_produto.json', $json_dados);

  echo "Dados salvos com sucesso";

?>