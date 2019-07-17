 {{-- this is a blade to display the individual questions --}}

 <div class="light-outline">
    <h3>{{$question}}</h3>
    <div>
      <span class="text-danger">Disagree</span>

      <input type="radio" id="question{{$id}}Answer1"
          name="questionAnswer" value="1">
      <label for="question{{$id}}Answer1" hidden="hidden">1</label>

      <input type="radio" id="question{{$id}}Answer2"
          name="questionAnswer" value="2">
      <label for="question{{$id}}Answer2" hidden="hidden">2</label>

      <input type="radio" id="question{{$id}}Answer3"
          name="questionAnswer" value="3">
      <label for="question{{$id}}Answer3" hidden="hidden">3</label>

      <input type="radio" id="question{{$id}}Answer4"
          name="questionAnswer" value="4">
      <label for="question{{$id}}Answer4" hidden="hidden">4</label>

      <input type="radio" id="question{{$id}}Answer5"
          name="questionAnswer" value="5">
      <label for="question{{$id}}Answer5" hidden="hidden">5</label>

      <input type="radio" id="question{{$id}}Answer6"
          name="questionAnswer" value="6">
      <label for="question{{$id}}Answer6" hidden="hidden">6</label>

      <input type="radio" id="question{{$id}}Answer7"
          name="questionAnswer" value="7">
      <label for="question{{$id}}Answer7" hidden="hidden">7</label>

      <span class="text-success">Agree</span>
    </div>




 </div>