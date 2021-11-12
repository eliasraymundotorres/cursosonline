@extends('layouts.header')

@section('section')
       <!-- Start Hero Area -->
       <section class="hero-area overlay">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 offset-lg-1 col-md-12 col-12">
                    <div class="hero-text text-center">
                        <!-- Start Hero Text -->
                        <div class="section-heading">
                            <h2 class="wow fadeInUp" data-wow-delay=".3s">Bienvenidos ClassiGrids</h2>
                            <p class="wow fadeInUp" data-wow-delay=".5s">Ofrecemos cursos online en muchas categorias<br>Diseño,
                                o programación.</p>
                        </div>
                        <!-- End Search Form -->
                        <!-- Start Search Form -->
                        <div class="search-form wow fadeInUp" data-wow-delay=".7s">
                            <div class="row">
                                <div class="col-lg-4 col-md-4 col-12 p-0">
                                    <div class="search-input">
                                        <label for="keyword"><i class="lni lni-search-alt theme-color"></i></label>
                                        <input type="text" name="keyword" id="keyword" placeholder="Buscar Cursos">
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-3 col-12 p-0">
                                    <div class="search-input">
                                        <label for="category"><i class="lni lni-grid-alt theme-color"></i></label>
                                        <select name="category" id="category">
                                            <option value="none" selected disabled>Categorias</option>
                                            <option value="none">Vehicle</option>
                                            <option value="none">Electronics</option>
                                            <option value="none">Mobiles</option>
                                            <option value="none">Furniture</option>
                                            <option value="none">Fashion</option>
                                            <option value="none">Jobs</option>
                                            <option value="none">Real Estate</option>
                                            <option value="none">Animals</option>
                                            <option value="none">Education</option>
                                            <option value="none">Matrimony</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-3 col-12 p-0">
                                    <div class="search-input">
                                        <label for="location"><i class="lni lni-map-marker theme-color"></i></label>
                                        <select name="location" id="location">
                                            <option value="none" selected disabled>Lugar</option>
                                            <option value="none">Huánuco</option>
                                            <option value="none">Lima</option>
                                            <option value="none">Huancayo</option>
                                            <option value="none">Pucallpa</option>
                                            <option value="none">Pasco</option>
                                            <option value="none">Arequipa</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-2 col-md-2 col-12 p-0">
                                    <div class="search-btn button">
                                        <button class="btn"><i class="lni lni-search-alt"></i> Buscar</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Search Form -->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Hero Area -->

    <!-- Start Categories Area -->
    <section class="categories">
        <div class="container">
            <div class="cat-inner">
                <div class="row">
                    <div class="col-12 p-0">
                        <div class="category-slider">
                            <!-- Start Single Category -->
                            <a href="category.html" class="single-cat">
                                <div class="icon">
                                    <img src="{{asset('assets/images/categories/education.svg') }}" alt="#">
                                </div>
                                <h3>Programación</h3>
                                <h5 class="total">35</h5>
                            </a>
                            <!-- End Single Category -->
                            <!-- Start Single Category -->
                            <a href="category.html" class="single-cat">
                                <div class="icon">
                                    <img src="{{asset('assets/images/categories/laptop.svg') }}" alt="#">
                                </div>
                                <h3>Diseño</h3>
                                <h5 class="total">22</h5>
                            </a>
                            <!-- End Single Category -->
                            <!-- Start Single Category -->
                            <a href="category.html" class="single-cat">
                                <div class="icon">
                                    <img src="{{asset('assets/images/categories/education.svg') }}" alt="#">
                                </div>
                                <h3>PHP Lavarel</h3>
                                <h5 class="total">55</h5>
                            </a>
                            <!-- End Single Category -->
                            <!-- Start Single Category -->
                            <a href="category.html" class="single-cat">
                                <div class="icon">
                                    <img src="{{asset('assets/images/categories/laptop.svg') }}" alt="#">
                                </div>
                                <h3>JavaScript</h3>
                                <h5 class="total">21</h5>
                            </a>
                            <!-- End Single Category -->
                            <!-- Start Single Category -->
                            <a href="category.html" class="single-cat">
                                <div class="icon">
                                    <img src="{{asset('assets/images/categories/laptop.svg') }}" alt="#">
                                </div>
                                <h3>Python</h3>
                                <h5 class="total">44</h5>
                            </a>
                            <!-- End Single Category -->
                            <!-- Start Single Category -->
                            <a href="category.html" class="single-cat">
                                <div class="icon">
                                    <img src="{{asset('assets/images/categories/education.svg') }}" alt="#">
                                </div>
                                <h3>Excel básico</h3>
                                <h5 class="total">65</h5>
                            </a>
                            <!-- End Single Category -->
                            <!-- Start Single Category -->
                            <a href="category.html" class="single-cat">
                                <div class="icon">
                                    <img src="{{asset('assets/images/categories/laptop.svg') }}" alt="#">
                                </div>
                                <h3>Excel Intermedio</h3>
                                <h5 class="total">35</h5>
                            </a>
                            <!-- End Single Category -->
                            <!-- Start Single Category -->
                            <a href="category.html" class="single-cat">
                                <div class="icon">
                                    <img src="{{asset('assets/images/categories/laptop.svg') }}" alt="#">
                                </div>
                                <h3>Excel Avanzado</h3>
                                <h5 class="total">22</h5>
                            </a>
                            <!-- End Single Category -->
                            <!-- Start Single Category -->
                            <a href="category.html" class="single-cat">
                                <div class="icon">
                                    <img src="{{asset('assets/images/categories/education.svg') }}" alt="#">
                                </div>
                                <h3>Android</h3>
                                <h5 class="total">25</h5>
                            </a>
                            <!-- End Single Category -->
                            <!-- Start Single Category -->
                            <a href="category.html" class="single-cat">
                                <div class="icon">
                                    <img src="{{asset('assets/images/categories/education.svg') }}" alt="#">
                                </div>
                                <h3>VueJS</h3>
                                <h5 class="total">42</h5>
                            </a>
                            <!-- End Single Category -->
                            <!-- Start Single Category -->
                            <a href="category.html" class="single-cat">
                                <div class="icon">
                                    <img src="{{asset('assets/images/categories/laptop.svg') }}" alt="#">
                                </div>
                                <h3>Angular</h3>
                                <h5 class="total">32</h5>
                            </a>
                            <!-- End Single Category -->
                            <!-- Start Single Category -->
                            <a href="category.html" class="single-cat">
                                <div class="icon">
                                    <img src="{{asset('assets/images/categories/education.svg') }}" alt="#">
                                </div>
                                <h3>React</h3>
                                <h5 class="total">15</h5>
                            </a>
                            <!-- End Single Category -->
                            <!-- Start Single Category -->
                            <a href="category.html" class="single-cat">
                                <div class="icon">
                                    <img src="{{asset('assets/images/categories/education.svg') }}" alt="#">
                                </div>
                                <h3>PHP</h3>
                                <h5 class="total">65</h5>
                            </a>
                            <!-- End Single Category -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /End Categories Area -->

    <!-- Start Items Grid Area -->
    <section class="items-grid section custom-padding">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-title">
                        <h2 class="wow fadeInUp" data-wow-delay=".4s">Lista de cursos</h2>
                        <p class="wow fadeInUp" data-wow-delay=".6s">Ofrecemos los siguientes cursos 
                            Los mejores temas para aprender con nuestros cursos.</p>
                    </div>
                </div>
            </div>
            <div class="single-head">
                <div class="row">
                  @foreach ($datos as $dato)
                      
                  
                    <div class="col-lg-4 col-md-6 col-12">
                        <!-- Start Single Grid -->
                        <div class="single-grid wow fadeInUp" data-wow-delay=".2s">
                            <div class="image">
                                <a href="item-details.html" class="thumbnail"><img src="{{asset($dato->video)}}" alt=""#"></a>
                                <div class="author">
                                    <div class="author-image">
                                        <a href="javascript:void(0)"><img src="{{asset('assets/images/items-grid/author-1.jpg')}}" alt=""#">
                                            <span>Admin</span></a>
                                    </div>
                                    <p class="sale">Adquirir</p>
                                </div>
                            </div>
                            <div class="content">
                                <div class="top-content">
                                    <a href="javascript:void(0)" class="tag">{{$dato->titulo}}</a>
                                    <h3 class="title">
                                        <a href="item-details.html">{{$dato->subtitulo}}</a>
                                    </h3>
                                    <p class="update-time">Tiempo: 1 hora</p>
                                    <ul class="rating">
                                        <li><i class="lni lni-star-filled"></i></li>
                                        <li><i class="lni lni-star-filled"></i></li>
                                        <li><i class="lni lni-star-filled"></i></li>
                                        <li><i class="lni lni-star-filled"></i></li>
                                        <li><i class="lni lni-star-filled"></i></li>
                                        <li><a href="javascript:void(0)">(35)</a></li>
                                    </ul>
                                    <ul class="info-list">
                                        <li><a href="javascript:void(0)"><i class="lni lni-map-marker"></i> Huanuco</a></li>
                                        <li><a href="javascript:void(0)"><i class="lni lni-timer"></i> {{$dato->fechaAct}}</a></li>
                                    </ul>
                                </div>
                                <div class="bottom-content">
                                    <p class="price">Costo S/: <span>{{$dato->precio}}</span></p>
                                    <a href="javascript:void(0)" class="like"><i class="lni lni-heart"></i></a>
                                </div>
                            </div>
                        </div>
                        <!-- End Single Grid -->
                    </div>
                    @endforeach
                    

                </div>
            </div>
        </div>
    </section>
    <!-- /End Items Grid Area -->

    
@endsection

@section('script')
  <!-- ========================= JS here ========================= -->
  <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
  <script src="{{ asset('assets/js/wow.min.js') }}"></script>
  <script src="{{ asset('assets/js/tiny-slider.js') }}"></script>
  <script src="{{ asset('assets/js/glightbox.min.js') }}"></script>
  <script src="{{ asset('assets/js/main.js') }}"></script>
  <script type="text/javascript">
      //========= Category Slider 
      tns({
          container: '.category-slider',
          items: 3,
          slideBy: 'page',
          autoplay: false,
          mouseDrag: true,
          gutter: 0,
          nav: false,
          controls: true,
          controlsText: ['<i class="lni lni-chevron-left"></i>', '<i class="lni lni-chevron-right"></i>'],
          responsive: {
              0: {
                  items: 1,
              },
              540: {
                  items: 2,
              },
              768: {
                  items: 4,
              },
              992: {
                  items: 5,
              },
              1170: {
                  items: 6,
              }
          }
      });
  </script>


@endsection