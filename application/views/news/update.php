<h2><?php echo $title; ?></h2>

<?php if ($success) { ?>
    <div class="alert alert-success" role="alert">
        <strong>Success!</strong> News item updated.
    </div>
<?php } ?>

<?php echo form_open(); ?>

<label for="title">Title:</label>
<input type="text" name="title" value="<?php echo $news_title; ?>" /><br />

<label for="text">Text:</label>
<textarea name="text"><?php echo $news_body; ?></textarea><br />

<input type="submit" name="submit" value="Update news item" />


</form>