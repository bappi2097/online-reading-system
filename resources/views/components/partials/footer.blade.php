<section id="footer_section" class="footer_section">
    <div class="container">
        <hr class="footer-top">
        <div class="row">
            <div class="col-md-3">
                <div class="footer_widget_title">
                    <h3><a href="category.html" target="_self">About Tech</a></h3>
                </div>
                <div class="logo footer-logo">
                    <a title="fontanero" href="index.html">
                        <img src="{{$meta->logo}}" alt="technews">
                    </a>

                    <p>
                        {{$meta->description}}
                    </p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="footer_widget_title">
                    <h3><a href="category.html" target="_self">Discover</a></h3>
                </div>
                <div class="row">
                    <div class="col-xs-4">
                        <ul class="list-unstyled left">
                            <li><a href="#">Mobile</a></li>
                            <li><a href="#">Tablet</a></li>
                            <li><a href="#">Gadgets</a></li>
                            <li><a href="#">Design</a></li>
                            <li><a href="#">Camera</a></li>
                            <li><a href="#">Apps</a></li>
                            <li><a href="#">Login</a></li>
                            <li><a href="#">About Us</a></li>
                            <li><a href="#">Membership</a></li>
                            <li><a href="#">Blog</a></li>
                            <li><a href="#">Job</a></li>
                            <li><a href="#">SiteMap</a></li>
                        </ul>
                    </div>
                    <div class="col-xs-8">
                        <ul class="list-unstyled">
                            <li><a href="#">Contact Us</a></li>
                            <li><a href="#">Newsletter Alerts</a></li>
                            <li><a href="#">Podcast</a></li>
                            <li><a href="#">Sms Subscription</a></li>
                            <li><a href="#">Advertisement Policy</a></li>
                            <li><a href="#">Report Technical issue</a></li>
                            <li><a href="#">Complaints and Corrections</a></li>
                            <li><a href="#">Terms and Conditions</a></li>
                            <li><a href="#">Privacy Policy</a></li>
                            <li><a href="#">Cookie Policy</a></li>
                            <li><a href="#">Securedrop</a></li>
                            <li><a href="#">Archives</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="footer_widget_title">
                    <h3><a href="#" target="_self">Editor Picks</a></h3>
                </div>
                <div class="media">
                    <div class="media-left">
                        <a href="#"><img class="media-object" src="assets/img/editor_pic1.jpg"
                                alt="Generic placeholder image"></a>
                    </div>
                    <div class="media-body">
                        <h3 class="media-heading">
                            <a href="single.html">Apple launches photo-centric wrist watch for
                                Android</a>
                        </h3>
                        <span class="rating">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star-half-full"></i>
                        </span>
                    </div>
                </div>
                <div class="media">
                    <div class="media-left">
                        <a href="#"><img class="media-object" src="assets/img/editor_pic2.jpg"
                                alt="Generic placeholder image"></a>
                    </div>
                    <div class="media-body">
                        <h3 class="media-heading">
                            <a href="single.html">Apple launches photo-centric wrist watch for
                                Android</a>
                        </h3>
                        <span class="rating">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star-half-full"></i>
                        </span>
                    </div>
                </div>
                <div class="media">
                    <div class="media-left">
                        <a href="#"><img class="media-object" src="assets/img/editor_pic3.jpg"
                                alt="Generic placeholder image"></a>
                    </div>
                    <div class="media-body">
                        <h3 class="media-heading">
                            <a href="single.html">Apple launches photo-centric wrist watch for
                                Android</a>
                        </h3>
                        <span class="rating">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star-half-full"></i>
                        </span>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="footer_widget_title">
                    <h3><a href="category.html" target="_self">Tech Photos</a></h3>
                </div>
                <div class="widget_photos">
                    <img class="img-thumbnail" src="assets/img/tech_photo1.jpg" alt="Tech Photos">
                    <img class="img-thumbnail" src="assets/img/tech_photo2.jpg" alt="Tech Photos">
                    <img class="img-thumbnail" src="assets/img/tech_photo3.jpg" alt="Tech Photos">
                    <img class="img-thumbnail" src="assets/img/tech_photo4.jpg" alt="Tech Photos">
                    <img class="img-thumbnail" src="assets/img/tech_photo5.jpg" alt="Tech Photos">
                    <img class="img-thumbnail" src="assets/img/tech_photo6.jpg" alt="Tech Photos">
                    <img class="img-thumbnail" src="assets/img/tech_photo7.jpg" alt="Tech Photos">
                    <img class="img-thumbnail" src="assets/img/tech_photo8.jpg" alt="Tech Photos">
                    <img class="img-thumbnail" src="assets/img/tech_photo9.jpg" alt="Tech Photos">
                    <img class="img-thumbnail" src="assets/img/tech_photo10.jpg" alt="Tech Photos">
                    <img class="img-thumbnail" src="assets/img/tech_photo11.jpg" alt="Tech Photos">
                    <img class="img-thumbnail" src="assets/img/tech_photo12.jpg" alt="Tech Photos">
                </div>

            </div>
        </div>
    </div>

    <div class="footer_bottom_Section">
        <div class="container">
            <div class="row">
                <div class="footer">
                    <div class="col-sm-3">
                        <div class="social">
                            @foreach ($socialMedias as $socialMedia)
                            <a href="//{{$socialMedia->link}}" class="icons-sm fb-ic">{!!$socialMedia->icon!!}</a>
                            @endforeach
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <p>
                            {!!$meta->copyright!!}
                        </p>
                    </div>
                    <div class="col-sm-3">
                        <p>{{$meta->title}}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>