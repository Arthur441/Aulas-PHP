<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title></title>
</head>
<body>
    <form action="recebe1.php" method="post">
    Nome produto<br>
    <input type="text" name="nome"
placeholder="Digite o nome do produto" /><br><br>
Estoque<br><br>
<input type="text" name="estoque"
placeholder="EX.: 100"/><br><br>
Valor R$<br><br>
<input type="text" name="valor"/><br><br>
Categoria 
<select name="categoria">
<option value="">Selecione--</option>
<option value="informatica">Informática</option>
<option value="eletronico">Eletrônico</option>
<option value="dvd">DVD</option>
<option value="jogos">Jogos</option></select><br><br>
<input type="submit" value="Enviar Dados"/>
<input type="reset" value="Limpar Campos"/>
</form>

</body>
</html>