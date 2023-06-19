@extends('admin.layouts.layoutsadmin')


@section('content')
<hr>
    <center>
        <h1 class="mb-5">Selamat datang di Dashboard Admin desa kamasan</h1>

    </center>

    <h2></h2>
    <div class="container flex mb-5">

        @if (session('success'))
            <div class="alert alert-success" role="alert">
                {{ session('success') }}
            </div>
        @endif

        @if (session('error'))
            <div class="alert alert-danger" role="alert">
                {{ session('error') }}
            </div>
        @endif

        <section id="basic-vertical-layouts">
          
          <center>  <img src="{{asset('images/logoKamasan.png')}}" alt=""></center>
        </section>

   <hr>
@endsection
