<?php require_once("assets/header.php"); ?>
<div class="section-container">
    <div class="content-container">
        <h2 class="title">COMMUNITIES</h2>
        <div class="section-container">
            <div class="hover-box">
                <div class="hover-img">
                    <img src="img/communities/eliza_church.png" alt="">
                </div>
                <div class="hover-text">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, 
                        sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
                        Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris 
                        nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor 
                        in reprehenderit in voluptate velit esse cillum dolore eu fugiat 
                        nulla pariatur. Excepteur sint occaecat cupidatat non proident, 
                        sunt in culpa qui officia deserunt mollit anim id est laborum.
                    </p>
                </div>
            </div>
        </div>
        <h2 class="title">START A BUSINESS</h2>
            <div class="section-container glide">
                <div class="glide__track" data-glide-el="track">
                    <ul class="glide__slides">
                        <li class="glide__slide">
                            <img class="slide-img" src="img/Start-A-Business/MCBT Start A Business Slide 1.jpg" alt="slide-1">    
                        </li>
                        <li class="glide__slide">
                            <img class="slide-img" src="img/Start-A-Business/MCBT Start A Business Slide 2.jpg" alt="slide-2">
                        </li>
                        <li class="glide__slide">
                            <img class="slide-img" src="img/Start-A-Business/MCBT Start A Business Slide 3.jpg" alt="slide-3">
                        </li>
                        <li class="glide__slide">
                            <img class="slide-img" src="img/Start-A-Business/MCBT Start A Business Slide 4.jpg" alt="slide-3">
                        </li>
                        <li class="glide__slide">
                            <img class="slide-img" src="img/Start-A-Business/MCBT Start A Business Slide 5.jpg" alt="slide-3">
                        </li>
                    </ul>
                </div>

                <div class="glide__arrows" data-glide-el="controls">
                    <button class="glide__arrow glide__arrow--left" data-glide-dir="<"><i class="fa-solid fa-angle-left"></i></button>
                    <button class="glide__arrow glide__arrow--right" data-glide-dir=">"><i class="fa-solid fa-angle-right"></i></button>
                </div>
            </div>
            
        <h2 class="title">SURVEY TRENDS</h2>
        <div class="section-container glide">
            <div class="glide__track" data-glide-el="track">
                <ul class="glide__slides">
                    <li class="glide__slide">
                        <img class="slide-img" src="img/Survey-Trends/Mercer County Business Survey Trends 1.png" alt="slide-1">    
                    </li>
                    <li class="glide__slide">
                        <img class="slide-img" src="img/Survey-Trends/Mercer County Business Survey Trends 2.png" alt="slide-2">
                    </li>
                    <li class="glide__slide">
                        <img class="slide-img" src="img/Survey-Trends/Mercer County Business Survey Trends 3.png" alt="slide-3">
                    </li>
                    <li class="glide__slide">
                        <img class="slide-img" src="img/Survey-Trends/Mercer County Business Survey Trends 4.png" alt="slide-3">
                    </li>
                    <li class="glide__slide">
                        <img class="slide-img" src="img/Survey-Trends/Mercer County Business Survey Trends 5.png" alt="slide-3">
                    </li>
                </ul>
            </div>

            <div class="glide__arrows" data-glide-el="controls">
                <button class="glide__arrow glide__arrow--left" data-glide-dir="<"><i class="fa-solid fa-angle-left"></i></button>
                <button class="glide__arrow glide__arrow--right" data-glide-dir=">"><i class="fa-solid fa-angle-right"></i></button>
            </div>
        </div>
    </div>
</div>

<?php require_once("assets/footer.php"); ?>
<script>
    const config = {
        type: 'carousel',
        perView: 1
    };
    new Glide('.glide', config).mount();
</script>