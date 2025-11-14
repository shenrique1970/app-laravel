<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Support;
use Illuminate\Http\Request;

class SupportController extends Controller
{
    public function index()
    {
        $supports = Support::all();
        // resources/views/admin/supports/index.blade.php
        return view('admin.supports.index', compact('supports'));
    }

    public function create()
    {
        // resources/views/admin/supports/create.blade.php
        return view('admin.supports.create',  compact('supports'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'assunto' => 'required|string|max:255',
            'status' => 'required|in:a,p,c',
            'conteudo' => 'required|string',
        ]);

        Support::create($request->only(['assunto', 'status', 'conteudo']));

        return redirect()->route('supports.index')->with('success', 'Mensagem criada com sucesso!');
    }

    public function show(string $id)
    {
        $support = Support::findOrFail($id);
        return view('admin.supports.show', compact('support'));
    }

    public function edit(string $id)
    {
        $support = Support::findOrFail($id);
        return view('admin.supports.edit', compact('support'));
    }

    public function update(Request $request, string $id)
    {
        $request->validate([
            'assunto' => 'required|string|max:255',
            'status' => 'required|in:a,p,c',
            'conteudo' => 'required|string',
        ]);

        $support = Support::findOrFail($id);
        $support->update($request->only(['assunto', 'status', 'conteudo']));

        return redirect()->route('supports.index')->with('success', 'Mensagem atualizada com sucesso!');
    }

    public function destroy(string $id)
    {
        $support = Support::findOrFail($id);
        $support->delete();

        return redirect()->route('supports.index')->with('success', 'Excluída com sucesso!');
    }
}
