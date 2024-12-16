<?php

require_once('../private/initialize.php');

if (is_post_request()) {

  $args = $_POST['member'];
  $member = new Member($args);
  $member->$user_level = 'm';
  $member->set_hashed_password();
  $result = $member->save();

  if ($result === true) {
    $new_id = $member->id;
    $session->message('You have signed up successfully');
    $session->login($member);
    redirect_to(url_for('/index.php'));
  } else {
    // Render Errors
  }
} else {
  $member = new Member;
}

$page_title = 'Sign Up for Membership';
include(SHARED_PATH . '/public_header.php');
?>

<a href="<?php echo url_for('/index.php'); ?>">&laquo; Back to Menu</a>

<h1>Create Member</h1>

<?php echo display_errors($member->errors); ?>

<form action="<?php echo url_for('/signup.php') ?>" method="post">
  <?php include('members/form_fields.php'); ?>
  <input type="submit" value="Sign Up">
</form>

<?php include(SHARED_PATH . '/public_footer.php');
