<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
            background-color: #f4f4f4;
        }
        form {
            background: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            max-width: 400px;
            margin: auto;
        }
        label {
            display: block;
            margin-bottom: 8px;
            font-weight: bold;
        }
        input[type="text"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }
        input[type="submit"] {
            background-color: #28a745;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
        }
        input[type="submit"]:hover {
            background-color: #218838;
        }
    </style>
</head>
<body>
    @if ($errors->any())
    <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
    @endif

    <form action="/student/create" method="post">

    <center> <h2>Add Student</h2> </center>
        @csrf
        <label for="idnumber">ID Number:</label>
        <input type="text" name="idnumber" id="idnumber">

        <label for="firstname">First Name:</label>
        <input type="text" name="firstname" id="firstname">
                
        <label for="middlename">Middle Name:</label>
        <input type="text" name="middlename" id="middlename">

        <label for="lastname">Last Name:</label>
        <input type="text" name="lastname" id="lastname">
                
        <label for="email">Email:</label>
        <input type="text" name="email" id="email">

        <input type="submit" value="Save Changes">
    </form>
</body>
</html>
