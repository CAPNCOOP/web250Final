<?php

require_once('../../private/initialize.php');

/* 
  Use the bicycles/staff/new.php file as a guide 
  so your file mimics the same functionality.
  Be sure to include the display_errors() function.
*/
if (is_post_request()) {

  $args = [];
  $args['common_name'] = $_POST['common_name'] ?? NULL;
  $args['habitat'] = $_POST['habitat'] ?? NULL;
  $args['food'] = $_POST['food'] ?? NULL;
  $args['conservation_id'] = $_POST['conservation_id'] ?? NULL;
  $args['backyard_tips'] = $_POST['backyard_tips'] ?? NULL;

  $bird = new Bird($args);
  $result = $bird->save();

  $result = false;
  if ($result === true) {
    $new_id = 0;
    $_SESSION['message'] = 'The bird was created successfully.';
    redirect_to(url_for('/active-record/show.php?id=' . $new_id));
  } else {
    //show errors
  }
} else {
  // display the form
  $bird = new Bird;
}
?>

<?php $page_title = 'Create Bird'; ?>
<?php include(SHARED_PATH . '../public_header.php'); ?>

<div id="content">

  <a class="back-link" href="<?php echo url_for('../public/birds.php'); ?>">&laquo; Back to List</a>

  <div class="bird new">
    <h1>Create Bird</h1>

    <?php echo display_errors($bird->errors); ?>

    <form action="<?php echo url_for('/active-record/new.php'); ?>" method="post">

      <?php include('form_fields.php'); ?>

      <div id="operations">
        <input type="submit" value="Create Bird" />
      </div>
    </form>

  </div>

</div>


<?php include(SHARED_PATH . '/public_footer.php'); ?>
