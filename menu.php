<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MENU</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: linear-gradient(to right, #FFA500, #FF6347); /* Orange gradient */
            margin: 0;
            padding: 0;
            color: #fff;
        }

        .header {
            background-color: #FF6347; /* Tomato red */
            color: white;
            text-align: center;
            padding: 5px;
            font-size: 2rem;
            letter-spacing: 2px;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);
        }

        .container {
            max-width: 1000px;
            margin: 0px auto;
            padding: 0px;
            background-image: url('img/imgb.JPG'); /* Add your image URL here */
            background-size: cover;
            background-position: center; /* Align image at the top */
            background-repeat: no-repeat;
            background-attachment: fixed; /* Fixed background to avoid scrolling with content */
            border-radius: 12px;
            box-shadow: 0 12px 24px rgba(0, 0, 0, 0.1);
        }

        .btn-container {
            display: flex;
            flex-direction: column;
            gap: 15px;
            align-items: center;
            padding: 20px 0;
        }

        .btn {
            background-color: #FF6347; /* Tomato red */
            color: white;
            padding: 15px 30px;
            border: none;
            border-radius: 8px;
            cursor: pointer;
            font-size: 1.1rem;
            text-align: center;
            transition: all 0.3s ease;
            width: 80%;
            max-width: 400px;
            text-decoration: none;
        }

        .btn:hover {
            background-color: #e53e3e; /* Slightly darker red on hover */
            transform: scale(1.05);
        }

        .home-btn {
            position: absolute;
            top: 20px;
            right: 20px;
            background-color: #333;
            padding: 10px 20px;
            border-radius: 8px;
            color: #fff;
            font-size: 1rem;
            text-decoration: none;
            transition: background-color 0.3s;
        }

        .home-btn:hover {
            background-color: #444;
        }

        /* Responsive adjustments */
        @media (max-width: 768px) {
            .container {
                padding: 15px;
            }

            .btn-container {
                padding: 10px;
            }

            .btn {
                width: 90%;
                padding: 12px;
            }
        }

        /* Styling for images */
        .image-gallery {
            display: flex;
            justify-content: center;
            gap: 20px;
            margin-top: 20px;
            flex-wrap: nowrap; /* Prevent wrapping */
        }

        .image-gallery a {
            text-align: center;
            display: block;
            width: 300px; /* Set width to make images equal size */
        }

        .image-gallery img {
            width: 100%;
            height: auto;
            border-radius: 8px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
        }

        .image-gallery figcaption {
            margin-top: 10px;
            color: #fff;
            font-size: 1.2rem;
            font-weight: bold;
            text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.5);
        }
    </style>
</head>
<body>

<div class="header">
    <h1>Sri Adichunchanagiri Kshethra</h1>
</div>

<div class="container">
    <a href="index.php" class="btn home-btn">LOG OUT</a>
    <div class="btn-container">
        <a href="hall.php" class="btn">MARRIAGE HALL DETAILS</a>
        <a href="priest.php" class="btn">PRIEST DETAILS</a>
        <a href="seva.php" class="btn">SEVA DETAILS</a>
        <a href="special.php" class="btn">SPECIAL EVENT DETAILS</a>
    </div>
</div>

<!-- Image Gallery Section -->
<div class="image-gallery">
    <figure>
        <a href="hall.php">
            <img src="img/marriage.jpg" alt="Marriage Hall">
            <figcaption>Marriage Hall Details</figcaption>
        </a>
    </figure>
    <figure>
        <a href="priest.php">
            <img src="img/priests.jpg" alt="Priests">
            <figcaption>Priest Details</figcaption>
        </a>
    </figure>
    <figure>
        <a href="seva.php">
            <img src="img/seva.jpg" alt="Seva">
            <figcaption>Seva Details</figcaption>
        </a>
    </figure>
    <figure>
        <a href="special.php">
            <img src="img/events.jpg" alt="Special Events">
            <figcaption>Special Event Details</figcaption>
        </a>
    </figure>
</div>

</body>
</html>
