<div>
    <!-- Services Section Start -->
    <section id="services" class="section">
        <div class="container">

            <div class="row">
                @foreach($about as $ab)
                <!-- Start Col -->
                <div class="col-lg-4 col-md-6 col-xs-12">
                    <div class="services-item text-center">
                        <div class="icon">
                            <i class="{{$ab->icon}}"></i>
                        </div>
                        <h4>{{$ab->title}}</h4>
                        <p>{{$ab->description}}</p>
                    </div>
                </div>
                <!-- End Col -->
                @endforeach
            </div>
        </div>
    </section>
    <!-- Services Section End -->
    <!-- Cool Fetatures Section Start -->
    <section id="features" class="section">
        <div class="container">
            <!-- Start Row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="features-text section-header text-center">
                        <div>
                            <h2 class="section-title">Services We Provide</h2>
                            <div class="desc-text">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do <br> eiusmod tempor incididunt ut labore et dolore.</p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <!-- End Row -->
            <!-- Start Row -->
            <div class="row featured-bg">
                @foreach($services as $service)
                <!-- Start Col -->
                <div class="col-lg-6 col-md-6 col-xs-12 p-0">
                    <!-- Start Fetatures -->
                    <div class="feature-item featured-border1">
                        <div class="feature-icon float-left">
                            <i class="{{$service->icon}}"></i>
                        </div>
                        <div class="feature-info">
                            <h4>{{$service->title}}</h4>
                            <p>{{$service->description}}</p>
                        </div>
                    </div>
                    <!-- End Fetatures -->
                </div>
                <!-- End Col -->
                @endforeach
            </div>
            <!-- End Row -->
        </div>
    </section>
    <!-- Cool Fetatures Section End -->


    <!-- Recent Showcase Section Start -->
    <section id="showcase">
        <div class="container-fluid right-position">
            <!-- Start Row -->
            <div class="row gradient-bg">
                <div class="col-lg-12">
                    <div class="showcase-text section-header text-center">
                        <div>
                            <h2 class="section-title">Recent Works</h2>
                            <div class="desc-text">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do</p>
                                <p>eiusmod tempor incididunt ut labore et dolore.</p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <!-- End Row -->
            <!-- Start Row -->
            <div class="row justify-content-center showcase-area">
                <div class="col-lg-12 col-md-12 col-xs-12 pr-0">
                    <div class="showcase-slider owl-carousel">
                        @foreach($showcase as $case)
                        <div class="item">
                            <div class="screenshot-thumb">
                                <img src="{{$case->image}}" class="img-fluid" alt="" />
                                <div class="hover-content text-center">
                                    <div class="fancy-table">
                                        <div class="table-cell">
                                            <div class="single-text">
                                                <p>{{$case->filter}}</p>
                                                <h5>{{$case->title}}</h5>
                                            </div>
                                            <div class="zoom-icon">
                                                <a class="lightbox" href="img/showcase/01.jpg"><i class="lni-zoom-in"></i></a>
                                                <a href="{{$case->alias}}"><i class="lni-link"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                            @endforeach
                    </div>
                </div>
            </div>
            <!-- End Row -->
        </div>
    </section>
    <!-- Recent Showcase Section End -->

    <!-- Our Pricing Plan Section Start -->
    <section id="pricing" class="section">
        <div class="container">
            <!-- Start Row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="pricing-text section-header text-center">
                        <div>
                            <h2 class="section-title">Pricing Plans</h2>
                            <div class="desc-text">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do</p>
                                <p>eiusmod tempor incididunt ut labore et dolore.</p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <!-- End Row -->
            <!-- Start Row -->
            <div class="row pricing-tables">
                <!--  Start Col -->
                @foreach($pricing as $price)
                <div class="col-lg-4 col-md-4 col-xs-12">
                    <div class="pricing-table text-center">
                        <div class="pricing-details">
                            <h3>{{$price->title}}</h3>
                            <h1><span>$</span>{{$price->price}}</h1>
                            <ul>
                                <li>{{$price->text}}</li>
                            </ul>
                        </div>
                        <div class="plan-button">
                            <a href="{{$price->alias}}" class="btn btn-border">Purchase</a>
                        </div>
                    </div>
                </div>
                @endforeach
                <!--  End Col -->
            </div>
            <!-- End Row -->
        </div>
    </section>
    <!-- Our Pricing Plan Section End -->
    <!-- Team section Start -->
    <section id="team" class="section">
        <div class="container">
            <!-- Start Row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="team-text section-header text-center">
                        <div>
                            <h2 class="section-title">Team Members</h2>
                            <div class="desc-text">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do</p>
                                <p>eiusmod tempor incididunt ut labore et dolore.</p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <!-- End Row -->
            <!-- Start Row -->
            <div class="row">
                <!-- Start Col -->
                @foreach($team as $t)
                <div class="col-lg-3 col-md-6 col-xs-12">
                    <div class="single-team">
                        <div class="team-thumb">
                            <img src="{{$t->image}}" class="img-fluid" alt="">
                        </div>

                        <div class="team-details">
                            <div class="team-social-icons">
                                <ul class="social-list">
                                    <li><a href="{{$t->facebook}}"><i class="lni-facebook-filled"></i></a></li>
                                    <li><a href="{{$t->twitter}}"><i class="lni-twitter-filled"></i></a></li>
                                    <li><a href="{{$t->email}}"><i class="lni-google-plus"></i></a></li>
                                </ul>
                            </div>
                            <div class="team-inner text-center">
                                <h5 class="team-title">{{$t->title}}</h5>
                                <p>{{$t->description}}</p>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
                <!-- Start Col -->
            </div>
            <!-- End Row -->
        </div>
    </section>
    <!-- Team section End -->


    <!-- Blog Section -->
    <section id="blog" class="section">
        <!-- Container Starts -->
        <div class="container">
            <!-- Start Row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="blog-text section-header text-center">
                        <div>
                            <h2 class="section-title">Latest Blog Posts</h2>
                            <div class="desc-text">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do</p>
                                <p>eiusmod tempor incididunt ut labore et dolore.</p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <!-- End Row -->
            <!-- Start Row -->
            <div class="row">
                @foreach($blog as $b)
                <!-- Start Col -->
                <div class="col-lg-4 col-md-6 col-xs-12 blog-item">
                    <!-- Blog Item Starts -->
                    <div class="blog-item-wrapper">
                        <div class="blog-item-img">
                            <a href="single-post.html">
                                <img src="{{$b->image}}" class="img-fluid" alt="">
                            </a>
                        </div>
                        <div class="blog-item-text">
                            <h3><a href="#">{{$b->title}}</a></h3>
                            <p>{{$b->description}}</p>
                        </div>
                    </div>
                    <!-- Blog Item Wrapper Ends-->
                </div>
                <!-- End Col -->
                    @endforeach
            </div>
            <!-- End Row -->
        </div>
    </section>
    <!-- blog Section End -->

    <!-- Contact Us Section -->
    <section id="contact" class="section">
        <!-- Container Starts -->
        <div class="container">
            <!-- Start Row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="contact-text section-header text-center">
                        <div>
                            <h2 class="section-title">Get In Touch</h2>
                            <div class="desc-text">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do</p>
                                <p>eiusmod tempor incididunt ut labore et dolore.</p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <!-- End Row -->
            <!-- Start Row -->
            <div class="row">
                <!-- Start Col -->
                <div class="col-lg-6 col-md-12">
                    <form id="contactForm">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" id="name" name="name" placeholder="Name" required data-error="Please enter your name">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" placeholder="Subject" id="msg_subject" class="form-control" name="msg_subject" required data-error="Please enter your subject">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" id="email" name="email" placeholder="Email" required data-error="Please enter your Email">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" placeholder="Budget" id="budget" class="form-control" name="budget" required data-error="Please enter your Budget">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <textarea class="form-control" id="message"  name="message" placeholder="Write Message" rows="4" data-error="Write your message" required></textarea>
                                    <div class="help-block with-errors"></div>
                                </div>
                                <div class="submit-button">
                                    <button class="btn btn-common" id="submit" type="submit">Submit</button>
                                    <div id="msgSubmit" class="h3 hidden"></div>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                <!-- End Col -->
                <!-- Start Col -->
                <div class="col-lg-1">

                </div>
                <!-- End Col -->
                <!-- Start Col -->
                <div class="col-lg-4 col-md-12">
                    <div class="contact-img">
                        <img src="img/contact/01.png" class="img-fluid" alt="">
                    </div>
                </div>
                <!-- End Col -->
                <!-- Start Col -->
                <div class="col-lg-1">
                </div>
                <!-- End Col -->

            </div>
            <!-- End Row -->
        </div>
    </section>
    <!-- Contact Us Section End -->
</div>
