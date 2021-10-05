<?php
require_once 'data.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>{DV.Campus} PHP Framework</title>
    <style>
        header,
        main,
        footer {
            border: 1px dashed black;
        }

        .post-list {
            display: flex;
        }

        .post-list .post {
            max-width: 30%;
        }
    </style>
</head>
<body>
    <header>
        <a href="/" title="{DV.Campus} PHP Framework">
            <img src="logo.jpg" alt="{DV.Campus} Logo" width="200"/>
        </a>
        <nav>
            <ul>
                <?php foreach (blogGetCategory() as $category) : ?>
                    <li>
                        <a href="/<?= $category['url'] ?>"><?= $category['name'] ?></a>
                    </li>
                <?php endforeach; ?>
            </ul>
        </nav>
    </header>

    <main>
        <section title="Posts">
            <h1>Category 1</h1>
            <div class="post-list">
                <div class="post">
                    <a href="/post-1-url" title="Post 1">
                        <img src="/post-placeholder.png" alt="Post 1" width="200"/>
                    </a>
                    <p><a href="/post-1-url" title="Post 1">Post 1</a></p>
                    <span>Oleksandr Babii</span>
                    <span>2021-12-05</span>
                </div>
                <div class="post">
                    <a href="/post-2-url" title="Post 2">
                        <img src="/post-placeholder.png" alt="Post 2" width="200"/>
                    </a>
                    <p><a href="/post-2-url" title="Post 2">Post 2</a></p>
                    <span>Vitaliy Kayun</span>
                    <span>2021-12-15</span>
                </div>
                <div class="post">
                    <a href="/post-3-url" title="Post 3">
                        <img src="/post-placeholder.png" alt="Post 3" width="200"/>
                    </a>
                    <p><a href="/post-3-url" title="Post 3">Post 3</a></p>
                    <span>Oleksandr Babii</span>
                    <span>2021-12-09</span>
                </div>
            </div>
        </section>
    </main>

    <footer>
        <nav>
            <ul>
                <li>
                    <a href="/about-us">About Us</a>
                </li>
                <li>
                    <a href="/terms-and-conditions">Terms & Conditions</a>
                </li>
                <li>
                    <a href="/contact-us">Contact Us</a>
                </li>
            </ul>
        </nav>
        <p>© Default Value 2021. All Rights Reserved.</p>
    </footer>
</body>
</html>
