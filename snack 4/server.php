<?php

$posts = [

    '10/01/2019' => [
        [
            'title' => 'Post 1',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 1'
        ],
        [
            'title' => 'Post 2',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 2'
        ],
    ],
    '10/02/2019' => [
        [
            'title' => 'Post 3',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 3'
        ]
    ],
    '15/05/2019' => [
        [
            'title' => 'Post 4',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 4'
        ],
        [
            'title' => 'Post 5',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 5'
        ],
        [
            'title' => 'Post 6',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 6'
        ]
    ],
];
?>


<ul>
    <?php foreach($posts as $key => $cur_data){ ?>
    <li>
        <?php echo $key ?>
        <ul>
            <?php foreach($cur_data as $cur_post){ ?>
            <li>
                <?php echo $cur_post["title"] ?>
            </li>
            <li>
                <?php echo $cur_post["author"] ?>
            </li>
            <li>
                <?php echo $cur_post["text"] ?>
            </li>
            <?php } ?>
        </ul>
    </li>
    <?php } ?>
</ul>