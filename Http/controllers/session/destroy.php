<?php

use Core\Authenticator;

// log out the user
Authenticator::logout();
header('location: /');
exit();

