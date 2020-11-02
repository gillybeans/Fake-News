<?php

declare(strict_types=1);

//sorts the dates in descending order.
function sortDates (array $a, array $b): bool
{
    return strtotime($a['published']) < strtotime($b['published']);
};

//prints author posts by given id
function filterByAuthor (array $items, int $id): array
{
        $items = array_filter($items, function($item) use ($id) {
            return $item['authorId'] === $id ;
        });

        return $items;
}