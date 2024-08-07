@extends('public_view.layout.app')
@section('title')
    MediaTTC
@endsection
@section('content')

{{-- <div class="hero-slide owl-carousel site-blocks-cover">
    <div class="intro-section" style="background-image: url({{ asset('pv_assets/images/Banner.jpg') }}); background-size: cover; background-repeat: no-repeat;">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12 mx-auto text-center" data-aos="fade-up">
                    <h1>MediaTTC</h1>
                </div>
            </div>
        </div>
    </div>
</div> --}}

<div class="hero-slide owl-carousel site-blocks-cover">
    <div class="container col-lg-12 mx-auto text-center align-items-center" data-aos="fade-up">
        <div class="row align-items-center">
            {{-- style="margin-top: 40px;" --}}
            <img class="mt-4 mb-4" width="100%" src="{{ asset('pv_assets/images/Banner.jpg') }}" alt="banner image">
        </div>
    </div>

</div>



<div class="site-section">
    <div class="container">
        <div class="row mb-5 justify-content-center text-center">
            <div class="col-lg-6 mb-5">
                <h2 class="section-title-underline mb-3">
                    <span>Popular Courses</span>
                </h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officia, id?</p>
            </div>
        </div>

        <div class="row">
            <div class="col-12">

                <div class="owl-slide-3 owl-carousel">

                    @foreach ($courses_latest as $course_latest)
                        <div class="course-1-item">
                            <figure class="thumnail">
                                <a href="{{ route('single_course', ['course_id' => $course_latest->course_id]) }}"><img style="height: 200px;" src="{{ asset('storage/uploads/courses/'.$course_latest->content) }}" alt="Image" class="img-fluid" /></a>
                                <div class="price">{{ $course_latest->price }}</div>
                                {{-- <div class="category"><h3>Diploma in Electric & Electronic Technology</h3></div> --}}
                            </figure>
                            <div class="course-1-content pb-4">
                                <h2>{{ $course_latest->title }}</h2>
                                <div class="rating text-center mb-3">
                                    <span class="icon-star2 text-warning"></span>
                                    <span class="icon-star2 text-warning"></span>
                                    <span class="icon-star2 text-warning"></span>
                                    <span class="icon-star2 text-warning"></span>
                                    <span class="icon-star2 text-warning"></span>
                                </div>
                                <p class="desc mb-4">{{ $course_latest->tagline }}</p>
                                <p><a href="{{ route('single_course', ['course_id' => $course_latest->course_id]) }}" class="btn btn-primary rounded-0 px-4">See More</a></p>
                            </div>
                        </div>
                    @endforeach
                    
                </div>
                <div class="col-8 text-center col-md-8 mx-auto">
                    <a href="{{ route('all_courses') }}" class="btn btn-primary rounded-0 px-4">All Courses</a>
                </div>
            </div>
        </div>
        
    </div>
</div>

<div class="site-section">
    <div class="container">
        <div class="row mb-5 justify-content-center text-center">
            <div class="col-lg-6 mb-5">
                <h2 class="section-title-underline mb-3">
                    <span>Gallery</span>
                </h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officia, id?</p>
            </div>
        </div>

        <div class="row">
            <div class="col-12">

                <div class="owl-slide-3 owl-carousel">

                    @foreach ($galleries as $gallery)
                        <div class="course-1-item">
                            <figure class="thumnail">
                                    <img height="200px" style="height: 200px !important;" src="{{ asset('storage/uploads/gallery/'.$gallery->document) }}" alt="Image" class="img-fluid" />
                            </figure>
                        </div>
                    @endforeach
                        

                        {{-- <div class="course-1-item">
                            <figure class="thumnail">
                                    <img height="200px" style="height: 200px !important;" src="{{ asset('storage/uploads/site_elements/02.jpg') }}" alt="Image" class="img-fluid" />
                            </figure>
                        </div>
                        <div class="course-1-item">
                            <figure class="thumnail">
                                    <img height="200px" style="height: 200px !important;" src="{{ asset('storage/uploads/site_elements/03.jpg') }}" alt="Image" class="img-fluid" />
                            </figure>
                        </div>
                        <div class="course-1-item">
                            <figure class="thumnail">
                                    <img height="200px" style="height: 200px !important;" src="{{ asset('storage/uploads/site_elements/04.jpg') }}" alt="Image" class="img-fluid" />
                            </figure>
                        </div>
                        <div class="course-1-item">
                            <figure class="thumnail">
                                    <img height="200px" style="height: 200px !important;" src="{{ asset('storage/uploads/site_elements/05.jpg') }}" alt="Image" class="img-fluid" />
                            </figure>
                        </div>
                        <div class="course-1-item">
                            <figure class="thumnail">
                                    <img height="200px" style="height: 200px !important;" src="{{ asset('storage/uploads/site_elements/06.jpg') }}" alt="Image" class="img-fluid" />
                            </figure>
                        </div>
                        <div class="course-1-item">
                            <figure class="thumnail">
                                    <img height="200px" style="height: 200px !important;" src="{{ asset('storage/uploads/site_elements/07.jpg') }}" alt="Image" class="img-fluid" />
                            </figure>
                        </div>
                        <div class="course-1-item">
                            <figure class="thumnail">
                                    <img height="200px" style="height: 200px !important;" src="{{ asset('storage/uploads/site_elements/08.jpg') }}" alt="Image" class="img-fluid" />
                            </figure>
                        </div>
                        <div class="course-1-item">
                            <figure class="thumnail">
                                    <img height="200px" style="height: 200px !important;" src="{{ asset('storage/uploads/site_elements/09.jpg') }}" alt="Image" class="img-fluid" />
                            </figure>
                        </div>
                        <div class="course-1-item">
                            <figure class="thumnail">
                                    <img height="170px" style="height: 170px !important;" src="{{ asset('storage/uploads/site_elements/10.jpg') }}" alt="Image" class="img-fluid" />
                            </figure>
                        </div> --}}
                    
                </div>
                <div class="mx-auto text-center">
                    <a href="{{ route('all_galleries_document') }}" class="btn btn-primary">See Gallery</a>
                </div>
            </div>
        </div>
        
    </div>
</div>

<div class="section-bg style-1" style="background-image: url('images/about_1.jpg');">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 text-center">
                <img height="200px" src="{{ asset('pv_assets/images/Director.jpg') }}" alt="Director">
                <h2 class="section-title-underline style-2">
                    <span>Rebeka Chowdhury</span>
                </h2>
                <h4 class="text-white style-2">
                    <span>Director, MTTI</span>
                </h4>
            </div>
            <div class="col-lg-8">
                <p class="lead">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Rem nesciunt quaerat ad reiciendis perferendis voluptate fugiat sunt fuga error totam.</p>
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatibus assumenda omnis tempora ullam alias amet eveniet voluptas, incidunt quasi aut officiis porro ad, expedita saepe necessitatibus rem debitis architecto
                    dolore? Nam omnis sapiente placeat blanditiis voluptas dignissimos, itaque fugit a laudantium adipisci dolorem enim ipsum cum molestias? Quod quae molestias modi fugiat quisquam. Eligendi recusandae officiis debitis quas
                    beatae aliquam?
                </p>
                <p><a href="#">Read more</a></p>
            </div>
        </div>
    </div>
</div>

<!-- // 05 - Block -->

{{-- <div class="site-section">
    <div class="container">
        <div class="row mb-5">
            <div class="col-lg-4">
                <h2 class="section-title-underline">
                    <span>Testimonials</span>
                </h2>
            </div>
        </div>

        <div class="owl-slide owl-carousel">
            <div class="ftco-testimonial-1">
                <div class="ftco-testimonial-vcard d-flex align-items-center mb-4">
                    <img src="images/person_1.jpg" alt="Image" class="img-fluid mr-3" />
                    <div>
                        <h3>Allison Holmes</h3>
                        <span>Designer</span>
                    </div>
                </div>
                <div>
                    <p>
                        &ldquo;Lorem ipsum dolor sit, amet consectetur adipisicing elit. Neque, mollitia. Possimus mollitia nobis libero quidem aut tempore dolore iure maiores, perferendis, provident numquam illum nisi amet necessitatibus.
                        A, provident aperiam!&rdquo;
                    </p>
                </div>
            </div>

            <div class="ftco-testimonial-1">
                <div class="ftco-testimonial-vcard d-flex align-items-center mb-4">
                    <img src="images/person_2.jpg" alt="Image" class="img-fluid mr-3" />
                    <div>
                        <h3>Allison Holmes</h3>
                        <span>Designer</span>
                    </div>
                </div>
                <div>
                    <p>
                        Lorem ipsum dolor sit, amet consectetur adipisicing elit. Neque, mollitia. Possimus mollitia nobis libero quidem aut tempore dolore iure maiores, perferendis, provident numquam illum nisi amet necessitatibus. A,
                        provident aperiam!
                    </p>
                </div>
            </div>

            <div class="ftco-testimonial-1">
                <div class="ftco-testimonial-vcard d-flex align-items-center mb-4">
                    <img src="images/person_4.jpg" alt="Image" class="img-fluid mr-3" />
                    <div>
                        <h3>Allison Holmes</h3>
                        <span>Designer</span>
                    </div>
                </div>
                <div>
                    <p>
                        &ldquo;Lorem ipsum dolor sit, amet consectetur adipisicing elit. Neque, mollitia. Possimus mollitia nobis libero quidem aut tempore dolore iure maiores, perferendis, provident numquam illum nisi amet necessitatibus.
                        A, provident aperiam!&rdquo;
                    </p>
                </div>
            </div>

            <div class="ftco-testimonial-1">
                <div class="ftco-testimonial-vcard d-flex align-items-center mb-4">
                    <img src="images/person_3.jpg" alt="Image" class="img-fluid mr-3" />
                    <div>
                        <h3>Allison Holmes</h3>
                        <span>Designer</span>
                    </div>
                </div>
                <div>
                    <p>
                        Lorem ipsum dolor sit, amet consectetur adipisicing elit. Neque, mollitia. Possimus mollitia nobis libero quidem aut tempore dolore iure maiores, perferendis, provident numquam illum nisi amet necessitatibus. A,
                        provident aperiam!
                    </p>
                </div>
            </div>

            <div class="ftco-testimonial-1">
                <div class="ftco-testimonial-vcard d-flex align-items-center mb-4">
                    <img src="images/person_2.jpg" alt="Image" class="img-fluid mr-3" />
                    <div>
                        <h3>Allison Holmes</h3>
                        <span>Designer</span>
                    </div>
                </div>
                <div>
                    <p>
                        &ldquo;Lorem ipsum dolor sit, amet consectetur adipisicing elit. Neque, mollitia. Possimus mollitia nobis libero quidem aut tempore dolore iure maiores, perferendis, provident numquam illum nisi amet necessitatibus.
                        A, provident aperiam!&rdquo;
                    </p>
                </div>
            </div>

            <div class="ftco-testimonial-1">
                <div class="ftco-testimonial-vcard d-flex align-items-center mb-4">
                    <img src="images/person_4.jpg" alt="Image" class="img-fluid mr-3" />
                    <div>
                        <h3>Allison Holmes</h3>
                        <span>Designer</span>
                    </div>
                </div>
                <div>
                    <p>
                        Lorem ipsum dolor sit, amet consectetur adipisicing elit. Neque, mollitia. Possimus mollitia nobis libero quidem aut tempore dolore iure maiores, perferendis, provident numquam illum nisi amet necessitatibus. A,
                        provident aperiam!
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="section-bg style-1" style="background-image: url('images/hero_1.jpg');">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-6 mb-5 mb-lg-0">
                <span class="icon flaticon-mortarboard"></span>
                <h3>Our Philosphy</h3>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Reiciendis recusandae, iure repellat quis delectus ea? Dolore, amet reprehenderit.</p>
            </div>
            <div class="col-lg-4 col-md-6 mb-5 mb-lg-0">
                <span class="icon flaticon-school-material"></span>
                <h3>Academics Principle</h3>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Reiciendis recusandae, iure repellat quis delectus ea? Dolore, amet reprehenderit.</p>
            </div>
            <div class="col-lg-4 col-md-6 mb-5 mb-lg-0">
                <span class="icon flaticon-library"></span>
                <h3>Key of Success</h3>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Reiciendis recusandae, iure repellat quis delectus ea? Dolore, amet reprehenderit.</p>
            </div>
        </div>
    </div>
</div> --}}

{{-- 
<div class="news-updates">
    <div class="container">
        <div class="row">
            <div class="col-lg-9">
                <div class="section-heading">
                    <h2 class="text-black">News &amp; Updates</h2>
                    <a href="#">Read All News</a>
                </div>
                <div class="row">
                    <div class="col-lg-6">
                        <div class="post-entry-big">
                            <a href="news-single.php" class="img-link"><img src="images/blog_large_1.jpg" alt="Image" class="img-fluid" /></a>
                            <div class="post-content">
                                <div class="post-meta">
                                    <a href="#">June 6, 2019</a>
                                    <span class="mx-1">/</span>
                                    <a href="#">Admission</a>, <a href="#">Updates</a>
                                </div>
                                <h3 class="post-heading"><a href="news-single.php">Campus Camping and Learning Session</a></h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="post-entry-big horizontal d-flex mb-4">
                            <a href="news-single.php" class="img-link mr-4"><img src="images/blog_1.jpg" alt="Image" class="img-fluid" /></a>
                            <div class="post-content">
                                <div class="post-meta">
                                    <a href="#">June 6, 2019</a>
                                    <span class="mx-1">/</span>
                                    <a href="#">Admission</a>, <a href="#">Updates</a>
                                </div>
                                <h3 class="post-heading"><a href="news-single.php">Campus Camping and Learning Session</a></h3>
                            </div>
                        </div>

                        <div class="post-entry-big horizontal d-flex mb-4">
                            <a href="news-single.php" class="img-link mr-4"><img src="images/blog_2.jpg" alt="Image" class="img-fluid" /></a>
                            <div class="post-content">
                                <div class="post-meta">
                                    <a href="#">June 6, 2019</a>
                                    <span class="mx-1">/</span>
                                    <a href="#">Admission</a>, <a href="#">Updates</a>
                                </div>
                                <h3 class="post-heading"><a href="news-single.php">Campus Camping and Learning Session</a></h3>
                            </div>
                        </div>

                        <div class="post-entry-big horizontal d-flex mb-4">
                            <a href="news-single.php" class="img-link mr-4"><img src="images/blog_1.jpg" alt="Image" class="img-fluid" /></a>
                            <div class="post-content">
                                <div class="post-meta">
                                    <a href="#">June 6, 2019</a>
                                    <span class="mx-1">/</span>
                                    <a href="#">Admission</a>, <a href="#">Updates</a>
                                </div>
                                <h3 class="post-heading"><a href="news-single.php">Campus Camping and Learning Session</a></h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="section-heading">
                    <h2 class="text-black">Campus Videos</h2>
                    <a href="#">View All Videos</a>
                </div>
                <a href="https://vimeo.com/45830194" class="video-1 mb-4" data-fancybox="" data-ratio="2">
                    <span class="play">
                        <span class="icon-play"></span>
                    </span>
                    <img src="images/course_5.jpg" alt="Image" class="img-fluid" />
                </a>
                <a href="https://vimeo.com/45830194" class="video-1 mb-4" data-fancybox="" data-ratio="2">
                    <span class="play">
                        <span class="icon-play"></span>
                    </span>
                    <img src="images/course_5.jpg" alt="Image" class="img-fluid" />
                </a>
            </div>
        </div>
    </div>
</div>

<div class="site-section ftco-subscribe-1" style="background-image: url('images/bg_1.jpg');">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-7">
                <h2>Subscribe to us!</h2>
                <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia,</p>
            </div>
            <div class="col-lg-5">
                <form action="" class="d-flex">
                    <input type="text" class="rounded form-control mr-2 py-3" placeholder="Enter your email" />
                    <button class="btn btn-primary rounded py-3 px-4" type="submit">Send</button>
                </form>
            </div>
        </div>
    </div>
</div> --}}

@endsection


