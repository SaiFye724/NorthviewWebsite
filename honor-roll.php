<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Honor Roll | Northview High</title>
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
                    <h3>HONOR ROLL</h3>
                    <hr>
                    <h4>SUPER HONOR ROLL</h4>
                    <ul>
                        <li>Recipients must earn a semester average 96 or higher.</li>
                        <li>Congratulatory cards are mailed to the parents of Honor Roll students.</li>
                        <li>Students must earn credit in six classes to qualify.</li>
                    </ul>
                    <h4>Students who received Super Honor Roll:</h4>
                    <p>Displayed Semester: <b>Fall 2016</b></p>
                    <h4 class="class-title">Class of 2019 Honorees</h4>
                    <div class="award-columns sophomore-honor-roll">
                        Ahn, Gaeun<br>
                        Ahn, Kelsey<br>
                        Alemayehu, Nathaniel<br>
                        Ali, Nadean<br>
                        Bae, John<br>
                        Baiju, Alina<br>
                        Balasubramaniam, Smruthi<br>
                        Belodoff, Joshua<br>
                        Boyd, Amirah<br>
                        Braynard, David<br>
                        Bui, Sylvia<br>
                        Burns, Marah<br>
                        Butcher, Paige<br>
                        Cao, Henry<br>
                        Cao, Michelle<br>
                        Chakragiri, Amshumanth<br>
                        Cheng, Brian<br>
                        Chimpiri, Mallika<br>
                        Chitluri, Sruti<br>
                        Cho, Jessica<br>
                        Cho, Olivia<br>
                        Choi, Grace<br>
                        Chokshi, Brijal<br>
                        Chung, Lauren<br>
                        Claassen, Constantin<br>
                        Clayman, Sam<br>
                        Custis, Caroline<br>
                        Dahiya, Nidhi<br>
                        Daniel, Nithin<br>
                        Deshpande, Gururaj<br>
                        Dhupam, Shreya<br>
                          Doshi, Rajat<br>
                          Drake, Jameson<br>
                          Dries, Patrick<br>
                          Dubey, Ishaa<br>
                          Dunn, Alexandra<br>
                          Elketroussi, Nadia<br>
                          Epstein, Roy<br>
                          Erickson, Grace<br>
                          Feng, Annie<br>
                          Ferguson, Collin<br>
                          Ferguson, Hannah<br>
                          Fulbright, Jordyn<br>
                          Ganeshan, Shashank<br>
                          Ganga, Anish<br>
                          Ghasedi, Sara<br>
                          Godbole, Varun<br>
                          Goh, Ema<br>
                          Gonella, Athrey<br>
                          Gorai, Aanya<br>
                          Govani, Aadarsh<br>
                          Gubbala, Suraj<br>
                          Gupta, Aniruddha<br>
                          Gupta, Sahil<br>
                          Harrold, Marissa<br>
                          He, Lawrence<br>
                          Himani, Farzeen<br>
                          Hsieh, Jasmine<br>
                          Jayasundera, Dylan<br>
                          Jesthi, Simrita<br>
                          Jung, Mingyu<br>
                          Kalia, Sonia<br>
                          Karra, Sriya<br>
                          Keshwani, Ayaan<br>
                          Kim, JiWon<br>
                          Kim, Rachael Haeun<br>
                          Kim, Sehyun<br>
                          Kolichala, Praneeth<br>
                          Kumar, Sanjeev<br>
                          Kumar, Suchita<br>
                          Lao, Jessica<br>
                          Lee, Minji<br>
                          Lim, Alejandro<br>
                          Lim, Ruth<br>
                          Lim, Youngho<br>
                          Lin, Annie<br>
                          Lin, Songtao<br>
                          Lingatlu, Sidarth<br>
                          Liu, Yujiao<br>
                          Mahakala, Nithya<br>
                          Mazlout, Adam<br>
                          Montero, Sebastian<br>
                          Munagapati, Aditya<br>
                          Nagru, Priun<br>
                          Nair, Akshay<br>
                          Nene, Ayush<br>
                          Nishiyama, Paula<br>
                          Ouyang, Evan<br>
                          Pai, Nidhi<br>
                          Pang, Michelle<br>
                          Pang, Tiffany<br>
                          Pannirselvam, Ramanan<br>
                          Para, Akaash<br>
                          Park, Emily<br>
                          Patel, Maitri<br>
                          Patel, Maya<br>
                          Patil, Ajinkya<br>
                          Pawar, Shiva<br>
                          Premjee, Imaan<br>
                          Puri, Ria<br>
                          Quan, Carson<br>
                          Rajeev, Priya<br>
                          Rao, Neha<br>
                          Reddy, Niharika<br>
                          Rivera, Reyes<br>
                          Ryu, David<br>
                          Satish, Neha<br>
                          Sehgal, Richa<br>
                          Setiawan, Isabelle<br>
                          Shah, Aayush<br>
                          Singh, Mohit<br>
                          Singh, Rishika<br>
                          Siripurapu, Lalith<br>
                          Soor, Harman<br>
                          Spencer, Morgan<br>
                          Srinivasan, Madhusudhan<br>
                          Suh, Christine<br>
                          Sun, Daniel<br>
                          Supariwala, Amaan<br>
                          Tabatabaei, Helia<br>
                          Tang, Sylvia<br>
                          Tau, Amy<br>
                          Tibuleac, Livia<br>
                          Tilva, Sameer<br>
                          Tioe, Nathan<br>
                          Tran, Dan Huy<br>
                          Vangala, Varun<br>
                          Vayalapalli, Ankita<br>
                          Vishwanath, Varun<br>
                          Wang, Kevin<br>
                          Wang, Tai<br>
                          Wen, Mark<br>
                          Wilson, Christian<br>
                          Woods, Madeline<br>
                          Woodward, Matthew<br>
                          Yan, Simon<br>
                          Yang, Charlie<br>
                          Yu, Angela<br>
                          Yu, Grace<br>
                          Yu, Jeffrey<br>
                          Zhang, Alyssa<br>
                          Zhang, Sheri<br>
                          Zheng, Jonathan<br>
                    </div>
                    <br>
                    <h4 class="class-title">Class of 2018 Honorees</h4>
                    <div class="award-columns junior-honor-roll">
                        Ahn, Alexander<br>
                        Ahn, Jennifer<br>
                        Al Tibi, Ghaith<br>
                        Alatrista, Jose<br>
                        Aucoin, Anna<br>
                        Badari, Ananda<br>
                        Banerjee, Rupkatha<br>
                        Bell, Alexis<br>
                        Beyene, Hermela<br>
                        Bolton, Brooke<br>
                        Chandra, Christopher<br>
                        Chang, Jason<br>
                        Chauhan, Sneha<br>
                        Chen, Annie<br>
                        Chen, Blake<br>
                        Chen, Sophia<br>
                        Cheong, Cynthia<br>
                        Chow, Christie<br>
                        Chung, Kyongyun<br>
                        Chung, Seungmin<br>
                        Churiwal, Mehal<br>
                        Cistulli, Megan<br>
                        Dama, Ashitha<br>
                        Dong, Dennis<br>
                        Francis, Rebecca<br>
                        Fu, Toby<br>
                        Fujinaga, Rui<br>
                        Hermann, Lisa<br>
                        Hoffman, Philip<br>
                        Horton, Jamie<br>
                        Hu, George<br>
                        Huang, Vincent<br>
                        Irwin, Peter<br>
                        Jeon, Joshua<br>
                        Kadiyala, Sneha<br>
                        Kang, Gina<br>
                        Kang, Rayen<br>
                        Karnam, Preethi<br>
                        Karras, Kassia Mei<br>
                        Keane-Murphy, Nichola<br>
                        Khan, Rayyan<br>
                        Kim, Alex<br>
                        Kim, HaYoung<br>
                        Kim, Jae Won<br>
                        Kim, Soo Min<br>
                        Kotike, Neha<br>
                        Kuppusamy, Shirin<br>
                        Lau, Joshua<br>
                        Lee, Jina<br>
                        Lee, Maxine<br>
                        Li, Joshua<br>
                        Li, Richard<br>
                        Liang, Sherry<br>
                        Liao, Helena<br>
                        Light, Hayden<br>
                        Lin, Alex<br>
                        Lin, Yun Jia<br>
                        Liu, Diana<br>
                        Liu, Yi<br>
                        Lizunaite, Leja<br>
                        Lu, Julia<br>
                        Luu, Vivian<br>
                        Mannam, Kaivalya<br>
                        Mannam, Sneha<br>
                        Manning, Daphne<br>
                        Mehta, Vinay<br>
                        Muruganandan, Shruti<br>
                        Ni, Joseph<br>
                        Pandiri, Vamshi<br>
                        Park, Cynthia<br>
                        Patel, Bianca<br>
                        Patel, Remi<br>
                        Pateria, Aparna<br>
                        Patil, Abhijeet<br>
                        Potnis, Cahil<br>
                        Ramakrishnan, Mahit<br>
                        Rao, Sanjana<br>
                        Reddy, Vineet<br>
                        Ronanki, Akash<br>
                        Ryoo, Seong<br>
                        Schechtman, Alexander<br>
                        Seemakurti, Siddarth<br>
                        Shah, Abdullah<br>
                        Smith, Michael<br>
                        Tan, Kok Wei<br>
                        Temme-Bapat, Sarika<br>
                        Thatavarty, Anirudh<br>
                        Trautwein, Michael<br>
                        Tsaur, Ethan<br>
                        Vaish, Ishan<br>
                        Vayalapalli, Amoolya<br>
                        Venapally, Anudeep<br>
                        Vikraman, Pooja<br>
                        Vinokurskaya, Maria<br>
                        Wang, Arnold<br>
                        Wang, Carrie<br>
                        Wong, Ka Chit<br>
                        Xing, Corey<br>
                        Yang, Eun<br>
                        Yang, Nathaniel<br>
                        Yao, Horace<br>
                        Yarabarla, Suma<br>
                        Yerraguntla, Sandeep<br>
                        Zheng, Jiale<br>
                    </div>
                    <br>
                    <h4 class="class-title">Class of 2017 Honorees</h4>
                    <div class="award-columns senior-honor-roll">
                            Ahn, Hyunjun<br>
                            Alavala, Neeraj<br>
                            Ali, Sahar<br>
                            Alton, Catherine<br>
                            Anderson, Emma<br>
                            Anilnath, Nidhi<br>
                            Auerbach, Cade<br>
                            Austin, Ruth<br>
                            Ballur, Kalyani<br>
                            Bandlamudi, Saishreya<br>
                            Banerjee, Pragya<br>
                            Bethancourt, Miguel<br>
                            Bharadwaj, Pavan<br>
                            Bhardwaj, Ashna<br>
                            Braynard, Sara<br>
                            Brenan, Margaret<br>
                            Bruck, Alyssa<br>
                            Bryant, Mikayla<br>
                            Cercone, Michael<br>
                            Chen, Kenneth<br>
                            Cheng, Charles<br>
                            Cho, Michelle<br>
                            Chung, Hannah<br>
                            Cistulli, Thomas<br>
                            Derrickson, William<br>
                            Doyle, Kevin<br>
                            Elsaqa, Tasneem<br>
                            Fishburn, Aaron<br>
                            Forghani, Rameen<br>
                            Gao, Jasmin<br>
                            Garg, Manya<br>
                            Ghora, Rishabh<br>
                            Guo, Felicia<br>
                            Gupta, Saisha<br>
                            Han, Jay<br>
                            Han, Wanrong<br>
                            Henn, Katharine<br>
                            Hu, Yujing<br>
                            Huang, Harrison<br>
                            Jang, Sarah<br>
                            Jeng, Richard<br>
                            Keane-Murphy, Brittany<br>
                            Khetpal, Simran<br>
                            Kim, Haji<br>
                            Kim, John<br>
                            Kim, Matthew<br>
                            Kim, MinJi<br>
                            Kim, Rachel Sungah<br>
                            Kim, Sangjae<br>
                            Koomen, Leonardo<br>
                            Koratana, Animesh<br>
                            Koster, Philip<br>
                            Ku, Daniel<br>
                            Kumar, Shreyas<br>
                            Lazarus, Conor<br>
                            Lee, Mina<br>
                            Lee, Yoorim<br>
                            Lewow, Sean<br>
                            Li, Judy<br>
                            Lim, Hye<br>
                            Lin, Amy<br>
                            Liu, Michelle<br>
                            Marathe, Atharv<br>
                            Mei, Calista<br>
                            Menon, Rohan<br>
                            Midlej Martineli Gramacho, Felipe<br>
                            Mohanavelu, Prahathishree<br>
                            Moy, Thomas<br>
                            Murugesan, Yuvaneshwar<br>
                            Nariani, Soumil<br>
                            Pacifico, Matthew<br>
                            Pan, Sally<br>
                            Pandiri, Keshav<br>
                            Pandya, Rushabh<br>
                            Park, Jun Ho<br>
                            Patel, Zane<br>
                            Pfahl, Emily<br>
                            Potdar, Sidharth<br>
                            Raghavan, Nithin<br>
                            Rainford, Alexyss<br>
                            Ramesh, Tarun<br>
                            Ramineni, Shreya<br>
                            Rao, Omkara<br>
                            Rawla, Rhea<br>
                            Reny, Christopher<br>
                            Rowe, Emma<br>
                            Sanghvi, Shreya<br>
                            Sanghvi, Yashi<br>
                            Savla, Sil Sandeep<br>
                            Sell, Christopher<br>
                            Seshadri, Pavan<br>
                            Singh, Gurnoor<br>
                            Suzuki-Williams, Lui<br>
                            Swaminathan, Nagaraj<br>
                            Tang, Leonardo<br>
                            Terry, Kristin<br>
                            Tian, Leilani<br>
                            Vaghela, Simran<br>
                            Vrid, Kavya<br>
                            Wang, Andrew<br>
                            Wang, Kelly<br>
                            Williams, Jacob<br>
                            Wilson, Sabrina<br>
                            Xiang, Julie<br>
                            Yakubovich, Veronica<br>
                            Yang, Catherine<br>
                            Yang, Starr Tu<br>
                            Yang, Yuanzhang<br>
                            Yoder, Lukas<br>
                            Yuan, Jeremy<br>
                            Yun, Chanwoo<br>
                            Zhan, Jefferson<br>
                            Zhang, Amanda<br>
                            Zhang, Bill Wang<br>
                            Zhang, Joseph<br>
                            Zhou, Irene<br>
                            Zhu, Raymond Haonan<br>
                            Zhu, William<br>

                  </div>
                    <br>
                    <hr>
                    <h4>HONOR ROLL</h4>
                    <ul>
                        <li>Recipients must earn a semester average of 88 to 95.</li>
                        <li>Congratulatory cards are mailed to the parents of Honor Roll students.</li>
                        <li>Students must earn credit in six classes to qualify.</li>
                        <li>Honor roll recipients are invited to a PTSA sponsored reception held during the school day.</li>
                    </ul>
                    <h4>Students who received Honor Roll:</h4>
                    <p>Displayed Semester: <b>Fall 2016</b></p>
                    <h4 class="class-title">Class of 2019 Honorees</h4>
                    <div class="award-columns sophomore-honor-roll">
                        Ahmed, Safa Badrun<br>
                        Akkara, Nikitha John<br>
                        Amelchenko, Katarina Jessica<br>
                        Aratame, Ken<br>
                        Asgari, Sean Patrick<br>
                        Assaf, Elizabeth Ann<br>
                        Au, Man-Yee Amy<br>
                        Auerbach, Campbell Richards<br>
                        Ayyagari, Anant Bharadwaj<br>
                        Bahk, Alex Byungkyu<br>
                        Beard, Amanda Marie<br>
                        Bennett, Lindsay Reed<br>
                        Bernardino, Ava Susanne<br>
                        Bolton, McIntyre Patrick<br>
                        Bonnet, Kaitlin McKenzie<br>
                        Booth, Calvin Andrew<br>
                        Brown, Luke Alexander<br>
                        Bruck, Benjamin Alex<br>
                        Bulick, Julia Erin<br>
                        Cardinalli, Caleb Guy<br>
                        Casal, Brooke Skylar<br>
                        Caylor, Robert William<br>
                        Chalmers, Meagan Lewis<br>
                        Chapa, Eve Quetzal<br>
                        Cho, Isaac Yungrae<br>
                        Cone, Lance Edward<br>
                        Daigle, Jordyn Reid<br>
                        Davenport, Joseph Ray<br>
                        Davis, Campbell Graham<br>
                        Davis, Caroline Grace<br>
                        Devre, Chloe Elizabeth-Harris<br>
                        Dharmaraj, Prithvi<br>
                        Do, Mimi Bao-Khanh<br>
                        Epstein, Gal<br>
                        Fret, Sydney Geanell<br>
                        Frey, Jason Lee<br>
                        Gagguturu, Atif<br>
                        Gandhi, Kabir<br>
                        Gandikota, Kaushal<br>
                        Geiger, Nicolas Joseph<br>
                        George, Rohan Benedict<br>
                        Ghasedi, Tara<br>
                        Gill, Navkaran Singh<br>
                        Gioia, Danielle Nicole<br>
                        Gopalakrishna, Dhyuti<br>
                        Hama, Yumika<br>
                        Han, Seungwoo<br>
                        Hecht, Jennifer Rae<br>
                        Hiten, Katherine Nicole<br>
                        Hong, Seol Bin<br>
                        Hutcheson, Andrew Thomas<br>
                        Ifarinde, Michelle Olaronke<br>
                        Jacox, Phoenix Hope<br>
                        Javadi, Amir Reza<br>
                        Jeong, Ha Min<br>
                        Joshi, Vinay Jayant<br>
                        Josselson, Emily Faith<br>
                        Juneja, Mohammed Farhan<br>
                        Kapwadi, Keren Ndaya<br>
                        Keramane, Halah Z<br>
                        Kim, Michele Love<br>
                        Kumar, Varun C<br>
                        Kuwamura, Jasmine Mari<br>
                        Le, Maxwell Thien<br>
                        Lee, Christina Sunbum<br>
                        Lee, Jane K.<br>
                        Lee, Janice<br>
                        Lee, Lucille Jiesol<br>
                        Lee, Richard Yubin<br>
                        Lim, Matthew Hyun<br>
                        Limyadi, Karina Mulan<br>
                        Lin, Andrew<br>
                        Lin, Jean<br>
                        Livingston, Maria Van<br>
                        Lokhande, Nikita Praveen<br>
                        Long, Dylan Rithik<br>
                        Lowrance, John Neal<br>
                        Mandala, Uday<br>
                        May, Kendall Nicole<br>
                        McDanel, Emily Lauren<br>
                        McLaughlin, Colin Alexander<br>
                        McLaughlin, Mark Joseph<br>
                        Michel, William Coleman<br>
                        Millard, Lance Patrick<br>
                        Mintz, Zachary Jacob<br>
                        Mitchell, Jacob Riley<br>
                        Mitchell, Lance Reid<br>
                        Mitter, Kush<br>
                        Monchilovich, Lincoln Surianto<br>
                        Myers, Brayton Christian<br>
                        Nakagawa, Yuto Paul<br>
                        Narayanan, Aditya Ramakrishnan<br>
                        Narayanan, Aniketh Tejas<br>
                        Nath, Anshika<br>
                        Nguyen, Andrew Huu<br>
                        Oladipo, Sidney Ademola<br>
                        Park, Dokyu<br>
                        Park, Yun Seo<br>
                        Parker III, Malvin David<br>
                        Peruri, Anish Krishna<br>
                        Phung, Hieu Dinh<br>
                        Portaro, Nicholas Kade<br>
                        Prusty, Ritesh<br>
                        Ragunathan, Divya<br>
                        Rawlin, Mackenzie Lee<br>
                        Redmon, Robert Wade<br>
                        Rho, Irene Seyoung<br>
                        Safarriyeh, Brandon Thurmond<br>
                        Salvi, Aman Abhijit<br>
                        Shanmugam, Sivani<br>
                        Shappell, Eden Olivia<br>
                        Shingala, Madhavi<br>
                        Shokoohi, Aria<br>
                        Shuster, Simon Lucas<br>
                        Siegel, Sydney Ariel<br>
                        Silver, Ansley Rivel<br>
                        Simon, Kayla Paige<br>
                        Singireddy, Vishruth Reddy<br>
                        Sperry, Johnathan Andrew<br>
                        Stalheim, Taylor Madison<br>
                        Surani, Roha Mahum<br>
                        Thourani, Naveen Ashok<br>
                        Timokhin, Christina Nicole<br>
                        Ulrich, Justine Renee<br>
                        Upton, Brianna Nicole<br>
                        Vellore, Aditi Sathishkumar<br>
                        Vemulapalli, Divya<br>
                        Viswanathan, Karthik<br>
                        Weaver, Jennifer Marie<br>
                        White, Morgan Catherine<br>
                        Whitridge, Leigha Christine<br>
                        Williams, Dayani Tirzah<br>
                        Woodman, Gabrielle Lana<br>
                        Wu, Alan<br>
                        Xie, Bing Steven<br>
                        Xu, Leo Channing<br>
                        Yakovlev, Nicole Sergiy<br>
                        Yerneni, Sravika Saroja<br>
                        Yerpude, Devansh<br>
                        Yi, Joshua Young<br>
                        Yim, Sydney Yoon<br>
                        Yoder, Jennifer Annika<br>
                        Yoder, Katherine Diane<br>
                        Yu, Derrick<br>
                        Yun, Mi Lee Jenny<br>
                        Zhang, Hanyan<br>
                        Zhang, Xiarui Sherry<br>
                        Zheng, Wendy<br>
                        Zhu, Ouwen<br>
                    </div>
                    <br>
                    <h4 class="class-title">Class of 2018 Honorees</h4>
                    <div class="award-columns junior-honor-roll">
                        Abimbola, Tifeoluwani Michael<br>
                        Abreu, Maria Gabriella<br>
                        Adeseye, Arianna Nicole<br>
                        Ahmed, Saadh T<br>
                        Ajmera, Ridhi<br>
                        Alvilhiera, Aubrey Justine<br>
                        Ambadipudi, Sravya Naga<br>
                        An, You Bin<br>
                        Anderson, Zoe Marie<br>
                        Anthony, Alexia Irene<br>
                        Armstrong, Katherine Augusta<br>
                        Bae, So Hyun<br>
                        Banh, Kim-Yen Nguyen<br>
                        Bethancourt, Andres Emilio<br>
                        Biffl, Nicholas Daniel<br>
                        Briggs, Dio Amar<br>
                        Buford, Jada Ricquel<br>
                        Buitrago, Camila Andrea<br>
                        Byrd, Jenna Marie<br>
                        Cadet, Lorainne<br>
                        Caldera, Alan Rosendo<br>
                        Carr, Christyn Chanelle<br>
                        Chans, Piper Deniece<br>
                        Chavan, Jyoti<br>
                        Chawla, Saira<br>
                        Chen, Zimeng<br>
                        Cherian, Zach Jacob<br>
                        Chetty, Meena Meyyappan<br>
                        Choi, Yennah<br>
                        Chratian, Erin Alesse<br>
                        Chratian, Sydney Michelle<br>
                        Christiansen, Callie Ann Louise<br>
                        Chung, Olivia<br>
                        Chung, Peilin<br>
                        Chuo, Brian<br>
                        Cleveland, Kimberly Joy<br>
                        Cozier, Tristan Everett<br>
                        Daklouche, Sylvia Marie<br>
                        Dandavate, Nupur Manoj<br>
                        Datta, Doyel<br>
                        Davern, Audrey Nicole<br>
                        Dhanala, Apoorva<br>
                        Dodds, Madison Diane<br>
                        Duan, Stephanie<br>
                        Fadnis, Payal Prashant<br>
                        Ferrel, Sean Michael<br>
                        Fukuba, Koharu<br>
                        Fuller, Maya Melina<br>
                        Garcia, Maria Fernanda<br>
                        Ghatti, Sanjay<br>
                        Gopalakrishna, Vidya<br>
                        Gopu, Gaurav<br>
                        Greenberg, Taylor Leigh<br>
                        Gregg III, John Dever<br>
                        Gu, Charlena Yuan<br>
                        Gupta, Mahek<br>
                        Gurin, Stella Elizabeth<br>
                        Hahn, Sarah Kathryn<br>
                        Hamill, Sophia Nicole<br>
                        Harold, Kristen Victoria<br>
                        Hayer, Eeheet Singh<br>
                        Head, Emily Grace<br>
                        Hong, Harrison Hwa<br>
                        Horn, Stephen Frederick<br>
                        Hsu, Alice<br>
                        Hu, May Joy<br>
                        Huang, Sara Tianxin<br>
                        Hudzina, Matthew Jonathan<br>
                        Issa, Pamela<br>
                        Jackson, Giulia Clara<br>
                        Jain, Mahika<br>
                        Jang, Yuree<br>
                        Jeong, Hyojun<br>
                        Jeyamurthy, Aneisha<br>
                        Jiang, Hanson Liu<br>
                        Johnson, Noah Patrick<br>
                        Jones, William Carmichael<br>
                        Jones, Zavion Andrew<br>
                        Juneja, Faeez Imtiaz<br>
                        Kalra, Eshaan<br>
                        Kandikattu, Sugeeth<br>
                        Kang, Dong Yeon<br>
                        Keenan, Grace Colleen<br>
                        Khattar, Rohan<br>
                        Kim, Daesung<br>
                        Kim, Lee Jung Esther<br>
                        Kim, Terry<br>
                        Kim, Winston Yong Jin<br>
                        Klinkman, Sean Thomas<br>
                        Kolapalli, Anirudh Nihar<br>
                        Kothapeta, Samanyu Vummarasetty<br>
                        Kudchikar, Arsheen Azim<br>
                        Kumar, Ashwin Saravana<br>
                        LaForge, Grace Maryah<br>
                        Lee, David Joshua<br>
                        Lee, Preston Thomas<br>
                        Lee, Seung Jun Joseph<br>
                        Levitt, Angelina Marie<br>
                        Li, Randy Andrew<br>
                        Lim, Juli Young<br>
                        Limyadi, Matthew Joseph<br>
                        Long, HaoJun<br>
                        Lord, Samuel Aidan<br>
                        Lowenthal, Ethan Michael<br>
                        Lu, Audrey Claudia<br>
                        Lu, Cody Yiran<br>
                        Lu, Jie Shen<br>
                        Lu, Kejia<br>
                        Lum, Maia Hoku<br>
                        Lynch, Colin Joseph<br>
                        Mai, Kristy Ngoc<br>
                        Mannan, Arzu Ruhi<br>
                        Martilotta, Elisabeth Xiaoying<br>
                        Martin, Jonathan Wesley<br>
                        Martinez, Isabella Victoria<br>
                        Mavrikas, Daphne Anastasia<br>
                        McDaniel, Colton Lee<br>
                        Mendicino, Nicolas Anthony<br>
                        Menon, Sachin<br>
                        Miller, Brent Howay<br>
                        Mironov, Rose Victoria<br>
                        Moore, Daniel Lee<br>
                        Moreno, Claudia Paz<br>
                        Morgan, Charles Grant<br>
                        Motla, Vishaal Reddy<br>
                        Mukherjee, Isheeta<br>
                        Mullins, Amy Elizabeth<br>
                        Myneni, Anish Sai<br>
                        Nachazel, Ian Frederick<br>
                        Nair, Sidharth Subash<br>
                        Nakkina, Sai Rashmi<br>
                        Nguyen, Caitlin Ngoc-Linh<br>
                        Nguyen, Luc Thien<br>
                        Nguyen, Selena<br>
                        Ni, Anny<br>
                        Ni, Cathy<br>
                        Nichols, Rachel Ann<br>
                        Normand, Courtney Rene<br>
                        Paek, SooJin<br>
                        Page, Abigail Jonelle Grace<br>
                        Park, Jinseo<br>
                        Patil, Preetish Ranjan<br>
                        Pearson, Carson Kennedy<br>
                        Pereyra, Ana Paula<br>
                        Perrine, Owen Moon<br>
                        Poudel, Aanya<br>
                        Prabhuram, Rishikesh<br>
                        Quan, Taylor Holom<br>
                        Ramchandani, Vivek Deepak<br>
                        Ramesh, Harsha Nattanmai<br>
                        Ravikanth, Ankur Tumkur<br>
                        Rawlin, Parker Austen<br>
                        Ricks, Ian Jeremy<br>
                        Romera, Alexa Catalina<br>
                        Rosati, Meghan Christina<br>
                        Ruby, Leah Marie<br>
                        Ruppert, Jacob Paul<br>
                        Ryan, Lindsey Marie<br>
                        Ryan, Patrick Michael<br>
                        Shahani, Rohan<br>
                        Sharma, Aditya Deepak<br>
                        Shepherd, Shelby Patricia<br>
                        Skjoedt, Catherine Elizabeth<br>
                        Sliwinski, Emily Lori<br>
                        Sohani, Rohan Sudhir<br>
                        Song, Ilhwan<br>
                        Sridhar, Sanjay Yeshas<br>
                        Stewart, Jordan Elizabeth<br>
                        Su, Tommy Jiacheng<br>
                        Tallapally, Nikita Rao<br>
                        Thomas, Ananda Joi<br>
                        Thomas, Ania Faith<br>
                        Thompson, Alison Sung<br>
                        Tran, Justin Lu<br>
                        Umapathy, Divya<br>
                        Venkatesh, Adithya<br>
                        Vetrovsky, Ana Elise<br>
                        Virag, Emily Jane<br>
                        Waagner, Natalie Patricia<br>
                        Wang, Katie<br>
                        Wang, Robert Jer-Yeu<br>
                        Wei, Christopher James<br>
                        William, Joshua Robert<br>
                        Yan, Larry M<br>
                        Yao, Steven<br>
                        Yi, Susan Ellen<br>
                        Yin, Ashley W.<br>
                        Yong, Derek Chean<br>
                        Yu, Dustin<br>
                        Yu, Seong Won Anthony<br>
                        Zamora, Stephanie Christine<br>
                        Zhang, Anita Becky<br>
                        Zittrouer, Caroline Louise<br>
                    </div>
                    <br>
                    <h4 class="class-title">Class of 2017 Honorees</h4>
                    <div class="award-columns senior-honor-roll">
                           Achar, Ishan<br>
                        Agoumba, Emmanuella Leda-Sedahide<br>
                        Angirish, Ark<br>
                        Anthony, Arianna Nicole<br>
                        Archambeau, Karsyn Ann Faith<br>
                        Atri, Dhruv<br>
                        Avvaru, Chaitanya Guru<br>
                        Baboota, Ankit<br>
                        Benelli, Allison Olivier<br>
                        Bernardino, Allison Michelle<br>
                        Bhatnagar, Amal<br>
                        Bhumireddy, Swetha<br>
                        Boden, McKinley Elizabeth<br>
                        Bray, Isabelle Grace<br>
                        Broomhead, Christopher David<br>
                        Brown, Abbie Elizabeth<br>
                        Burnett, Leah Jacqueline<br>
                        Caron, Gabriel Conrad<br>
                        Carr, Ashley Lauren<br>
                        Carroll, Jennifer<br>
                        Chambers, Jacqueline Suzanne<br>
                        Chang, Rachel Noel<br>
                        Chans, Colbie Savannah<br>
                        Chapa, Dylan Enrique<br>
                        Charaniya, Tawil Mansoor<br>
                        Cho, Albert<br>
                        Chow, Tsz Ching<br>
                        Chung, Grace Dahae<br>
                        Cinthala, Susmitha Chandraprabha<br>
                        Claussen, William Ngo<br>
                        Clough, Gracie Catherine<br>
                        Cone, Zachary Alan<br>
                        Cox, Lauren Alexandra<br>
                        Cutler, Duncan Brown<br>
                        Dalmia, Devesh<br>
                        Das, Richa<br>
                        Davenport-Mills, Chance Amaya<br>
                        Davis, Michaela Bette<br>
                        Deshmukh, Shardul Sachin<br>
                        Deshpande, Anushka Sunil<br>
                        Dhamapurkar, Rhea Rajendra<br>
                        Donnelly, Lilah Irene<br>
                        Doshi, Shivani K<br>
                        Duddempudi, Vineeth<br>
                        Dugar, Surbhi R.<br>
                        Eads, Thomas Stephen<br>
                        Engeron, Whitney Elise<br>
                        Eubanks, Mia Makhai<br>
                        Fisher, Preston Allen<br>
                        Fox, Ashley Rebecca<br>
                        Frey, Samuel Robert<br>
                        Gamble, Ethan Thomas<br>
                        Ganapathy, Srividya<br>
                        Gandhi, Arjun<br>
                        Garla, Harshith<br>
                        Garman, Olivia Jeannine<br>
                        Geiger, Jacob Laurence<br>
                        Ghaya, Saim Shakil<br>
                        Gilbreth, Geoffrey Chance<br>
                        Gill, Joelle Leah<br>
                        Gundala, Anoop Srivatsa<br>
                        Hafiane, Yusuf Imran<br>
                        Haider, Fatima Sasha<br>
                        Hama, Erika<br>
                        Hamill, Sean Thomas<br>
                        Han, Joey Heung<br>
                        Harrison IV, Dennis Lee<br>
                        Hawkins, Rachel Elizabeth<br>
                        Head, Katherine Glynn<br>
                        Hernandez, Sean Clarke<br>
                        Ho, Joey Kind<br>
                        Holte, Catherine Elise<br>
                        Hung, Jared<br>
                        Ifarinde, Jesse<br>
                        Igumnova, Evgenia Yuryevna<br>
                        Im, Brendon Saeha<br>
                        Inam, Zara Mariyam<br>
                        Iwane, Mayu<br>
                        Jacobson, Mari Sklar<br>
                        Jain, Aarushi<br>
                        Jeong, Yu Rae<br>
                        Jiang, Amy Lyn<br>
                        Jordan, Chad Alan<br>
                        Kaluri, Abhinav Shonit<br>
                        Kar, Tanmay<br>
                        Kennedy, Cameron Tariq<br>
                        Kent, Thomas Ryan<br>
                        Khanna, Kartik<br>
                        Kim, Do Hyun Daniel<br>
                        Kim, Janice Helim<br>
                        Kim, YuMin<br>
                        Kopec, Sophie Margaret<br>
                        Lai, Martin Yue-Toa<br>
                        Lan, Lisa<br>
                        Larcinese, Ryan Donald<br>
                        Le, Bao Tran Duc<br>
                        Lee, Jessica Hee-Jung<br>
                        Lee, Joonho<br>
                        Lee, Seul<br>
                        Lee, Ye Jung<br>
                        Lim, Joshua Hyun<br>
                        Lim, Nicholas Wei-Jie<br>
                        Liu, JiaCheng<br>
                        Long, Dean Sothik<br>
                        Lovingood, Judge Trammell<br>
                        Lu, Ryan Tony<br>
                        Ma, Yu Tian<br>
                        Maddali, Sai Karthik<br>
                        Maharath, Steven<br>
                        Mamdani, Sabrina Siraj<br>
                        Manne, Anuhya<br>
                        Martin, Madison Lee<br>
                        May, Zachary Drew<br>
                        McBee, Mason Wesley<br>
                        McKinley, Macy Nicole<br>
                        Menetre, Michael Wesley<br>
                        Meng, Austin Dejian<br>
                        Miller, Charles Washington<br>
                        Miranda, Michelle Ann<br>
                        Mitchell, Kaitlin McKinley<br>
                        Mitrovich, Olivia Mae<br>
                        Mohammed, Dawood Fakhruddin<br>
                        Moreno, Mariana Fey<br>
                        Moy, Evan Lee<br>
                        Moyer, Savannah Nicole<br>
                        Munoz, Sara Maria<br>
                        Muzi, Morgan Elise<br>
                        Naddor, Shannon Ami<br>
                        Nakagawa, Shota David<br>
                        Nayak, Aadya Rajesh<br>
                        Neil, Yendi Abigail<br>
                        Nemorin, Jermaine Christian<br>
                        Nwanze, Desiree Tobechukwu<br>
                        O'Connell, Courtney Grace<br>
                        Park, Joannah Koh-Eun<br>
                        Park, Ju Sung<br>
                        Park, Susan<br>
                        Patel, Parth Rajul<br>
                        Patel, Sahil Manish<br>
                        Phillips, Elizabeth Anne<br>
                        Pierce, Christopher Ryan<br>
                        Puri, Sachi<br>
                        Qazi, Sania Irfan<br>
                        Ragas, Aria MaKenzie<br>
                        Rajakani, Vishal<br>
                        Rhee, Nicholas Jung Hyun<br>
                        Rivera-Reyes, Javier Antonio<br>
                        Roh, Araceli Gina<br>
                        Romanchik, Eric Michael<br>
                        Rwizi, Kudzaishe Jeane<br>
                        Sabbella, Srija<br>
                        Sampathkumar, Prashanth<br>
                        Sconiers, Naomi Adia<br>
                        Shao, Shina<br>
                        Shiffman, Noah Samuel<br>
                        Siatkowski, Kevin Patrick<br>
                        Simmonds, Faith Christina<br>
                        Simmons, Brooke Alexis<br>
                        Simon, Sophie Ann<br>
                        Sims, Ryan Austin<br>
                        Skinner, Natalie Anne<br>
                        Smith, Lindsey Nicole<br>
                        Song, Kara Hyunhee<br>
                        Srinivasan, Ramanuj<br>
                        Syed, Roman Ali<br>
                        Talbert, Mackenzie Dodd<br>
                        Terry, Matthew Richard<br>
                        Thomas, Aleysha Ann<br>
                        Timokhin, Alexandra Marie<br>
                        Titus, Shannon Alexis<br>
                        Trench, Cara Rose<br>
                        Tyo, Victoria Rose<br>
                        Venkatachalam, Deepti<br>
                        Wells, Evan Spencer<br>
                        Whalley, Joe Langford<br>
                        Wilkins, Desiree Simone<br>
                        Williams, Ryan David<br>
                        Wilson, Michael James<br>
                        Yang, Sarah Peiying<br>
                        Yi, Elizabeth<br>
                        Yin, Simon Yuan Chieh<br>
                        Yu, Davis<br>
                        Yu, Kenneth Kaixian<br>
                        Zhang, Jiayi<br>
                        Zheng, Daniel L<br>
                        Zhu, Charles<br>
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
