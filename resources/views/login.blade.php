<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <style>
        body {
            background-color: #000830;
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .container {
            background-color: white;
            padding: 2rem; /* 8 units * 0.25rem */
            border-radius: 0.5rem; /* 2 units * 0.25rem */
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1), 0 2px 4px rgba(0, 0, 0, 0.06);
            max-width: 28rem; /* 112 units * 0.25rem */
            width: 100%;
        }
        .title {
            font-size: 1.5rem; /* 6 units * 0.25rem */
            font-weight: 700;
            margin-bottom: 1.5rem; /* 6 units * 0.25rem */
            text-align: center;
            color: #2d3748; /* text-gray-800 */
        }
        .form-group {
            margin-bottom: 1rem; /* 4 units * 0.25rem */
        }
        .label {
            display: block;
            color: #4a5568; /* text-gray-700 */
        }
        .input {
            width: 100%;
            padding: 0.5rem 1rem; /* 2 units * 0.25rem and 4 units * 0.25rem */
            border-radius: 0.5rem; /* 2 units * 0.25rem */
            border: 1px solid #d1d5db; /* border-gray-300 */
            outline: none;
            transition: box-shadow 0.2s, border-color 0.2s;
        }
        .input:focus {
            border-color: #3b82f6; /* blue-500 */
            box-shadow: 0 0 0 4px rgba(59, 130, 246, 0.25); /* 2 units * 0.25rem */
        }
        .button {
            display: flex;
            justify-content: center;
            background-color: #1F73B8;
            color: white;
            font-weight: 700;
            padding: 0.5rem 1rem; /* 2 units * 0.25rem and 4 units * 0.25rem */
            border-radius: 0.5rem; /* 2 units * 0.25rem */
            margin-left: auto;
            margin-right: auto;
        }
        .footer {
            display: flex;
            justify-content: center;
            margin-top: 2rem; /* 8 units * 0.25rem */
        }
        .footer p {
            margin-right: 0.5rem;
        }
        .footer img {
            width: 1.5rem; /* 6 units * 0.25rem */
            height: 1.5rem; /* 6 units * 0.25rem */
        }
    </style>
</head>
<body>
    <div class="container">
        <h2 class="title">Bem Vindo</h2>
        <form action="" method="POST">
            @csrf
            <div class="form-group">
                <label for="username" class="label">Login:</label>
                <input type="text" id="username" name="username" class="input">
            </div>
            <div class="form-group">
                <label for="password" class="label">Senha:</label>
                <input type="password" id="password" name="password" class="input">
            </div>
            <button type="submit" class="button">ENTRAR</button>
            
        </form>
    </div>
</body>
</html>
