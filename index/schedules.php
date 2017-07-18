<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Schedules | Northview High</title>
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
                    <h3>SCHEDULES</h3>
                    <hr>
                    <p><b>4A Lunch:</b>  Halls 100, 200, 300, 832-839<br>
                        <b>4B Lunch:</b>  Halls 400, 500, 600, 700, 830-831, 900</p>
                    <p>A warning bell will ring one minute prior to the tardy bell.</p>
                    <b>Students are to be seated and ready to begin class when the tardy bell rings.</b>
                    <p>The Homeroom Schedule, Extended 1st Period, and Extended Homeroom will be followed as called. Students may access the food court, courtyard, counseling office, main office, attendance office, and media center during their lunch period. Students are not permitted in any other areas of the building from the time lunch begins until the bell rings to return to class.</p>
                    <div class="reg-schedules">
                        <div class="schedule">
                            <h4>REGULAR SCHEDULE</h4>
                            <table>
                                <thead>
                                    <tr>
                                        <th>Period</th>
                                        <th>Time</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Zero Period</td>
                                        <td>7:15 - 8:11</td>
                                    </tr>
                                    <tr>
                                        <td>First Period</td>
                                        <td>8:20 - 9:20</td>
                                    </tr>
                                    <tr>
                                        <td>Second Period</td>
                                        <td>9:26 - 10:26</td>
                                    </tr>
                                    <tr>
                                        <td>Third Period</td>
                                        <td>7:15 - 8:11</td>
                                    </tr>
                                    <tr>
                                        <td>Fourth Period</td>
                                        <td>11:38 - 1:18</td>
                                    </tr>
                                    <tr>
                                        <td colspan="2"><i>4A: lunch 11:32-12:12/class 12:18-1:18</i></td>
                                    </tr>
                                    <tr>
                                        <td colspan="2"><i>4B: class 11:38-12:38/lunch 12:38-1:18</i></td>
                                    </tr>
                                    <tr>
                                        <td>Fifth Period</td>
                                        <td>1:24 - 2:24</td>
                                    </tr>
                                    <tr>
                                        <td>Sixth Period</td>
                                        <td>2:30 - 3:30</td>
                                    </tr>
                                    <tr>
                                        <td>Bus/Detention</td>
                                        <td>3:40</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="schedule">
                            <h4>HOMEROOM SCHEDULE</h4>
                            <table>
                                <thead>
                                    <tr>
                                        <th>Period</th>
                                        <th>Time</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Zero Period</td>
                                        <td>7:15 - 8:11</td>
                                    </tr>
                                    <tr>
                                        <td>First Period</td>
                                        <td>8:20 - 9:14</td>
                                    </tr>
                                    <tr>
                                        <td>Homeroom</td>
                                        <td>9:21 - 9:31</td>
                                    </tr>
                                    <tr>
                                        <td>Second Period</td>
                                        <td>9:38 - 10:32</td>
                                    </tr>
                                    <tr>
                                        <td>Third Period</td>
                                        <td>10:39 - 11:33</td>
                                    </tr>
                                    <tr>
                                        <td>Fourth Period</td>
                                        <td>11:40 - 1:28</td>
                                    </tr>
                                    <tr>
                                        <td colspan="2"><i>4A: lunch 11:40-12:30/class 12:30-1:28</i></td>
                                    </tr>
                                    <tr>
                                        <td colspan="2"><i>4B: class 11:40-12:38/lunch 12:38-1:28</i></td>
                                    </tr>
                                    <tr>
                                        <td>Fifth Period</td>
                                        <td>1:35 - 2:29</td>
                                    </tr>
                                    <tr>
                                        <td>Sixth Period</td>
                                        <td>2:36 - 3:30</td>
                                    </tr>
                                    <tr>
                                        <td>Bus/Detention</td>
                                        <td>3:40</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="extended-schedules">
                        <div class="schedule">
                            <h4>EXTENDED 1st PERIOD</h4>
                            <table>
                                <thead>
                                    <tr>
                                        <th>Period</th>
                                        <th>Time</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Zero Period</td>
                                        <td>7:15 - 8:11</td>
                                    </tr>
                                    <tr>
                                        <td>First Period</td>
                                        <td>8:20 - 9:31</td>
                                    </tr>
                                    <tr>
                                        <td>Second Period</td>
                                        <td>9:38 - 10:32</td>
                                    </tr>
                                    <tr>
                                        <td>Third Period</td>
                                        <td>10:39 - 11:33</td>
                                    </tr>
                                    <tr>
                                        <td>Fourth Period</td>
                                        <td>11:40 - 1:28</td>
                                    </tr>
                                    <tr>
                                        <td colspan="2"><i>4A: lunch 11:40-12:30/class 12:30-1:28</i></td>
                                    </tr>
                                    <tr>
                                        <td colspan="2"><i>4B: class 11:40-12:38/lunch 12:38-1:28</i></td>
                                    </tr>
                                    <tr>
                                        <td>Fifth Period</td>
                                        <td>1:35 - 2:29</td>
                                    </tr>
                                    <tr>
                                        <td>Sixth Period</td>
                                        <td>2:36 - 3:30</td>
                                    </tr>
                                    <tr>
                                        <td>Bus/Detention</td>
                                        <td>3:40</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="schedule">
                            <h4>EXTENDED HOMEROOM</h4>
                            <table>
                                <thead>
                                    <tr>
                                        <th>Period</th>
                                        <th>Time</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Zero Period</td>
                                        <td>7:15 - 8:11</td>
                                    </tr>
                                    <tr>
                                        <td>First Period</td>
                                        <td>8:20 - 9:13</td>
                                    </tr>
                                    <tr>
                                        <td>Homeroom</td>
                                        <td>9:20 - 9:40</td>
                                    </tr>
                                    <tr>
                                        <td>Second Period</td>
                                        <td>9:47 - 10:40</td>
                                    </tr>
                                    <tr>
                                        <td>Third Period</td>
                                        <td>10:47 - 11:39</td>
                                    </tr>
                                    <tr>
                                        <td>Fourth Period</td>
                                        <td>11:46 - 1:34</td>
                                    </tr>
                                    <tr>
                                        <td colspan="2"><i>4A: lunch 11:46-12:36/class 12:36-1:34</i></td>
                                    </tr>
                                    <tr>
                                        <td colspan="2"><i>4B: class 11:46-12:44/lunch 12:44-1:34</i></td>
                                    </tr>
                                    <tr>
                                        <td>Fifth Period</td>
                                        <td>1:41 - 2:32</td>
                                    </tr>
                                    <tr>
                                        <td>Sixth Period</td>
                                        <td>2:39 - 3:30</td>
                                    </tr>
                                    <tr>
                                        <td>Bus/Detention</td>
                                        <td>3:40</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="schedule">
                            <h4>FINAL EXAM SCHEDULE</h4>
                            <table>
                                <thead>
                                    <tr>
                                        <th>Period</th>
                                        <th>Time</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Announcements</td>
                                        <td>8:20 - 8:25</td>
                                    </tr>
                                    <tr>
                                        <td>Exam</td>
                                        <td>8:25 - 10:05</td>
                                    </tr>
                                    <tr>
                                        <td>Break</td>
                                        <td>10:05 - 10:20</td>
                                    </tr>
                                    <tr>
                                        <td>Exam</td>
                                        <td>10:20 - 12:00</td>
                                    </tr>
                                    <tr>
                                        <td>Lunch</td>
                                        <td>12:00 - 12:30</td>
                                    </tr>
                                    <tr>
                                        <td>Bus/Detention</td>
                                        <td>12:30</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="schedule">
                            <h4>PEP RALLY</h4>
                            <table>
                                <thead>
                                    <tr>
                                        <th>Period</th>
                                        <th>Time</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Zero Period</td>
                                        <td>7:15 - 8:11</td>
                                    </tr>
                                    <tr>
                                        <td>First Period</td>
                                        <td>8:20 - 9:12</td>
                                    </tr>
                                    <tr>
                                        <td>Second Period</td>
                                        <td>9:19 - 10:11</td>
                                    </tr>
                                    <tr>
                                        <td>Third Period</td>
                                        <td>10:18 - 11:10</td>
                                    </tr>
                                    <tr>
                                        <td>Fourth Period</td>
                                        <td>11:17 - 1:05</td>
                                    </tr>
                                    <tr>
                                        <td colspan="2"><i>4A: lunch 11:17-12:07/class 12:07-1:05</i></td>
                                    </tr>
                                    <tr>
                                        <td colspan="2"><i>4B: class 11:17-12:15/lunch 12:15-1:05</i></td>
                                    </tr>
                                    <tr>
                                        <td>Fifth Period</td>
                                        <td>1:12 - 2:04</td>
                                    </tr>
                                    <tr>
                                        <td>Sixth Period</td>
                                        <td>2:11 - 3:03</td>
                                    </tr>
                                    <tr>
                                        <td>Pep Rally</td>
                                        <td>3:10 - 3:30</td>
                                    </tr>
                                    <tr>
                                        <td>Bus/Detention</td>
                                        <td>3:40</td>
                                    </tr>
                                </tbody>
                            </table>
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
