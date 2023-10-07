<?php

namespace App\Http\Controllers;

use App\Interfaces\CustomerRepositoryInterface;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class CustomerController extends Controller
{
    private CustomerRepositoryInterface $customerRepository;

    public function __construct(CustomerRepositoryInterface $customerRepository)
    {
        $this->customerRepository = $customerRepository;
    }
    public function all(): JsonResponse
    {
        return response()->json([
            'customers' => $this->customerRepository->getAllCustomers()->with('memberships')->get()
        ]);
    }

    public function getCustomer(Request $request):JsonResponse
    {
        $customer = $this->customerRepository->getCustomerById($request->id);
        $customer->memberships;
        $customer->addresses;
       
        return response()->json([
            'customer' => $customer
        ]);
    }
    
    public function getDiamondMembers():JsonResponse
    {
        $customer = $this->customerRepository->getDiamondMembers();
        return response()->json([
            'customers' => $customer
        ]);
    }
    public function index()
    {
        return response('Customer worked');
    }
}