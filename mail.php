<?php 
require 'includes/function.php';
$addresses = ['simonbee1303@gmail.com', 'katuznychristophe@gmail.com'];
envoiMail('l\'objet trop bien', $addresses, 'le message trop cool' );
