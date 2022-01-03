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
        <form action="/departments/{{ $department->id }}" method="post">

            @method('PUT')
           
           @csrf
           <input type="hidden" name="_method" value="PUT">
            <div>
                <input
                 type="text"
                name="name"
                placeholder="Department name"
                value="{{ $department->name }}">

                <input
                 type="text"
                name="code"
                placeholder="Department code"
                value="{{ $department->code }}">

                <input
                 type="text"
                name="description"
                placeholder="Department desciption"
                value="{{ $department->description }}">
            </div>

            <button class="submit" type="submit">Submit</button>
        </form>
    </div>

    
   

    </div>
</body>
</html>