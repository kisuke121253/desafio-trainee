<!DOCTYPE html>
<html>
<head>
<title>Criar Produto</title>
</head>
<body>
<h1>Criar Produto</h1>

<form method="POST" action="/produtos">
@csrf
<input type="text" name="nome" placeholder="Nome do Produto">
<input type="number" name="categoria_id" placeholder="ID da Categoria">
<input type="number" name="valor" placeholder="Valor do Produto">
<input type="date" name="data_vencimento" placeholder="Data de Vencimento">
<input type="number" name="quantidade_estoque" placeholder="Quantidade em Estoque">
<input type="checkbox" name="perecivel" placeholder="Produto Perecível">
<button type="submit">Criar Produto</button>
</form>

<a href="/produtos">Voltar</a>
</body>
</html>
