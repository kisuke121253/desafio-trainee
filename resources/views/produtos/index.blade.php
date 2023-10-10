<!DOCTYPE html>
<html>
<head>


<title>Lista de Produtos</title>
</head>
<body>
<h1>Produtos</h1>

<a href="/produtos/create">Criar Produto</a>

<ul>
@foreach ($produtos as $produto)
<li>
{{ $produto->nome }} - {{ $produto->valor }}
<a href="/produtos/{{ $produto->id }}">Ver</a>
<a href="/produtos/{{ $produto->id }}/edit">Editar</a>
<form method="POST" action="/produtos/{{ $produto->id }}">
@csrf
@method('DELETE')
<button type="submit">Deletar</button>
</form>
</li>
@endforeach
</ul>
</body>
</html>
