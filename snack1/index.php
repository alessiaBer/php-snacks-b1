<?php 
/*
Creiamo un array contenente le partite di basket di un’ipotetica tappa del calendario. 
Ogni array avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa e punti fatti dalla squadra ospite. 
Stampiamo a schermo tutte le partite con questo schema.
*/

$basketMatches = [
    [
        "homeTeam" => "Boston Celtics",
        "guestTeam" => "LA Lakers",
        "homePoints" => 87,
        "guestPoints" => 121
    ],
    [
        "homeTeam" => "San Antonio Spurs",
        "guestTeam" => "Chicago Bulls",
        "homePoints" => 125,
        "guestPoints" => 107
    ],
    [
        "homeTeam" => "Miami Heat",
        "guestTeam" => "Cleveland Cavaliers",
        "homePoints" => 112,
        "guestPoints" => 117
    ],
    [
        "homeTeam" => "Toronto Raptors",
        "guestTeam" => "Dllas Mavericks",
        "homePoints" => 111,
        "guestPoints" => 127
    ],
];

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snack 1</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>

<body>
    <h1 class="text-center py-4">NBA matches</h1>
    <div class="container-fluid d-flex flex-column aligm-items-center">
        <?php foreach ($basketMatches as $match) : ?>
        <div class="card rounded-0 shadow col-8 my-0 mx-auto">
            <div class="card-body">
                <div class="home d-flex">
                    <h3 class="pe-4">
                        <strong>Home Team:</strong> <?= $match["homeTeam"] ?>
                    </h3>
                    <span class="fs-4 text-primary">
                        <?= $match["homePoints"] ?>
                    </span>
                </div>
                <div class="guests d-flex">
                    <h3 class="pe-4">
                        <strong>Guest Team:</strong> <?= $match["guestTeam"] ?>
                    </h3>
                    <span class="fs-4 text-primary">
                        <?= $match["guestPoints"] ?>
                    </span>
                </div>
            </div>
        </div>
        <?php endforeach ?>
    </div>

</body>

</html>