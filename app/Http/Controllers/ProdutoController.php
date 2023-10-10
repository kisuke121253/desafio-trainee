<?php

namespace App\Http\Controllers;

use App\Models\Produto;
use Illuminate\Http\Request;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;


class ProdutoController extends Controller
{
    public function index(): View
    {
        $produtos = Produto::all();
        return view('produtos.index', ['produtos' => $produtos]);
    }

    public function create(): View
    {
        return view('produtos.create');
    }

    public function store(Request $request): RedirectResponse
    {
        Produto::create($request->all());
        return redirect('/produtos');
    }

    public function show(Produto $produto): View
    {
        return view('produtos.show', ['produto' => $produto]);
    }

    public function edit(Produto $produto): View
    {
        return view('produtos.edit', ['produto' => $produto]);
    }

    public function update(Request $request, Produto $produto): RedirectResponse
    {
        $produto->update($request->all());
        return redirect('/produtos');
    }

    public function destroy(Produto $produto): RedirectResponse
    {
        $produto->delete();
        return redirect('/produtos');
    }
}
