<head>
<link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/style.css">
</head>
<body>
    <div class="main-wrap">
        <div class="main">
        <?php get_header(); ?>
        <div class="front-info">
                <div class="context">
                    <div class="main-h1">
                        <h1>Sigma</h1>
                    </div>
                    <div class="main-p">
                        <p>Sigma is an innovative, easily customizable, multi-purpose theme, focused on empowering users to build astonishing WordPress websites.</p>
                    </div>
                    <div class="front-buttons" >
                        <div class="button-1">  
                            <a href="<?php the_permalink(60); ?>"><button class="button-18">Worth A Thousand Words</button></a>
                        </div>
                        <div class="btn2">
                            
                            <a href="<?php the_permalink(57); ?>"><button class="btn-element">Elements</button></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="blog-posts-side">
            <?php
                while(have_posts()){
                    the_post();
            ?>
            <div class="blog-post">
                <div class="post-image">
                    <a href="<?php the_permalink(); ?>"> <?php the_post_thumbnail(); ?></a>
                </div>
                <div class="date">
                        <p>
                            <a href="<?php echo get_permalink(87) . '?author_id=' . get_the_author_meta('ID'); ?>">
                                Theme <?php echo get_the_author(); ?>
                            </a>
                        </p>
                    <span class="span"> - </span>
                        <p>
                            <a href="<?php echo get_permalink(82) . '?date=' . get_the_time('Y-m-d'); ?>">
                                <?php echo get_the_date(); ?>
                            </a>
                        </p>
                    <span class="span"> - </span>
                        <p><a href=""><?php echo get_the_time(); ?></a></p>
                </div>
                <div class="post-heading">
                    <a href="<?php the_permalink(); ?>"> <h2><?php the_title(); ?></h2></a>
                </div>
                <p><?php the_excerpt() ?></p>
            </div>
            <?php } ?>
        </div>
    </div>
    <?php get_footer(); ?>
</body>
<?php wp_footer();?>
