@extends('layouts.app')

@section('title', 'Welcome')


@section('main-content')
   
    <h1 class="text-center">
        Homepage
    </h1>
    <div class="container">
      <div class="row justify-content-center">
        
        @foreach ($trains as $train)
            {{-- @dump($book) --}}
            <div class="card" style="width: 14rem;">
                <h4>{{}}</h4>
                <div class="card-body">
                   <h5 class="card-title">{{}}</h5>
                   <p class="card-text">{{}}</p>
                   <p class="card-text">{{}}</p>
                   <p class="card-text">{{}}</p>                  
                </div>
            </div>
           
        @endforeach
      </div>   
    </div>
@endsection

