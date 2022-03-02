<?php 

$title = 'CMS II';

$snow = [
    [
        'title' => 'Lorem ipsum 1',
        'auther' => 'Mark',
        'date' => 'Jan 1,2021',
        'content' => 'Lorem ipsum dollor',
        'cat' => 'Canada',
    ], 
    [
        'title' => 'Lorem ipsum 2',
        'auther' => 'Marry',
        'date' => 'March 1,2021',
        'content' => 'Lorem ipsum dollor',
        'cat' => 'world',
    ],
    [
        'title' => 'Lorem ipsum 3',
        'auther' => 'Mathew',
        'date' => 'August 1,2021',
        'content' => 'Lorem ipsum dollor...',
        'cat' => 'Canada',
    ],
    [
        'title' => 'Lorem ipsum 4',
        'auther' => 'Mathew',
        'date' => 'February 1,2021',
        'content' => 'Lorem ipsum dollor...',
        'cat' => 'world',
    ],    
    [
        'title' => 'Lorem ipsum 5',
        'auther' => 'Mathew',
        'date' => 'February 1,2021',
        'content' => 'Lorem ipsum dollor...',
        'cat' => 'world',
    ]
        ]; 

function the_post( $i ) {
    
    global $snow; 

?>
        <article class="blog-post">
            <h2 class="blog-post-title"><a href="post.php?id=<?php print $i; ?>"><?php print $snow[$i]['title'] ?></a></h2>
            <p class="blog-post-meta"><?php print $snow[$i]['date'] ?> by <?php print $snow[$i]['auther'] ?></a></p>
            <?php print $snow[$i]['content'] ?>
          </article>

    <?php
}