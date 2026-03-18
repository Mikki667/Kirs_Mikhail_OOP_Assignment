<?php

require_once 'Musician.php';

// class for drummers

class Drummer extends Musician
{
    public function play()
    {
        // drum rhythm message
        echo "<p>Let's get some rhythm going!</p>";
    }
}