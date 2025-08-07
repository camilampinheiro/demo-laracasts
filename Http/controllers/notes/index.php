<?php

use Core\Database;
use Core\App;

$config = require base_path('config.php');
$db = App::resolve(Database::class);

$notes = $db->query("select * from notes where user_id = 4")->get();

view("notes/index.view.php", [
  'heading' => 'Notes',
  'notes' => $notes,
]);

