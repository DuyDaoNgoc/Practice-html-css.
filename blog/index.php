<!DOCTYPE html>
<html lang="en,vi">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Home</title>
    <link rel="icon" href="/fountain/img/icon.png" />
    <link rel="stylesheet" href="/Fountain/css/home.css" />
    <link rel="stylesheet" href="/fountain/css/Top_cartegories.css" />
    <link rel="stylesheet" href="/fountain/css/Learning_Institution.css" />
    <link rel="stylesheet" href="\fountain\css\Explore_our_popular_course.css" />
    <link rel="stylesheet" href="\fountain\css\Our_online_examination_is _top-notch.css" />
    <link rel="stylesheet" href="\fountain\css\Popular_examination.css" />
    <link rel="stylesheet" href="\fountain\css\footer.css" />
    <link rel="stylesheet" href="\fountain\css\Competate_with_various_scholars_around_the_globe.css" />
    <link rel="stylesheet" href="\fountain\css\Featured_Competition.css" />
    <link rel="stylesheet" href="\fountain\css\Get_Publicstions_from_best_Aurtors_around_the_Globe.css" />
    <link rel="stylesheet" href="\fountain\css\review.css" />
</head>
<script>
document.addEventListener("DOMContentLoaded", function() {
        const loginButton = document.querySelector(".submit_login");
        const popupLogin = document.querySelector(".form_login");
        const overlay = document.createElement("div");

        overlay.style.cssText = ` position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: rgba(0, 0, 0, 0.3);
    z-index: 9998;
    display: none;
    `;
        document.body.appendChild(overlay);

        loginButton.addEventListener("click", function() {
                popupLogin.style.display = "block";
                overlay.style.display = "block";
            }

        );

        overlay.addEventListener("click", function() {
                popupLogin.style.display = "none";
                overlay.style.display = "none";
            }

        );
    }

);
</script>

<body>
    <header>
        <h1><a href="#" class="text_menu">Fountain</a></h1>
        <nav class="nav_menu">
            <ul class="menu">
                <div>
                    <li><a href="#">Home</a></li>
                    <p><a href="#">Home </a></p>
                </div>
                <div>
                    <li><a href="#">Courses</a></li>
                    <p><a href="#">Courses </a></p>
                </div>
                <div>
                    <li><a href="#">Instructors</a></li>
                    <p><a href="#">Instructors </a></p>
                </div>
                <div>
                    <li><a href="#">Schedules</a></li>
                    <p><a href="#">Schedules </a></p>
                </div>
                <div>
                    <li><a href="#">Contact Us</a></li>
                    <p><a href="#">Contact Us </a></p>
                </div>
            </ul>
        </nav>
        <form action="\fountain\login\login.php" class="form" method="post"><img src="\fountain\svg\search.svg"
                alt="Remove" class="remove" /><input type="search" name="username" class="input_login" /><button
                type="button" class="submit_login">Login</button><button type="submit"
                class="Register">Register</button></form>
        <div class="form_login"><label for="">Login</label><input type="text" name="taikhoan"
                placeholder="Username" /><input type="password" name="matkhau" placeholder="Password" /><button
                value="Đăng Nhập" class="button_login" name="submit">Login </button></div>
    </header>
    <section class="img_index"><img src="/Fountain/img/menu_home.png" alt="Menu ảnh" class="img_home" />
        <div class="index-text">
            <h2>A Classical Education for the Future</h2>
            <p class="content_index">We prepare you to engage in the world that is and to help bring about a world
                that ought to be. </p><a href="#" class="get-button">Get Started</a>
        </div>
    </section>
    <div class="support">
        <div class="support_index">
            <div class="live_chat">
                <p>Live chat</p>
                <div class="Remove_Chat"><img src="/Fountain/img/Remove_Chat.png" alt="" /></div>
            </div>
            <div class="Examination">
                <p>Examination</p>
                <div class="Remove_Examination"><img src="/Fountain/img/Remove_Examination1.png" alt="" /></div>
            </div>
            <div class="Competition">
                <p>Competition</p>
                <div class="Remove_Competition"><img src="/Fountain/img/Remove_Competition.png" alt="" /></div>
            </div>
        </div>
        <div class="br_cursor">
            <div class="cursor_black"><a href="#"><img src="/fountain/svg/right.svg" alt="" /></a></div>
        </div>
    </div>
    <!--Top cartegories-->
    <article class="article_content">
        <div class="transform_top_cartegoris">
            <h1 class="top_cartegories">Top cartegories</h1><a href="#" class="see_all">See all</a>
        </div>
        <div class="article_background">
            <div class="display_top_caregories">
                <figure class="figure_Top_cartegories"><a href="#">
                        <div><img src="/fountain\Top_cartegories\Marketing.png" alt="Marketing" /></div>
                        <figcaption class="fig_Makerting">
                            <h3>Maketing</h3>
                        </figcaption>
                        <div class="Content_marketing">
                            <p>Lorem ipsum dolor sit amet,
                                consectetur adipiscing elit. Quam nibh netus auctor consect massa. Maecen
                                vivamus sed nibh enim sed. Hac ridiculus tellus urna quam odio quis montes,
                                diam. Malesuada ut urna eu faucibus </p>
                        </div>
                    </a></figure>
                <figure class="figure_Top_cartegories"><a href="#">
                        <div><img src="\fountain\Top_cartegories\Design.jpg" alt="Design" /></div>
                        <figcaption class="fig_Makerting">
                            <h3>Design</h3>
                        </figcaption>
                        <div class="Content_marketing">
                            <p>Lorem ipsum dolor sit amet,
                                consectetur adipiscing elit. Quam nibh netus auctor consect massa. Maecen
                                vivamus sed nibh enim sed. Hac ridiculus tellus urna quam odio quis montes,
                                diam. Malesuada ut urna eu faucibus faucibus faucibus u </p>
                        </div>
                    </a></figure>
                <figure class="figure_Top_cartegories"><a href="#">
                        <div><img src="\fountain\Top_cartegories\Programming.jpg" alt="Programming" /></div>
                        <figcaption class="fig_Makerting">
                            <h3>Programming</h3>
                        </figcaption>
                        <div class="Content_marketing">
                            <p>Lorem ipsum dolor sit amet,
                                consectetur adipiscing elit. Quam nibh netus auctor consect massa. Maecen
                                vivamus sed nibh enim sed. Hac ridiculus tellus urna quam odio quis montes,
                                diam. Malesuada ut urna eu faucibus faucibus faucibus u </p>
                        </div>
                    </a></figure>
                <figure class="figure_Top_cartegories"><a href="#">
                        <div><img src="\fountain\Top_cartegories\Technology.jpg" alt="Technology" /></div>
                        <figcaption class="fig_Makerting">
                            <h3>Technology</h3>
                        </figcaption>
                        <div class="Content_marketing">
                            <p>Lorem ipsum dolor sit amet,
                                consectetur adipiscing elit. Quam nibh netus auctor consect massa. Maecen
                                vivamus sed nibh enim sed. Hac ridiculus tellus urna quam odio quis montes,
                                diam. Malesuada ut urna eu faucibus faucibus faucibus u </p>
                        </div>
                    </a></figure>
                <figure class="figure_Top_cartegories"><a href="#">
                        <div><img src="\fountain\Top_cartegories\Technology.jpg" alt="Technology" /></div>
                        <figcaption class="fig_Makerting">
                            <h3>Technology</h3>
                        </figcaption>
                        <div class="Content_marketing">
                            <p>Lorem ipsum dolor sit amet,
                                consectetur adipiscing elit. Quam nibh netus auctor consect massa. Maecen
                                vivamus sed nibh enim sed. Hac ridiculus tellus urna quam odio quis montes,
                                diam. Malesuada ut urna eu faucibus faucibus faucibus u </p>
                        </div>
                    </a></figure>
                <figure class="figure_Top_cartegories"><a href="#">
                        <div><img src="\fountain\Top_cartegories\Technology.jpg" alt="Technology" /></div>
                        <figcaption class="fig_Makerting">
                            <h3>Technology</h3>
                        </figcaption>
                        <div class="Content_marketing">
                            <p>Lorem ipsum dolor sit amet,
                                consectetur adipiscing elit. Quam nibh netus auctor consect massa. Maecen
                                vivamus sed nibh enim sed. Hac ridiculus tellus urna quam odio quis montes,
                                diam. Malesuada ut urna eu faucibus faucibus faucibus u </p>
                        </div>
                    </a></figure>
            </div>
            <div class="LR_content">
                <div class="background_left"><label for="slide4" class="left">&lt;
                    </label></div>
                <div class="background_right"><label for="slide2" class="right">&gt;
                    </label></div>
            </div>
        </div>
    </article>
    <!--We are Experts Learning Institution-->
    <article class="background_institution">
        <div class="display_backgound_article_learning">
            <div class="inside_background_learning">
                <!--img-->
                <div class="background_learning_institution">
                    <div class="circle-container">
                        <div class="circle-border_examination"></div>
                        <div class="circle_color"><img src="\fountain\Learning_Institution\institution.png"
                                alt="Institution" class="circle-image" /></div>
                    </div>
                    <!--Increase-->
                    <div class="background-outstanding">
                        <div><img src="/fountain/img/Remove_Competition.png" alt="Competition"
                                class="Competition_outstanding" /></div>
                        <div class="trans_text">
                            <div class="text-outstanding">
                                <p>Outstanding <span style="
font-family: Poppins;
font-size: 20px;
font-weight: 400;
line-height: 30px;
text-align: center;
text-underline-position: from-font;
text-decoration-skip-ink: none;
color: black;
">
                                        Instructors </span></p>
                            </div>
                        </div>
                        <div class="hr"></div>
                        <div class="background_Instructors">
                            <div><img src="\fountain\Learning_Institution\Instructors.jpg" alt="Instructors"
                                    class="Instructors" /></div>
                            <div><img src="\fountain\Learning_Institution\Instructors.jpg" alt="Instructors"
                                    class="Instructors_2" /></div>
                            <div><img src="\fountain\Learning_Institution\Instructors.jpg" alt="Instructors"
                                    class="Instructors_3" /></div>
                        </div>
                        <div>
                            <div class="hr_instructors"></div>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="display_title">
                        <div class="title">
                            <p>We are<span class="examination-hr">Experts </span>Learning Institution
                            </p>
                        </div>
                        <div class="content_our_onl">
                            <p>Lorem ipsum dolor sit amet,
                                consectetur adipiscing elit. Sit elit,
                                bibendum volutpat platea mi,
                                adipiscing eget magna. Eu nulla ut urna venenatis velit et tincidunt. Id
                                vitae velit </p>
                        </div>
                        <div>
                            <form action=" " method="" class="form_our"><input type="submit" name="" id=""
                                    value="Take a test" class="button_Experts" /></form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Hinh tron background -->
            <div>
                <div class="background_Learning_institution"></div>
            </div>
            <!-- Hinh tron background-->
            <div>
                <div class="background_Learning_institution_2"></div>
            </div>
        </div>
    </article>
    <!--Explore our popular course-->
    <article class="article_sort_by">
        <div>
            <div class="transform_explore">
                <div class="font_title_Explore">
                    <p>Explore our popular course</p>
                </div>
                <div class="transform_sort_by">
                    <div class="sort_by_background">
                        <div class="sort_by_img"><img src="/fountain/img/bottom.png" alt="bottom" />
                        </div>
                        <div class="sort_by_text">
                            <p>Sort by</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="display_figure">
                <figure class="figure_star"><a href="#" class="a_star"><img
                            src="/fountain/Explore_our_popular_course\Learn_Marketing_from_Top_Instructors..jpg" />
                        <div class="display_star">
                            <figcaption class="ficaption_star">
                                <h3>Learn Marketing from Top Instructors</h3>
                            </figcaption>
                            <div class="review_star"><img src="/fountain/img/star.png" alt="star" />
                                <p>4.5</p>
                            </div>
                        </div>
                        <div class="content_star">
                            <div>
                                <p>6 weeks</p>
                            </div>
                            <div>
                                <p>1.5k Students</p>
                            </div>
                            <div class="money">
                                <p>30.5$</p>
                            </div>
                        </div>
                    </a></figure>
                <figure class="figure_star"><a href="#" class="a_star"><img
                            src="\fountain\Explore_our_popular_course\Front-end_development.jpg" />
                        <div class="display_star">
                            <figcaption class="ficaption_star">
                                <h3>Front-end development is not hard as you think</h3>
                            </figcaption>
                            <div class="review_star"><img src="/fountain/img/star.png" alt="star" />
                                <p>4.5</p>
                            </div>
                        </div>
                        <div class="content_star">
                            <div>
                                <p>6 weeks</p>
                            </div>
                            <div>
                                <p>1.5k Students</p>
                            </div>
                            <div class="money">
                                <p>30.5$</p>
                            </div>
                        </div>
                    </a></figure>
                <figure class="figure_star"><a href="#" class="a_star"><img
                            src="\fountain\Explore_our_popular_course\Everrything_you_need_to_know_in_UX.jpg" />
                        <div class="display_star">
                            <figcaption class="ficaption_star">
                                <h3>Everrything you need to know in UX</h3>
                            </figcaption>
                            <div class="review_star"><img src="/fountain/img/star.png" alt="star" />
                                <p>4.5</p>
                            </div>
                        </div>
                        <div class="content_star">
                            <div>
                                <p>6 weeks</p>
                            </div>
                            <div>
                                <p>1.5k Students</p>
                            </div>
                            <div class="money">
                                <p>30.5$</p>
                            </div>
                        </div>
                    </a></figure>
                <figure class="figure_star"><a href="#" class="a_star"><img
                            src="\fountain\Explore_our_popular_course\Learn_photography.jpg" />
                        <div class="display_star">
                            <figcaption class="ficaption_star">
                                <h3>Learn photography with ease</h3>
                            </figcaption>
                            <div class="review_star"><img src="/fountain/img/star.png" alt="star" />
                                <p>4.5</p>
                            </div>
                        </div>
                        <div class="content_star">
                            <div>
                                <p>6 weeks</p>
                            </div>
                            <div>
                                <p>1.5k Students</p>
                            </div>
                            <div class="money">
                                <p>30.5$</p>
                            </div>
                        </div>
                    </a></figure>
                <figure class="figure_star"><a href="#" class="a_star"><img
                            src="\fountain\Explore_our_popular_course\Be_a_pro_in_data_analysis.jpg" />
                        <div class="display_star">
                            <figcaption class="ficaption_star">
                                <h3>Be a pro in data analysis</h3>
                            </figcaption>
                            <div class="review_star"><img src="/fountain/img/star.png" alt="star" />
                                <p>4.5</p>
                            </div>
                        </div>
                        <div class="content_star">
                            <div>
                                <p>6 weeks</p>
                            </div>
                            <div>
                                <p>1.5k Students</p>
                            </div>
                            <div class="money">
                                <p>30.5$</p>
                            </div>
                        </div>
                    </a></figure>
                <figure class="figure_star"><a href="#" class="a_star"><img
                            src="\fountain\Explore_our_popular_course\Ethical_Harking.jpg" />
                        <div class="display_star">
                            <figcaption class="ficaption_star">
                                <h3>Ethical Harking is not hard as you think</h3>
                            </figcaption>
                            <div class="review_star"><img src="/fountain/img/star.png" alt="star" />
                                <p>4.5</p>
                            </div>
                        </div>
                        <div class="content_star">
                            <div>
                                <p>6 weeks</p>
                            </div>
                            <div>
                                <p>1.5k Students</p>
                            </div>
                            <div class="money">
                                <p>30.5$</p>
                            </div>
                        </div>
                    </a></figure>
            </div>
        </div>
    </article>
    <!--Our online examination is top-notch-->
    <article class="background_Our_online_examination_istop-notch">
        <div class="display_backgound_article">
            <div class="inside_background">
                <!--img-->
                <div class="background_Our_online_examination">
                    <div class="circle-container_our">
                        <div class="circle-border_examination"></div>
                        <div class="circle_color"><img src="\fountain\examination\examination.png" alt="Institution"
                                class="circle-image_our" /></div>
                    </div>
                    <!--Increase-->
                    <div class="background-Increase">
                        <div><img src="/fountain/img/Increase.png" alt="Competition" class="Competition_outstanding" />
                        </div>
                        <div class="trans_text_increase">
                            <div class="text-Instrctors">
                                <p>Increase <span class="content_Icrease">Your Job
                                        opportunity </span></p>
                            </div>
                        </div>
                        <div>
                            <div class="hr_Increase"></div>
                        </div>
                    </div>
                </div>
                <div>
                    <div>
                        <div class="title_our">
                            <p>Our online <span class="examination-hr">examination </span>is
                                top-notch </p>
                        </div>
                        <div class="content_our_onl">
                            <p>Prepare your self for greater challenges with our online
                                examination. </p>
                        </div>
                        <div>
                            <form action=" " method="" class="form_our"><input type="submit" name="" id=""
                                    value="Take a test" class="button_examination" /></form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Hinh tron background -->
            <div>
                <div class="background_Learning_institution"></div>
            </div>
            <!-- Hinh tron background-->
            <div>
                <div class="background_Learning_institution_2"></div>
            </div>
        </div>
    </article>
    <!--Popular examination-->
    <article class="Popular_examination">
        <div>
            <div>
                <h1 class="title_Popular_examination">Popular examination</h1><a href="#"
                    class="see_all_popular_examination">See all</a>
            </div>
            <!--NATURE of Science-->
            <div class="display_Popular_examination">
                <figure class="figure_Popular_examination"><a href="#"><img
                            src="/fountain/Popular_examination/NATURE_of_Sciencecbd.png" alt="NATURE_of_Sciencecbd" />
                        <figcaption>NATURE of Science</figcaption>
                    </a></figure>
                <!-- 2022 Astro Report-->
                <figure class="figure_Popular_examination"><a href="#"><img
                            src="/fountain/Popular_examination/2022_Astro_Reportpng.png" alt="2022_Astro_Reportpng" />
                        <figcaption>2022 Astro Report</figcaption>
                    </a></figure>
                <!-- Data Analysis With Python -->
                <figure class="figure_Popular_examination"><a href="#"><img
                            src="/fountain/Popular_examination/Data_Analysis_With_Python.png"
                            alt="Data_Analysis_With_Python" />
                        <figcaption>Data Analysis With Python</figcaption>
                    </a></figure>
                <!-- Advanced UX Designs -->
                <figure class="figure_Popular_examination"><a href="#"><img
                            src="/fountain/Popular_examination/UX_Designs.png" alt="UX_Designs" />
                        <figcaption>Advanced UX Designs</figcaption>
                    </a></figure>
            </div>
            <div class="LR_content_exam">
                <div class="background_left_exam"><label for="slide4" class="left_exam">&lt;
                    </label></div>
                <div class="background_right_exam"><label for="slide2" class="right_exam">&gt;
                    </label></div>
            </div>
        </div>
    </article>
    <!--Competate with various scholars around the globe-->
    <article>
        <div>
            <h1 class="h1_Competate">Competate with various scholars around the globe </h1>
        </div>
        <div class="background_Competate_with_various_scholars_around_the_globe">
            <div class="background_Den">
                <div class="circle-container_competate">
                    <div class="circle-border_den"></div>
                    <div class="circle_color_den"></div><img
                        src="\fountain\Competate_with_various_scholars_around_the_globe\Den.png" alt="Institution"
                        class="circle-image_den" />
                </div>
            </div>
            <!-- Hinh tron background -->
            <div class="">
                <div class="background_Learning_institution"></div>
            </div>
            <!--Den of Schorlars-->
            <div class="background-Competate">
                <div><img src="/fountain/img/Remove_Competition.png" alt="Competition" class="Competition_Competate" />
                </div>
                <div class="trans_text_den">
                    <div class="text-Competate">
                        <p>Den <span style="
font-family: Poppins;
font-size: 22px;
font-weight: 400;
line-height: 30px;
text-align: center;
text-underline-position: from-font;
text-decoration-skip-ink: none;
color: black;
">
                                of Schorlars </span></p>
                    </div>
                </div>
                <div>
                    <div class="hr_Den"></div>
                </div>
            </div>
            <!-- Hinh tron background -->
            <div class="">
                <div class="background_Learning_institution_2"></div>
            </div>
            <form action="" class="form_den">
                <div class="register"><label for="" class="form_den_label">Registration
                        to get notified
                        about new competition and article we
                        publish.</label><input type="text" name="" id="" placeholder="Full name"
                        class="form_input" /><input type="email" name="" id="" placeholder="Email"
                        class="form_input" /><input type="tel" name="" id="" placeholder="Phone number"
                        class="form_input" />
                    <div class="dropdown"><input type="checkbox" id="toggle" hidden /><label for="toggle"
                            class="selected">Select
                            a course</label>
                        <ul class="list_a_course">
                            <li>❄️ List of courses goes here</li>
                            <li>❄️ List of courses goes here</li>
                            <li>❄️ List of courses goes here</li>
                        </ul>
                    </div><input type="submit" name="" id="" value="Register" class="button_Den" />
                </div>
            </form>
        </div>
    </article>
    <!--Featured Competition-->
    <article class="article_content_Featured">
        <div>
            <div>
                <h1 class="Featured">Featured Competition</h1><a href="#" class="see_all_Featured">See all</a>
            </div>
            <div class="article_background_Featured">
                <figure class="figure_Featured"><a href="#">
                        <div><img src="/fountain\Top_cartegories\Marketing.png" alt="Marketing" /></div>
                        <figcaption class="fig_Contest">
                            <h3>Marketing Contest</h3>
                            <p>The Future Economy</p>
                        </figcaption>
                        <div class="Content_Contest">
                            <p>Eligibility: For designers Price: $60 Deadline: 26/8/2022
                            </p>
                        </div>
                    </a></figure>
                <figure class="figure_Featured"><a href="#">
                        <div><img src="\fountain\Top_cartegories\Design.jpg" alt="Design" />
                        </div>
                        <figcaption class="fig_Contest">
                            <h3>UI/UX Design Contest</h3>
                            <p>Accessibility in design</p>
                        </figcaption>
                        <div class="Content_Contest">
                            <p>Eligibility: For designers Price: $60 Deadline: 26/8/2022
                            </p>
                        </div>
                    </a></figure>
                <figure class="figure_Featured"><a href="#">
                        <div><img src="\fountain\Featured Competition\Programming_Contest.jpg" alt="Programming" />
                        </div>
                        <figcaption class="fig_Contest">
                            <h3>Programming Contest</h3>
                            <p>The Future of AI</p>
                        </figcaption>
                        <div class="Content_Contest">
                            <p>Eligibility: For designers Price: $60 Deadline: 26/8/2022
                            </p>
                        </div>
                    </a></figure>
                <figure class="figure_Featured"><a href="#">
                        <div><img src="\fountain\Top_cartegories\Programming.jpg" alt="Technology" /></div>
                        <figcaption class="fig_Contest">
                            <h3>Photography Contest</h3>
                            <p>The Beauty of Art</p>
                        </figcaption>
                        <div class="Content_Contest">
                            <p>Eligibility: For designers Price: $60 Deadline: 26/8/2022
                            </p>
                        </div>
                    </a></figure>
                <figure class="figure_Featured"><a href="#">
                        <div><img src="\fountain\Top_cartegories\Technology.jpg" alt="Technology" /></div>
                        <figcaption class="fig_Contest">
                            <h3>Biology Contest</h3>
                        </figcaption>
                        <div class="Content_Contest">
                            <p>Lorem ipsum dolor sit amet,
                                consectetur adipiscing elit. Quam nibh netus auctor
                                consect massa. Maecen vivamus sed nibh enim sed. Hac
                                ridiculus tellus urna quam odio quis montes,
                                diam. Malesuada ut urna eu faucibus faucibus faucibus u
                            </p>
                        </div>
                    </a></figure>
                <figure class="figure_Featured"><a href="#">
                        <div><img src="\fountain\Top_cartegories\Technology.jpg" alt="Technology" /></div>
                        <figcaption class="fig_Contest">
                            <h3>Data Analysis Contest</h3>
                            <p></p>
                        </figcaption>
                        <div class="Content_Contest">
                            <p>Lorem ipsum dolor sit amet,
                                consectetur adipiscing elit. Quam nibh netus auctor
                                consect massa. Maecen vivamus sed nibh enim sed. Hac
                                ridiculus tellus urna quam odio quis montes,
                                diam. Malesuada ut urna eu faucibus faucibus faucibus u
                            </p>
                        </div>
                    </a></figure>
                <figure class="figure_Featured"><a href="#">
                        <div><img src="\fountain\Top_cartegories\Technology.jpg" alt="Technology" /></div>
                        <figcaption class="fig_Contest">
                            <h3>Conteng Writing Contest</h3>
                            <p></p>
                        </figcaption>
                        <div class="Content_Contest">
                            <p>Lorem ipsum dolor sit amet,
                                consectetur adipiscing elit. Quam nibh netus auctor
                                consect massa. Maecen vivamus sed nibh enim sed. Hac
                                ridiculus tellus urna quam odio quis montes,
                                diam. Malesuada ut urna eu faucibus faucibus faucibus u
                            </p>
                        </div>
                    </a></figure>
            </div>
            <div class="LR_content_Featured">
                <div class="background_left_Featured"><label for="slide4" class="left_Featured">&lt;
                    </label></div>
                <div class="background_right_Featured"><label for="slide2" class="right_Featured">&gt;
                    </label></div>
            </div>
        </div>
    </article>
    <!--Get Publicstions from best Aurtors around the Globe-->
    <article class="background_Our_online_examination_istop-notch">
        <div class="display_backgound_article">
            <div class="inside_background">
                <!--img-->
                <div class="background_Our_online_examination">
                    <div class="circle-container_our">
                        <div class="circle-border_examination"></div>
                        <div class="circle_color"><img src="\fountain\Popular_examination\NATURE_of_Sciencecbd.png"
                                alt="Get Publicstions from best Aurtors around the  Globe"
                                class="circle-image_nature" /></div>
                    </div>
                    <!--Increase-->
                    <div class="background-Readers_are_leaders">
                        <div><img src="/fountain/img/Increase.png" alt="Competition" class="Competition_outstanding" />
                        </div>
                        <div class="trans_text_den">
                            <div class="text-Readers_are_leaders">
                                <p><span class="content_Icrease">Readers
                                        are</span> leaders </p>
                            </div>
                        </div>
                        <div>
                            <div class="hr_leader"></div>
                        </div>
                    </div>
                </div>
                <div>
                    <div>
                        <div class="title_narute">
                            <p>Get<span class="examination-hr"> Publicstions
                                </span>from best Aurtors around the Globe </p>
                        </div>
                        <div class="content_our_onl">
                            <p>Lorem ipsum dolor sit at,
                                consectetur adipielit. Facilisi fermentum,
                                dignissim pharetra. pharetra. Aliquam </p>
                        </div>
                        <div class="hr_publicstions"></div>
                        <div>
                            <form action=" " method="" class="form_our"><input type="submit" name="" id=""
                                    value="Take a test" class="button_examination" /></form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Hinh tron background -->
            <div>
                <div class="background_Learning_institution"></div>
            </div>
            <!-- Hinh tron background-->
            <div>
                <div class="background_Learning_institution_2"></div>
            </div>
        </div>
    </article>
    <article class="Popular_examination">
        <div>
            <div>
                <h1 class="title_Popular_examination">Recent Publications</h1><a href="#"
                    class="see_all_popular_examination">See all</a>
            </div>
            <!--NATURE of Science-->
            <div class="display_Popular_examination">
                <figure class="figure_Popular_examination"><a href="#"><img
                            src="/fountain/Popular_examination/NATURE_of_Sciencecbd.png" alt="NATURE_of_Sciencecbd" />
                        <figcaption>NATURE of Science</figcaption>
                    </a></figure>
                <!-- 2022 Astro Report-->
                <figure class="figure_Popular_examination"><a href="#"><img
                            src="/fountain/Popular_examination/2022_Astro_Reportpng.png" alt="2022_Astro_Reportpng" />
                        <figcaption>2022 Astro Report</figcaption>
                    </a></figure>
                <!-- Data Analysis With Python -->
                <figure class="figure_Popular_examination"><a href="#"><img
                            src="/fountain/Popular_examination/Data_Analysis_With_Python.png"
                            alt="Data_Analysis_With_Python" />
                        <figcaption>Data Analysis With Python
                        </figcaption>
                    </a></figure>
                <!-- Advanced UX Designs -->
                <figure class="figure_Popular_examination"><a href="#"><img
                            src="/fountain/Popular_examination/UX_Designs.png" alt="UX_Designs" />
                        <figcaption>Advanced UX Designs</figcaption>
                    </a></figure>
            </div>
            <div class="LR_content_exam">
                <div class="background_left_exam"><label for="slide4" class="left_exam">&lt;
                    </label></div>
                <div class="background_right_exam"><label for="slide2" class="right_exam">&gt;
                    </label></div>
            </div>
        </div>
    </article>
    <!--review-->
    <h1 class="review">Reviews</h1>
    <article class="reviews">
        <div class="title_student">
            <h1>What our <span class="Experts_hr">Students</span>say about us
            </h1>
            <div class="hr_students"></div>
            <div class="LR_content_review">
                <div class="background_left_review"><button class="left_review">&lt;
                    </button></div>
                <div class="background_right_review"><button class="right_review">&gt;
                    </button></div>
            </div>
        </div>
        <div class="review_article">
            <figure class="review_figure">
                <div class="div_review_father">
                    <div class="div_review"><img src="\fountain\review\Mohh_Jumah.jpg" alt="Mohh_Jumah" />
                        <p class="review_p">Mohh Jumah <span class="review_color">Senior
                                Developer</span></p>
                    </div>
                    <div class="content_review">
                        <p>Lorem ipsum dolor sit amet,
                            consectetur adipiscing elit. Consectetur ac blandit
                            nam massa massa elementum mollis lectus. Sit
                            ultricies nisl amet non,
                            quis enim velit tempus. Interdum duis imperdiet
                            venenatis </p>
                    </div>
                </div>
            </figure>
            <figure class="review_figure">
                <div class="div_review_father">
                    <div class="div_review"><img src="\fountain\review\John_Mark.jpg" alt="Mohh_Jumah" />
                        <p class="review_p">John Mark <span class="review_color">Senior
                                Developer</span></p>
                    </div>
                    <div class="content_review">
                        <p>Lorem ipsum dolor sit amet,
                            consectetur adipiscing elit. Consectetur ac blandit
                            nam massa massa elementum mollis lectus. Sit
                            ultricies nisl amet non,
                            quis enim velit tempus. Interdum duis imperdiet
                            venenatis </p>
                    </div>
                </div>
            </figure>
            <figure class="review_figure">
                <div class="div_review_father">
                    <div class="div_review"><img src="\fountain\review\Mohh_Jumah.jpg" alt="Mohh_Jumah" />
                        <p class="review_p">Mohh Jumah <span class="review_color">Senior
                                Developer</span></p>
                    </div>
                    <div class="content_review">
                        <p>Lorem ipsum dolor sit amet,
                            consectetur adipiscing elit. Consectetur ac blandit
                            nam massa massa elementum mollis lectus. Sit
                            ultricies nisl amet non,
                            quis enim velit tempus. Interdum duis imperdiet
                            venenatis </p>
                    </div>
                </div>
            </figure>
            <figure class="review_figure">
                <div class="div_review_father">
                    <div class="div_review"><img src="\fountain\review\Mohh_Jumah.jpg" alt="Mohh_Jumah" />
                        <p class="review_p">Mohh Jumah <span class="review_color">Senior
                                Developer</span></p>
                    </div>
                    <div class="content_review">
                        <p>Lorem ipsum dolor sit amet,
                            consectetur adipiscing elit. Consectetur ac blandit
                            nam massa massa elementum mollis lectus. Sit
                            ultricies nisl amet non,
                            quis enim velit tempus. Interdum duis imperdiet
                            venenatis </p>
                    </div>
                </div>
            </figure>
            <figure class="review_figure">
                <div class="div_review_father">
                    <div class="div_review"><img src="\fountain\review\Mohh_Jumah.jpg" alt="Mohh_Jumah" />
                        <p class="review_p">Mohh Jumah <span class="review_color">Senior
                                Developer</span></p>
                    </div>
                    <div class="content_review">
                        <p>Lorem ipsum dolor sit amet,
                            consectetur adipiscing elit. Consectetur ac blandit
                            nam massa massa elementum mollis lectus. Sit
                            ultricies nisl amet non,
                            quis enim velit tempus. Interdum duis imperdiet
                            venenatis </p>
                    </div>
                </div>
            </figure>
        </div>
    </article>
    <footer class="footer">
        <div class="display_content_ft">
            <div class="display_btn_ft">
                <div class="dislay_ft">
                    <div class="div_footer">
                        <h1><a href="">Fountain</a></h1>
                        <p>We are not here to sell you products,
                            we sell value through our expertise. </p>
                        <div class="fb_tw_ins_in">
                            <div class="fb"><a href="#"><img src="\fountain\svg\facebook.svg" alt="facbook" /></a></div>
                            <div class="fb"><a href="#"><img src="\fountain\svg\twitter.svg" alt="twitter" /></a></div>
                            <div class="fb"><a href="#"><img src="\fountain\svg\instagram.svg" alt="instagram" /></a>
                            </div>
                            <div class="in"><a href="#"><img src="\fountain\svg\linkedin.svg" alt="" /></a>
                            </div>
                        </div>
                    </div>
                    <div class="address_and_company">
                        <div>
                            <div>
                                <h4>Address:</h4>
                                <p>38 opebi Road,
                                    Ikeja,
                                    Lagos State,
                                    Nigeia.</p>
                            </div>
                            <div>
                                <h4>Phone:</h4>
                                <p>+2349022396389</p>
                            </div>
                            <div>
                                <h4>Email:</h4>
                                <p>contact@contentionary.com</p>
                            </div>
                        </div>
                        <div>
                            <ul class="ul_company">
                                <h4>Company</h4>
                                <li><a href="#">About Us</a></li>
                                <li><a href="#">Features</a></li>
                                <li><a href="#">Pricing</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="display_ft_subscribe">
                        <form action="" class="ft_Subscribe"><label for="">Subscribe to
                                get latest updates </label>
                            <div class="inp_btn_subscribe"><input type="text" name="" id=""
                                    placeholder="Your Email address" /><button>Subscribe</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="display_Contenttionary">
                <div class="Contenttionary"><img src="\fountain\img\logo.png" alt="logo" />
                    <p>Contenttionary</p>
                </div>
                <div>
                    <p>Powered By Contentionary</p>
                </div>
            </div>
        </div>
    </footer>
</body>

</html>