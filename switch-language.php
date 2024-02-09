<?php
session_start();

if (isset($_GET['language'])) {
  // Get the selected language from the link
  $language = $_GET['language'];

  // Store the selected language in the session
  $_SESSION['language'] = $language;

  // Redirect back to the index page
  header('Location: index.php');
  exit();
}
?>
