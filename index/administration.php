<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Administration | Northview High</title>
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
                    <h3>ADMINISTRATION</h3>
                    <hr>
                    <br>
                    <div class="admin-header">
                        <img src="img/admin/admin-header.JPG" width="100%">
                    </div>
                    <br>
                    <hr>
                    <div class="admin-profile">
                        <div class="admin-profile-pic">
                            <img src="img/admin/downey-profile.jpg">
                            <h4><a href="mailto:downeyb@fultonschools.org">Mr. Brian Downey</a></h4>
                            <b>Principal</b>
                        </div>
                        <div class="admin-profile-bio">
                            <p><b>Contact:</b> (470)-254-3829</p>
                            <p><b>Birthplace:</b> New Jersey</p>
                            <p><b>Education:</b> BS Biology Providence College<br>Master Ed Leadership Fitchburg State College</p>
                            <p><b>Work Experience:</b>
                                Science Teacher 1994-2003<br>
                                Attleboro High School, Attleboro MA<br>
                                Dean of Students 2003-2010 Attleboro High School, Attleboro MA<br>
                                Assistant Principal 2010-2014 Northview High School, Johns Creek GA<br>
                                Principal 2014- Northview High School, Johns Creek GA</p>
                            <p><b>Interests:</b> Spending time with my family, wife Randi and children Evie and Liam.</p>
                        </div>
                    </div>
                    <br>
                    <hr>
                    <div class="admin-profile">
                        <div class="admin-profile-pic">
                            <img src="img/admin/booms-profile.jpg">
                            <h4><a href="mailto:booms@fultonschools.org">Ms. Amy Booms</a></h4>
                            <b>Asst. Principal</b>
                        </div>
                        <div class="admin-profile-bio">
                            <p><b>Contact:</b> (470)-254-3830</p>
                            <p><b>Birthplace:</b> Chagrin Falls, OH</p>
                            <p><b>Education:</b> Bachelor of Science Degree in Early Childhood Education from Ohio University<br>
                                Masters' Degree in Educational Administration &amp; Policy from University of Georgia<br>
                                Currently working on Specialist Degree in Performance Leadership at Kennesaw State University </p>
                            <p><b>Work Experience:</b> Have been in Fulton County for 8 years, taught for 6 years and worked as the Northeast Learning Communities' Humanities Program Specialist for 2 years.</p>
                            <p><b>Interests:</b> Spending time with my family and friends, reading, going to the gym and watching movies.</p>
                        </div>
                    </div>
                    <br>
                    <hr>
                    <div class="admin-profile">
                        <div class="admin-profile-pic">
                            <img src="img/admin/boyd-profile.jpg">
                            <h4><a href="mailto:boydn@fultonschools.org">Mrs. Nikol Boyd</a></h4>
                            <b>Asst. Principal</b>
                        </div>
                        <div class="admin-profile-bio">
                            <p><b>Contact:</b> (470)-254-3832</p>
                            <p><b>Birthplace:</b> Washington, DC</p>
                            <p><b>Education:</b> B.S. in Elementary Education, Morgan State University M.Ed. in Educational Administration and Supervision, Loyola College<br>
                                Currently working on Specialist Degree in Performance Leadership at Kennesaw State University </p>
                            <p><b>Work Experience:</b> 19 years in Education (13 in Fulton County). Teacher for 10 years, Curriculum Specialist for 3 years and 6th year as an Assistant Principal.</p>
                            <p><b>Interests:</b> Spending time with my family and friends, reading and traveling.</p>
                        </div>
                    </div>
                    <br>
                    <hr>
                    <div class="admin-profile">
                        <div class="admin-profile-pic">
                            <img src="img/admin/butera-profile.png">
                            <h4><a href="mailto:butera@fulton.k12.ga.us">Ms. Tiffany Butera</a></h4>
                            <b>Asst. Principal, Curriculum Director</b>
                        </div>
                        <div class="admin-profile-bio">
                            <p><b>Contact:</b> (470)-254-3759</p>
                            <p><b>Birthplace:</b> Atlanta, GA</p>
                            <p><b>Education:</b> B.S. Degree from Presbyterian College<br>Masters Degree from Georgia State University </p>
                            <p><b>Work Experience:</b> Taught in a suburb of Hiroshima Japan for two years, taught in Cobb County for 4 years, and has been in Fulton County for 16 years.</p>
                            <p><b>Interests:</b> Tennis, running ½ marathons, reading, and family</p>
                        </div>
                    </div>
                    <br>
                    <hr>
                    <div class="admin-profile">
                        <div class="admin-profile-pic">
                            <img src="img/admin/hunter-profile.png">
                            <h4><a href="mailto:hunterr@fultonschools.org">Mr. Robert Hunter</a></h4>
                            <b>Asst. Principal, Senior Class</b>
                        </div>
                        <div class="admin-profile-bio">
                            <p><b>Contact:</b> (470)-254-3834</p>
                            <p><b>Birthplace:</b> Independence, MO</p>
                            <p><b>Education:</b> B.S Science Education, Kennesaw State University<br>
                                M.S. Educational Administration and Supervision, Lincoln Memorial University<br>
                                Ed.S. Educational Administration and Supervision, Lincoln Memorial University</p>
                            <p><b>Work Experience:</b> 20 years with Fulton County Schools,<br>
                                Chemistry/Physics Teacher<br>
                                Football Coach, Baseball Coach, Tennis Coach<br>
                                Athletic Director<br>
                                Administrative Assistant</p>
                            <p><b>Interests:</b> Harleys, Working out</p>
                        </div>
                    </div>
                    <br>
                    <hr>
                    <div class="admin-profile">
                        <div class="admin-profile-pic">
                            <img src="img/admin/mcdaniel-profile.jpg">
                            <h4><a href="mailto:mcdanielsl@fultonschools.org">Mr. Scotty McDaniel</a></h4>
                            <b>Athletic Director</b>
                        </div>
                        <div class="admin-profile-bio">
                            <p><b>Contact:</b> (470)-254-3713</p>
                            <p><b>Birthplace:</b> Lexington, VA</p>
                            <p><b>Education:</b> Bachelor's in Finance from University of Tampa,<br>
                                MBA from University of Colorado</p>
                            <p><b>Work Experience:</b> 11 and 1/2 years as a United States Army captain. 2 years as home depot store manager. 10 years as an AP Economy teacher</p>
                            <p><b>Interests:</b> Coaching, Playing football and basketball, watching sports, videogames.</p>
                        </div>
                    </div>
                    <br>
                    <hr>
                    <div class="admin-profile">
                        <div class="admin-profile-pic">
                            <img src="img/admin/walker-profile.jpg">
                            <h4><a href="mailto:walkersh@fulton.k12.ga.us">Mrs. Susan Walker</a></h4>
                            <b>Asst. Principal</b>
                        </div>
                        <div class="admin-profile-bio">
                            <p><b>Contact:</b> (470)-254-3831</p>
                            <p><b>Birthplace:</b> Marietta, GA</p>
                            <p><b>Education:</b> Bachelor’s in English and Women’s Studies from Emory University<br>
                                Master of Science in Policy Studies from Georgia State University<br>
                                Currently working toward Specialist in Education from Kennesaw State University</p>
                            <p><b>Work Experience:</b> 13 years in education, including the following:<br>
                                -English Teacher at McAllen High School in south Texas<br>
                                -Site Director for Georgia Teaching Fellows- Atlanta<br>
                                -Deputy Director for the Georgia Governor’s Office of Student Achievement<br>
                                -Director of Policy and Research for the Georgia Partnership for Excellence in Education<br>
                                -School Governance Facilitator for Fulton County Schools</p>
                            <p><b>Interests:</b> Spending time with my husband and 2 daughters; Chasing after the family pets (a dog and a cat); Reading; Singing</p>
                        </div>
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
