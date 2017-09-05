<?php include_once "includes/header.php"; 


//Variables 

$title=NULL; 
$description=NULL; 
?>






    <!-- start unique page content -->



    <div class="wrapper">

        <div class="form"><img src="images/contact_main.jpg" alt="runner">
            <h1 class="bigger">Contact Info</h1>
            <br>
            <br>
            <section class="questions"><p>If you would like to keep up-to-date with what we are doing, we would appreciate your filling out the following contact information. Please be sure to specify whether you would like to be a participant in any of our upcoming events, or if you would like to help us out as a volunteer.</p></section>
            <br>
            <br>
            <form action="connect.php" method="post">


                <label>Name:</label>
                <br><br>
                <input type="text" name="input1" required placeholder="Full Name">
                <br>


                <br>

                <label>Email:</label>
                <br><br>
                <input type="email" name="input2" required placeholder="name@email.com">
                <br>

                <br>



                <label>I am interested as:</label>
                <br><br>
                <select type="text" name="input3" required placeholder="Choose one">
                    <br>
                    <option value="athlete">an Athlete</option>
                    <option value="volunteer">a Volunteer</option>
                </select>
                <br>
                <br>
                <br>
                <h3>Any comments:</h3>
                <br>
                <label for="comments"></label>
                <br>
                <textarea rows="6" cols="50" type="text" name="input4" id="comment" placeholder="Comments">
                </textarea>
                <br>


                <input type="submit" value="Submit">


            </form>
            <br>
            <br>


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
                    <a href="registration.php" class="btn">REGISTER</a>
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
                    <br>
                    <br>
                    <section>WATER TEMPERATURE is expected to be between 62 – 66 degrees. The temperature will be taken on Friday and the morning of the race. Wetsuits are recommended.
                    </section>
                    <br>
                    <br>

                </div>

            </div>


        </div>
    </div>
    </main>
    <div class="content">
        <div><img src="images/bottom_banner.png" alt="swimmers entering water"></div>
    </div>


    <!-- end unique page content -->

    <?php include_once "includes/footer.php"; ?>
