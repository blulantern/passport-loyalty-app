<?php

namespace Database\Seeders;

use App\Models\Customer;
use App\Models\Membership;
use Illuminate\Database\Seeder;

class CustomerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Customer::factory()->count(20)->create()->each(
            function($customer) {
                $membership = Membership::factory()->make();
                $customer->memberships()->save($membership);
            }
        );
    }
}
