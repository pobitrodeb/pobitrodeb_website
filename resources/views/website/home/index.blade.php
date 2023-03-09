
@extends('website.master')

@section('body')
<div id="wrapper" class="animsition">
    <div id="page" class="clearfix">
        <!-- Header Wrap -->
        <div id="site-header-wrap">
            <!-- Top Bar -->
            <div id="top-bar">
                <div id="top-bar-inner">
                    <div class="top-bar-inner-wrap">
                        <div class="top-bar-content">
                            <div class="inner text-white link-style-2">
                                <span class="phone content section-16px-regular"><a href="tel:012345678">(+706)
                                        898-0752</a></span>
                                <span class="mail content section-16px-regular"><a
                                        href="mailto:olux.design@gmail.com">olux.design@gmail.com</a></span>
                            </div>
                        </div>
                        <!-- /.top-bar-content -->
                    </div>
                </div>
            </div>
            <!-- /#top-bar -->

            <!-- Header -->
            <header id="site-header">
                <div id="site-header-inner">
                    <div class="wrap-inner clearfix">
                        <div id="site-logo" class="clearfix">
                            <div id="site-log-inner">
                                <a href="index.html" rel="home" class="main-logo">
                                    <img src="{{ asset('/') }}website/assets/images/logo/logo-header.png" alt="images">
                                </a>
                            </div>
                        </div>
                        <!-- /#site-logo -->

                        <div class="mobile-button">
                            <span></span>
                        </div>
                        <!-- /.mobile-button -->
                        <nav id="main-nav" class="main-nav">
                            <ul id="menu-primary-menu" class="menu">
                                <li class="menu-item current-menu-item">
                                    <a href="index.html">Home</a>
                                </li>
                                <li class="menu-item">
                                    <a href="about.html">About </a>
                                </li>
                                <li class="menu-item menu-item-has-children">
                                    <a href="services.html">Services</a>
                                    <ul class="sub-menu">
                                        <li class="menu-item"><a href="services.html">Services</a></li>
                                        <li class="menu-item"><a href="service-single.html">Service Single</a></li>
                                    </ul>
                                </li>
                                <li class="menu-item menu-item-has-children">
                                    <a href="portfolio.html">Portfolio</a>
                                    <ul class="sub-menu">
                                        <li class="menu-item"><a href="portfolio.html">Portfolio</a></li>
                                        <li class="menu-item"><a href="portfolio-single.html">Portfolio Single</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="menu-item">
                                    <a href="team.html">Our Team</a>
                                </li>
                                <li class="menu-item menu-item-has-children">
                                    <a href="blog.html">Blog</a>
                                    <ul class="sub-menu right-sub-menu">
                                        <li class="menu-item"><a href="blog.html">Blog</a></li>
                                        <li class="menu-item"><a href="blog-single.html">Blog Single</a></li>
                                    </ul>
                                </li>
                                <li class="menu-item">
                                    <a href="contact.html">Contact</a>
                                </li>
                            </ul>
                        </nav>
                        <!-- /#main-nav -->
                        <div class="header-menu">
                            <a href="#" class="header-menu-trigger icon-Group-1199"></a>
                        </div>
                    </div>
                    <div class="side-menu__block">
                        <div class="side-menu__block-overlay custom-cursor__overlay"></div>
                        <div class="side-menu__block-inner">
                            <div class="side-menu__top justify-content-end">
                                <a href="#" class="side-menu__toggler side-menu__close-btn"><img
                                        src="{{ asset('/') }}website/assets/icon/close-1-1.png" alt="images"></a>
                            </div>
                            <div class="side-menu__top-introduce">
                                <a href="index.html" rel="home" class="main-logo">
                                    <img src="{{ asset('/') }}website/assets/images/logo/logo-header.png" alt="images">
                                </a>
                                <p>Etiam efficitur, metus in cursus imperdiet, neque nisl porta erat, nec volutpat
                                    felis lacus a tellus. Nunc tristique nulla nisi, a viverra dui auctor vitae.
                                    Vestibulum mollis commodo leo in hendrerit. Nam convallis ac lacus luctus
                                    vestibulum. Donec cursus tellus id neque convallis blandit.</p>
                                <hr>
                            </div>
                            <div class="side-menu__top-lastest">
                                <div class="side-menu__title">
                                    My Latest Work
                                </div>
                                <div class="side-menu__lastest">
                                    <div class="side-menu__lastest-item">
                                        <img src="{{ asset('/') }}website/assets/images/image-box/side-menu-latest-1.jpg" alt="images">
                                        <div class="side-menu__lastest-layer">
                                            <a href="blog-single.html" class="side-menu__lastest-icon"></a>
                                        </div>
                                    </div>
                                    <div class="side-menu__lastest-item">
                                        <img src="{{ asset('/') }}website/assets/images/image-box/side-menu-latest-2.jpg" alt="images">
                                        <div class="side-menu__lastest-layer">
                                            <a href="blog-single.html" class="side-menu__lastest-icon"></a>
                                        </div>
                                    </div>
                                    <div class="side-menu__lastest-item">
                                        <img src="{{ asset('/') }}website/assets/images/image-box/side-menu-latest-3.jpg" alt="images">
                                        <div class="side-menu__lastest-layer">
                                            <a href="blog-single.html" class="side-menu__lastest-icon"></a>
                                        </div>
                                    </div>
                                    <div class="side-menu__lastest-item">
                                        <img src="{{ asset('/') }}website/assets/images/image-box/side-menu-latest-4.jpg" alt="images">
                                        <div class="side-menu__lastest-layer">
                                            <a href="blog-single.html" class="side-menu__lastest-icon"></a>
                                        </div>
                                    </div>
                                    <div class="side-menu__lastest-item">
                                        <img src="{{ asset('/') }}website/assets/images/image-box/side-menu-latest-5.jpg" alt="images">
                                        <div class="side-menu__lastest-layer">
                                            <a href="blog-single.html" class="side-menu__lastest-icon"></a>
                                        </div>
                                    </div>
                                </div>
                                <hr>
                            </div>
                            <div class="side-menu__top-social">
                                <ul class="widget-social">
                                    <li>Follow Me :</li>
                                    <li><a href="#">Fb.</a></li>
                                    <li><a href="#">Be.</a></li>
                                    <li><a href="#">Tw.</a></li>
                                    <li><a href="#">In.</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- /.wrap-inner -->
                </div>
                <!-- /#site-header-inner -->
            </header>
            <!-- /#site-header -->
        </div>
        <!-- #site-header-wrap -->

        <!-- Swiper -->
        <div class="flat-slider container-fuild">
            <div class="row">
                <div class="widget-social-header">
                    <div class="container-fluid">
                        <ul class="widget-social-footer-item text-center">
                            <li><a href="#">Fb.</a></li>
                            <li><a href="#">Be.</a></li>
                            <li><a href="#">Tw.</a></li>
                            <li><a href="#">In.</a></li>
                        </ul>
                    </div>
                </div>
                <div class="mark-slide">
                    <img src="{{ asset('/') }}website/assets/images/mark-page/mark-icon-slide.png" alt="images">
                </div>
                <div class="swiper-container mainslider">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide slider-st-1">
                            <div class="content-slider-left text-white">
                                <h3 class="sub-title-slider section-24px-montserrat">I’m Olux Raymond,</h3>
                                <h2 class="title-slider section-65px-montserrat">A freelance<br>
                                    Interaction & Visual<br>
                                    Product Designer</h2>
                                <p class="desc-slider">Fusce tempor magna mi, non egestas velit ultricies nec.
                                    Aenean convallis, risus non condimentum gravida, odio mauris ullamcorper felis,
                                    ut venenatis purus ex eu mi. Quisque imperdiet
                                    lacinia urna, a placerat sapien pretium eu.</p>
                                <div class="button-slider">
                                    <a href="contact.html" class="button-footer arrow-btn btn-st style-2">Hire Me
                                        Now</a><a href="#"
                                        class="button-footer clound-down btn-st border-white">Download CV</a>
                                </div>
                            </div>
                            <div class="content-slider-right">
                                <img src="{{ asset('/') }}website/assets/images/image-slider/img-slider.jpg" alt="images">
                            </div>
                        </div>
                        <div class="swiper-slide slider-st-1">
                            <div class="content-slider-left text-white">
                                <h3 class="sub-title-slider section-24px-montserrat">I’m Olux Raymond,</h3>
                                <h2 class="title-slider section-65px-montserrat">A freelance<br>
                                    Interaction & Visual<br>
                                    Product Designer</h2>
                                <p class="desc-slider">Fusce tempor magna mi, non egestas velit ultricies nec.
                                    Aenean convallis, risus non condimentum gravida, odio mauris ullamcorper felis,
                                    ut venenatis purus ex eu mi. Quisque imperdiet
                                    lacinia urna, a placerat sapien pretium eu.</p>
                                <div class="button-slider">
                                    <a href="contact.html" class="button-footer arrow-btn btn-st style-2">Hire Me
                                        Now</a><a href="#"
                                        class="button-footer clound-down btn-st border-white">Download CV</a>
                                </div>
                            </div>
                            <div class="content-slider-right">
                                <img src="{{ asset('/') }}website/assets/images/image-slider/img-slider.jpg" alt="images">
                            </div>
                        </div>
                        <div class="swiper-slide slider-st-1">
                            <div class="content-slider-left text-white">
                                <h3 class="sub-title-slider section-24px-montserrat">I’m Olux Raymond,</h3>
                                <h2 class="title-slider section-65px-montserrat">A freelance<br>
                                    Interaction & Visual<br>
                                    Product Designer</h2>
                                <p class="desc-slider">Fusce tempor magna mi, non egestas velit ultricies nec.
                                    Aenean convallis, risus non condimentum gravida, odio mauris ullamcorper felis,
                                    ut venenatis purus ex eu mi. Quisque imperdiet
                                    lacinia urna, a placerat sapien pretium eu.</p>
                                <div class="button-slider">
                                    <a href="contact.html" class="button-footer arrow-btn btn-st style-2">Hire Me
                                        Now</a><a href="#"
                                        class="button-footer clound-down btn-st border-white">Download CV</a>
                                </div>
                            </div>
                            <div class="content-slider-right">
                                <img src="{{ asset('/') }}website/assets/images/image-slider/img-slider.jpg" alt="images">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="main-slide-button">
                    <button class="clone-main-btn-prev"></button>
                    <button class="clone-main-btn-next"></button>
                </div>
            </div>
        </div>

        <section class="flat-about">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <div class="about-title-box">
                            <h4 class="subtitle-about">About me</h4>
                            <h2 class="section-45px-montserrat">Why hire me for your
                                Next project?</h2>
                        </div>
                        <div class="group-post-about wow fadeInLeft">
                            <div class="post-big">
                                <img src="{{ asset('/') }}website/assets/images/image-box/about-post-1.jpg" alt="images">
                            </div>
                            <div class="post-sm">
                                <img src="{{ asset('/') }}website/assets/images/image-box/about-post-2.jpg" alt="images">
                            </div>
                            <div class="post-sm-2">
                                <img src="{{ asset('/') }}website/assets/images/image-box/elipse.png" alt="images">
                            </div>
                            <div class="about-years">
                                <span>08</span>
                                <div class="content section-20px-montserrat">YEARS<br>EXPERIENCES</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="content-right wow fadeInUp">
                            <h3 class="section-22px-montserrat font-weight-600 line-height-35 margin-bottom-10">I
                                craft beautifully useful <span class="text-pri">marketin and digital</span>
                                products that grow.</h3>
                            <p class="section-17px-regular margin-bottom-30">Etiam efficitur, metus in cursus
                                imperdiet, neque nisl porta erat, nec volutpat felis lacus a tellus. Nunc tristique
                                nulla nisi, a viverra dui auctor vitae. Vestibulum mollis commodo leo in hendrerit.
                                Nam convallis ac lacus luctus vestibulum. Donec cursus tellus id neque convallis
                                blandit.</p>
                            <div class="icon-content-box">
                                <span class="icon icon-Group-2921 font-size-40"><span class="path1"></span><span
                                        class="path2"></span><span class="path3"></span><span
                                        class="path4"></span><span class="path5"></span><span
                                        class="path6"></span><span class="path7"></span><span
                                        class="path8"></span><span class="path9"></span><span
                                        class="path10"></span></span>
                                <h3 class="section-16px-regular-montserrat font-weight-600">100% Work
                                    Progress.</h3>
                            </div>
                            <div class="icon-content-box">
                                <span class="icon font-size-40 icon-winking1"><span class="path1"></span><span
                                        class="path2"></span></span>
                                <h3 class="section-16px-regular-montserrat font-weight-600">100% Satisfied
                                    Clients</h3>
                            </div>
                            <a href="services.html"
                                class="button-footer arrow-btn btn-st style-3 margin-top-48">View All Projects</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="flat-about-skill wow fadeInDown">
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <div class="skill-box-1">
                            <h2 class="section-45px-montserrat margin-bottom-20">My Skills</h2>
                            <p class="section-17px-regular margin-bottom-30">Vivamus sagittis felis non felis
                                sagittis fringilla. In porttitor sem consequat, molestie leo ac, mollis mauris.</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="skill-box-2">
                            <span class="icon-paint-palette1 font-size-icon"></span>
                            <h3 class="section-20px-montserrat margin-top-13 margin-bottom-35">Design Skills</h3>
                            <div class="label-progress margin-bottom-5 text-white">
                                <h4 class="section-14px-regular-montserrat">Graphic Design</h4>
                                <h4 class="section-14px-regular font-weight-500">95%</h4>
                            </div>
                            <div class="progress skill-progress margin-bottom-15" style="height:6px;">
                                <div class="progress-bar progress-animated" style="width: 95%; height:6px;"
                                    role="progressbar">
                                </div>
                            </div>
                            <div class="label-progress margin-bottom-5 text-white">
                                <h4 class="section-14px-regular-montserrat">Illustration</h4>
                                <h4 class="section-14px-regular font-weight-500">95%</h4>
                            </div>
                            <div class="progress skill-progress margin-bottom-15" style="height:6px;">
                                <div class="progress-bar progress-animated" style="width: 90%; height:6px;"
                                    role="progressbar">
                                </div>
                            </div>
                            <div class="label-progress margin-bottom-5 text-white">
                                <h4 class="section-14px-regular-montserrat">UX/UI Design</h4>
                                <h4 class="section-14px-regular font-weight-500">95%</h4>
                            </div>
                            <div class="progress skill-progress margin-bottom-15" style="height:6px;">
                                <div class="progress-bar progress-animated" style="width: 98%; height:6px;"
                                    role="progressbar">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="skill-box-3">
                            <span class="icon-monitor1 font-size-icon"></span>
                            <h3 class="section-20px-montserrat margin-top-13 margin-bottom-35">Design Skills</h3>
                            <div class="label-progress margin-bottom-5 text-white">
                                <h4 class="section-14px-regular-montserrat">HTML / Css</h4>
                                <h4 class="section-14px-regular font-weight-500">95%</h4>
                            </div>
                            <div class="progress skill-progress margin-bottom-15" style="height:6px;">
                                <div class="progress-bar progress-animated" style="width: 90%; height:6px;"
                                    role="progressbar">
                                </div>
                            </div>
                            <div class="label-progress margin-bottom-5 text-white">
                                <h4 class="section-14px-regular-montserrat">Java Script</h4>
                                <h4 class="section-14px-regular font-weight-500">75%</h4>
                            </div>
                            <div class="progress skill-progress margin-bottom-15" style="height:6px;">
                                <div class="progress-bar progress-animated" style="width: 75%; height:6px;"
                                    role="progressbar">
                                </div>
                            </div>
                            <div class="label-progress margin-bottom-5 text-white">
                                <h4 class="section-14px-regular-montserrat">Jquery</h4>
                                <h4 class="section-14px-regular font-weight-500">95%</h4>
                            </div>
                            <div class="progress skill-progress margin-bottom-15" style="height:6px;">
                                <div class="progress-bar progress-animated" style="width: 95%; height:6px;"
                                    role="progressbar">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="flat-services">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="section-title wow fadeInDown">
                            <h4 class="section-subtitle">What i do</h4>
                            <h2 class="section-45px-montserrat margin-top-15">Service & Solutions</h2>
                        </div>
                        <div class="themesflat-spacer clearfix" data-desktop="47" data-mobile="60" data-smobile="60"
                            style="height:60px"></div>
                    </div>
                    <div class="col-md-4">
                        <div class="services-box">
                            <div class="wraper-effect"></div>
                            <span class="icon-services icon-development1 font-size-icon"></span>
                            <div class="services-content">
                                <a href="service-single.html" class="section-22px-montserrat">Product Design</a>
                                <p class="services-desc">Fusce consectetur erat id enim elementum
                                    tincidunt. Vestibulum accumsan elementum leo, et viverra justo ultricies ac.</p>
                                <a href="service-single.html" class="read-more"></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="services-box active">
                            <div class="wraper-effect active"></div>
                            <span class="icon-services icon-webpage1 font-size-icon active"></span>
                            <div class="services-content">
                                <a href="service-single.html" class="section-22px-montserrat">UX / UI Design</a>
                                <p class="services-desc">Fusce consectetur erat id enim elementum
                                    tincidunt. Vestibulum accumsan elementum leo, et viverra justo ultricies ac.</p>
                                <a href="service-single.html" class="read-more"></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="services-box">
                            <div class="wraper-effect"></div>
                            <span class="icon-services icon-branding1 font-size-icon"></span>
                            <div class="services-content">
                                <a href="service-single.html" class="section-22px-montserrat">Branding Design</a>
                                <p class="services-desc">Fusce consectetur erat id enim elementum
                                    tincidunt. Vestibulum accumsan elementum leo, et viverra justo ultricies ac.</p>
                                <a href="service-single.html" class="read-more"></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="services-box">
                            <div class="wraper-effect"></div>
                            <span class="icon-services icon-web-programming1 font-size-icon"></span>
                            <div class="services-content">
                                <a href="service-single.html" class="section-22px-montserrat">Web Development</a>
                                <p class="services-desc">Fusce consectetur erat id enim elementum
                                    tincidunt. Vestibulum accumsan elementum leo, et viverra justo ultricies ac.</p>
                                <a href="service-single.html" class="read-more"></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="services-box">
                            <div class="wraper-effect"></div>
                            <span class="icon-services icon-development1 font-size-icon"></span>
                            <div class="services-content">
                                <a href="service-single.html" class="section-22px-montserrat">Software
                                    Development</a>
                                <p class="services-desc">Fusce consectetur erat id enim elementum
                                    tincidunt. Vestibulum accumsan elementum leo, et viverra justo ultricies ac.</p>
                                <a href="service-single.html" class="read-more"></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="services-box">
                            <div class="wraper-effect"></div>
                            <span class="icon-services icon-advertising1 font-size-icon"></span>
                            <div class="services-content">
                                <a href="service-single.html" class="section-22px-montserrat">Digital Marketing</a>
                                <p class="services-desc">Fusce consectetur erat id enim elementum
                                    tincidunt. Vestibulum accumsan elementum leo, et viverra justo ultricies ac.</p>
                                <a href="service-single.html" class="read-more"></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="flat-working-project">
            <div class="container-fluid">
                <div class="row">
                    <div class="section-title wow fadeInDown">
                        <h4 class="section-subtitle">Awesome Works.</h4>
                        <h2 class="section-title section-45px-montserrat">My Latest Working<br>
                            Projects</h2>
                    </div>
                    <div class="col-md-12">
                        <div class="swiper-container swiper-coverflow style-coverflow ">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide style-coverflow">
                                    <img src="{{ asset('/') }}website/assets/images/image-slider/working-project-sl-1.png" alt="images">
                                    <div class="coverflow-overlay">
                                        <div class="coverflow-overlay-content text-white link-style-5">
                                            <a href="service-single.html"
                                                class="icon-slider-coverflow margin-bottom-30"></a>
                                            <a href="service-single.html" class="section-24px-montserrat">Company
                                                Branding</a>
                                            <p class="margin-top-14">Creative Photography</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide style-coverflow">
                                    <img src="{{ asset('/') }}website/assets/images/image-slider/working-project-sl-2.png" alt="images">
                                    <div class="coverflow-overlay">
                                        <div class="coverflow-overlay-content text-white link-style-5">
                                            <a href="service-single.html"
                                                class="icon-slider-coverflow margin-bottom-30"></a>
                                            <a href="service-single.html" class="section-24px-montserrat">Company
                                                Branding</a>
                                            <p class="margin-top-14">Creative Photography</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide style-coverflow">
                                    <img src="{{ asset('/') }}website/assets/images/image-slider/working-project-sl-3.png" alt="images">
                                    <div class="coverflow-overlay">
                                        <div class="coverflow-overlay-content text-white link-style-5">
                                            <a href="service-single.html"
                                                class="icon-slider-coverflow margin-bottom-30"></a>
                                            <a href="service-single.html" class="section-24px-montserrat">Company
                                                Branding</a>
                                            <p class="margin-top-14">Creative Photography</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide style-coverflow">
                                    <img src="{{ asset('/') }}website/assets/images/image-slider/working-project-sl-4.png" alt="images">
                                    <div class="coverflow-overlay">
                                        <div class="coverflow-overlay-content text-white link-style-5">
                                            <a href="service-single.html"
                                                class="icon-slider-coverflow margin-bottom-30"></a>
                                            <a href="service-single.html" class="section-24px-montserrat">Company
                                                Branding</a>
                                            <p class="margin-top-14">Creative Photography</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide style-coverflow">
                                    <img src="{{ asset('/') }}website/assets/images/image-slider/working-project-sl-5.png" alt="images">
                                    <div class="coverflow-overlay">
                                        <div class="coverflow-overlay-content text-white link-style-5">
                                            <a href="service-single.html"
                                                class="icon-slider-coverflow margin-bottom-30"></a>
                                            <a href="service-single.html" class="section-24px-montserrat">Company
                                                Branding</a>
                                            <p class="margin-top-14">Creative Photography</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-button-next slider-coverflow-btn"></div>
                            <div class="swiper-button-prev slider-coverflow-btn"></div>
                        </div>

                    </div>
                </div>
            </div>
        </section>

        <section class="flat-counter">
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <div class="counter-box themesflat-counter hover-up wow fadeInUp" data-wow-delay="0.1s">
                            <div class="icon-box">
                                <div class="icon-counter">
                                    <span class="icon-guarantee1"></span>
                                </div>
                                <div class="content-icon">
                                    <h3 class="section-20px-montserrat font-weight-600 line-height-35">Projects<br>
                                        With 100% satisfaction</h3>
                                </div>
                            </div>
                            <div class="number-content section-65px-montserrat"><span class="number"
                                    data-speed="2000" data-to="250" data-inviewport="yes">250</span>K</div>
                            <p>Power of choices when nothing what we like best principle</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="counter-box themesflat-counter hover-up wow fadeInUp" data-wow-delay="0.4s">
                            <div class="icon-box">
                                <div class="icon-counter">
                                    <span class="icon-support1"></span>
                                </div>
                                <div class="content-icon">
                                    <h3 class="section-20px-montserrat font-weight-600 line-height-35">Experienced
                                        &<br>
                                        Professional team</h3>
                                </div>
                            </div>
                            <h2 class="number-content section-65px-montserrat"><span class="number"
                                    data-speed="2000" data-to="138" data-inviewport="yes">138</span>+</h2>
                            <p>Except to obtain some of advantages from it has any right to find.</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="counter-box themesflat-counter1 hover-up wow fadeInUp" data-wow-delay="0.8s">
                            <div class="icon-box">
                                <div class="icon-counter">
                                    <span class="icon-guarantee"></span>
                                </div>
                                <div class="content-icon">
                                    <h3 class="section-20px-montserrat font-weight-600 line-height-35">Projects<br>
                                        With 100% satisfaction</h3>
                                </div>
                            </div>
                            <h2 class="number-content section-65px-montserrat"><span class="number"
                                    data-speed="2000" data-to="150" data-inviewport="yes">150</span>K</h2>
                            <p>Power of choices when nothing what we like best principle</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="flat-client">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <div class="client-content-box wow fadeInUp">
                            <h4 class="section-subtitle">Client's Feedback</h4>
                            <h2 class="section-title section-45px-montserrat">Clients Love</h2>
                            <p class="margin-bottom-30">Fusce consectetur erat id enim elementum tincidunt.
                                Vestibulum accumsan elementum leo, et viverra justo ultricies ac. Vivamus quis dolor
                                ac orci tempus ornare. In volutpat vitae ligula vitae lacinia.</p>
                            <div class="brand-client wow fadeInLeft">
                                <span><img src="{{ asset('/') }}website/assets/images/brand/brand-client-1.png" alt="images"></span>
                                <span><img src="{{ asset('/') }}website/assets/images/brand/brand-client-2.png" alt="images"></span>
                            </div>
                            <button class="clone-btn-prev"></button>
                            <button class="clone-btn-next"></button>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="swiper-container sliver-vertical">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <div class="client-slider-box">
                                        <div class="client-user">
                                            <img src="{{ asset('/') }}website/assets/images/image-slider/client-slider-box.jpg"
                                                alt="images">
                                        </div>
                                        <div class="client-content">
                                            <div class="client-user-author">
                                                <h4 class="name-author section-20px-montserrat">Brade Hook</h4>
                                                <p class="margin-top-11">A customer review is a review of a product
                                                    or service made by a customer who has purchased and used, or had
                                                    experience with, the product or service.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="client-slider-box">
                                        <div class="client-user">
                                            <img src="{{ asset('/') }}website/assets/images/image-slider/client-slider-box.jpg"
                                                alt="images">
                                        </div>
                                        <div class="client-content">
                                            <div class="client-user-author">
                                                <h4 class="name-author section-20px-montserrat">Brade Hook</h4>
                                                <p class="margin-top-11">A customer review is a review of a product
                                                    or service made by a customer who has purchased and used, or had
                                                    experience with, the product or service.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="client-slider-box">
                                        <div class="client-user">
                                            <img src="{{ asset('/') }}website/assets/images/image-slider/client-slider-box.jpg"
                                                alt="images">
                                        </div>
                                        <div class="client-content">
                                            <div class="client-user-author">
                                                <h4 class="name-author section-20px-montserrat">Brade Hook</h4>
                                                <p class="margin-top-11">A customer review is a review of a product
                                                    or service made by a customer who has purchased and used, or had
                                                    experience with, the product or service.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="client-slider-box">
                                        <div class="client-user">
                                            <img src="{{ asset('/') }}website/assets/images/image-slider/client-slider-box.jpg"
                                                alt="images">
                                        </div>
                                        <div class="client-content">
                                            <div class="client-user-author">
                                                <h4 class="name-author section-20px-montserrat">Brade Hook</h4>
                                                <p class="margin-top-11">A customer review is a review of a product
                                                    or service made by a customer who has purchased and used, or had
                                                    experience with, the product or service.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="client-slider-box">
                                        <div class="client-user">
                                            <img src="{{ asset('/') }}website/assets/images/image-slider/client-slider-box.jpg"
                                                alt="images">
                                        </div>
                                        <div class="client-content">
                                            <div class="client-user-author">
                                                <h4 class="name-author section-20px-montserrat">Brade Hook</h4>
                                                <p class="margin-top-11">A customer review is a review of a product
                                                    or service made by a customer who has purchased and used, or had
                                                    experience with, the product or service.</p>
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

        <section class="flat-team">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <div class="section-title wow fadeInDown">
                            <h4 class="section-subtitle">Team Member</h4>
                            <h2 class="section-main-title section-45px-montserrat">Team Player</h2>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="team-button">
                            <button id="button-team-prev"></button>
                            <button id="button-team-next"></button>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="swiper-container carousel wow fadeInUp">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <div class="team-box">
                                        <div class="team-post">
                                            <img src="{{ asset('/') }}website/assets/images/image-slider/team-slide-1.jpg" alt="images">
                                            <div class="layer-images"></div>
                                        </div>
                                        <div class="widget-team-social">
                                            <ul class="social-media link-style-3">
                                                <li><a href="#" class="team-facebook"></a></li>
                                                <li><a href="#" class="team-twitter"></a></li>
                                                <li><a href="#" class="team-linkedin"></a></li>
                                            </ul>
                                        </div>
                                        <div class="team-info text-center">
                                            <a href="team.html" class="team-name section-24px-medium">Corey
                                                Anderson</a>
                                            <h4 class="team-profession section-14px-regular margin-top-5">Marketing
                                                Manager</h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="team-box">
                                        <div class="team-post">
                                            <img src="{{ asset('/') }}website/assets/images/image-slider/team-slide-2.jpg" alt="images">
                                            <div class="layer-images"></div>
                                        </div>
                                        <div class="widget-team-social">
                                            <ul class="social-media link-style-3">
                                                <li><a href="#" class="team-facebook"></a></li>
                                                <li><a href="#" class="team-twitter"></a></li>
                                                <li><a href="#" class="team-linkedin"></a></li>
                                            </ul>
                                        </div>
                                        <div class="team-info text-center">
                                            <a href="team.html" class="team-name section-24px-medium">Humas
                                                Gates</a>
                                            <h4 class="team-profession section-14px-regular margin-top-5">Marketing
                                                Manager</h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="team-box">
                                        <div class="team-post">
                                            <img src="{{ asset('/') }}website/assets/images/image-slider/team-slide-3.jpg" alt="images">
                                            <div class="layer-images"></div>
                                        </div>
                                        <div class="widget-team-social">
                                            <ul class="social-media link-style-3">
                                                <li><a href="#" class="team-facebook"></a></li>
                                                <li><a href="#" class="team-twitter"></a></li>
                                                <li><a href="#" class="team-linkedin"></a></li>
                                            </ul>
                                        </div>
                                        <div class="team-info text-center">
                                            <a href="team.html" class="team-name section-24px-medium">Francis
                                                Ibikunle</a>
                                            <h4 class="team-profession section-14px-regular margin-top-5">Marketing
                                                Manager</h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="team-box">
                                        <div class="team-post">
                                            <img src="{{ asset('/') }}website/assets/images/image-slider/team-slide-4.jpg" alt="images">
                                            <div class="layer-images"></div>
                                        </div>
                                        <div class="widget-team-social">
                                            <ul class="social-media link-style-3">
                                                <li><a href="#" class="team-facebook"></a></li>
                                                <li><a href="#" class="team-twitter"></a></li>
                                                <li><a href="#" class="team-linkedin"></a></li>
                                            </ul>
                                        </div>
                                        <div class="team-info text-center">
                                            <a href="team.html" class="team-name section-24px-medium">Mike Jason</a>
                                            <h4 class="team-profession section-14px-regular margin-top-5">Marketing
                                                Manager</h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="flat-latest">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="section-title wow fadeInDown">
                            <h4 class="section-subtitle">Latest News</h4>
                            <h2 class="section-main-title section-45px-montserrat">Latest Blog Posts</h2>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="latest-new-box grow-up-hover wow fadeInUp" data-wow-delay="0ms"
                            data-wow-duration="1500ms">
                            <div class="latest-post">
                                <img src="{{ asset('/') }}website/assets/images/image-box/latest-image-box-1.jpg" class="grow-up-hover"
                                    alt="images">
                            </div>
                            <div class="latest-content">
                                <div class="latest-info link-style-6 margin-bottom-10">
                                    <span><a href="blog.html"
                                            class="author-post section-14px-regular font-weight-500">Personal</a></span><span><a
                                            href="blog.html"
                                            class="date-post section-14px-regular font-weight-500">June 13,
                                            2021</a></span>
                                </div>
                                <div class="latest-title margin-bottom-20"><a href="blog-single.html"
                                        class="section-20px-montserrat">Lights winged seasons fish abundantly.</a>
                                </div>
                                <div class="latest-readmore"><a href="blog-single.html" class="read-more"></a></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="latest-new-box grow-up-hover wow fadeInUp" data-wow-delay="300ms"
                            data-wow-duration="1500ms">
                            <div class="latest-post">
                                <img src="{{ asset('/') }}website/assets/images/image-box/latest-image-box-2.jpg" class="grow-up-hover"
                                    alt="images">
                            </div>
                            <div class="latest-content">
                                <div class="latest-info link-style-6 margin-bottom-10">
                                    <span><a href="blog.html"
                                            class="author-post section-14px-regular font-weight-500">Personal</a></span><span><a
                                            href="blog.html"
                                            class="date-post section-14px-regular font-weight-500">June 13,
                                            2021</a></span>
                                </div>
                                <div class="latest-title margin-bottom-20"><a href="blog-single.html"
                                        class="section-20px-montserrat">Winged moved stars, fruit creature seed
                                        night.</a></div>
                                <div class="latest-readmore"><a href="blog-single.html" class="read-more"></a></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="latest-new-box grow-up-hover wow fadeInUp" data-wow-delay="600ms"
                            data-wow-duration="1500ms">
                            <div class="latest-post">
                                <img src="{{ asset('/') }}website/assets/images/image-box/latest-image-box-3.jpg" class="grow-up-hover"
                                    alt="images">
                            </div>
                            <div class="latest-content">
                                <div class="latest-info link-style-6 margin-bottom-10">
                                    <span><a href="blog.html"
                                            class="author-post section-14px-regular font-weight-500">Personal</a></span><span><a
                                            href="blog.html"
                                            class="date-post section-14px-regular font-weight-500">June 13,
                                            2021</a></span>
                                </div>
                                <div class="latest-title margin-bottom-20"><a href="blog-single.html"
                                        class="section-20px-montserrat">Given void great you’re good appear also
                                        fifth.</a></div>
                                <div class="latest-readmore"><a href="blog-single.html" class="read-more"></a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Footer -->
        <footer id="footer" class="clearfix">
            <div id="footer-top" class="container">
                <div class="row">
                    <div class="col-md-8">
                        <span class="section-title-page text-white font-weight-500">Let’s Make Something Together
                            Start a</span><span
                            class="link-style-3 text-under section-title-page font-weight-500 margin-left-10"><a
                                href="contact.html">conversation</a></span>
                    </div>
                    <div class="col-md-4">
                        <a href="contact.html" class="button-footer arrow-btn btn-st">Hire Me Now</a>
                    </div>
                </div>
            </div>
            <div id="footer-widgets" class="container">
                <div class="row">
                    <div class="col-md-5">
                        <div class="logo-footer margin-bottom-20">
                            <a href="index.html" rel="home" class="main-logo">
                                <img src="{{ asset('/') }}website/assets/images/logo/logo-footer.png" alt="images">
                            </a>
                        </div>
                        <p class="text-white line-height-32 margin-bottom-20">We’re a group of creative nerds who
                            enjoy doing something we love every day. Etiam efficitur, metus in cursus imperdiet,
                            neque nisl porta erat, nec volutpat felis lacus a tellus.</p>
                        <div class="widget-subcribe">
                            <form action="#" method="get" class="subcribe-form margin-right-100">
                                <input type="email" class="subcribe-form-footer" placeholder="Enter e-mail" value=""
                                    name="s" required>
                                <button class="btn-subcribe-footer" type="submit" title="subcribe"></button>
                            </form>
                        </div>
                    </div>
                    <div class="col-md-7">
                        <div class="footer-widgets-nav-menu text-white">
                            <div class="menu-1">
                                <h3 class="widget-title-link-wrap">SERVICES</h3>
                                <ul class="link-wrap">
                                    <li><a href="services.html">Strategy</a></li>
                                    <li><a href="services.html">Design</a></li>
                                    <li><a href="services.html">Content</a></li>
                                    <li><a href="services.html">Technology</a></li>
                                </ul>
                            </div>
                            <div class="menu-2">
                                <h3 class="widget-title-link-wrap">OTHER</h3>
                                <ul class="link-wrap">
                                    <li><a href="about.html">About Us</a></li>
                                    <li><a href="portfolio.html">Portfolio</a></li>
                                    <li><a href="contact.html">Contact Us</a></li>
                                    <li><a href="team.html">Team</a></li>
                                </ul>
                            </div>
                            <div class="menu-3">
                                <h3 class="widget-title-link-wrap">Contact</h3>
                                <ul class="widget-list-contact text-white link-style-2">
                                    <li><a href="tel:012345678"
                                            class="meta-phone section-16px-regular-montserrat">+7
                                            (928)-101-23-45</a></li>
                                    <li><a href="mailto:olux.moore@gmail.com"
                                            class="meta-mail section-16px-regular-montserrat">olux.moore@gmail.com</a>
                                    </li>
                                    <li>
                                        <h3 class="meta-address section-16px-regular-montserrat">374 William S
                                            Canning Blvd,</h3>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="widget-social-footer">
                <div class="container-fluid">
                    <ul class="widget-social-footer-item text-center link-style-2">
                        <li><a href="#">Fb.</a></li>
                        <li><a href="#">Be.</a></li>
                        <li><a href="#">Tw.</a></li>
                        <li><a href="#">In.</a></li>
                        <li>
                            <h3>Follow Me:</h3>
                        </li>
                    </ul>
                </div>
            </div>
        </footer><!-- /#footer -->
        <!-- Bottom -->
        <div id="bottom" class="clearfix has-spacer">
            <div id="bottom-bar-inner" class="container">
                <div class="bottom-bar-inner-wrap">
                    <div class="bottom-bar-content">
                        <div id="copyright">© 2021 <span class="text"> ThemesFlat, All Rights Reserved.</span>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- /#bottom -->

    </div>
    <!-- /#page -->
</div>
@endsection
