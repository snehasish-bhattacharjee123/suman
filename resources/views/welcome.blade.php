<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Insurance </title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description"> 

    <!-- csrf-token -->
    <meta  name="csrf-token" content="{{ csrf_token() }}">
    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&family=Poppins:wght@600;700&display=swap" rel="stylesheet"> 

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="{{asset('assets/front/lib/animate/animate.min.css')}}" rel="stylesheet">
    <link href="{{asset('assets/front/lib/owlcarousel/assets/owl.carousel.min.css')}}" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{asset('assets/front/css/bootstrap.min.css')}}" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="{{asset('assets/front/css/style.css')}}" rel="stylesheet">
</head>

<body>
    <!-- Spinner Start -->
    <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-grow text-primary" role="status"></div>
    </div>
    <!-- Spinner End -->


    <!-- Topbar Start -->
    @include('frontend.inc.topbar')
    <!-- Topbar End -->


    <!-- Navbar Start -->
    @include('frontend.inc.navbar')
    <!-- Navbar End -->


    <!-- Carousel Start --> 
   
        <div class="container-fluid p-0 mb-5 wow fadeIn" data-wow-delay="0.1s">
            <div id="header-carousel" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner"> 
                @foreach($slider as $idex => $s) 
                    <div class="carousel-item {{$idex == 0? 'active': ''}}">
                        <img class="w-100" src="{{asset('storage/slider/'.$s->slider_image)}}" alt="Image">
                        <div class="carousel-caption">
                            <div class="container">
                                <div class="row">
                                    <div class="col-12 col-lg-6">
                                        <h1 class="display-3 text-dark mb-4 animated slideInDown">{{$s->slider_title}}</h1>
                                        <p class="fs-5 text-body mb-5">{{$s->slider_description}}</p>
                                        <a href="" class="btn btn-primary py-3 px-5">More Details</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> 
                @endforeach
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#header-carousel"
                    data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#header-carousel"
                    data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>  
    <!-- Carousel End -->


    <!-- About Start --> 
    
        <div class="container-xxl py-5">
            <div class="container">
                <div class="row g-5">
                    <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="position-relative overflow-hidden rounded ps-5 pt-5 h-100" style="min-height: 400px;"> 
                            @php
                                $image = json_decode($experience->about_image);
                            @endphp 
                            @if($image)
                                <img class="position-absolute w-100 h-100" src="{{asset('storage/about/'.$image[0])}}" alt="" style="object-fit: cover;"> 
                            @else
                                <img class="position-absolute w-100 h-100" src="{{asset('assets/front/img/about.jpg')}}" alt="" style="object-fit: cover;"> 
                            @endif
                            <div class="position-absolute top-0 start-0 bg-white rounded pe-3 pb-3" style="width: 200px; height: 200px;">
                                <div class="d-flex flex-column justify-content-center text-center bg-primary rounded h-100 p-3">
                                    <h1 class="text-white mb-0">{{$experience->about_experience}}</h1>
                                    <h2 class="text-white">Years</h2>
                                    <h5 class="text-white mb-0">Experience</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                        <div class="h-100">
                            <h1 class="display-6 mb-5">We're Here To Assist You With Exploring Protection</h1>
                            <p class="fs-5 text-primary mb-4">Aliqu diam amet diam et eos. Clita erat ipsum et lorem sed stet lorem sit clita duo justo erat amet</p>
                            <div class="row g-4 mb-4">
                                <div class="col-sm-6">
                                    <div class="d-flex align-items-center">
                                        <img class="flex-shrink-0 me-3" src="img/icon/icon-04-primary.png" alt="">
                                        <h5 class="mb-0">Flexible Insurance Plans</h5>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="d-flex align-items-center">
                                        <img class="flex-shrink-0 me-3" src="img/icon/icon-03-primary.png" alt="">
                                        <h5 class="mb-0">Money Back Guarantee</h5>
                                    </div>
                                </div>
                            </div>
                            <p class="mb-4">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit. Aliqu diam amet diam et eos. Clita erat ipsum et lorem et sit, sed stet lorem sit clita duo justo magna dolore erat amet</p>
                            <div class="border-top mt-4 pt-4">
                                <div class="d-flex align-items-center">
                                    <img class="flex-shrink-0 rounded-circle me-3" src="img/profile.jpg" alt="">
                                    <h5 class="mb-0">Call Us: +91 {{$experience->about_contact}}</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> 
    <!-- About End -->


    <!-- Facts Start -->
    <div class="container-fluid overflow-hidden my-5 px-lg-0">
        <div class="container facts px-lg-0">
            <div class="row g-0 mx-lg-0">
                <div class="col-lg-6 facts-text wow fadeIn" data-wow-delay="0.1s">
                    <div class="h-100 px-4 ps-lg-0">
                        <h1 class="text-white mb-4">For Individuals And Organisations</h1>
                        <p class="text-light mb-5">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit. Aliqu diam amet diam et eos. Clita erat ipsum et lorem et sit, sed stet lorem sit clita duo justo magna dolore erat amet</p>
                        <a href="" class="align-self-start btn btn-secondary py-3 px-5">More Details</a>
                    </div>
                </div>
                <div class="col-lg-6 facts-counter wow fadeIn" data-wow-delay="0.5s">
                    <div class="h-100 px-4 pe-lg-0">
                        <div class="row g-5">
                            <div class="col-sm-6">
                                <h1 class="display-5" data-toggle="counter-up">1234</h1>
                                <p class="fs-5 text-primary">Happy Clients</p>
                            </div>
                            <div class="col-sm-6">
                                <h1 class="display-5" data-toggle="counter-up">1234</h1>
                                <p class="fs-5 text-primary">Projects Succeed</p>
                            </div>
                            <div class="col-sm-6">
                                <h1 class="display-5" data-toggle="counter-up">1234</h1>
                                <p class="fs-5 text-primary">Awards Achieved</p>
                            </div>
                            <div class="col-sm-6">
                                <h1 class="display-5" data-toggle="counter-up">1234</h1>
                                <p class="fs-5 text-primary">Team Members</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Facts End -->


    <!-- Features Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                    <h1 class="display-6 mb-5">Few Reasons Why People Choosing Us!</h1>
                    <p class="mb-4">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit. Aliqu diam amet diam et eos. Clita erat ipsum et lorem et sit, sed stet lorem sit clita duo justo magna dolore erat amet</p>
                    <div class="row g-3">
                        <div class="col-sm-6 wow fadeIn" data-wow-delay="0.1s">
                            <div class="bg-light rounded h-100 p-3">
                                <div class="bg-white d-flex flex-column justify-content-center text-center rounded h-100 py-4 px-3"> 
                                    <img class="align-self-center mb-3" src="img/icon/icon-06-primary.png" alt="">
                                    <h5 class="mb-0">Easy Process</h5>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 wow fadeIn" data-wow-delay="0.2s">
                            <div class="bg-light rounded h-100 p-3"> 
                                <div class="bg-white d-flex flex-column justify-content-center text-center rounded py-4 px-3">
                                    <img class="align-self-center mb-3" src="img/icon/icon-03-primary.png" alt="">
                                    <h5 class="mb-0">Fast Delivery</h5>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 wow fadeIn" data-wow-delay="0.3s">
                            <div class="bg-light rounded h-100 p-3">
                                <div class="bg-white d-flex flex-column justify-content-center text-center rounded py-4 px-3">
                                    <img class="align-self-center mb-3" src="img/icon/icon-04-primary.png" alt="">
                                    <h5 class="mb-0">Policy Controlling</h5>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 wow fadeIn" data-wow-delay="0.4s">
                            <div class="bg-light rounded h-100 p-3">
                                <div class="bg-white d-flex flex-column justify-content-center text-center rounded h-100 py-4 px-3">
                                    <img class="align-self-center mb-3" src="img/icon/icon-07-primary.png" alt="">
                                    <h5 class="mb-0">Money Saving</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="position-relative rounded overflow-hidden h-100" style="min-height: 400px;"> 
                    @php
                        $image = json_decode($experience->about_image);
                    @endphp 

                    @if(count($image) > 1)
                        <img class="position-absolute w-100 h-100" src="{{asset('storage/about/'.$image[1])}}" alt="" style="object-fit: cover;"> 
                    @else
                        <img class="position-absolute w-100 h-100" src="{{asset('assets/front/img/about.jpg')}}" alt="" style="object-fit: cover;"> 
                    @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Features End -->


    <!-- Service Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center mx-auto" style="max-width: 500px;">
                <h1 class="display-6 mb-5">We Provide professional Insurance Services</h1>
            </div>
            <div class="row g-4 justify-content-center">
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="service-item rounded h-100 p-5">
                        <div class="d-flex align-items-center ms-n5 mb-4">
                            <div class="service-icon flex-shrink-0 bg-primary rounded-end me-4">
                                <img class="img-fluid" src="img/icon/icon-10-light.png" alt="">
                            </div>
                            <h4 class="mb-0">Life Insurance</h4>
                        </div>
                        <p class="mb-4">Aliqu diam amet eos erat ipsum et lorem et sit, sed stet lorem sit clita duo justo erat amet</p>
                        <a class="btn btn-light px-3" href="">Read More</a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="service-item rounded h-100 p-5">
                        <div class="d-flex align-items-center ms-n5 mb-4">
                            <div class="service-icon flex-shrink-0 bg-primary rounded-end me-4">
                                <img class="img-fluid" src="img/icon/icon-01-light.png" alt="">
                            </div>
                            <h4 class="mb-0">Health Insurance</h4>
                        </div>
                        <p class="mb-4">Aliqu diam amet eos erat ipsum et lorem et sit, sed stet lorem sit clita duo justo erat amet</p>
                        <a class="btn btn-light px-3" href="">Read More</a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="service-item rounded h-100 p-5">
                        <div class="d-flex align-items-center ms-n5 mb-4">
                            <div class="service-icon flex-shrink-0 bg-primary rounded-end me-4">
                                <img class="img-fluid" src="img/icon/icon-05-light.png" alt="">
                            </div>
                            <h4 class="mb-0">Home Insurance</h4>
                        </div>
                        <p class="mb-4">Aliqu diam amet eos erat ipsum et lorem et sit, sed stet lorem sit clita duo justo erat amet</p>
                        <a class="btn btn-light px-3" href="">Read More</a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="service-item rounded h-100 p-5">
                        <div class="d-flex align-items-center ms-n5 mb-4">
                            <div class="service-icon flex-shrink-0 bg-primary rounded-end me-4">
                                <img class="img-fluid" src="img/icon/icon-08-light.png" alt="">
                            </div>
                            <h4 class="mb-0">Vehicle Insurance</h4>
                        </div>
                        <p class="mb-4">Aliqu diam amet eos erat ipsum et lorem et sit, sed stet lorem sit clita duo justo erat amet</p>
                        <a class="btn btn-light px-3" href="">Read More</a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="service-item rounded h-100 p-5">
                        <div class="d-flex align-items-center ms-n5 mb-4">
                            <div class="service-icon flex-shrink-0 bg-primary rounded-end me-4">
                                <img class="img-fluid" src="img/icon/icon-07-light.png" alt="">
                            </div>
                            <h4 class="mb-0">Business Insurance</h4>
                        </div>
                        <p class="mb-4">Aliqu diam amet eos erat ipsum et lorem et sit, sed stet lorem sit clita duo justo erat amet</p>
                        <a class="btn btn-light px-3" href="">Read More</a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="service-item rounded h-100 p-5">
                        <div class="d-flex align-items-center ms-n5 mb-4">
                            <div class="service-icon flex-shrink-0 bg-primary rounded-end me-4">
                                <img class="img-fluid" src="img/icon/icon-06-light.png" alt="">
                            </div>
                            <h4 class="mb-0">Property Insurance</h4>
                        </div>
                        <p class="mb-4">Aliqu diam amet eos erat ipsum et lorem et sit, sed stet lorem sit clita duo justo erat amet</p>
                        <a class="btn btn-light px-3" href="">Read More</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Service End -->


    <!-- Appointment Start -->
    <div class="container-fluid appointment my-5 py-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.3s">
                    <h1 class="display-6 text-white mb-5">We're Award Winning Insurance Company</h1>
                    <p class="text-white mb-5">Aliqu diam amet diam et eos. Clita erat ipsum et lorem et sit, sed stet lorem sit clita duo justo magna dolore erat amet. Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit. Aliqu diam amet diam et eos. Clita erat ipsum et lorem et sit, sed stet lorem sit clita duo justo magna.</p>
                    <div class="bg-white rounded p-3">
                        <div class="d-flex align-items-center bg-primary rounded p-3">
                            <img class="flex-shrink-0 rounded-circle me-3" src="img/profile.jpg" alt="" >
                            <h5 class="text-white mb-0">Call Us: +91 {{$experience->about_contact}}</h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
                    <div class="bg-white rounded p-5">
                    <form id="appoinment"> 
                        <div id="sendmessage">Your appointment has been scheduled!</div>
                        <div class="row g-3">
                            <div class="col-sm-6">
                                <div class="form-floating">
                                    <input type="text" class="form-control" id="gname" name="name" placeholder="Guardian Name">
                                    <label for="gname">Your Name</label>
                                    
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-floating">
                                    <input type="date" class="form-control" id="schedule-date" name="date" placeholder="Schedule Date">
                                    <label for="schedule-date">Schedule Date</label>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-floating">
                                    <input type="number" class="form-control" id="cname" name="number" placeholder="Child Name" oninput="this.value = this.value.slice(0,10)">
                                    <label for="cname">Your Mobile</label>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-floating">
                                    <input type="text" class="form-control" id="cage" name="service" placeholder="Child Age">
                                    <label for="cage">Service Type</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-floating">
                                    <textarea class="form-control" placeholder="Leave a message here" id="message" name="message" style="height: 80px"></textarea>
                                    <label for="message">Message</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <button id="form-button" class="btn btn-primary py-3 px-5" type="submit">Get Appointment</button>
                            </div>
                        </div>
                    </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Appointment End -->


    <!-- Team Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center mx-auto" style="max-width: 500px;">
                <h1 class="display-6 mb-5">Meet Our Professional Team Members</h1>
            </div>
            <div class="row g-4">
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="team-item rounded">
                        <img class="img-fluid" src="img/team-1.jpg" alt="">
                        <div class="text-center p-4">
                            <h5>Full Name</h5>
                            <span>Designation</span>
                        </div>
                        <div class="team-text text-center bg-white p-4">
                            <h5>Full Name</h5>
                            <p>Designation</p>
                            <div class="d-flex justify-content-center">
                                <a class="btn btn-square btn-light m-1" href=""><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-square btn-light m-1" href=""><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-square btn-light m-1" href=""><i class="fab fa-youtube"></i></a>
                                <a class="btn btn-square btn-light m-1" href=""><i class="fab fa-linkedin-in"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="team-item rounded">
                        <img class="img-fluid" src="img/team-2.jpg" alt="">
                        <div class="text-center p-4">
                            <h5>Full Name</h5>
                            <span>Designation</span>
                        </div>
                        <div class="team-text text-center bg-white p-4">
                            <h5>Full Name</h5>
                            <p>Designation</p>
                            <div class="d-flex justify-content-center">
                                <a class="btn btn-square btn-light m-1" href=""><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-square btn-light m-1" href=""><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-square btn-light m-1" href=""><i class="fab fa-youtube"></i></a>
                                <a class="btn btn-square btn-light m-1" href=""><i class="fab fa-linkedin-in"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="team-item rounded">
                        <img class="img-fluid" src="img/team-3.jpg" alt="">
                        <div class="text-center p-4">
                            <h5>Full Name</h5>
                            <span>Designation</span>
                        </div>
                        <div class="team-text text-center bg-white p-4">
                            <h5>Full Name</h5>
                            <p>Designation</p>
                            <div class="d-flex justify-content-center">
                                <a class="btn btn-square btn-light m-1" href=""><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-square btn-light m-1" href=""><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-square btn-light m-1" href=""><i class="fab fa-youtube"></i></a>
                                <a class="btn btn-square btn-light m-1" href=""><i class="fab fa-linkedin-in"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.7s">
                    <div class="team-item rounded">
                        <img class="img-fluid" src="img/team-4.jpg" alt="">
                        <div class="text-center p-4">
                            <h5>Full Name</h5>
                            <span>Designation</span>
                        </div>
                        <div class="team-text text-center bg-white p-4">
                            <h5>Full Name</h5>
                            <p>Designation</p>
                            <div class="d-flex justify-content-center">
                                <a class="btn btn-square btn-light m-1" href=""><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-square btn-light m-1" href=""><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-square btn-light m-1" href=""><i class="fab fa-youtube"></i></a>
                                <a class="btn btn-square btn-light m-1" href=""><i class="fab fa-linkedin-in"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Team End -->


    <!-- Testimonial Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center mx-auto" style="max-width: 500px;">
                <h1 class="display-6 mb-5">What They Say About Our Insurance</h1>
            </div>
            <div class="row g-5">
                <div class="col-lg-3 d-none d-lg-block">
                    <div class="testimonial-left h-100">
                        <img class="img-fluid animated pulse infinite" src="img/testimonial-1.jpg" alt="">
                        <img class="img-fluid animated pulse infinite" src="img/testimonial-2.jpg" alt="">
                        <img class="img-fluid animated pulse infinite" src="img/testimonial-3.jpg" alt="">
                    </div>
                </div>
                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
                    <div class="owl-carousel testimonial-carousel">
                        <div class="testimonial-item text-center">
                            <img class="img-fluid rounded mx-auto mb-4" src="img/testimonial-1.jpg" alt="">
                            <p class="fs-5">Dolores sed duo clita tempor justo dolor et stet lorem kasd labore dolore lorem ipsum. At lorem lorem magna ut et, nonumy et labore et tempor diam tempor erat.</p>
                            <h5>Client Name</h5>
                            <span>Profession</span>
                        </div>
                        <div class="testimonial-item text-center">
                            <img class="img-fluid rounded mx-auto mb-4" src="img/testimonial-2.jpg" alt="">
                            <p class="fs-5">Dolores sed duo clita tempor justo dolor et stet lorem kasd labore dolore lorem ipsum. At lorem lorem magna ut et, nonumy et labore et tempor diam tempor erat.</p>
                            <h5>Client Name</h5>
                            <span>Profession</span>
                        </div>
                        <div class="testimonial-item text-center">
                            <img class="img-fluid rounded mx-auto mb-4" src="img/testimonial-3.jpg" alt="">
                            <p class="fs-5">Dolores sed duo clita tempor justo dolor et stet lorem kasd labore dolore lorem ipsum. At lorem lorem magna ut et, nonumy et labore et tempor diam tempor erat.</p>
                            <h5>Client Name</h5>
                            <span>Profession</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 d-none d-lg-block">
                    <div class="testimonial-right h-100">
                        <img class="img-fluid animated pulse infinite" src="img/testimonial-1.jpg" alt="">
                        <img class="img-fluid animated pulse infinite" src="img/testimonial-2.jpg" alt="">
                        <img class="img-fluid animated pulse infinite" src="img/testimonial-3.jpg" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Testimonial End -->


    <!-- Footer Start -->
    <div class="container-fluid bg-dark footer mt-5 pt-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-3 col-md-6">
                    <h1 class="text-white mb-4"><img class="img-fluid me-3" src="img/icon/icon-02-light.png" alt="">Insure</h1>
                    <p>Diam dolor diam ipsum sit. Aliqu diam amet diam et eos. Clita erat ipsum et lorem et sit, sed stet lorem sit clita</p>
                    <div class="d-flex pt-2">
                        <a class="btn btn-square me-1" href=""><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-square me-1" href=""><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-square me-1" href=""><i class="fab fa-youtube"></i></a>
                        <a class="btn btn-square me-0" href=""><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h5 class="text-light mb-4">Address</h5>
                    <p><i class="fa fa-map-marker-alt me-3"></i>123 Street, New York, USA</p>
                    <p><i class="fa fa-phone-alt me-3"></i>+012 345 67890</p>
                    <p><i class="fa fa-envelope me-3"></i>info@example.com</p>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h5 class="text-light mb-4">Quick Links</h5>
                    <a class="btn btn-link" href="">About Us</a>
                    <a class="btn btn-link" href="">Contact Us</a>
                    <a class="btn btn-link" href="">Our Services</a>
                    <a class="btn btn-link" href="">Terms & Condition</a>
                    <a class="btn btn-link" href="">Support</a>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h5 class="text-light mb-4">Newsletter</h5>
                    <p>Dolor amet sit justo amet elitr clita ipsum elitr est.</p>
                    <div class="position-relative mx-auto" style="max-width: 400px;">
                        <input class="form-control bg-transparent w-100 py-3 ps-4 pe-5" type="text" placeholder="Your email">
                        <button type="button" class="btn btn-secondary py-2 position-absolute top-0 end-0 mt-2 me-2">SignUp</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid copyright">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                        &copy; <a href="#">Your Site Name</a>, All Right Reserved.
                    </div>
                    <div class="col-md-6 text-center text-md-end">
                        <!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
                        Designed By <a href="https://htmlcodex.com">HTML Codex</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{asset('assets/front/lib/wow/wow.min.js')}}"></script>
    <script src="{{asset('assets/front/lib/easing/easing.min.js')}}"></script>
    <script src="{{asset('assets/front/lib/waypoints/waypoints.min.js')}}"></script>
    <script src="{{asset('assets/front/lib/owlcarousel/owl.carousel.min.js')}}"></script>
    <script src="{{asset('assets/front/lib/counterup/counterup.min.js')}}"></script>

    <!-- Template Javascript -->
    <script src="{{asset('assets/front/js/main.js')}}"></script> 

    <script>
          $(document).ready(function() {
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $("meta[name='csrf-token']").attr('content')
                }
            });

            $('#form-button').click(function(e) {
                e.preventDefault();

                var data = $('#appoinment').serialize();

                console.log(data);

                $.ajax({
                    type: 'POST',
                    url: "{{route('appoinment.post')}}",
                    data: data,
                    success: function(response) { 
                        $('#appoinment')[0].reset();
                        $('#sendmessage').show();
                    },
                    error: function(error) {
                        console.log(error);
                    }
                });
            });
        });
    </script>
</body>

</html> 
