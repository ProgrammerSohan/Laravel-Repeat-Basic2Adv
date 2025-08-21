@extends('layouts.master')

@section('content')

<main role="main" class="container">
    <div class="row mt-5">
            {{--         @foreach ($users as $user )
                    <div class="col-md-3">
                        <div class="card">
                            <div class="card-body">
                                <h4>{{$user->name}}</h4>
                                <p>{{$user->email}}</p>
                                <p>{{$user->address->address}}</p>
                            </div>
                        </div>
                    </div>
                @endforeach--}}

                {{--
                @foreach ($addresses as $address)
                        <div class="col-md-3">
                            <div class="card">
                                <div class="card-body">
                                    <h4>{{$address->user->name}}</h4>
                                    <p>{{$address->user->email}}</p>
                                    <p>{{$address->address}}</p>

                                </div>

                            </div>

                        </div>
                @endforeach --}}

                @foreach ($categories as $category )

                        <div class="col-md-3">
                            <div class="card">
                                <h4>{{$category->title}}</h4>
                                <p>{{$category->description}}</p>
                               {{-- <p>{{$category->name}}</p>--}}
                               <p class="btn-sm btn-success">{{$category->category->name}}</p>

                            </div>

                        </div>
                    
                @endforeach

    </div>

</main>

@endsection