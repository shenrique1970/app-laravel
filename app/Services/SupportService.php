<?php

namespace App\Services;

use App\Models\Support;

class SupportService
{
    public function paginate(int $perPage = 7)
    {
        return Support::paginate($perPage);
    }

    public function create(array $data): Support
    {
        return Support::create($data);
    }

    public function find(string $id): Support
    {
        return Support::findOrFail($id);
    }

    public function update(string $id, array $data): Support
    {
        $support = $this->find($id);
        $support->update($data);

        return $support;
    }

    public function delete(string $id): bool
    {
        $support = $this->find($id);
        return $support->delete();
    }
}
