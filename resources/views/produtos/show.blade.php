<!DOCTYPE html>
<html>
<head>
<title>{{ $produto->nome }}</title>
</head>
<body>
<h1>{{ $produto->nome }}</h1>

<p>Categoria ID: {{ $produto->categoria_id }}</p>
<p>Valor: {{ $produto->valor }}</p>
<p>Data de Vencimento: {{ $produto->data_vencimento }}</p>
<p>Quantidade em Estoque: {{ $produto->quantidade_estoque }}</p>
<p>Produto Perecível: {{ $produto->perecivel ? 'Sim' : 'Não' }}</p>

<a href="/produtos">Voltar</a>
</body>
</html>
