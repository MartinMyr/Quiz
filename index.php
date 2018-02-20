<?php
    include 'include/header.php';
    include 'include/classes.php';
 ?>
<h1> Mitt quiz </h1>

<div id = "content">
    <form method = "get">
        <h3>Fråga 1:</br><?php echo $question1->text;?> </h3>
        <div class = "quizbox">
            <p>1</p> <input type = "checkbox" value = 1>
            <p>X</p>   <input type = "checkbox" value = "x">
            <p>2</p>   <input type = "checkbox" value = 2>
        </div>

        <h3>Fråga 2 </h3>
        <div class = "quizbox">
            <p>1</p> <input type = "checkbox" value = 1>
            <p>X</p>   <input type = "checkbox" value = "x">
            <p>2</p>   <input type = "checkbox" value = 2>
        </div>

        <h3>Fråga 3 </h3>
        <div class = "quizbox">
            <p>1</p> <input type = "checkbox" value = 1>
            <p>X</p>   <input type = "checkbox" value = "x">
            <p>2</p>   <input type = "checkbox" value = 2>
        </div>

        <h3>Fråga 4 </h3>
        <div class = "quizbox">
            <p>1</p> <input type = "checkbox" value = 1>
            <p>X</p>   <input type = "checkbox" value = "x">
            <p>2</p>   <input type = "checkbox" value = 2>
        </div>

        <h3>Fråga 5 </h3>
        <div class = "quizbox">
            <p>1</p> <input type = "checkbox" value = 1>
            <p>X</p>   <input type = "checkbox" value = "x">
            <p>2</p>   <input type = "checkbox" value = 2>
        </div>

        <h3>Fråga 6 </h3>
        <div class = "quizbox">
            <p>1</p> <input type = "checkbox" value = 1>
            <p>X</p>   <input type = "checkbox" value = "x">
            <p>2</p>   <input type = "checkbox" value = 2>
        </div>

        <h3>Fråga 7 </h3>
        <div class = "quizbox">
            <p>1</p> <input type = "checkbox" value = 1>
            <p>X</p>   <input type = "checkbox" value = "x">
            <p>2</p>   <input type = "checkbox" value = 2>
        </div>

        <h3>Fråga 8 </h3>
        <div class = "quizbox">
            <p>1</p> <input type = "checkbox" value = 1>
            <p>X</p>   <input type = "checkbox" value = "x">
            <p>2</p>   <input type = "checkbox" value = 2>
        </div>

        <h3>Fråga 9 </h3>
        <div class = "quizbox">
            <p>1</p> <input type = "checkbox" value = 1>
            <p>X</p>   <input type = "checkbox" value = "x">
            <p>2</p>   <input type = "checkbox" value = 2>
        </div>

        <h3>Fråga 10 </h3>
        <div class = "quizbox">
            <p>1</p> <input type = "checkbox" value = 1>
            <p>X</p>   <input type = "checkbox" value = "x">
            <p>2</p>   <input type = "checkbox" value = 2>
        </div>
        
        <button type = "submit">Rätta</button>

    </form>
</div>

<?php 
    include 'include/footer.php';
?>