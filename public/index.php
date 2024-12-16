<?php require_once('../private/initialize.php'); ?>


<?php $page_title = 'Member Menu'; ?>
<?php include(SHARED_PATH . '/public_header.php');  ?>

<div id="content">
  <div id="main-menu">
    <h2>Main Menu</h2>
    <ul>
      <li><a href="<?php echo url_for('/birds/birds.php'); ?>">Birds</a></li>
      <?php if ($session->is_logged_in()) { ?>
        <li><a href="<?php echo url_for('/members/index.php'); ?>">Members</a></li>
      <?php } ?>
    </ul>
  </div>

</div>

<?php include(SHARED_PATH . '/public_footer.php'); ?>
