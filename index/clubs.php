<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Clubs | Northview High</title>
        <link rel="shortcut icon" type="image/png" href="img/favicon.ico"/>
         
        <link rel="stylesheet" href="css/normalize.css">
        <link rel="stylesheet" href="css/custom.css?v=1">
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
                    <h3>CLUB DIRECTORY</h3>
                    <hr>
                    <input type="text" class="searchKey form-control" placeholder="Search for Clubs & Academic Orgs">
                    <table class="table table-hover table-bordered results clubs-table" cellspacing="0">
                       <thead>
                          <tr>
                             <th width="116" class="col-md-2 col-xs-2">Name</th>
                             <th width="123" class="col-md-2 col-xs-2">Contacts</th>
                             <th width="192" class="col-md-3 col-xs-3">Meetings</th>
                             <th width="1000" class="col-md-5 col-xs-5">Description</th>
                          </tr>
                          <tr style="padding: 10px;" class="warning no-result">
                             <td colspan="5" style="padding: 10px;"><i class="fa fa-warning"></i> No result</td>
                          </tr>
                       </thead>
                       <tbody>
                          <tr>
                            <td>121 Reach</td>
                            <td>
                                Ridhi Ajmera,
                              <br><b>Farris</b>
                            </td>
                            <td>
                               <p>-Wednesday’s after school<br>
                                 - At River Trail Middle School </p></td>
                            <td>
                                Volunteering Northview students, tutor and mentor students at River Trail Middle School. Northview students will go to River Trail on Wednesdays and correspond individually with a student and help them with anything they are struggling with.
                            </td>
                          </tr>
                          <tr>
                            <td>Aim Higher NHS</td>
                            <td>Sandeep Yerraguntha,<br>
                            Vishaal Motla, <b>Peek</b></td>
                            <td>
                                <p>-Every other Tuesday<br>
                                  -Room 434

                                    <br>
                              -One hour </p></td>
                            <td>
                                This club is designed to mainly help newcomers for the SAT, so they understand the type of math questions they are dealing with, in order to achieve a perfect score. We have around 60 tips and great practice material that can significantly boost scores.
                            </td>
                          </tr>
                          <tr>
                            <td>Amnesty</td>
                            <td>
                                Farhan Juneja,
                                <br>
                                <b>Stadler</b></td>
                            <td><p>-Wednesdays<br>
                              -Room 636 at 7:40am</p></td>
                            <td>
                                The goal of this club is to spread human rights awareness across campus, for those who have never been involved in social advocacy and for those who are interested in learning more. Amnesty International is a worldwide non-profit organization, which unites people in the campaign for international recognized human rights. By building a strong team and constantly finding ways to get people involved, we can mobilize our community to be a powerful force for dignity and justice.
                            </td>
                          </tr>
                          <tr>
                            <td>Anime Club</td>
                            <td>
                                Yendi Neil,
                                <br>
                              <b>Henderson </b>
                            </td>
                            <td><p>-Thursdays<br>
                            -3:45 p.m.<br>
                            -Room 305</p></td>
                            <td>
                                The anime club is a place where people can hang out with others who have the same interest while watching anime, playing activities, and learn different parts of Japanese culture. All students welcome.
                            </td>
                          </tr>
                          <tr>
                            <td>ARO (Angel Rescue Organization)</td>
                            <td><p>Thanu Avirneni, Harsha Ramesh,
                                <br>
                                <b>Simonsen and Rogman</b>
                            </p></td>
                            <td>
                               -Tuesdays or Thursdays after school
                                 <br>
                            -Room 105 or 202 </td>
                            <td>ARO, which stands for Angel House Rescue Orphanage, is a popular mission in India, which helps aid the abandoned orphans in India. We would like to start a chapter in our school to also help bring orphans in Indian from slums into secure and safe arms for a bright, successful future.
                            </td>
                          </tr>
                          <tr>
                            <td>ASTRA</td>
                            <td><p>Shota Nakagawa,
                              <br>
                              <b>Peek</b>
                            </p></td>
                            <td><p>-3:50 p.m.<br>
                            -Room 435</p></td>
                            <td>ASTRA is the youth branch of the Altrusa International service organization.  ASTRA members actively volunteer to help others in the community in many different ways whether it is serving in soup kitchens, animal shelters, or assisting other organizations with fundraising activities like walk-a- thons.

                            </td>
                          </tr>
                          <tr>
                            <td>Northview Badminton</td>
                            <td><p>Sruti Chitluri, <br>
                                <b>Kamibayashi</b>
                            </p></td>
                            <td><p>-Wednesday
                                <br>
                              -3:45 to 5:30 p.m.<br>
                            -Frisbee field or<br>
                            cafeteria</p></td>
                            <td>Northview Badminton is a club with the intention of teaching kids with all levels of experience in badminton how to enhance their playing abilities. The club will teach people how to play badminton (if they don’t already know how to), and host tournaments.</td>
                          </tr>
                          <tr>
                            <td>Beta Club</td>
                            <td><p>Bill Zhang,<br>
                            Rohan Sohani,<br>
                                <b>Hart</b></p></td>
                            <td>
                              -Last Monday of the month<br>
                              -7:45 a.m.<br>
                              -Auditorium
                            <td>Beta club is a national service club dedicated to the community and the school. We have a minimum GPA requirement as well as minimum service hour requirement that members must fulfill per semester. We offer select service opportunities for members as well as communicate numerous external service opportunities for our members.</td>
                          </tr>
                          <tr>
                            <td>NHS Break Dance</td>
                            <td><p>Vivian Luu,<br>
                                <b>Gaillard and W. Henderson</b></p></td>
                            <td><p>-Wednesdays (231) and Fridays (233) <br>
                            after school</p></td>
                            <td>Break club, once a small group of dancers, became a bigger community, helping people from different backgrounds to unite and communicate by dancing. The club also helps new dancers learn and become even better.</td>
                          </tr>
                          <tr>
                            <td>Cancer Society</td>
                            <td><p>Sania Qazi,<br>
                                <b>Horton</b></p></td>
                            <td>-Horton’s Room</td>
                            <td>A club designed to spread awareness for certain types of cancer. Raises money for people who do not have the resources to deal with cancer. Fundraisers and awareness days to help raise money.&nbsp;</td>
                          </tr>
                          <tr>
                            <td>Chemistry Club</td>
                            <td><p>Seungmin Chung,<br>
                                <b>Baker and Rogman</b></p></td>
                            <td><p>-Every Thursday<br>
                              -3:45p.m.<br>
                            -Room 304 </p></td>
                            <td>We aim to encourage students to explore the many ways that chemistry connects them to the world around us through experiments, observations, and guest visits to enhance their understanding of chemistry while enjoying themselves.&nbsp;</td>
                          </tr>
                          <tr>
                            <td>Chess Club</td>
                            <td><p>Prashanth Sampathkumar, Nithin Daniel,<br>
                                <b>Kemp</b></p></td>
                            <td><p>-Every other Thursday<br>
                            -7:40 a.m.<br>
                            -Room 135</p></td>
                            <td>Chess Club serves those who want to participate in tournaments through the state. We are all nationally rated players who will represent the school.&nbsp;</td>
                          </tr>
                          <tr>
                            <td>Child Rights and You (CRY)</td>
                            <td>Ria Puri,<br>
                                <b>Bhardwaj</b></td>
                            <td><p>-Every other Tuesday after school</p></td>
                            <td>CRY Northview is a branch of the CRY-Atlanta Action Center that focuses on providing necessities to underprivileged children such as education, healthcare, food, and sanitary water. CRY also raises money to prevent the exploitation of children in underdeveloped countries.nbsp;</td>
                          </tr>
                          <tr>
                            <td>Chinese Culture Club</td>
                            <td><p>Judy Li, Sally Pan,<br>
                            <b>Zou</b></p></td>
                            <td><p>-Friday after school -Room 640</p></td>
                            <td>Chinese Culture Club brings together students of all backgrounds to participate in and learn about Chinese Culture through assorted events and activities. In addition, we aim to support organizations like Hand in Hand Chinese, and help National Chinese Honor Society service projects.&nbsp;</td>
                          </tr>
                          <tr>
                            <td>Club Will to Live</td>
                            <td><p>Matthew Pacifico,
                              <br>
                            <b>Wilkens</b></p></td>
                            <td><p>-Tuesdays and Thursdays after school</p></td>
                            <td>Spread awareness for Will to Live Foundation. Puts on different events throughout the year to improve the lives of the students at Northview and to spread our message Life Teammates.&nbsp;</td>
                          </tr>
                          <tr>
                            <td>Comic Book Club</td>
                            <td><p>Arianna Anthony,
                              <br>
                              <b>Isaacs</b>
                            </p></td>
                            <td><p>-Wednesday afternoons<br>
                            -Twice a month</p></td>
                            <td>An energetic environment where students can discuss, trade, and learn about comics. All can join.&nbsp;</td>
                          </tr>
                          <tr>
                            <td>Committed Radical Christians</td>
                            <td><p>Joannah Park
                                <br>
                                <b>TBD</b>
                            </p></td>
                            <td><p>-Wednesdays<br>
                            -7:45 a.m.<br>
                            -TBD where</p></td>
                            <td>CRC is a club that welcomes all to fellowship and digging deep into the Gospel of Jesus Christ. We strive to be a light in everything we do, offering a shift from the pressures of high school. Together, we encourage one another to share our faith and love for Northview as God loves it.&nbsp;</td>
                          </tr>
                          <tr>
                            <td>Crescendo Club</td>
                            <td><p>Julie Xiang,
                                <br>
                            <b>Darling</b></p></td>
                            <td><p>-Thursday afternoons -Room 504</p></td>
                            <td>A non-profit music tutoring club that visits River Trail Middle School every week to help middle school band (and hopefully orchestra this year) students by offering them guidance in playing their musical instruments.&nbsp;</td>
                          </tr>
                          <tr>
                            <td>Northview Cricket Fan Club</td>
                            <td><p>Shonit Kaluri,
                                <br>
                            <b>McCombe</b></p></td>
                            <td><p>-Wednesdays <br>
                            -Room 832</p></td>
                            <td>The Northview Cricket Fan Club is a club designed to spread awareness of Cricket and having fun. We play cricket with students from other clubs. All can join.&nbsp;</td>
                          </tr>
                          <tr>
                            <td>Doctor Who Club</td>
                            <td><p>Mackenzie Talbert, Christopher Pierce,
                              <br>
                            <b>Bingham</b></p></td>
                            <td><p>-Thursday<br>
                              -3:40 to 4:40 p.m.<br>
                            -Ms. Bingham’s room</p></td>
                            <td>This club is a safe and fun place for students who are interested in and have a love for science fiction- Doctor Who being a main theme. We do many activities that give students an outlet to express and engage in their interests in the world of science fiction.&nbsp;</td>
                          </tr>
                          <tr>
                            <td>Environmental Club</td>
                            <td><p>McKinley Boden, Joelle Gill,
                              <br>
                            <b>Hart</b></p></td>
                            <td><p>-Every other Wednesdays<br>
                            -Room 508</p></td>
                            <td>Environment club aims to create a sustainable environment throughout Northview. Through educational activities, fundraisers and community service projects, club members will promote the impact we, as students, have on the world.&nbsp;</td>
                          </tr>
                          <tr>
                            <td>Fashion Club</td>
                            <td><p>Lina Levitt,
                                <br>
                            <b>Morgan</b></p></td>
                            <td><p>Meetings are once or twice a month on Thursdays from 3:30<br>
                            – 4:00 p.m. in room 434.</p></td>
                            <td>The fashion club is a place where kids with an interest in fashion can come to share their love of fashion and learn more about thefashion world. We listen to guest speakers with careers in fashion and work on fun fashion related projects, including t-shirt design, tie dyeing, making look books.&nbsp;</td>
                          </tr>
                          <tr>
                            <td>FCA (Fellowship of<br>
                            Christian Athletes)</td>
                            <td><p>Abbie Brown, Trammell Lovingood,
                              <br>
                            <b>Meaders</b></p></td>
                            <td><p>-Fridays<br>
                            -7:30 a.m.<br>
                            -Auditorium</p></td>
                            <td>Fellowship of Christian Athletes strives to create a positive and safe community for high school athletes, coaches, and students who want to grow in their relationship with Christ. We worship, pray, fellowship, and play games each week. Small groups enable students to grow alongside peers within FCA whom they trust. FCA is open to anybody, regardless of their religion, grade, or athleticism.&nbsp;</td>
                          </tr>
                          <tr>
                            <td>First Aid for All (FAFA)</td>
                            <td><p>Amal Bhatnagar,<br>
                            <b>Bingham</b></p></td>
                            <td><p>-Tuesday<br>
                            -8:00 a.m.</p></td>
                            <td>First aid for all is a nonprofit organization that believes in medical equality. We have been active in the community for more than a year. All can join.&nbsp;</td>
                          </tr>
                          <tr>
                            <td>Flood Student Missions</td>
                            <td><p>Faith Simmonds,
                              <br>
                            <b>Meaders</b></p></td>
                            <td><p>-First Thursday of<br>
                              every month<br>
                            -7:30 a.m.<br>
                            -Black Box Theater</p></td>
                            <td>Flood is a nonprofit organization that serves impoverished communities and shelters in the metro-Atlanta area. Some service projects we do are: Corners Outreach, Safehouse, StreetReach, Meals By Grace, and The Gardens.&nbsp;</td>
                          </tr>
                          <tr>
                            <td>Food For Thought</td>
                            <td><p>Suchita Kumar,
                                <br>
                            <b>Horton</b></p></td>
                            <td><p>-Tuesday<br>
                            -7:45 a.m.</p></td>
                            <td>This is a charity/volunteer club that holds food drives, bake sales, and summer/winter clothing drives and donates them to homeless children shelters. Around major holidays, we hand-make crafts, such as dolls, and gifts them to sick children at the hospital.&nbsp;</td>
                          </tr>
                          <tr>
                            <td>Foundation of Youth Education</td>
                            <td><p>Sugeeth K., Anish M.,
                              <br>
                              <b>Wong</b>
                            </p></td>
                            <td><p>-8 a.m.<br>
                            -Wednesdays</p></td>
                            <td>A student led nonprofit dedicated to transforming the lives of underprivileged children by improving their quality of education through monetary donations, supplies, and resources.&nbsp;</td>
                          </tr>
                          <tr>
                            <td>French Club</td>
                            <td><p>Siddarth Seemakurti,
                              <br>
                              <b>Francisse and Godbole</b>
                            </p></td>
                            <td><p>-Thursday after school<br>
                            -Room 639</p></td>
                            <td>French club’s goal is to promote the French language and culture. We do French-related activities in order to make it more fun. Movies and games to promote cultural awareness, Participation in International Night with a French table, French food days, Celebrating holiday, Inviting guest visitors&nbsp;</td>
                          </tr>
                          <tr>
                            <td>Future Business Leaders of America</td>
                            <td><p>Sally Pan,<br>
                                Sai Maddali, <br>
                                <b>McCall, Morgan, Peek</b>
                            </p></td>
                            <td><p>-Wednesdays<br>
                            -7:50 a.m. or 3:30p.m.<br>
                            -Auditorium/438</p></td>
                            <td>FLA-PBL is the world’s largest student business association with over a quarter of a million members nationwide. Through seminars and competitions, our members have the opportunity to build confidence and to prepare for success in business leadership.&nbsp;</td>
                          </tr>
                          <tr>
                            <td>Gay-Straight Alliance (GSA)</td>
                            <td><p>Thanu Avirneni, Harsha Ramesh,
                                <br>
                            <b>Lake</b></p></td>
                            <td><p>-Fridays<br>
                            -Room 501</p></td>
                            <td>A safe place for people of all genders and sexualities. We promote equality for all people and hope to make Northview a safer and better place for everyone. We have guest speakers give presentations on LGBTQA+ issues.&nbsp;</td>
                          </tr>
                          <tr>
                            <td>German Club</td>
                            <td><p>Michael Cercone,
                              <br>
                            <b>Muck</b></p></td>
                            <td><p>-Every other Monday<br>
                            -3:30 to 4:30 p.m.<br>
                            -Room 331</p></td>
                            <td>German club aims to enrich its members’ understanding of German culture while simultaneously bettering the school and community through various volunteer activities.&nbsp;</td>
                          </tr>
                          <tr>
                            <td>Girls In STEM (GIS)</td>
                            <td><p>Jasmin Gao,
                                <br>
                                <b>Janess</b>
                            </p></td>
                            <td><p>-Thursdays once per month <br>
                                -3:40 to 5:00 p.m.<br>
                                -Room 206</p></td>
                            <td>Girls In STEM is an outreach program that meets with local elementary and middle school girls to get them interested in STEM (science, tech, engineering, math). We meet once a month to do activities with the girls and guide them in any science competitions.&nbsp;</td>
                          </tr>
                          <tr>
                            <td>Guide Club</td>
                            <td><p>Michelle Pang,
                                <br>
                                <b>Sun</b>
                            </p></td>
                            <td><p>-Room 604</p></td>
                            <td>Northview Guide is a club which offers free tutoring to underserved students in the community. We meet once every two weeks at the Gwinnett Human Services Center to conduct a tutoring session.&nbsp;</td>
                          </tr>
                          <tr>
                            <td>Helping Education Reach Others (HERO)</td>
                            <td><p>Emily Pfahl, Surbhi Dugar,
                                <br>
                                <b>Aboulafia</b>
                            </p></td>
                            <td><p>-Every other Thursday<br>
                            -7:45 a.m.</p></td>
                            <td>Our club is volunteer club focusing on underprivileged children (specifically education). We plan on including other volunteer services, such as food banks, selling yudabanas, etc.&nbsp;</td>
                          </tr>
                          <tr>
                            <td>H.O.P.E Society</td>
                            <td><p>Olivia Chung, Natalie Hargis,
                              <br>
                              <b>Schmidt</b>
                            </p></td>
                            <td><p>-Wednesday<br>
                            -3:40 p.m.<br>
                            -Room 608</p></td>
                            <td>H.O.P.E is partnered with Rainbow Village Inc. We do events to help homeless families, women who suffer/have suffered domestic abuse, and children who don’t have the resources to get a great education.&nbsp;</td>
                          </tr>
                          <tr>
                            <td>HOSA</td>
                            <td><p>Ruth Austin, Felicia Guo,
                                <br>
                                <b>Rogers, S. Morgan, Whitlatch</b>
                            </p></td>
                            <td><p>-Wednesdays<br>
                            -After school<br>
                            -Auditorium</p></td>
                            <td>HOSA is a CTSO committed to healthcare career-building. Students have the opportunity to compete in regional, state (SLC), and national (NLC) competitions to showcase their knowledge. Guest speakers and other events will also be held.&nbsp;</td>
                          </tr>
                          <tr>
                            <td>Hugs For Harambe</td>
                            <td><p>Joey Han,
                                <br>
                                <b>Carrol</b>
                            </p></td>
                            <td><p>-after school</p></td>
                            <td>Our purpose is to help the primate community. We want to fundraise money for the International Gorilla Conservation Program. The club raises funds for the Gorilla Conservation Program and the Dlan Fossey Gorilla Fund.&nbsp;</td>
                          </tr>
                          <tr>
                            <td>Improv</td>
                            <td><p>Ania Thomas,
                                <br>
                                <b>Lake</b>
                            </p></td>
                            <td><p>-Friday<br>
                            -3:40 p.m.</p></td>
                            <td>Improv is a wonderful club that brings creative students from all
                              around Northview together to express themselves in a theatrical
                              way. Improv is home to those who are quick on their feet and eager
                              to perform in their own unique way.&nbsp;</td>
                          </tr>
                          <tr>
                            <td>Jewels for Jewels</td>
                            <td><p>Kavya Vrid,
                                <br>
                                <b>Darling</b>
                            </p></td>
                            <td><p>-Every other Tuesday<br>
                            -3:30 p.m.<br>
                            -Room 504</p></td>
                            <td>Jewels for Jewels is a club where Northview students make and sell
                              jewelry. All proceeds go towards nonprofit organizations that help
                              children have the resources to succeed in underprivileged areas. All
                              profits made from sales go towards these children at the end of the
                              year. Students volunteer their time and creativity to contribute to
                              charities like the Nepal Education Fund.&nbsp;</td>
                          </tr>
                          <tr>
                            <td>Jewish Student Union</td>
                            <td><p>Ansley Silver,
                                <br>
                                <b>Zavlanos</b>
                            </p></td>
                            <td><p>-Every other Tuesdays<br>
                            -Ms. Zavlanos’ room</p></td>
                            <td>Their purpose is to provide cultural awareness and information for non-Jewish students as well as a venue for students who are Jewish to meet with their peers. The club does community service projects at meetings to help various groups in the community.&nbsp;</td>
                          </tr>
                          <tr>
                            <td>JROTC</td>
                            <td><p>Ethan Gamble,
                                <br>
                                <b>T. Henderson</b>
                            </p></td>
                            <td><p>-Wednesdays and<br>
                            Fridays after school<br>
                            -Room 305</p></td>
                            <td>Our club promotes leadership, team building, and active roles in
                              our school and community. We do so by use of drills PTs, and
                              fundraisers that we take part in throughout the school year.&nbsp;</td>
                          </tr>
                          <tr>
                            <td>Junior Civitan Club</td>
                            <td><p>Surbhi Dugar, Emily Pfahl,
                                <br>
                                <b>Aboulafia</b>
                            </p></td>
                            <td><p>-Once a month<br>
                            -7:45 a.m.<br>
                            -Room 101</p></td>
                            <td>The club focuses on helping people with special needs. We don’t
                              only strive to raise money for them, but we also try to help them
                              feel more comfortable about themselves.&nbsp;</td>
                          </tr>
                          <tr>
                            <td>Kaleidoscope</td>
                            <td><p>Sachi Puri, Tawil Charaniya,
                                <br>
                                <b>Rogers</b>
                            </p></td>
                            <td><p>-Thursdays after school</p></td>
                            <td>Kaleidoscope Club is a service based leadership organization.
                              Students are taught the skills to be active in the community and
                              make a difference towards the issues faced by the world. The
                              organization also fosters and focuses on each student being a
                              resilient member of society.&nbsp;</td>
                          </tr>
                          <tr>
                            <td>Lettuce Eat Club</td>
                            <td><p>Katie Head, Isabelle Bray,
                                <br>
                                <b>Lumpkin</b>
                            </p></td>
                            <td><p>-Thursdays<br>
                            -3:45 p.m.</p></td>
                            <td>We meet once a month, and eat lettuce. At the end of the year, we
                              will have a lettuce eating competition, the winner will be the new
                              club president.&nbsp;</td>
                          </tr>
                          <tr>
                            <td>LiNK (Liberty in North Korea)</td>
                            <td><p>Juli Lim,
                                <br>
                                <b>McLeroy</b>
                            </p></td>
                            <td><p>-Wednesdays after<br>
                              school<br>
                            -3:40 p.m.<br>
                            -Room 758</p></td>
                            <td>This club is centered around fundraising for two purposes: to raise
                              money for rescue missions and to raise awareness about the North
                              Korean people. We will raise money through fundraisers like car
                              washes, candy grams, and so on. At each meeting, ideas on raising
                              awareness, ideas on fundraisers, and information of recent news on
                              North Korea will be discussed.&nbsp;</td>
                          </tr>
                          <tr>
                            <td>Make-A- Wish Club</td>
                            <td><p>Michelle Cho,
                                <br>
                                <b>Rogers</b>
                            </p></td>
                            <td><p>-Tuesday mornings<br>
                            -Once per month</p></td>
                            <td>This club raises money and awareness for children with health
                              issues who are in the process of having their wishes granted. Also
                              reaching out to the community through service opportunities such
                              as volunteering with Focus, Ronald McDonald house, etc.&nbsp;</td>
                          </tr>
                          <tr>
                            <td>Northview Masti</td>
                            <td><p>Zara Inam, Rhea Dhamapurkar,
                                <br>
                                <b>Niehaus</b>
                            </p></td>
                            <td><p>-Wednesdays</p></td>
                            <td>Our club is a dance club that teaches a variety of dances and performs in different events in the community.&nbsp;</td>
                          </tr>
                          <tr>
                            <td>MDjunior</td>
                            <td><p>Sneha Chauhan, Pooja Vikraman,
                                <br>
                                <b>Neff</b>
                            </p></td>
                            <td><p>-Tuesday<br>
                            -3:45 p.m.</p></td>
                            <td>MDJunior is a club where students can learn about healthcare occupations and experience the challenges and tasks healthcare workers experience, hands-on. We aim to help students get involved in bridging the Health Gap.&nbsp;</td>
                          </tr>
                          <tr>
                            <td>MediKid</td>
                            <td><p>Ashitha Dama,
                                <br>
                                <b>Francisse</b>
                            </p></td>
                            <td><p>-Thursdays after school<br>
                            -Once a month</p></td>
                            <td>This club is centered on raising awareness on various diseases that pertain to children. Awareness meetings and fundraising events will be conducted for a different disease each month.&nbsp;</td>
                          </tr>
                          <tr>
                            <td>Medshare</td>
                            <td><p>Suma Yarabarla, Sanjana Rao,
                                <br>
                                <b>Muller</b>
                            </p></td>
                            <td><p>-Tuesday<br>
                            -3:40 p.m.</p></td>
                            <td>We will go to the warehouse and box the surplus supplies and ship them to other countries. We will occasionally bring in a guest speaker related to the healthcare field to provide insight on various jobs.&nbsp;</td>
                          </tr>
                          <tr>
                            <td>Mock Trial</td>
                            <td><p>Karsyn Archambau, Will Claussen, Lauren Cox,
                                <br>
                                <b>Lake</b>
                            </p></td>
                            <td><p>-Tuesday<br>
                            -3:45 p.m.<br>
                            -Room 501</p></td>
                            <td>Mock Trial allows students to educate themselves in law, as well as provides them with the chance to improve their speaking ability and make connections with practicing attorneys and judges. Mock Trial is an academic team that focuses on fostering understanding of the law and applying these laws to different situations. There are two mock trial teams: the Varsity team and the Junior Varsity team, each consisting of 12 students. The Varsity team competes in Regional, District, State, and even National competitions.&nbsp;</td>
                          </tr>
                          <tr>
                            <td>Model Arab League</td>
                            <td><p>Rohan Menon,
                                <br>
                                <b>Anderson</b>
                            </p></td>
                            <td><p>-Thursday<br>
                            -7:45 a.m.<br>
                            -Room 332</p></td>
                            <td>Through participation in the National Council on U.S.-Arab Relations’ Model Arab League (MAL) program students learn about the politics and history of the Arab world, and the arts of diplomacy and public speech. MAL helps prepare students to be knowledgeable, well-trained, and effective citizens as well as civic and public affairs leaders. We will use our meetings to research policy and practice procedure in preparation for an exciting two-day competition held at Marist High School in January.&nbsp;</td>
                          </tr>
                          <tr>
                            <td>Modern Physics Club</td>
                            <td><p>Nithin Raghuaen, Vineeth Duddempudi,
                                <br>
                                <b>Kemp</b>
                            </p></td>
                            <td><p>-Monday afternoon, every other week,<br>
                              - Room 135</p></td>
                            <td>A club that teaches interested students about Einstein’s theories and advancements in modern physics, such as gravitational waves and the Higgs Boson, from a purely non-mathematical standpoint. Discussion/education forum for students to share and learn about the ideas/concepts involved in modern physics. These discussions will be student-led and will focus on aspects of physics not dealt with in our normal physics or even the AP physics curriculum. These topics are advanced topics and we hope to inspire students to pursue studies in physics/engineering through their involvement with the club.&nbsp;</td>
                          </tr>
                          <tr>
                            <td>Model United Nations</td>
                            <td><p>Kartik Khanna,
                                <br>
                                <b>Martin and Paul</b>
                            </p></td>
                            <td><p>-Every Monday and Wednesday<br>
                            -3:40 p.m.<br>
                            -Media Center</p></td>
                            <td>Model UN is an academic simulation of the United Nations. It aims to educate participants about current events, topics related to international relations, diplomacy, and the UN agenda. Model UN helps promote critical thinking, public speaking, and leadership skills.&nbsp;</td>
                          </tr>
                          <tr>
                            <td>Muslim Student Association (MSA)</td>
                            <td><p>Abdullah Shah, Saim Ghaya,
                                <br>
                                <b>Lumpkin</b>
                            </p></td>
                            <td><p>-second Monday of<br>
                              every month<br>
                            -3:30 p.m.<br>
                            -Room 107</p></td>
                            <td>The Muslim Student Association allows Northview students to come together in a supportive Muslim environment and seeks to educate the Northview community about Islam.&nbsp;</td>
                          </tr>
                          <tr>
                            <td>Northview Stock Exchange</td>
                            <td><p>Ishan Achar,
                                <br>
                                <b>Silver</b>
                            </p></td>
                            <td><p>-Wednesdays<br>
                            -7:45 a.m.<br>
                            -Room 301</p></td>
                            <td>The Northview Stock Exchange club is a stock market club. We discuss latest trends and which stocks are best to invest in.&nbsp;</td>
                          </tr>
                          <tr>
                            <td>Northview Chamber Music Society</td>
                            <td><p>Judy Li, Leornardo Tang,
                                <br>
                                <b>Aucoin</b>
                            </p></td>
                            <td><p>-One Wednesday per month<br>
                            -Orchestra room</p></td>
                            <td>The purpose of NCMS is to organize musical performances for the community, at places such as senior living homes and hospitals. In years past, NCMS has performed at places including Sunrise Senior Living and Ivy Hall. We put on these performances as volunteer musicians for the community, in order to spread an appreciation for music and to give the community something it will enjoy. Anyone who can play an instrument, sing, or perform in some musical capacity can join. The musicians play in small chamber groups or play solos, and they must be approved before they can perform. Otherwise, there are no restrictions, and we encourage everyone who so wishes to take part in the performances.&nbsp;</td>
                          </tr>
                          <tr>
                            <td>Operation Smile</td>
                            <td><p>Olivia Chung, Joseph Kim,
                                <br>
                                <b>Gaillard</b>
                            </p></td>
                            <td><p>-Thursday afternoons<br>
                              -3:40 p.m.<br>
                              -Room 233</p></td>
                            <td>Operation Smile is a club where we help fund surgeries for kids with cleft palate. We are here to raise awareness and help a smile back on these kid’s faces.&nbsp;</td>
                          </tr>
                          <tr>
                            <td>Origami Club</td>
                            <td><p>Daphne Manning,
                                <br>
                                <b>Gloede</b>
                            </p></td>
                            <td><p>-Mondays<br>
                            -3:40 p.m.<br>
                            -Media Center</p></td>
                            <td>Origami Club spends a majority of its time going to old folks home or senior centers to teach/entertain/keep busy people in those centers. They start off at Northview to learn the skills before they spread their knowledge as a community service.&nbsp;</td>
                          </tr>
                          <tr>
                            <td>Oxfam America</td>
                            <td><p>Faeez Juneja,
                                <br>
                                <b>Darling</b>
                            </p></td>
                            <td><p>-Tuesday mornings<br>
                            -7:45 a.m.</p></td>
                            <td>Oxfam America is an organization which spans the need of people across six continents through enacting justice in the forms of alleviating poverty, and facilitating social change. Oxfam closely monitors the adverse consequences of climate change, deforestation, and other key factors which contribute to injustices.&nbsp;</td>
                          </tr>
                          <tr>
                            <td>PAWS</td>
                            <td><p>Michelle Cho,
                                <br>
                                <b>Ulrich</b>
                            </p></td>
                            <td><p>-Friday mornings<br>
                            -745 a.m.</p></td>
                            <td>A club of animal lovers that help by volunteering at local animal shelters and fundraise.&nbsp;</td>
                          </tr>
                          <tr>
                            <td>Philosophy Club</td>
                            <td><p>Aparna Pateria, Aaron Fishburn,
                                <br>
                                <b>Kohanim</b>
                            </p></td>
                            <td><p>-Thursday afternoons<br>
                            -3:45to 5:00 p.m.<br>
                            -Room 511</p></td>
                            <td>Philosophy Club is an intellectually stimulating environment in which students are encouraged to explore their world through the lenses of reasoning, rationalism, objectivism, skepticism, critique, and existentialism. The club’s purpose is to embolden students to make cross-curricular connections through the vehicle of philosophy, thus strengthening their overall academic and community-based experience at Northview.&nbsp;</td>
                          </tr>
                          <tr>
                            <td>Programming Club</td>
                            <td><p>Nithin Raghavan, Neeraj Alavala,
                                <br>
                                <b>Peek</b>
                            </p></td>
                            <td><p>-Thursdays<br>
                            -3:40- 5:00 p.m.<br>
                            -Room 435</p></td>
                            <td>This class is one in which Java, both beginner level and advanced, will be taught to the members. Advanced Java includes several algorithms such as Mergesort, quicksort, heapsort and others which ultimately would help in programming higher level&nbsp;</td>
                          </tr>
                          <tr>
                            <td>Project Darasani</td>
                            <td><p>Yashi Sanghvi,
                                <br>
                                <b>Gregg</b>
                            </p></td>
                            <td><p>-Tuesdays<br>
                            -3:40 p.m.<br>
                            -Room 208</p></td>
                            <td>Our club holds fundraisers and organizes supply drives to support the education of children in Tanzania. We also partner with local organizations to promote empowerment through education around the world.&nbsp;</td>
                          </tr>
                          <tr>
                            <td>Raksha Inc.</td>
                            <td><p>Rupkatha Banerjee,
                                <br>
                                <b>Francisse</b>
                            </p></td>
                            <td><p>-Tuesdays<br>
                            -3:40 p.m.<br>
                            -Room 639</p></td>
                            <td>Raksha Inc is a South Asian, Georgia based organization, which was created in response to a talk of a safe space to discuss and receive support for socially taboo concepts such as domestic violence, sexual assault, dating, racism, etc. Our goal is to strive to create responsible young adults who are aware of the issues in their community and have the courage and motivation to alleviate them.&nbsp;</td>
                          </tr>
                          <tr>
                            <td>Red Cross</td>
                            <td><p>Rhea Rawla, Ashna Bhardwaj,
                                <br>
                                <b>Bhardwaj</b>
                            </p></td>
                            <td><p>-Every other Thursday<br>
                            -7:45 a.m.<br>
                            -Room 140</p></td>
                            <td>We fundraise for various causes, such as the Red Cross Fund, some disease research societies, and disaster relief. We also do activities in the community and encourage emergency preparedness.&nbsp;</td>
                          </tr>
                          <tr>
                            <td>SEWA</td>
                            <td><p>Omkara Rao, Prashanth Sanpathkumar,
                                <br>
                                <b>James</b>
                            </p></td>
                            <td><p>-Mondays<br>
                            -3:45 p.m.<br>
                            -Room 333</p></td>
                            <td>SEWA (Selfless Efforts for the Welfare of All) is a service club dedicated to helping the Butanese refugee community in Georgia and supporting other causes through fundraising events.&nbsp;</td>
                          </tr>
                          <tr>
                            <td>Side by Side</td>
                            <td><p>HyunJun (Max) Ahn,
                                <br>
                                <b>S. Yi, Hsu</b>
                            </p></td>
                            <td><p>-Wednesday<br>
                            -3:30 to 4:30 p.m.<br>
                            -Media Center</p></td>
                            <td>The club will provide peer tutoring program- expert Northview students who wish to volunteer can serve as tutor, and students who need help in any of their subjects can seek for help here.&nbsp;</td>
                          </tr>
                          <tr>
                            <td>Spanish Club</td>
                            <td><p>Sophia Chen,
                                <br>
                                <b>Wilson and Braun</b>
                            </p></td>
                            <td><p>-Thursday<br>
                            -3:45 p.m.</p></td>
                            <td>Spanish club is an organization where students will be able to explore multiple aspects of Spanish culture, language, food, etc. In addition to sponsoring Spanish club will also have guest speakers, cultural events, participation in International Night (booth) and events where members will be able to improve their Spanish skills.&nbsp;</td>
                          </tr>
                          <tr>
                            <td>SPCA Club</td>
                            <td><p>Megan Cistulli,
                                <br>
                                <b>Meaders</b>
                            </p></td>
                            <td><p>-Wednesday
                              mornings<br>
                              -Twice a month<br>
                            -7:45 a.m.<br>
                            -Room 539</p></td>
                            <td>This club goes to the Georgia SPCA to volunteer at the facility.Members will receive community service hours. Also, this encourages members to join the fostering program. We will mainly help out at the shelter by playing with puppies and kittens, helping with vaccines, and other chores that we are needed to do.&nbsp;</td>
                          </tr>
                          <tr>
                            <td>Spot on Baking</td>
                            <td><p>Tommy Su, Winston Kim,
                                <br>
                                <b>Braun</b>
                            </p></td>
                            <td><p>-after school</p></td>
                            <td>Our purpose is to teach fundamental cooking skills for rising college students to prepare them for their future. Cooking for winners helps make Northview great again.&nbsp;</td>
                          </tr>
                          <tr>
                            <td>Talk Girl Effect</td>
                            <td><p>Zara Inam,
                                <br>
                                <b>Pope</b>
                            </p></td>
                            <td><p>-Every other Tuesday<br>
                            -3:45 p.m.<br>
                            -Room 509</p></td>
                            <td>Students come together to discuss gender issues and to find ways to make a difference in the lives of women and girls everywhere. The club holds discussions and educates the school as a whole in gender issues through the annual Women’s Week.&nbsp;</td>
                          </tr>
                          <tr>
                            <td>Techno Titan Robotics</td>
                            <td><p>Devansh Yerpude,
                                <br>
                                <b>Mr. Downey</b>
                            </p></td>
                            <p>Every single day<br>
                            -Robotics Room</p></td>
                            <td>The Techno Titans participate in the following robotics events: VEX, BEST, FIRST. Each of the three competitions gets successively more difficult, requiring the student/team to gain a deeper understanding of the principles of engineering and design needed to best complete the challenge.&nbsp;</td>
                          </tr>
                          <tr>
                            <td>Titan Dance Team</td>
                            <td><p>Skyler Semien,
                                <br>
                                <b>Gole</b>
                            </p></td>
                            <td><p>-Monday to Wednesday<br>
                            -4:00 to 6:00 p.m.<br>
                            -Cafeteria</p></td>
                            <td>Titan Dance Team represents the technically trained dancers at the school. The team would consist of dancers, trained in Jazz, Ballet, and Lyrical. By giving this opportunity to dancers, they would be able to showcase their talents for Northview.&nbsp;</td>
                          </tr>
                          <tr>
                            <td>Technology Student Association</td>
                            <td><p>Komal Shrivastana,
                                <br>
                                <b>Carroll</b>
                            </p></td>
                            <td><p>-First Wednesday of<br>
                              each month<br>
                            -3:50 p.m.<br>
                            -Room 790</p></td>
                            <td>Students compete in TSA competitions either individually or in groups and can advance to national level.&nbsp;</td>
                          </tr>
                          <tr>
                            <td>Toast Masters</td>
                            <td><p>Sherry Liang, Diana Liu,
                                <br>
                                <b>Sun</b>
                            </p></td>
                            <td><p>-Community Night<br>
                              Thursday<br>
                            -3:40- 4:30 p.m.<br>
                            -Room 107</p></td>
                            <td>Toast Masters is a way to help students grow more confident in speech. During meetings, we will be doing various activities to enhance our club members’ speech skills. Every week, a different student will lead and plan the meeting.&nbsp;</td>
                          </tr>
                          <tr>
                            <td>Ultimate Frisbee Club</td>
                            <td><p>Junho Park,
                                <br>
                                <b>Carroll</b>
                            </p></td>
                            <td><p>-Friday<br>
                            -4:00 p.m.</p></td>
                            <td>Ultimate Frisbee Club plays ultimate frisbee after school on Fridays. This is not a competitive game, but a place for everyone to have fun and get exercise.&nbsp;</td>
                          </tr>
                          <tr>
                            <td>UNICEF Club</td>
                            <td><p>Rachel Lee,
                                <br>
                                <b>Lee</b>
                            </p></td>
                            <td><p>-Wednesday after<br>
                            school<br>
                            -Room 138</p></td>
                            <td>UNICEF is a humanitarian organization created by the united nations that advocates for the rights of children all around the world. Our club will fundraise for UNICEF and raise awareness for its initiatives.&nbsp;</td>
                          </tr>
                          <tr>
                            <td>Vegantarian Club</td>
                            <td><p>Paris Watson, Kara Song, Colbie Chans,
                                <br>
                                <b>W. Henderson</b>
                            </p></td>
                            <td><p>-Friday mornings<br>
                            -7:30 p.m.<br>
                            -Room 231</p></td>
                            <td>The Vegantarian Club welcomes any student who is interested in adapting or has already adopted a plant-based lifestyle. Our goals are to educate everyone on how easy and accessible Veganism can be, along with enriching everyone’s understanding of the ethical, sustainable, health, and economic benefits behind veganism.&nbsp;</td>
                          </tr>
                          <tr>
                            <td>Vibha</td>
                            <td><p>Anu Manne,
                                <br>
                                <b>Anderson</b>
                            </p></td>
                            <td><p>-Wednesdays<br>
                            -3:45 p.m.<br>
                            -Room 332</p></td>
                            <td>Vibha is a club that is connected to the national organization dedicated to raising money to provide for children&#39;s’ futures in India. Vibha, as a club, will help to raise money for this cause as well as promote volunteering for the community.&nbsp;</td>
                          </tr>
                          <tr>
                            <td>VT SEVA</td>
                            <td><p>Anoop Gundala, Neeraj Alavala,
                                <br>
                                <b>Darling</b>
                            </p></td>
                            <td><p>-Tuesdays<br>
                            -3:45 to 4:15p.m.<br>
                            -Room 504</p></td>
                            <td>VT Seva is a 501c3 non-profit organization established in the US with the goal to reach out to underprivileged people around the world. Since its inception, VT Seva has gained chapters in 15 locations across the country and a rescue team which has provided services during the Nepal and Japan earthquakes, and the Hud Hud cyclone. Its current projects include providing education to the needy and disabled, spreading cancer awareness, and facing environmental challenges.&nbsp;</td>
                          </tr>
                          <tr>
                            <td>WWII Reenactment</td>
                            <td><p>Jared Hung,
                                <br>
                                <b>MacDonald</b>
                            </p></td>
                            <td><p>-Fridays</p></td>
                            <td>WWII group that will meet up and discuss about battles, factions, and war campaigns in the 30’s and 40’s. Reenactment will include dressing up as historical units of each warring nation. Club members will have factions to choose and study as there will be positions to reenactors to historians.&nbsp;</td>
                          </tr>
                          <tr>
                            <td>World Vision</td>
                            <td><p>Emily Lim,
                                <br>
                                <b>Hart</b>
                            </p></td>
                            <td><p>-Every Wednesday/<br>
                              or first and last week<br>
                            of each month<br>
                            -3:40 p.m.</p></td>
                            <td>Northview World Vision Club is a club that works to raise funds to provide children, families, and communities with their needs. It is an actual organization that works to end all poverty. This year, our club is focusing on children and their communities. We will participate in numerous activities to get involved.&nbs3;</td>
                          </tr>
                          <tr>
                            <td>Zen Club</td>
                            <td><p>William Zhu,
                                <br>
                                <b>Darling</b>
                            </p></td>
                            <td><p>-Tuesdays<br>
                            -3:30 p.m.<br>
                            -Room 504</p></td>
                            <td>Zen Club will teach members how to relieve stress with basic meditation and teachings.&nbsp;</td>
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
        <script>
            /* Functions for table coloring */
            $(document).ready( function() {

                $("table").delegate('tr','mouseover mouseleave', function(e) {
                    if (e.type == 'mouseover') {

                      $(this).parent().addClass("table-hover");
                    }
                    else {

                      $(this).parent().removeClass("table-hover");
                    }
                });
            })
        </script>
    </body>
</html>
