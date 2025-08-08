<?php

use Core\Authenticator;
use Http\Forms\LoginForm;

// Validate the login form, if validation fails, it will throw a ValidationException
// which will be caught in the index.php file, flash the errors and redirect back.
// If validation passes, it will attempt to authenticate the user with the provided credentials.
$form = LoginForm::validate($attributes = [
  'email' => $_POST['email'],
  'password' => $_POST['password'],
]);

// If authentication is successful, redirect to the home page.
$signedIn = (new Authenticator)->attempt($attributes['email'], $attributes['password']);

// If authentication fails, flash an error message and redirect back to the login page.
if (!$signedIn) {
  $form->error('email', 'No matching account found for that email address and password')->throw();
}

redirect('/');

