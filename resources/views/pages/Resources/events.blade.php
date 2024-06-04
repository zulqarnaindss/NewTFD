@extends('newBlogMain')
@section('title', 'Blogs, Case Studies & White Papers')
@section('meta_description' , '')
@section('meta_keywords', '')
@section('contents')
<!--Header Starts-->
<header class="header-bg-NBL-sec">
    <div>
        <div class="container-xl">
            <div class="px-xl-3">
                <div class="row align-items-center">
                    <div class="col-xl-5 col-lg-5 order-lg-2 ms-auto text-center mb-4">
                        <img src="{{asset('assets')}}/images/blogs-media/blog-header.webp" class="img-fluid rounded-4 " width="600" alt="Header Image" />
                    </div>
                    <div class="col-xl-7 col-lg-7 order-lg-1 mb-4">
                        <div class="content-box mb-4 text-lg-start text-center">
                            <h1 class="">Scaling Success: Growth Strategies<br>for<span style="font-weight: 600;"> the Future Dynamics </span>Startups</h1>
                            <div class="d-flex flex-wrap align-items-center justify-content-lg-start contact-cfinance-div">
                                <div class="mb-2">
                                    <a href="/contact-us" class="btn btn-outline-theme">Start Your Project Today<i class="bi-chevron-right check-p-TFD ms-2"></i></a>
                                </div>
                            </div>
                            <div class="d-flex flex-wrap align-items-center justify-content-lg-start  mb-4">
                                <svg class="flex-shrink-0" xmlns="http://www.w3.org/2000/svg" width="16" height="34" viewBox="0 0 46 44" fill="none">
                                    <path d="M44.2935 22.5C44.2935 20.94 44.1497 19.44 43.8827 18H22.5986V26.52H34.7609C34.2268 29.26 32.6243 31.58 30.2206 33.14V38.68H37.555C41.8282 34.84 44.2935 29.2 44.2935 22.5Z" fill="#4285F4" />
                                    <path d="M22.5984 43.9999C28.7001 43.9999 33.8157 42.0399 37.5548 38.6799L30.2204 33.1399C28.2071 34.4599 25.639 35.2599 22.5984 35.2599C16.7227 35.2599 11.7305 31.3999 9.94309 26.2H2.42383V31.8799C6.14237 39.0599 13.7643 43.9999 22.5984 43.9999Z" fill="#34A853" />
                                    <path d="M9.9435 26.1799C9.49152 24.8599 9.22444 23.4599 9.22444 21.9999C9.22444 20.5399 9.49152 19.1399 9.9435 17.8199V12.1399H2.42424C0.88341 15.0999 0 18.4399 0 21.9999C0 25.5599 0.88341 28.8999 2.42424 31.8599L8.2794 27.4199L9.9435 26.1799Z" fill="#FBBC05" />
                                    <path d="M22.5984 8.75999C25.9266 8.75999 28.885 9.87998 31.2476 12.04L37.7191 5.73999C33.7952 2.18 28.7001 0 22.5984 0C13.7643 0 6.14237 4.93999 2.42383 12.14L9.94309 17.82C11.7305 12.62 16.7227 8.75999 22.5984 8.75999Z" fill="#EA4335" />
                                </svg>
                                <h6 class="mb-0 ms-2 text-warning google-rated-point fw-semibold">4.2</h6>
                                <div class="ms-2 stars-inner-st">
                                    <i class="bi-star-fill text-warning"></i>
                                    <i class="bi-star-fill text-warning"></i>
                                    <i class="bi-star-fill text-warning"></i>
                                    <i class="bi-star-fill text-warning"></i>
                                    <i class="bi-star-fill text-warning"></i>
                                </div>
                                <h6 class="mb-0 ms-2 text-info rated-care-txt">Top-rated care</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<!--Header Ends-->
<section class="">
    <div class="container-lg">
        <div class="pdng-left-pdng-rt-NBL">
            <header class="headerz">
                <div class="filters">
                    <!-- <li class="option-setz"><a href="#" data-filter-value="" class="reset selectedz">All</a></li> -->
                    <!-- <li class="option-setz"><a href="#" data-filter-value=".fave">Favourites</a></li> -->
                    <div class="row">
                        <div class="col-xl-4 col-lg-4">
                            <div class="icon-input">
                                <input class="icon-input__text-field" type="search" placeholder="Type to Search">
                                <i class="fas fa-search icon-input__icon"></i>
                                <!-- <i class=" material-icons"></i> -->
                            </div>
                        </div>
                        <div class="col-xl-8 col-lg-8">
                            <div class="h-border-NBL">
                                <ul class="filterz option-setz exclusive" data-filter-group="status">
                                    <!-- <li><a href="#" data-filter-value="" >ALL</a></li> -->
                                    <li><a href="/blogs">Blogs</a></li>
                                    <li><a href="/case-studies">Case Studies</a></li>
                                    <li><a href="/white-papers">White Papers</a></li>
                                    <li><a href="#" data-filter-value=".event" class="selectedz">Events</a></li>
                                    <li><a href="/podcasts">Podcast</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="NBL-B-M">
                        <div class="row">
                            <div class="col-xl-3 col-lg-3">
                                <ul class="filterz option-setz Cstm-List-St-NBL" data-filter-group="fandom">
                                    <li class="flx"><b>Industry</b></li>
                                    <!-- <li class="flx chkd-list-itm"><a href="#" data-filter-value="" class="selectedz slcts"><input type="checkbox"> All</a></li> -->
                                    <li class="flx chkd-list-itm"><a href="#" data-filter-value=".yoi" class="slcts"><input type="checkbox"> Manufacturing</a></li>
                                    <li class="flx chkd-list-itm"><a href="#" data-filter-value=".az" class="slcts"><input type="checkbox"> Retail</a></li>
                                    <li class="flx chkd-list-itm"><a href="#" data-filter-value=".pp" class="slcts"><input type="checkbox"> Public Sector</a></li>
                                    <li class="flx chkd-list-itm"><a href="#" data-filter-value=".az" class="slcts"><input type="checkbox"> Financial Services</a></li>
                                    <li class="flx chkd-list-itm"><a href="#" data-filter-value=".pp" class="slcts"><input type="checkbox"> Trading & Distribution</a></li>
                                </ul>
                                <!-- <ul class="filterz option-setz combine Cstm-List-St-NBL mt-2rem" data-filter-group="content">
                                    <li class="flx "><b>Topic</b></li>
                                    <li class="flx chkd-list-itm"><a href="#" data-filter-value=".Transforming" class="slcts"><input type="checkbox"> Cloud</a></li>
                                    <li class="flx chkd-list-itm"><a href="#" data-filter-value=".angst" class="slcts"><input type="checkbox"> data</a></li>
                                    <li class="flx chkd-list-itm"><a href="#" data-filter-value=".banter" class="slcts"><input type="checkbox"> Automation</a></li>
                                    <li class="flx chkd-list-itm"><a href="#" data-filter-value=".humour" class="slcts"><input type="checkbox"> Security</a></li>
                                    <li class="flx chkd-list-itm"><a href="#" data-filter-value=".fluff" class="slcts"><input type="checkbox"> Digital Commerce</a></li>
                                    <li class="flx chkd-list-itm"><a href="#" data-filter-value=".angst" class="slcts"><input type="checkbox"> Outsourcing</a></li>
                                    <li class="flx chkd-list-itm"><a href="#" data-filter-value=".banter" class="slcts"><input type="checkbox"> Supply Chain</a></li>
                                    <li class="flx chkd-list-itm"><a href="#" data-filter-value=".humour" class="slcts"><input type="checkbox"> Digital</a></li>
                                    <li class="flx chkd-list-itm"><a href="#" data-filter-value=".fluff" class="slcts"><input type="checkbox"> Integration</a></li>
                                </ul> -->
                            </div>
                            <div class="col-xl-9 col-lg-9">
                                <div class="wrapperz">
                                    <div class="gridz">
                                        <div class="col">
                                            <div class="d-flex align-items-stretch">
                                                <div class="itemz yoi event incomplete Eql-NBL ">
                                                    <div>
                                                        <img src="{{asset('assets')}}/images/blogs-media/events/field-service-palm-springs.webp" class="img-fluid w-100 mb-3" alt="" />
                                                        <p class="event-date-st">17-05-2024</p>
                                                        <h2>Field Services Palm Springs</h2>
                                                    </div>
                                                    <div class="d-grid">
                                                        <a href="" class=" text-decoration-none">Read the Event <i class="bi-arrow-right"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- <div class="col">
                                            <div class="d-flex align-items-stretch">
                                                <div class="itemz yoi blog incomplete Eql-NBL">
                                                    <div>
                                                        <img src="{{asset('assets')}}/images/blogs-media/blogs/the-influence-of-generative-AI-in-retail.webp" class="img-fluid w-100 mb-3" alt="" />
                                                        <p class="event-date-st">Apr 15</p>
                                                        <h2>The Influence of Generative AI on Traditional Process Automation within the Retail Sector</h2>
                                                    </div>
                                                    <div class="d-grid">
                                                        <a href="/blog/the-influence-of-generative-ai-on-traditional-process-automation-within-the-retail-sector" class=" text-decoration-none">Read the blog <i class="bi-arrow-right"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="d-flex align-items-stretch">
                                                <div class="itemz yoi humour blog Eql-NBL">
                                                    <div>
                                                        <img src="{{asset('assets')}}/images/blogs-media/blogs/Strategic-Due-Diligence.webp" class="img-fluid w-100 mb-3" alt="" />
                                                        <p class="event-date-st">Apr 26</p>
                                                        <h2>Strategic Due Diligence: Empowering Informed Decision-Making and Enhanced Secondary Market Transactions</h2>
                                                    </div>
                                                    <div class="d-grid">
                                                        <a href="/blog/empowering-informed-decision-making-and-enhanced-secondary-market-transactions" class=" text-decoration-none">Read the blog <i class="bi-arrow-right"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="d-flex align-items-stretch">
                                                <div class="itemz yoi fluff angst banter humour fave blog Eql-NBL">
                                                    <div>
                                                        <img src="{{asset('assets')}}/images/blogs-media/blogs/five-steps-to-achieve-smooth-transition.webp" class="img-fluid w-100 mb-3" alt="" />
                                                        <p class="event-date-st">Apr 30</p>
                                                        <h2>Five Steps to Achieve a Smooth Transition from On-Premises to Cloud</h2>

                                                    </div>
                                                    <div class="d-grid">
                                                        <a href="/blog/five-steps-to-achieve-a-smooth-transition-from-on-premises-to-cloud" class=" text-decoration-none">Read the blog <i class="bi-arrow-right"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="d-flex align-items-stretch">
                                                <div class="itemz yoi fluff banter angst humour blog fave Eql-NBL">
                                                    <div>
                                                        <img src="{{asset('assets')}}/images/blogs-media/blogs/When-will-it-be-too-late-to-move-your-Finance(ERP)-system-to-Cloud.webp" class="img-fluid w-100 mb-3" alt="" />
                                                        <p class="event-date-st">May 02</p>
                                                        <h2>When will it be too late to move your Finance (ERP) system to the Cloud?</h2>
                                                    </div>
                                                    <div class="d-grid">
                                                        <a href="/blog/when-will-it-be-too-late-to-move-your-finance-erp-system-to-the-cloud">Read the blog <i class="bi-arrow-right"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="d-flex align-items-stretch">
                                                <div class="itemz yoi fluff banter angst humour blog fave Eql-NBL">
                                                    <div>
                                                        <img src="{{asset('assets')}}/images/blogs-media/blogs/Make-Microsoft-Dynamics-365-Business-Central-work-harder.webp" class="img-fluid w-100 mb-3" alt="" />
                                                        <p class="event-date-st">May 03</p>
                                                        <h2>Make Microsoft Dynamics 365 Business Central work harder for you with the 3 Rs - review, refresh, and revisit!</h2>
                                                    </div>
                                                    <div class="d-grid">
                                                        <a href="/blog/make-microsoft-dynamics-365-business-central-work-harder-for-you-with-the-3-rs-review-refresh-and-revisit">Read the blog <i class="bi-arrow-right"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="align-items-stretch d-flex ">
                                                <div class="itemz az angst incomplete blog Eql-NBL">
                                                    <div>
                                                        <img src="{{asset('assets')}}/images/blogs-media/blogs/choosing-right-partner-for-d365-business-central-implementation.webp" class="img-fluid w-100 mb-3" alt="" />
                                                        <p class="event-date-st">Feb 25</p>
                                                        <h2>Choosing the Right Partner for Dynamics 365 Business Central Implementation</h2>
                                                    </div>
                                                    <div class="d-grid">
                                                        <a href="#">Read the blog <i class="bi-arrow-right"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="d-flex align-items-stretch">
                                                <div class="itemz pp angst banter blog fave Eql-NBL">
                                                    <div>
                                                        <img src="{{asset('assets')}}/images/blogs-media/blogs/boost-your-sales-efficiency.webp" class="img-fluid w-100 mb-3" alt="" />
                                                        <p class="event-date-st">Feb 20</p>
                                                        <h2>Boost Your Sales Efficiency: Accelerate Your Slow Sales with Microsoft Business Central</h2>

                                                    </div>
                                                    <div class="d-grid">
                                                        <a href="#">Read the blog <i class="bi-arrow-right"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="d-flex align-items-stretch">
                                                <div class="itemz yoi angst blog fave Eql-NBL">
                                                    <div>
                                                        <img src="{{asset('assets')}}/images/blogs-media/blogs/future-proof-your-business-with-cloud-financial-management.webp" class="img-fluid w-100 mb-3" alt="" />
                                                        <p class="event-date-st">Feb 10</p>
                                                        <h2>Future proof your business with cloud Financial Management</h2>
                                                    </div>
                                                    <div class="d-grid">
                                                        <a href="#">Read the blog <i class="bi-arrow-right"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col">
                                            <div class="d-flex align-items-stretch">
                                                <div class="itemz yoi fluff banter angst humour blog fave Eql-NBL">
                                                    <div>
                                                        <img src="{{asset('assets')}}/images/blogs-media/blogs/Microsoft-Dynamics-365-Business-Central-2024-Wave1-Release-Plan.webp" class="img-fluid w-100 mb-3" alt="" />
                                                        <p class="event-date-st">Feb 02</p>
                                                        <h2>Microsoft Dynamics 365 Business Central 2024 Wave 1 Release Plan</h2>
                                                    </div>
                                                    <div class="d-grid">
                                                        <a href="#">Read the blog <i class="bi-arrow-right"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col">
                                            <div class="d-flex align-items-stretch">
                                                <div class="itemz yoi fluff banter angst humour blog fave Eql-NBL">
                                                    <div>
                                                        <img src="{{asset('assets')}}/images/blogs-media/blogs/How-to-choose-right-ERP-software-for-food-distributors.webp" class="img-fluid w-100 mb-3" alt="" />
                                                        <p class="event-date-st">Jan 25</p>
                                                        <h2>How to choose the right ERP software for food distributors and manufacturers</h2>
                                                    </div>
                                                    <div class="d-grid">
                                                        <a href="#">Read the blog <i class="bi-arrow-right"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="d-flex align-items-stretch">
                                                <div class="itemz yoi fluff banter angst humour blog fave Eql-NBL">
                                                    <div>
                                                        <img src="{{asset('assets')}}/images/blogs-media/blogs/Why-multi-company-group-roll-outs-are-no-longer-headache-in-Business-Central.webp" class="img-fluid w-100 mb-3" alt="" />
                                                        <p class="event-date-st">Jan 22</p>
                                                        <h2>Why multi-company group roll outs are no longer a headache in Business Central</h2>
                                                    </div>
                                                    <div class="d-grid">
                                                        <a href="#">Read the blog <i class="bi-arrow-right"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="d-flex align-items-stretch">
                                                <div class="itemz yoi Transforming fluff banter angst humour case-study Eql-NBL">
                                                    <div>
                                                        <img src="{{asset('assets')}}/images/blogs-media/case-studies/case-study-tiryaki-agro.webp" class="img-fluid w-100 mb-3" alt="" />
                                                        <p class="event-date-st">Jan 18</p>
                                                        <h2>Transforming Corrosion Management: A Dynamics 365 Business Central Case Study with Cortec® Middle East</h2>
                                                    </div>
                                                    <div class="d-grid">
                                                        <a href="/case-study/dynamics-365-business-central-case-study-with-cortec-middle-east">Read Our Case Study <i class="bi-arrow-right"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="d-flex align-items-stretch">
                                                <div class="itemz yoi fluff banter angst humour case-study fave Eql-NBL">
                                                    <div>
                                                        <img src="{{asset('assets')}}/images/blogs-media/case-studies/transforming-corrotion-management-case-study.webp" class="img-fluid w-100 mb-3" alt="" />
                                                        <p class="event-date-st">Jan 15</p>
                                                        <h2>Dynamics Stream Empowers Tiryaki Agro's Digital Transformation Journey</h2>
                                                    </div>
                                                    <div class="d-grid">
                                                        <a href="#">Read Our Case Study <i class="bi-arrow-right"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="d-flex align-items-stretch">
                                                <div class="itemz yoi fluff banter angst humour white-paper Eql-NBL">
                                                    <div>
                                                        <img src="{{asset('assets')}}/images/blogs-media/white-papers/Maximising-business-potentials-with-copilot-whitepaper.webp" class="img-fluid w-100 mb-3" alt="" />
                                                        <p class="event-date-st">Jan 12</p>
                                                        <h2>Maximising Business Potential with Microsoft Dynamics 365 Copilot</h2>
                                                    </div>
                                                    <div class="d-grid">
                                                        <a href="/white-paper/maximising-business-potential-with-microsoft-dynamics-365-copilot">Read the White Paper <i class="bi-arrow-right"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="d-flex align-items-stretch ">
                                                <div class="itemz yoi fluff banter angst humour event Eql-NBL">
                                                    <div>
                                                        <img src="{{asset('assets')}}/images/blogs-media/events/field-service-palm-springs.webp" class="img-fluid w-100 mb-3" alt="" />
                                                        <p class="event-date-st">Mar 26</p>
                                                        <h2>Field Services Palm Springs</h2>
                                                    </div>
                                                    <div class="d-grid">
                                                        <a href="/event/field-services-palm-springs">Read the Event <i class="bi-arrow-right"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="d-flex align-items-stretch ">
                                                <div class="itemz yoi fluff banter angst humour event Eql-NBL">
                                                    <div>
                                                        <img src="{{asset('assets')}}/images/blogs-media/events/insurtech-insights-2024.webp" class="img-fluid w-100 mb-3" alt="" />
                                                        <p class="event-date-st">Mar 20</p>
                                                        <h2>Insurtech Insights 2024</h2>
                                                    </div>
                                                    <div class="d-grid">
                                                        <a href="#">Read the Event <i class="bi-arrow-right"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="d-flex align-items-stretch ">
                                                <div class="itemz yoi fluff banter angst humour event Eql-NBL">
                                                    <div>
                                                        <img src="{{asset('assets')}}/images/blogs-media/events/MBA-serving-solutions-conference-expo-2024.webp" class="img-fluid w-100 mb-3" alt="" />
                                                        <p class="event-date-st">Feb 20</p>
                                                        <h2>MBA’s Servicing Solutions Conference & Expo 2024</h2>
                                                    </div>
                                                    <div class="d-grid">
                                                        <a href="#">Read the Event <i class="bi-arrow-right"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="d-flex align-items-stretch col">
                                                <div class="itemz yoi fluff banter angst humour podcast Eql-NBL">
                                                    <div>
                                                        <img src="{{asset('assets')}}/images/blogs-media/podcasts/traditional-retail.webp" class="img-fluid w-100 mb-3" alt="" />
                                                        <p class="event-date-st">Oct 18</p>
                                                        <h2>Is Traditional Retail Dead in 2023?</h2>
                                                    </div>
                                                    <div class="d-grid">
                                                        <a href="#">Read the Podcast <i class="bi-arrow-right"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="d-flex align-items-stretch">
                                                <div class="itemz yoi fluff banter angst humour podcast Eql-NBL">
                                                    <div>
                                                        <img src="{{asset('assets')}}/images/blogs-media/podcasts/modern-approach-supplychain.webp" class="img-fluid w-100 mb-3" alt="" />
                                                        <p class="event-date-st">Oct 10</p>
                                                        <h2>Modern Approach to Supply Chain Resilience using Intelligent Order Management</h2>
                                                    </div>
                                                    <div class="d-grid">
                                                        <a href="#">Read the Podcast <i class="bi-arrow-right"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="d-flex align-items-stretch ">
                                                <div class="itemz yoi fluff banter angst humour podcast Eql-NBL">
                                                    <div>
                                                        <img src="{{asset('assets')}}/images/blogs-media/podcasts/from-chaos-to-control.webp" class="img-fluid w-100 mb-3" alt="" />
                                                        <p class="event-date-st">Jun 12</p>
                                                        <h2>From Chaos to Control Multi Enterprise Connectivity for Supply Chain Resilience</h2>
                                                    </div>
                                                    <div class="d-grid">
                                                        <a href="#">Read the Podcast <i class="bi-arrow-right"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div> -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="log"></div>
            </header>
        </div>
    </div>
</section>
<section class="CTA-sect-st-last-TFD">
    <div class="container">
        <div class="px-xl-3">
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
                                <h5 class="fs-1rem mb-2 mrgn-top-2rem">10x your business digital potential, exposure, Sales & Leads funnel! <br><span class="fw-semibold">Straight 30% off for the month of May on all services.</span></h5>
                                <div class="d-flex align-items-start">
                                    <i class="flex-shrink-0 bi-check2 "></i>
                                    <p class="flex-grow-1 mb-0 check-p-TFD ms-2">An ERP & CRM trusted by millions of SME’S, startup’ and enterprises globally.</p>
                                </div>
                                <div class="d-flex align-items-start">
                                    <i class="flex-shrink-0 bi-check2 "></i>
                                    <p class="flex-grow-1 mb-0 check-p-TFD ms-2">A team of 300+ Functional & Technical consultants.</p>
                                </div>
                                <div class="d-flex align-items-start">
                                    <i class="flex-shrink-0 bi-check2 "></i>
                                    <p class="flex-grow-1 mb-0 check-p-TFD ms-2">Human-centric & data-driven approach to propose better solution & implementation of Microsoft Dynamics 365 CRM & ERP.</p>
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
</section>
@endsection