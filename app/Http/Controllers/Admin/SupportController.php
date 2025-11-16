<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreUpdateSupport;
use App\Services\SupportService;

class SupportController extends Controller
{
    public function __construct(
        protected SupportService $service
    ) {}

    public function index()
    {
        $supports = $this->service->paginate(7);
        return view('admin.supports.index', compact('supports'));
    }

    public function create()
    {
        return view('admin.supports.create');
    }

    public function store(StoreUpdateSupport $request)
    {
        $data = $request->validated();
        $data['status'] = 'a';

        $this->service->create($data);

        return redirect()->route('supports.index')
            ->with('success', 'Mensagem criada com sucesso!');
    }

    public function show(string $id)
    {
        $support = $this->service->find($id);
        return view('admin.supports.show', compact('support'));
    }

    public function edit(string $id)
    {
        $support = $this->service->find($id);
        return view('admin.supports.edit', compact('support'));
    }

    public function update(StoreUpdateSupport $request, string $id)
    {
        $this->service->update($id, $request->validated());

        return redirect()->route('supports.index')
            ->with('success', 'Mensagem atualizada com sucesso!');
    }

    public function destroy(string $id)
    {
        $this->service->delete($id);

        return redirect()->route('supports.index')
            ->with('success', 'Excluída com sucesso!');
    }
}
