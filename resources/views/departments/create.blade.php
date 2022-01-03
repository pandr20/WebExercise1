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
            Create department
        </h1>
    </div>
    <div>

        <form action="/departments" method="POST">
            @csrf
            <div>
                <input
                 type="text"
                name="name"
                placeholder="Department name">

                <input
                 type="text"
                name="code"
                placeholder="Department code">

                <input
                 type="text"
                name="description"
                placeholder="Department desciption">
            </div>

            <button class="submit" type="submit">Submit</button>
        </form>
    </div>
 
</body>
</html>
    
    
  
