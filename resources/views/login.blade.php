@extends('layouts.default')
@section('title', 'Login')
@section('links')
  <link href="https://fonts.googleapis.com/css2?family=Lemon&display=swap" rel="stylesheet">
@endsection
@section('content')
{{-- Bg-Login --}}
  <div class=" -z-20 w-full h-full">
    <img src="{{ asset ('Assets/bgLogin.png') }}" alt="" class="w-full h-[100vh] blur-[3px]">
  </div>
  <div class="z-10 absolute top-0 left-0 w-full h-full flex justify-center">
    {{-- logo --}}
    <div class=" w-max h-[150px] mt-5 items-center flex flex-col">
      <img src="{{ asset('Assets/profilApp.png') }}" alt="" class="w-[80px] h-[80px] rounded-full" style="box-shadow: 0 0 12px white;">
      <h1 class="mt-2 text-[32px] font-bold font-['lemon'] text-white" style="text-shadow: 3px 0 4px black;">Snappa</h1>
      <h1 class="mt-2 text-[38px] font-bold font-['lemon'] text-black" style="text-shadow: 3px 0 4px white;">Hello, Old Friend</h1>
    </div>
    {{-- form --}}

  </div>
@endsection