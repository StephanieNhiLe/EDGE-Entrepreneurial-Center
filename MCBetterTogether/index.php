<?php require_once("assets/header.php"); ?>

<!-- Add Header here -->
    <main>
        <div class="header-overlay">
            <img src="img/intro-bg.png" alt="intro-bg">
            <div class="info-overlay">
                <h1 class="slogan">Connect. Promote. Educate.</h1>
                <button>Learn More</button> 
            </div>
        </div>
        <hr class="solid">
        <div class="about-content">
            <div class="intro-container">
                <h2 class="title">ABOUT US</h2>
                <p class="paragraph">
                    Mercer County Better Together (MCBT) is a 501c3 nonprofit community and economic development organization committed to improving the strength, sustainability and vibrancy of Mercer County, its communities, businesses and organizations through the alignment of resources and priorities.
                </p>
                <button>Learn More</button>
            </div>
        </div>
        <div class="info-container">
            <div class="info-detail">
                <div class="info-card">
                    <img src="img/img-box-1.jpg" alt="first-img">
                    <div class="info">
                        <h1>History of <br> Mercer County <br> Better Together</h1>
                    </div>
                </div>
                
                <div class="info-card">
                    <img src="img/img-box-2.jpg" alt="second-img">
                    <div class="info">
                        <h1>More about us</h1>
                    </div>
                </div>
                
                <div class="info-card">
                    <img src="img/img-box-3.png" alt="third-img">
                    <div class="info">
                        <h1>MCRT <br> Strategic Plan</h1>
                    </div>
                </div>
                
            </div>
        </div>
        <div class="project-container ">
            <h2 class="title">PROJECTS</h2>
            <div class="glide">
                <div class="glide__track" data-glide-el="track">
                    <ul class="glide__slides">
                        <li class="glide__slide">
                            <div class="text-overlay-wrapper">
                                <h1>Career <br> Center</h1>
                            </div>
                            <img src="img/proj-sample-1.jpg" alt="slide-1">
                            
                        </li>
                        <li class="glide__slide">
                            <div class="text-overlay-wrapper">
                                <h1>Parks + <br> Rec</h1>
                            </div>
                            <img src="img/proj-sample-2.jpg" alt="slide-1">
                        </li>
                        <li class="glide__slide">
                            <div class="text-overlay-wrapper">
                                <h1>Business <br> Support</h1>
                            </div>
                            <img src="img/proj-sample-3.jpg" alt="slide-1">
                        </li>
                    </ul>
                </div>

                <div class="glide__arrows" data-glide-el="controls">
                    <button class="glide__arrow glide__arrow--left" data-glide-dir="<"><i class="fa-solid fa-angle-left"></i></button>
                    <button class="glide__arrow glide__arrow--right" data-glide-dir=">"><i class="fa-solid fa-angle-right"></i></button>
                </div>
            </div>

            

                    <!-- <li class="glide__slide">
                        <img src="img/proj-sample-1.jpg" alt="slide-1">
                        <div class="text-overlay-wrapper">
                            <h1Business <br> Support</h1>
                        </div>
                    </li> -->
                    
                
                
                
            
             <button>View All Projects</button>
        </div>
    </main>
    <!-- Add Footer here -->
    <?php require_once("assets/footer.php"); ?>
    <script>
        const config = {
            type: 'carousel',
            perView: 3,
            breakpoints: { 
                1104: {
                    perView: 2
                },
                906: {
                    perView: 1
                }
            }
        };
        new Glide('.glide', config).mount();
    </script>
    