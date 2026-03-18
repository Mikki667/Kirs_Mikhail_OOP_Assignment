<?php

require_once __DIR__ . '/../interfaces/PerformerInterface.php';

// Main parent class for all musicians

class Musician implements PerformerInterface
{
    protected $name;
    protected $instrument;
    protected $yearsActive;

    public function __construct(string $name, string $instrument, int $yearsActive)
    {
        // main info about the group members

        $this->name = $name;
        $this->instrument = $instrument;
        $this->yearsActive = $yearsActive;
    }

    public function introduce()
    {
        echo "<p>Hello, my name is {$this->name}.</p>";
    }

    public function play()
    {
        // basic play message
        echo "<p>I am playing my {$this->instrument}.</p>";
    }

    public function perform()
    {
        // intro message before we Rock and Roll!!
        echo "<p>How are you all doing tonight? The next song is All My Loving!</p>";
    }
}