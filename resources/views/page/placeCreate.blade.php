@extends('layout.main-layout')

@section('form')

  <div class="back_link">
    <a href="{{ route("place.index") }}">BACK</a>
  </div>

  <form class="create_form" method="post" action="{{ route("place.store") }}">

      @csrf
      @method('POST')

      <div class="form_group">
        <label for="name">Name</label>
        <input type="text" name="name" value="" placeholder="Insert name">
      </div>

      <div class="form_group">
        <label for="address">Address</label>
        <input type="text" name="address" value="" placeholder="Insert address">
      </div>

      <div class="form_group">
        <label for="city">City</label>
        <input type="text" name="city" value="" placeholder="Insert city">
      </div>

      <div class="form_group">
        <label for="nation">Nation</label>
        <input type="text" name="nation" value="" placeholder="Insert nation">
      </div>

      <button type="submit">Save</button>
    </form>
  </div>
@endsection
