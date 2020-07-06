@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Create Post</div>

                <div class="card-body">
                <form method="POST" action="{{ route('post.store') }}" enctype="multipart/form-data">
                        @csrf

                        @include('layouts.post_form')

                       
                    </form>
                    
                </div>
                <img src="{{URL::asset('storage/Customer 5.jpg')}}" alt="profile Pic" height="200" width="200">

            </div>
        </div>
    </div>
</div>
@endsection