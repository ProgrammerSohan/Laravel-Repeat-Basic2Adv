@extends('layouts.master')

@section('content')

<main role="main" class="container">
    <div class="row mt-5">
           
                @foreach ($posts as $post)

                        <div class="col-md-3">
                            <div class="card">
                                <h4>{{$post->title}}</h4>
                                <p>{{$post->description}}</p>
                               {{-- <p>{{$category->name}}</p>--}}
                               {{--<p class="btn-sm btn-success">{{$category->category->name}}</p>--}}
                               
                                   
                                  <ul>
                                    @foreach ($post->tags as $tag )
                                    <li>{{$tag->name}}</li>
                                         @endforeach
                               </ul>
                          

                            </div>

                        </div>
                    
                @endforeach

    </div>

</main>

@endsection