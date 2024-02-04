@extends('layouts.app')

@section('content')

<style>
     .form-submit {
    display: inline-block;
    background: #250d9d;
    color: #fff;
    border-bottom: none;
    width: auto;
    padding: 15px 39px;
    border-radius: 5px;
    -moz-border-radius: 5px;
    -webkit-border-radius: 5px;
    -o-border-radius: 5px;
    -ms-border-radius: 5px;
    margin-top: 25px;
    cursor: pointer; }
    .form-submit:hover {
      background: #041e23;
    transition: 0.7s; }

  #signin {
    margin-top: 16px; }
</style>
<div style="width:50% ; margin-left: 25%;" class="mt-lg-5">
    <x-validation-errors class="mb-4" />
    <form method="POST" action="{{ route('login') }}">
        @csrf
        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">Email address</label>
          {{-- <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"> --}}
          <x-input id="email" for="exampleInputEmail1"  class="form-control" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
          {{-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> --}}
        </div>
        <div class="mb-3">
          <label for="exampleInputPassword1" class="form-label">Password</label>
          {{-- <input type="password" class="form-control" id="exampleInputPassword1"> --}}
          <x-input id="password" for="exampleInputPassword1" class="form-control" type="password"  name="password" required autocomplete="current-password" />
        </div>
        <div class="mb-3 form-check">
          <input type="checkbox" class="form-check-input" id="exampleCheck1">
          <label class="form-check-label" for="exampleCheck1">Check me out</label>
        </div>
        <x-button id="signin" class="form-submit">
            {{ __('Log in') }}
        </x-button>
      </form>
</div>


@endsection
