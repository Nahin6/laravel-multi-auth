

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
    <form method="POST" action="{{ route('register') }}">
        @csrf
        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">Name</label>
          <x-input id="name" class="form-control" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
        </div>
        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">Email address</label>
          <x-input id="email" class="form-control" type="email" name="email" :value="old('email')" required autocomplete="username" />
        </div>
        <div class="mb-3">
          <label for="exampleInputPassword1" class="form-label">Password</label>
          {{-- <input type="password" class="form-control" id="exampleInputPassword1"> --}}
          <x-input id="password" class="form-control" type="password" name="password" required autocomplete="new-password" />
        </div>
        <div class="mb-3">
          <label for="exampleInputPassword1" class="form-label">Confirm Password</label>
          <x-input id="password_confirmation" class="form-control" type="password" name="password_confirmation" required autocomplete="new-password" />
        </div>  
        <x-button id="signin" class="form-submit">
            {{ __('Register') }}
        </x-button>
      </form>
</div>


@endsection