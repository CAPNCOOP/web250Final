<!doctype html>

<html lang="en">

<head>
  <title>WNC Birds <?php if (isset($page_title)) {
                      echo '- ' . h($page_title);
                    } ?></title>
  <meta charset="utf-8">
  <style>
    nav ul li {
      list-style-type: none;
    }

    nav ul li a {
      text-decoration: none;
    }

    nav li {
      display: inline;
      margin: 2rem;
    }
  </style>
</head>

<body>

  <header>
    <h1>
      <a href="<?php echo url_for('/active-record/index.php'); ?>">
        WNC Birds
      </a>
    </h1>

    <nav>
      <ul>
        <li><strong>User: <?php echo $session->username; ?></strong></li>
        <li><a href="<?php echo url_for('../public/index.php') ?>">Menu</a></li>
        <li><a href="<?php echo url_for('../public/logout.php') ?>">Logout</a></li>
      </ul>
    </nav>

  </header>
