@if (isset($pages) && is_object($pages))
@foreach($pages as $k=>$page)
    @if($k%2 == 0)
        <section id="{{ $page->alias }}" class="top_cont_outer"><!--Hero_Section-->
            <div class="hero_wrapper">
                <div class="container">
                    <div class="hero_section">
                        <div class="row">
                            <div class="col-lg-5 col-sm-7">
                                <div class="top_left_cont zoomIn wow animated">
                                    {!! $page->text !!}
                                    <a href="{{ route('page',array('alias'=>$page->alias)) }}" class="read_more2">Читать дальше</a> </div>
                            </div>
                            <div class="col-lg-7 col-sm-5">
                                {!! Html::image('assets/img/'.$page->images) !!}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section><!--Hero_Section-->
    @else
        <section id="{{ $page->alias }}"><!--Aboutus-->
            <div class="inner_wrapper">
                <div class="container">
                    <h2>{{ $page->name }}</h2>
                    <div class="inner_section">
                        <div class="row">
                            <div class=" col-lg-4 col-md-4 col-sm-4 col-xs-12 pull-right">{!! Html::image('assets/img/'.$page->images,'',array('class'=>'img-circle delay-03s animated wow zoomIn')) !!}</div>
                            <div class=" col-lg-7 col-md-7 col-sm-7 col-xs-12 pull-left">
                                <div class=" delay-01s animated fadeInDown wow animated">
                                    {!! $page->text !!}
                                </div>
                                <div class="work_bottom"> <span>Вы можете узнать больше..</span> <a href="{{ route('page',array('alias'=>$page->alias)) }}" class="contact_btn">Подробнее</a> </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section><!--Aboutus-->
    @endif
@endforeach
@endif

@if(isset($services) && is_object($services))
    <section  id="service"><!--Service-->
        <div class="container">
            <h2>Сервисы</h2>
            <div class="service_wrapper">

                @foreach($services as $k=>$services)
                    @if( $k == 0 || $k%3 == 0)
                        <div class="row {{ ($k!= 0) ? 'borderTop' : '' }}">
                    @endif

                            <div class="col-lg-4 {{ ($k%3 > 0) ? 'borderLeft' : '' }} {{ ($k > 2) ? 'mrgTop' : ''}}">
                                <div class="service_block">
                                    <div class="service_icon delay-03s animated wow  zoomIn"> <span><i class="fa {{ $services->icon }}"></i></span> </div>
                                    <h3 class="animated fadeInUp wow">{{ $services->name }}</h3>
                                    <p class="animated fadeInDown wow">{{ $services->text }}</p>
                                </div>
                            </div>
                    @if(($k + 1)%3 == 0)
                        </div>
                    @endif
                @endforeach
            </div>
        </div>
    </section><!--Service-->
@endif

@if(isset($portfolios) && is_object($portfolios))
    <!-- Portfolio -->
    <section id="Portfolio" class="content">

        <!-- Container -->
        <div class="container portfolio_title">

            <!-- Title -->
            <div class="section-title">
                <h2>Портфолио</h2>
            </div>
            <!--/Title -->

        </div>
        <!-- Container -->

        <div class="portfolio-top"></div>

        <!-- Portfolio Filters -->
        <div class="portfolio">

            @if(isset($tags) && is_array($tags))
                <div id="filters" class="sixteen columns">
                    <ul class="clearfix">
                        <li><a id="all" href="#" data-filter="*" class="active">
                                <h5>All</h5>
                            </a></li>
                        @foreach($tags as $tag)
                            <li><a class="" href="#" data-filter=".{{ $tag }}">
                                    <h5>{{ $tag }}</h5>
                                </a>
                            </li>
                        @endforeach
                    </ul>
                </div>
                <!--/Portfolio Filters -->
            @endif

            <!-- Portfolio Wrapper -->
            <div class="isotope fadeInLeft animated wow" style="position: relative; overflow: hidden; height: 480px;" id="portfolio_wrapper">

                @foreach($portfolios as $item)
                    <!-- Portfolio Item -->
                        <div style="position: absolute; left: 0px; top: 0px; transform: translate3d(0px, 0px, 0px) scale3d(1, 1, 1); width: 337px; opacity: 1;" class="portfolio-item one-four   {{ $item->filter }} isotope-item">
                            <div class="portfolio_img">{{ Html::image('assets/img/'.$item->images,$item->name) }}</div>
                            <div class="item_overlay">
                                <div class="item_info">
                                    <h4 class="project_name">{{ $item->name }}</h4>
                                </div>
                            </div>
                        </div>
                        <!--/Portfolio Item -->
                @endforeach

            </div>
            <!--/Portfolio Wrapper -->

        </div>
        <!--/Portfolio Filters -->
        <div class="portfolio_btm"></div>

        <div id="project_container">
            <div class="clear"></div>
            <div id="project_data"></div>
        </div>

    </section>
    <!--/Portfolio -->
@endif

@if(isset($peoples) && is_object($peoples))
    <section class="page_section team" id="team"><!--main-section team-start-->
        <div class="container">
            <h2>Наша команда</h2>
            <h6>Наши сотрудники самые трудолюбивые люди в мире!!!</h6>
            <div class="team_section clearfix">

                @foreach($peoples as $k=>$people)
                    <div class="team_area">
                        <div>
                            {!! Html::image('assets/img/'.$people->images,$people->name,['class'=>'img-circle  delay-03s animated wow zoomIn']) !!}
                        </div>
                        <div class="team_box wow fadeInDown delay-0{{ ($k * 3 + 3) }}s">
                            <div class="team_box_shadow"><a href="javascript:void(0)"></a></div>
                            <!--
                                <div class="team_box_shadow"><a href="javascript:void(0)"></a></div>
                                <ul>
                                    <li><a href="javascript:void(0)" class="fa fa-twitter"></a></li>
                                    <li><a href="javascript:void(0)" class="fa fa-facebook"></a></li>
                                    <li><a href="javascript:void(0)" class="fa fa-pinterest"></a></li>
                                    <li><a href="javascript:void(0)" class="fa fa-google-plus"></a></li>
                                </ul>
                            -->
                        </div>
                        <h3 class="wow fadeInDown delay-0{{ ($k * 3 + 3) }}">{{ $people->name }}</h3>
                        <span class="wow fadeInDown delay-0{{ ($k * 3 + 3) }}">{{ $people->position }}</span>
                        <p class="wow fadeInDown delay-0{{ ($k * 3 + 3) }}">{{ $people->text }}</p>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    <!--/Team-->
@endif

