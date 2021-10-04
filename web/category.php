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
        <menu>
            <li>Category 1</li>
            <li>Category 2</li>
            <li>Category 3</li>
            <li>Category 4</li>
        </menu>
    </header>

    <main>
        <section title="Posts">
            <h1>Category 1</h1>
            <div class="post-list">
                <div class="post">
                    <a href="/post-1-url" title="Post 1">
                        <img src="/post-placeholder.png" alt="Post 1" width="200"/>
                    </a>
                    <a href="/post-1-url" title="Post 1">Post 1</a>
                    <span>$33.33</span>
                    <button type="button">Add To Cart</button>
                </div>
                <div class="post">
                    <a href="/post-2-url" title="Post 2">
                        <img src="/post-placeholder.png" alt="Post 2" width="200"/>
                    </a>
                    <a href="/post-2-url" title="Post 2">Post 2</a>
                    <span>$66.66</span>
                    <button type="button">Add To Cart</button>
                </div>
                <div class="post">
                    <a href="/post-3-url" title="Post 3">
                        <img src="/post-placeholder.png" alt="Post 3" width="200"/>
                    </a>
                    <a href="/post-3-url" title="Post 3">Post 3</a>
                    <span>$99.99</span>
                    <button type="button">Add To Cart</button>
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
