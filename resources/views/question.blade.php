 {{-- this is a blade to display the individual questions --}}

{{-- TODO add aria-label=... --}}
{{-- TODO make all inputs required & add error? is input error enough? --}}
 <div class="light-outline text-center">
    <p class="question-text">{{$question}}</p>
    <div class="radio-stretch">
      <span class="text-danger">Disagree</span>

      <input type="radio" id="question{{$id}}Answer1"
          name="questionAnswer-{{$id}}" value="1" required="required">
      <label for="question{{$id}}Answer1" class="sr-only sr-only-focusable" aria-label="Completely Disagree">1</label>

      <input type="radio" id="question{{$id}}Answer2"
          name="questionAnswer-{{$id}}" value="2" required="required">
      <label for="question{{$id}}Answer2" class="sr-only sr-only-focusable" aria-label="Strongly Disagree">2</label>

      <input type="radio" id="question{{$id}}Answer3"
          name="questionAnswer-{{$id}}" value="3" required="required">
      <label for="question{{$id}}Answer3" class="sr-only sr-only-focusable" aria-label="Disagree Somewhat">3</label>

      <input type="radio" id="question{{$id}}Answer4"
          name="questionAnswer-{{$id}}" value="4" required="required">
      <label for="question{{$id}}Answer4" class="sr-only sr-only-focusable" aria-label="Neutral">4</label>

      <input type="radio" id="question{{$id}}Answer5"
          name="questionAnswer-{{$id}}" value="5" required="required">
      <label for="question{{$id}}Answer5" class="sr-only sr-only-focusable" aria-label="Agree Somewhat">5</label>

      <input type="radio" id="question{{$id}}Answer6"
          name="questionAnswer-{{$id}}" value="6" required="required">
      <label for="question{{$id}}Answer6" class="sr-only sr-only-focusable" aria-label="Strongly Agree">6</label>

      <input type="radio" id="question{{$id}}Answer7"
          name="questionAnswer-{{$id}}" value="7" required="required">
      <label for="question{{$id}}Answer7" class="sr-only sr-only-focusable" aria-label="Completely Agree">7</label>

      <span class="text-success">Agree</span>
    </div>




 </div>