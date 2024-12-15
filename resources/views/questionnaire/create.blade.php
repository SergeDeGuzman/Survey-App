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
            <div class="card-header"style="color: skyblue">Create New Survey</div>
                
            <div class="bg-white shadow-xl sm:rounded-lg card-body">
                    <form action="/questionnaires" method="post">

                        @csrf

                        <div class="form-group">
                            <label for="title">Title</label><br>
                            <small id="titleHelp" class="form-text text-muted">Give your survey a title that attracts attention.</small>
                            <input name="title" type="text" class="form-control" id="title" aria-describedby="titleHelp" placeholder="Enter Title">
                            

                            @error('title')
                                <small class="text">{{ $message }}</small>
                            @enderror    
                        </div>

                        <div class="form-group">
                            <label for="purpose">Purpose</label><br>
                            <small id="purposeHelp" class="form-text text-muted">The purpose in creating this survey</small>
                            <input name="purpose" type="text" class="form-control" id="purpose" aria-describedby="purposeHelp" placeholder="Enter Purpose">
                            

                            @error('purpose')
                                <small class="text">{{ $message }}</small>
                            @enderror  
                            <button type="submit" class="button-33">Create Survey</button>  
                        </div>

                        
                    </form>
            </div>
            </div>
        </div>
    </div>
    
    
    
</x-app-layout>


