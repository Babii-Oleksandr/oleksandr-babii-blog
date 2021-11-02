<?php
declare(strict_types=1);

namespace Oleksandrb\Blog\Block;

use Oleksandrb\Blog\Model\Category\Entity as CategoryEntity;
use Oleksandrb\Blog\Model\Post\Entity as PostEntity;

class Category extends \Oleksandrb\Framework\View\Block
{
    private \Oleksandrb\Framework\Http\Request $request;

    private \Oleksandrb\Blog\Model\Post\Repository $postRepository;

    protected string $template = '../src/Oleksandrb/Blog/view/category.php';

    /**
     * @param \Oleksandrb\Framework\Http\Request $request
     * @param \Oleksandrb\Blog\Model\Post\Repository $postRepository
     */
    public function __construct(
        \Oleksandrb\Framework\Http\Request $request,
        \Oleksandrb\Blog\Model\Post\Repository $postRepository
    ) {
        $this->request = $request;
        $this->postRepository = $postRepository;
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
            $this->getCategory()->getPostIds()
        );
    }
}
