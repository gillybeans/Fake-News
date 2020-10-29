<?php

declare(strict_types=1);

function buildPosts(array $array, array $posts): array
{
    $column = $array['column'];
    $value = $array['value'];

    if ($value === 'all') {
        return $posts;
    }
}


function sortPostsByPublishedDate(array $posts): array
{
    usort($posts, function ($a, $b) {
    return $b['published_date'] <=> $a['published_date'];
    });
    return $posts;
}