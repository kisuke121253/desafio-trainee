<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head><title>Editar Produto</title></head><body><h1>Editar Produto</h1><form method="POST" action="/produtos/{{ $produto->id }}">@csrf @method('PUT')<input type="text" name="nome" value="{{ $produto->nome }}"><input type="number" name="categoria_id" value="{{ $produto->categoria_id }}"><input type="number" name="valor" value="{{ $produto->valor }}"><input type="date" name="data_vencimento" value="{{ $produto->data_vencimento }}"><input type="number" name="quantidade_estoque" value="{{ $produto->quantidade_estoque }}"><input type="checkbox" name="perecivel" {{ $produto->perecivel ? 'checked' : '' }}><button type="submit">Salvar Alterações</button></form><a href="/produtos/{{ $produto->id }}">Cancelar</a></body></html>
