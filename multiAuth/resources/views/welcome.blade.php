@extends('layouts.app')

@section('content')
@if ($message = Session::get('error'))
    <div id="success-message" class="alert alert-danger text-center">
        <p>{{ $message }}</p>
    </div>

@endif
 <div class="container text-center mt-lg-5" style="font-size: 200px; color:rgb(9, 25, 102);">
    Welcome
 </div>
@endsection
