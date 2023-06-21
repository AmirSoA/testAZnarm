<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>ایجاد کاربر جدید</title>
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
        form {
            margin: 50px auto;
            max-width: 500px;
            background-color: white;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            padding: 20px;
            border-radius: 5px;
        }
        label {
            display: block;
            margin-bottom: 10px;
            font-weight: bold;
        }
        input[type="text"], input[type="email"], input[type="password"] {
            width: 100%;
            padding: 10px;
            border-radius: 3px;
            border: 1px solid #ddd;
            margin-bottom: 20px;
        }
        button[type="submit"] {
            display: block;
            margin: 20px auto;
            padding: 10px 20px;
            background-color: #4CAF50;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-weight: bold;
        }
        button[type="submit"]:hover {
            background-color: #2E8B57;
        }
    </style>
</head>
<body>
<h1>ایجاد کاربر جدید</h1>

<form method="POST" action="{{ route('users.store') }}">
    @csrf
    <div>
        <label for="name">نام و نام خانوادگی:</label>
        <input type="text" name="name" id="name">
    </div>
    <div>
        <label for="email">ایمیل:</label>
        <input type="email" name="email" id="email">
    </div>
    <div>
        <label for="password">رمز عبور:</label>
        <input type="password" name="password" id="password">
    </div>
    <button type="submit">ذخیره</button>
</form>

<script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
