
@extends('layouts.master')


@section('content')
<main role="main" class="container">
<h1 class="mt-5 text-danger">Home</h1>
Lorem, ipsum dolor sit amet consectetur adipisicing elit. Cum pariatur ratione quaerat vero a, ullam reiciendis earum distinctio nihil exercitationem quidem neque odit aliquid quasi esse, repudiandae, adipisci non placeat.
</main>

    <div class="row mt-5">
        <!-- 
             @foreach ($blogs as $blog)
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <h2>{{ $blog['title'] }}</h2>
                        <p>{{ $blog['body'] }}</p>
                    </div>

                </div>

            </div>
        @endforeach
        -->
        <div class="row mt-5">
           {{--  @for($i= 0; $i< count($blogs); $i++)--}}
           @foreach ($blogs as $blog)
                    @if($blog['status']==1)
                <div class="col-md-4">
                    <div class="card">
                            <div class="card-body">
                               {{--  <h2>{{ $blogs[$i]['title'] }}</h2>
                                  <p>{{ $blogs[$i]['body'] }}</p>   --}}
                            <h2>{{ $blog['title'] }}</h2>
                            <p>{{ $blog['body'] }}</p>
                          <!--   <p>{{ $blog['status'] }}</p> -->
                             <p>{{ $blog['status'] }}</p>

                            </div>

                    </div>

                </div>
                @else
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-body">
                            <h2>{{ $blog['title'] }}</h2>
                            <p>{{ $blog['body'] }}</p>
                            <div class="btn-sm btn-warning">Pending</div>

                        </div>


                    </div>

                </div>

                @endif
                @endforeach

           {{--  @endfor --}}



        </div>

    </div>

@endsection