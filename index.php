<!DOCTYPE html>
<html>
<head>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-image: url(bg2.png);
            background-repeat: no-repeat;
            background-size:100%;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .container {
            background-color: white;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
            text-align: center;
            width: 550px;
        }
        h1 {
            color: purple;
        }
        h2 {
            color: #333;
        
        }
        form {
            margin-top: 40px;
        }
        label {
            display: block;
            margin-bottom: 10px;
            color: #333;
            font-weight: bold;
        }
        input {
            width: 97%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 3px;
            margin-right:30px;
        }
        button {
            background-color: #007bff;
            color: #fff;
            border: none;
            padding: 10px 20px;
            border-radius: 3px;
            cursor: pointer;
        }
        button:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Sistem Pendaftaran Peralatan Elektrik</h1>
        <h2>Log In</h2>
        <form action="login.php" method="post">
            <label for="idpengguna">ID Pengguna</label>
            <input type="text" name="idpengguna" id="idpengguna" required>
            <label for="katalaluan">Password</label>
            <input type="password" name="katalaluan" id="katalaluan" required>
            <button type="submit">Submit</button>
        </form>
    </div>
</body>
</html>
