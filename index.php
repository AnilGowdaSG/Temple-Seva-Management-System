<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Temple Management System</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            margin: 0;
            padding: 0;
            background: linear-gradient(to bottom, #FFF8E7, #FFD699); /* Subtle gradient */
        }

        header {
            background: linear-gradient(to right, #FFA500, #FF8C00);
            color: #fff;
            text-align: center;
            padding: 20px 0;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.3);
        }

        header h1 {
            font-size: 3rem;
            font-family: 'Georgia', serif;
            letter-spacing: 2px;
            margin: 0;
        }

        nav {
            background-color: #FFD699;
            display: flex;
            justify-content: center;
            padding: 10px 0;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.2);
        }

        nav ul {
            list-style: none;
            margin: 0;
            padding: 0;
            display: flex;
            gap: 30px;
        }

        nav ul li {
            margin: 0;
        }

        nav ul li a {
            color: #FF8C00;
            text-decoration: none;
            font-size: 18px;
            font-weight: bold;
            padding: 10px 15px;
            border-radius: 5px;
            transition: background-color 0.3s, transform 0.3s;
        }

        nav ul li a:hover {
            background-color: #FF8C00;
            color: #FFD699;
            transform: scale(1.1);
        }

        section#home {
            background: url('img/img1.jpg') no-repeat center center;
            background-size: cover;
            height: calc(100vh - 70px);
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.7);
            color: #fff;
            padding: 20px;
            box-shadow: inset 0 0 20px rgba(0, 0, 0, 0.5);
        }

        section#home .overlay {
            background: rgba(0, 0, 0, 0.5);
            padding: 30px;
            border-radius: 15px;
            text-align: center;
        }

        section#home h2 {
            font-size: 3.5rem;
            margin-bottom: 20px;
            font-family: 'Georgia', serif;
            letter-spacing: 3px;
        }

        section#home a {
            display: inline-block;
            margin: 15px;
            padding: 15px 30px;
            font-size: 1.2rem;
            font-weight: bold;
            color: #fff;
            background: linear-gradient(to right, #FFA500, #FF8C00);
            border-radius: 10px;
            text-decoration: none;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.3);
            transition: transform 0.3s, box-shadow 0.3s;
        }

        section#home a:hover {
            transform: scale(1.1);
            box-shadow: 0 6px 10px rgba(0, 0, 0, 0.5);
        }

        footer {
            background: linear-gradient(to right, #FFA500, #FF8C00);
            color: #FFD699;
            text-align: center;
            padding: 15px 0;
            position: fixed;
            bottom: 0;
            width: 100%;
            box-shadow: 0 -4px 6px rgba(0, 0, 0, 0.2);
        }

        footer a {
            color: #FFD699;
            text-decoration: none;
            font-weight: bold;
            margin: 0 10px;
        }

        footer a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <header>
        <h1>Sri Adichunchanagiri Kshethra Seva Management</h1>
    </header>
    <nav>
        <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="#">About</a></li>
            <li><a href="#">Contact</a></li>
        </ul>
    </nav>
    <section id="home">
        <div class="overlay">
            <h2>Embrace the Divine Journey</h2>
            <a href="login.php">Login</a>
            <a href="signup.php">Signup</a>
        </div>
    </section>
    <footer>
        <a href="index.php">Home</a> | <a href="#">Privacy Policy</a> | <a href="#">Terms of Use</a>
    </footer>
</body>
</html>
