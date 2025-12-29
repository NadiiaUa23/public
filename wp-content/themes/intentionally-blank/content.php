<?php
if ( have_posts() ) {
    while ( have_posts() ) {
        the_post();
        ?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <?php 
    the_title('<h1 class="entry-title">', '</h1>');
    the_content();
//tags
if ( has_tag() ) {      
    echo 'p class="tags">'
    the_tags();
    echo '</p>';
}
//categories
if ( has_category() ) {
    echo '<p class="categories">';      
    the_category();
    echo '</p>';
}
//excerpt
if ( has_excerpt() ) {
    echo '<p class="excerpt">';
    the_excerpt();
    echo '</p>';
}   
    ?>
</article>
<?php
    }
}

    ?>