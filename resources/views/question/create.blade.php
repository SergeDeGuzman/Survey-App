<html>
    <style>
     .button-33 {
       
  background-color: #c2fbd7;
  border-radius: 100px;
  box-shadow: rgba(44, 187, 99, .2) 0 -25px 18px -14px inset,rgba(44, 187, 99, .15) 0 1px 2px,rgba(44, 187, 99, .15) 0 2px 4px,rgba(44, 187, 99, .15) 0 4px 8px,rgba(44, 187, 99, .15) 0 8px 16px,rgba(44, 187, 99, .15) 0 16px 32px;
  color: green;
  cursor: pointer;
  font-family: CerebriSans-Regular,-apple-system,system-ui,Roboto,sans-serif;
  padding: 7px 20px;
  text-align: center;
  text-decoration: none;
  transition: all 250ms;
  border: 0;
  font-size: 16px;
  user-select: none;
  -webkit-user-select: none;
  touch-action: manipulation;
  
}

.button-33:hover {
  box-shadow: rgba(44,187,99,.35) 0 -25px 18px -14px inset,rgba(44,187,99,.25) 0 1px 2px,rgba(44,187,99,.25) 0 2px 4px,rgba(44,187,99,.25) 0 4px 8px,rgba(44,187,99,.25) 0 8px 16px,rgba(44,187,99,.25) 0 16px 32px;
  transform: scale(1.05) rotate(-1deg);
}
.container {
  max-width: fit-content;
  margin-left: auto;
  margin-right: auto;
  
}
.form-group{
    width:800px; 
    margin:0 auto;
    display: flex;
  flex-direction: column;
}
.text{
    color:red ;
}
    </style>
</html>

<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>
    <div class="py-12 container">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 row justify-content-center">
            <div class="col-md-8">
            <div class="card-header"style="color: skyblue">Create New Question</div>
                
            <div class="bg-white shadow-xl sm:rounded-lg card-body">
                    <form action="/questionnaires/{{ $questionnaire->id }}/questions" method="post">

                        @csrf

                        <div class="form-group">
                            <label for="question">Question</label><br>
                            <small id="questionHelp" class="form-text text-muted">Ask simple and to the point questions.</small>
                            <input name="question[question]" type="text" class="form-control"
                             value="{{ old('question.question')}}"
                            id="question" aria-describedby="questionHelp" placeholder="Enter Question">
                            

                            @error('question.question')
                                <small class="text">The Question is required.</small><br>
                            @enderror    
                        </div>

                        <div class="form-group">
                        <fieldset>
                                <legend>Choices</legend>
                                <small id="choicesHelp" class="form-text text-muted">Give choices that give you the most insight into your question.</small>
                                <div>
                                    <div class="form-group">
                                    <br><label for="answer1">Choice 1</label><br>
                                        <input name="answers[][answer]" type="text" 
                                        value="{{ old('answers.0.answer')}}"
                                            class="form-control" id="answer1" aria-describedby="choicesHelp" placeholder="Enter choice 1">
                                        

                                    @error('answers.0.answer')
                                        <small class="text">The choice is required.</small>
                                    @enderror    
                                    </div>
                                </div>

                                <div>
                                    <div class="form-group">
                                        <label for="answer2">Choice 2</label><br>
                                        <input name="answers[][answer]" type="text" 
                                        value="{{ old('answers.1.answer')}}"
                                            class="form-control" id="answer2" aria-describedby="choicesHelp" placeholder="Enter choice 2">
                                        

                                    @error('answers.1.answer')
                                        <small class="text">The choice is required.</small>
                                    @enderror    
                                    </div>
                                </div>

                                <div>
                                    <div class="form-group">
                                        <label for="answer3">Choice 3</label><br>
                                        <input name="answers[][answer]" type="text" 
                                        value="{{ old('answers.2.answer')}}"
                                            class="form-control" id="answer3" aria-describedby="choicesHelp" placeholder="Enter choice 3">
                                        

                                    @error('answers.2.answer')
                                        <small class="text">The choice is required.</small>
                                    @enderror    
                                    </div>
                                </div>

                                <div>
                                    <div class="form-group">
                                        <label for="answer4">Choice 4</label><br>
                                        <input name="answers[][answer]" type="text" 
                                        value="{{ old('answers.3.answer')}}"
                                            class="form-control" id="answer4" aria-describedby="choicesHelp" placeholder="Enter choice 4">
                                        

                                    @error('answers.3.answer')
                                        <small class="text">The choice is required.</small>
                                    @enderror    
                                    </div>
                                </div>
                            </fieldset>
                            <button type="submit" class="button-33">Add Question</button>
                        </div>
                        
                    </form>
            </div>
            </div>
        </div>
    </div>
    
    
    
</x-app-layout>