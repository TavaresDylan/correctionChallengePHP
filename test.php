<?php
require_once 'includes/function.php';


echo envoiMail(  "coucou",
            ["contact@apprendre.co", "julien@apprendre.co"],
            ["html" => "<a href=#>c'est trop cool</a>", "text"=> "c'est trop cool"]
          );



