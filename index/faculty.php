<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Staff | Northview High</title>
        <link rel="shortcut icon" type="image/png" href="img/favicon.ico"/>
         
        <link rel="stylesheet" href="css/normalize.css">
        <link rel="stylesheet" href="css/custom.css">
        <link rel="stylesheet" href="font-awesome-4.7.0/css/font-awesome.min.css">
        <link href="https://fonts.googleapis.com/css?family=Montserrat|Raleway|" rel="stylesheet">
        
        <script src="js/jquery-3.1.1.min.js"></script>
        <script src="js/custom.js?v=1"></script>
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
                    <h3>STAFF DIRECTORY</h3>
                    <hr>
                    <input type="text" class="searchKey form-control" placeholder="Search for Teachers & Staff">
                    <table class="table table-hover table-bordered results faculty-table" cellspacing="0">
                       <thead>
                          <tr>
                             <th class="col-md-3 col-xs-3">Name</th>
                             <th class="col-md-5 col-xs-5">Tags</th>
                             <th class="col-md-5 col-xs-5">Activities</th>
                          </tr>
                          <tr style="padding: 10px;" class="warning no-result">
                             <td colspan="4" style="padding: 10px;"><i class="fa fa-warning"></i> No result</td>
                              </tr>
                           </thead>
                       <tbody>
                          <tr>
                             <td><a href="mailto:abelingl@fultonschools.org">Abeling, Leigh</a>
                                 <br>abelingl@fultonschools.org
                              </td>
                             <td>IRR</td>
                             <td></td>
                          </tr>
                          <tr>
                             <td><a href="mailto:aboulafia@fulton.k12.ga.us">Aboulafia, Sol</a>
                                 <br>aboulafia@fulton.k12.ga.us
                              </td>
                             <td>Honors Anatomy, Science</td>
                             <td>Department Chair</td>
                          </tr>
                          <tr>
                             <td><a href="mailto:alhadeffa@fultonschools.org">Alhadeff, Andy</a>
                                 <br>alhadeffa@fultonschools.org
                              </td>
                             <td>Counseling</td>
                             <td></td>
                          </tr>
                          <tr>
                             <td><a href="mailto:dillardl@fultonschools.org">Allen, Latasha</a>
                                 <br>dillardl@fultonschools.org
                              </td>
                             <td>Resource Officer</td>
                             <td></td>
                          </tr>
                          <tr>
                              <td><a href="mailto:andersonam@fultonschools.org">Anderson, Mark</a>
                              <br>andersonam@fultonschools.org
                              </td>
                             <td>Social Studies, US History, AP World History</td>
                             <td>Photography, Vibha, Model Arab League</td>
                          </tr>
                          <tr>
                              <td><a href="mailto:apps@fultonschools.org">Apps, Jean</a><br>apps@fultonschools.org</td>
                             <td>Clinic (T, W, F)</td>
                             <td></td>
                          </tr>
                           <tr>
                              <td><a href="mailto:arsovan@fultonschools.org">Arsovan, Christina</a><br>arsovan@fultonschools.org</td>
                             <td>Science, Physical Science Honors, Physics</td>
                             <td></td>
                          </tr>
                           <tr>
                              <td><a href="mailto:ashby@fultonschools.org">Ashby, Chip</a><br>ashby@fultonschools.org</td>
                             <td>Custodial Staff</td>
                             <td></td>
                          </tr>
                           <tr>
                              <td><a href="mailto:aucion@fulton.k12.ga.us">Aucion, Tim</a><br>aucion@fulton.k12.ga.us</td>
                             <td>Fine Arts, String Orchestra, Concert Orchestra, Philharmonia, Chamber Orchestra</td>
                             <td>Fine Arts Department Chair, Concert Orchestra Club Advisor, Chamber Orchestra Club Advisor, Symphonic Orchestra Club Advisor, NHS Orchestra Site</td>
                          </tr>
                           <tr>
                              <td><a href="mailto:austint@fultonschools.org">Austin, Trixie</a><br>austint@fultonschools.org</td>
                             <td>IRR</td>
                             <td></td>
                          </tr>
                           <tr>
                              <td><a href="mailto:baker3@fultonschools.org">Baker, Evan</a><br>baker3@fultonschools.org</td>
                             <td>Mathematics, SAT Prep, Calculus AB, Advanced Math Decision Making</td>
                             <td>Varsity Softball</td>
                          </tr>
                           <tr>
                              <td><a href="mailto:barr@fultonschools.org">Barr, Jennifer</a><br>barr@fultonschools.org</td>
                             <td>Health &amp; PE</td>
                             <td></td>
                          </tr>
                           <tr>
                              <td><a href="mailto:beasleyf@fultonschools.org">Beasley, Fred</a><br>beasleyf@fultonschools.org</td>
                             <td>Professional Support, IRR</td>
                             <td></td>
                          </tr>
                          <tr>
                              <td><a href="mailto:BelascoL@fultonschools.org">Belasco, Laura</a><br>BelascoL@fultonschools.org</td>
                             <td>Bookkeeper</td>
                             <td></td>
                          </tr>
                          <tr>
                              <td><a href="mailto:bhardwaj@fultonschools.org">Bhardwaj, Anu</a><br>bhardwaj@fultonschools.org</td>
                             <td>Science, Physical Science, Physical Science Honors</td>
                             <td></td>
                          </tr>
                          <tr>
                              <td><a href="mailto:BinghamR@fultonschools.org">Bingham, Rebecca</a><br>BinghamR@fultonschools.org</td>
                             <td>Science, Honors Chemistry, AP Chemistry</td>
                             <td>Medical Society Sponsor, Science Fair Coordinator, Project RAIN, Chemistry Club, Doctor Who Club, National Honors Society Sponsor</td>
                          </tr>
                          <tr>
                              <td><a href="mailto:birans@fultonschools.org">Biran, Sharmila</a><br>birans@fultonschools.org</td>
                             <td>Special Services</td>
                             <td></td>
                          </tr>
                          <tr>
                              <td><a href="mailto:bluej@fultonschools.org">Blue, Jacqueline</a><br>bluej@fultonschools.org</td>
                             <td>Professional Support, IRR</td>
                             <td>SADD</td>
                          </tr>
                          <tr>
                              <td><a href="mailto:boatwrightc@fultonschools.org">Boatwright, Cathy</a><br>boatwrightc@fultonschools.org</td>
                             <td>Professional Support, IRR</td>
                             <td></td>
                          </tr>
                          <tr>
                              <td><a href="mailto:bombard@fulton.k12.ga.us">Bombard, Steven</a><br>bombard@fulton.k12.ga.us</td>
                             <td>Mathematics, AP Calculus BC, Accelerated Precalculus</td>
                             <td>Boys Varsity Basketball Coach</td>
                          </tr>
                          <tr>
                              <td><a href="mailto:bowerf@fultonschools.org">Bowe, Renee</a><br>bowerf@fultonschools.org</td>
                             <td>IRR</td>
                             <td></td>
                          </tr>
                          <tr>
                              <td><a href="mailto:boydn@fultonschools.org">Boyd, Nikol</a><br>boydn@fultonschools.org</td>
                             <td>Assistant Principal</td>
                             <td></td>
                          </tr>
                          <tr>
                              <td><a href="mailto:braunl@fulton.k12.ga.us">Braun, Linda</a><br>braunl@fulton.k12.ga.us</td>
                             <td>World Languages, Spanish 3, Spanish 4</td>
                             <td></td>
                          </tr>
                          <tr>
                              <td><a href="mailto:brogdon@fulton.k12.ga.us">Brogdon, Cindy</a><br>brogdon@fulton.k12.ga.us</td>
                             <td>Health &amp; PE</td>
                             <td>Health and PE Department Chair</td>
                          </tr>
                          <tr>
                              <td><a href="mailto:brownrj@fultonschools.org">Brown, Raymond</a><br>brownrj@fultonschools.org</td>
                             <td>Social Studies, US History, AP US History, Film Studies</td>
                             <td></td>
                          </tr>
                          <tr>
                              <td><a href="mailto:brownthwaite@fulton.k12.ga.us">Brownthwaite, Kalan</a><br>brownthwaite@fulton.k12.ga.us</td>
                             <td>Social Studies, American Government, US History</td>
                             <td></td>
                          </tr>
                          <tr>
                              <td><a href="mailto:butera@fultonschools.org">Butera, Tiffany</a><br>butera@fultonschools.org</td>
                             <td>Curriculum Director, Assistant Principal</td>
                             <td></td>
                          </tr>
                          <tr>
                              <td><a href="mailto:carrolli@fultonschools.org">Carrol, Ian</a><br>carrolli@fultonschools.org</td>
                             <td>Career Technology, Audio Video Technology, Film</td>
                             <td></td>
                          </tr>
                          <tr>
                              <td><a href="mailto:carvella@fultonschools.org">Carvell, Allyson</a><br>carvella@fultonschools.org</td>
                             <td>Counselor</td>
                             <td></td>
                          </tr>
                          <tr>
                              <td><a href="mailto:cazir@fultonschools.org">Cazi, Ron</a><br>cazir@fultonschools.org</td>
                             <td>Custodial Staff</td>
                             <td></td>
                          </tr>
                          <tr>
                              <td><a href="mailto:Cianciola@fultonschools.org">Cianciola, Anthony</a><br>Cianciola@fultonschools.org</td>
                             <td>Health &amp; PE</td>
                             <td>Cross Country, Swimming</td>
                          </tr>
                          <tr>
                              <td><a href="mailto:Clawson@fulton.k12.ga.us">Clawson, Jeannette</a><br>Clawson@fulton.k12.ga.us</td>
                             <td>Fine Arts, Visual Arts, Intro to Arts, Ceramics 1, Ceramics 3, Drawing &amp; Painting 1, Drawing &amp; Painting 2, AP Studio 2D Design Portfolio, Advanced Painting 1</td>
                             <td>National Art Honor Society Sponsor</td>
                          </tr>
                          <tr>
                              <td><a href="mailto:conroyh@fultonschools.org">Conroy, Haley</a><br>conroyh@fultonschools.org</td>
                             <td>Language Arts, 10th Honors, 11th Regular</td>
                             <td></td>
                          </tr>
                          <tr>
                              <td><a href="mailto:copelandm1@fultonschools.org">Copeland, Mason</a><br>copelandm1@fultonschools.org</td>
                             <td>Fine Arts</td>
                             <td></td>
                          </tr>
                           <tr>
                              <td><a href="mailto:cordoves@fultonschools.org">Cordoves, Hernan</a><br>cordoves@fultonschools.org</td>
                             <td>Custodial Staff</td>
                             <td></td>
                          </tr>
                           <tr>
                              <td><a href="mailto:darlings@fultonschools.org">Darling, Sarah</a><br>darlings@fultonschools.org</td>
                             <td>Language Arts, SAT Prep, 10th Regular, 10th Honors</td>
                             <td></td>
                          </tr>
                           <tr>
                              <td><a href="mailto:davenportc1@fultonschools.org">Davenport, Chad</a><br>davenportc1@fultonschools.org</td>
                             <td>Social Studies, Economics</td>
                             <td>Head Track Coach</td>
                          </tr>

                           <tr>
                              <td><a href="mailto:dellc@fultonschools.org">Dell, Caroline</a><br>dellc@fultonschools.org</td>
                             <td>IRR</td>
                             <td></td>
                          </tr>
                           <tr>
                              <td><a href="mailto:dickersonk1@fulton.k12.ga.us">Dickerson, Kelly</a><br>dickersonk1@fulton.k12.ga.us</td>
                             <td>Fine Arts, Band (1, 2, 3, 4), Piano 1A, Piano 1B</td>
                             <td>Director of Bands and Jazz Studies</td>
                          </tr>
                           <tr>
                              <td><a href="mailto:disanom@fultonschools.org">DiSano, Marisa</a><br>disanom@fultonschools.org</td>
                             <td>Special Services</td>
                             <td></td>
                          </tr>
                           <tr>
                              <td><a href="mailto:dixonm@fulton.k12.ga.us">Dixon, Mike</a><br>dixonm@fulton.k12.ga.us</td>
                             <td>Social Studies, World History, World Issues, Sociology</td>
                             <td>Social Studies Department Chair, Varsity Football Coach, Varsity Basketball Coach, Car Club Sponsor, Titan to Titan</td>
                          </tr>
                           <tr>
                              <td><a href="mailto:downeyb@fultonschools.org">Downey, Brian</a><br>downeyb@fultonschools.org</td>
                             <td>Principal</td>
                             <td></td>
                          </tr>
                           <tr>
                              <td><a href="mailto:elliotv@fulton.k12.ga.us">Elliot, Vivian</a><br>elliotv@fulton.k12.ga.us</td>
                             <td>Data Clerk</td>
                             <td></td>
                          </tr>
                           <tr>
                              <td><a href="mailto:evansmm@fultonschools.org">Evans, Meredith</a><br>evansmm@fultonschools.org</td>
                             <td>Language Arts, 9th Regular</td>
                             <td></td>
                          </tr>
                           <tr>
                              <td><a href="mailto:FarrisA@fultonschools.org">Farris, Ashley</a><br>FarrisA@fultonschools.org</td>
                             <td>Mathematics, Algebra 1 Support, Accelerated Precalculus</td>
                             <td></td>
                          </tr>
                           <tr>
                              <td><a href="mailto:francisse@fulton.k12.ga.us">Francisse ,Catherine</a><br>francisse@fulton.k12.ga.us</td>
                             <td>World Languages, French 1, French 2 Honors, French 3 Honors, AP French</td>
                             <td>World Language Department Chair, French Honors Society Sponsor</td>
                          </tr>
                           <tr>
                              <td><a href="mailto:gloede@fulton.k12.ga.us">Gloede, Megan</a><br>gloede@fulton.k12.ga.us</td>
                             <td>Mathematics, Advanced Mathermatical Decision Making, Accelerated Precalculus</td>
                             <td>Cheer Coach</td>
                          </tr>
                           <tr>
                              <td><a href="mailto:godboler@fultonschools.org">Godbole, Radhika</a><br>godboler@fultonschools.org</td>
                             <td>World Languages, French 2, French 3, French 4, French 4 Honors, French 5 Honors</td>
                             <td></td>
                          </tr>
                           <tr>
                              <td><a href="mailto:golej@fultonschools.org">Gole, Jennifer</a><br>golej@fultonschools.org</td>
                             <td>Mathematics, Algebra 2, Precalculus</td>
                             <td>Cheer Coach</td>
                          </tr>
                           <tr>
                              <td><a href="mailto:grahamlc@fultonschools.org">Graham, Letitia</a><br>grahamlc@fultonschools.org</td>
                             <td>Counselor</td>
                             <td></td>
                          </tr>
                           <tr>
                              <td><a href="mailto:grayma@fultonschools.org">Gray, Megan</a><br>grayma@fultonschools.org</td>
                             <td>Language Arts, 9th Regular, 10th Regular</td>
                             <td>American Red Cross Club, Cheer Coach</td>
                          </tr>
                           <tr>
                              <td><a href="mailto:greggs@fultonschools.org">Gregg, Sonnie</a><br>greggs@fultonschools.org</td>
                             <td>Mathematics, Accelerated Geometry, Algebra 2, Algebra 2 Support</td>
                             <td>Project Darasani, Toast Masters</td>
                          </tr>
                           <tr>
                              <td><a href="mailto:hartmef@fultonschools.org">Hart, Megan</a><br>hartmef@fultonschools.org</td>
                             <td>Language Arts, </td>
                             <td>Kaleidoscope, Beta</td>
                          </tr>
                           <tr>
                              <td><a href="mailto:haslettj1@fultonschools.org">Haslett, James</a><br>haslettj1@fultonschools.org</td>
                             <td>IRR</td>
                             <td></td>
                          </tr>
                           <tr>
                              <td><a href="mailto:heddenv@fultonschools.org">Hedden, Victoria</a><br>heddenv@fultonschools.org</td>
                             <td>Mathematics, Calculus AB, Precalculus</td>
                             <td>Dance Team Advisor, Junior Class Council Co-Sponsor</td>
                          </tr>
                           <tr>
                              <td><a href="mailto:Ramage@fulton.k12.ga.us">Hefner-Ramage, Tracy</a><br>Ramage@fulton.k12.ga.us</td>
                             <td>Mathematics, Geometry</td>
                             <td>Varsity Boys Tennis Coach</td>
                          </tr>
                           <tr>
                              <td><a href="mailto:hendersontm@fultonschools.org">Henderson, Thomas</a><br>hendersontm@fultonschools.org</td>
                             <td>Social Studies, Us History, AP US History</td>
                             <td>Anime Club Sponsor, Club WISH</td>
                          </tr>
                           <tr>
                              <td><a href="mailto:HortonZ@fulton.k12.ga.us">Horton, Zandra</a><br>HortonZ@fulton.k12.ga.us</td>
                             <td>World Languages, Spanish 3 Honors, Spanish 4 Honors</td>
                             <td>Northview Cancer Society, ESPN - Español Para Los Niños</td>
                          </tr>
                           <tr>
                              <td><a href="mailto:hsuy@fultonschools.org">Hsu, Yuyun D</a><br>hsuy@fultonschools.org</td>
                             <td></td>
                             <td>Co-Bilingual Liaison</td>
                          </tr>
                           <tr>
                              <td><a href="mailto:hunterr@fulton.k12.ga.us">Hunter, Robert</a><br>hunterr@fulton.k12.ga.us</td>
                             <td>Assistant Principal</td>
                             <td></td>
                          </tr>
                           <tr>
                              <td><a href="mailto:isaacsk@fultonschools.org">Isaacs, Kiersten</a><br>isaacsk@fultonschools.org</td>
                             <td>Language Arts, 9th Honors English, 11th Regular</td>
                             <td></td>
                          </tr>
                           <tr>
                              <td><a href="mailto:jamescm@fultonschools.org">James, Christopher</a><br>jamescm@fultonschools.org</td>
                             <td>Social Studies, AP Government, Civics</td>
                             <td></td>
                          </tr>
                           <tr>
                              <td><a href="mailto:janess@fulton/k12.ga.us">Janess, Camille</a><br>janess@fulton/k12.ga.us</td>
                             <td>Science, Earth Systems, Physical Science</td>
                             <td>Crosswalk Bible Study Club Sponsor, Dance and Step Team, Northview NaCl Chapter</td>
                          </tr>
                           <tr>
                              <td><a href="mailto:janessc@fultonschools.org">Janess, Cara</a><br>janessc@fultonschools.org</td>
                             <td>Career Technology, Engineering Concepts, Foundations of Engineering, Introduction to Drafting and Design, Architectural Drawing and Design Engineering Analysis</td>
                             <td></td>
                          </tr>
                           <tr>
                              <td><a href="mailto:jarabekb@fultonschools.org">Jarabek, Brooke</a><br>jarabekb@fultonschools.org</td>
                             <td>Counseling Secretary</td>
                             <td></td>
                          </tr>
                            <tr>
                              <td><a href="mailto:JordanJosh@fultonschools.org">Jordan, Josh</a><br>JordanJosh@fultonschools.org</td>
                             <td>Language Arts, Contemporary Lit, 12th Regular</td>
                             <td>Quake Crew</td>
                          </tr>
                             <tr>
                              <td><a href="mailto:joyner@fultonschools.org">Joyner, Corri</a><br>joyner@fultonschools.org</td>
                             <td>School Psychologist</td>
                             <td></td>
                          </tr>
                             <tr>

                              <td><a href="mailto:kamibayashim@fultonschools.org">Kamibayashi, Matthew</a><br>kamibayashim@fultonschools.org</td>
                             <td>Language Arts, American Literature, 10th Honors Literature</td>
                             <td></td>
                          </tr>
                             <tr>
                              <td><a href="mailto:keahey@fulton.k12.ga.us">Keahey, Carol</a><br>keahey@fulton.k12.ga.us</td>
                             <td>Cafeteria Manager</td>
                             <td></td>
                          </tr>
                             <tr>
                              <td><a href="mailto:kempj@fulton/k12.ga.us">Kemp, Christian</a><br>kempj@fulton/k12.ga.us</td>
                             <td>Science, AP Physics C, AP Physics 1</td>
                             <td>Chess Club Sponsor, Academic Club</td>
                          </tr>
                             <tr>
                              <td><a href="mailto:kohanimj@fultonschools.org">Kohanim, Jordan</a><br>kohanimj@fultonschools.org</td>
                             <td>Language Arts, 9th Honors, Speech, 11th Honors</td>
                             <td>Philosophy Club, Debate/Speech Club</td>
                          </tr>
                             <tr>
                              <td><a href="mailto:kopecpm@fultonschools.org">Kopec, Tricia</a><br>kopecpm@fultonschools.org</td>
                             <td>Front Office</td>
                             <td></td>
                          </tr>
                             <tr>
                              <td><a href="mailto:kratowiczt@fultonschools.org">Kratowicz, Tom</a><br>kratowiczt@fultonschools.org</td>
                             <td>Science, Biology, Chemistry</td>
                             <td></td>
                          </tr>
                             <tr>
                              <td><a href="mailto:kreigera@fultonschools.org">Kreiger, Ana</a><br>kreigera@fultonschools.org</td>
                             <td>World Languages, Spanish 2, Spanish 2 Honors</td>
                             <td></td>
                          </tr>
                             <tr>
                              <td><a href="mailto:LakeE@fultonschools.org">Lake, Elizabeth</a><br>LakeE@fultonschools.org</td>
                             <td>Language Arts, oth Honors, AP Language, Acting 1 / Fundamentals of Theatre, Advanced Drama / Production</td>
                             <td>Improv Club Advisor, Mock Trial Club Advisor, International Thespian Society Sponsor, Northview Theatre Company, Gay Straight Alliance</td>
                          </tr>
                             <tr>
                              <td><a href="mailto:lees3@fultonschools.org">Lee, Sunjune</a><br>lees3@fultonschools.org</td>
                             <td>ESOL</td>
                             <td>Korean Culture Club Sponsor</td>
                          </tr>
                             <tr>
                              <td><a href="mailto:LeeAS@fulton.k12.ga.us">Lee, Scott</a><br>LeeAS@fulton.k12.ga.us</td>
                             <td>Science, Physics, Astronomy</td>
                             <td>JV Boys Soccer Coach</td>
                          </tr>
                             <tr>
                              <td><a href="mailto:lemonsa@fultonschools.org">Lemons, Amy</a><br>lemonsa@fultonschools.org</td>
                             <td>Assistant Principal</td>
                             <td></td>
                          </tr>
                             <tr>
                              <td><a href="mailto:lumpkin@fultonschools.org">Lumpkin, Robert</a><br>lumpkin@fultonschools.org</td>
                             <td>Science, Forensics, Chemistry</td>
                             <td></td>
                          </tr>
                             <tr>
                              <td><a href="mailto:macdonald@fultonschools.org">MacDonald, John</a><br>macdonald@fultonschools.org</td>
                             <td>Social Studies, World History, US History</td>
                             <td></td>
                          </tr>
                             <tr>
                              <td><a href="mailto:martinm1@fultonschools.org">Martin, Micheal</a><br>martinm1@fultonschools.org</td>
                             <td>TAG</td>
                             <td>Model United Nations Sponsor, Philosophy Club Sponsor</td>
                          </tr>
                             <tr>
                              <td><a href="mailto:mccalls@fulton.k12.ga.us">MecCall, Stephanie</a><br>mccalls@fulton.k12.ga.us</td>
                             <td>Career Technology, Princ Acct/Honors, Intro to Buisness and Technology, Work Based Learning</td>
                             <td>FBLA Club Advisor, Senior Class Council Advisor, Career Technology Department Chair</td>
                          </tr>
                             <tr>
                              <td><a href="mailto:mccallk@fultonschools.org">McCall, Kevin</a><br>mccallk@fultonschools.org</td>
                             <td>Career Technology</td>
                             <td>Career Tech Department, Textbook Coordinator, Boys Lacrosse Coach, Business Manager</td>
                          </tr>
                             <tr>
                              <td><a href="mailto:mccarthyd@fultonschools.org">McCarthy, Donna</a><br>mccarthyd@fultonschools.org</td>
                             <td>Part-Time Professional Assistant</td>
                             <td></td>
                          </tr>
                             <tr>
                              <td><a href="mailto:mcclainb@fultonschools.org">Mclain, B. Paul</a><br>mcclainb@fultonschools.org</td>
                             <td>Fine Arts - Drama</td>
                             <td>Improv Club Advisor, Northview Theatre Company Advisor</td>
                          </tr>
                             <tr>
                              <td><a href="mailto:mcclunga@fultonschools.org">McClung, Alicia</a><br>mcclunga@fultonschools.org</td>
                             <td>School Social Worker</td>
                             <td></td>
                          </tr>
                             <tr>
                              <td><a href="mailto:mccombej@fultonschools.org">McCombe, John</a><br>mccombej@fultonschools.org</td>
                             <td>Social Studies, World History, Economics</td>
                             <td>Varsity Soccer</td>
                          </tr>
                             <tr>
                              <td><a href="mailto:MccoyG@fulton.k12.ga.us">McCoy, Gary</a><br>MccoyG@fulton.k12.ga.us</td>
                             <td>Health &amp; PE, Health, Weight Training 1, Weight Training 2, Weight Training 3, Lifetime Sports</td>
                             <td></td>
                          </tr>
                             <tr>
                              <td><a href="mailto:mcdanielsl@fultonschools.org">McDaniel, Scotty</a><br>mcdanielsl@fultonschools.org</td>
                             <td>Atheletic Director</td>
                             <td></td>
                          </tr>
                             <tr>
                              <td><a href="mailto:mcleroyr@fultonschools.org">McLeroy, Rachel</a><br>mcleroyr@fultonschools.org</td>
                             <td>Fine Arts, Visual Arts, Intro to Art, Sculpture 1, Sculpture 2, Jewelry Design 1, Photo Design 1, Photo Design 2, Photo Design 3</td>
                             <td>Enviornmental Club</td>
                          </tr>
                             <tr>
                              <td><a href="mailto:moores@fultonschools.org">Moore, Shawn</a><br>moores@fultonschools.org</td>
                             <td>IRR</td>
                             <td></td>
                          </tr>
                             <tr>
                              <td><a href="mailto:morgank@fultonschools.org">Morgan, Katie</a><br>morgank@fultonschools.org</td>
                             <td>Career Technology, Intro to Fashion Marketing, Principles of Marketing, Web Design</td>
                             <td>FBLA Advisor, NHS Web Master</td>
                          </tr>
                             <tr>
                              <td><a href="mailto:MorganC3@fultonschools.org">Morgan, Sean</a><br>MorganC3@fultonschools.org</td>
                             <td>Career Technology, Health Science</td>
                             <td></td>
                          </tr>
                             <tr>
                              <td><a href="mailto:morrisd@fultonschools.org">Morris, Denise</a><br>morrisd@fultonschools.org</td>
                             <td>Custodial Staff</td>
                             <td></td>
                          </tr>
                             <tr>
                              <td><a href="mailto:mucki@fultonschools.org">Muck, Iris</a><br>mucki@fultonschools.org</td>
                             <td>World Languages, German 1, Garman 2 Honors, German 3 Honors, German 4 Honors, German 5 Honors, AP German</td>
                             <td></td>
                          </tr>
                             <tr>
                              <td><a href="mailto:Muller@fulton.k12.ga.us">Muller, Joann</a><br>Muller@fulton.k12.ga.us</td>
                             <td>Professional Support</td>
                             <td></td>
                          </tr>
                             <tr>
                              <td><a href="mailto:neff@fultonschools.org">Neff, Wendy</a><br>neff@fultonschools.org</td>
                             <td>Mathematics, Geometry Support, Accelerated Geometry / Algebra 2</td>
                             <td></td>
                          </tr>
                             <tr>
                              <td><a href="mailto:niehaus@fulton.k12.ga.us">Niehaus, Jennifer</a><br>niehaus@fulton.k12.ga.us</td>
                             <td>Mathematics, AP Statistics</td>
                             <td>Math Department Chair, GHP Prep Advisor, Aid Special Citizens Club, Committed Radical Christians, Culturual Diffusion Club, FCA</td>
                          </tr>
                           <tr>
                              <td><a href="mailto:oharas@fultonschools.org">O'Hara, Stephen</a><br>oharas@fultonschools.org</td>
                             <td>IRR</td>
                             <td>Lacrosse Coach</td>
                          </tr>
                           <tr>
                              <td><a href="mailto:Owens@fultonschools.org">Owens, Sandy</a><br>Owens@fultonschools.org</td>
                             <td>Counselor</td>
                             <td>Counseling Department Chair</td>
                          </tr>
                           <tr>
                              <td><a href="mailto:parhamk1@fultonschools.org">Parham, Kirk</a><br>parhamk1@fultonschools.org</td>
                             <td>IRR</td>
                             <td></td>
                          </tr>
                           <tr>
                              <td><a href="mailto:pauld@fultonschools.org">Paul, Darryl</a><br>pauld@fultonschools.org</td>
                             <td>Media Center Specialist</td>
                             <td>Model United Nations Sponsor</td>
                          </tr>
                           <tr>
                              <td><a href="mailto:pearson@fultonschools.org">Pearson, Donnetta</a><br>pearson@fultonschools.org</td>
                             <td>IRR</td>
                             <td>Track Coach</td>
                          </tr>
                            <tr>
                              <td><a href="mailto:Peeksd@fultonschools.org">Peek, Denise</a><br>Peeksd@fultonschools.org</td>
                             <td>Career Technology, AP Computer Science</td>
                             <td>ASTRA Sponsor, Future Educators of America Sponsor</td>
                          </tr>
                           <tr>
                              <td><a href="mailto:petriej@fultonschools.org">Petrie, John</a><br>petriej@fultonschools.org</td>
                             <td>IRR</td>
                             <td></td>
                          </tr>
                           <tr>
                              <td><a href="mailto:popeT@fultonschools.org">Pope, Tania</a><br>popeT@fultonschools.org</td>
                             <td>Language Arts, AP Language, Writer's Workshop, Literary Magazine</td>
                             <td>Black History Committee Sponsor, Talk Girl Effect Sponsor</td>
                          </tr>
                           <tr>
                              <td><a href="mailto:post@fulton.k12.ga.us">Post, Ron</a><br>post@fulton.k12.ga.us</td>
                             <td>Science, Anatomy, Biology</td>
                             <td></td>
                          </tr>
                           <tr>
                              <td><a href="mailto:PowellDM@fultonschools.org">Powell, Donna</a><br>PowellDM@fultonschools.org</td>
                             <td>IRR</td>
                             <td></td>
                          </tr>
                           <tr>
                              <td><a href="mailto:quinniet@fultonschools.org">Quinnie, Thomas</a><br>quinniet@fultonschools.org</td>
                             <td>Custodial Staff</td>
                             <td></td>
                          </tr>
                           <tr>
                              <td><a href="mailto:Rawlin@fulton.k12.ga.us">Rawlin, Brian</a><br>Rawlin@fulton.k12.ga.us</td>
                             <td>Language Arts, AP Literature, Yearbook</td>
                             <td>Language Arts Department Co-Chair, Student Council Advisor, Lacrosse Head Coach</td>
                          </tr>
                           <tr>
                              <td><a href="mailto:redmondc@fultonschools.org">Redmond, Cherryl</a><br>redmondc@fultonschools.org</td>
                             <td>Clinic</td>
                             <td></td>
                          </tr>
                           <tr>
                              <td><a href="mailto:Reilly@fultonschools.org">Reilly, Cara</a><br>Reilly@fultonschools.org</td>
                             <td>Counselor</td>
                             <td></td>
                          </tr>
                           <tr>
                              <td><a href="mailto:rettker@fultonschools.org">Rettker, Barbara</a><br>rettker@fultonschools.org</td>
                             <td>Professional Support, Principal's Secretary</td>
                             <td></td>
                          </tr>
                           <tr>
                              <td><a href="mailto:rikera@fultonschools.org">Riker, Andrea</a><br>rikera@fultonschools.org</td>
                             <td>Mathematics, Algebra Support TT, AP statistics, Accelerated Precalculus</td>
                             <td></td>
                          </tr>
                           <tr>
                              <td><a href="mailto:Rodriguez@fulton.k12.ga.us">Rodriguez, Patricia</a><br>Rodriguez@fulton.k12.ga.us</td>
                             <td>World Languages, Spanish 2 Honors, AP Spanish</td>
                             <td>National Spanish Honor Soiety Advisor, Youth Empowerment Society Sponsor, 121 Reach Sponsor, Making a Difference, Habitat for Humanity, Key Club</td>
                          </tr>
                           <tr>
                              <td><a href="mailto:RogersLA@fulton.k12.ga.us">Rogers, Laurie</a><br>RogersLA@fulton.k12.ga.us</td>
                             <td>Science, AP Enviornmental Science, Honors Chemistry</td>
                             <td>Enviornmental Brigade Sponsor, HOSA Sponsor, Kaleidoscope Sponsor, Make-a-Wish Sponsor</td>
                          </tr>
                           <tr>
                              <td><a href="mailto:rogmans@fultonschools.org">Rogman, Stephanie</a><br>rogmans@fultonschools.org</td>
                             <td>Science, Honors Biology, Biology</td>
                             <td></td>
                          </tr>
                           <tr>
                              <td><a href="mailto:ruckerd@fultonschools.org">Rucker, Drew</a><br>ruckerd@fultonschools.org</td>
                             <td>Resource Officer</td>
                             <td></td>
                          </tr>
                           <tr>
                              <td><a href="mailto:satherl@fultonschools.org">Sather, Laura</a><br>satherl@fultonschools.org</td>
                             <td>Professional Support</td>
                             <td></td>
                          </tr>
                           <tr>
                              <td><a href="mailto:schmidta@fultonschools.org">Schmidt, Amanda</a><br>schmidta@fultonschools.org</td>
                             <td>Mathematics, Algebra 1, Geometry, Geometry Support TT</td>
                             <td></td>
                          </tr>
                           <tr>
                              <td><a href="mailto:senderd@fultonschools.org">Sender, Donagh</a><br>senderd@fultonschools.org</td>
                             <td>Professional Support</td>
                             <td></td>
                          </tr>
                           <tr>
                              <td><a href="mailto:SilverL@fultonschools.org">Silver, Lincoln</a><br>SilverL@fultonschools.org</td>
                             <td>Social Studies, AP Micronomics, Economics</td>
                             <td></td>
                          </tr>
                           <tr>
                              <td><a href="mailto:simonsenr@fultonschools.org">Simonsen, Rebecca</a><br>simonsenr@fultonschools.org</td>
                             <td>Science, Honors Biology, AP Biology</td>
                             <td></td>
                          </tr>
                           <tr>
                              <td><a href="mailto:Stadler@fultonschools.org">Stadler, Ryan</a><br>Stadler@fultonschools.org</td>
                             <td>World Languages</td>
                             <td></td>
                          </tr>
                           <tr>
                              <td><a href="mailto:stanhopeb@fultonschools.org">Stanhope, Brenda</a><br>stanhopeb@fultonschools.org</td>
                             <td>Professional, Support</td>
                             <td></td>
                          </tr>
                           <tr>
                              <td><a href="mailto:stone@fulton.k12.ga.us">Stone, Brian</a><br>stone@fulton.k12.ga.us</td>
                             <td>Mathematics, Accelerated Algebra 1, Geometry, Accelerated Precalculus</td>
                             <td>Math Team Advisor, GHP Advisor</td>
                          </tr>
                           <tr>
                              <td><a href="mailto:sun@fultonschools.org">Sun, Xuefei</a><br>sun@fultonschools.org</td>
                             <td>World Languages, Chinese 1, Chinese 2, Chinese 2 Honors</td>
                             <td></td>
                          </tr>
                           <tr>
                              <td><a href="mailto:talberte@fultonschools.org">Talbert, Odette</a><br>talberte@fultonschools.org</td>
                             <td>Professional Support</td>
                             <td>Athletic Secretary</td>
                          </tr>
                           <tr>
                              <td><a href="mailto:ThomsonK2@fulton.k12.ga.us">Thompson, Kathryn</a><br>ThomsonK2@fulton.k12.ga.us</td>
                             <td>IRR</td>
                             <td>Junior Class Council Advisor, Go Green Team (Recycling) Sponsor</td>
                          </tr>
                           <tr>
                              <td><a href="mailto:ThomsonJ@fultonschools.org">Thomson, James</a><br>ThomsonJ@fultonschools.org</td>
                             <td></td>
                             <td>Head Varsity Football Coach</td>
                          </tr>
                           <tr>
                              <td><a href="mailto:UlrichA@fulton.k12.ga.us">Ulrich, Ashley</a><br>UlrichA@fulton.k12.ga.us</td>
                             <td>Language Arts, 9th Honors, 10th Honors, AP Language</td>
                             <td>Language Arts Department Co-Chair, Debate Coach</td>
                          </tr>
                           <tr>
                              <td><a href="mailto:WalkerSh@fultonschools.org">Walker, Susan</a><br>WalkerSh@fultonschools.org</td>
                             <td>Assistant Principal</td>
                             <td></td>
                          </tr>
                           <tr>
                              <td><a href="mailto:Weatherfordc@fultonschools.org">Weatherford, Cindy</a><br>Weatherfordc@fultonschools.org</td>
                             <td>Special Services</td>
                             <td></td>
                          </tr>
                           <tr>
                              <td><a href="mailto:whitehurste@fultonschools.org">Whitehurst, Elizabeth</a><br>whitehurste@fultonschools.org</td>
                             <td>Professional Support</td>
                             <td></td>
                          </tr>
                           <tr>
                              <td><a href="mailto:whitlatch@fulton.k12.ga.us">Whitlatch, Diane</a><br>whitlatch@fulton.k12.ga.us</td>
                             <td>IRR</td>
                             <td></td>
                          </tr>
                           <tr>
                              <td><a href="mailto:wilkensa@fultonschools.org">Wilkens, Aaron</a><br>wilkensa@fultonschools.org</td>
                             <td>Language Arts, 10th Regular</td>
                             <td>Varsity Baseball</td>
                          </tr>
                           <tr>
                              <td><a href="mailto:WilsonM3@fultonschools.org">Wilson, Monica</a><br>WilsonM3@fultonschools.org</td>
                             <td>World Languages, Spanish 3, Spanish 3 Honors</td>
                             <td></td>
                          </tr>
                           <tr>
                              <td><a href="mailto:wong@fultonschools.org">Wong, Mel</a><br>wong@fultonschools.org</td>
                             <td>Professional Support, Virtual Lab Para</td>
                             <td></td>
                          </tr>
                           <tr>
                              <td><a href="mailto:yarboroughc@fultonschools.org">Yarborough, Chris</a><br>yarboroughc@fultonschools.org</td>
                             <td>Language Arts. 10th Literature</td>
                             <td>Messenger, Sports Journalism</td>
                          </tr>
                           <tr>
                              <td><a href="mailto:yard@fultonschools.org">Yard, Ryan</a><br>yard@fultonschools.org</td>
                             <td>Technology Specialist</td>
                             <td></td>
                          </tr>
                           <tr>
                              <td><a href="mailto:yashina@fulton.k12.ga.us">Yashina, Yelena</a><br>yashina@fulton.k12.ga.us</td>
                             <td>ESOL</td>
                             <td>Korean Club Advisor</td>
                          </tr>
                           <tr>
                              <td><a href="mailto:YiJoy@fultonschools.org">Yi, Joy</a><br>YiJoy@fultonschools.org</td>
                             <td>Special Services</td>
                             <td></td>
                          </tr>
                           <tr>
                              <td><a href="mailto:Zavlanoss@fultonschools.org">Zavlanos, Stephanie</a><br>Zavlanoss@fultonschools.org</td>
                             <td>Social Studies, AP Government and Politics, World History, American Government</td>
                             <td>Jewish Student Union Sponsor</td>
                          </tr>
                           <tr>
                              <td><a href="mailto:zoul@fultonschools.org">Zou, Lily</a><br>zoul@fultonschools.org</td>
                             <td>World Languages, Chinese 3, Chinese 3 Honors, Chinese 4, Chinese 4 Honors, AP Chinese</td>
                             <td></td>
                          </tr>

                       </tbody>
                    </table>
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