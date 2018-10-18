<?php
<<<<<<< HEAD
function render_template(bool $error = FALSE) {
  if (is_null($serverName)) {
    $serverName = 'localhost';
  }

  $registerLink = 'http://' . $serverName . ':' . $serverPort . '/register';
||||||| merged common ancestors
function render_template(string $serverName = null, int $serverPort = 5000, bool $error = FALSE) {
  if (is_null($serverName)) {
    $serverName = 'localhost';
  }

  $registerLink = 'http://' . $serverName . ':' . $serverPort . '/register';
=======
function render_template(bool $error = FALSE) {
  $registerLink = 'http://' . $_ENV['SERVER_NAME'] . ':' . $_ENV['SERVER_PORT'] . '/register';
>>>>>>> 08f9d6f4b1f4235d93b56c684658466dd29eff83
  return <<<HTML

<!DOCTYPE html>
<html>
<head>
  <link rel='stylesheet' href='src/view/static/css/common.css'>
  <link rel='stylesheet' href='src/view/static/css/auth.css'>
  <link rel='stylesheet' href='src/view/static/css/login.css'>
  <script type='module' src='src/view/static/js/login.js'></script>
  <link href='https://fonts.googleapis.com/css?family=Bungee+Shade' rel='stylesheet'>
  <link href='https://fonts.googleapis.com/css?family=Chathura' rel='stylesheet'>
  <link href='https://fonts.googleapis.com/css?family=Roboto+Mono' rel='stylesheet'>
  <title>Login</title>
</head>
<body>
HTML
.
  ($error ?
    <<<HTML
    <div id='invalidCredentialsMessageContainer' class='auth-invalid-credentials-message-container'>
      <p id='invalidCredentialsMessage'>Incorrect username or password</p>
    </div>
HTML
  : '')
.
  <<<HTML
  <div id='inputValidationMessageContainer' class='auth-input-validation-message-container'>
    <p id='inputValidationMessage'></p>
  </div>
	<div class='auth-page-container'>
		<div class='auth-pane-container'>
      <div class='auth-pane-content'>
        <div class='auth-title-container'>
          <h1 class='auth-title'>LOGIN</h1>
        </div>
        <form id='loginForm' action='/login' method='post'>

          <div class='auth-form-item'>
            <div class='auth-form-item-label-container'>
              <h4>Username</h4>
            </div>
            <div class='auth-form-item-field-container'>
              <input id='formUsernameField' type='text' name='username' autofocus>
            </div>
          </div>

          <div class='auth-form-item'>
            <div class='auth-form-item-label-container'>
              <h4>Password</h4>
            </div>
            <div class='auth-form-item-field-container'>
              <input id='formPasswordField' type='password' name='password'>
            </div>
          </div>

        </form>
        <div class='auth-alt-container'>
          <a href='$registerLink'>
            <p>Don't have an account?</p>
          </a>
        </div>
        <div class='auth-submit-container'>
          <button id='formSubmitButton' type='submit' form='loginForm' disabled>
            <div id='formSubmitButtonInner' class='auth-submit-inner'>
              LOGIN
            </div>
          </button>
        </div>
      </div>
		</div>
	</div>
</body>
</html>

HTML;
}
