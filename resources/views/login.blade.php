<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <form action="{{route('user.login')}}" method="post">
        @csrf
        <input type="text" name="studentId">
        <input type="password" name="password">
        <button type="submit">LOGIN</button>
    </form><br>
    <form action="{{route('user.register')}}" method="post" enctype="multipart/form-data">
        @csrf
        <input type="text" name="name">
        <input type="text" name="studentId">
        <input type="email" name="email">
        <input type="password" name="password">
        <select name="department">
            <option value="CITC">CITC</option>
            <option value="CEA">CEA</option>
            <option value="COT">COT</option>
            <option value="CSTE">CSTE</option>
        </select>
        <input type="text" name="year_section">
        <input type="file" name="picture">
        <button type="submit">REGISTER</button>
    </form>
</body>
</html>