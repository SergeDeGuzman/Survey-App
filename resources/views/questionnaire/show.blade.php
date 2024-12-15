<html>
    <style>
  .Add{
    
    position: inline-block;

                    outline: 0;
                    border: 0;
                    cursor: pointer;
                    background-color: #4299e1;
                    border-radius: 4px;
                    padding: 8px 16px;
                    font-size: 16px;
                    border-bottom: 4px solid #2b6cb0;
                    font-weight: 700;
                    color: white;
                    line-height: 26px;
                
  }   
  .Delete{
    
    position: inline-block;
                    
                    outline: 0;
                    border: 0;
                    cursor: pointer;
                    background-color: #ff4742;
                    border-radius: 4px;
                    padding: 8px 16px;
                    font-size: 16px;
                    border-bottom: 4px solid #CA0000 ;
                    font-weight: 700;
                    color: white;
                    line-height: 20px;
                
  }   
  .Take {
    display: inline-block;
                    outline: 0;
                    border: 0;
                    cursor: pointer;
                    background-color: #FF7C00 ;
                    border-radius: 4px;
                    padding: 8px 16px;
                    font-size: 16px;
                    border-bottom: 4px solid #FF7C00 ;
                    font-weight: 700;
                    color: white;
                    line-height: 26px;
  }   
  
.container {
  max-width: fit-content;
  margin-left: auto;
  margin-right: auto;
  
}
.card-header1{
    font-size: 50px;
  font-weight: 600;
 
  color: transparent;
  background-clip: text;
  -webkit-background-clip: text;
}
.card-header2{
    font-size: 25px;
  font-weight: 600;
  border-bottom: 4px solid #4F3C2A ;
}
.card-body{
    font-size: 20px;
  font-weight: 600;
  border-bottom: 4px solid #4F3C2A ;
  
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
.card-footer{
    
    display: inline-block;
                outline: 0;
                cursor: pointer;
                border-radius: 6px;
                border: 2px solid #ff4742;
                color: #fff;
                background-color: #ff4742;
                padding: 8px;
                box-shadow: rgba(0, 0, 0, 0.07) 0px 2px 4px 0px, rgba(0, 0, 0, 0.05) 0px 1px 1.5px 0px;
                font-weight: 800;
                font-size: 16px;
                height: 42px;
                
                
}
.card-footer:hover{
                    background: 0 0;
                    color: #ff4742;
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
            <div class="card-header1"style="color: skyblue">{{ $questionnaire->title}}</div>
            <form action="/questionnaires/{{$questionnaire->id}}" onsubmit="return confirm('Are you sure you want to delete this Survey?');" method="post">
                    @method('DELETE')
                    @csrf

                    <button type="submit"  class="Delete">Delete Survey</button>
                    </form>
            <div class="card">
                    <a class="Add"href="/questionnaires/{{ $questionnaire->id }}/questions/create">Add New Question</a>      
            </div>
            
            </div>

            @foreach($questionnaire->questions as $question)
            <br><br><div class="bg-white shadow-xl sm:rounded-lg card-header2">{{ $question->question}}</div>
                

            <div class="bg-white shadow-xl sm:rounded-lg card-body">
            <ul class="list-group">
                @foreach($question->answers as $answer)
                    <li class="list-group-item d-flex justify-content-between">
                        <div class="choice">{{$answer->answer}}</div>
                        @if($question->responses->count())
                        <div class="perc">{{ intval(($answer->responses->count() * 100 / $question->responses->count()))}}%, {{$answer->responses->count()}}</div>
                        @endif
                    </li>
                    <div class="line"></div>
                @endforeach    
 
            </ul>
            </div>
            <div class="card-footer">
                <form action="/questionnaires/{{$questionnaire->id}}/questions/{{ $question->id}}" onsubmit="return confirm('Are you sure you want to delete this Question?');" method="post">
                    @method('DELETE')
                    @csrf

                    <button type="submit" class="btn btn-sm btn-outline-danger">Delete Question</button>

                </form>
            </div>
            @endforeach
        </div>
    </div>
    
    
    
</x-app-layout>
