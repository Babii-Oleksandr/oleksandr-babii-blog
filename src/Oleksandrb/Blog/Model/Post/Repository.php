<?php

declare(strict_types=1);

namespace Oleksandrb\Blog\Model\Post;

class Repository
{
    private \DI\FactoryInterface $factory;

    /**
     * @param \DI\FactoryInterface $factory
     */
    public function __construct(\DI\FactoryInterface $factory)
    {
        $this->factory = $factory;
    }

    /**
     * @return Entity[]
     */
    public function getList(): array
    {
        return [
            1 => $this->makeEntity()->setPostId(1)
                ->setName('Post 1')
                ->setUrl('post-1')
                ->setContent('Lorem ipsum dolor sit amet')
                ->setAuthorId(1)
                ->setDate('2021.12.05'),
            2 => $this->makeEntity()->setPostId(2)
                ->setName('Post 2')
                ->setUrl('post-2')
                ->setContent('Lorem ipsum dolor sit amet')
                ->setAuthorId(2)
                ->setDate('2021.12.11'),
            3 => $this->makeEntity()->setPostId(3)
                ->setName('Post 3')
                ->setUrl('post-3')
                ->setContent('Lorem ipsum dolor sit amet')
                ->setAuthorId(3)
                ->setDate('2021.12.25'),
            4 => $this->makeEntity()->setPostId(4)
                ->setName('Post 4')
                ->setUrl('post-4')
                ->setContent('Lorem ipsum dolor sit amet')
                ->setAuthorId(4)
                ->setDate('2021.12.19'),
            5 => $this->makeEntity()->setPostId(5)
                ->setName('Post 5')
                ->setUrl('post-5')
                ->setContent('Lorem ipsum dolor sit amet')
                ->setAuthorId(5)
                ->setDate('2021.12.17'),
            6 => $this->makeEntity()->setPostId(6)
                ->setName('Post 6')
                ->setUrl('post-6')
                ->setContent('Lorem ipsum dolor sit amet')
                ->setAuthorId(6)
                ->setDate('2021.12.13')
        ];
    }

    /**
     * @param string $url
     * @return ?Entity
     */
    public function getByUrl(string $url): ?Entity
    {
        $data = array_filter(
            $this->getList(),
            static function ($post) use ($url) {
                return $post->getUrl() === $url;
            }
        );

        return array_pop($data);
    }

    /**
     * @param array $postIds
     * @return array
     */
    public function getByIds(array $postIds): array
    {
        return array_intersect_key(
            $this->getList(),
            array_flip($postIds)
        );
    }

    /**
     * @param int $authorId
     * @return array
     */
    public function getByAuthorId(int $authorId): array
    {
        return array_filter(
            $this->getList(),
            static function ($post) use ($authorId) {
                return $post->getAuthorId() === $authorId;
            }
        );
    }

    /**
     * @return Entity
     */
    private function makeEntity(): Entity
    {
        return $this->factory->make(Entity::class);
    }
}
