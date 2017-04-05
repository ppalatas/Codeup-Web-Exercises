<?php

// -----------------------------------------------------------------------------

$pizza = [ 'toppings' => ['pepperoni', 'green peppers', 'onions'],
        'crust'    => 'stuffed',
        'delivery' => true,
];

// output the type of crust for the pizza
echo PHP_EOL;
echo PHP_EOL;

echo "The type of crust for the first pizza:  {$pizza['crust']} \n";   // ***** or . PHP_EOL; *****

 echo PHP_EOL;
 echo PHP_EOL;

// -----------------------------------------------------------------------------

$orders = [
    [
        'toppings' => ['pepperoni', 'green peppers', 'onions'],
        'crust'    => 'stuffed',
        'delivery' => true,
        'price'    => 1295,
    ],

    [
        'toppings' => ['onion', 'salami'],
        'crust'    => 'pretzel',
        'delivery' => false,
        'price'    => 1195,
    ],

    [
        'toppings' => ['pineapple', 'ham'],
        'crust'    => 'regular',
        'delivery' => true,
        'special instructions' => 'extra crispy crust',
        'price'    => 995,
    ]
];


// output all the different crust types

foreach($orders as $order){
    if(is_array($order)){
        echo $order['crust'] . PHP_EOL;   // || echo "The different crust types are : {$order['crust']}" . PHP_EOL;
    }
}

echo PHP_EOL;
echo PHP_EOL;
 

echo '------------------------------------------------' . PHP_EOL;
echo ' > Orders for Delivery' . PHP_EOL;
echo '------------------------------------------------' . PHP_EOL;

// output information about all the orders for delivery
foreach ($orders as $index => $order) {
    // if the order is not for delivery skip it
    if (! $order['delivery']) {
        break;
    }

    // human friendly order number
    $orderNumber = $index + 1;
    // turn our price in cents into a price in dollars and add a '$'
    $formattedPrice = '$' . (float) $order['price'] / 100;

    echo  "---------------- Order # $orderNumber --------------" . PHP_EOL;

    // display all the toppings
    echo 'Your Toppings are:' . PHP_EOL;
    foreach ($order['toppings'] as $topping){
        echo "  $topping" . PHP_EOL;
    }

    echo PHP_EOL;

    echo "Crust Style: " . $order['crust'];

    echo PHP_EOL;

    if(array_key_exists('special instructions', $orders[$index])){
        echo "Special Instructions: " . $order['special instructions'] . PHP_EOL;
        echo PHP_EOL;
    }
    
    echo "Your Total is: " . $formattedPrice;
    echo PHP_EOL;
}