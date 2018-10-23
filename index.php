<?php

$panos = [
    [
        'vardas' => 'Monika',
        'Grazi' => true,
        'protinga' => false
    ],
    [
        'vardas' => 'Greta',
        'Grazi' => true,
        'protinga' => true
    ],
    [
        'vardas' => 'Laura',
        'Grazi' => false,
        'protinga' => true
    ],
    [
        'vardas' => 'Viktorija',
        'Grazi' => false,
        'protinga' => true
    ],
    [
        'vardas' => 'Aldona',
        'Grazi' => true,
        'protinga' => true
    ]
    
];

function random($panos)
{
    $random = rand(0, count($panos)-1);
    return $panos[$random]['vardas'];
    
}
?>

<html>
    <body>
        
        <h2><?php print random($panos) ?> </h2>
        
    </body>
</html>