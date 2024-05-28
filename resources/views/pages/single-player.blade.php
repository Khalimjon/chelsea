@extends('layouts.main')

@section('title')
    {{$player->name}}
@endsection

@section('content')
    <div class="container mt-5">
        <div class="card" style="width: 24rem;">
            <div class="card-body d-flex">
                <img src="{{$player->photo}}" class="rounded-circle mr-3" alt="Player Photo" style="width: 100px; height: 100px;">
            </div>
            <div>
                <h5 class="card-title">{{$player->name}}</h5>
                <p class="card-text"><strong>Position:</strong>{{$player->position}}</p>
                <p class="card-text"><strong>Age:</strong>{{$player->age}}</p>
                <p class="card-text"><strong>Number</strong>{{$player->shirt_number}}</p>
                {{-- <p class="card-text"><strong>Nationality:</strong> Country</p> --}}
                <p class="card-text"><strong>Biography</strong>{{$player->describtion}}</p>
            </div>
        </div>
    </div>
@endsection
