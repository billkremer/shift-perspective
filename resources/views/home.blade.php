@extends('layout')

@section('content')
<div class="container">
    <div class="row justify-content-left">
        <h3 class="">Discover Your Perspective</h3>
        <h3 class="">Complete the 7 minute test and get a detailed report of your lenses on the world. 
    </div>
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="row">
                <form >


                @foreach ($questions as $question) 
                    @include('question', $question)
                @endforeach


                <div class="light-outline">
                    <label>
                    <h3>Your Email</h3>
                    <input type="email" required="required" autocomplete="email" placeholder="you@example.com">



                </div>

                <button type="submit" class="">Save &amp; Continue</button> 


                </form>
            </div>






            </div>

        </div>
    </div>
</div> {{--  container end --}}


 
@endsection
