<?php

namespace App\Interfaces;

use App\Models\Customer;
use Illuminate\Database\Eloquent\Collection;

interface RepositoryInterface {
    public function create(array $data);
    public function delete($customerId);
    public function getAll();
    public function getById($id);
    public function update($id, array $data);
} 