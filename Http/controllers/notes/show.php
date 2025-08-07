<?php

use Core\App;
use Core\Database;

$db = App::resolve(Database::class);

$currentUserId = 4;

// find the corresponding note
$note = $db->query('select * from notes where id = :id', [
  'id' => $_GET['id']
])->findOrFail();

// authorize that the current user is the owner of the note
authorize($note['user_id'] === $currentUserId);

// render the view with the note data
view("notes/show.view.php", [
  'heading' => 'Note',
  'note' => $note,
]);



