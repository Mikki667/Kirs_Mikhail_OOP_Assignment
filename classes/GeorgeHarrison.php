<?php

require_once 'Guitarist.php';

// George is spiritual guitar and very talanted guitarist 

class GeorgeHarrison extends Guitarist
{
    public function play()
    {
        // George's guitar playing message
        echo "<p>I am playing a guitar for you tonight and hope to make you happy!</p>";
    }
}