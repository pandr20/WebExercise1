<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body >
    @if(session()->has('message'))
            <h1 class="success-message">{{ session()->get('message') }}</h1>
        @else
            <h1 class="success-message"></h1>
        @endif
    <div>
        <a href="courses/create" class="new">
            Add a new course &rarr;



        </a>

    </div>

    @foreach ( $courses as $course)
 
    <div class="course">
        <ul>
                <li class="code">{{ $course->code }}</li>
                <li class="name">{{ $course->name }}</li>
                <li class="ects">{{ $course->ects }}</li>
                <li class="department"> <a class="new" href="/departments/{{ $course->department_id }}"> {{ $course->department->name }}</a></li>
                 <a class="show" href="/courses/{{ $course->id }}">Show</a>
                   
                
                
        
            </ul>
            </div>

        
    @endforeach

  <a class="new" href="/courses/create"></a>
    


</body>
</html>