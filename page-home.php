<?php
// Template Name: Home
get_header();
?>
<div id="banner">
    <img class="img-fluid" src="wp-content/themes/adrowtradeplustheme/assets/banner.jpg" />
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
                for ($i=0; $i<12; $i++) {               
                ?>
                <div class="col-md-3 col-sm-4 text-center item-post">
                    <?php
                        thumb_default();
                        echo '<h6 class="item-title">' . strtoupper(get_the_title()) . '</h6>';
                        echo '<h3 class="item-price">' . get_post_meta($post->ID, 'item_price', true) . '</h3>';
                    ?>
                    <button type="button" class="btn btn-primary item-button">BUY ME</button>
                </div>
                <?php
                }
            endwhile;
            wp_reset_postdata();
            ?>
            </div>
            <?php
            $productCount = $productPost->found_posts;
            if (12 > 8) :
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
                <img class="img-fluid" src="wp-content/themes/adrowtradeplustheme/assets/adrowtradeplus_logo.png" />
                <?php
                $contactUsArray = array(
                    array(
                        "wp-content/themes/adrowtradeplustheme/assets/map.png",
                        "21st Floor Strata 100, Ortigas Business Park, Pasig City"
                    ),
                    array(
                        "wp-content/themes/adrowtradeplustheme/assets/mail.png",
                        "inquire@adrowtradeplus.com"
                    ),
                    array(
                        "wp-content/themes/adrowtradeplustheme/assets/phone.png",
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
                    ?>
                    <ul>
                    <?php
                    $y = 5;
                    for ($i=0; $i<14; $i++) {
                        
                        if ($i == $y) {
                            echo "yes";
                            $y *= 2;
                        }
                        ?>
                        <li><?php echo $tagArray[$i]; ?></li>
                        <?php
                    }
                    ?>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
get_footer();
?>