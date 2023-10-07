<?php

namespace App\Interfaces;

use App\Models\Customer;
use Illuminate\Database\Eloquent\Collection;

interface CustomerRepositoryInterface {
    public function createCustomer(array $customerData):Customer;
    public function deleteCustomer($customerId);
    public function getAllCustomers():Collection;
    public function getCustomerById($customerId):Customer;
    public function updateCustomer($customerId, array $updateData):Customer;
    public function getDiamondMembers():Collection;
} 