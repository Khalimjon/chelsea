@extends('layouts.main')

@section('title')
    News
@endsection

@section('content')
    <section id="contant" class="contant">
        <div class="container">
            <div class="row">
                <!-- Main Content -->
                <div class="col-lg-9 col-sm-12">
                    @foreach ($items as $item)
                        <div class="col-md-4" style="margin-bottom: 10px">
                            <img style="width:268px;height:348px;object-fit:cover;" class="card-img-top" src="{{ asset('storage/'. $item->photo) }}" alt="Card image cap">
                            <div class="card-body">
                                <h5 class="card-title">{{ $item->title }}</h5>
                                <p class="card-text">{{ $item->short_content }}</p>
                                <a href="{{ route('singleNews', $item->id) }}" class="btn btn-primary">Ko'proq</a>
                            </div>
                        </div>
                    @endforeach
                </div>

                <!-- Sidebar -->
                <div class="col-lg-3 col-sm-12">
                    <div class="content-widget top-story" style="background: url(images/top-story-bg.jpg); padding: 20px;">
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
                    <aside id="sidebar" class="right-bar">
                        <div class="banner">
                            <img class="img-responsive" src="images/adds-3.jpg" alt="#">
                        </div>
                    </aside>
                </div>
            </div>
        </div>
    </section>
@endsection
