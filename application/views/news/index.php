<h2><?php echo $title; ?></h2>

<?php foreach ($news as $news_item) : ?>

        <h3><?php echo $news_item['title']; ?></h3>
        <div class="main">
                <?php echo $news_item['body']; ?>
        </div>
        <a href="<?php echo site_url('news/' . $news_item['slug']); ?>"><button id="view_article">View article</button></a>
        <a href="<?php echo site_url('news/delete/' . $news_item['id']); ?>" onclick="return confirm('Are you sure you want to delete this article?');"><button id="button_delete_article">Delete Article</button>
        </a>
        <a href="<?php echo site_url('news/update/' . $news_item['id']); ?>"><button id="button_update_article">Update Article</button>
        </a>

<?php endforeach; ?>