<?php

require_once 'Guitarist.php';

// John is guitarist and songwriter

class JohnLennon extends Guitarist
{
    public function introduce()
    {
        // John's intro message
        echo "<p>Hi everyone, John here. Let's make some noise tonight!</p>";
    }
}