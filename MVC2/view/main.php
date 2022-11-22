<?php
    ob_start();
?>
<h2>MVC techonolgy project. Games</h2>
<article>
    <p>
        View the list of Games and indepth information of one game
    </p>
</article>
<?php
    $content = ob_get_clean();
?>
<?php include 'view/templates/layout.php';?>