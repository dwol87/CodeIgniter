<h2><?php echo $title; ?></h2>

<!-- <?php echo validation_errors(); ?> -->

<?php echo form_open('news/create'); ?>

<?php
foreach ($news as $rows) : ?>
    <label for="title"><?php echo $row->title; ?></label>
    <input type="text" name="title" /><br />

    <label for="text">Text</label>
    <textarea name="text"><?php echo $row->body; ?></textarea><br />

    <input type="submit" name="submit" value="Update news item" />
<?php endforeach; ?>

</form>