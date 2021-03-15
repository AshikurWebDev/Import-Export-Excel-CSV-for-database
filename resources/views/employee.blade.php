<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Export data into the form of PDF</title>
    <style>
        table{
            font-family: Arial, Helvetica, sans-serif;
            border-collapse: collapse;
            width: 100%;
            text-align: center;
        }
        td, th{
            border: 1px solid whitesmoke;
            padding: 8px;
        }
        table tr:nth-child(2n){
            background-color: #0bfdfd;
        }

        table th{
            padding-top: 12px;
            padding-bottom: 12px;
            background-color: #4CAF50;
            color: #fff;
        }
        button{
            background: #4CAF50;
            padding: 10px 20px;
            border: none;
            border-radius: none;
            cursor: pointer;
            translate: all 0.3s ease-out;
        }

        button:hover{
            background: #5bcf5f;
        }

        button a{
            text-decoration:none;
             color: #fff;;
        }
    </style>
</head>
<body>  
        <table>
            <head>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Salary</th>
                    <th>Department</th>
                </tr>
            </head>
            <tbody>
                @foreach ($employees as $emp)
                    <tr>
                        <td>{{$emp->id}}</td>
                        <td>{{$emp->name}}</td>
                        <td>{{$emp->email}}</td>
                        <td>{{$emp->phone}}</td>
                        <td>{{$emp->salary}}</td>
                        <td>{{$emp->department}}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        <button><a href="/download-pdf">Download</a></button>
</body> 
</html>