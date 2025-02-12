<?php

// prevents this code from being loaded directly in the browser
// or without first setting the necessary object
if (!isset($bird)) {
  redirect_to(url_for('../index.php'));
}
?>

<dl>
  <dt>Name</dt>
  <dd><input type="text" name="common_name" value="<?php echo h($bird->common_name); ?>" /></dd>
</dl>

<dl>
  <dt>Habitat</dt>
  <dd><input type="text" name="habitat" value="<?php echo h($bird->habitat); ?>" /></dd>
</dl>

<dl>
  <dt>food</dt>
  <dd><input type="text" name="food" value="<?php echo h($bird->food); ?>" /></dd>
</dl>

<dl>
  <dt>Conservation</dt>
  <dd>
    <select name="conservation_id">
      <option value=""></option>
      <?php foreach (Bird::CONSERVATION_OPTIONS as $cons_id => $cons_name) { ?>
        <option value="<?php echo $cons_id; ?>" <?php if ($bird->conservation_id == $cons_id) {
                                                  echo 'selected';
                                                } ?>>
          <?php echo $cons_name; ?></option>
      <?php } ?>
    </select>
  </dd>
</dl>

<dl>
  <dt>Backyard Tips</dt>
  <dd><input type="text" name="backyard_tips" value="<?php echo h($bird->backyard_tips); ?>" /></dd>
</dl>
