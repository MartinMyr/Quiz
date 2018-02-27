<?php
    include 'include/functions.php';
    include 'include/header.php';
    include 'include/classes.php';
    
    ?>
<h1> Mitt quiz </h1>

<div id = "content">
    <form  method = "post">
        <?php printQuestions($questions); 
        ?>

        
        <button type = "submit">Rätta</button>
        <?php ?>
    </form>
</div>

<?php 
    include 'include/footer.php';
?>