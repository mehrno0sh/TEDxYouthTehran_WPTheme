<?php get_header(); ?>

    <!-- Intro -->
    <section id="intro" class="main style1 dark fullscreen">
        <div class="content">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2 col-sm-12"><img id="intro-image"
                                                                         class="hvr-wobble-horizontal img-responsive"
                                                                         alt="intro"
                                                                         src="<?php bloginfo('template_directory'); ?>/images/intro-p.svg">
                    </div>
                </div>
                <div class="row">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eum, sunt incidunt, in vero minus ipsa
                        blanditiis dolor voluptate quisquam natus.</p>
                </div>
                <div class="row">
                    <footer><a href="#about" class="button style2 down">More</a></footer>
                </div>
            </div>
        </div>
    </section>
    <!-- about -->
    <section id="about" class="main style2 left dark fullscreen">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="content box style2">
                        <header>
                            <h2>About TEDxYouth @Tehran</h2>
                        </header>
                        <p>TEDxYouth@Tehran is part of the TEDxYouth initiative by TED. On and around the time of
                            Universal Children’s Day, several cities and communities host a TEDxYouth event. While each
                            event is different in format, size and theme, they have a shared vision: inspiring
                            creativity, igniting innovation, and empowering the youth. TEDxYouth@Tehran is based on a
                            central premise that every young person is the captain of their destiny, the master of their
                            life. They need to take responsibility for their life, be independent thinkers and explore
                            their imagination. They need to feel empowered and bold to do game-changing innovations,
                            technologies and businesses. We design our event theme and invite speakers to give the youth
                            a sense of hope, examples of role models, ideas to innovate and create, and to reach their
                            full potential</p>
                        <a id="read-more" href="about.html" target="_blank">Read More...</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Nominate -->
    <section id="getInvolved">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2>Get Involved</h2>
                    <p>Blandit varius ut praesent nascetur eu penatibus nisi risus faucibus nunc.</p>
                </div>
            </div>
            <div class="row nom-inate">
                <div class="col-md-6">
                    <a class="hvr-grow" target="_blank" href="nominate.html">
                        <img src="<?php bloginfo('template_directory'); ?>/images/speech.svg" alt="nominate"/>
                        <h3>Nominate</h3>
                    </a>
                    <p>Nomination applications are now closed.</p>
                </div>
                <div class="col-md-6">
                    <a class="hvr-grow" target="_blank" href="volunteer.html">
                        <img src="<?php bloginfo('template_directory'); ?>/images/hand.svg" alt="volunteer"/>
                        <h3>Volunteer</h3>
                    </a>
                    <p>Nomination applications are now closed.</p>
                </div>
            </div>
        </div>
    </section>
    <!-- talks -->
    <section id="talks" class="main style3 primary">
        <?php
        $events = array(
            'post_type' => 'events',
            'order' => 'asc'
        );

        $eventsQueryObject = new WP_Query($events);

        ?>
        <?php while ($eventsQueryObject->have_posts()) : $eventsQueryObject->the_post(); ?>

            <?php $year = get_field('year'); ?>
            <div class="content">
                <header>
                    <h2><?php the_title() ?></h2>
                    <?php the_excerpt() ?>
                </header>
                <!-- Gallery  -->
                <div class="gallery">

                    <?php
                    $speakers = array(
                        'post_type' => 'talks',
                        'meta_query' => array(
                            array(
                                'key' => 'event',
                                'value' => $year,
                            )
                        ),
                        'order' => 'asc'
                    );

                    $queryObject = new WP_Query($speakers);
                    $index = 1;
                    ?>

                    <?php while ($queryObject->have_posts()) : $queryObject->the_post(); ?>
                        <article class="<?php if ($index++ % 2 == 1) echo "from-left"; else echo "from-right"; ?>">
                            <a target="_blank"
                               href="<?php the_field('youtube'); ?>"
                               class="image fit">
                                <img src="<?php the_field('cover'); ?>"
                                     title="<?php the_title(); ?>" alt="<?php the_field('name'); ?>"/>
                                <div class="col-md-6 col-sm-5 col-xs-5">
                                    <h3><?php the_title(); ?></h3>
                                </div>
                                <div class="col-md-6 col-sm-5 col-xs-5">
                                    <a class="aparat" href="<?php the_field('aparat'); ?>" target="_blank"><img
                                            src="<?php bloginfo('template_directory'); ?>/images/aparat.png"></a>
                                </div>
                            </a>
                        </article>
                    <?php endwhile; ?>
                </div>
            </div>
        <?php endwhile; ?>

    </section>
    <!-- Contact -->
    <section id="sketch-sec">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <header>
                        <h2 align="center">Write What You Want!</h2>
                        <p> Lorem ipsum dolor sit amet et sapien sed elementum egestas dolore condimentum. Fusce blandit
                            ultrices sapien, in accumsan orci rhoncus eu. Sed sodales venenatis arcu, id varius justo
                            euismod in. Curabitur egestas consectetur magna vitae. </p>
                    </header>
                </div>
                <div class="col-md-12">
                    <textarea id="textarea" placeholder="Write Something!" maxlength="100"></textarea>
                </div>
                <div class="col-md-12" id="sketch-toolbar">
                    <div class="tools"><a href="#colors_sketch" data-download="png" style="float: right; width: 120px;">Download</a>
                        <a href="#colors_sketch" data-tool="eraser">Eraser</a></div>
                </div>
                <div class="col-md-12">
                    <canvas id="colors_sketch" height="500" style="border: 1px solid #ccc;"></canvas>
                </div>
            </div>
        </div>
    </section>

<?php get_footer(); ?>