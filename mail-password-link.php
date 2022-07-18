<?php
require_once 'includes/init.php';


$status = $user->mailRestPasswordLink($_POST, $db);

if( $status === 'success'){
	echo json_encode([
		'success'=> 'success', 
		'message'=> '<p class="alert alert-success">We sent you an email with password reset link!</p>',
		'signout'=> 1
	]);
}
else if( $status === 'missing_fields'){
	echo json_encode([
		'error'=> 'error', 
		'message'=> '<p class="alert alert-danger">Email field is required!</p>',
		
	]);
}

else if( $status === 'not_found'){
	echo json_encode([
		'error'=> 'error', 
		'message'=> '<p class="alert alert-danger">Email address not found!</p>',
	]);
}


else if( $status === 'error'){
	echo json_encode([
		'error'=> 'error', 
		'message'=> '<p class="alert alert-danger">Faild to email password reset link!</p>'
	]);
}