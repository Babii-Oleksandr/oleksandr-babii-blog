<?php
/** @var \Oleksandrb\Blog\Block\Category $block */
?>
<div title="category-wrapper">
    <h1><?= $block->getCategory()->getName() ?></h1>
    <div class="post-list">
        <?php foreach ($block->getCategoryPosts() as $post) : ?>
            <div class="post">
                <a href="/<?= $post->getUrl() ?>" title="<?= $post->getName() ?>">
                    <img src="/post-placeholder.png" alt="<?= $post->getName() ?>" width="200"/>
                </a>
                <a href="/<?= $post->getUrl() ?>" title="<?= $post->getName() ?>"><?= $post->getName() ?></a>
                <span><?= $post->getAuthor()?></span>
                <span><?= $post->getDate()?></span>
            </div>
        <?php endforeach; ?>
    </div>
</div>