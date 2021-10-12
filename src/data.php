<?php

declare(strict_types=1);

function blogGetCategory(): array
{
    return [
        1 => [
            'category_id' => 1,
            'name'        => 'Policy',
            'url'         => 'policy',
            'posts'    => [1, 2, 3]
        ],
        2 => [
            'category_id' => 2,
            'name'        => 'Economy',
            'url'         => 'economy',
            'posts'    => [3, 4, 5]
        ],
        3 => [
            'category_id' => 3,
            'name'        => 'Sport',
            'url'         => 'sport',
            'posts'    => [2, 4, 6]
        ]
    ];
}

function blogGetPost(): array
{
    return [
        1 => [
            'post_id'  => 1,
            'name'        => 'Post 1',
            'url'         => 'Post-1',
            'description' => 'Post 1 Description',
            'author'       => 'Oleksandr Babii',
            'date'         => '2021-12-05'
        ],
        2 => [
            'post_id'  => 2,
            'name'        => 'Post 2',
            'url'         => 'Post-2',
            'description' => 'Post 2 Description',
            'author'       => 'Vitaliy Kayun',
            'date'         => '2021-12-13'
        ],
        3 => [
            'post_id'  => 3,
            'name'        => 'Post 3',
            'url'         => 'Post-3',
            'description' => 'Post 3 Description',
            'author'       => 'Oleksandr Babii',
            'date'         => '2021-12-16'
        ],
        4 => [
            'post_id'  => 4,
            'name'        => 'Post 4',
            'url'         => 'Post-4',
            'description' => 'Post 4 Description',
            'author'       => 'Oleksandr Babii',
            'date'         => '2021-06-05'
        ],
        5 => [
            'post_id'  => 5,
            'name'        => 'Post 5',
            'url'         => 'Post-5',
            'description' => 'Post 5 Description',
            'author'       => 'Sergey Chernenkov',
            'date'         => '2021-06-10'
        ],
        6 => [
            'post_id'  => 6,
            'name'        => 'Post 6',
            'url'         => 'Post-6',
            'description' => 'Post 6 Description',
            'author'       => 'Oleksandr Babii',
            'date'         => '2021-06-14'
        ]
    ];
}

function blogGetCategoryPost(int $categoryId): array
{
    $categories = blogGetCategory();

    if (!isset($categories[$categoryId])) {
        throw new InvalidArgumentException("Category with ID $categoryId does not exist");
    }

    $postsForCategory = [];
    $posts = blogGetPost();

    foreach ($categories[$categoryId]['posts'] as $postId) {
        if (!isset($posts[$postId])) {
            throw new InvalidArgumentException("Post with ID $postId from category $categoryId does not exist");
        }

        $postsForCategory[] = $posts[$postId];
    }

    return $postsForCategory;
}

function blogGetCategoryByUrl(string $url): ?array
{
    $data = array_filter(
        blogGetCategory(),
        static function ($category) use ($url) {
            return $category['url'] === $url;
        }
    );

    return array_pop($data);
}

function blogGetPostByUrl(string $url): ?array
{
    $data = array_filter(
        blogGetPost(),
        static function ($post) use ($url) {
            return $post['url'] === $url;
        }
    );

    return array_pop($data);
}

//function blogGetPosts() : ?array
//{
//    usort($array, function($a, $b){
//        return ($a['price'] - $b['price']);
//    });
//}
