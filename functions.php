

<?php
/* am confused

declare(strict_types=1);


function sortPostsByPublished(array $posts): array
{
    usort($posts, function ($a, $b) {
    return $b['published'] <=> $a['published'];
    });
    return $posts;
}



function filteredAuthor (array $items, int $id): array
{
        $items = array_filter($items, function($item) use ($id) {
            return $item['authorId'] === $id ;
        });

        return $items;
};