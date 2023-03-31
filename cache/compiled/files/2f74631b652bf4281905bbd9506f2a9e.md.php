<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledMarkdownFile',
    'filename' => '/home/artsectsindustries/sntrpc.github.io/sntrpc.io/user/pages/01.home/default.md',
    'modified' => 1680280001,
    'size' => 234,
    'data' => [
        'header' => [
            'title' => 'Home',
            'body_classes' => 'title-center title-h1h2',
            'content' => [
                'items' => '@self.children',
                'order' => [
                    'by' => 'date',
                    'dir' => 'desc'
                ]
            ]
        ],
        'frontmatter' => 'title: Home
body_classes: \'title-center title-h1h2\'
content:
    items: \'@self.children\'
    order:
        by: date
        dir: desc',
        'markdown' => '![](https://sntrpc.com/son/public/uploads/original/5e/18/34e6512b72a9890ea309f2566f8f.jpg)'
    ]
];
