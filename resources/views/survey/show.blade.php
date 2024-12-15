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
.card-header1{
    font-size: 50px;
  font-weight: 600;
  color:skyblue ;
}
.card-header2{
    font-size: 25px;
  font-weight: 600;
  color:skyblue ;
}
.list-group-item{
    font-size: 20px;
  font-weight: 600;
  border-bottom: 4px solid #4F3C2A ;
  text-indent: 20px;
}
.choice{
    text-indent: 20px;
}
.perc{
    border-bottom: 4px solid #4F3C2A;
    text-align: right;
}
.text{
    position: flex;
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
                <h1 class="card-header1">{{ $questionnaire->title }}</h1>
                <form action="/surveys/{{ $questionnaire->id}}-{{ Str::slug($questionnaire->title)}}" method="post">
                @csrf

                @foreach($questionnaire->questions as $key =>$question)
                <div class="card-header2"<strong>{{ $key + 1 }}</strong>. &nbsp;{{ $question->question}}</div>
                

                    <div class="bg-white shadow-xl sm:rounded-lg card-body">

                        @error('responses.' . $key . '.answer_id')
                             <small class="text">Answer to this question is required.</small>                       
                        @enderror
                    <ul class="list-group">
                        @foreach($question->answers as $answer)
                            <label for="answer{{ $answer->id }}">
                            <li class="list-group-item">
                                <input type="radio" name="responses[{{ $key }}][answer_id]" id="answer{{ $answer->id }}"
                                {{ (old('responses.' . $key . '.answer_id') == $answer->id) ? 'checked' : ''}}
                                class="mr-2" value="{{ $answer->id }}">
                                {{ $answer->answer}}

                                <input type="hidden" name="responses[{{ $key }}][question_id]" value="{{ $question->id }}">
                            </li>
                            </label>
                        @endforeach    
 
            </ul>
            </div>
                @endforeach
               
                
            <div class="card-header"style="color: skyblue">Your Information</div>
                
            <div class="bg-white shadow-xl sm:rounded-lg card-body">
                    <div class="form-group">
                        <label for="name">Your Name</label><br>
                        <small id="nameHelp" class="form-text text-muted">Hello! what's your name?</small>
                        <input name="survey[name]" type="text" class="form-control" id="name" aria-describedby="nameHelp" placeholder="Enter Name">
                        

                        @error('survey.name')
                            <small class="text">Your name is required.</small><br>
                        @enderror    
                    </div>

                    <div class="form-group">
                        <label for="email">Email</label><br>
                        <small id="emailHelp" class="form-text text-muted">Your Email please</small>
                        <input name="survey[email]" type="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Enter Email">
                        

                        @error('survey.email')
                            <small class="text">Your email is required.</small><br>
                        @enderror
                        <button class="button-33" type="submit" >Complete</button>    
                    </div>

                    
                    <div>
                    
                    </div>
            </div>
            </form>
            </div>
            </div>
        </div>
    </div>
    
    
    
</x-app-layout>
