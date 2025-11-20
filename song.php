<?php
// PHP Lyric Remix: "I Say a Little Prayer" by Dionne Warwick
//  Created by Jaymee Santos
// Goal: Display one complete song lyric using variables, arrays, operators, and type juggling.

//  String Variables
$title = "I Say a Little Prayer";
$artist = "Dionne Warwick";
$mood = "happy";
$nounPrayer = "prayer";

// Numeric Variables with type juggling
$verseOne = 1;
$verseTwo = (1 + "1");     // string + int → type juggling (2)
$verseThree = (2 * "1.5"); // string * float → type juggling (3.0)
$repeatChorus = 2;         // numeric operator for repetition

// Arrays for nouns, verbs, and adjectives
$nouns = ["morning", "makeup", "hair", "minute", "day", "breakfast", "bus", "work", "heart", "love", "darling", "prayer"];
$verbs = ["wake", "put", "wonder", "run", "drive", "think", "say", "make", "bring", "hold", "love", "pray", "take", "know", "stay", "carry", "start", "forever"];
$adjectives = ["little", "every", "true", "always", "right", "sweet", "true"];

// Song Sections (arrays)
$verse1 = [
    "The moment I " . $verbs[0] . " up, before I " . $verbs[1] . " on my " . $nouns[1] . ",",
    "I " . $verbs[5] . " a " . $nounPrayer . " for you.",
    "While combing my " . $nouns[2] . ", and " . $nouns[5] . " " . $verbs[7] . " to break up,",
    "I " . $verbs[5] . " a " . $nounPrayer . " for you.",
    "Forever, and " . $adjectives[1] . " " . $nouns[3] . " of the " . $nouns[4] . "."
];

$verse2 = [
    "At " . $nouns[6] . ", whenever I " . $verbs[3] . " for " . $nouns[7] . ",",
    "I " . $verbs[5] . " a " . $adjectives[0] . " " . $nounPrayer . " for you.",
    "Work just seems to " . $verbs[15] . " me through,",
    "I " . $verbs[5] . " a " . $adjectives[0] . " " . $nounPrayer . " for you.",
    "Forever and ever, you'll " . $verbs[14] . " in my " . $nouns[8] . "."
];

$chorus = [
    "Forever, forever, you'll " . $verbs[14] . " in my " . $nouns[8] . ",",
    "And I will " . $verbs[10] . " you.",
    "Forever, forever, we " . $verbs[16] . " never will part,",
    "Oh, how I'll " . $verbs[13] . " you.",
    "Together, forever, that's how it must be,",
    "To " . $verbs[12] . " without you,",
    "Would only mean heartbreak for me.",
    "I say a little " . $nounPrayer . " for you."
];

$postChorus = [
    "My darling, believe me.",
    "For me, there is no one but you."
];

$verse3 = [
    "Each time I " . $verbs[2] . " of you, my " . $nouns[9] . " does a " . $adjectives[4] . " beat.",
    "I " . $verbs[5] . ", I " . $verbs[5] . ", I " . $verbs[5] . " a " . $adjectives[0] . " " . $nounPrayer . " for you.",
    "No matter where I am, I " . $verbs[5] . " a " . $nounPrayer . " for you.",
    "For you, for you."
];

$outro = [
    "Forever and ever, you'll " . $verbs[14] . " in my " . $nouns[8] . ".",
    "I " . $verbs[10] . " you.",
    "Forever and ever, we " . $verbs[16] . " never will part,",
    "Oh, how I'll " . $verbs[13] . " you.",
    "I say a little " . $nounPrayer . " for you.",
    "I say a little " . $nounPrayer . " for you.",
    "Forever in my " . $nouns[8] . "."
];

// Simple mood logic using operators
$moodScore = $verseOne + $verseTwo + $verseThree;
$moodMessage = ($moodScore > 5) ? "The song feels so $mood and full of love!" : "It feels a little melancholic.";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= htmlspecialchars($title) ?></title>
        <style>
        body {
            font-family: 'Poppins', sans-serif;
            background: linear-gradient(135deg, #ffc0cb, #f7a8b8);
            color: #2e2e2e;
            margin: 0;
            padding: 2rem;
            text-align: center;
        }

        .header-card {
            background-color: #ff97af;
            border-radius: 18px;
            padding: 1rem;
            margin-bottom: 2rem;
            box-shadow: 0 4px 12px rgba(255, 255, 255, 0.7);
        }

        .header-card h1 {
            font-size: 2rem;
            color: white;
            margin: 0.5rem 0;
        }

        h2 {
            font-size: 1.3rem;
            margin-bottom: 1rem;
        }

        h3 {
            margin-top: 2rem;
            color: white;
            background-color: #ffb6c1;
            display: inline-block;
            padding: 0.4rem 1rem;
            border-radius: 12px;
            box-shadow: 0 3px 6px rgba(0,0,0,0.1);
        }

        p {
            font-size: 1rem;
            margin: 0.4rem auto;
            width: 80%;
            line-height: 1.5;
        }

        footer {
            margin-top: 3rem;
            font-size: 0.9rem;
            color: #fff0f6;
            background-color: #ff97af;
            border-radius: 12px;
            padding: 1rem;
            box-shadow: 0 3px 10px rgba(0,0,0,0.1);
        }

        footer strong {
            color: white;
        }
    </style>
</head>
<body>

<!-- Header Card Section -->
<div class="header-card">
    <h1>I Say a Little Prayer</h1>  
</div>

<h2><?= htmlspecialchars($title) ?> <br> <span style="font-size: 1rem;">by <?= htmlspecialchars($artist) ?></span></h2>

<div class="mood">
    <?= $moodMessage ?>
</div>

<!-- Displayed lyrics by referencing array and chorus indexes -->
<div>
<h3>Verse <?= $verseOne ?></h3>
<p><?= $verse1[0] ?></p>
<p><?= $verse1[1] ?></p>
<p><?= $verse1[2] ?></p>
<p><?= $verse1[3] ?></p>
<p><?= $verse1[4] ?></p>
</div>

<div>
<h3>Verse <?= $verseTwo ?></h3>
<p><?= $verse2[0] ?></p>
<p><?= $verse2[1] ?></p>
<p><?= $verse2[2] ?></p>
<p><?= $verse2[3] ?></p>
<p><?= $verse2[4] ?></p>
</div>

<div>
<h3>Chorus</h3>
<p><?= $chorus[0] ?></p>
<p><?= $chorus[1] ?></p>
<p><?= $chorus[2] ?></p>
<p><?= $chorus[3] ?></p>
<p><?= $chorus[4] ?></p>
<p><?= $chorus[5] ?></p>
<p><?= $chorus[6] ?></p>
<p><?= $chorus[7] ?></p>
</div>

<div>
<h3>Post-Chorus</h3>
<p><?= $postChorus[0] ?></p>
<p><?= $postChorus[1] ?></p>
</div>

<div>
<h3>Verse <?= $verseThree ?></h3>
<p><?= $verse3[0] ?></p>
<p><?= $verse3[1] ?></p>
<p><?= $verse3[2] ?></p>
<p><?= $verse3[3] ?></p>
</div>

<div>
<h3>Chorus</h3>
<p><?= $chorus[0] ?></p>
<p><?= $chorus[1] ?></p>
<p><?= $chorus[2] ?></p>
<p><?= $chorus[3] ?></p>
<p><?= $chorus[4] ?></p>
<p><?= $chorus[5] ?></p>
<p><?= $chorus[6] ?></p>
<p><?= $chorus[7] ?></p>
</div>

<div>
<h3>Post-Chorus</h3>
<p><?= $postChorus[0] ?></p>
<p><?= $postChorus[1] ?></p>
</div>

<div>
<h3>Outro</h3>
<p><?= $outro[0] ?></p>
<p><?= $outro[1] ?></p>
<p><?= $outro[2] ?></p>
<p><?= $outro[3] ?></p>
<p><?= $outro[4] ?></p>
<p><?= $outro[5] ?></p>
<p><?= $outro[6] ?></p>
</div>

<footer>
    <p>by <strong>Jaymee Santos</strong> | BS Cybersecurity Student</p>
    <p style="font-size: 0.9rem; color: #ffeef7;">“Singing a Little Prayer for you”</p>
</footer>

</body>
</html>

