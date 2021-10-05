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
        <img src="post-placeholder.png" alt="post 1" width="300"/>
        <h1>post 1</h1>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Commodi cumque dolore eos exercitationem, impedit laudantium minima minus molestias quaerat quam, quidem repellendus sit temporibus veniam veritatis.</p>
        <span>Oleksandr Babii</span>
        <span>2021-12-09</span>
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
