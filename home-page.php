<?php
/*
Template Name: Home page
 */
?>
<?php get_header();?>
    <section class="container-fluid aboutbg text-center">
        <div class="container">
        <h2><?php the_field('titleforaboutme'); ?></h2><!--  custom field for the aboutme content-->
        <p class="particle"><?php the_field('subtitleforaboutme'); ?></p>
        <p class="about-text"><?php the_field('paragraphforaboutme'); ?></p>
</div> <!--container -->

        <div class="blocker"></div>

    </section>

    <section class="container-fluid articlesbg">
<div class="container">
    <h3 class="text-center"><?php the_field('titleforarticles'); ?></h3>
<div class="row">

<div class="col-md-4">
<img class="img-fluid" alt=“portait” src="<?php the_field('articleimage');?>">
<h4 class="article-title"><?php the_field('articletitle'); ?></h4>
<p class="date"><?php the_field('articledate'); ?></p>
<p class="article-p"><?php the_field('articleexcerpt'); ?> </p>
<a href="<?php the_field('readmore'); ?>" class="readmore">CONTINUE READING</a>

</div> <!--col 1-->

<div class="col-md-4">
<img class="img-fluid" alt=“portait” src="<?php the_field('articleimagetwo');?>">
    <h4 class="article-title"><?php the_field('titletwo'); ?></h4>
    <p class="date"><?php the_field('datetwo'); ?></p>
<p class="article-p"><?php the_field('excerpttwo'); ?> </p>
<a href="<?php the_field('readmoretwo'); ?>" class="readmore">CONTINUE READING</a>
          </div> <!--col2-->


          <div class="col-md-4">
          <img class="img-fluid" alt=“portait” src="<?php the_field('articleimagetres');?>">
            <h4 class="article-title"><?php the_field('titletres'); ?></h4>
            <p class="date"><?php the_field('datetres'); ?></p>
<p class="article-p"><?php the_field('articleexcerpt'); ?> </p>
<a href="<?php the_field('readmoretres'); ?>" class="readmore">CONTINUE READING</a>
                  </div> <!--col3-->

</div> <!-- row -->
</div> <!-- container 3-->

    </section>
    <?php get_footer();?> 