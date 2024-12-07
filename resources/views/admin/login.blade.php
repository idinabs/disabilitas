<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Admin</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            background-color: #e9ecef;
        }

        .login-container {
            background-color: white;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2);
            width: 400px;
            text-align: center;
        }

        h1 {
            color: #0C356A; /* Warna untuk judul */
            margin-bottom: 20px;
        }

        label {
            display: block;
            margin-bottom: 5px;
            text-align: left;
            font-weight: bold;
        }

        input[type="email"], input[type="password"] {
            width: 100%;
            padding: 15px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 16px;
            transition: border 0.3s;
        }

        input[type="email"]:focus, input[type="password"]:focus {
            border: 1px solid #0C356A; /* Warna border saat fokus */
            outline: none;
        }

        button {
            width: 100%;
            padding: 15px;
            background-color: #0C356A; /* Warna tombol */
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
            transition: background 0.3s;
        }

        button:hover {
            background-color: #0A2A55; /* Warna lebih gelap saat hover */
        }

        .error {
            color: red;
            margin-bottom: 15px;
        }

        .footer {
            margin-top: 20px;
            font-size: 14px;
            color: #666;
        }
    </style>
</head>
<body>
    <div class="login-container">
        <h1>Login Admin</h1>

        @if ($errors->any())
            <div class="error">
                <strong>{{ $errors->first() }}</strong>
            </div>
        @endif

        <form action="{{ route('admin.login') }}" method="POST">
            @csrf
            <label for="email">Email:</label>
            <input type="email" name="email" required>
            <label for="password">Password:</label>
            <input type="password" name="password" required>
            <button type="submit">Login</button>
        </form>

        <div class="footer">
            <p>© 2024. Semua hak dilindungi.</p>
        </div>
    </div>
</body>
</html>
