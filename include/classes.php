<?php

    class Questions{
      function __construct($text, $answerOne, $answearX, $answerTwo, $correct){
        $this->text = $text;
        $this->answerOne = $answerOne;
        $this->answerX = $answerX;
        $this->answerTwo = $answerTwo;

      }

    }
    
    $questions = array(
        $question1 = new Questions("Vem är det på bilden?", "Rikard", "Leif GW", "Queen Elisabeth", "Rikard"),
        $question2 = new Questions("1Vilken är huvudstaden i Azerbajdzjan?", "Baku", "Genza", "Malataya", "Baku"),
        $question3 = new Questions("2Vilken är huvudstaden i Azerbajdzjan?", "Baku", "Genza", "Malataya", "Baku"),
        $question4 = new Questions("3Vilken är huvudstaden i Azerbajdzjan?", "Baku", "Genza", "Malataya", "Baku")
       


    );
