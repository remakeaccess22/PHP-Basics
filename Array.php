<?php 

    //Create an array of 3 usernames for website 
    $usernames = [
        "Sirok11",
        "Sirok12",
        "Sirok13"
    ];

    //It could be like this too. 
    foreach ($usernames as $username) {

        echo "<li>$username</li>";

    }
?>

<?php //This is the standard loop through an Array?>

<?php foreach ($usernames as $username) {

    echo "<li>$username</li>";

} ?>

      
<?php //This is the alternative loop through an Array?>

    <?php foreach ($usernames as $username) : ?>
            <li><?= $username; ?></li>
    <?php endforeach; ?>

