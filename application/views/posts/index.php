<?php foreach ($posts as $posts_item): ?>
<div class="post">
    <p><?php echo $posts_item['text'] ?></p>
    <p><strong>Author:</strong> <?php echo $posts_item['author'] ?></p>
    <p><strong>Date:</strong> <?php echo $posts_item['date'] ?></p>
    <p><a href="<?php echo base_url('index.php/posts'); ?>/<?php echo $posts_item['slug'] ?>">View post</a></p>
</div>
<?php endforeach ?>