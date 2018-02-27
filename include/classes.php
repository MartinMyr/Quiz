<?php

    class Questions{
      function __construct($text, $answerOne, $answerX, $answerTwo, $correct){
        $this->text = $text;
        $this->answerOne = $answerOne;
        $this->answerX = $answerX;
        $this->answerTwo = $answerTwo;
        $this->correct = $correct;

      }

    }
    
    $questions = array(
        new Questions("Vem är det på bilden?", "Rikard", "Leif GW", "Queen Elisabeth", "Rikard"),
        new Questions("Vilken är huvudstaden i Azerbajdzjan?", "Ganza", "Baku", "Malataya", "Baku"),
        new Questions("Hur bra är Jesper på cs?", "Medioker", "Bäst", "Sämst", "Medioker"),
        new Questions("Vilket djur ser bra)", "Örnen", "Zebran", "Antilopen", "Zebran"),
        new Questions("Vilket djur går illa?", "Påfågeln", "Hunden", "Gorilla", "Gorilla"),
        new Questions("Vad väger mest, 1kg bommul eller 1kg stål ", "Bommul", "Stål", "De väger lika mycket", "De väger lika mycket"),
        new Questions("3Vilken är huvudstaden i Azerbajdzjan?", "Baku", "Genza", "Malataya", "Baku"),
        new Questions("3Vilken är huvudstaden i Azerbajdzjan?", "Baku", "Genza", "Malataya", "Baku"),
        new Questions("3Vilken är huvudstaden i Azerbajdzjan?", "Baku", "Genza", "Malataya", "Baku"),
        new Questions("3Vilken är huvudstaden i Azerbajdzjan?", "Baku", "Genza", "Malataya", "Baku")
    );

