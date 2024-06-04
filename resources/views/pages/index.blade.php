@extends('main_home_page')
@section('title', 'Branding & Digital Agency in London | TFD')
@section('meta_description' , 'We are The Future Dynamics Digital partners, UK & US-based full-service creative agency. We specialize in branding, mobile and web app development and marketing SEO.')
@section('meta_keywords', 'digital transformation consultants, digital transformation strategy, digital transformation management, business transformation consultant, small business startup, retail digital transformation, manufacturing digital transformation, SEO consulting services, Professional SEO service, SEO optimization company, Affordable SEO services, SEO strategy services, SEO audit services, Real estate SEO expert, E-commerce SEO agency, Law firm SEO consultant, Restaurant SEO services, On-page SEO services, Off-page SEO solutions, Technical SEO consultant, SEO link building, Custom software development, Bespoke software solutions, Tailored software services, SaaS developers USA, CRM software development, ERP software customization, Custom database software, Custom app development services, Custom business software, Custom software for small business, SME mobile app development, Business app development for SMEs, SME app design USA, Custom SME mobile solutions, Small business app developers')
@section('contents')
<!--Header Starts-->
<header class="home-pg-banner">
    <div class="container-xl">
        <div class="px-xl-3">
            <div class="row align-items-center">
                <div class="col-xl-6 col-md-6 align-items-stretch">
                    <h1 class="main-first-h">Human-Centered & Data-Driven Approach</h1>
                    <p class="">Welcome to The Future Dynamics, where technology turns possibilities into realities. Our website development and best SEO services create engaging web and app experiences that transform your visitors into loyal customers. Let us help your business thrive in the digital age.</p>
                    <div class="header-img-HP-di m-d-block">
                        <img src="{{asset('assets')}}/images/home/human-centric-data-approach.webp" class="header-img-HP" alt="Header image" />
                    </div>
                    <div class="mrgn-top-2rem">

                        <h6><i class="fa-solid fa-circle-check top-hdr-H-icon" style="color: #000000;"></i> Startups</h6>
                        <h6><i class="fa-solid fa-circle-check top-hdr-H-icon" style="color: #000000;"></i> Small & Mid Business</h6>
                        <h6><i class="fa-solid fa-circle-check top-hdr-H-icon" style="color: #000000;"></i> Enterprise Solutions</h6>
                    </div>
                    <div class=" flex-wrap align-items-center contact-div">
                        <div class="mrtop-1rem-contact-btn-HP">
                            <a href="/contact-us" class="btn btn-outline-theme">Start Your Project Today<i class="bi-chevron-right check-p-TFD ms-2"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-md-6 align-items-stretch">
                    <div class="header-img-HP-di m-d-none">
                        <img src="{{asset('assets')}}/images/home/human-centric-data-approach.webp" class="" alt="Header image" />
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<!--Header Ends-->
<!--2 Section Starts-->
<section class="solution-sec-TFD-color">
    <div class="service-background"></div>
    <div class="container-lg">
        <div class="">
            <h2 class="section-title text-center-TFD mrgn-bottom-3rem">ROI Driven Crafted Solution</h2>
        </div>
        <div class="px-xl-3 mrgn-top-4rem">
            <div class="row service-row">
                <div class="col-xl-4 col-md-4 d-flex align-items-stretch">
                    <div class="service-card text-center-TFD">
                        <div class="card-content">
                            <img src="{{asset('assets')}}/images/home/service-icons/web-app-dev.webp" class="services-img-HP" alt="Web Service Image" />
                            <h4>Web App Design & Development</h4>
                            <p>We build scalable web solutions tailored to your needs.</p>
                            <div class="d-flex align-items-start">
                                <i class="flex-shrink-0 bi-check2 "></i>
                                <p class="flex-grow-1 mb-0 check-p-TFD ms-2">Custom Software Design & Development</p>
                            </div>
                            <div class="d-flex align-items-start">
                                <i class="flex-shrink-0 bi-check2"></i>
                                <p class="flex-grow-1 mb-0 check-p-TFD ms-2">Website Design & Development</p>
                            </div>
                            <div class="d-flex align-items-start">
                                <i class="flex-shrink-0 bi-check2 "></i>
                                <p class="flex-grow-1 mb-0 check-p-TFD ms-2">Business App Design & Development</p>
                            </div>
                            <div class="d-flex align-items-start">
                                <i class="flex-shrink-0 bi-check2"></i>
                                <p class="flex-grow-1 mb-0 check-p-TFD ms-2">eCommerce Store Development</p>
                            </div>
                            <div class="d-flex align-items-start">
                                <i class="flex-shrink-0 bi-check2"></i>
                                <p class="flex-grow-1 mb-0 check-p-TFD ms-2">QA Testing</p>
                            </div>
                            <div class="d-flex align-items-start">
                                <i class="flex-shrink-0 bi-check2 "></i>
                                <p class="flex-grow-1 mb-0 check-p-TFD ms-2">Support Services</p>
                            </div>
                            <div class="d-flex align-items-start">
                                <i class="flex-shrink-0 bi-check2 "></i>
                                <p class="flex-grow-1 mb-0 check-p-TFD ms-2">Remote Resource Augmentation</p>
                            </div>
                        </div>
                        <div class="d-grid card-content btn-card-sln-TFD">
                            <a href="/web-development-services" class="btn btn-outline-theme btn-sln-card-height-TFD">Check Project<i class="bi-chevron-right check-p-TFD ms-2"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-4 d-flex align-items-stretch">
                    <div class="service-card text-center-TFD">
                        <div class="card-content">
                            <img src="{{asset('assets')}}/images/home/service-icons/mob-app-dev.webp" class="services-img-HP-2" alt="Web Service Image" />
                            <h4>Mobile App Design & Development</h4>
                            <p>We create mobile solutions that enhance user engagement.</p>
                            <div class="d-flex align-items-start">
                                <i class="flex-shrink-0 bi-check2 "></i>
                                <p class="flex-grow-1 mb-0 check-p-TFD ms-2">Startup Idea Design & Development (idea to go-live roadmap)</p>
                            </div>
                            <div class="d-flex align-items-start">
                                <i class="flex-shrink-0 bi-check2 "></i>
                                <p class="flex-grow-1 mb-0 check-p-TFD ms-2">Social App Design & Development</p>
                            </div>
                            <div class="d-flex align-items-start">
                                <i class="flex-shrink-0 bi-check2 "></i>
                                <p class="flex-grow-1 mb-0 check-p-TFD ms-2">Gaming App Development</p>
                            </div>
                            <div class="d-flex align-items-start">
                                <i class="flex-shrink-0 bi-check2 "></i>
                                <p class="flex-grow-1 mb-0 check-p-TFD ms-2">Business App Design & Development</p>
                            </div>
                            <div class="d-flex align-items-start">
                                <i class="flex-shrink-0 bi-check2 "></i>
                                <p class="flex-grow-1 mb-0 check-p-TFD ms-2">Booking App Development</p>
                            </div>
                            <div class="d-flex align-items-start">
                                <i class="flex-shrink-0 bi-check2 "></i>
                                <p class="flex-grow-1 mb-0 check-p-TFD ms-2">Custom iOS & Android Design & Development</p>
                            </div>
                            <div class="d-flex align-items-start">
                                <i class="flex-shrink-0 bi-check2 "></i>
                                <p class="flex-grow-1 mb-0 check-p-TFD ms-2">App Testing & QA</p>
                            </div>
                            <div class="d-flex align-items-start">
                                <i class="flex-shrink-0 bi-check2 "></i>
                                <p class="flex-grow-1 mb-0 check-p-TFD ms-2">Social App Design & Development</p>
                            </div>
                        </div>
                        <div class="d-grid btn-card-sln-TFD">
                            <a href="/app-development-services" class="btn btn-outline-theme btn-sln-card-height-TFD">Check Project<i class="bi-chevron-right check-p-TFD ms-2"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-4 d-flex align-items-stretch">
                    <div class="service-card text-center-TFD">
                        <div class="card-content">
                            <img src="{{asset('assets')}}/images/home/service-icons/seo.webp" class="services-img-HP-2" alt="Web Service Image" />
                            <h4>Search Engine Optimization</h4>
                            <p>We boost your online visibility with tailored SEO strategies.</p>
                            <div class="d-flex align-items-start">
                                <i class="flex-shrink-0 bi-check2 "></i>
                                <p class="flex-grow-1 mb-0 check-p-TFD ms-2">Local Search Engine Optimisation Services</p>
                            </div>
                            <div class="d-flex align-items-start">
                                <i class="flex-shrink-0 bi-check2 "></i>
                                <p class="flex-grow-1 mb-0 check-p-TFD ms-2">Professional eCommerce SEO Service</p>
                            </div>
                            <div class="d-flex align-items-start">
                                <i class="flex-shrink-0 bi-check2 "></i>
                                <p class="flex-grow-1 mb-0 check-p-TFD ms-2">App SEO Services (ASO)</p>
                            </div>
                            <div class="d-flex align-items-start">
                                <i class="flex-shrink-0 bi-check2 "></i>
                                <p class="flex-grow-1 mb-0 check-p-TFD ms-2">Enterprise SEO Service Provider</p>
                            </div>
                            <div class="d-flex align-items-start">
                                <i class="flex-shrink-0 bi-check2 "></i>
                                <p class="flex-grow-1 mb-0 check-p-TFD ms-2">Competitor Analysis</p>
                            </div>
                            <div class="d-flex align-items-start">
                                <i class="flex-shrink-0 bi-check2 "></i>
                                <p class="flex-grow-1 mb-0 check-p-TFD ms-2">Tech SEO Service</p>
                            </div>
                            <div class="d-flex align-items-start">
                                <i class="flex-shrink-0 bi-check2 "></i>
                                <p class="flex-grow-1 mb-0 check-p-TFD ms-2">On-Page SEO Service</p>
                            </div>
                        </div>
                        <div class="d-grid btn-card-sln-TFD">
                            <a href="/search-engine-optimization" class="btn btn-outline-theme btn-sln-card-height-TFD">Check Project<i class="bi-chevron-right check-p-TFD ms-2"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--2 section Ends-->
<!--3 Section Starts-->
<section class="solution-sec-TFD">
    <div class="container-lg">
        <h2 class="section-title text-center-TFD mrgn-bottom-3rem mrgn-inline-8rem">Trusted by over 500 clients worldwide, we partner with businesses of all sizes, from startups to SMEs to enterprises, delivering top-tier digital solutions.</h2>
        <div class="px-xl-5">
            <div class="row align-items-center">
                <div class="col-xl-2 col-md-2 align-items-stretch">
                    <img src="{{asset('assets')}}/images/home/client-logos/american-hospital.webp" class="" alt="" />
                </div>
                <div class="col-xl-2 col-md-2 align-items-stretch">
                    <img src="{{asset('assets')}}/images/home/client-logos/bhuth.webp" class="" alt="" />
                </div>
                <div class="col-xl-2 col-md-2 align-items-stretch">
                    <img src="{{asset('assets')}}/images/home/client-logos/continental-gray.webp" class="continental-logo" alt="" />
                </div>
                <div class="col-xl-2 col-md-2 align-items-stretch">
                    <img src="{{asset('assets')}}/images/home/client-logos/ibnk-gray.webp" class="ibnk-m-logo" alt="" />
                </div>
                <div class="col-xl-2 col-md-2 align-items-stretch">
                    <img src="{{asset('assets')}}/images/home/client-logos/midstar-gray.webp" class="midstar-m-logo" alt="" />
                </div>
                <div class="col-xl-2 col-md-2 align-items-stretch">
                    <img src="{{asset('assets')}}/images/home/client-logos/talabat-gray.webp" class="talabat-m-logo" alt="" />
                </div>
            </div>
        </div>
        <div class="">
            <!-- <section class="vh"></section> -->
            <div class="px-xl-3">
                <div>
                    <section class="philosophie">
                        <div class="wrapper">
                            <div class="point">
                                <div class="split left">
                                    <article class="centered">
                                        <i class="fa-solid fa-mobile-screen cards-top-icon-TFD" style="color: #8e1a1a;"></i>
                                        <h5 class="mrgn-bottom-1rem-pnts-two h5-m-st-TFD h5-m-st-TFD">Mobile Functionality & Security Testing</h5>
                                        <h4 class="h4-m-st-TFD">MIDSTAR MANAGEMENT</h4>
                                        <p>Midstar leads the agricultural industry with innovative trade and logistics solutions, significantly impacting the food and feed supply chain.</p>
                                        <h5 class="mrgn-bottom-1rem-pnts-two h5-m-st-TFD">Technologies Used </h5>
                                        <div class="row align-items-center">
                                            <div class="col-xl-4 col-md-4 align-items-stretch ">
                                                <div class="text-center-TFD">
                                                    <i class="fa-solid fa-inbox cards-btm-icons-TFD" style="color: #000000;"></i>
                                                    <p>Black Box</p>
                                                </div>

                                            </div>
                                            <div class="col-xl-4 col-md-4 align-items-stretch">
                                                <div class="text-center-TFD">
                                                    <i class="fa-solid fa-chart-simple cards-btm-icons-TFD" style="color: #000000;"></i>
                                                    <p>Mannual Testing</p>
                                                </div>
                                            </div>
                                            <div class="col-xl-4 col-md-4 align-items-stretch text-center-TFD">
                                                <i class="fa-solid fa-gears cards-btm-icons-TFD" style="color: #000000;"></i>
                                                <p>Automated Testing</p>
                                            </div>
                                        </div>
                                        <div class="mrgn-top-1rem">
                                            <a href="/contact-us" class="btn btn-outline-theme">Contact Us<i class="bi-chevron-right check-p-TFD ms-2"></i></a>
                                        </div>
                                    </article>
                                </div>
                                <div class="split right">
                                    <img src="{{asset('assets')}}/images/home/cards/midstar.webp" alt=" random" width="2000" height="2000" />
                                </div>
                            </div>
                            <div class="point">
                                <div class="split left">
                                    <article class="centered">
                                        <i class="fa-solid fa-mobile-screen cards-top-icon-TFD" style="color: #8e1a1a;"></i>
                                        <h5 class="mrgn-bottom-1rem-pnts-two h5-m-st-TFD">iOS & Android</h5>
                                        <h4 class="h4-m-st-TFD">N2GO</h4>
                                        <p>N2GO, a successful salon in Dubai, approached us to digitize their operations. We developed a booking app that has significantly boosted their business growth and client engagement.</p>
                                        <h5 class="mrgn-bottom-1rem-pnts-two h5-m-st-TFD">Technologies</h5>
                                        <div class="row align-items-center">
                                            <div class="col-xl-4 col-md-4 align-items-stretch text-center-TFD">
                                                <i class="fa-brands fa-uikit cards-btm-icons-TFD" style="color: #000000;"></i>
                                                <p>UIKit</p>
                                            </div>
                                            <div class="col-xl-4 col-md-4 align-items-stretch text-center-TFD">
                                                <i class="fa-solid fa-circle-half-stroke cards-btm-icons-TFD" style="color: #000000;"></i>
                                                <p>Core Graphics</p>
                                            </div>
                                            <div class="col-xl-4 col-md-4 align-items-stretch text-center-TFD">
                                                <i class="fa-brands fa-dribbble cards-btm-icons-TFD" style="color: #000000;"></i>
                                                <p>Native,Flutter</p>
                                            </div>
                                        </div>
                                        <div class="mrgn-top-1rem">
                                            <a href="/contact-us" class="btn btn-outline-theme">Contact Us<i class="bi-chevron-right check-p-TFD ms-2"></i></a>
                                        </div>
                                    </article>
                                </div>
                                <div class="split right">
                                    <img src="{{asset('assets')}}/images/home/cards/N2go.webp" alt="" width="2000" height="2000" />
                                </div>
                            </div>
                            <div class="point">
                                <div class="split left">
                                    <article class="centered">
                                        <i class="fa-solid fa-desktop cards-top-icon-TFD" style="color: #942424;"></i>
                                        <h5 class="mrgn-bottom-1rem-pnts-two h5-m-st-TFD">Responsive Desktop Website</h5>
                                        <h4 class="h4-m-st-TFD">Bhuth</h4>
                                        <p>This dynamic research center shares numerous articles, publications, and research papers daily. We created a responsive desktop website to ensure their content is easily accessible to their audience.</p>
                                        <h5 class="mrgn-bottom-1rem-pnts-two h5-m-st-TFD">Technologies</h5>
                                        <div class="row align-items-center">
                                            <div class="col-xl-4 col-md-4 align-items-stretch text-center-TFD">
                                                <i class="fa-brands fa-figma cards-btm-icons-TFD" style="color: #000000;"></i>
                                                <p>Figma</p>
                                            </div>
                                            <div class="col-xl-4 col-md-4 align-items-stretch text-center-TFD">
                                                <i class="fa-brands fa-php cards-btm-icons-TFD" style="color: #000000;"></i>
                                                <p>PHP</p>
                                            </div>
                                            <div class="col-xl-4 col-md-4 align-items-stretch text-center-TFD">
                                                <i class="fa-solid fa-a cards-btm-icons-TFD" style="color: #000000;"></i>
                                                <p>Adobe</p>
                                            </div>
                                        </div>
                                        <div class="mrgn-top-1rem">
                                            <a href="/contact-us" class="btn btn-outline-theme">Contact Us<i class="bi-chevron-right check-p-TFD ms-2"></i></a>
                                        </div>
                                    </article>
                                </div>
                                <div class="split right">
                                    <img src="{{asset('assets')}}/images/home/cards/bhuth.webp" alt="" width="2000" height="2000" />
                                </div>
                            </div>
                            <div class="point">
                                <div class="split left">
                                    <article class="centered">
                                        <i class="fa-solid fa-desktop cards-top-icon-TFD" style="color: #942424;"></i>
                                        <h5 class="mrgn-bottom-1rem-pnts-two h5-m-st-TFD">Responsive Desktop Website</h5>
                                        <h4 class="h4-m-st-TFD">American Hospital Dubai</h4>
                                        <p>Serving hundreds of thousands of patients daily across the UAE, AHD needed a solution to manage daily inquiries. We developed a website to streamline operations and enhance patient interactions.</p>
                                        <h5 class="mrgn-bottom-1rem-pnts-two h5-m-st-TFD">Technologies</h5>
                                        <div class="row align-items-center">
                                            <div class="col-xl-4 col-md-4 align-items-stretch text-center-TFD">
                                                <i class="fa-brands fa-figma cards-btm-icons-TFD" style="color: #000000;"></i>
                                                <p>Figma</p>
                                            </div>
                                            <div class="col-xl-4 col-md-4 align-items-stretch text-center-TFD">
                                                <i class="fa-solid fa-code cards-btm-icons-TFD" style="color: #000000;"></i>
                                                <p>Angular js</p>
                                            </div>
                                            <div class="col-xl-4 col-md-4 align-items-stretch text-center-TFD">
                                                <i class="fa-brands fa-bootstrap cards-btm-icons-TFD" style="color: #000000;"></i>
                                                <p>Adobe, Bootstrap</p>
                                            </div>
                                        </div>
                                        <div class="mrgn-top-1rem">
                                            <a href="/contact-us" class="btn btn-outline-theme">Contact Us<i class="bi-chevron-right check-p-TFD ms-2"></i></a>
                                        </div>
                                    </article>
                                </div>
                                <div class="split right">
                                    <img src="{{asset('assets')}}/images/home/cards/american-hospital.webp" alt="" width="2000" height="2000" />
                                </div>
                            </div>
                            <div class="point">
                                <div class="split left">
                                    <article class="centered">
                                        <i class="fa-solid fa-desktop cards-top-icon-TFD" style="color: #942424;"></i>
                                        <h5 class="mrgn-bottom-1rem-pnts-two h5-m-st-TFD">Responsive Desktop Website</h5>
                                        <h4 class="h4-m-st-TFD">Continental Middle East</h4>
                                        <p>Continental Middle East faced challenges helping end-users find authorized resellers among thousands of registered resellers. We developed a responsive desktop website to simplify this process.</p>
                                        <h5 class="mrgn-bottom-1rem-pnts-two h5-m-st-TFD">Technologies</h5>
                                        <div class="row align-items-center">
                                            <div class="col-xl-4 col-md-4 align-items-stretch text-center-TFD">
                                                <i class="fa-brands fa-figma cards-btm-icons-TFD" style="color: #000000;"></i>
                                                <p>Figma</p>
                                            </div>
                                            <div class="col-xl-4 col-md-4 align-items-stretch text-center-TFD">
                                                <i class="fa-solid fa-code cards-btm-icons-TFD" style="color: #000000;"></i>
                                                <p>Angular js</p>
                                            </div>
                                            <div class="col-xl-4 col-md-4 align-items-stretch text-center-TFD">
                                                <i class="fa-brands fa-bootstrap cards-btm-icons-TFD" style="color: #000000;"></i>
                                                <p>Adobe, Bootstrap</p>
                                            </div>
                                        </div>
                                        <div class="mrgn-top-1rem">
                                            <a href="/contact-us" class="btn btn-outline-theme">Contact Us<i class="bi-chevron-right check-p-TFD ms-2"></i></a>
                                        </div>
                                    </article>
                                </div>
                                <div class="split right">
                                    <img src="{{asset('assets')}}/images/home/cards/continental.webp" alt="" width="2000" height="2000" />
                                </div>
                            </div>
                            <div class="point">
                                <div class="split left">
                                    <article class="centered">
                                        <i class="fa-solid fa-desktop cards-top-icon-TFD" style="color: #942424;"></i>
                                        <h5 class="mrgn-bottom-1rem-pnts-two h5-m-st-TFD">Desktop Application</h5>
                                        <h4 class="h4-m-st-TFD">Talabat</h4>
                                        <p>Founded in Kuwait in 2004, Talabat is an online food ordering company operating in Middle East. We developed their desktop application to enhance their service across Kuwait, Saudi Arabia, Bahrain, the UAE, Oman, Qatar, Jordan, Egypt, and Iraq.</p>
                                        <h5 class="mrgn-bottom-1rem-pnts-two h5-m-st-TFD">Technologies</h5>
                                        <div class="row align-items-center">
                                            <div class="col-xl-4 col-md-4 align-items-stretch text-center-TFD">
                                                <i class="fa-solid fa-code cards-btm-icons-TFD" style="color: #000000;"></i>
                                                <p>.NET</p>
                                            </div>
                                            <div class="col-xl-4 col-md-4 align-items-stretch text-center-TFD">
                                                <i class="fa-brands fa-windows cards-btm-icons-TFD" style="color: #000000;"></i>
                                                <p>Microsoft Dynamics 365</p>
                                            </div>
                                            <div class="col-xl-4 col-md-4 align-items-stretch">
                                            </div>
                                        </div>
                                        <div class="mrgn-top-1rem">
                                            <a href="/contact-us" class="btn btn-outline-theme">Contact Us<i class="bi-chevron-right check-p-TFD ms-2"></i></a>
                                        </div>
                                    </article>
                                </div>
                                <div class="split right">
                                    <img src="{{asset('assets')}}/images/home/cards/talabat.webp" alt="" width="2000" height="2000" />
                                </div>
                            </div>
                            <div class="point">
                                <div class="split left">
                                    <article class="centered">
                                        <i class="fa-solid fa-desktop cards-top-icon-TFD" style="color: #942424;"></i>
                                        <h5 class="mrgn-bottom-1rem-pnts-two h5-m-st-TFD">Desktop Application</h5>
                                        <h4 class="h4-m-st-TFD">Talends.com</h4>
                                        <p>Talends.com, a freelance marketplace, is a project close to our heart. We developed their desktop application to enhance the platform's usability and connectivity for freelancers and clients.</p>
                                        <h5 class="mrgn-bottom-1rem-pnts-two h5-m-st-TFD">Technologies</h5>
                                        <div class="row align-items-center">
                                            <div class="col-xl-4 col-md-4 align-items-stretch text-center-TFD">
                                                <i class="fa-solid fa-code cards-btm-icons-TFD" style="color: #000000;"></i>
                                                <p>PHP Laravel framework</p>
                                            </div>
                                            <div class="col-xl-4 col-md-4 align-items-stretch text-center-TFD">
                                                <i class="fa-brands fa-hubspot cards-btm-icons-TFD" style="color: #000000;"></i>

                                                <p>HubSpot Integrations</p>
                                            </div>
                                            <div class="col-xl-4 col-md-4 align-items-stretch text-center-TFD">
                                                <i class="fa-brands fa-google cards-btm-icons-TFD" style="color: #000000;"></i>

                                                <p>Google Analytics</p>
                                            </div>
                                        </div>
                                        <div class="mrgn-top-1rem">
                                            <a href="/contact-us" class="btn btn-outline-theme">Contact Us<i class="bi-chevron-right check-p-TFD ms-2"></i></a>
                                        </div>
                                    </article>
                                </div>
                                <div class="split right">
                                    <img src="{{asset('assets')}}/images/home/cards/talends.webp" alt="" width="2000" height="2000" />
                                </div>
                            </div>
                            <div class="point">
                                <div class="split left">
                                    <article class="centered">
                                        <i class="fa-solid fa-desktop cards-top-icon-TFD" style="color: #942424;"></i>
                                        <h5 class="mrgn-bottom-1rem-pnts-two h5-m-st-TFD">Website Design, Desktop Application</h5>
                                        <h4 class="h4-m-st-TFD">iBnk.io</h4>
                                        <p>We developed a website and desktop application for iBnk.io that accurately represents their offerings and integrates seamlessly with their financial system.</p>
                                        <h5 class="mrgn-bottom-1rem-pnts-two h5-m-st-TFD">Technologies</h5>
                                        <div class="row align-items-center">
                                            <div class="col-xl-4 col-md-4 align-items-stretch text-center-TFD">
                                                <i class="fa-brands fa-php cards-btm-icons-TFD" style="color: #000000;"></i>
                                                <p>PHP</p>
                                            </div>
                                            <div class="col-xl-4 col-md-4 align-items-stretch text-center-TFD">
                                                <i class="fa-brands fa-figma cards-btm-icons-TFD" style="color: #000000;"></i>
                                                <p>Figma</p>
                                            </div>
                                            <div class="col-xl-4 col-md-4 align-items-stretch text-center-TFD">
                                                <i class="fa-brands fa-google cards-btm-icons-TFD" style="color: #000000;"></i>
                                                <p>Google Analytics</p>
                                            </div>
                                        </div>
                                        <div class="mrgn-top-1rem">
                                            <a href="/contact-us" class="btn btn-outline-theme">Contact Us<i class="bi-chevron-right check-p-TFD ms-2"></i></a>
                                        </div>
                                    </article>
                                </div>
                                <div class="split right">
                                    <img src="{{asset('assets')}}/images/home/cards/ibnk.webp" alt="" width="2000" height="2000" />
                                </div>
                            </div>
                            <div class="point">
                                <div class="split left">
                                    <article class="centered">
                                        <i class="fa-solid fa-desktop cards-top-icon-TFD" style="color: #942424;"></i>
                                        <h5 class="mrgn-bottom-1rem-pnts-two h5-m-st-TFD">Digital Transformation, Desktop Application</h5>
                                        <h4 class="h4-m-st-TFD">EWT</h4>
                                        <p>Expertise Windows Training provides tailored training & development solutions to address specific skill gaps. We developed a digital transformation strategy & desktop App to enhance their service delivery.</p>
                                        <h5 class="mrgn-bottom-1rem-pnts-two h5-m-st-TFD">Technologies</h5>
                                        <div class="row align-items-center">
                                            <div class="col-xl-4 col-md-4 align-items-stretch text-center-TFD">
                                                <i class="fa-brands fa-google cards-btm-icons-TFD" style="color: #000000;"></i>
                                                <p>Google Analytics</p>
                                            </div>
                                            <div class="col-xl-4 col-md-4 align-items-stretch text-center-TFD">
                                                <i class="fa-brands fa-hubspot cards-btm-icons-TFD" style="color: #000000;"></i>
                                                <p>Hubspot</p>
                                            </div>
                                            <div class="col-xl-4 col-md-4 align-items-stretch text-center-TFD">
                                                <i class="fa-brands fa-wordpress-simple cards-btm-icons-TFD" style="color: #000000;"></i>
                                                <p>Wordpress</p>
                                            </div>
                                        </div>
                                        <div class="mrgn-top-1rem">
                                            <a href="/contact-us" class="btn btn-outline-theme">Contact Us<i class="bi-chevron-right check-p-TFD ms-2"></i></a>
                                        </div>
                                    </article>
                                </div>
                                <div class="split right">
                                    <img src="{{asset('assets')}}/images/home/cards/EWT.webp" alt="" width="2000" height="2000" />
                                </div>
                            </div>
                            <div class="point">
                                <div class="split left">
                                    <article class="centered">
                                        <i class="fa-solid fa-desktop cards-top-icon-TFD" style="color: #942424;"></i>
                                        <h5 class="mrgn-bottom-1rem-pnts-two h5-m-st-TFD">Desktop Application</h5>
                                        <h4 class="h4-m-st-TFD">Easy Car Parts</h4>
                                        <p>EASY CAR PARTS is an online store for all your car needs. We created a comprehensive desktop application to meet their eCommerce requirements.</p>
                                        <h5 class="mrgn-bottom-1rem-pnts-two h5-m-st-TFD">Technologies</h5>
                                        <div class="row align-items-center">
                                            <div class="col-xl-4 col-md-4 align-items-stretch text-center-TFD">
                                                <i class="fa-brands fa-php cards-btm-icons-TFD" style="color: #000000;"></i>
                                                <p>PHP</p>
                                            </div>
                                            <div class="col-xl-4 col-md-4 align-items-stretch text-center-TFD">
                                                <i class="fa-brands fa-figma cards-btm-icons-TFD" style="color: #000000;"></i>
                                                <p>Figma</p>
                                            </div>
                                            <div class="col-xl-4 col-md-4 align-items-stretch text-center-TFD">
                                                <i class="fa-brands fa-google cards-btm-icons-TFD" style="color: #000000;"></i>
                                                <p>Google Analytics</p>
                                            </div>
                                        </div>
                                        <div class="mrgn-top-1rem">
                                            <a href="/contact-us" class="btn btn-outline-theme">Contact Us<i class="bi-chevron-right check-p-TFD ms-2"></i></a>
                                        </div>
                                    </article>
                                </div>
                                <div class="split right">
                                    <img src="{{asset('assets')}}/images/home/cards/easy-car.webp" alt="" width="2000" height="2000" />
                                </div>
                            </div>
                            <div class="point">
                                <div class="split left">
                                    <article class="centered">
                                        <i class="fa-solid fa-desktop cards-top-icon-TFD" style="color: #942424;"></i>
                                        <h5 class="mrgn-bottom-1rem-pnts-two h5-m-st-TFD">Desktop Application</h5>
                                        <h4 class="h4-m-st-TFD">Christy Dawn</h4>
                                        <p>We chose Shopify, a trusted platform, to create an online store for Christy Dawn offering a reliable and efficient solution for their eCommerce needs.</p>
                                        <h5 class="mrgn-bottom-1rem-pnts-two h5-m-st-TFD">Technologies</h5>
                                        <div class="row align-items-center">
                                            <div class="col-xl-4 col-md-4 align-items-stretch text-center-TFD">
                                                <i class="fa-brands fa-php cards-btm-icons-TFD" style="color: #000000;"></i>
                                                <p>PHP</p>
                                            </div>
                                            <div class="col-xl-4 col-md-4 align-items-stretch text-center-TFD">
                                                <i class="fa-brands fa-figma cards-btm-icons-TFD" style="color: #000000;"></i>
                                                <p>Figma</p>
                                            </div>
                                            <div class="col-xl-4 col-md-4 align-items-stretch text-center-TFD">
                                                <i class="fa-brands fa-google cards-btm-icons-TFD" style="color: #000000;"></i>
                                                <p>Google Analytics</p>
                                            </div>
                                        </div>
                                        <div class="mrgn-top-1rem">
                                            <a href="/contact-us" class="btn btn-outline-theme">Contact Us<i class="bi-chevron-right check-p-TFD ms-2"></i></a>
                                        </div>
                                    </article>
                                </div>
                                <div class="split right">
                                    <img src="{{asset('assets')}}/images/home/cards/christy-dawn.webp" alt="" width="2000" height="2000" />
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </div>
    </div>
</section>
<!--3 section Ends-->
<!--4 Section Starts-->
<section class="solution-sec-TFD-color">
    <div class="container-lg">
        <div class="">
            <div class="row ">
                <div class="col-xl-6 col-md-6 align-items-stretch">
                    <h2 class="section-title text-center-TFD">Our client agrees the Future Dynamics has it all to make it successful.</h2>
                    <div>
                        <img src="{{asset('assets')}}/images/home/G2-summer.svg" class="img-our-client-m-s-4" alt="" />
                    </div>
                </div>
                <div class="col-xl-6 col-md-6 align-items-stretch">
                    <div class="slider-container">
                        <div class="icons-di-TFD">
                            <i class="fa-solid fa-star slider-stars-top" style="color: #121212;"></i>
                            <i class="fa-solid fa-star slider-stars-btm" style="color: #121212;"></i>
                        </div>
                        <div class="slider-track">
                            <div class="slider-slide active">
                                <img src="{{asset('assets')}}/images/home/customer-reviews/bhuth-testimonial-hp.webp" class="testimonials-logo-img-HP" alt="bhuth Logo" />
                                <h4 class="client-H-HP">Bhuth</h4>
                                <p class="slider-paragraph-TFD">The Future Dynamics created a responsive website that perfectly showcases our extensive research. Their website development and SEO services have greatly improved our content accessibility.</p>
                                <ol class="ol-list-disc-for-slider-TFD">
                                    <li>
                                        <h6>Dr. Hasan Ali</h6>
                                    </li>
                                    <p>Director, Bhuth</p>
                                </ol>
                            </div>
                            <div class="slider-slide">
                                <img src="{{asset('assets')}}/images/home/customer-reviews/n2go-testimonial-hp.webp" class="testimonials-logo-img-HP testimonials-logo-n2go-HP" alt="N2GO Logo" />
                                <h4 class="client-H-HP">N2GO</h4>
                                <p class="slider-paragraph-TFD">The Future Dynamics developed an amazing booking app for our salon. Their expertise transformed our business operations and client engagement.We highly recommend the Future Dynamics for the best SEO services for small business.</p>
                                <ol class="ol-list-disc-for-slider-TFD">
                                    <li>
                                        <h6>Noura Ahmed</h6>
                                    </li>
                                    <p>Founder, N2GO</p>
                                </ol>
                            </div>
                            <div class="slider-slide">
                                <img src="{{asset('assets')}}/images/home/customer-reviews/christy-dawn-testimonial-hp.webp" class="testimonials-logo-chirsty-HP" alt="christy dawn logo" />
                                <h4 class="client-H-HP">Christy Dawn</h4>
                                <p class="slider-paragraph-TFD">Our new Shopify online store, developed by The Future Dynamics, has revolutionized our eCommerce operations. Their Shopify SEO service is reliable and efficient.</p>
                                <ol class="ol-list-disc-for-slider-TFD">
                                    <li>
                                        <h6>Christy Dawn</h6>
                                    </li>
                                    <p>Founder, Christy Dawn</p>
                                </ol>
                            </div>
                        </div>
                    </div>
                    <button class="prev"><i class="fas fa-chevron-left"></i></button>
                    <button class="next"><i class="fas fa-chevron-right"></i></button>
                    <div class="dots" id="dots"></div>
                </div>
            </div>
            <div class="aftr-slider-sect-TFD">
                <h2 class="section-title text-center-TFD mb-3">Find The Perfect Solution with the Future Dynamics - ALWAYS!</h2>
                <div class=" flex-wrap align-items-center  text-center-TFD contact-div">
                    <div class="text-center-TFD mb-2">
                        <a href="/contact-us" class="btn btn-outline-theme bg-white ">Start Your Project Today<i class="bi-chevron-right check-p-TFD ms-2"></i></a>
                    </div>
                </div>
                <div class="mrgn-top-2rem">
                    <div class="row">
                        <div class="col-xl-4 col-md-4 d-flex align-items-stretch">
                            <div class="Solution-card-after-Slider-Sect-TFD">
                                <div class="card-content">
                                    <img src="{{asset('assets')}}/images/home/straight-to-solution-3.webp" class="" alt="" />
                                    <h4>Website Design & SEO Service</h4>
                                    <p>Unlock your online potential with our seamless Website Design & SEO Service.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-md-4 d-flex align-items-stretch">
                            <div class="Solution-card-after-Slider-Sect-TFD">
                                <div class="card-content">
                                    <img src="{{asset('assets')}}/images/home/straight-to-solution-2.webp" class="" alt="" />

                                    <h4>eCommerce SEO Service</h4>
                                    <p>Elevate your e-commerce presence with our tailored eCommerce SEO Service.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-md-4 d-flex align-items-stretch">
                            <div class="Solution-card-after-Slider-Sect-TFD">
                                <div class="card-content">
                                    <img src="{{asset('assets')}}/images/home/straight-to-solution.webp" class="" alt="" />
                                    <h4>Mobile App SEO Service</h4>
                                    <p>Boost your app's visibility and downloads with our Mobile App SEO Service.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="CTA-sect-4th-TFD">
                    <div class="google-rating">
                        <div class="rating-starts">
                            <i class="bi-star-fill"></i>
                            <i class="bi-star-fill"></i>
                            <i class="bi-star-fill"></i>
                            <i class="bi-star-fill"></i>
                            <i class="bi-star-fill"></i>
                        </div>
                        <h4> <svg xmlns="http://www.w3.org/2000/svg" width="12" height="22" viewBox="0 0 46 44" fill="none">
                                <path d="M44.2935 22.5C44.2935 20.94 44.1497 19.44 43.8827 18H22.5986V26.52H34.7609C34.2268 29.26 32.6243 31.58 30.2206 33.14V38.68H37.555C41.8282 34.84 44.2935 29.2 44.2935 22.5Z" fill="#4285F4"></path>
                                <path d="M22.5989 44.0002C28.7006 44.0002 33.8162 42.0402 37.5553 38.6802L30.2209 33.1402C28.2076 34.4602 25.6395 35.2602 22.5989 35.2602C16.7232 35.2602 11.7309 31.4002 9.94357 26.2002H2.42432V31.8802C6.14286 39.0602 13.7648 44.0002 22.5989 44.0002Z" fill="#34A853"></path>
                                <path d="M9.9435 26.1796C9.49152 24.8596 9.22444 23.4596 9.22444 21.9996C9.22444 20.5396 9.49152 19.1396 9.9435 17.8196V12.1396H2.42424C0.88341 15.0996 0 18.4396 0 21.9996C0 25.5596 0.88341 28.8996 2.42424 31.8596L8.2794 27.4196L9.9435 26.1796Z" fill="#FBBC05"></path>
                                <path d="M22.5989 8.75999C25.9271 8.75999 28.8855 9.87998 31.2481 12.04L37.7196 5.73999C33.7956 2.18 28.7006 0 22.5989 0C13.7648 0 6.14286 4.93999 2.42432 12.14L9.94357 17.82C11.7309 12.62 16.7232 8.75999 22.5989 8.75999Z" fill="#EA4335"></path>
                            </svg><span>4.2</span> Top-rated care</h4>
                    </div>
                    <div class="row-card mt-4 form-pdng-left-CTA">
                        <div class="row">
                            <div class="col-xl-7 col-lg-7 order-lg-1">
                                <div class="content-box pdng-top-cta-b">
                                    <h5 class="fs-1rem mb-2 mrgn-top-2rem">10x your business digital potential, skyrocket exposure, sales & lead generation!
                                        <br><span class="fw-semibold">Flat 30% off throughout June on all services. </span>
                                    </h5>
                                    <div class="d-flex align-items-start">
                                        <i class="flex-shrink-0 bi-check2 "></i>
                                        <p class="flex-grow-1 mb-0 check-p-TFD ms-2">Create a powerful online presence with custom websites designed to engage and convert.</p>
                                    </div>
                                    <div class="d-flex align-items-start">
                                        <i class="flex-shrink-0 bi-check2 "></i>
                                        <p class="flex-grow-1 mb-0 check-p-TFD ms-2">Reach your audience on the go with intuitive and feature-rich mobile applications</p>
                                    </div>
                                    <div class="d-flex align-items-start">
                                        <i class="flex-shrink-0 bi-check2 "></i>
                                        <p class="flex-grow-1 mb-0 check-p-TFD ms-2">Skyrocket your visibility, drive traffic, and boost sales with our expert SEO strategies.</p>
                                    </div>
                                    <div class="CTA-form-di">
                                        <script charset="utf-8" type="text/javascript" src="//js.hsforms.net/forms/embed/v2.js"></script>
                                        <script>
                                            hbspt.forms.create({
                                                region: "na1",
                                                portalId: "7083262",
                                                formId: "bab72aa4-d592-4edd-b5be-b9ddad3b0770"
                                            });
                                        </script>
                                    </div>
                                    <!-- <form class="contact-form mt-3" id="contactForm" action="/contact-form" enctype="multipart/form-data" method="post">
                                        <input type="hidden" name="_token" value="MuTrTz2H2Qre4hw6C92Iwb76j6U7v1fn96VFNMVa">
                                        <div class="row">
                                            <div class="col-md-6 mb-2">
                                                <input type="text" id="name" name="name" class="form-control bg-white" placeholder="Full Name" required="">
                                            </div>
                                            <div class="col-md-6 mb-2">
                                                <input type="email" id="email" name="email" class="form-control bg-white" placeholder="Email" required="">
                                            </div>
                                            <div class="col-md-6 mb-2">
                                                <input type="text" class="form-control bg-white" id="phone" name="phone" placeholder="Phone Number" required="">
                                            </div>
                                            <div class="col-md-6 mb-2">
                                                <select id="solution" class="form-control bg-white" name="solutions" required="">
                                                    <option disabled="disabled" selected="selected" value="">Product Interested</option>
                                                    <option value="Website">Web</option>
                                                    <option value="Mobile App">Mobile App</option>
                                                    <option value="SEO">SEO</option>

                                                </select>
                                            </div>
                                            <div class="col-md-12 mb-2">
                                                <textarea name="message" class="form-control bg-white" rows="3" placeholder="Contact Us"></textarea>
                                            </div>
                                            <div class="col-md-12 m-txt-cener">
                                                <button type="submit" class="btn btn-outline-theme CTA-Btn-mrgn-TFD">Start Your Project Today<i class="bi-chevron-right check-p-TFD ms-2"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </form> -->
                                </div>
                            </div>
                            <div class="col-xl-5 col-lg-5 order-lg-2">
                                <div class="text-end m-d-none">
                                    <img src="{{asset('assets')}}/images/home/form-image.webp" class="CTA-b-img-TFD" alt="Support Image" width="400">
                                </div>
                                <div class="text-left m-d-block">
                                    <img src="{{asset('assets')}}/images/home/m-cta.webp" class="CTA-b-img-TFD" alt="Support Image" width="400">
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="CTA-img-btm-di-TFD">
                        <img src="{{asset('assets')}}/images/home/contact-form-icon.webp" class="CTA-G-img-btm-TFD" alt="Support Image" width="400">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--4 section Ends-->
<section class="section-inner-bg-faq-HP">
    <div class="container">
        <div class="px-xl-3">
            <div class="bg-faq-custm-WebD main">
                <div class="card__text">
                    <h2 class="h2-inner-pg-WebD">FAQ Every Question Answered</h2>
                    <div class="accordion">
                        <!-- item 1 -->
                        <div class="accordion__item">
                            <button class="accordion__title">
                                What services do you offer?
                            </button>
                            <div class="accordion__collapse collapse">
                                <div class="accordion__text">
                                    <p>We specialize in providing top-notch website development and SEO services tailored to businesses in the UK and USA. As professional SEO service providers, we ensure quality results.</p>
                                </div>
                            </div>
                        </div>
                        <!-- item 2 -->
                        <div class="accordion__item">
                            <button class="accordion__title">
                                How can I get a quote for my project?
                            </button>
                            <div class="accordion__collapse collapse">
                                <div class="accordion__text">
                                    Getting a quote is easy! Simply fill out the contact form on our website or give us a call. As leading SEO service providers in the UK and USA, we'll promptly provide you with a competitive quote.
                                </div>
                            </div>
                        </div>
                        <!-- item 3 -->
                        <div class="accordion__item">
                            <button class="accordion__title">
                                What is your development process?
                            </button>
                            <div class="accordion__collapse collapse">
                                <div class="accordion__text">
                                    Our comprehensive development process includes expert consultation, meticulous planning, cutting-edge design, development, rigorous testing, and seamless deployment. As reputable SEO providers in the USA, we ensure your website is optimized from the ground up.
                                </div>
                            </div>
                        </div>
                        <!-- item 4 -->
                        <div class="accordion__item">
                            <button class="accordion__title">
                                Do you offer ongoing support and maintenance?
                            </button>
                            <div class="accordion__collapse collapse">
                                <div class="accordion__text">
                                    Absolutely! We offer reliable ongoing support and maintenance services to keep your website performing at its best. As trusted SEO service providers, we ensure your online presence stays strong.
                                </div>
                            </div>
                        </div>
                        <!-- item 5 -->
                        <div class="accordion__item">
                            <button class="accordion__title">
                                How long does it take to develop a website or app?
                            </button>
                            <div class="accordion__collapse collapse">
                                <div class="accordion__text">
                                    The timeline for development varies based on project complexity, but rest assured, our professional team delivers timely results. As cheap SEO service providers near you, we provide realistic timelines to meet your expectations.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection