<?php

require_once 'Musician.php';

// class for singers

class Vocalist extends Musician
{
    public function play()
    {
        // singing to the crowd
        echo "<p>I am singing for all of you tonight!</p>";
    } 

    public function perform()
    {
        // stage performing message 
        echo "<p>Hello London! Sing with me tonight!</p>";
    }
}