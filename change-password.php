<?php
require_once 'includes/init.php';


$status = $user->changePassword($_POST, $db);

if( $status === 'success'){
	echo json_encode([
		'success'=> 'success', 
		'message'=> '<p class="alert alert-success">Your password changed successfully!</p>',
		'signout' => 1,
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
		'message'=> '<p class="alert alert-danger">Mismatch new password and confirm password!</p>',
	]);
}

else if( $status === 'incorrect_old'){
	echo json_encode([
		'error'=> 'error', 
		'message'=> '<p class="alert alert-danger">Incorrect old password!</p>',
	]);
}

else if( $status === 'error'){
	echo json_encode([
		'error'=> 'error', 
		'message'=> '<p class="alert alert-danger">Failed to change password!</p>'
	]);
}