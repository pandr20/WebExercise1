<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body >
    <h1>Department </h1> 
    @if(session()->has('message'))
            <h1 class="success-message">{{ session()->get('message') }}</h1>
        @else
            <h1 class="success-message"></h1>
        @endif
    <div>
        <a href="departments/create" class="new">
            Add a new department &rarr;



        </a>

    </div>

    @foreach ( $departments as $department)
 
    <div class="department">
        <ul>
                <li class="code">{{ $department->code }}</li>
                <li class="name">{{ $department->name }}</li>
                <li class="courses">{{ $department->course->count() }}</li>
                <a class="show" href="/departments/{{ $department->id }}">Show</a>
                
                
        
            </ul>
            </div>

        
    @endforeach

    <a class="new" href="/departments/create"></a>
    


</body>
</html>