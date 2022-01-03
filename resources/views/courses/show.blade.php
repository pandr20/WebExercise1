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

 
  
 
    <div class="courses">
        <ul>
           
                <li class="code">{{ $course->code }}</li>
                <li class="code">{{ $course->code }}</li>
                <li class="name">{{ $course->name }}</li>
                <li class="ects">{{ $course->ects }}</li>
                <a class="department" href="/departments/{$course->department_id}"> {{ $course->department->name }}</a>
                <li class="description">{{ $course->description }}</li>
               
               <a class="show" href="/courses/{{ $course->id }}">Show course</a>
                
                <button> <a class="edit" href="/courses/{{ $course->id }}/edit">Edit</a></button>
    
                <form action="{{ route('course.destroy', $course->id) }}" method="POST">
                    @csrf
                
                    @method('delete')
                
                    <button class="remove" type="submit" class="btn btn-danger btn-block">Delete</button>
                </form>
        </div>
            </div>


        
  

  

   
    


</body>
</html>