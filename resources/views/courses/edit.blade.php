<html class="department" lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Edit </h1>
    <div>
<div>
    <h1>
        Update Department 
    </h1>
</div>
    </div>
    <div>
        <form action="/courses/{{ $course->id }}" method="post">
            @method('PUT')
            @csrf
            
            <input type="hidden" name="_method" value="PUT">
            <div>
                <input
                 type="text"
                name="name"
                placeholder="course name"
                value="{{ $course->name }}">

                <input
                 type="text"
                name="code"
                placeholder="course code"
                value="{{ $course->code }}">

                <input
                type="int"
               name="ects"
               placeholder="course ects"
               value="{{ $course->ects }}">

               @if ($departments)
               <label for="departments" class="department">Choose a department</label>
               <select name="department" class="department">
                   @foreach ($departments as $department )

                   <option value="{{ $department->id }}">{{ $department -> name }}</option>
                       
                   @endforeach
               </select>
               @endif
                <input
                 type="text"
                name="description"
                placeholder="course desciption"
                value="{{ $course->description }}">
            </div>

            <button class="submit" type="submit">Submit</button>
        </form>
    </div>

    
   

    </div>
</body>
</html>