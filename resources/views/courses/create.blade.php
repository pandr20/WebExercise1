<html class="department" lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <div>
        <h1>
            Create course
        </h1>
    </div>
    <div>

        <form action="/courses" method="POST">
            @csrf
            <div>
                <input
                 type="text"
                name="name"
                placeholder="Course name">

                <input
                 type="text"
                name="code"
                placeholder="Course code">

                <input
                 type="text"
                name="ects"
                placeholder="Course ects">

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
                placeholder="Course desciption">
            </div>

            <button class="submit" type="submit">Submit</button>
        </form>
    </div>
 
</body>
</html>
    
    
  
