<?php

namespace App\Transformers;

class CustomerTransformer
{
    public function transform(Customer $customer): array
    {
        return [
            'id' => $customer->id,
            'name' => $customer->name,
            'address' => $customer->address,
            'nic' => $customer->nic,
            'email' => $customer->email,
            'birthday' => $customer->birthday
        ];
    }
}
