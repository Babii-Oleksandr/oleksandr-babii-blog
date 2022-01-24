<?php

declare(strict_types=1);

namespace Oleksandrb\Blog\Block;

use Oleksandrb\Blog\Model\Category\Entity as CategoryEntity;

class CategoryList extends \Oleksandrb\Framework\View\Block
{
    private \Oleksandrb\Blog\Model\Category\Repository $categoryRepository;

    protected string $template = '../src/Oleksandrb/Blog/view/category_list.php';

    /**
     * @param \Oleksandrb\Blog\Model\Category\Repository $categoryRepository
     */
    public function __construct(\Oleksandrb\Blog\Model\Category\Repository $categoryRepository)
    {
        $this->categoryRepository = $categoryRepository;
    }

    /**
     * @return CategoryEntity[]
     */
    public function getCategories(): array
    {
        return $this->categoryRepository->getList();
    }
}
