@extends('layouts.app')

@section('content')
<div class="container">
   <div class="row">
       <div class="col-md-8">
            @include('public.partials.section1')
       </div>
       <div class="col-md-4">
        @include('public.partials.section2')
       </div>
   </div>
</div>
@endsection
