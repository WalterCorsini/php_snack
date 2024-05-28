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

    <?php foreach ($db as $key => $cur_elem) { ?>
    <div class="<?= $key === 'teachers' ? 'grey' : 'green'?>">
        <div>
            <?php foreach($cur_elem as $elem) { ?>
            <p><?php echo $elem["name"] ?></p>
            <p><?php echo $elem["lastname"] ?></p>
            <?php } ?>
        </div>
    </div>
    <?php } ?>

</body>

</html>