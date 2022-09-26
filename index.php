<?php 

/* 
Site: GEASC
Autor: Thainá Sabino
Data: 22 de maio, 2019
*/

/* Main page */
$page = 'home';

if(isset($_GET['i'])){
	$page = addslashes($_GET['i']);
}

/* header.php */
include 'app/views/header.php';

/* Load pages */
switch ($page) {
	case 'home':
		include 'app/views/home.php';
		break;

	case 'about':
		include 'app/views/about.php';
		break;

	case 'events':
		include 'app/views/events.php';
		break;

	case 'statistics':
		include 'app/views/statistics.php';
	break;
	
  	case 'works':
		include 'app/views/works.php';
    break;
    
  	case 'links':
		include 'app/views/links.php';
	break;
	
	default:
		include 'app/views/home.php';
	break;
}

/* Load footer.php */
include 'app/views/footer.php';
