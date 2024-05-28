@extends('layouts.main')

@section('title')
    Team
@endsection

@section('content')
    <section id="contant" class="contant main-heading team">
        <div class="row">
            <div class="container">
                @foreach ($players as $player )
                    <div class="col-md-3 column">
                        <div class="card">
                            <img class="img-responsive" src="{{ asset('storage/'. $player->photo) }}" alt="{{$player->name}}" style="width:268px;height:348px;object-fit:cover;">
                            <div class="">
                            <h4>{{$player->name}}</h4>
                            <p class="title">{{$player->position}}</p>
                            <p>
                            <div class="center"><a href="{{route('singlePlayer', ['player' => $player->id])}}"><button class="button">Show more</button></a></div>
                            </p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection
