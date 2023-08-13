@extends('frontend.main_master')
@section('main')

 <main>

            <!-- breadcrumb-area -->
            <section class="breadcrumb__wrap">
                <div class="container custom-container">
                    <div class="row justify-content-center">
                        <div class="col-xl-6 col-lg-8 col-md-10">
                            <div class="breadcrumb__wrap__content">
                                <h2 class="title">{{ $portfolio->portfolio_name }}</h2>
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">{{ $portfolio->portfolio_name }}</li>
                                    </ol>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="breadcrumb__wrap__icon">
                    <ul>
                        <li><img src="{{ asset('frontend/assets/img/icons/javascript.png') }}" alt=""></li>
                        <li><img src="{{ asset('frontend/assets/img/icons/python.png') }}" alt=""></li>
                        <li><img src="{{ asset('frontend/assets/img/icons/php.png') }}" alt=""></li>
                        <li><img src="{{ asset('frontend/assets/img/icons/laravel.png') }}" alt=""></li>
                        <li><img src="{{ asset('frontend/assets/img/icons/html.png') }}" alt=""></li>
                        <li><img src="{{ asset('frontend/assets/img/icons/css.png') }}" alt=""></li>
                    </ul>
                </div>
            </section>
            <!-- breadcrumb-area-end -->

            <!-- portfolio-details-area -->
            <section class="services__details">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8">
                            <div class="services__details__thumb">
  <img src=" {{ asset($portfolio->portfolio_image) }} " alt="">
                            </div>
                            <div class="services__details__content">
                                <h2 class="title">{{ $portfolio->portfolio_title }}</h2>
                                <p> {!! $portfolio->portfolio_description !!} </p>


                            </div>
                        </div>
                        <div class="col-lg-4">
                            <aside class="services__sidebar">
                                <div class="widget">
                                    <h5 class="title">Get in Touch</h5>
                                    <form action="#" class="sidebar__contact">
                                        <input type="text" placeholder="Enter name*">
                                        <input type="email" placeholder="Enter your mail*">
                                        <textarea name="message" id="message" placeholder="Massage*"></textarea>
                                        <button type="submit" class="btn">send massage</button>
                                    </form>
                                </div>
                                <div class="widget">
                                    <h5 class="title">Project Information</h5>
                                    <ul class="sidebar__contact__info">
                                        <li><span>Date :</span> January, 2023</li>
                                        <li><span>Location :</span> Luanda, Angola</li>
                                        <li><span>Client :</span> O Ninho(VF apparel)</li>
                                        <li class="cagegory"><span>Category :</span>
                                            <a href="portfolio.html">Photo,</a>
                                            <a href="portfolio.html">UI/UX</a>
                                        </li>
                                        <li><span>Project Link :</span> <a href="portfolio-details.html">https://www.oninho.com/</a></li>
                                    </ul>
                                </div>
                                <div class="widget">
                                    <h5 class="title">Contact Information</h5>
                                    <ul class="sidebar__contact__info">
                                        <li><span>Address :</span> Zona 3 Via espressa Ave. Fidel de Castro, Benfica , <br> Luanda, Angola</li>
                                        <li><span>Mail :</span> Vanilson1515@gmail.com</li>
                                        <li><span>Phone :</span> +24438 172 502 </li>
                                        <li><span>Fax id :</span> + 991 172 502 </li>
                                    </ul>
                                    <ul class="sidebar__contact__social">
                                        <li><a href="#"><i class="fab fa-dribbble"></i></a></li>
                                        <li><a href="#"><i class="fab fa-behance"></i></a></li>
                                        <li><a href="#"><i class="fab fa-linkedin"></i></a></li>
                                        <li><a href="#"><i class="fab fa-pinterest"></i></a></li>
                                        <li><a href="#"><i class="fab fa-facebook"></i></a></li>
                                        <li><a href="#"><i class="fab fa-youtube"></i></a></li>
                                    </ul>
                                </div>
                            </aside>
                        </div>
                    </div>
                </div>
            </section>
            <!-- portfolio-details-area-end -->


            <!-- contact-area -->
            <section class="homeContact homeContact__style__two">
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
