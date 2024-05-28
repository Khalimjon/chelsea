@extends('layouts.main')

@section('title')
    Home
@endsection

@section('content')

    <div class="matchs-info">
        <div class="col-md-6 col-sm-6 col-xs-12">
        <div class="row">
            <div class="full">
                <div class="matchs-vs">
                    <div class="vs-team">
                    <div class="team-btw-match">
                        <ul>
                            <li>
                                <img src="images/img-03.png" alt="">
                                <span>Footbal Team</span>
                            </li>
                            <li class="vs"><span>vs</span></li>
                            <li>
                                <img src="images/img-04.png" alt="">
                                <span>Super Team Club</span>
                            </li>
                        </ul>
                    </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
        <div class="col-md-6 col-sm-6 col-xs-12">
        <div class="row">
            <div class="full">
                <div class="right-match-time">
                    <h2>Next Match</h2>
                    <ul id="countdown-1" class="countdown">
                    <li><span class="days">10 </span>Day </li>
                    <li><span class="hours">5 </span>Hours </li>
                    <li><span class="minutes">25 </span>Minutes </li>
                    <li><span class="seconds">10 </span>Seconds </li>
                    </ul>
                    <span>12/02/2017 /19:00pm</span>
                </div>
            </div>
        </div>
        </div>
    </div>
    <section id="contant" class="contant">
        <div class="container">
        <div class="row">
            <div class="col-lg-4 col-sm-4 col-xs-12">
                <aside id="sidebar" class="left-bar">
                    <div class="banner-sidebar">
                    <img class="img-responsive" src="images/img-05.jpg" alt="#" />
                    <h3>Lorem Ipsum is simply dummy text..</h3>
                    </div>
                </aside>
                <h4>Match Fixture</h4>
                <aside id="sidebar" class="left-bar">
                    <div class="feature-matchs">
                    <div class="team-btw-match">
                        <ul>
                            <li>
                                <img src="images/img-01_002.png" alt="">
                                <span>Portugal</span>
                            </li>
                            <li class="vs"><span>vs</span></li>
                            <li>
                                <img src="images/img-02.png" alt="">
                                <span>Germany</span>
                            </li>
                        </ul>
                        <ul>
                            <li>
                                <img src="images/img-03_002.png" alt="">
                                <span>Portugal</span>
                            </li>
                            <li class="vs"><span>vs</span></li>
                            <li>
                                <img src="images/img-04_003.png" alt="">
                                <span>Germany</span>
                            </li>
                        </ul>
                        <ul>
                            <li>
                                <img src="images/img-05_002.png" alt="">
                                <span>Portugal</span>
                            </li>
                            <li class="vs"><span>vs</span></li>
                            <li>
                                <img src="images/img-06.png" alt="">
                                <span>Germany</span>
                            </li>
                        </ul>
                        <ul>
                            <li>
                                <img src="images/img-07_002.png" alt="">
                                <span>Portugal</span>
                            </li>
                            <li class="vs"><span>vs</span></li>
                            <li>
                                <img src="images/img-08.png" alt="">
                                <span>Germany</span>
                            </li>
                        </ul>
                        <ul>
                            <li>
                                <img src="images/img-05_002.png" alt="">
                                <span>Portugal</span>
                            </li>
                            <li class="vs"><span>vs</span></li>
                            <li>
                                <img src="images/img-06.png" alt="">
                                <span>Germany</span>
                            </li>
                        </ul>
                    </div>
                    </div>
                </aside>
                <h4>Points Table</h4>
                <aside id="sidebar" class="left-bar">
                    <div class="feature-matchs">
                    <table class="table table-bordered table-hover">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Team</th>
                                <th>P</th>
                                <th>W</th>
                                <th>L</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td><img src="images/img-01_004.png" alt="">Liverpool</td>
                                <td>10</td>
                                <td>12</td>
                                <td>20</td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td><img src="images/img-02_002.png" alt="">Chelsea</td>
                                <td>10</td>
                                <td>12</td>
                                <td>20</td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td><img src="images/img-03_003.png" alt="">Norwich City</td>
                                <td>20</td>
                                <td>15</td>
                                <td>20</td>
                            </tr>
                            <tr>
                                <td>4</td>
                                <td><img src="images/img-04_002.png" alt="">West Brom</td>
                                <td>60</td>
                                <td>10</td>
                                <td>60</td>
                            </tr>
                            <tr>
                                <td>5</td>
                                <td><img src="images/img-05.png" alt="">sunderland</td>
                                <td>30</td>
                                <td>06</td>
                                <td>30</td>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td><img src="images/img-01_004.png" alt="">Liverpool</td>
                                <td>10</td>
                                <td>12</td>
                                <td>20</td>
                            </tr>
                        </tbody>
                    </table>
                    </div>
                </aside>
                <div class="content-widget top-story" style="background: url(images/top-story-bg.jpg);">
                    <div class="top-stroy-header">
                    <h2>Top Soccer Headlines Story <a href="#" class="fa fa-fa fa-angle-right"></a></h2>
                    <span class="date">July 05, 2017</span>
                    <h2>Other Headlines</h2>
                    </div>
                    <ul class="other-stroies">
                    <li><a href="#">Wenger Vardy won't start</a></li>
                    <li><a href="#">Evans: Vardy just</a></li>
                    <li><a href="#">Pires and Murray </a></li>
                    <li><a href="#">Okazaki backing</a></li>
                    <li><a href="#">Wolfsburg's Rodriguez</a></li>
                    <li><a href="#">Jamie Vardy compared</a></li>
                    <li><a href="#">Arsenal target Mkhitaryan</a></li>
                    <li><a href="#">Messi wins libel case.</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-8 col-sm-8 col-xs-12">
                <div class="news-post-holder">

                    @foreach ($news as $item )
                        <div class="news-post-widget">
                        <img class="img-responsive" src="{{ asset('storage/'. $item->photo) }}" alt="">
                        <div class="news-post-detail">
                            <span class="date">{{$item->created_at}}</span>
                            <h2><a href="blog-detail.html">{{$item->short_content}}</a></h2>
                            <p>{{$item->content}}</p>
                        </div>
                        </div>

                    @endforeach
                </div>
            </div>
        </div>
        </div>
    </section>
    <section>
        <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="full">
                    <div class="main-heading sytle-2">
                    <h2>Video</h2>
                    <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium<br>doloremque laudantium, totam rem aperiam</p>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>
    <section class="video_section_main theme-padding middle-bg vedio">
        <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="full">
                    <div class="match_vedio">
                    <img class="img-responsive" src="images/img-07.jpg" alt="#" />
                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>
    <div class="team-holder theme-padding">
        <div class="container">
        <div class="main-heading-holder">
            <div class="main-heading sytle-2">
                <h2>Meet Your Team</h2>
                <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium<br>doloremque laudantium, totam rem aperiam</p>
            </div>
        </div>
        <div id="team-slider">
            <div class="container">

                <div class="d-flex">
                    @foreach ($players as $item )

                    <div class="col-md-3" style="margin-bottom: 10px">
                        <div class="team-column style-2">
                           <div >
                                <img style="width:268px;height:348px;object-fit:cover;" src="{{ asset('storage/'. $item->photo) }}" alt="">
                           </div>
                           <div class="player-name">
                              <div class="desination-2">Defender</div>
                              <h5>Charles Wheeler</h5>
                              <span class="player-number">12</span>
                           </div>
                           <div class="overlay">
                              <div class="team-detail-hover position-center-x">
                                 <p>Lacus vulputate torquent mollis venenatis quisque suspendisse fermentum primis,</p>
                                 <ul class="social-icons style-4 style-5">
                                    <li><a class="facebook" href="#" tabindex="0"><i class="fa fa-facebook"></i></a></li>
                                    <li><a class="twitter" href="#" tabindex="0"><i class="fa fa-twitter"></i></a></li>
                                    <li><a class="youtube" href="#" tabindex="0"><i class="fa fa-youtube-play"></i></a></li>
                                    <li><a class="pinterest" href="#" tabindex="0"><i class="fa fa-pinterest-p"></i></a></li>
                                 </ul>
                                 <a class="btn blue-btn" href=" /soccer/team-detail.html" tabindex="0">View Detail</a>
                              </div>
                           </div>
                        </div>
                     </div> 
                    @endforeach

                </div>
            </div>
        </div>
        </div>
    </div>

@endsection
