<?php include_once "includes/header.php"; 

//Variables 

$title=NULL; 
$description=NULL; ?>





    <!-- start unique page content -->



    <div class="wrapper">

        <div class="form"><img src="images/registration_main.jpg" alt="runners">

            <br>
            <br>
            <marquee>
                <h2>**Watch the Weather Closely!!**</h2></marquee>
            <br>
            <br>
            <p><em>The show goes on no matter what the weather is doing.</em></p>
            <br>

            <h1>Registration</h1>
            <br>
            <form action="connect2.php" method="post">

                <label for="name">Name (required):</label>
                <br>
                <br>
                <input type="text" name="name" id="name" required placeholder="Full Name">
                <br>
                <br>
                <label for="email">Email (required):</label>
                <br>
                <br>
                <input type="text" name="email" id="email" required placeholder="name@email.com">
                <br>
                <br>
                <label for="phone">Phone Number:</label>
                <br>
                <br>
                <input type="text" name="phone" id="phone" required placeholder="Phone">
                <br>
                <br>

                <label for="size">My t-shirt size is:</label>
                <br>
                <br>

                <input type="radio" name="size" id="size" value="small"> Small&nbsp;
                <br>
                <input type="radio" name="size" id="size" value="medium"> Medium&nbsp;
                <br>
                <input type="radio" name="size" id="size" value="Large"> Large&nbsp;

                <br>

                <br>
                <p>I have read and agree to the Liability Waiver.</p>
                <br>
                <label for="waiver"></label>
                <input type="checkbox" name="waiver" id="waiver" value="Liability Waiver" required> I agree.
                <br>
                <br>

                <h3>Saturday Events (one event per day):</h3>
                
                <label for="event1"></label>
                <br>
                <input type="radio" name="event1" id="event1" value="long_course"> Long Course $240.00
                <br>
                <input type="radio" name="event1" id="event1" value="olympic"> Olympic $110.00
                <br>
                <input type="radio" name="event1" id="event1" value="sprint"> 10k $50.00
                <br>
                <input type="radio" name="event1" id="event1" value="try_a_tri"> Half Marathon $75.00
                <br>
                <br>
                <br>

                <h3>Sunday Events (one event per day):</h3>
                
                <label for="event2"></label>
                <br>
                <input type="radio" name="event2" id="event2" value="half_marathon"> Sprint $$90.00
                <br>
                <input type="radio" name="event2" id="event2" value="10k"> Try-a-Tri $65.00
                <br>
                <input type="radio" name="event2" id="event2" value="splash-n-dash"> Splash n Dash
                <br>
                <br>
                <br>

                <input type="submit" value="Submit">
            </form>

            <br>
            <h2 align="middle">Cost includes:</h2>
            <br>
            <p align="middle">
                Food and Beer
                <br>
                Access to the weekend’s live entertainment and Fitness Expo
                <br>
                Commemorative Finisher medal
                <br>
                Accurate Chip Timing for competitive races
                <br>
                Ace in the Hole MultiSport Weekend Tech Shirt
                    <br>(shirt guaranteed to pre-registered participants only)
                <br>
                Post-event party and entertainment
            </p>
            <br>



        </div>
        <div class="sidebar">
            <div class="sidebar">
                <div class="sidebar2">
                    <h2>Starting Times</h2>
                    <br>
                    <br>


                    <h3>SATURDAY</h3>
                    <br>
                    <p>Long Course - 7:00am</p>
                    <br>
                    <p>Olympic - 7:30am</p>
                    <br>
                    <p>10K - 7:15am</p>
                    <br>
                    <p>Half Marathon - 7:15am</p>
                    <br>
                    <br>

                    <br>
                    <h3>SUNDAY</h3>
                    <br>
                    <p>Sprint - 8:00am</p>
                    <br>
                    <p>Try-a-Tri - 8:20am</p>
                    <br>
                    <p>Splash n Dash - 12:00pm</p>
                    <br>
                    <a href="courses.php" class="btn">DETAILS</a>
                    <br>
                    <br>
                    <br>
                    <a href="https://www.accuweather.com/en/us/portland-or/97209/weather-forecast/350473" class="aw-widget-legal">
                        <!--
By accessing and/or using this code snippet, you agree to AccuWeather’s terms and conditions (in English) which can be found at https://www.accuweather.com/en/free-weather-widgets/terms and AccuWeather’s Privacy Statement (in English) which can be found at https://www.accuweather.com/en/privacy.
-->
                    </a>
                    <div id="awcc1503785550770" class="aw-widget-current" data-locationkey="350473" data-unit="f" data-language="en-us" data-useip="false" data-uid="awcc1503785550770"></div>
                    <script type="text/javascript" src="https://oap.accuweather.com/launch.js"></script>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <div><img src="images/triathlon.gif" alt="triathlon"></div>
                    <br>
                    <br>
                    <section>Remember to bring a change of clothing so you can enjoy the post-event festivities.
                    </section>
                    <br>
                    <br>
                    <h2 align="middle">Packet Pick Up</h2>
                    <br>
                    <p align="middle">All packet pick up will occur at:
                        <br> Why Worry Racing
                        <br> 123 NW Everett
                        <br> Portland OR
                        <br>
                        <br> Packet pick up hours:
                        <br> Thursday 8-5 and Friday 9-noon
                        <br> No day of event packet pick up.</p>
                    <br>
                </div>

            </div>


        </div>
    </div>
    </main>

    <div class="content">
        <div>



            <h2 align="middle">What to Bring</h2>



            <section>You must wear your chip timing piece during the entire event. You will be given a band that will hold your chip timing piece around your ankle throughout the entire event. Be sure that it is snapped tightly. Be sure to have your Chip Timing piece on before you start the race and be sure to step over the timing mats after each segment of the race. If you are wearing a wet-suit, make sure the timing piece goes under your wetsuit otherwise, you will have a very difficult time getting off your wet suit.</section>
            <br>



            <section>
                <h3 align="middle">SWIM:</h3> Wetsuits are optional for the swim but will provide buoyancy and warmth. However, many people opt for no wetsuit for a triathlon so no worries. We will provide you with a swim cap but you will want to bring your own goggles.</section>


            <section>
                <h3 align="middle">BIKE:</h3> A biking helmet is mandatory. You will also receive 2 stickers in your package with your race number on them. The small sticker should go on the front of your helmet. The bigger sticker will wrap around your bike frame. Road or mountain bikes are acceptable. For safety reasons, be sure to have end-caps on the end of your handle-bars.</section>



            <section>
                <h3 align="middle">RUN:</h3> You must finish the race with your bib number on the front of you. Some people choose to pin it on at the beginning of the race and have it on for the whole event so they don’t have to worry about it. Others pin it on a singlet that they put on once they finish the swim before they head out for the bike. Others use an elastic racing strap that they pin their bib number to and then quickly strap it on before they leave for the run. Use whatever option feels best for you.</section>
            <br>






        </div>
        <br>

    </div>


    <!-- end unique page content -->

    <?php include_once "includes/footer.php"; ?>
