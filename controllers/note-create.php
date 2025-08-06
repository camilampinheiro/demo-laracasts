<?php

$heading = "Create Note";

if($_SERVER['REQUEST_METHOD'] === 'POST') {
  dd('you submitted the form!');
}

require 'views/note-create.view.php';

?>