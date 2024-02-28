<?php require_once("assets/header.php"); ?>
<div class="section-container">
    <div class="content-container">
        <h2 class="title">MAKING AN APPOINTMENT</h2>
        <div class="section-container">
            <div class="form-container">
                <!-- <div class="form-container"> -->
                    <form onsubmit="submitForm(); reset(); return false;">
                        <h3>SUBMISSION FORM</h3>
                        <input type="text" id="name" placeholder="Your Name" required>
                        <input type="email" name="" id="email" placeholder="Email" required>
                        <input type="text" name="" id="phone" placeholder="Phone Number" required>
                        <input type="text" name="" id="service" placeholder="Service" required>
                        <input type="date" name="" id="date" placeholder="Date" required>
                        <textarea name="" id="message" rows="5" placeholder="Do you have any question?"></textarea>
                        <button type="submit">Send</button>
                    </form>
                <!-- </div> -->
            </div>
        </div>
        <h2 class="title">SERVICES</h2>
        <div class="section-container">
            <div class="info">
                <p>
                The Mercer County Career Center assists Mercer County residents on their career path and in
                their job search. The Career Center also assists area employers in hiring quality candidates for
                their current job openings. <br>
                Services we provide:
                    <p class="text-indent" style="margin-left: 25px; text-align: left">
                    ● Interview prep
                    <br> ● Resume & cover letter help
                    <br> ● Career guidance
                    <br> ● Weekly newsletter & jobs list
                    <br> ● Job description flyers
                    <br> ● Host of Mercer County Job Fair
                    </p>
                </p>
            </div>
        </div>
        <h2 class="title">LOCAL EMPLOYERS</h2>
        <div class="section-container">
            <div class="info">
                <p>
                The Career Center’s support of the Mercer County workforce also includes our local area
                employers. One of the ways in which we support our employers is through the creation of
                custom job description flyers. If your business has a job opening, we are happy to listen to your
                needs so that we can create a job flyer that will attract quality candidates for your position.
                </p>
            </div>
        </div>
    </div>
</div>
<?php require_once("assets/footer.php"); ?>