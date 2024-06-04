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

        //Lambda Function
        $filterByAuthor = function ($books, $author) {

            $filteredBooks = [];
            foreach ($books as $book) {
                if($book['author'] === $author) {
                    $filteredBooks[] = $book;
                }
            }

            return $filteredBooks;
        };

        $filteredBooks = $filterByAuthor($books, $author)
    
    ?>
    <ul>
        <?php foreach ($filterByAuthor as $book) : ?>
            <li>
                <a href="<?= $book['purchaseURL'] ?>"> 
                <?= $book['name']; ?> (<?= $book['releaseYear'] ?>) - By <?= $book['author'] ?>
                </a>
            </li>
        <?php endforeach; ?>
    </ul>

</body>
</html>
