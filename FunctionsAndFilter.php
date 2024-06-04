<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Demo</title>
</head>
<body>
    <h1> List of Movies </h1>

    <?php 
        $movies = [

            [
                'name' => 'Kung Fu Panda 1',
                'year' => 2008,
                'author' => 'John Stevenson',
                'purchaseUrl' => 'https://example.com'

            ],


            [

                'name' => 'Kung Fu Panda 2',
                'year' => 2011,
                'author' => 'Jennifer Yuh Nelson',
                'purchaseUrl' => 'https://example.com'

            ],


            [

                'name' => 'Kung Fu Panda 3',
                'year' => 2016,
                'author' => 'Jennifer Yuh Nelson',
                'purchaseUrl' => 'https://example.com'
                
            ]
        ];

        function filterByYear($movies, $year) {
            $filteredMovies = [];
            foreach ($movies as $movie) {
                if($movie['year'] >= $year) {
                    $filteredMovies[] = $movie;
                }
            }

            return $filteredMovies;
        }    

    ?>

    <ul>
        <?php foreach (filterByYear($movies, 2000) as $movie) : ?>
            <li>
                <a href="<?= $movie['purchaseUrl'] ?>">
                <?= $movie['name']; ?> (<?= $movie['year'] ?>)
            </li>    
        <?php endforeach; ?>

    </ul>


</body>
</html>
