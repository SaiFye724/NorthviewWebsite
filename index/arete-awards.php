<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Arete Awards | Northview High</title>
        <link rel="shortcut icon" type="image/png" href="img/favicon.ico"/>
         
        <link rel="stylesheet" href="css/normalize.css">
        <link rel="stylesheet" href="css/custom.css">
        <link rel="stylesheet" href="font-awesome-4.7.0/css/font-awesome.min.css">
        <link href="https://fonts.googleapis.com/css?family=Montserrat|Raleway|" rel="stylesheet">
        
        <script src="js/jquery-3.1.1.min.js"></script>
        <script src="js/custom.js"></script>
    </head>
    <body>
        <div id="container">
            <div id="side-menu">
    <div class="top-side-menu">
        <i class="fa fa-times" aria-hidden="true" id="close-side-menu"></i>
    </div>
    <div>
        <ul>
            <li><a href="index.php" style="color: #fff;">HOME</a></li>
            <li id="side-school" class="nav-ourschool multiitem" style="cursor: pointer;">OUR SCHOOL <i class="fa fa-caret-down" aria-hidden="true"></i>
                <ul id="side-school-dropdown" class="dropdown">
                    <a href="about.php"><li>ABOUT</li></a>
                    <a href="calendar.php"><li>CALENDAR</li></a>
                    <a href="schedules.php"><li>SCHEDULES</li></a>
                    <a href="daily-news.php"><li>DAILY NEWS</li></a>
                    <a href="arete-awards.php"><li>ARETE AWARDS</li></a>
                    <a href="honor-roll.php"><li>HONOR ROLL</li></a>
                    <a href="teacher-awards.php"><li>TEACHER AWARDS</li></a>
                    <a href="stu-achievements.php"><li>ACHIEVEMENTS</li></a>
                    <a href="campus-parking.php"><li>PARKING</li></a>
                    <a href="biz-partnerships.php"><li>PARTNERSHIPS</li></a>
                </ul>
            </li>
            <li id="side-parents" class="nav-parents multiitem" style="cursor: pointer;">PARENTS <i class="fa fa-caret-down" aria-hidden="true"></i>
                <ul id="side-parents-dropdown" class="dropdown">
                    <a href="volunteer.php"><li>VOLUNTEER INFO</li></a>
                    <a href="http://www.gadoe.org/Pages/Home.aspx" target="_blank"><li>GDOE</li></a>
                    <a href="http://www.fultonschools.org/en/"><li>COUNTY SITE</li></a>
                    <a href="http://www.fultonschools.org/en/divisions/ops/nutrition/pages/default.aspx" target="_blank"><li>CAFE MENU</li></a>
                    <a href="https://sites.google.com/site/northviewhighschoolptsa/" target="_blank"><li>PTSA</li></a>
                    <a href="http://www.northviewfaa.wixsite.com/northview-fine-arts" target="_blank"><li>FAA</li></a>
                </ul>
            </li>
            <li id="side-students" class="nav-students multiitem" style="cursor: pointer;">STUDENTS <i class="fa fa-caret-down" aria-hidden="true"></i>
                <ul id="side-students-dropdown" class="dropdown">
                    <a href="clubs.php"><li>CLUBS</li></a>
                    <li>COURSE CATALOG</li>
                    <a href="http://northviewtitans.org/" target="_blank"><li>ATHLETICS</li></a>
                    <a href="http://www.northviewbands.com/" target="_blank"><li class="submenu-item">BAND</li></a>
                    <a href="chorus.php"><li>CHORUS</li></a>
                    <a href="colorguard.php"><li>COLOR GUARD</li></a>
                    <a href="drama.php"><li>DRAMA</li></a>
                    <a href="orchestra.php"><li>ORCHESTRA</li></a>
                    <a href="student-handbook.php"><li>HANDBOOK</li></a>
                    <a href="syllabi.php"><li>SYLLABI</li></a>
                    <a href="yearbook.php"><li>YEARBOOK</li></a>
                    <a href="bvp.php"><li>BROADCAST &amp; VIDEO</li></a>
                    <a href="http://nhsmessenger.com/" target="_blank"><li>THE MESSENGER</li></a>
                </ul>
            </li>
            <li><a href="faculty.php" style="color: #fff;">DIRECTORY</a></li>
            <li><a href="http://hac.fultonschools.org/" target="_blank" style="color: #fff;">HAC</a></li>
        </ul>
    </div>
</div>
                
                    <div class="nav nav-container">
                <div class="nav-top">
                    <div id="mission-nav">
                        <p>"To instill excellence in academics, arts, and athletics"</p>
                        
                    </div>
                    <div id="search-button">
                        <div class="search-div">
                            <i class="fa fa-search" aria-hidden="true"></i>
                            <input type="text" placeholder="search" name="search" id="searchfield">
                            <script>
                                $(document).ready(function(){
                                    $("#searchfield").on('keyup', function (e) {
                                        if (e.keyCode == 13) {
                                            var searchinput = $("#searchfield").val();
                                            window.location = "search.php?search=" + searchinput;
                                        }
                                    });
                                });
                            </script>
                        </div>
                        
                    </div>
                    <a href="schoolstore.php"><div style="cursor:pointer;" id="shop-button">
                        <div class="shop-div">
                            <i class="fa fa-shopping-bag" aria-hidden="true"></i>
                            <span>shop</span>
                        </div>
                        
                    </div></a>
                </div>
                
                <div class="main-nav">
                    <a href="index.php"><img class="nav-logo" src="img/northview-logo.png"></a>
                    <div class="left-main-nav">
                        <p class="title-nav-text"><b>NORTHVIEW</b></p>
                        <p class="school-text">HIGH SCHOOL</p>
                    </div>
                    <div class="nav-main-nav">
                        <i style="cursor:pointer;" id="hamburger-menu" class="fa fa-bars" aria-hidden="true"></i>
                        <div class="nav-nav-main-nav">
                            <ul>
                                <a href="index.php" style="color: #fff;"><li>HOME</li></a>
                                <li class="nav-ourschool multiitem">OUR SCHOOL
                                    <ul class="dropdown">
                                        <li class="top-subbar"></li>
                                        <a href="about.php"><li>ABOUT</li></a>
                                        <a href="calendar.php"><li>CALENDAR</li></a>
                                        <a href="schedules.php"><li>SCHEDULES</li></a>
                                        <a href="daily-news.php"><li>DAILY NEWS</li></a>
                                        <li class="submenu aw-su">AWARDS<i style="float: right; margin-right: 25px; margin-top: -3px;" class="fa fa-sort-desc" aria-hidden="true"></i>
                                            <ul class="submenu-dropdown aw-su-dr">
                                                <a href="arete-awards.php"><li class="submenu-item aw-su-i">ARETE AWARDS</li></a>
                                                <a href="honor-roll.php"><li class="submenu-item aw-su-i">HONOR ROLL</li></a>
                                                <a href="teacher-awards.php"><li class="submenu-item aw-su-i">TEACHER AWARDS</li></a>
                                                <a href="stu-achievements.php"><li class="submenu-item aw-su-i">ACHIEVEMENTS</li></a>
                                            </ul>
                                        </li>
                                        <a href="campus-parking.php"><li>PARKING</li></a>
                                        <a href="biz-partnerships.php"><li>PARTNERSHIPS</li></a>
                                    </ul>
                                </li>
                                <li class="nav-parents multiitem">PARENTS
                                    <ul class="dropdown multiitem">
                                        <li class="top-subbar"></li>
                                        <a href="volunteer.php"><li>VOLUNTEER INFO</li></a>
                                        <a href="http://www.gadoe.org/Pages/Home.aspx" target="_blank"><li>GDOE</li></a>
                                        <a href="http://www.fultonschools.org/en/" target="_blank"><li>COUNTY SITE</li></a>
                                        <a href="http://www.fultonschools.org/en/divisions/ops/nutrition/pages/default.aspx" target="_blank"><li>CAFE MENU</li></a>
                                        <a href="https://sites.google.com/site/northviewhighschoolptsa/" target="_blank"><li>PTSA</li></a>
                                        <a href="http://www.northviewfaa.wixsite.com/northview-fine-arts" target="_blank"><li class="submenu-item arts-su-i">FAA</li></a>
                                    </ul>
                                </li>
                                <li class="nav-students multiitem">STUDENTS
                                    <ul class="dropdown">
                                        <li class="top-subbar"></li>
                                        <a href="clubs.php"><li>CLUBS</li></a>
                                        <a href="course-catalog.php"><li>COURSE CATALOG</li></a>
                                        <a href="http://northviewtitans.org/" target="_blank"><li>ATHLETICS</li></a>
                                        <li class="submenu arts-su">ARTS<i style="float: right; margin-right: 25px; margin-top: -3px;" class="fa fa-sort-desc" aria-hidden="true"></i>
                                            <ul class="submenu-dropdown arts-su-dr">
                                                <a href="http://www.northviewbands.com/" target="_blank"><li class="submenu-item arts-su-i">BAND</li></a>
                                                <a href="chorus.php"><li class="submenu-item arts-su-i">CHORUS</li></a>
                                                <a href="colorguard.php"><li class="submenu-item arts-su-i">COLOR GUARD</li></a>
                                                <a href="drama.php"><li class="submenu-item arts-su-i">DRAMA</li></a>
                                                <a href="orchestra.php"><li class="submenu-item arts-su-i">ORCHESTRA</li></a>
                                            </ul>
                                        </li>
                                        <a href="student-handbook.php"><li>HANDBOOK</li></a>
                                        <a href="syllabi.php"><li>SYLLABI</li></a>
                                        <li class="submenu pub-su">PUBLICATIONS<i style="float: right; margin-right: 25px; margin-top: -3px;" class="fa fa-sort-desc" aria-hidden="true"></i>
                                            <ul class="submenu-dropdown pub-su-dr">
                                                <a href="yearbook.php"><li class="submenu-item pub-su-i">YEARBOOK</li></a>
                                                <a href="bvp.php"><li class="submenu-item pub-su-i">BROADCAST &amp; VIDEO</li></a>
                                                <a href="http://nhsmessenger.com/" target="_blank"><li class="submenu-item pub-su-i">THE MESSENGER</li></a>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <a href="faculty.php" style="color: #fff;"><li>DIRECTORY</li></a>
                                <a href="http://hac.fultonschools.org/" target="_blank" style="color: #fff;"><li>HAC</li></a>
                            </ul>
                        </div>
                        <div id="hamburger-menu">
                            <i style="color: #fff;" class="fa fa-bars" aria-hidden="true"></i>
                        </div>
                    </div>
                </div>
                <div class="bottom-nav"></div>
            </div>

            
            <div id="main-body">
                <div id="side-bar">
    <div id="important-links">
        <h4>IMPORTANT LINKS</h4>
                <ul>
            <a href="../yearbook.php" target="_blank" style="color: black;"><li>Senior Ad Info</li></a><a href="../linked_files/about/FreshmanCampFlyer.pdf" target="_blank" style="color: black;"><li>Freshman Camp Flyer</li></a><a href="../linked_files/ParkingApp1718.doc" target="_blank" style="color: black;"><li>Parking Application 2017-18</li></a><a href="https://www.northviewcounseling.com/summer-assignments-2017" target="_blank" style="color: black;"><li>Summer Assignments 2017</li></a><a href="https://www.northviewcounseling.com/" target="_blank" style="color: black;"><li>Northview Counseling</li></a><a href="https://www.northviewcounseling.com/transcript-requests-" target="_blank" style="color: black;"><li>Request A Transcript</li></a><a href="https://www.peachjar.com/index.php?a=28&b=138&region=68281" target="_blank" style="color: black;"><li>Northview Peachjar</li></a><a href="http://session.cadystudios.com/" target="_blank" style="color: black;"><li>Cady Studios</li></a><a href="https://www3.fultonschools.org/hb91/home/index2" target="_blank" style="color: black;"><li>FCS HB91 Petition Form</li></a><a href="https://www.commonsense.org/education/digital-citizenship" target="_blank" style="color: black;"><li>Digital Citizenship Application</li></a><a href="https://www.youtube.com/watch?v=44znsLcLROw" target="_blank" style="color: black;"><li>NHS Morning Show (May 11)</li></a>        </ul>
    </div>
</div>
                <div id="page-content">
                    <h3>ARETE AWARDS</h3>
                    <hr>
                    <h4>ARETE AWARDS</h4>
                    <p>Each year, Northview hosts a lunch reception honoring those students who have made positive contributions to the school. Teachers, coaches, and sponsors nominate students for the Arête award. A reception is held for the honorees and their guests following the ceremony.</p>
                    <h4>Students who attain Arête status will...</h4>
                    <ul>
                        <li>receive a congratulatory letter from the nominating teacher</li>
                        <li>be honored during the annual Arête luncheon</li>
                        <li>receive an Arête Award Certificate</li>
                    </ul>
                    <h4>Arête Award Recipients:</h4>
                    <div class="arete-recipients">
                        Najah Boyd<br>
                        Tifeoluwani Abimbola<br>
                        Maria Gabriella Abreu<br>
                        Aws Al Tibi<br>
                        Alexandra Alampi<br>
                        Lorena Aleman<br>
                        Henry Alvarez<br>
                        Johna Anderson<br>
                       Cade Auerbach<br>
                        Jonathon Baker<br>
                        Lauren Bell<br>
                        Ava Bernardino<br>
                        Miguel Bethancourt<br>
                        You Bin<br>
                        Zeynep Birgili<br>
                        Maya Blake<br>
                        McKinley Boden<br>
                        Elizabeth Boegel<br>
                        Kaitlin Bonnet<br>
                        Amirah Boyd<br>
                        Shelby Bradley<br>
                        Sara Braynard<br>
                        Elizabeth Burton<br>
                        Robert Caylor<br>
                        Kelli Cercone<br>
                        Piper Chans<br>
                        Billy Chow<br>
                        Callie Christiansen<br>
                        Peilin Chung<br>
                        Gracie Clough<br>
                        Sophia Condensa<br>
                        Zachary Cone<br>
                        Tristan Cozier<br>
                        Hailey Dahl<br>
                        Chance Amaya<br>
                        Davenport-Mills<br>
                        Michaela Davis<br>
                        Gururaj Deshpande<br>
                        Anushka Deshpande<br>
                        Triana Dotson<br>
                        Stephanie Duan<br>
                        Ishaa Dubey<br>
                        Lois Edekin-Odion<br>
                        Tasneem Elsaqa<br>
                        Whitney Engeron<br>
                        Anna Erickson<br>
                        Grace Erickson<br>
                        Noor Faruqi<br>
                        Morgan Finch<br>
                        Rameen Forghani<br>
                        Davis Forney<br>
                        Nick Foster<br>
                        Sam Frey<br>
                        Toby Xin Fu<br>
                        Kana Fujita<br>
                        Giovanna Fussek<br>
                        Kabir Gandhi<br>
                        Jasmin Gao<br>
                        Zara Garbart<br>
                        Maria Garcia<br>
                        Prakhar Gautam<br>
                        Chance Gilbreth<br>
                        Alexandra Girma<br>
                        Kerri Graham<br>
                        Felipe Midlej Martineli<br>
                        Gramacho<br>
                        Trace Gregg<br>
                        David Guttierez<br>
                        Fatima Sasha Haider<br>
                        Ni Joseph Han Han<br>
                        Marissa Harrold<br>
                        Alexis Hernandez<br>
                        Jeremy Hiley<br>
                        Terrence Hodges<br>
                        Catherine Holte<br>
                        Sydney Hopkins<br>
                        Ke'vontae Hughes<br>
                        Eli Humphries<br>
                        Andrew Hutcheson<br>
                        Shannon Hwu<br>
                        Lucas Indal<br>
                        Cassandra Izzi<br>
                        YuRae Jeong<br>
                        Simrita Jesthi<br>
                        Noah Johnson<br>
                        Wynsome Jones<br>
                        Zavion Jones<br>
                        Lauren Jordan<br>
                        Emily Josselson<br>
                        Sneha Kadiyala<br>
                        Gina Kang<br>
                        Ali Kapadia<br>
                        Keren Kapwadi<br>
                        Nichola Keane-Murphy<br>
                        Ayaan Keshwani<br>
                        Matthew Kim<br>
                        Woo Jae Kim<br>
                        Alex Matthew Kim<br>
                        Philip Koster<br>
                        Sravya Koya<br>
                        Rachel Kruger<br>
                        Sanjeev Kumar<br>
                        Kelly Lambright<br>
                        Kiersten Lange<br>
                        Eugene Lee<br>
                        Maya Lewis<br>
                        Sean Lewow<br>
                        Angel Shuman Li<br>
                        Aileen Li<br>
                        Lydia Lim<br>
                        Colin Lucas<br>
                        Vivian Luu<br>
                        Uday Mandala<br>
                        Azru Mannam<br>
                        Jonathan Martin<br>
                        Macy McKinley<br>
                        Nicolas Mendicino<br>
                        Isabelle Messawer<br>
                        Kush Mitter<br>
                        Diba Moghaddari<br>
                        Bethany Morton<br>
                        Lea Nachazel<br>
                        Andrew Nguyen<br>
                          Cathy Ni<br>
                          Anny Ni<br>
                          Colleen O'Connell<br>
                          Leo Okojie<br>
                          Abigail Page<br>
                          Nidhi Pai<br>
                          Jeff Paik<br>
                          Sally Pan<br>
                          Logan Panas<br>
                          Jacqueline Paoli<br>
                          Josh Park<br>
                          Joannah Park<br>
                          Joshua Park<br>
                          Ju Sung Park<br>
                          Kavita Patel<br>
                          Aparna Pateria<br>
                          Emily Pfahl<br>
                          Christine Price<br>
                          Alexyss Rainford<br>
                          Sanika Rane<br>
                          Hend Rasheed<br>
                          Matthew Rhee<br>
                          Meghan Rosati<br>
                          Kudzaishe Rwizi<br>
                          Seong Ryoo<br>
                          Shreya Sanghvi<br>
                          Sreehith Sanku<br>
                          Sil Savla<br>
                          Carter Self<br>
                          Anarah Shakur<br>
                          Shelby Shepherd<br>
                          Komal Shrivastava<br>
                          Simon Lucas Shuster<br>
                          Alexandra Skinner<br>
                          Emily Sliwinski<br>
                          Harman Soor<br>
                          Khurana Tanvi<br>
                          Terrenz Tarver<br>
                          Beyza Nur Tas<br>
                          Leigh Coristance Taylor<br>
                          Eleanor Francis Taylor<br>
                          Anirudh Thatavarty<br>
                          Ananda Thomas<br>
                          Leilani Tian<br>
                          Michael Trautwein<br>
                          Jadyn Tubbs<br>
                          Lauren Tyler<br>
                          Amoolya Vayalapalli<br>
                          Maria Vinokuskiy<br>
                          Tai Wang<br>
                          Madisyn Jean Wangle<br>
                          Joshua Robert William<br>
                          Andrew Mills<br>
                          Emily Wilson<br>
                          Isabel Wright<br>
                          Tiffany Xu<br>
                          Nicole Yakovlev<br>
                          Tiffany Yong<br>
                          Maya Yousefzadeh<br>
                          Omar Zabalawi<br>
                          Xiarui Zhang<br>
                          Anita Zhang<br>
                          Charles Zhu<br>
                          Raymond Zhu<br>

                  </div>
                </div>
            </div>
            
                        <footer>
                <div class="footer footer-container">
                    
                    <div class="main-footer">
                        <div class="left-footer">
                            <h4>ABOUT</h4>
                            <p>Northview High School opened in the Fall of 2002 to serve students residing in northeast Fulton County. </p>
                            <h4>MISSION</h4>
                            <p>Our mission is to instill excellence in academics, arts, and athletics.</p>
                        </div>
                        <div class="right-footer">
                            <h4>FOLLOW US</h4>
                            <div class="footer-social-icons">
                                <div class="social-icon">
                                    <i class="fa fa-twitter" aria-hidden="true"></i>
                                </div>
                                <div class="social-icon">
                                    <i class="fa fa-facebook" aria-hidden="true"></i>
                                </div>
                            
                            </div>
                            <div class="final-links">
                                <span><a href="team.php">TEAM</a></span> /
                                <span><a href="credits.php">CREDITS</a></span> /
                                <span><a href="contact-us.php">CONTACT US</a></span> /
                                <span><a href="administration.php">ADMIN</a></span>
                            </div>
                        </div>
                        <p class="copyright">© 2017 Northview High School. All Rights Reserved.</p>
                    </div>
                </div>
            </footer>
        </div>
    </body>
</html>
