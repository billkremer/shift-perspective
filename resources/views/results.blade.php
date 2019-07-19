{{-- this is a blade to display all the results  --}}
@extends('layout')

@section('content')
<div class="container result-text">
  <div class="row justify-content-center light-outline text-left">
    <div class="col-md-6 text-left align-self-center">
      <h1>Your Perspective</h1>
      <p>Your Perspective Type is {{$results['summary']}}</p>
    </div>


    <div class="col-md-6">
      <div class="result-grid-container">
        <span>Introversion (I)</span>
        <div class="d-inline-flex align-self-center">
          <div class="answer-bar answer-bar-left @if ($results['EI'] > 4) result-color @else not-result-color @endif"></div>
          <div class="answer-bar answer-bar-right @if ($results['EI'] <= 4) result-color @else not-result-color @endif"></div>
        </div>
        <span>Extraversion (E)</span>

        <span>Sensing (S)</span>
        <div class="d-inline-flex align-self-center">
          <div class="answer-bar answer-bar-left @if ($results['SN'] <= 4) result-color @else not-result-color @endif"></div>
          <div class="answer-bar answer-bar-right @if ($results['SN'] > 4) result-color @else not-result-color @endif"></div>
        </div>
        <span>Intuition (N)</span>

        <span>Thinking (T)</span>
        <div class="d-inline-flex align-self-center">
          <div class="answer-bar answer-bar-left @if ($results['TF'] <= 4) result-color @else not-result-color @endif"></div>
          <div class="answer-bar answer-bar-right @if ($results['TF'] > 4) result-color @else not-result-color @endif"></div>
        </div>
        <span>Feeling (F)</span>

        <span>Judging (J)</span>
        <div class="d-inline-flex align-self-center">
          <div class="answer-bar answer-bar-left @if ($results['JP'] <= 4) result-color @else not-result-color @endif"></div>
          <div class="answer-bar answer-bar-right @if ($results['JP'] > 4) result-color @else not-result-color @endif"></div>
        </div>
        <span>Perceiving (P)</span>

      </div>

    </div>


  </div>
</div>
@endsection
