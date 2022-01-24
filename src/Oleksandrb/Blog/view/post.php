<?php
/**
 * @var \Oleksandrb\Blog\Block\Post $block
 */
$post = $block->getPost();
$author = $block->getAuthor();
?>
<div class="post-page">
    <img src="/post-placeholder.png" alt="<?= $post->getName() ?>" width="300"/>
    <h1><?= $post->getName() ?></h1>
    <?php if ($author) : ?>
        <a href="<?= $author->getUrl() ?>"><?= $author->getName() ?></a>
    <?php else : ?>
        <span>No name</span>
    <?php endif ?>
    <p><?= $post->getContent() ?></p>
    <span><?= $post->getDate()?></span>
</div>