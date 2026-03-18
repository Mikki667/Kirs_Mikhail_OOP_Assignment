<?php

require_once 'Guitarist.php';
require_once __DIR__ . '/../traits/SongwriterTrait.php';

// John is guitarist and songwriter

class JohnLennon extends Guitarist
{
    use SongwriterTrait;
    public function introduce()
    {
        // John's intro message
        echo "<p>Hi everyone, John here. Let's make some noise tonight!</p>";
    }
}