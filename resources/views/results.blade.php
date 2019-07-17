{{-- this is a blade to display all the results  --}}
@extends('layout')

@section('content')
<div class="container">
  <div class="row justify-content-center light-outline">
    <div class="col-md-6">
      <h2>Your Perspective</h2>
      <h3>Your Perspecive Type is {{}}</h3>
    </div>
    <div class="col-md-6">
      <div class="row">
        <span>Intraversion (I)</span>
          <div class="answerBar {{}}"></div>
          <div class="answerBar {{}}"></div>
        <span>Extraversion (E)</span>
      </div>
      <div class="row">
        <span>Sensing (S)</span>
          <div class="answerBar {{}}"></div>
          <div class="answerBar {{}}"></div>
        <span>Intuition (N)</span>
      </div>
      <div class="row">
        <span>Thinking (T)</span>
          <div class="answerBar {{}}"></div>
          <div class="answerBar {{}}"></div>
        <span>Feeling (F)</span>
      </div>
      <div class="row">
        <span>Judging (J)</span>
          <div class="answerBar {{}}"></div>
          <div class="answerBar {{}}"></div>
        <span>Perceiving (P)</span>
      </div>

    </div>

  </div>
</div>
@endsection
