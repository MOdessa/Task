<?php

$deliveryMethodsArray = [
    [
        'code' => 'dhl',
        'customer_costs' => [
            22 => '1.000',
            11 => '3.000',
        ]
    ],
    [
        'code' => 'fedex',
        'customer_costs' => [
            22 => '4.000',
            11 => '6.000',
        ]
    ]
];

function sortDeliveryMethods($deliveryMethodsArray)
{
    foreach ($deliveryMethodsArray as ["customer_costs" => $names, 'code' => $codes]) {
        foreach ($deliveryMethodsArray as ["customer_costs" => $name, 'code' => $code]) {
            foreach ($names as $keys => $b) {
                foreach ($name as $key => $a) {
                    if ($b == '1.000') {
                        $value [$key] = [$codes => $b]+[$code => $a];
                    }
                    else{
                        $value [$keys] = [$code => $a];
                    }
                }
                if ($b == '3.000') {
                    $value [$keys] = [$codes => $b] + [$code => $a];
                }
                else{
                    $value [$key] = [$code => $a];
                }
            }
        }
        return $value;
    }
    return $deliveryMethodsArray;
}

$result = sortDeliveryMethods($deliveryMethodsArray);

echo "<pre>";
var_dump($result);
echo "</pre>";
