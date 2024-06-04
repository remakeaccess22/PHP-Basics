<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Demo</title>
</head>
<body>
    <h1> Recommended Books</h1>

    <?php 
        $books = [
            [
                'name' => 'Do Androids Dreams of Electric Sheep',
                'author' => 'Philip K. Dick',
                'releaseYear' => 1968,
                'purchaseURL' => 'https://example.com'
                

            ],

            [
                'name' => 'Project Hail Mary',
                'author' => "Andy Weir",
                'releaseYear' => 2021,
                'purchaseURL' => 'https://example.com'

            ],

            [
                'name' => 'The Martian',
                'author' => 'Andy Weir',
                'releaseYear' => 2011,
                'purchaseURL' => 'https://example.com'

            ]
        ];

        //array_filter below >>
        //Refractoring
        function filter($items, $func) {

            $filteredItems = [];
            foreach ($items as $item) {
                if($func()) {
                    $filteredItems[] = $item;
                }
            }

            return $filteredItems;
        };

        $filteredBooks = $filter($books, function($book) {
             return $book['releaseYear'] <= 2000 && $book['releaseYear'] >= 1950; 
            
            });
    
    ?>
    <ul>
        <?php foreach ($filteredBooks as $book) : ?>
            <li>
                <a href="<?= $book['purchaseURL'] ?>"> 
                <?= $book['name']; ?> (<?= $book['releaseYear'] ?>) - By <?= $book['author'] ?>
                </a>
            </li>
        <?php endforeach; ?>
    </ul>

</body>
</html>
