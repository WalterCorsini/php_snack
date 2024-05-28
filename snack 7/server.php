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

    <?php foreach ($db as $key => $cur_teacher) { ?>
    <div class="<?= $key === 'teachers' ? 'grey' : 'green'?>">
        <div>
            <?php foreach($cur_teacher as $teacher) { ?>
            <p><?php echo $teacher["name"] ?></p>
            <p><?php echo $teacher["lastname"] ?></p>
            <?php } ?>
        </div>
    </div>
    <?php } ?>

</body>

</html>