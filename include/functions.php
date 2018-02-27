<?php
        session_start();
    


   

    function printQuestions($questions){
        $total = 0;
        

        for ($x = 0; $x < count($questions); $x++){
            $y = $x+1;
            echo  "<h3>Fråga $y :</br>". $questions[$x]->text. " </h3>
            <div class = 'quizbox'>
                <p>". $questions[$x]->answerOne ."</p> <input type = 'radio' name = 'quiz$y' value =". $questions[$x]->answerOne." >
                <p>". $questions[$x]->answerX ."</p>   <input type = 'radio' name ='quiz$y' value = ". $questions[$x]->answerX.">
                <p>". $questions[$x]->answerTwo ."</p>   <input type = 'radio' name ='quiz$y' value = ". $questions[$x]->answerTwo.">
            </div>";

            
            if($_POST["quiz$y"] == $questions[$x]->correct){
                echo "Fråga $y är rätt!";
                $toSession .= "Fråga $y";
                $total = $total + 1;
            }else{
                    echo "Fråga $y är fel!!";
                
                

            }
            
          
        }
        
        echo"<br/><h1> Antal rätt $total </h1></br>";
        
    }


  

    