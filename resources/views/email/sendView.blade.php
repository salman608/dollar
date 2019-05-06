<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Verified Your Email</title>
</head>
<body>


	To very Email Click here <a href="{{ route('sendEmailDone',["email"=> $user->email, "verifyToken"=>$user->verifyToken])}}">Click</a>
	
</body>
</html>