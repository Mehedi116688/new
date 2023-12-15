<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
    <div class="container mt-20 bg-slate-200 mx-auto text-center border w-1/2 p-4">
        <?php
            $randtext = [
                '“Every child is an artist; the problem is staying an artist when you grow up”' => '– Pablo Picasso',
                '“Don’t think about making art, just get it done. Let everyone else decide if it’s good or bad, whether they love it or hate it. While they are deciding, make even more art.”'=>' – Andy Warhol',
                '“Art is a collaboration between God and the artist, and the less the artist does the better.”' => '– Andre Gide',
                '“Every artist was first an amateur.”' => '– Ralph Waldo Emerson',
                '“I found I could say things with color and shapes that I couldn’t say any other way – things I had no words for.”' => '– Georgia O’Keeffe'
            ];

            $quotes = array_rand($randtext);
            $writerQuote = $randtext[$quotes];

            echo $quotes;
            echo $writerQuote;
        ?>
    </div>
</body>
</html>