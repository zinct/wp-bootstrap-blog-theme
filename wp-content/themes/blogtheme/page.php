<?php get_header() ?>
  
  <main class="container mt-3">
    <div class="row g-5">
      <div class="col-md-8">

      <?php if(have_posts()) : ?>
        <?php while(have_posts()) : the_post() ?>
  
        <article class="blog-post">
          <h2 class="blog-post-title"><?php the_title() ?></h2>
          <p class="blog-post-meta"><?php the_date() ?> by <a href="<?= get_author_posts_url(get_the_author_meta('ID')) ?>"><?php the_author() ?></a></p>
          <hr>
          <?php if(has_post_thumbnail()) : ?>
            <div class="post-thumbnail">
              <?php the_post_thumbnail() ?>
            </div>
          <?php endif; ?> 
          <p>
            <?php the_content() ?>
          </p>
        </article>

        <?php endwhile; ?>
      
      <?php else: ?>
        <h2>Post Not Found.</h2>
      <?php endif; ?>
  
      </div>
  
      <div class="col-md-4">
        <div class="position-sticky" style="top: 2rem;">
          <div class="p-4 mb-3 bg-light rounded">
            <h4 class="fst-italic">About</h4>
            <p class="mb-0">Customize this section to tell your visitors a little bit about your publication, writers, content, or something else entirely. Totally up to you.</p>
          </div>
  
          <div class="p-4">
            <h4 class="fst-italic">Archives</h4>
            <ol class="list-unstyled mb-0">
              <li><a href="#">March 2021</a></li>
              <li><a href="#">February 2021</a></li>
              <li><a href="#">January 2021</a></li>
              <li><a href="#">December 2020</a></li>
              <li><a href="#">November 2020</a></li>
              <li><a href="#">October 2020</a></li>
              <li><a href="#">September 2020</a></li>
              <li><a href="#">August 2020</a></li>
              <li><a href="#">July 2020</a></li>
              <li><a href="#">June 2020</a></li>
              <li><a href="#">May 2020</a></li>
              <li><a href="#">April 2020</a></li>
            </ol>
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

    
