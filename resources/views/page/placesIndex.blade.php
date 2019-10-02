@extends('layout.main-layout')

@section('content')

  <div class="create_link">
    <a href="{{ route("place.create") }}">CREATE NEW PLACE</a>
  </div>

  <div class="place_list">
    @foreach ($places as $place)
      <div class="place_items">
        <h4> {{ $place -> name}} -- {{ $place -> address }} </h4>
      </div>
    @endforeach
  </div>

@endsection
