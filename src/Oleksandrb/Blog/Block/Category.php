<?php
declare(strict_types=1);

namespace Oleksandrb\Blog\Block;

use Oleksandrb\Blog\Model\Category\Entity as CategoryEntity;
use Oleksandrb\Blog\Model\Post\Entity as PostEntity;
use Oleksandrb\Blog\Model\Author\Entity as AuthorEntity;

class Category extends \Oleksandrb\Framework\View\Block
{
    private \Oleksandrb\Framework\Http\Request $request;
    private \Oleksandrb\Blog\Model\Post\Repository $postRepository;
    private \Oleksandrb\Blog\Model\Author\Repository $authorRepository;

    protected string $template = '../src/Oleksandrb/Blog/view/category.php';

    /**
     * @param \Oleksandrb\Framework\Http\Request $request
     * @param \Oleksandrb\Blog\Model\Post\Repository $postRepository
     * @param \Oleksandrb\Blog\Model\Author\Repository $authorRepository
     */
    public function __construct(
        \Oleksandrb\Framework\Http\Request $request,
        \Oleksandrb\Blog\Model\Post\Repository $postRepository,
        \Oleksandrb\Blog\Model\Author\Repository $authorRepository
    ) {
        $this->request = $request;
        $this->postRepository = $postRepository;
        $this->authorRepository = $authorRepository;
    }

    /**
     * @return CategoryEntity
     */
    public function getCategory(): CategoryEntity
    {
        return $this->request->getParameter('category');
    }

    /**
     * @return PostEntity[]
     */
    public function getCategoryPosts(): array
    {
        return $this->postRepository->getByIds(
            $this->getCategory()->getPostsIds()
        );
    }

    /**
     * @param PostEntity $post
     * @return AuthorEntity|null
     */
    public function getPostAuthor(PostEntity $post): ?AuthorEntity
    {
        return $this->authorRepository->getById($post->getAuthorId());
    }
}
