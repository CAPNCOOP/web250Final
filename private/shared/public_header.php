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
      <a href="<?php echo url_for('/birds/birds.php'); ?>">
        WNC Birds
      </a>
    </h1>

    <nav>
      <ul>
        <?php if ($session->is_logged_in()) { ?>
          <li><strong>User: <?php echo $session->username; ?></strong></li>
        <?php } ?>

        <li><a href="<?php echo url_for('login.php') ?>">Log In</a></li>
        <li><a href="<?php echo url_for('signup.php') ?>">Sign Up</a></li>

        <?php if ($session->is_logged_in()) { ?>
          <li><a href="<?php echo url_for('logout.php') ?>">Log Out</a></li>
        <?php } ?>
      </ul>
    </nav>

  </header>
