<div class="row">
<?php $args = array(
    'orderby' => 'date',
    'order'   => 'DESC',
);
$query = new WP_Query($args);?>
<div class="col-sm-8">  
<?php if ( $query->have_posts() ) : while ( $query->have_posts() ) : the_post(); ?>

 <article id="post-<?php the_ID(); ?>">

   <h2><a href="<?php the_permalink(); ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>

   <small><?php the_time('j \d\e F  \d\e Y'); ?> by <?php the_author_posts_link(); ?></small>

   <h2><?php  the_content(); ?></h2>

   <p class="postmetadata"><?php _e( 'Posted in' ); ?> <?php the_category( ', ' ); ?></p>

    </div> <!-- closes the first div box -->  <?php endwhile; ?>  <?php else : ?>  <?php endif; ?>

</article>

</div>