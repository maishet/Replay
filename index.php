<?php //session_destroy(); ?>
// By Ingenious Gurus:  https://ingeniousgurus.com
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Login with Facebook using PHP and MySQL | Ingenious Gurus </title>
<link href="css/bootstrap.css" type="text/css" rel="stylesheet">
 
</head>

<?php include('config.php'); ?>
<?php include('oauth-user.php'); ?>


<body>

	<div class="container">
		
		<div class="row" style="margin-top: 50px;">
			<div class="col-md-4"></div>
			<div class="col-md-4">

                <h2>Login to your account</h2>
                

	<?php
		//If no $accessToken is set then user should log in first
		if(isset($accessToken)) {
			if(isset($_SESSION['facebook_access_token'])){
				$fb->setDefaultAccessToken($_SESSION['facebook_access_token']);
			} else {
				// Put short-lived access token in session
				$_SESSION['facebook_access_token'] = (string) $accessToken;
				
				// The OAuth 2.0 client handler helps us manage access tokens
				$oAuth2Client = $fb->getOAuth2Client();
				
				if(!$accessToken->isLongLived()) {
					//Exchanges a short-lived access token for a long-lived one
					try {
						$accessToken = $oAuth2Client->getLongLivedAccessToken($accessToken);
						$_SESSION['facebook_access_token'] = (string) $accessToken;
					} catch (Facebook\Exceptions\FacebookSDKException $e) {
						echo "<p>Error getting long-lived access token: " . $helper->getMessage() . "</p>\n\n";
						exit;
					}
				}			
			}
			
			// Redirect the user back to the same page if url has "code" parameter in query string
			if(isset($_GET['code'])){
				header('Location: ./');
			}
			
			
			// Getting user facebook profile info
			try {
				$profileRequest = $fb->get('/me?fields=name,first_name,last_name,email,link,gender,locale,picture');
				$fbUserData = $profileRequest->getGraphNode()->asArray();
				
				//Ceate an instance of the OauthUser class
				$oauth_user_obj = new OauthUser();
				
				$userData = $oauth_user_obj->verifyUser($fbUserData);
			} catch(FacebookResponseException $e) {
				echo 'Graph returned an error: ' . $e->getMessage();
				session_destroy();
				// Redirect user back to app login page
				header("Location: ./");
				exit;
			} catch(FacebookSDKException $e) {
				echo 'Facebook SDK returned an error: ' . $e->getMessage();
				session_destroy();
				// Redirect user back to app login page
				header("Location: ./");
				exit;
			}
		
		
			// Get logout url
			//$logoutURL = $helper->getLogoutUrl($accessToken, 'http://localhost/mit-demos/facebook-login/logout.php');
			
		
			
		} else {
			// Get login url
			$loginUrl = $helper->getLoginUrl($redirectUrl);
			echo '<a href="'.htmlspecialchars($loginUrl).'"><img class="login_image" src="fblogin-btn.png"></a>';
		}
	?>
	   
	        </div>
        </div>

    </div>
</body>
</html>