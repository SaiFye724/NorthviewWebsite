<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Drama | Northview High</title>
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
            <a href="yearbook.php" target="_blank" style="color: black;"><li>Senior Ad Info</li></a><a href="linked_files/about/FreshmanCampFlyer.pdf" target="_blank" style="color: black;"><li>Freshman Camp Flyer</li></a><a href="linked_files/ParkingApp1718.doc" target="_blank" style="color: black;"><li>Parking Application 2017-18</li></a><a href="https://www.northviewcounseling.com/summer-assignments-2017" target="_blank" style="color: black;"><li>Summer Assignments 2017</li></a><a href="https://www.northviewcounseling.com/" target="_blank" style="color: black;"><li>Northview Counseling</li></a><a href="https://www.northviewcounseling.com/transcript-requests-" target="_blank" style="color: black;"><li>Request A Transcript</li></a><a href="https://www.peachjar.com/index.php?a=28&b=138&region=68281" target="_blank" style="color: black;"><li>Northview Peachjar</li></a><a href="http://session.cadystudios.com/" target="_blank" style="color: black;"><li>Cady Studios</li></a><a href="https://www3.fultonschools.org/hb91/home/index2" target="_blank" style="color: black;"><li>FCS HB91 Petition Form</li></a><a href="https://www.commonsense.org/education/digital-citizenship" target="_blank" style="color: black;"><li>Digital Citizenship Application</li></a><a href="https://www.youtube.com/watch?v=44znsLcLROw" target="_blank" style="color: black;"><li>NHS Morning Show (May 11)</li></a>        </ul>
    </div>
</div>
                <div id="page-content">
                    <h3>DRAMA</h3>
                    <hr>
                    <div class="drama-wrapper">
                        <div class="drama-div">
                            <h4>2016 - 2017 MAINSTAGE SEASON</h4>
                            <p>October 14-15 @ 7 PM<br>
                               October 16 @ 2 PM<br>
                               <b>One Act Play: Dancing at Lughnasa</b><br>
                               <br>
                               November 10-12 @ 7 PM<br>
                               November 13 @ 2 PM<br>
                               <b>Fall Musical: Nunsense</b><br>
                               <br>
                               January 21 @ 7 PM<br>
                               <b>Theatre Sports XII</b><br>
                               <br>
                               March 23-25 @ 7 PM<br>
                               March 26 @ 2 PM<br>
                               <b>Spring Musical: 9 to 5</b><br>
                               <br>
                               May 5-6 @ 7 PM<br>
                               <b>Dessert Theatre</b>
                            </p>
                        </div>
                        <div class="drama-div">
                            <h4>NEWS &amp; EVENTS</h4>
                            <p><b>Upcoming Auditions:</b><br>
                               Fall auditions will be August 13-14 at 4:00 pm in the auditorium.  Prepare a 1 minute monologue.<br>
                               <b>International Thespian Society:</b><br>
                               Applications for fall induction will be available in September.<br>
                               <b>Improv Club</b><br>
                               The Improv Club meets once a week to provide members with an opportunity to participate in improvisation. Any student can join at any time. Sessions are led by student officer Ania Thomas (President).
                            </p>
                        </div>
                    </div>
                    <hr>
                    <h4>International Thespian Society/Thespians</h4>
                    <p>Our 2016-2017 International Thespian Society officers are Courtney O’Connell (President), Ryan Mumpower (Vice President), Savannah Moyer (Secretary), Aidan Lord (Treasurer), Sachi Puri (Clerk), Leah Burnett (Publicity), Noah McEarchern (Theatre Tsar), Kabir Gandhi (middle school relations), and Constantin Claassen, Natalit Skinner, and Ania Thomas (Conference Reps).<br>
                    The International Thespian Society is an international honor society for students who demonstrate 100+ hours of excellence in high school theatre. Thespians attend a state-wide conference every February and participate in community service activities including their annual charity drive for "Trick or Treat so Kids Can Eat."  ITS inductions are held in December and April; interested students will fill out an application to be reviewed by <a href="http://northviewhigh.com/lakee@fultonschools.org">Mrs. Lake</a> and <a href="http://northviewhigh.com/mcclainb@fultonschools.org">Mr. McClain</a>.<br>
                    Please routinely check the callboard for meetings and induction information. Questions about ITS? Ask an officer, Mrs. Lake or Mr. McClain.</p>
                    <h4>Improv Club</h4>
                    <p>The Improv Club meets once a week to provide members with an opportunity to participate in improvisation.  Any student can join at any time. Sessions are led by student officer Ania Thomas (President).<br>
                    <b>Advisors:</b> <a href="http://northviewhigh.com/mcclainb@fultonschools.org">Paul McClain</a> &amp; <a href="http://northviewhigh.com/lakee@fultonschools.org">Elizabeth Lake</a><br>
                    <b>Requirements for membership:</b> attendance at meetings<br>
                    <b>Dues:</b>  None<br>
                    </p>

                    <h4>Northview Theatre Company</h4>
                    <p>In addition to encouraging talented performing arts students to hone their skills for future employment, we believe that we also have an obligation to introduce students from all backgrounds to the unique opportunities for expression found in theatre.  In order to do this, we go out of our way to structure the department to include the largest number of students possible.  Each year, Northview produces seven mainstage plays, a summer show, and 7-10 Advanced Production class school-day shows.</p>

                    <h4>Plays Presented During Our Last Ten Seasons Include:</h4>
                    <i>Drop Dead, Mary Poppins, [title of show], Of Mice and Men, Till Death Do Us Part, Damn Yankees, Macbeth, A Christmas Carol, 33 Variations, In the Red, How to Succeed in Business Without Really Trying, Comedy of Errors, Moon Over Buffalo, The Mystery Plays: Ghost Children, The Last Cruise of the S.S. Minnow, Little Shop of Horrors, Twelfth Night, Noises Off, The Women of Lockerbie, Dead Air, Into the Woods, Doctor Faustus, The Diary of Anne Frank, Mother Courage and Her Children, Drop Dead, The Bacchae, Lettice and Lovage, Steel Magnolias, Krishna Hare, Dearly Departed, A Midsummer Night’s Dream, Art, Audience, Camelot, Jake’s Women, The Man Who Came to Dinner, Patient A, The Crucible, This is a Test, A Danish Soap, Brilliant Traces, Anything Goes, Vital Signs, Lend Me a Tenor, Tartuffe, Macbeth, The Lottery, Hide and Seek, The Underpants, Fiddler on the Roof, Talking With…, Rumors, Dracula, Check Please, Sorry Wrong Number, Removing the Glove, The Dumbwaiter, Guys and Dolls, Ten Little Indians, Medea, our annual Theatre Sports improv shows, and several more class and student project shows.</i>

                    <h4>Recent Program Awards:</h4>
                    <p>Two All-Star Cast Members – Of Mice and Men (2014)<br>
                        Chosen to perform at Georgia Thespian Conference – The Mystery Plays: Ghost Children (2013)<br>
                        GHSA Region Third Place – The Mystery Plays: Ghost Children (2012)<br>
                        Two GHSA All-Star Cast Members – The Mystery Plays: Ghost Children (2012)<br>
                        GHSA Region Third Place – The Women of Lockerbie (2011)<br>
                        GHSA Best Supporting Actor – The Women of Lockerbie (2011)<br>
                        One GHSA All-Star Cast Member – The Women of Lockerbie (2011)<br>
                        Shuler Hensley Award for Best Scenic Design – Into the Woods (2011)<br>
                        Chosen to perform at Georgia Thespian Conference – Mother Courage and Her Children (2011)<br>
                        GHSA Region Third Place – Mother Courage and Her Children (2010)<br>
                        GHSA Best Support Actor – Mother Courage and Her Children (2010)<br>
                        GHSA Best Supporting Actress – Mother Courage and Her Children (2010)<br>
                        One GHSA All-Star Cast Member – Mother Courage and Her Children (2010)<br>
                        GHSA Best Set – Mother Courage and Her Children (2010)<br>
                        GHSA Best Ensemble – Mother Courage and Her Children (2010)<br>
                        Chosen to perform at the Edinburgh Fringe Festival – The Bacchae (2010)<br>
                        Chosen to perform at the World Storytelling Festival – Krishna Hare (2009)<br>
                        Two GHSA All-Star Cast Members – Krishna Hare (2009)<br>
                        Chosen to perform at Georgia Thespian Conference- Patient A (2009)<br>
                        GHSA Best Actress- Patient A (2008)<br>
                        GHSA Region Runner-up- Patient A (2008)<br>
                        Two GHSA All-Star Cast Members- Patient A (2008)<br>
                        GHSA Best Set- Tartuffe (2007)<br>
                        One GHSA All-Star Cast Member – Tartuffe (2007)<br>
                        GHSA Best Use of Technology- Dracula (2006)
                    </p>

                    <h4>Colleges and Universities Attended by Recent Northview Theatre Graduates:</h4>
                    <p> Amherst College<br>
                        Ball State University<br>
                        Berklee College of Music<br>
                        Berry College<br>
                        Brenau University<br>
                        College of Charleston<br>
                        Elon University<br>
                        Georgia College and State University<br>
                        Georgia Institute of Technology<br>
                        Georgia Southern University<br>
                        Georgia State University<br>
                        James Madison University<br>
                        Kennesaw State University<br>
                        New York University<br>
                        Oglethorpe University<br>
                        Oxford College at Emory University<br>
                        Southern Methodist University<br>
                        University of Alabama<br>
                        University of Arizona<br>
                        University of Florida<br>
                        University of Georgia<br>
                        University of Mississippi<br>
                        University of Missouri<br>
                        University of South Carolina<br>
                        University of Virginia<br>
                        Valdosta State University<br>
                        Vanderbilt University<br>
                        Wake Forest University<br>
                        Washington University in St. Louis
                    </p>
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
