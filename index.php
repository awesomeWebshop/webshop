<?php
    
    /* Connect! */
    require_once("./SSI.php");
    
    echo Template::renderHead('Awesome title');
    echo Template::renderBodyHead();
    
    //Content here
    
    
    echo Template::renderBodyFooter();
    echo Template::renderFooter();
    ?>
