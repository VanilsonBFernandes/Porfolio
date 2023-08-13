@extends('frontend.main_master')
@section('main')

@section('title')
VF | About
@endsection

<main>

            <!-- breadcrumb-area -->
            <section class="breadcrumb__wrap">
                <div class="container custom-container">
                    <div class="row justify-content-center">
                        <div class="col-xl-6 col-lg-8 col-md-10">
                            <div class="breadcrumb__wrap__content">
                                <h2 class="title">About me</h2>
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">About Me</li>
                                    </ol>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="breadcrumb__wrap__icon">
                    <ul>
                        <li><img src="assets/img/icons/breadcrumb_icon01.png" alt=""></li>
                        <li><img src="assets/img/icons/breadcrumb_icon02.png" alt=""></li>
                        <li><img src="assets/img/icons/breadcrumb_icon03.png" alt=""></li>
                        <li><img src="assets/img/icons/breadcrumb_icon04.png" alt=""></li>
                        <li><img src="assets/img/icons/breadcrumb_icon05.png" alt=""></li>
                        <li><img src="assets/img/icons/breadcrumb_icon06.png" alt=""></li>
                    </ul>
                </div>
            </section>
            <!-- breadcrumb-area-end -->

            <!-- about-area -->
<section class="about about__style__two">
<div class="container">
<div class="row align-items-center">
<div class="col-lg-6">
<div class="about__image">
    <img src="{{ $aboutpage->about_image }}" alt="">
</div>
</div>
<div class="col-lg-6">
<div class="about__content">
    <div class="section__title">
        <span class="sub-title">About me</span>
        <h2 class="title">{{ $aboutpage->title }}</h2>
    </div>
    <div class="about__exp">
        <div class="about__exp__icon">
            <img src="{{ asset('frontend/assets/img/icons/about_icon.png') }} " alt="">
        </div>
        <div class="about__exp__content">
            <p><span>{{ $aboutpage->short_title }}</span> </p>
        </div>
    </div>
    <p class="desc">{{ $aboutpage->short_description }}</p>
    <a href="about.html" class="btn">Download my resume</a>
</div>
</div>
</div>
<div class="row">
<div class="col-12">
<div class="about__info__wrap">
    <ul class="nav nav-tabs" id="myTab" role="tablist">
        <li class="nav-item" role="presentation">
            <button class="nav-link active" id="about-tab" data-bs-toggle="tab" data-bs-target="#about" type="button"
                role="tab" aria-controls="about" aria-selected="true">About</button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="nav-link" id="skills-tab" data-bs-toggle="tab" data-bs-target="#skills" type="button"
                role="tab" aria-controls="skills" aria-selected="false">Skills</button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="nav-link" id="awards-tab" data-bs-toggle="tab" data-bs-target="#awards" type="button"
                role="tab" aria-controls="awards" aria-selected="false">awards</button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="nav-link" id="education-tab" data-bs-toggle="tab" data-bs-target="#education" type="button"
                role="tab" aria-controls="education" aria-selected="false">education</button>
        </li>
    </ul>
    <div class="tab-content" id="myTabContent">
        <div class="tab-pane fade show active" id="about" role="tabpanel" aria-labelledby="about-tab">
            <p class="desc">

{!! $aboutpage->long_description !!}

             </p>
                </li>
            </ul>
        </div>
        <div class="tab-pane fade" id="skills" role="tabpanel" aria-labelledby="skills-tab">
            <div class="about__skill__wrap">
                <div class="row">
                    <div class="col-md-6">
                        <div class="about__skill__item">
                            <h5 class="title">HTML</h5>
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" style="width: 85%;" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"><span class="percentage">70%</span></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="about__skill__item">
                            <h5 class="title">PHP </h5>
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" style="width: 95%;" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100"><span class="percentage">95%</span></div>
                            </div>
                                                    </div>
                    </div>
                    <div class="col-md-6">
                        <div class="about__skill__item">
                            <h5 class="title">CSS</h5>
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" style="width: 80%;" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"><span class="percentage">80%</span></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="about__skill__item">
                            <h5 class="title">JAVA</h5>
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" style="width: 75%;" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"><span class="percentage">75%</span></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="about__skill__item">
                            <h5 class="title">JAVASCRIPT</h5>
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" style="width: 85%;" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"><span class="percentage">85%</span></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="about__skill__item">
                            <h5 class="title">BOOTSTRAP</h5>
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" style="width: 65%;" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100"><span class="percentage">65%</span></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="about__skill__item">
                            <h5 class="title">MYSQL</h5>
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" style="width: 75%;" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"><span class="percentage">75%</span></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="about__skill__item">
                            <h5 class="title">PYTHON</h5>
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" style="width: 85%;" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"><span class="percentage">85%</span></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="tab-pane fade" id="awards" role="tabpanel" aria-labelledby="awards-tab">
            <div class="about__award__wrap">
                <div class="row justify-content-center">
                    <div class="col-md-6 col-sm-9">
                        <div class="about__award__item">
                            <div class="award__logo">
                                <img src="assets/img/images/awards_01.png" alt="">
                            </div>
                            <div class="award__content">
                                <h5 class="title">Colaborator of the month award 2022</h5>
                                <p>Amaizing Experince</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-9">
                        <div class="about__award__item">
                            <div class="award__logo">
                                <img src="assets/img/images/awards_02.png" alt="">
                            </div>
                            <div class="award__content">
                                <h5 class="title">Final examination 2020</h5>
                                <p>God was always there for me!</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-9">
                        <div class="about__award__item">
                            <div class="award__logo">
                                <img src="assets/img/images/awards_03.png" alt="">
                            </div>
                            <div class="award__content">
                                <h5 class="title">User research award 2020</h5>
                                <p>Best research about web development </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-9">
                        <div class="about__award__item">
                            <div class="award__logo">
                                <img src="assets/img/images/awards_04.png" alt="">
                            </div>
                            <div class="award__content">
                                <h5 class="title">Frontend Developer of the month award 2021</h5>
                                <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour,</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="tab-pane fade" id="education" role="tabpanel" aria-labelledby="education-tab">
            <div class="about__education__wrap">
                <div class="row">
                    <div class="col-md-6">
                        <div class="about__education__item">
                            <h3 class="title">Diploma in information Technology</h3>
                            <span class="date">2018 – 2020</span>
                            <p>When I felt that with hard work it's possible .</p>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="about__education__item">
                            <h3 class="title">Pro Backend Developer </h3>
                            <span class="date">2022 - 2023</span>
                            <p>More experience gained with a range of project delivered</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
</div>
</div>
</section>
<!-- about-area-end -->

<!-- services-area -->
<section class="services__style__two">
<div class="container">
<div class="row justify-content-center">
<div class="col-lg-6 col-md-8">
<div class="section__title text-center">
    <span class="sub-title"> My Services</span>
    <h2 class="title">I Build  secure | responsive | faster | friend user interface</h2>
</div>
</div>
</div>
<div class="services__style__two__wrap">
<div class="row gx-0">
<div class="col-xl-3 col-lg-4 col-md-6">
    <div class="services__style__two__item">
        <div class="services__style__two__icon">
            <img src="assets/img/icons/services_light_icon01.png" alt="">
        </div>
        <div class="services__style__two__content">
            <h3 class="title"><a href="services-details.html">Digital Marketing Strategy</a></h3>
            <p> I offer a comprehensive set of services for web development, software, and all things technology-related. Do you need help with devising a strategy for your digital needs? Our expert consultants will guide and support you in all of your technological endeavors, offering advice and guidance.
                I will take stock of your current situation and make recommendations on how to build and maintain a strong digital presence, all toward the ultimate goal of making your business and own services stand out. In a nutshell, BairesDev’s consultants will help you make your business shine online — as well as offline.
            </p>
            <a href="services-details.html" class="services__btn"><i class="far fa-long-arrow-right"></i></a>
        </div>
    </div>
</div>
<div class="col-xl-3 col-lg-4 col-md-6">
    <div class="services__style__two__item">
        <div class="services__style__two__icon">
            <img src="assets/img/icons/services_light_icon02.png" alt="">
        </div>
        <div class="services__style__two__content">
            <h3 class="title"><a href="services-details.html">Custom Web Application Development</a></h3>
            <p> I will help you creating web applications to solidify your brand and reputation, showcase your business, and deliver the exemplary services your users expect. This is an important part of your digital presence since web apps are very popular.</p>
            <a href="services-details.html" class="services__btn"><i class="far fa-long-arrow-right"></i></a>
        </div>
    </div>
</div>
<div class="col-xl-3 col-lg-4 col-md-6">
    <div class="services__style__two__item">
        <div class="services__style__two__icon">
            <img src="assets/img/icons/services_light_icon03.png" alt="">
        </div>
        <div class="services__style__two__content">
            <h3 class="title"><a href="services-details.html">eCommerce Development</a></h3>
            <p>If your company sells products and services online, you will need a robust digital store and vendor services.I  can create and provide an eCommerce website that will showcase your business and allow you to sell your goods seamlessly, all while appealing to your user base and helping you to attract new customers. My eCommerce solutions span industries and niches, and I can assist you in crafting a retail experience that works for you and your business.</p>
            <a href="services-details.html" class="services__btn"><i class="far fa-long-arrow-right"></i></a>
        </div>
    </div>
</div>
<div class="col-xl-3 col-lg-4 col-md-6">
    <div class="services__style__two__item">
        <div class="services__style__two__icon">
            <img src="assets/img/icons/services_light_icon05.png" alt="">
        </div>
        <div class="services__style__two__content">
            <h3 class="title"><a href="services-details.html">Front-End Design & Development</a></h3>
            <p>front-end development skills  and user experience (UX) designing to craft an attractive and appealing interface, design, and all-around quality experience for your users.</p>
            <a href="services-details.html" class="services__btn"><i class="far fa-long-arrow-right"></i></a>
        </div>
    </div>
</div>
<div class="col-xl-3 col-lg-4 col-md-6">
    <div class="services__style__two__item">
        <div class="services__style__two__icon">
            <img src="assets/img/icons/services_light_icon06.png" alt="">
        </div>
        <div class="services__style__two__content">
            <h3 class="title"><a href="services-details.html">Back-End Web Development</a></h3>
            <p>Back-end developers are responsible for building the server side of your website or web app — the part that users can’t see or manipulate. I will build a solid infrastructure, working closely with the front-end to ensure that the two sides work together and function seamlessly.</p>
            <a href="services-details.html" class="services__btn"><i class="far fa-long-arrow-right"></i></a>
        </div>
    </div>
</div>
<div class="col-xl-3 col-lg-4 col-md-6">
    <div class="services__style__two__item">
        <div class="services__style__two__icon">
            <img src="assets/img/icons/services_light_icon05.png" alt="">
        </div>
        <div class="services__style__two__content">
            <h3 class="title"><a href="services-details.html">Support & Maintenance</a></h3>
            <p>All websites and apps require maintenance and upkeep. That is because no technologies, no matter how robust, remain as they are forever — they will always age and change. I stay up to date on the latest tools and technologies and work hard to ensure that we keep your web presence fresh and timely through support and maintenance. We are also on hand to help you with any questions you may have or assistance you need.</p>
            <a href="services-details.html" class="services__btn"><i class="far fa-long-arrow-right"></i></a>
        </div>
    </div>
</div>
<div class="col-xl-3 col-lg-4 col-md-6">
    <div class="services__style__two__item">
        <div class="services__style__two__icon">
            <img src="assets/img/icons/services_light_icon04.png" alt="">
        </div>
        <div class="services__style__two__content">
            <h3 class="title"><a href="services-details.html">Graphic Design</a></h3>
            <p>There are many variations of passages of Lorem Ipsum available, but the majority.</p>
            <a href="services-details.html" class="services__btn"><i class="far fa-long-arrow-right"></i></a>
        </div>
    </div>
</div>
<div class="col-xl-3 col-lg-4 col-md-6">
    <div class="services__style__two__item">
        <div class="services__style__two__icon">
            <img src="assets/img/icons/services_light_icon07.png" alt="">
        </div>
        <div class="services__style__two__content">
            <h3 class="title"><a href="services-details.html">Visual Design</a></h3>
            <p>Strategy is a forward-looking plan for your brand’s behavior.Strategy is a forward-looking plan.</p>
            <a href="services-details.html" class="services__btn"><i class="far fa-long-arrow-right"></i></a>
        </div>
    </div>
</div>
</div>
</div>
</div>
</section>
<!-- services-area-end -->

<!-- testimonial-area -->
<section class="testimonial testimonial__style__two">
<div class="container">
<div class="row justify-content-center">
<div class="col-xl-9 col-lg-11">
<div class="testimonial__wrap">
    <div class="section__title text-center">
        <span class="sub-title">Client Feedback</span>
        <h2 class="title">Some happy clients feedback</h2>
    </div>
    <div class="testimonial__two__active">
        <div class="testimonial__item">
            <div class="testimonial__icon">
                <i class="fas fa-quote-left"></i>
            </div>
            <div class="testimonial__content">
                <p>We are motivated by the satisfaction of our clients. Put your trust because is made up of a team of expert, committed and experienced people with a passion for web development. Our goal is to achieve continuous.</p>
                <div class="testimonial__avatar">
                    <span>O'Ninho/ ANGOLA</span>
                    <div class="testi__avatar__img">
                        <img src="assets/img/images/testi_avatar01.png" alt="">
                    </div>
                </div>
            </div>
        </div>
        <div class="testimonial__item">
            <div class="testimonial__icon">
                <i class="fas fa-quote-left"></i>
            </div>
            <div class="testimonial__content">
                <p>We are motivated by the satisfaction of our clients. Put your trust because is made up of a team of expert, committed and experienced people with a passion for web Developer. Our goal is to achieve continuous.</p>
                <div class="testimonial__avatar">
                    <span>Image/Upload</span>
                    <div class="testi__avatar__img">
                        <img src="assets/img/images/testi_avatar02.png" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="testimonial__arrow"></div>
</div>
</div>
</div>
</div>
<div class="testimonial__two__icons">
<ul>
<li><img src="assets/img/icons/testi_shape01.png" alt=""></li>
<li><img src="assets/img/icons/testi_shape02.png" alt=""></li>
<li><img src="assets/img/icons/testi_shape03.png" alt=""></li>
<li><img src="assets/img/icons/testi_shape04.png" alt=""></li>
<li><img src="assets/img/icons/testi_shape05.png" alt=""></li>
<li><img src="assets/img/icons/testi_shape06.png" alt=""></li>
</ul>
</div>
</section>
<!-- testimonial-area-end -->

<!-- blog-area -->
<section class="blog blog__style__two">
<div class="container">
<div class="row gx-0 justify-content-center">
<div class="col-lg-4 col-md-6 col-sm-9">
<div class="blog__post__item">
    <div class="blog__post__thumb">
        <a href="blog-details.html"><img src="assets/img/blog/blog_post_thumb01.jpg" alt=""></a>
        <div class="blog__post__tags">
            <a href="blog.html">Story</a>
        </div>
    </div>
    <div class="blog__post__content">
        <span class="date">13 january 2022</span>
        <h3 class="title"><a href="blog-details.html">Facebook design is dedicated to what's new in design</a></h3>
        <a href="blog-details.html" class="read__more">Read more</a>
    </div>
</div>
</div>
<div class="col-lg-4 col-md-6 col-sm-9">
<div class="blog__post__item">
    <div class="blog__post__thumb">
        <a href="blog-details.html"><img src="assets/img/blog/blog_post_thumb02.jpg" alt=""></a>
        <div class="blog__post__tags">
            <a href="blog.html">Social</a>
        </div>
    </div>
    <div class="blog__post__content">
        <span class="date">13 June 2023</span>
        <h3 class="title"><a href="blog-details.html">Make communication Fast and Effectively.</a></h3>
        <a href="blog-details.html" class="read__more">Read more</a>
    </div>
</div>
</div>
<div class="col-lg-4 col-md-6 col-sm-9">
<div class="blog__post__item">
    <div class="blog__post__thumb">
        <a href="blog-details.html"><img src="assets/img/blog/blog_post_thumb03.jpg" alt=""></a>
        <div class="blog__post__tags">
            <a href="blog.html">Work</a>
        </div>
    </div>
    <div class="blog__post__content">
        <span class="date">13 january 2021</span>
        <h3 class="title"><a href="blog-details.html">How to increase your productivity at work - 2021</a></h3>
        <a href="blog-details.html" class="read__more">Read more</a>
    </div>
</div>
</div>
</div>
<div class="blog__button text-center">
<a href="blog.html" class="btn">more blog</a>
</div>
</div>
</section>
<!-- blog-area-end -->

<!-- contact-area -->
<section class="homeContact">
<div class="container">
<div class="homeContact__wrap">
<div class="row">
<div class="col-lg-6">
    <div class="section__title">
        <span class="sub-title">Hello!</span>
        <h2 class="title">Any questions? Feel free <br> to contact me</h2>
    </div>
    <div class="homeContact__content">
        <p>Available for work</p>
        <h2 class="mail"><a href="mailto:Info@webmail.com">Vanilson1515@gmail.com</a></h2>
    </div>
</div>
<div class="col-lg-6">
    <div class="homeContact__form">
        <form action="#">
            <input type="text" placeholder="Enter name*">
            <input type="email" placeholder="Enter mail*">
            <input type="number" placeholder="Enter number*">
            <textarea name="message" placeholder="Enter Massage*"></textarea>
            <button type="submit">Send Message</button>
        </form>
    </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- contact-area-end -->

        </main>


@endsection
