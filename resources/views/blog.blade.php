@extends('components.layouts.master')
@section('content')
<div class="col-md-8">
    <div class="entity_wrapper">
        <div class="entity_title">
            <h1><a href="#">Chevrolet car-saving technology delivers 'superhuman' sight when you need it most</a></h1>
        </div>
        <!-- entity_title -->

        <div class="entity_meta"><a href="#" target="_self">10Aug- 2015</a>, by: <a href="#" target="_self">Eric
                joan</a>
        </div>
        <!-- entity_meta -->

        <div class="entity_rating">
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star-half-full"></i>
        </div>
        <!-- entity_rating -->

        <div class="entity_social">
            <a href="#" class="icons-sm sh-ic">
                <i class="fa fa-share-alt"></i>
                <b>424</b> <span class="share_ic">Shares</span>
            </a>
            <a href="#" class="icons-sm fb-ic"><i class="fa fa-facebook"></i></a>
            <!--Twitter-->
            <a href="#" class="icons-sm tw-ic"><i class="fa fa-twitter"></i></a>
            <!--Google +-->
            <a href="#" class="icons-sm inst-ic"><i class="fa fa-google-plus"> </i></a>
            <!--Linkedin-->
            <a href="#" class="icons-sm tmb-ic"><i class="fa fa-ge"> </i></a>
            <!--Pinterest-->
            <a href="#" class="icons-sm rss-ic"><i class="fa fa-rss"> </i></a>
        </div>
        <!-- entity_social -->

        <div class="entity_thumb">
            <img class="img-responsive" src="assets/img/category_img_top.jpg" alt="feature-top">
        </div>
        <!-- entity_thumb -->

        <div class="entity_content">
            <p>
                But I must explain to you how all this mistaken idea of denouncing pleasure and praising
                pain was born and I will give you a complete account of the system, and expound the
                actual teachings of the great explorer of the truth, the master-builder of human
                happiness. No one rejects, dislikes, or avoids pleasure itself, because it is pleasure,
                but because those who do not know how to pursue pleasure rationally encounter
                consequences that are extremely painful.
            </p>

            <p>
                Nor again is there anyone who loves or pursues or desires to obtain pain of itself,
                because it is pain, but because occasionally circumstances occur in which toil and pain
                can procure him some great pleasure. To take a trivial example, which of us ever
                undertakes laborious physical exercise, except to obtain some advantage from it?
            </p>

            <blockquote class="pull-left">But I must explain to you how all this mistaken idea of denouncing pleasure
            </blockquote>
            <p> But who has any right to find fault with a man who chooses to enjoy a pleasure that has
                no annoying consequences, or one who avoids a pain that produces no resultant pleasure?
                On the other hand, we denounce with righteous indignation and dislike men who are so
                beguiled and demoralized by the charms of pleasure of the moment, so blinded by desire,
                that they cannot foresee.Nor again is there anyone who loves or pursues or desires to
                obtain pain of itself, because it is pain, but because occasionally circumstances occur
                in which toil and pain can procure him some great pleasure. To take a trivial example,
                which of us ever undertakes laborious physical exercise, except to obtain some advantage
                from it? Nor again is there anyone who loves or pursues or desires to obtain pain of
                itself, because it is pain, but because occasionally circumstances occur in which toil
                and pain can procure him some great pleasure. To take a trivial example, which of us
                ever
            </p>

            <p>
                But I must explain to you how all this mistaken idea of denouncing pleasure and praising
                pain was born and I will give you a complete account of the system, and expound the
                actual teachings of the great explorer of the truth, the master-builder of human
                happiness. No one rejects, dislikes, or avoids pleasure itself, because it is pleasure,
                but because those who do not know how to pursue pleasure rationally encounter
                consequences that are extremely painful.
            </p>
        </div>
        <!-- entity_content -->

        <div class="entity_footer">
            <div class="entity_tag">
                <span class="blank"><a href="#">Tech</a></span>
                <span class="blank"><a href="#">Transport</a></span>
                <span class="blank"><a href="#">Mobile</a></span>
                <span class="blank"><a href="#">Gadgets</a></span>
            </div>
            <!-- entity_tag -->

            <div class="entity_social">
                <span><i class="fa fa-share-alt"></i>424 <a href="#">Shares</a> </span>
                <span><i class="fa fa-comments-o"></i>4 <a href="#">Comments</a> </span>
            </div>
            <!-- entity_social -->

        </div>
        <!-- entity_footer -->

    </div>
    <!-- entity_wrapper -->

    <x-partials.body.related-news />
    <!-- Related news -->

    {{-- <div class="widget_advertisement">
        <img class="img-responsive" src="assets/img/category_advertisement.jpg" alt="feature-top">
    </div> --}}
    <!--Advertisement-->

    <x-partials.body.comment />
    <!--Readers Comment-->

    {{-- <div class="widget_advertisement">
        <img class="img-responsive" src="assets/img/category_advertisement.jpg" alt="feature-top">
    </div> --}}
    <!--Advertisement-->

    <x-partials.body.comment-form />
    <!--Entity Comments -->

</div>
@endsection