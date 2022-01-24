<?php

declare(strict_types=1);

namespace Oleksandrb\Blog\Model\Category;

class Entity
{
    private int $categoryId;

    private string $name;

    private string $url;

    private array $postsIds;

    /**
     * @return int
     */
    public function getCategoryId(): int
    {
        return $this->categoryId;
    }

    /**
     * @param int $categoryId
     * @return $this
     */
    public function setCategoryId(int $categoryId): Entity
    {
        $this->categoryId = $categoryId;

        return $this;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string $name
     * @return $this
     */
    public function setName(string $name): Entity
    {
        $this->name = $name;

        return $this;
    }

    /**
     * @return string
     */
    public function getUrl(): string
    {
        return $this->url;
    }

    /**
     * @param string $url
     * @return $this
     */
    public function setUrl(string $url): Entity
    {
        $this->url = $url;

        return $this;
    }

    /**
     * @return array
     */
    public function getPostsIds(): array
    {
        return $this->postsIds;
    }

    /**
     * @param array $postsIds
     * @return $this
     */
    public function setPostsIds(array $postsIds): Entity
    {
        $this->postsIds = $postsIds;

        return $this;
    }
}
