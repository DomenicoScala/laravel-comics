@extends('layouts.app')

@section('page-title', 'Home')

@section('main-content')
   <section class="main-section">
       <div class="container">
           <div class="row">
               @foreach ($comics as $comic)
                   
                   <div class="col-12 col-sm-3">
                       <div class="card my-2" style="width: 10rem;">
                           <img src="{{ $comic['thumb'] }}" class="card-img-top" alt="...">           
                       </div>
                   </div>
                   
               @endforeach
               
           </div>
      </div>
   </section>
@endsection
