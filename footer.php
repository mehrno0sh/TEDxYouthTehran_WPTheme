<!-- Footer -->
<footer id="footer">
    <div class="container">
        <div class="row aboutTed">
            <div class="col-md-6">
                <h3>About TED</h3>
                <p> TED is a nonprofit organization devoted to Ideas Worth Spreading. Started as a conference in
                    California 1984, TED has grown to support those world-changing ideas with many initiatives.At a TED
                    conference, the world's leading thinkers and doers are asked to give the talk of their lives in 18
                    minutes or less. TED speakers have included Roger Ebert, Sheryl Sandberg, Bill Gates, Elizabeth
                    Gilbert, Benoit Mandelbrot, Philippe Starck, Ngozi Okonjo-Iweala, Brian Greene, Isabel Allende and
                    former UK Prime Minister Gordon Brown. </p>
            </div>
            <div class="col-md-6">
                <h3>What's TEDx?</h3>
                <p> In the spirit of ideas worth spreading, TED has created a program called TEDx. TEDx is a program of
                    local, self-organized events that bring people together to share a TED-like experience. Our event is
                    called TEDxTehran, where x = independently organized TED event. At our TEDxTehran event, TEDTalks
                    video and live speakers will combine to spark deep discussion and connection in a small group. The
                    TED Conference provides general guidance for the TEDx program, but individual TEDx events, including
                    ours, are self-organized. </p>
            </div>
        </div>
        <div class="row copyright">
            <!-- Menu -->
            <div class="col-md-9 col-sm-12 col-xs-12">
                <p>
                    This independent TEDx event is operated under license from TED. &copy; TEDxYouth @Tehran 2017. All
                    Rights Reserved.
                </p>
            </div>
            <div class="col-md-3 col-sm-12 col-xs-12">
                <ul class="actions">
                    <?php
                    $args = array(
                        'post_type' => 'social-links',
                        'orderby' => 'menu_order',
                        'order' => 'ASC'
                    );
                    $i = 1;
                    $custom_query = new WP_Query($args);
                    while ($custom_query->have_posts()) : $custom_query->the_post(); ?>
                        
                        <li>
                            <a href="<?php the_field('url'); ?>" class="icon">
                                <span class="label"><?php the_title(); ?></span>
                            </a>
                        </li>

                        <?php $i++; ?>
                    <?php endwhile; ?>

                    <script type="application/javascript">
                        $(document).ready(function () {
                            $(".actions li a.icon").each(function () {
                                var href = $(this).attr('href');
                                if (href.includes('linkedin')) {
                                    $(this).addClass('fa-linkedin');
                                }
                                else if (href.includes('instagram')) {
                                    $(this).addClass('fa-instagram');
                                }
                                else if (href.includes('twitter')) {
                                    $(this).addClass('fa-twitter');
                                }
                                else if (href.includes('flickr')) {
                                    $(this).addClass('fa-flickr');
                                }
                                else if (href.includes('facebook')) {
                                    $(this).addClass('fa-facebook');
                                }
                                else {
                                    $(this).addClass('fa-linkedin');
                                }
                            });
                        });
                    </script>
                </ul>
            </div>
        </div>
    </div>
</footer>

<!--[if lte IE 8]>
<script src="<?php bloginfo('template_directory'); ?>/js/ie/respond.min.js"></script><![endif]-->
<script src="<?php bloginfo('template_directory'); ?>/js/menures.js"></script>

<?php if (is_home()) { ?>
    <script src="<?php bloginfo('template_directory'); ?>/js/jquery.poptrox.min.js"></script>
    <script src="<?php bloginfo('template_directory'); ?>/js/jquery.scrollex.min.js"></script>
    <script src="<?php bloginfo('template_directory'); ?>/js/skel.min.js"></script>
    <script src="<?php bloginfo('template_directory'); ?>/js/util.js"></script>
    <script src="<?php bloginfo('template_directory'); ?>/js/sketch.js"></script>
    <script src="<?php bloginfo('template_directory'); ?>/js/main.js"></script>
    <script type="text/javascript">
        $(function () {
            $.each(['#f00', '#ff0', '#0f0', '#0ff', '#00f', '#f0f', '#000', '#fff'], function () {
                $('#sketch-toolbar .tools').append("<a href='#colors_sketch' data-tool='marker' data-color='" + this + "' style='background: " + this + ";'></a> ");
            });
            $.each([3, 5, 10, 15], function () {
                $('#sketch-toolbar .tools').append("<a href='#colors_sketch' data-tool='marker' data-size='" + this + "' style='background: #ccc;'>" + this + "</a> ");
            });
            $('#colors_sketch').sketch();
        });
    </script>
<?php } ?>

</body>

</html>
