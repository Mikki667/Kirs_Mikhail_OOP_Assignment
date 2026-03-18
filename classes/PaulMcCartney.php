<?php

require_once 'Vocalist.php';

// Paul is a vocalist and songwriter, also, just a lovely guy. 

class PaulMcCartney extends Vocalist
{
    public function introduce()
    {
        // Paul's intro message
        echo "<p>Good evening everyone! How are you?, I am Paul. Nice to see you tonight at the show!</p>";
    }
}