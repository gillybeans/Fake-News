<?php


declare(strict_types=1);



function sortDates (array $a, array $b): bool
{
    return strtotime($a['published']) < strtotime($b['published']);
}