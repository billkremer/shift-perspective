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
                <form method="POST" action="{{ route('results') }}">
                    @csrf

                    @foreach ($questions as $question) 
                        {{-- @include('question', $question) --}}
                        <question 
                            :question="{{$question}}">
                        </question>

                    @endforeach
                    {{-- for a short quiz, this is ok, otherwise may need to show a set amount at any time. --}}

                    <div class="light-outline form-group">
                        <label class="question-text">Your Email</label>
                        <input type="email" required="required" autocomplete="email" name="email" class="form-control form-control-lg" placeholder="you@example.com">

                    </div>

                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <div class="text-center">
                        <button type="submit" class="btn btn-primary ">Save &amp; Continue</button> 
                    </div>
                    <input hidden="hidden" value={{$quizId}} name="quizId">
                </form>
            </div>
        </div>
    </div>
</div> {{--  container end --}}

@endsection
