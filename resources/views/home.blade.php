@extends('layout')

@section('content')
<div class="container">
    <div class="row justify-content-left">
        <p class=""><strong>Discover Your Perspective</strong>
        <br>
        <span class="text-muted">Complete the 7 minute test and get a detailed report of your lenses on the world.</p>
    </div>
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="row">
                <form method="GET" action="{{ route('results') }}">
                    @csrf

                @foreach ($questions as $question) 
                    @include('question', $question)
                @endforeach


                <div class="light-outline form-group">
                    <label class="question-text">Your Email</label>
                    <input type="email" required="required" autocomplete="email" name="email" class="form-control form-control-lg" placeholder="you@example.com">



                </div>

                <button type="submit" class="btn btn-primary text-center">Save &amp; Continue</button> 


                </form>
            </div>






            </div>

        </div>
    </div>
</div> {{--  container end --}}


 
@endsection
