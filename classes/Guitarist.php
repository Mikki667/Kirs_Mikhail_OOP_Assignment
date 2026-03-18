<?php

require_once 'Musician.php';

// class for guitar players

class Guitarist extends Musician
{
    public function play()
    {
        // guitar player message
        echo "<p>I am playing a guitar for you tonight!</p>";
    }
}