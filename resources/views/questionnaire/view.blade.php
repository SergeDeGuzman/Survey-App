<html>
    <style>
        .button1{
            
            display: inline-block;
                outline: 0;
                cursor: pointer;
                border: 2px solid #000;
                border-radius: 3px;
                color: #fff;
                background: #000;
                font-size: 20px;
                font-weight: 600;
                line-height: 28px;
                padding: 12px 20px;
                text-align:center;
                transition-duration: .15s;
                transition-property: all;
                transition-timing-function: cubic-bezier(.4,0,.2,1);      
        }
        .button1:hover{
                    color: #000;
                    background: rgb(255, 218, 87);
                }
        .button-44 {
  background: #13D100 ;
  border-radius: 11px;
  box-sizing: border-box;
  color: #fff;
  cursor: pointer;
  display: flex;
  font-family: Mija,-apple-system,BlinkMacSystemFont,Roboto,"Roboto Slab","Droid Serif","Segoe UI",system-ui,Arial,sans-serif;
  font-size: 1.15em;
  font-weight: 700;
  justify-content: center;
  line-height: 33.4929px;
  padding: .8em 1em;
  text-align: center;
  text-decoration: none;
  text-decoration-skip-ink: auto;
  text-shadow: rgba(0, 0, 0, .3) 1px 1px 1px;
  text-underline-offset: 1px;
  transition: all .2s ease-in-out;
  user-select: none;
  -webkit-user-select: none;
  touch-action: manipulation;
  width: 100%;
  word-break: break-word;
  border: 0;
}

.button-44:active,
.button-44:focus {
  border-bottom-style: none;
  border-color: #dadada;
  box-shadow: rgba(0, 0, 0, .3) 0 3px 3px inset;
  outline: 0;
}

.button-44:hover {
  border-bottom-style: none;
  border-color: #dadada;
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

.link{
    cursor:pointer;
     color:blue;
     text-decoration:underline;
}
    </style>
</html>



<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="card">
            <p style="color: skyblue">Create New Survey</p>
                </div>
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                
                <div class="p-6">
                    <a href="/questionnaires/create" class="button-44">
                        Create New Survey
                    </a>
                </div>
            </div>
        </div>
    </div>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="card">
            <p style="color: skyblue">My Survey forms</p>
                </div>
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                
                <div class="p-6">
                    <ul class="list-group">
                    @foreach($questionnaires as $questionnaire)
                            <li class="list-group-item">
                                <a class="button1" href="{{ $questionnaire->path() }}">
                                    {{ $questionnaire->title }}
                                </a>
                                
                                <p>
                                        Purpose: {{ $questionnaire->purpose }}
                                        <br>
                                        Created at {{ $questionnaire->created_at }}

                                    </p>

                                <div class="mt-2">
                                    <small class="font-weight-bold">Share URL</small>
                                    <p>
                                        <a class="link" href="{{ $questionnaire->publicPath() }}">
                                        {{ $questionnaire->publicPath() }}
                                        </a>
                                    </p>
                            </li>
                            
                            @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

