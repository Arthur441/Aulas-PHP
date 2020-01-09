<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Resgate de dados -> Método POST</h1>
    <?php
    //receber os dados vindos do formulário
    $nome = $_POST["nome"];
    $valor = $_POST["valor"];
    $estoque= $_POST["estoque"];
    $categoria = $_POST["categoria"];
if($nome == "" || $valor=="" || $estoque =="" || $categoria ==""){ 
    echo "Preencha os campos!";
}else if(!is_numeric($valor)|| !is_numeric($estoque))
{
    echo "Estoque ou valor Inválido!";
}else{
echo"<h3>Dados Enviados</h3>";
echo"Nome :".$nome;
echo"<br>Valor :".number_format($valor,2,",",".");
echo"<br>Estoque :" .$estoque;
echo"<br>Categoria :" .$categoria;
$conteudo .= "Produto :".$nome. "\n";
$conteudo .= "Estoque :".$estoque. "\n";
$conteudo .= "Valor :".$valor. "\n";
$conteudo .= "Produto :".$categoria. "\n";
$conteudo .= "---------------------------------- \n\n";
}

?>
</body>
</html>