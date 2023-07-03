<?php 
$quotes = [
    [
        "name" => "Ludqig van Beethoven",
        "quote" => " Art! Who comprehends her ? With whom can one consult concerning this great goddess ?"
    ],
    [
        "name" => "Nelson Mandela",
        "quote" => " The greatest glory in living lies not in never fallng, but in rising every time we fall."
    ],
    [
        "name" => "Steve Jobs",
        "quote" => "Your time is limited, so don't waste in living someone else's life. Don't be trapped by dogma-which is living with the results of other people's thingking"
    ],
    [
        "name" => "Walt Disney",
        "quote" => " The way to get started is to quit talking and begin doing"
    ],
    [
        "name"=> "Elenaor Roosevelt",
        "quote"=> "If life were predictable it would cease to be life, and be without flavor"
    ]
    ];
     
   $randomIndex = rand(0, count($quotes)-1);
   $randomQuotes = $quotes[$randomIndex];
   $randomAuthor = $randomQuotes["name"];
   $quotesSentences = $randomQuotes["quote"];


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="styleo.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Document</title>
</head>
<body style="width:50%">
<div class="hihi">
<div class="adeli" id="animatedElemented">
<div class="adel">
    <div class="title1">
    <h1 class="title">Quote Of The Day</h1>
    </div>
    <div class="fill">
    <p class="top">Press <code>F5</code> or <code> Ctrl + R</code> to randomize the quote</p>

    <h4 class="real"><?=$quotesSentences?> - <?=$randomAuthor?></h4>
    </div>
    <div>
</div>
</div>
<script href="script.js"></script>
</body>
</html>