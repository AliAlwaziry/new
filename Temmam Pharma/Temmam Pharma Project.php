<?php
session_start();
$errors = array();
$db=mysqli_connect('localhost','root','','Temmam_Pharma');

if(!$db){
    die("Connection failed: ". mysqli_connect_error());
}
$query = "SELECT * FROM header_data WHERE id = 1 ";
$results = mysqli_query($db, $query);
$row = mysqli_fetch_assoc($results);
$id = $row['id'];
$description = $row['description'];
$button_name = $row['button_name'];
$button_url = $row['button_url'];
$facebook = $row['facebook'];
$twitter = $row['twitter'];
$insta = $row['insta'];
$img = $row['img'];
/////////////////////////////////////welcome//////////////
$query1 = "SELECT * FROM welcome WHERE id = 1 ";
$results1 = mysqli_query($db, $query1);
$row1 = mysqli_fetch_assoc($results1);
$id = $row1['id'];
$title = $row1['title'];
$description1 = $row1['description'];
$agent_num = $row1['agent_num'];
$agent_name = $row1['agent_name'];
$emp_num = $row1['emp_num'];
$emp_name = $row1['emp_name'];
$brunch_num = $row1['branch_num'];
$brunch_name = $row1['brunch_name'];
$customer_num = $row1['customer_num'];
$customer_name = $row1['customer_name'];
/////////////////////////////////////about us//////////////
$query2 = "SELECT * FROM aboutus WHERE id = 1 ";
$results2 = mysqli_query($db, $query2);
$row2 = mysqli_fetch_assoc($results2);
$id2 = $row2['id'];
$title2 = $row2['title'];
$question2 = $row2['question'];
$description2 = $row2['description'];
$vid2 = $row2['video'];
/////////////////////////////////////about company//////////////
$query3 = "SELECT * FROM aboutcom WHERE id = 1 ";
$results3 = mysqli_query($db, $query3);
$row3 = mysqli_fetch_assoc($results3);
$id3 = $row3['id'];
$title3 = $row3['title'];
$title23 = $row3['title2'];
$img13 = $row3['img1'];
$img23 = $row3['img2'];
$img33 = $row3['img3'];
$img43 = $row3['img4'];
$img53 = $row3['img5'];
$img63 = $row3['img6'];
$name13 = $row3['name1'];
$name23 = $row3['name2'];
$name33 = $row3['name3'];
$name43 = $row3['name4'];
$name53 = $row3['name5'];
$name63 = $row3['name6'];
/////////////////////////////////////our strategy//////////////
$query4 = "SELECT * FROM strategy WHERE id = 1 ";
$results4 = mysqli_query($db, $query4);
$row4 = mysqli_fetch_assoc($results4);
$id4 = $row4['id'];
$title4 = $row4['title'];
$description4 = $row4['description'];
$img4 = $row4['img'];
/////////////////////////////////////our partners//////////////
$query5 = "SELECT * FROM partners WHERE id = 1 ";
$results5 = mysqli_query($db, $query5);
$row5 = mysqli_fetch_assoc($results5);
$id5 = $row5['id'];
$title5 = $row5['title'];
$description5 = $row5['description'];
$img15 = $row5['img1'];
$img25 = $row5['img2'];
$img35 = $row5['img3'];
$img45 = $row5['img4'];
$img55 = $row5['img5'];
/////////////////////////////////////timeline//////////////
$query6 = "SELECT * FROM timeline WHERE id = 1 ";
$results6 = mysqli_query($db, $query6);
$row6 = mysqli_fetch_assoc($results6);
$id6 = $row6['id'];
$title6 = $row6['title'];
$description6 = $row6['description'];
$date16 = $row6['date1'];
$date26 = $row6['date2'];
$date36 = $row6['date3'];
$date46 = $row6['date4'];
$date56 = $row6['date5'];
$event16 = $row6['event1'];
$event26 = $row6['event2'];
$event36 = $row6['event3'];
$event46 = $row6['event4'];
$event56 = $row6['event5'];
/////////////////////////////////////timeline//////////////
$query7 = "SELECT * FROM contactus WHERE id = 1 ";
$results7 = mysqli_query($db, $query7);
$row7 = mysqli_fetch_assoc($results7);
$id7 = $row7['id'];
$title7 = $row7['title'];
$facebook7 = $row7['facebook'];
$twitter7 = $row7['twitter'];
$insta7 = $row7['insta'];
$number7 = $row7['number'];
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Temmam Pharma</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="Temmam Pharma Project.css">
    </head>
    <body>
        <header id="Home">
            <nav>
                <a href="#"><img class="logo" src="TPW/logo.svg" alt="logo"></a>
                <div class="nav">
                    <a href="#Home"><div class="home">Home</div></a>
                    <a href="#Temmam-Pharma"><div>Temmam Pharma</div></a>
                    <a href="#About-US"><div>About US</div></a>
                    <a href="#about-company"><div>About Company</div></a>
                    <a href="#our-strategy"><div>Our Strategy</div></a>
                    <a href="#our-partners"><div>Our Partners</div></a>
                    <a href="#TimeLine"><div>TimeLine</div></a>
                    <a href="#Contact-US"><div>Contct US</div></a>
                </div>
            </nav>
            <div class="header-div">
                <div class="header-text-div">
                    <pre class="header-text"><?php echo $description;?></pre>
                    <input class="Explore-Now" type="submit" value="<?php echo $button_name;?>">
                </div>
                <div class="header-img-div">
                    <img class="header-img" src="images/<?php echo $img;?>" alt="">
                    <div class="social-media">
                        <div>
                            <p class="social-media-text">social media</p>
                        </div>
                        <div class="social-media-logos">
                            <a href="<?php echo $facebook;?>">
                                <img class="social-media-logo facebook" src="TPW/facebook white.svg" alt="">
                            </a>
                            <a href="<?php echo $twitter;?>">
                                <img class="social-media-logo twitter" src="TPW/twitter white.svg" alt="">
                            </a>
                            <a href="<?php echo $insta;?>">
                                <img class="social-media-logo instagram" src="TPW/instagram white.svg" alt="">
                            </a>
                        </div>
                    </div>
                </div>
                <div class="dot-div">
                    <span class="dot-main dot"></span>
                    <span class="dot"></span>
                    <span class="dot"></span>
                    <span class="dot"></span>
                    <span class="dot"></span>
                    <span class="dot"></span>
                </div>
            </div>
            <svg xmlns="http://www.w3.org/2000/svg" width="100%" height="43%" viewBox="0 0 1920 321.953">
                <path fill="#fff" d="M1.9,104.734s98.111,14.013,225.893,54.693c206.689,79.4,487.578,166.308,643.85,163.362,124.556-3.645,207.146-24.947,389.517-106.415,139.768-65.773,155.856-72.594,254.633-119.144C1721.242-.088,1824.689,1.65,1834.032,1.338c44.25-1.478,87.9,3.146,87.9,3.146L1921.867,323H0Z" transform="translate(0 -1.047)"/>
            </svg>
        </header>
        <section id="Temmam-Pharma">
            <div class="section1">
                <div class="welcome-div">
                    <div class="dash-welcome"></div>
                    <div class="welcome-text"><?php echo $title;?></div>
                    <div class="dash-welcome"></div>
                </div>
                <div class="pharma-defination">
                    <pre class="pharma-defination">
                    <?php echo $description1;?>
                    </pre>
                </div>
                <div class="defination-logos">
                    <div class="defination-logo-agent">
                        <img src="TPW/agents icon.png" alt="">
                        <div class="defination-logo-agent-number"><?php echo $agent_num;?></div>
                        <div class="defination-logo-agent-text"><?php echo $agent_name;?></div>
                    </div>
                    <div class="defination-logo-employee">
                        <img src="TPW/employee icon.png" alt="">
                        <div class="defination-logo-employee-number"><?php echo $emp_num;?></div>
                        <div class="defination-logo-employee-text"><?php echo $emp_name;?></div>
                    </div>
                    <div class="defination-logo-branch">
                        <img src="TPW/branches icon.png" alt="">
                        <div class="defination-logo-branch-number"><?php echo $brunch_num;?></div>
                        <div class="defination-logo-branch-text"><?php echo $brunch_name;?></div>
                    </div>
                    <div class="defination-logo-customer">
                        <img src="TPW/customers icon.png" alt="">
                        <div class="defination-logo-customer-number"><?php echo $customer_num;?></div>
                        <div class="defination-logo-customer-text"><?php echo $customer_name;?></div>
                    </div>
                </div>
            </div>
        </section>
        <section id="About-US">
            <div class="section2">
                <div class="about-us">
                    <div class="about-us-img-div">
                        <video class="about-us-video" src="videos/<?php echo $vid2;?>" controls></video>
                    </div>
                    <div>
                        <div>
                            <div class="dash-about-us"></div>
                            <div class="about-us-title-text"><?php echo $title2;?></div>
                            <div class="dash-about-us"></div>
                        </div>
                        <div class="who-we-are">
                            <?php echo $question2;?>
                        </div>
                        <div class="who-we-are-text">
                            <pre>
                                <?php echo $description2;?>
                            </pre>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="about-company">
            <hr>
            <div class="section3">
                <div class="about-company">
                    <div class="dash-about-company"></div>
                    <div class="about-company-text"><?php echo $title3;?></div>
                    <div class="dash-about-company"></div>
                </div>
                <div class="our-team"><?php echo $title23;?></div>
                <div class="team-member">
                    <div class="member">
                        <img class="member-img" src="images/<?php echo $img13;?>" alt="">
                        <div class="member-name"><?php echo $name13;?></div>
                    </div>
                    <div class="member">
                        <img class="member-img" src="images/<?php echo $img23;?>" alt="">
                        <div class="member-name"><?php echo $name23;?></div>
                    </div>
                    <div class="member">
                        <img class="member-img" src="images/<?php echo $img33;?>" alt="">
                        <div class="member-name"><?php echo $name33;?></div>
                    </div>
                    <div class="member">
                        <img class="member-img" src="images/<?php echo $img43;?>" alt="">
                        <div class="member-name"><?php echo $name43;?></div>
                    </div>
                    <div class="member">
                        <img class="member-img" src="images/<?php echo $img53;?>" alt="">
                        <div class="member-name"><?php echo $name53;?></div>
                    </div>
                    <div class="member">
                        <img class="member-img" src="images/<?php echo $img63;?>" alt="">
                        <div class="member-name"><?php echo $name63;?></div>
                    </div>
                </div>
            </div>
        </section>
        <section id="our-strategy">
            <hr>
            <div class="section4">
                <div class="our-strategy-text-div">
                    <div>
                        <div class="dash-our-strategy"></div>
                        <div class="our-strategy-title-text"><?php echo $title4;?></div>
                        <div class="dash-our-strategy"></div>
                    </div>
                    <div class="our-strategy-text">
                        <pre>
                            <?php echo $description4;?>
                        </pre>
                    </div>
                </div>
                <div class="our-strategy-img-div">
                    <img class="our-strategy-img-dr" src="images/<?php echo $img4;?>" alt="">
                </div>
            </div>
        </section>
        <section id="our-partners">
            <hr>
            <div class="section5">
                <div class="our-partners-title">
                    <div class="dash-our-partners"></div>
                    <div class="our-partners-title-text"><?php echo $title5;?></div>
                    <div class="dash-our-partners"></div>
                </div>
                <div class="our-partners-text">
                    <pre>
                        <?php echo $description5;?>
                    </pre>
                </div>
                <div class="our-partners-img-div">
                    <img class="our-partners-img" src="images/<?php echo $img15;?>" alt="">
                    <img class="our-partners-img" src="images/<?php echo $img25;?>" alt="">
                    <img class="our-partners-img" src="images/<?php echo $img35;?>" alt="">
                    <img class="our-partners-img" src="images/<?php echo $img45;?>" alt="">
                    <img class="our-partners-img" src="images/<?php echo $img55;?>" alt="">
                </div>
            </div>
        </section>
        <section id="TimeLine">
            <hr>
            <div class="section6">
                <div class="timeline-title">
                    <div class="dash-timeline"></div>
                    <div class="timeline-title-text"><?php echo $title6;?></div>
                    <div class="dash-timeline"></div>
                </div>
                <div class="timeline-text">
                    <pre>
                        <?php echo $description6;?>
                    </pre>
                </div>
                <div class="timeline-line-div">
                    <div class="timeline-line">
                        <div class="timeline-dot1">
                            <div class="timeline-dot-text-div-bottom">
                                <div class="timeline-dot-date"><?php echo $date16;?></div>
                                <div class="timeline-dot-text"><?php echo $event16;?></div>
                            </div>
                        </div>
                        <div class="timeline-dot2">
                            <div class="timeline-dot-text-div-top">
                                <div class="timeline-dot-date">
                                    <?php echo $date26;?>
                                </div>
                                <div class="timeline-dot-text">
                                    <?php echo $event26;?>
                                </div>
                            </div>
                        </div>
                        <div class="timeline-dot3">
                            <div class="timeline-dot-text-div-bottom">
                                <div class="timeline-dot-date"><?php echo $date36;?></div>
                                <div class="timeline-dot-text"><?php echo $event36;?></div>
                            </div>
                        </div>
                        <div class="timeline-dot4">
                            <div class="timeline-dot-text-div-top">
                                <div class="timeline-dot-date">
                                    <?php echo $date46;?>
                                </div>
                                <div class="timeline-dot-text">
                                    <?php echo $event46;?>
                                </div>
                            </div>
                        </div>
                        <div class="timeline-dot5">
                            <div class="timeline-dot-text-div-bottom">
                                <div class="timeline-dot-date"><?php echo $date56;?></div>
                                <div class="timeline-dot-text">
                                    <?php echo $event56;?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <footer id="Contact-US">
            <div class="footer">
                <div class="footer-logo">
                    <img class="footer-logo-img" src="TPW/تمام فارما.png" alt="">
                </div>
                <div class="footer-links">
                    <div class="link-word">Link</div>
                    <div class="links-div1">
                        <a href="#Home"> Home <br></a>
                        <a href="#Temmam-Pharma"> Temmam Pharma <br></a>
                        <a href="#About-US"> About US <br></a>
                        <a href="#about-company"> About Company <br></a>
                    </div>
                    <div class="links-div2">
                        <a href="#our-strategy"> Our Strategy<br></a>
                        <a href="#our-partners"> Our Partners <br></a>
                        <a href="#TimeLine"> TimeLine <br></a>
                        <a href="#Contact-US"> Contact US <br></a>
                    </div>
                </div>
                <div class="contact-us">
                    <div class="contact-us-text"><?php echo $title7;?></div>
                    <div class="contact-us-logos">
                        <a href="<?php echo $facebook7;?>">
                            <img class="contact-us-logo" src="TPW/facebook black.svg" alt="">
                        </a>
                        <a href="<?php echo $insta7;?>">
                            <img class="contact-us-logo" src="TPW/instagram black.svg" alt="">
                        </a>
                        <a href="<?php echo $twitter7;?>">
                            <img class="contact-us-logo" src="TPW/Twitter black.svg" alt="">
                        </a>
                    </div>
                    <div class="contact-us-number"><?php echo $number7;?></div>
                </div>
                <div class="footer-dashline"></div>
                <div class="footer-copyright">
                    <a href="https://temmam.com">
                        <div class="copyright-text">جميع الحقوق محفوظة لشركة تمام لايت</div>
                        <img src="TPW/te.png" alt="">
                    </a>
                </div>
            </div>
        </footer>
    </body>
</html>