<?php 
        $books = [
    [
        'name' => 'Do Androids Dreams of Electric Sheep',
        'author' => 'Philip K. Dick',
        'releaseYear' => 1968,
        'purchaseURL' => 'https://example.com',

    ],

    [
        'name' => 'Project Hail Mary',
        'author' => "Andy Weir",
        'releaseYear' => 2021,
        'purchaseURL' => 'https://example.com',

    ],

    [
        'name' => 'The Martian',
        'author' => 'Andy Weir',
        'releaseYear' => 2011,
        'purchaseURL' => 'https://example.com',

    ],
];

//array_filter below >>
//Refractoring
function filter($items, $func)
{

    $filteredItems = [];
    foreach ($items as $item) {
        if ($func($item)) {
            $filteredItems[] = $item;
        }
    }

    return $filteredItems;
};

$filteredBooks = filter($books, function ($book) {
    return $book['releaseYear'] <= 2000 && $book['releaseYear'] >= 1950;

});

require 'index.view.php';
