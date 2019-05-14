<h1><?= $page ?></h1>

<form method="POST" name="<?= $page ?>" action="">

<?php
echo    input("mail", "votre courriel","", "email");
if ($page == 'login'){

	echo   input("password", "votre mot de passe","", "password");
	  	

}else if ($page == 'register'){

	echo    input("mailVerify", "vérification de votre courriel","", "email").
			input("lastname", "votre nom","").
	 		input("firstname", "votre prénom","").
	 		input("address", "votre adresse","").
	 		input("zipCode", "votre code postal","").
	 		input("city", "votre ville","").
	 		input("country", "votre pays","").
	 		input("phone", "votre numéro de portable","", "tel").
	  		input("password", "votre mot de passe","", "password").
	  		input("passwordVerify", "confirmez votre mot de passe","", "password");

}

	echo input("robot", "","", "hidden");
?>
  	<button type="submit">Envoyez</button>
</form>
<a href="index.php?p=reset">Mot de passe oublié</a>


