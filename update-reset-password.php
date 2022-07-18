<?php
require_once 'includes/init.php';


$status = $user->updateResetPassword($_POST, $db);

if( $status === 'success'){
	echo json_encode([
		'success'=> 'success', 
		'message'=> '<p class="alert alert-success">Your password recoved successfully!</p>',
		'signout'=> 1
	]);
}
else if( $status === 'missing_fields'){
	echo json_encode([
		'error'=> 'error', 
		'message'=> '<p class="alert alert-danger">All fields mandatory!</p>',
		
	]);
}

else if( $status === 'mismatch_password'){
	echo json_encode([
		'error'=> 'error', 
		'message'=> '<p class="alert alert-danger">New password and confirm password mismatch!</p>',
	]);
}

else if( $status === 'incorrect_id'){
	echo json_encode([
		'error'=> 'error', 
		'message'=> '<p class="alert alert-danger">This request is not allowed!</p>',
	]);
}

else if( $status === 'incorrect_code'){
	echo json_encode([
		'error'=> 'error', 
		'message'=> '<p class="alert alert-danger">Request expired. We resent you an email!</p>',
	]);
}



else if( $status === 'error'){
	echo json_encode([
		'error'=> 'error', 
		'message'=> '<p class="alert alert-danger">Faild to email password reset link!</p>'
	]);
}