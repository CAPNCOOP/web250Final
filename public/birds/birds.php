<?php
require_once('../../private/initialize.php');
$page_title = 'Bird List';
include(SHARED_PATH . '/public_header.php');

?>

<ul>
  <?php if ($session->is_logged_in()) { ?>
    <li><a href="<?php echo url_for('/members/index.php') ?>">View Members</a></li>
  <?php } ?>
  <li><a href="<?php echo url_for('/birds/about.php') ?>">About Us</a></li>
</ul>

<h2>Bird inventory</h2>
<p>This is a short list -- start your birding!</p>

<?php if ($session->is_logged_in()) { ?>
  <div class="actions">
    <a class="action" href="<?php echo url_for('birds/new.php'); ?>">Add Bird</a>
  </div>
<?php } ?>

<table border="1">
  <tr>
    <th>Name</th>
    <th>Habitat</th>
    <th>Food</th>
    <th>Conservation</th>
    <th>Backyard Tips</th>
    <th>&nbsp;</th>

    <?php if ($session->is_logged_in()) { ?>

      <th>&nbsp;</th>
      <th>&nbsp;</th>

    <?php } ?>
  </tr>

  <?php

  // Create a new bird object that uses the find_all() method
  $birds = Bird::find_all();


  foreach ($birds as $bird) {

  ?>
    <tr>
      <td><?php echo h($bird->common_name); ?></td>
      <td><?php echo h($bird->habitat); ?></td>
      <td><?php echo h($bird->food); ?></td>
      <td><?php echo h($bird->conservation()); ?></td>
      <td><?php echo h($bird->backyard_tips); ?></td>
      <td><a href="<?php echo url_for('/birds/detail.php?id=' . h(u($bird->id))); ?>">View</a></td>

      <?php if ($session->is_logged_in()) { ?>

        <td><a href="<?php echo url_for('/birds/edit.php?id=' . h(u($bird->id))); ?>">Edit</a></td>
        <td><a href="<?php echo url_for('/birds/delete.php?id=' . h(u($bird->id))); ?>">Delete</a></td>
      <?php } ?>
    </tr>
  <?php } ?>

</table>


<?php include(SHARED_PATH . '/public_footer.php'); ?>
