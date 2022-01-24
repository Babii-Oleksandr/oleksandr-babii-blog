<?php
/**
 * @var \Oleksandrb\Blog\Block\Author $block
 */
$author = $block->getAuthor();
?>
<div title="Author">
    <h1><?= $author->getName() ?></h1>
    <div class="post-list">
        <?php foreach ($block->getAuthorPosts() as $post) : ?>
            <div class="post">
                <a href="/<?= $post->getUrl() ?>" title="<?= $post->getName() ?>">
                    <img src="/post-placeholder.png" alt="<?= $post->getName() ?>" width="200"/>
                </a>
                <a href="/<?= $post->getUrl() ?>" title="<?= $post->getName() ?>"><?= $post->getName() ?></a>
                <span><?= $post->getDate() ?></span>
            </div>
        <?php endforeach; ?>
    </div>
</div>
