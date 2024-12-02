<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Management</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }
        table {
            width: 100%;
            border-collapse: collapse;
        }
        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
        tr:nth-child(even) {
            background-color: #f9f9f9;
        }
        tr:hover {
            background-color: #ddd;
        }
        .btn {
            display: inline-block;
            padding: 6px 12px;
            font-size: 14px;
            cursor: pointer;
            text-align: center;
            text-decoration: none;
            color: #fff;
            background-color: #007bff;
            border: none;
            border-radius: 4px;
            margin: 0 5px;
        }
        .btn-edit {
            background-color: #28a745;
        }
        .btn-delete {
            background-color: #dc3545;
        }
        .btn-add {
            background-color: #dc3545;
        }
    </style>
</head>
<body>
    <h1>List of Students</h1>

    <a href="/student/create" class="btn btn-add">Add</a>
    <table>
        <tr>
            <th>#</th>
            <th>ID Number</th>
            <th>First Name</th>
            <th>Middle Name</th>
            <th>Last Name</th>
            <th>Email</th>
            <th>Actions</th>
        </tr>
        @foreach($students as $index => $student)
           <tr>
                <td>{{$index+1}}</td>
                <td>{{$student->idnumber}}</td>
                <td>{{$student->firstname}}</td>
                <td>{{$student->middlename}}</td>
                <td>{{$student->lastname}}</td>
                <td>{{$student->email}}</td>
                <td>
                    <a href="#" class="btn btn-edit">Edit</a>
                    <a href="#" class="btn btn-delete">Delete</a>
                </td>
           </tr>
        @endforeach
    </table>
</body>
</html>
