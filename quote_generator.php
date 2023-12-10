<!-- quote_generator.php -->
<?php

function getRandomQuote() {
    $quotes = [
        "Life is what happens when you're busy making other plans. - John Lennon",
        "The only limit to our realization of tomorrow will be our doubts of today. - Franklin D. Roosevelt",
        "Believe you can and you're halfway there. - Theodore Roosevelt",
        "Success is not final, failure is not fatal: It is the courage to continue that counts. - Winston Churchill",
        "In the end, we will remember not the words of our enemies, but the silence of our friends. - Martin Luther King Jr."
    ];

    $randomIndex = array_rand($quotes);
    return $quotes[$randomIndex];
}
?>
