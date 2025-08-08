<?php

namespace Core;

class Authenticator {
  public function attempt($email, $password) {
    $user = App::resolve(Database::class)->query('select * from users where email = :email', [
      'email' => $email,
    ])->find();

    // we have a user, but we don´t know if the passowrd provided matches what we have in the database
    if ($user) {
      if (password_verify($password, $user['password'])) {
        $this->login([
          'email' => $email,
        ]);

        return true;
      }
    }

    return false;
  }

  // log in the user 
  public static function login($user) {
    $_SESSION['user'] = [
      'email' => $user['email'],
    ];

    session_regenerate_id(true);
  }

  // log out the user
  public static function logout() {
    Session::destroy();
  }
}
