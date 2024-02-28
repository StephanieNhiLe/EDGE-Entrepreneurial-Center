<?php require_once("assets/header.php"); ?>
<div class="section-container">
    <div class="content-container">
        <h2 class="title">BUSINESS SUPPORT</h2>
        <div class="section-container grid">
            <div class="info">
                <p>A main focus at MCBT is supporting local businesses. Whether in the form of finding and
                applying for grants, hosting their job openings in the Career Center’s weekly newsletter, or
                providing resources and information for those considering opening a business in Mercer County,
                we are here to help you meet your business goals.<br>
                <br>Visit our resource toolkit here, consult our guide on how to start a business in Mercer County, or
                submit a request for a one on one meeting with our Executive Director.
                </p>
                <button href="https://drive.google.com/file/d/1hFuLH1HQ0yY5SVm0EgeVdhExLJ-kBnDB/view">Resource Toolkit</button>
            </div>
            <div class="form-container">
                <!-- <div class="form-container"> -->
                    <form onsubmit="submitForm(); reset(); return false;">
                        <h3>GET CONSULTING</h3>
                        <input type="text" id="name" placeholder="Your Name" required>
                        <input type="email" name="" id="email" placeholder="Email" required>
                        <input type="text" name="" id="phone" placeholder="Phone Number" required>
                        <textarea name="" id="message" rows="5" placeholder="How can we help you?"></textarea>
                        <button type="submit">Send</button>
                    </form>
                <!-- </div> -->
            </div>
            <script src="https://smtpjs.com/v3/smtp.js"></script>
            <script>
                function submitForm() {
                    Email.send({
                        Host : "smtp.gmail.com",
                        Username : "username",
                        Password : "password",
                        To : 'kyle@mcbettertogether.org',
                        From : document.getElementById("email").value,
                        Subject : "New Contact Form Enquiry",
                        Body : "Name: " +document.getElementById("name").value
                        + "<br> Email: " + document.getElementById("email").value
                        + "<br> Phone Number: " +document.getElementById("phone").value
                        + "<br> Message: " + document.getElementById("message").value
                    }).then(
                    message => alert("Message Sent Successfully")
                    );
                }
            </script>
        </div>
        <h2 class="title">DOLLY PARTON'S IMAGINATION LIBRARY</h2>
        <div class="section-container flex-column">
            <div class="info grid-third-one">
                <div class="info-box">
                    <h3>Parents & Caregivers:</h3>
                    <p>
                    Dolly Parton believes that if you can read, you can do anything, dream anything, and be anything.  Through Dolly Parton’s Imagination Library, she wants to ensure all children have access to books in their home, regardless of their family’s income.
                    </p>    
                </div>
                <img src="img/MCBT DPIL Affiliate Logo Template (2).png" alt="">
            </div>
            <div class="info grid-one-third">
                <img src="img/DPIL speech bubble.png" alt="">
                <p>
                Each high-quality book in the Imagination Library is specially-selected, age-appropriate, and mailed to registered children at home, each month from birth to age 5.
                <br>
                Registration is free for all Mercer County children.  Simply use the registration form here to sign up.  
                </p>
            </div>
            <div class="form-container">
                <!-- <div class="form-container"> -->
                    <form onsubmit="submitForm(); reset(); return false;">
                        <h3>REGISTER FORM</h3>
                        <input type="text" id="name" placeholder="Your Name" required>
                        <input type="email" name="" id="email" placeholder="Email" required>
                        <input type="text" name="" id="phone" placeholder="Phone Number" required>
                        <textarea name="" id="message" rows="5" placeholder="Do you have any question?"></textarea>
                        <button type="submit">Send</button>
                    </form>
                <!-- </div> -->
            </div>
            <div class="info grid-third-one">
                <div class="info-box">
                    <h3>Donors:</h3>
                    <p>
                    Mercer County Better Together is proud to facilitate Dolly Parton’s Imagination Library for children ages 0-5 in Mercer County.  However, we can not sustain the program without your financial support.  Any amount helps.  Just $25 supplies one year of books for one Mercer County child.
                    </p>
                </div>
                <img src="img/DPIL web graphic.png" alt="">
            </div>
        </div>
        <h2 class="title">DOWNTOWN REVITALIZATION</h2>
        <div class="section-container">
            <div class="info flex-row">
                <img class="donate-img" src="img/img-box-1.jpg" alt="">
                <p>
                Mercer County Better Together developed an original, five-phase process specifically
                engineered to invigorate downtowns and commercial districts in small communities. The Village
                of Viola has partnered with MCBT and is putting this process into action during 2023. MCBT
                believes that with the right human, built and financial capital, any district can be revitalized. For
                more information, contact MCBT Executive Director Kyle McEwen at
                kyle@mcbettertogether.org.
                </p>
            </div>
        </div>
        <h2 class="title">HOUSING</h2>
        <div class="section-container ">
            <div class="info flex-row">
                <p>
                The Mercer County Housing Task Force was launched by MCBT in Q3 2021 and involves
                partner agencies from health care to law enforcement, housing providers to social services. The
                overall mission of this taskforce is to provide emergency housing, transitional housing and
                affordable housing for Mercer County residents to help the community thrive and low-income
                families to increase their potential long-term.
                MCBT houses the Mercer County Emergency Housing Fund, which supports people in our
                community who lack stable housing.
                </p>
                <button>Donate Us!</button>
            </div>
        </div>
        <h2 class="title">PARKS & RECREATION</h2>
        <div class="section-container ">
            <div class="info flex-column">
                <p>
                Since 2018, MCBT has brought over $300,000 in grant funds to complete 24 revitalization
                projects in 13 Mercer County communities.
                </p>
                <ul>
                    <li><a href="">City of Aledo – “Northside Park Ball Diamond Expansion”</a></li>
                    <li><a href="">City of Keithsburg – “Keithsburg Riverside Campground Addition”</a></li>
                    <li><a href="">Eliza Township – “Restroom Construction at Eliza Softball Diamond”</a></li>
                    <li><a href="">Mercer County Agricultural Society – “Merchant Building Roof Repair”</a></li>
                    <li><a href="">Mercer County Family YMCA – “Phase 1 Capital Campaign”</a></li>
                    <li><a href="">Village of Joy – “Joy Park Playground Improvement”</a></li>
                    <li><a href="">Village of Matherville – “Accessibility Enhancements at Lake Matherville”</a></li>
                    <li><a href="">Village of New Windsor – “Basketball Court Upgrade”</a></li>
                    <li><a href="">Village of North Henderson – “Village Park Revitalization”</a></li>
                    <li><a href="">Village of Seaton – “Seaton Park Improvements”</a></li>
                    <li><a href="">Village of Viola – “Miles Memorial Park Improvements”</a></li>
                </ul>
            </div>
        </div>
        <h2 class="title">RISE</h2>
        <div class="section-container">
            <div class="info">
                <p>
                During 2023, MCBT is helping area local governments and nonprofit organizations assess
                operations, improve their vitality and identify opportunities for collaboration. This project is
                funded by Illinois DCEO's RISE Local & Regional Planning Grant and is designed to help area
                local governments and nonprofits optimize services while reducing costs, streamlining
                operations and reducing risk.
                </p>
            </div>
        </div>
        <h2 class="title">WORKFORCE</h2>
        <div class="section-container flex-column">
            <div class="info">
                <p>
                MCBT leads the Mercer County Workforce Taskforce, which exists to strengthen and develop
                the local workforce by accomplishing the following:
                    <p class="text-indent" style="margin-left: 25px; text-align: left">
                        1. Identifying courses, training and certificate programs available to area students
                        <br>2. Closing area employment gaps by establishing career navigation and planning
                        services
                        <br>3. Building bridges between regional employers and participants in the regional
                        workforce
                        <br>4. Increasing awareness of area employment and upskill opportunities
                    </p>
                Partner agencies include social services, public health, job services, philanthropy, nonprofit,
                business and community and economic development.
                </p>
            </div>
            <div class="info grid">
                <button href="mccareercenter.php">Mercer County Career Center</button>
                <button href="">Virtual Resource Brochure</button>
            </div>
        </div>
        <h2 class="title">PAST PROJECTS</h2>
        <h4>
            The success of these projects led to another collaborative parks and recreation revitalization
effort in 2022.
        </h4>
        <div class="section-container">
            <div class="info">
                <div class="project-box">
                    <h3>2018-19 Parks & Recreation Projects</h3>
                    <p>
                    MCBT led a landmark collaboration to upgrade beloved parks and recreation facilities across
                    Mercer County. MCBT worked with communities to identify their project needs, then secured
                    funding to accomplish these projects. Through a partnership with the Looser-Flake Charitable
                    Foundation, eleven projects were completed across nine Mercer County communities. Leaders
                    from all Mercer County communities were invited to participate in the collaboration, which saw
                    stakeholders insist on sharing resources to make sure all projects were completed successfully.
                    In total, the eleven participating entities brought over 72% in match value and received a total of
                    $150,000 in grant funds to help accomplish projects. Many participants found ways to share
                    costs or resources.
                    </p>
                </div>
                <div class="project-box">
                    <h3>City of Aledo – “Northside Park Ball Diamond Expansion”</h3>
                    <p>
                    Phase one of construction of a new varsity baseball diamond at Northside Park.
                    </p>
                </div>
                <div class="project-box">
                    <h3>City of Keithsburg – “Keithsburg Riverside Campground Addition”</h3>
                    <p>
                    Seven new concrete pads in phase one of the campground’s capacity increase project.
                    </p>
                </div>
                <div class="project-box">
                    <h3>Eliza Township – “Restroom Construction at Eliza Softball Diamond”</h3>
                    <p>
                    Eliminating portable toilet costs by building a permanent restroom facility.
                    </p>
                </div>
                <div class="project-box">
                    <h3>Mercer County Agricultural Society – “Merchant Building Roof Repair”</h3>
                    <p>
                    Phase one of roof repair on the Merchant Building at the Mercer County Fairgrounds.
                    </p>
                </div>
                <div class="project-box">
                    <h3>Village of Joy – “Joy Park Playground Improvement”</h3>
                    <p>
                    Removing old and installing new play equipment, mulch and border edging at Joy Park.
                </div>
                <div class="project-box">
                    <h3>Village of Matherville – “Accessibility Enhancements at Lake Matherville”</h3>
                    <p>
                    Paving the boat ramp and installing a dock for kayak use at popular lake.
                </div>
                <div class="project-box">
                    <h3>Village of New Windsor – “Basketball Court Upgrade”</h3>
                    <p>
                    Repaving the playing surface and installing new hoops.
                </div>
                <div class="project-box">
                    <h3>Village of North Henderson – “Village Park Revitalization”</h3>
                    <p>
                    Installing wheelchair-accessible play equipment in phase one of revitalization process.
                </div>
                <div class="project-box">
                    <h3>Village of Seaton – “Seaton Park Improvements”</h3>
                    <p>
                    Diversifying and securing popular park with electrical system and safety pole upgrades.
                </div>
                <div class="project-box">
                    <h3>Village of Viola – “Miles Memorial Park Improvements”</h3>
                    <p>
                    Removing old and installing new playground equipment at Miles Memorial Park.
                </div>
            </div>
        </div>
    </div>
</div>
<?php require_once("assets/footer.php"); ?>