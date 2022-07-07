<?php
/**
 * Template Name: Home page
 * Template Post Type: post, page
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since Twenty Twenty 1.0
 */

get_header();
?>

<main id="site-content">

    <div>
    <!--  realizzazione di un carosello di immagini con vuejs e scss, utilizzando i props e le funzione per lo scorrimento delle immagini -->
        <div class="carousel-inner text-center">
            <div  class="carousel-item active">
                <img class="d-block w-100" src="https://picsum.photos/seed/dolet/1519/512" />
                <div class="container">
                    <div class="carousel-caption text-center">
                        <h6 class="d-none d-md-block">Category</h6>
                        <h1 class="d-none d-md-block">"Lorem ipsum dolor sit amet consectetur adipisicing elit.</h1>
                        <p class="d-none d-md-block">Lorem ipsum dolor sit amet consectetur adipisicing elit. Facere laboriosam illum adipisci? Minima laudantium velit repellat quia, iure voluptatem nemo. Quod debitis eaque beatae repellendus veritatis placeat praesentium voluptate consequuntur!"</p>
                        <button type="button" class="btn rounded-pill">Read more</button>
                    </div>
                </div>
            </div>
            <span class="carousel-control-prev" role="button">
                <i class="fas fa-angle-left"></i>
                <span class="sr-only">Previous</span>
            </span>
            <span class="carousel-control-next" role="button" >
                <i class="fas fa-angle-right"></i>
                <span class="sr-only">Next</span>
            </span>
        </div>
    </div>
    
    <!-- sezione categorie con descrizione e immagini realizziate anche in maniera responsive -->
<section id="category">
    <div class="container mt-5">
        <div class="row">
            <div class="col-12 col-md-6  col-lg-6" style="font-size:0.8rem">
                <span class="fw-bold">Category</span>
                <h1 style="color:#218491" >Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellat dicta officiis quo quae. Obcaecati soluta maxime quaerat </h1>
                <p id="description" style="color:#6F6F6F" >Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellat dicta officiis quo quae. Obcaecati soluta maxime quaerat iste officia suscipit sunt! Accusantium error id nam sunt! Laborum nemo maxime incidunt.</p>
                <button class="btn rounded-pill">Read More</button>
            </div>
            <div class="col-12 col-lg-6 mt-3">
                <img class="img-fluid" src="https://previews.123rf.com/images/tajborg/tajborg1502/tajborg150200022/36532454-gi%C3%B9-dalla-montagna-nella-nebbia.jpg" alt="">
            </div>
        </div>
    </div>
</section>
    <section id="cardWrapper">
    <!-- sezione delle card, anch'essa realizzata anche in maniera responsive con l'hover-->
    <div class="container mt-5">
        <div class="row">
            <div class="col-12">
                <h3 id="title">Latest from the blog</h3>
                <p style="color:#6F6F6F">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Est, pariatur animi illo architecto laudantium voluptates assumenda tempore. Velit nulla quidem voluptatem, sit optio temporibus ipsum sapiente iusto magni eum rem.</p>
            </div>
        </div>
        <div class="row">
                    <?php 
            // the query
                $the_query = new WP_Query( array(
                    'category_name' => 'news',
                    'posts_per_page' => 3,
                )); 
                ?>

                <?php if ( $the_query->have_posts() ) : ?>
                <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
                <div class="col-12 col-md-6 col-lg-4 mt-3">
                    <div class="card " style="width: 18rem;">
                        <img src="<?php the_post_thumbnail_url( 'medium' ); ?>" alt="...">
                        <div class="card-body">
                            <h5 class="card-title"> <span id="title"><?php the_title(); ?></span>  / <span id="date" style="color: #999999"><?php the_date(); ?></span> </h5>
                            <p class="card-text"><?php the_excerpt(); ?></p>
                            <div class="wrapperRow d-flex">
                                <div class="riga1"></div>
                                    <span>Read more</span>
                                <div class="riga"></div>
                            </div>
                            
                        </div>
                    </div>
                </div>
                    
                    

                <?php endwhile; ?>
                <?php wp_reset_postdata(); ?>

                <?php endif; ?>
        </div>
    </div>
</section>

<section id="focus">
    <!--  ultima sezione del main, che vado a rappresentare una semplice immagine accompagnata con una descrizione e un bottone che in hover cambierà colore -->
    <div class="container-fluid">
        <div class="row">
            <div class="col-12 col-lg-6 right"></div>
            <div class="col-12 col-lg-6 left">
                <span>On focus</span>
                <h2>Lorem ipsum dolor sit amet,consetetur</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellat dicta officiis quo quae. Obcaecati soluta maxime quaerat iste officia suscipit sunt! Accusantium error id nam sunt! Laborum nemo maxime incidunt.</p>
                <button class="btn btn-dark rounded-pill">Read More</button>
            </div>
        </div>
    </div>
</section>


    </main><!-- #site-content -->


<?php get_footer(); ?>