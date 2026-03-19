<?php

// Autoloader for classes, interfaces and traits

spl_autoload_register(function ($class) {

    $paths = [
        __DIR__ . '/classes/' . $class . '.php',
        __DIR__ . '/interfaces/' . $class . '.php',
        __DIR__ . '/traits/' . $class . '.php'
    ];

    foreach ($paths as $file) {
        if (file_exists($file)) {
            require_once $file;
            return;
        }
    }
});


// creating objects

$paul = new PaulMcCartney('Paul', 'Bass', 60);
$john = new JohnLennon('John', 'Guitar', 50);
$george = new GeorgeHarrison('George', 'Guitar', 45);
$ringo = new RingoStarr('Ringo', 'Drums', 55);


// testing methods

echo "<h2>Beatles Live Show</h2>";

$paul->introduce();
$paul->perform();
$paul->writeSong();

$john->introduce();
$john->play();
$john->writeSong();

$george->play();
$ringo->perform();