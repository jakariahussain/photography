<?php include "include/header.php"; ?>
<main>
    <!--******************************** Start Banner ********************************-->
    <section class="banner_area">
        <div class="container-fluid">
            <div class="row  wow fadeIn" data-wow-duration="2s" data-wow-delay=".1s">
                <div class="col-lg-12">
                    <div class="banner_wrap owl-carousel owl-theme">
                        <div class="single_item_banner" style="background:url(images/bg/01.jpg) no-repeat;">
                            <h2>Portfolio</h2>
                            <a href="#ab1" class="scroll_down"><span></span></a>
                        </div>
                        <div class="single_item_banner" style="background:url(images/bg/02.jpg) no-repeat;">
                            <h2>Portfolio One</h2>
                            <a href="#ab1" class="scroll_down"><span></span></a>
                        </div>
                        <div class="single_item_banner" style="background:url(images/bg/03.jpg) no-repeat;">
                            <h2>Take A Feel</h2>
                            <a href="#ab1" class="scroll_down"><span></span></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="banner_social">
                        <ul>
                            <li><a href=""><i class="fab fa-facebook"></i></a></li>
                            <li><a href=""><i class="fab fa-instagram"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
     <!--================================ Start portfolio_area ================================-->
    <section class="portfolio_area" id="ab1">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="filters">
                        <ul>
                            <li class="is-checked" data-filter="*">All</li>                                 
                            <li data-filter=".Family">Family</li>
                            <li data-filter=".Engagement">Couple & Engagement</li>
                            <li data-filter=".Corporate">Corporate</li>
                            <li data-filter=".Aerial">Aerial</li>
                        </ul>
                    </div>
                </div>
                <!-----end filters----->
                <div class="col-md-12">
                    <div class="rows grid">
                        <div class="col-sm-6 col-md-4 col-lg-4 col-xl-4 mb-30 grid-item Family" data-category="ads">
                           <div class="single_portfolio_items overlay_section_bg" data-background="images/gallery/05.png">
                               <a href="images/gallery/05.png" class="gallery-item">View</a>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-4 col-lg-4 col-xl-4 mb-30 grid-item Aerial" data-category="books">
                           <div class="single_portfolio_items overlay_section_bg" data-background="images/gallery/10.png">
                                <a href="images/gallery/10.png" class="gallery-item">View</a>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-4 col-lg-4 col-xl-4 mb-30 grid-item Engagement" data-category="logos">
                           <div class="single_portfolio_items overlay_section_bg" data-background="images/gallery/07.png">
                                <a href="images/gallery/07.png" class="gallery-item">View</a>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-6 col-lg-4 col-xl-4 mb-30 grid-item Corporate" data-category="websites">
                           <div class="single_portfolio_items overlay_section_bg" data-background="images/gallery/08.png">
                                <a href="images/gallery/08.png" class="gallery-item">View</a>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-6 col-lg-8 col-xl-8 mb-30 grid-item Family" data-category="ads">
                           <div class="single_portfolio_items overlay_section_bg" data-background="images/gallery/06.png">
                                <a href="images/gallery/06.png" class="gallery-item">View</a>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-6 col-lg-8 col-xl-8 mb-30 grid-item Aerial" data-category="books">
                           <div class="single_portfolio_items overlay_section_bg" id="spt_height" data-background="images/gallery/11.png">
                                <a href="images/gallery/11.png" class="gallery-item">View</a>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-6 col-lg-4 col-xl-4 mb-30 grid-item Corporate" data-category="books">
                           <div class="single_portfolio_items overlay_section_bg" id="spt_height1" data-background="images/gallery/09.png">
                                <a href="images/gallery/09.png" class="gallery-item">View</a>
                            </div>
                           <div class="single_portfolio_items overlay_section_bg" id="spt_height2" data-background="images/gallery/09.png">
                                <a href="images/gallery/09.png" class="gallery-item">View</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="portfolio_shape_item">
        	<figure>
        		<img src="images/shape/03.png" alt="" class="img-fluid">
        	</figure>
        </div>
        <div class="portfolio_shape_item_f4">
        	<figure>
        		<img src="images/shape/07.png" alt="" class="img-fluid">
        	</figure>
        </div>
        <div class="portfolio_shape_item_f5">
        	<figure>
        		<img src="images/shape/08.png" alt="" class="img-fluid">
        	</figure>
        </div>
        <div class="portfolio_shape_item_f6">
        	<figure>
        		<img src="images/shape/02.png" alt="" class="img-fluid">
        	</figure>
        </div>
    </section>

 
</main>
   <?php include "include/footer.php"; ?>
