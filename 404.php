<?php
/*Template Name: Frontpage*/

get_header();?>

<div class="wrapper fullwidth">
    <section class="page404">
            <div class="page404-text-content">
                <?php
                if(pll_current_language() === 'pl') {
                    echo '
                    <h1 class="page404">404</h1>
                    <h3 class="page404">Strona zgubiła się we mgle.</h3>
                    <span class="page404"><a href="index.php">Wróć na stronę główną <i class="icon-arrow1-left"></i></a></span>
                    </a>';} 
                else {
                    echo '
                    <h1 class="page404">404</h1>
                    <h3 class="page404">The page got lost in the fog.</h3>
                    <span class="page404"><a href="index.php">Return to homepage <i class="icon-arrow1-left"></i></a></span>
                    </a>'; } 
                ?>
        </div>

            <div class="page404-image-content">
                <a href="index.php" class="page404-fullwidth"></a>
                <div class="page404-image-bg"></div>
            </div>
    </section>
</div>

<?php get_footer();?>