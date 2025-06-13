
@extends('layouts.master')


@section('content')
<main role="main" class="container">
<h1 class="mt-5 text-danger">Home</h1>
Lorem, ipsum dolor sit amet consectetur adipisicing elit. Cum pariatur ratione quaerat vero a, ullam reiciendis earum distinctio nihil exercitationem quidem neque odit aliquid quasi esse, repudiandae, adipisci non placeat.
</main>

    <div class="row mt-5">
      
        <div class="row mt-5">
          
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

           @php
              // echo 'Hello World';
              //$data = true;
             // $i = 2;
             //$i=1;
             $i='';
           @endphp

        {{--   @isset($data)
               <div class="alert alert-success">Success</div>
           @endisset  --}}   

           {{--@switch($i)
               @case(1)
                    <div class="alert alert-danger">Danger</div>
                   @break
                   @case(2)
                       
                   <div class="alert alert-success">Success</div>
                   @break
           
               @default
               <div class="alert alert-warning">Warning</div>
                   
           @endswitch--}}

           @empty($i)
               <div class="alert alert-success">This is empty</div>
           @endempty     

        </div>

    </div>

@endsection