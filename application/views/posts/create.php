<h2>Create a new post</h2>
<?php echo validation_errors();
echo form_open('posts/create') ?>
<textarea name="text" placeholder="Text"></textarea><br />
<input type="input" name="author" placeholder="Author" /><br />
<button type="submit" name="submit">Create post</button> 
</form>