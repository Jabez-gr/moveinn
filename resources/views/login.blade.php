<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <style>
        body {
            background: #f4f6fb;
            font-family: 'Segoe UI', Arial, sans-serif;
            margin: 0;
            padding: 0;
        }
        .container {
            max-width: 400px;
            margin: 60px auto;
            background: #fff;
            border-radius: 12px;
            box-shadow: 0 4px 24px rgba(0,0,0,0.08);
            padding: 32px 28px;
        }
        h1 {
            text-align: center;
            color: #333;
            margin-bottom: 24px;
        }
        form div {
            margin-bottom: 18px;
        }
        label {
            display: block;
            margin-bottom: 6px;
            color: #555;
            font-size: 15px;
        }
        input[type="email"], input[type="password"] {
            width: 100%;
            padding: 10px 12px;
            border: 1px solid #d1d5db;
            border-radius: 6px;
            font-size: 16px;
            background: #f9fafb;
            transition: border-color 0.2s;
        }
        input[type="email"]:focus, input[type="password"]:focus {
            border-color: #6366f1;
            outline: none;
        }
        button[type="submit"] {
            width: 100%;
            padding: 12px;
            background: linear-gradient(90deg,#6366f1,#60a5fa);
            color: #fff;
            border: none;
            border-radius: 6px;
            font-size: 16px;
            font-weight: 600;
            cursor: pointer;
            transition: background 0.2s;
        }
        button[type="submit"]:hover {
            background: linear-gradient(90deg,#60a5fa,#6366f1);
        }
        .links {
            margin-top: 22px;
            text-align: center;
        }
        .links p {
            margin: 8px 0;
            font-size: 14px;
        }
        .links a {
            color: #6366f1;
            text-decoration: none;
            transition: color 0.2s;
        }
        .links a:hover {
            color: #2563eb;
            text-decoration: underline;
        }
        .message {
            text-align: center;
            margin: 12px 0;
            font-size: 15px;
        }
    </style>
</head>
<body>
    <header>
        <h1>Login to Your Account</h1>
    </header>
    <div class="container">
        <form method="POST" action="{{ route('login') }}">
            @csrf
            <div>
                <label for="email">Email Address</label>
                <input type="email" id="email" name="email" required autofocus>
            </div>
            <div>
                <label for="password">Password</label>
                <input type="password" id="password" name="password" required>
            </div>
            <button type="submit">Login</button>
        </form>
        <div class="links">
            <p>Don't have an account? <a href="{{ route('register') }}">Register here</a></p>
            <p><a href="{{ route('password.request') }}">Forgot your password?</a></p>
        </div>
        @if (session('status'))
            <div class="message">
                {{ session('status') }}
            </div>
        @endif
    </div>
    <footer>
        <div class="links">
            <p>&copy; {{ date('Y') }} MoveInn. All rights reserved.</p>
        </div>
    </footer>
    <script>
        // Optional: Add any JavaScript functionality if needed
    </script>  
</body>
</html>