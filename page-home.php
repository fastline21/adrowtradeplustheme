<?php
/*
 * Template Name: Home
*/
get_header();
?>
<div id="banner">
    <img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/assets/banner.jpg" />
</div>
<div id="products">
    <div class="container">
        <h3 class="title text-center">PRODUCTS</h3>
        <?php
        $productPost = new WP_Query(
            array(
                'cat' => 2,
                'posts_per_page' => 10
            )
        );
        if ($productPost->have_posts() ) :
            ?>
            <div class="row">
            <?php
            while ($productPost->have_posts()) : $productPost->the_post();             
                ?>
                <div class="col-md-3 col-sm-4 text-center item-post">
                    <?php
                        thumb_default();
                        echo '<h6 class="item-title">' . strtoupper(get_the_title()) . '</h6>';
                        echo '<h3 class="item-price">' . get_post_meta($post->ID, 'item_price', true) . '</h3>';
                    ?>
                    <a class="btn btn-primary item-button" href="<?php the_permalink(); ?>">VIEW ITEM</a>
                </div>
                <?php
            endwhile;
            wp_reset_postdata();
            ?>
            </div>
            <?php
            $productCount = $productPost->found_posts;
            if ($productCount > 8) :
                ?>
                <div class="text-center pt-5">
                    <button type="button" class="btn btn-primary item-button">MORE ITEMS</button>
                </div>
                <?php
            endif;
        else :
            echo '<p>No content found</p>';
        endif;
        ?>
    </div>
    <div class="download-catalog text-center">
        <div class="container">
            <h3 style="display: inline; margin: 0;">Get a free copy of our product catalog.</h3>
            <a class="btn btn-primary button" href="#">DOWNLOAD</a>
        </div>
    </div>
</div>
<div id="contact-us">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/assets/adrowtradeplus_logo.png" />
                <?php
                $contactUsArray = array(
                    array(
                        get_template_directory_uri() . "/assets/map.png",
                        "21st Floor Strata 100, Ortigas Business Park, Pasig City"
                    ),
                    array(
                        get_template_directory_uri() . "/assets/mail.png",
                        "inquire@adrowtradeplus.com"
                    ),
                    array(
                        get_template_directory_uri() . "/assets/phone.png",
                        "(02) 717-1771"
                    )
                );
                for ($i=0; $i<3; $i++) {
                    ?>
                    <div class="clearfix">
                        <img class="img-fluid logo" src="<?php echo $contactUsArray[$i][0]; ?>" />
                        <p class="content"><?php echo $contactUsArray[$i][1]; ?></p>
                    </div>
                    <?php
                }
                ?>
            </div>
            <div class="col-md-8">
                <div>
                    <form class="form-inline">
                        <label class="title">SEARCH BY CATAGORY</label>
                        <input class="form-control ml-auto w-50 search" type="search" />
                    </form>
                    <?php
                    $tagArray = array(
                        "APPARELS",
                        "HOUSEHOLD PRODUCTS",
                        "METALS & HARDWARE",
                        "BAGS",
                        "HEADGEARS",
                        "UMBRELLAS",
                        "SMALL LEATHER GOODS",
                        "TRAVEL & OUTDOOR ACCESSORIES",
                        "ELECTRONICS & TECHNOLOGY",
                        "TOWELS & TEXTILES",
                        "RECREATION",
                        "PRINTING & PACKAGIN",
                        "PERSONAL CARE PRODUCTS",
                        "OFFICE SUPPLIES"
                    );
                    $y = 5;
                    for ($i=0; $i<14; $i++) {
                        if ($i == 0) {
                            echo "<ul class='nav flex-column list-link'>";
                        }
                        if ($i == $y) {
                            echo "</ul>";
                            echo "<ul class='nav flex-column list-link'>";
                            $y *= 2;
                        }
                        echo "<li class='nav-item'><a class='nav-link link' href='" . $tagArray[$i] . "'>" . $tagArray[$i] . "</a></li>";
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
get_footer();
?>