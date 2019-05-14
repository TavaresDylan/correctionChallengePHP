<?php 
require_once 'includes/function.php';


if(!empty($_POST)){
	require 'userAction.php';
}


if(!isset($_GET['p'])){

	header('location: index.php?p=home');
	exit();

}else{
	include 'includes/header.php';
	$page = htmlspecialchars(strtolower($_GET['p']));
	switch($page)
	{
		//login ou register
		case 'login':
		case 'register':
		case 'reset':
			require 'formUser.php';
			break;

		case 'boutique':
			require 'boutique.php';
			break;
		case 'deconnect':
		case 'home':

			if (session_status() != PHP_SESSION_ACTIVE){
				session_start();
			}
			unset($_SESSION["auth"]);
			?>
				<section class="sectionHome">
					<h1>Bread Beer Shop</h1>
					<h2>Welcome!</h2>
					<article class="articleHome">
						<div>
							<img src="<?= uri("assets/img/BAP.jpg") ?>" alt="BAP logo">
						</div>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
						tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
						quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
						consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
						cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
						proident, sunt in culpa qui officia deserunt mollit anim id est laborum.<br />
						Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
						tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
						quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
						consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
						cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
						proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
					</article>
					<article class="articleHome">
						<div>
							<img src="<?= uri("assets/img/BAP.jpg") ?>" alt="BAP logo">
						</div>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
						tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
						quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
						consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
						cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
						proident, sunt in culpa qui officia deserunt mollit anim id est laborum.<br />
						Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
						tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
						quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
						consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
						cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
						proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
					</article>
				</section>
	<?php 
		break;
		default:
			require '404.php';
	}
	include 'includes/footer.php'; 
}

