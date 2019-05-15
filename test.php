<?php
require_once 'includes/function.php';


echo envoiMail(  "Hello world !",
            ["tavares.dylan03@gmail.com", "tavares.dylan03@gmail.com"],
            ["html" => "", "text"=> "2 C'est trop cool d'envoyer des mails 2"]
          );



