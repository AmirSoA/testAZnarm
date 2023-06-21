<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>لیست کاربران</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f5f5f5;
            color: #333;
        }
        h1 {
            text-align: center;
            margin-top: 50px;
        }
        table {
            margin: 50px auto;
            border-collapse: collapse;
            background-color: white;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        th, td {
            padding: 10px;
            text-align: center;
            border: 1px solid #ddd;
        }
        th {
            background-color: #f2f2f2;
        }
        a {
            display: block;
            margin: 50px auto;
            text-align: center;
            color: white;
            background-color: #4CAF50;
            padding: 10px 20px;
            border-radius: 5px;
            text-decoration: none;
            font-weight: bold;
        }
        a:hover {
            background-color: #2E8B57;
        }
    </style>
</head>
<body>
<h1>لیست کاربران</h1>

<table>
    <thead>
    <tr>
        <th>نام و نام خانوادگی</th>
        <th>ایمیل</th>
    </tr>
    </thead>
    <tbody>
    @foreach ($users as $user)
        <tr>
            <td>{{ $user->name }}</td>
            <td>{{ $user->email }}</td>
        </tr>
    @endforeach
    </tbody>
</table>

<a href="{{ route('users.create') }}">ایجاد کاربر جدید</a>
</body>
</html>
