<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema de Pedidos</title>
</head>
<body>
    <h1>Meus Pedidos</h1>
    <form action="salvar.php" method="post"></form>
    <label for="">Data: </label>  <input type="datetime-local" name="data" id="data">
    <label for="">Cliente: </label>  <input type="text" name="nome" id="nome">
    <label for="">Produto: </label>  <input type="text" name="produto" id="produto">
    <label for="">Valor: </label>  <input type="number" name="valor" id="valor">
    <input type="submit" value="Enviar">
    
</body>
</html>