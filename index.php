<?php
    
    require __DIR__.'./vendor/autoload.php';
    
    use App\Controller\GitController;
use App\Controller\GitModel;

    $git= new GitController();
    echo $git->iniciar();



?>