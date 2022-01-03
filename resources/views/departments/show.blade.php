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

 
  
 
    <div class="department">
        <ul>
                <li class="code">{{ $department->code }}</li>
                <li class="name">{{ $department->name }}</li>
                <li class="description">{{ $department->description }}</li>
                <li><a class="show" href="/departments/{{ $department->id }}">Show department</a></li>

                <div class="course">
                    @foreach ( $courses as $course)
                    <li class="code">{{ $course->code }}</li>
                    <li class="name">{{ $course->name }}</li>
                    <li class="ects">{{ $course->ects }}</li>
                    <li class="description">{{ $course->description }}</li>
                    <li><a class="show" href="/courses/{{ $course->id }}">Show course</a></li>
                </ul>
                @endforeach
                </ul>
    
                <button> <a class="edit" href="/departments/{{ $department->id }}/edit">Edit</a></button>
    
              

            <form action="{{ route('department.destroy', $department->id) }}" method="POST">
                @csrf
            
                @method('delete')
            
                <button class="remove" type="submit" class="btn btn-danger btn-block">Delete</button>
            </form>
        </div>
            </div>

        
  
  

   
    


</body>
</html>