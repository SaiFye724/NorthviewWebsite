<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Orchestra | Northview High</title>
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
                    <h3>ORCHESTRAL PROGRAMS</h3>
                    <hr>
                    <h4>String Orchestra (Beginning Orch 1-4)</h4>
                    <p>String Orchestra emphasizes the mechanics of string instruments, note reading, rhythm, pitch discrimination, expression, and music literacy. Performance expectations increase at each sequential level. <b>This is a performance course chosen by students interested in learning to play or continuing to develop performance skills.</b> Rehearsals and performances held outside of the regular school hours are considered required coursework. Students are expected to participate in the course for the entire school year.</p>
                    <p><b>Advisor:</b> <a href="mailto:aucoin@fulton.k12.ga.us">Tim Aucoin</a><br>
                       <b>Requirements for membership:</b> enrollment in orchestra class<br>
                       <b>Dues:</b> none, miscellaneous expenses as needed for uniforms and accessories
                    </p>
                    <h4>Concert Orchestra (Intermediate Orch 1-4)</h4>
                    <p>Concert Orchestra emphasizes the mechanics of string instruments, note reading, rhythm, pitch discrimination, expression, and music literacy. Performance expectations increase at each sequential level. <b>This is a performance course chosen by students interested in the continued development of more advanced performance skills.</b> Rehearsals and performances held outside of the regular school hours are considered required coursework. Students are expected to participate in the course for the entire school year.</p>
                    <p><b>Advisor:</b> <a href="mailto:aucoin@fulton.k12.ga.us">Tim Aucoin</a><br>
                       <b>Requirements for membership:</b> enrollment in orchestra class<br>
                       <b>Dues:</b> none, miscellaneous expenses as needed for uniforms and accessories
                    </p>
                    <h4>Philharmonia (Advanced Orch 1-4)</h4>
                    <p>This ensemble emphasizes the mechanics of string instruments, note reading, rhythm, pitch discrimination, expression, and music literacy. In addition to technique, the chamber orchestra will focus on standard string orchestra repertoire. Performance expectations increase at each sequential level. <b>This is a performance course for advanced string students by audition only.</b> Rehearsals and performances held outside of the regular school hours are considered required coursework. Students are expected to participate in the course for the entire school year.</p>
                    <p><b>Advisor:</b> <a href="mailto:aucoin@fulton.k12.ga.us">Tim Aucoin</a><br>
                       <b>Requirements for membership:</b> enrollment in orchestra class<br>
                       <b>Dues:</b> none, miscellaneous expenses as needed for uniforms and accessories
                    </p>
                    <h4>Chamber Orchestra (Mastery Orch 1-4)</h4>
                    <p>This performing ensemble is designed for students who have advanced techniques and musical skills. Emphasis is placed on refining personal and ensemble technique to better explore the richness of the orchestra tradition. Performance schedules feature local and regional engagements. Rehearsals and performances held outside of class time are considered as gradable experiences for the course.</p>
                    <p><b>Advisor:</b> <a href="mailto:aucoin@fulton.k12.ga.us">Tim Aucoin</a><br>
                       <b>Requirements for membership:</b> enrollment in orchestra class<br>
                       <b>Dues:</b> none, miscellaneous expenses as needed for uniforms and accessories
                    </p>
                    <h4>Symphonic Orchestra (Mastery Orch 1-4)</h4>
                    <p>Wind, percussion, and string performers are eligible for this ensemble that is intended for students who possess advanced musical skills. Rehearsals are sometimes held outside of school hours for the full ensemble. Activities include local and regional performances.</p>
                    <p><b>Advisor:</b> <a href="mailto:aucoin@fulton.k12.ga.us">Tim Aucoin</a><br><br>
                       * For more specific information (ex. calendar, handbook, news, etc.) please click on the “Official Orchestra Site” link above.
                    </p>
                    <h4>Jazz Band</h4>
                    <p>This performing ensemble is designed for students who have advanced techniques and musical skills. Emphasis is placed on refining personal and ensemble technique to better explore the richness of America’s Jazz tradition. Performance schedules feature local and regional engagements. Rehearsals and performances are held outside of class time.</p>
                    <p><b>Advisor:</b> <a href="http://northviewhigh.com/index/dickersonk1@fulton.k12.ga.us">Kelly Dickerson</a> &amp; <a href="mailto:aucoin@fulton.k12.ga.us">Tim Aucoin</a><br>
                       <b>Requirements for membership:</b> enrollment in orchestra class<br>
                       <b>Dues:</b> none, miscellaneous expenses as needed for uniforms and accessories
                    </p>
                    <h4>Tri-M Music Honor Society</h4>
                    <p>Tri-M shares and supports the objectives of every dedicated music educator: to increase student and school involvement with music and unify the school music program. Students selected for membership are highly motivated musicians. Students must make application, be recommended by a faculty member, and successfully complete the screening process by the selection committee before being issued an invitation for membership. Selection to Tri-M is an outstanding accomplishment for a music student.</p>
                    <p><b>Advisor:</b> <a href="mailto:aucoin@fulton.k12.ga.us">Tim Aucoin</a><br>
                       <b>Requirements for membership:</b> enrollment in orchestra class<br>
                       <b>Dues:</b> none, miscellaneous expenses as needed for uniforms and accessories
                    </p>
                    <h4>Northview Chamber Society</h4>
                    <p>This club is designed for students who are self-motivated and have advanced techniques and musical skills. Emphasis is placed on service to the community by sharing musical experiences with a wide variety of audiences. Performance schedules feature local and regional engagements. Rehearsals and performances are held outside of class time.</p>
                    <p><b>Advisor:</b> <a href="mailto:aucoin@fulton.k12.ga.us">Tim Aucoin</a><br>
                       <b>Requirements for membership:</b> enrollment in orchestra class<br>
                       <b>Dues:</b> none, miscellaneous expenses as needed for uniforms and accessories
                    </p>
                    <h4>Additional Information</h4>
                    <p>Northview High School offers numerous opportunities for student performances through music, musical theater and drama. Many of our ensembles require enrollment in a particular music or drama course, while others meet as extracurricular activities. Participation is open to all students; however, some performing organizations require an audition both for placement and to maintain enrollment limits. Interested students should contact the director/advisor for specific information.</p>
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
