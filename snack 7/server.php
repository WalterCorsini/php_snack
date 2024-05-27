<?php

$db = [
    'teachers' => [
        [
            'name' => 'Michele',
            'lastname' => 'Papagni'
        ],
        [
            'name' => 'Fabio',
            'lastname' => 'Forghieri'
        ]
    ],
    'pm' => [
        [
            'name' => 'Roberto',
            'lastname' => 'Marazzini'
        ],
        [
            'name' => 'Federico',
            'lastname' => 'Pellegrini'
        ]
    ]
];

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- style -->
    <link rel="stylesheet" href="./css/style.css">
</head>

<body>
    <div class="grey">
        <?php foreach ($db["teachers"] as $cur_teacher) { ?>
            <p><?php echo $cur_teacher["name"] ?></p>
            <p><?php echo $cur_teacher["lastname"] ?></p>
        <?php } ?>
    </div>
    <div class="green">
        <?php foreach ($db["pm"] as $cur_pm) { ?>
            <p><?php echo $cur_teacher["name"] ?></p>
            <p><?php echo $cur_teacher["lastname"] ?></p>
        <?php } ?>
    </div>

</body>

</html>