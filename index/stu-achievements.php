<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Student Achievements| Northview High</title>
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
                    <h3>STUDENT ACHIEVEMENTS</h3>
                    <hr>
                    <h4>ACADEMIC HONORS</h4>
                    <p>State AAAAA Governor's Cup Recipient- 2004<br />
                        State AAAAA Governors Cup Recipient- 2005<br />
                        Governor's Office   of Student Achievement: Recognition for 2nd Highest SAT in GA-   2007<br />
                        Governor's Office of Student Achievement: Recognition for 4th Highest   SAT in GA- 2006<br />
                        Governor's Office of Student Achievement: Recognition for 3rd   Highest SAT in GA- 2006<br />
                        Governor's Office of Student Achievement: Silver   Award - 2005<br />
                        Governor's Office of Student Achievement: Gold Award -   2006<br />
                        Governor's Office of Student Achievement: Gold Award -   2007<br />
                        Governor's Office of Student Achievement: Gold Award - 2008<br />
                        Newsweek   Magazine: Top 1,000 High Schools in America- 2005<br />
                        Newsweek Magazine: Top   1,000 High Schools in America- 2006<br />
                        Newsweek Magazine: Top 1,000 High Schools   in America- 2007<br />
                        Newsweek Magazine: Top 1,000 High Schools in America-   2008<br />
                        Atlanta Magazine: Best High School Award - 2006<br />
                        Atlanta Magazine: Best High   School Award - 2007<br />
                        Atlanta Magazine: Best High   School Award - 2008<br />
                        Siemens Foundation: Math   -Science - Technology Competition Semifinalist - 2008<br />
                        Siemens/College Board   Award for Excellence in Advanced Placement - State Honoree 2007<br />
                        Marshall   Foundation JROTC Leadership Symposium: National Recognition - 2007<br />
                        Science   Olympiad: Region Finals Second   Place - 2007<br />
                        Science Olympiad: Region Finals First Place -   2006<br />
                        Southeast Region Chemagination Competition: 1st Place - 2006   (all four categories)<br />
                        Academic Team: State Chamions, Knowledge Master Open -   2006<br />
                        Academic Team: National Quiznet Champions - 2006<br />
                        Georgia BEST   Robotics Competition: First   Place - 2004<br />
                        Georgia BEST   Robotics Competition: First   Place - 2007<br />
                        Debate - State Runner Up -   2005<br />
                        Southern Regional Education Board: Gold Award of Educational Achievement   - 2006<br />
                        Future Business Leaders of America JAVA Programming Team - 6th   in nation<br />
                        State Mathematics Tournament: Junior Varsity State Champions - 2007<br />
                        State School   Superintendent's Citation for Excellence in End-of-Course Testing: 9th grade   Literature - 2008<br />
                        State School Superintendent's Citation for Excellence in   End-of-Course Testing: 11th grade Literature - 2008<br />
                        State School Superintendent's Citation for   Excellence in End-of-Course Testing: Biology - 2008<br />
                        State School   Superintendent's Citation for Excellence on the Georgia High School Graduation Test: Mathematics -   2008<br />
                        College Board: AP Honor School - 2009</p>

                    <h4>FINE ARTS HONORS</h4>
                    <p>Dogwood Arts Festival: Outstanding HS Art Program - 2005<br />
                        Georgia Music   Educators Association: State Conference Performance - 2004<br />
                        Georgia Music   Educators Association: State Conference Performance - 2008<br />
                        Midwest International Band &amp; Orchestra Clinic:   Performance -2005<br />
                        Grammy Foundation Signature Schools Finalist - 2005<br />
                        Grammy Foundation Signature Schools Finalist - 2006<br />
                        Grammy Foundation   Signature School Finalist - 2007<br />
                        GHSA  One Act Rankings: Second Place at Region - 2008<br />
                        GHSA  One Act Rankings: Third Place at Region - 2009<br />
                        GHSA  One Act Rankings: Third Place at Region - 2010<br />
                        GHSA  One Act Rankings: Third Place at Region - 2011<br />
                        GHSA Best Use of Technology - Dracula - 2006<br />
                        One GHSA All-Star Cast Member - Tartuffe - 2007<br />
                        GHSA Best Set - Tartuffe - 2007<br />
                        Two GHSA All-Star Cast Members - Patient A - 2008<br />
                        GHSA Region Runner-up - Patient A - 2008 <br />
                        GHSA Best Actress - Patient A - 2008<br />
                        Chosen to perform at Georgia Thespian Conference - Patient A - 2009<br />
                        Two GHSA All-Star Cast Members - Krishna Hare - 2009<br />
                        Chosen to perform at the World Storytelling Festival - Krishna Hare - 2009 <br />
                        Chosen to perform at the Edinburgh Fringe Festival - The Bacchae - 2010<br />
                        GHSA Best Ensemble - Mother Courage and Her Children - 2010<br />
                        One GHSA All-Star Cast Member - Mother Courage and Her Children - 2010<br />
                        GHSA Best Supporting Actress - Mother Courage and Her Children - 2010<br />
                        GHSA Best Support Actor - Mother Courage and Her Children - 2010<br />
                        GHSA Region Third Place - Mother Courage and Her Children - 2010<br />
                        Chosen to perform at Georgia Thespian Conference - Mother Courage and Her Children - 2011<br />
                        Shuler Hensley Award for Best Scenic Design - Into the Woods - 2011<br />
                        One GHSA All-Star Cast Member - The Women of Lockerbie - 2011<br />
                        GHSA Best Supporting Actor - The Women of Lockerbie - 2011<br />
                        GHSA Region Third Place - The Women of Lockerbie - 2011<br />
                        Chosen to perform at Georgia Thespian Conference - The Mystery Plays: Ghost Children - 2013<br />
                        2007-2008:<br />
                        Region Runner-up<br />
                        Three Outstanding Attorney awards earned by two students<br />
                        Two Outstanding Witness awards earned by two students<br />
                        2008-2009:<br />
                        Region Runner-up<br />
                        Three Outstanding Attorney awards earned by two students<br />
                        Three Outstanding Witness awards earned by two students<br />
                        2009-2010:<br />
                        Region Runner-up<br />
                        Three Outstanding Attorney awards earned by three students<br />
                        Two Outstanding Witness awards earned by two students<br />
                        2010-2011:<br />
                        Four Outstanding Attorney awards earned by three students<br />
                        One Outstanding Witness award earned by one student<br />
                        2011-2012:<br />
                        Region Champion<br />
                        Region and State  Champion in Girls Solo Dramatic Interpretation:  Rachel Canouse - 2012<br />
                        Three Outstanding Attorney awards earned by three students at Region<br />
                        Five Outstanding Witness awards earned by three students at Region<br />
                        Two Outstanding Attorney awards earned by two students at State<br />
                        Three Outstanding Witness awards earned by three students at State<br />
                        2012-2013:<br />
                        Region Champion<br />
                        Five Outstanding Attorney awards earned by three students at Region<br />
                        Four Outstanding Witness awards earned by two students at Region<br />
                        State Runner-Up:<br />
                        Four Outstanding Attorney awards earned by four students at State<br />
                        Five Outstanding Witness awards earned by three students at State</p>

                    <h4>LITERARY AWARDS</h4>
                    <p>Georgia Scholastic Press Association: Superior Newspaper - 2003<br />
                        Georgia Scholastic Press   Association: Superior Newspaper - 2004<br />
                        Georgia Scholastic Press Association: Superior Newspaper - 2006<br />
                        Georgia Scholastic Press   Association: Top Rated Student Newspaper in Georgia -   2007<br />
                        GSPA:&Acirc;&nbsp; All-Georgia Newspaper (Best Newspaper in State) -   2007<br />
                        Columbia   Scholastic Press Association: Gold Medalist, Literary Magazine - 2004<br />
                        Georgia   Scholastic Press Association: Literary Magazine - 2006<br />
                        American Scholastic   Press Association: Most Outstanding HS Yearbook - 2005<br />
                        National Scholastic   Press Association: First Class Yearbook with Distinction - 2005<br />
                        American   Scholastic Press Association: Most Outstanding HS Yearbook - 2006<br />
                        Columbia Scholastic Press   Association: Gold Medalist, Yearbook - 2006<br />
                        Georgia Scholastic Press   Association: Multiple Superior Rating for   Yearbook. Newspaper, and Literary Magazine - 2007<br />
                        National Crown Award: Most   Outstanding High School Yearbook - 2008<br />
                        American Association of Webmasters:   Silver Award, Best Website - 2008<br />
                        Georgia Scholastic Press: Superior Rating - 2008-2009<br />
                        Georgia Scholastic Press: Literary Magazine General Excellence Award - 2009-2010<br />
                        Southern Interscholastic Press Association: Eight Media Excellence Awards - 2008-2010<br />
                        Eight Superior Ratings Awards for Individual Contributions - 2008-2010<br />
                        Georgia Scholastic Press: Literary Magazine General Excellence Award - 2010-2011<br />
                        Columbia Scholastic Press Association: Gold Medalist Award - 2011<br />
                        National Scholastic Press Association: Design of the Year Award (First Place - Yujue Wang) - 2012<br />
                        National Scholastic Press Association: Recognition of Merit Award - 2013<br />
                        National Essay Contest - Jon Stossel - &quot;No We Can't&quot; - Finalists: Rohan Doshi &amp; Kelly Dodd - 2013</p>

                    <h4>ATHLETIC HONORS</h4>
                    <p>Boy's Golf: State AAAAA Champions - 2003<br />
                      Boy's Golf: Region Champion   - 2005<br />
                      Boy's Golf: State AAAAA Champions   - 2007<br />
                      Boy's Golf: Region Runner Up   - 2009<br />
                      Girl's Golf: State AAAAA Champions - 2005<br />
                      Girl's Golf: State AAAAA Champions - 2006<br />
                      Girl's Golf: State AAAAA   Champions - 2007<br />
                      Boy's Soccer: Region Champions - 2010<br />
                      Boy's Soccer: State Runner Up - 2010<br />
                      Girl's Soccer: Region Champions - 2010<br />
                      Girl's Soccer: State Runner Up - 2010<br />
                      Girl's Basketball: Region Runner up - 2007<br />
                      Girl's Basketball: Region Runner up - 2008<br />
                      Volleyball: State AAAAA Champions - 2005<br />
                      Volleyball:   State AAAAA Champions - 2007<br />
                      Volleyball: State AAAAA Champions - 2008<br />
                      Volleyball: Area Champions - 2009<br />
                      Volleyball: State Runner Up- 2010<br />
                      Girl's Swim/Dive: Womens State Champions - 2007<br />
                      Ice   Hockey: State League Champions - 2005<br />
                      Ice Hockey: State League Runner-Up -   2006<br />
                      Roller Hockey: State League Champions - 2005<br />
                      Roller Hockey: State   League Champions - 2008<br />
                      Girls Swimming: State AAAAA Runner-Up - 2006<br />
                      Girls   Swimming: State AAAAA Champions - 2007<br />
                      Boy's Tennis: State AAAAA Champions -   2006<br />
                      Boy's Tennis: State AAAAA Champions - 2007<br />
                      Boy's Tennis: State AAAAA   Champions - 2008<br />
                      Boy's Tennis: State AAAAA   Champions - 2009<br />
                      Boy's Tennis: State AAAAA   Champions - 2010<br />
                      Boy's Tennis: Region Runner Up - 2011<br />
                      Girl's Tennis: Region Champions - 2006<br />
                      Girl's Tennis: State AAAAA Runner Up - 2008<br />
                      Girl's Tennis: Region Champions  - 2009<br />
                      Cross Country: Fulton County Best Overall XC Program - 2006<br />
                      Boy's Cross Country: 1rst Place Walt Disney World XC Classic - 2009<br />
                      Boy's Cross Country: County Champions  - 2008<br />
                      Girl's Cross Country: 2nd Place Walt Disney World XC Classic - 2007<br />
                      Girl's   Lacrosse: State Runner-Up - 2007<br />
                      Equestrian: State Champions -   2007<br />
                      Fencing: State Runner-Up - 2007<br />
                      Fencing: State Runner-Up -   2008<br />
                      Fencing: GHSFL Mens State Champions -  2011<br />
                      Fencing: GHSFL Overall Womens State Champions -  2008<br />
                      Fencing: GHSFL Overall Womens State Champions -  2009<br />
                      Cheerleading: Region Runner Up -  2007<br />
                      Cheerleading: Region Runner Up -  2008<br />
                      Georgia Athletic Directors   Association: Overall Top 25 AAAAA Athletic Programs -   2006<br />
                      Georgia Athletic Directors   Association: Overall Top 25 AAAAA Athletic Programs -   2007<br />
                      Georgia Athletic Directors   Association: Overall Top 25 AAAAA Athletic Programs -   2008<br />
                      Georgia Athletic Directors   Association: AAAAA Girl's Top 5 Athletic Programs - 2006<br />
                      Georgia Athletic   Directors Association: AAAAA Girl's Top 5 Athletic Programs -   2007<br />
                      Georgia Athletic Directors   Association: AAAAA Girl's Top 5 Athletic Programs - 2008<br />
                      Georgia High School Associaton: Region Award   Runner Up - 2008</p>

                    <h4>CO-CURRICULAR HONORS</h4>
                    <p>Fulton   Foundation: PTSA Golden Apple Award for Outstanding Volunteerism -   2003<br />
                      Fulton   Foundation: PTSA Golden Apple Award for Outstanding Volunteerism -   2004<br />
                      Fulton   Foundation: PTSA Golden Apple Award for Outstanding Volunteerism -   2005<br />
                      Fulton   Foundation: PTSA Golden Apple Award for Outstanding Volunteerism -   2006<br />
                      Fulton   Foundation: PTSA Golden Apple Award for Outstanding Volunteerism -   2007<br />
                      Fulton   Foundation: PTSA Golden Apple Award for Outstanding Volunteerism -   2007<br />
                      Fulton   Foundation: PTSA Golden Apple Award for Outstanding Volunteerism -   2008</p>

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
