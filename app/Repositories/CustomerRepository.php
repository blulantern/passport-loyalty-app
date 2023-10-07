<?php

namespace App\Repositories;
use App\Interfaces\CustomerRepositoryInterface;
use App\Models\Customer;
use Illuminate\Database\Eloquent\Collection;

class CustomerRepository implements CustomerRepositoryInterface {
    
    public function createCustomer(array $customerData): Customer
    {
        return Customer::create($customerData);
    }

    public function deleteCustomer($customerId)
    {
        Customer::destroy($customerId);
    }

    public function getAllCustomers(): Collection
    {
        return Customer::all();
    }

    public function getCustomerById($customerId): Customer
    {
        return Customer::findOrFail($customerId);
    }

    public function updateCustomer($customerId, array $updateData): Customer
    {
        return Customer::whereId($customerId)->update($updateData);
    }

    public function getDiamondMembers(): Collection
    {
        return Customer::with('memberships')
            ->with('addresses')
            ->with('phones')
            ->has('membershipsDiamond')
            ->get();
    }
}