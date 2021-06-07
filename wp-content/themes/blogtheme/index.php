<?php get_header() ?>
  
  <main class="container mt-3">
  
    <div class="row g-5">
      <div class="col-md-8">

      <?php if(have_posts()) : ?>
        <?php while(have_posts()) : the_post() ?>
  
        <article class="blog-post">
          <h2 class="blog-post-title"><a href="<?php the_permalink() ?>"><?php the_title() ?></a></h2>
          <p class="blog-post-meta"><?php the_date() ?> by <a href="<?= get_author_posts_url(get_the_author_meta('ID')) ?>"><?php the_author() ?></a></p>
          <?php if(has_post_thumbnail()) : ?>
            <div class="post-thumbnail">
              <?php the_post_thumbnail() ?>
            </div>
          <?php endif; ?> 
          <p>
            <?php the_excerpt() ?>
          </p>
          <a href="<?php the_permalink() ?>" class="btn btn-primary btn-sm">Read More</a>
        </article>

        <hr>

        <?php endwhile; ?>
      
      <?php else: ?>
        <h2>Post Not Found.</h2>
      <?php endif; ?>
  
      </div>
  
      <div class="col-md-4">
        <div class="position-sticky" style="top: 2rem;">
  
          <div class="p-4">
            <?php if(is_active_sidebar('blog-sidebar')) : ?>
              <?php dynamic_sidebar('blog-sidebar') ?>
            <?php endif; ?>
          </div>
  
          <div class="p-4">
            <h4 class="fst-italic">Elsewhere</h4>
            <ol class="list-unstyled">
              <li><a href="#">GitHub</a></li>
              <li><a href="#">Twitter</a></li>
              <li><a href="#">Facebook</a></li>
            </ol>
          </div>
        </div>
      </div>
    </div>
  
  </main>

<?php get_footer() ?>

    
