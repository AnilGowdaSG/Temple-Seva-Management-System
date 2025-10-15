<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Marriage Hall Management</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #FFF8E1; /* Light Cream */
            display: flex;
        }

        /* Sidebar Navigation */
        nav {
            background-color: #FF6F00; /* Bright Orange */
            color: white;
            width: 200px; /* Reduced width */
            height: 100vh;
            padding-top: 20px;
            position: fixed;
            top: 0;
            left: 0;
            box-shadow: 2px 0 8px rgba(0, 0, 0, 0.2);
        }

        nav a {
            color: white;
            text-decoration: none;
            padding: 15px;
            display: block;
            font-size: 18px;
            border-bottom: 1px solid #FF8F00;
            transition: background-color 0.3s ease;
        }

        nav a:hover {
            background-color: #FF8F00; /* Darker orange on hover */
        }

        /* Content Section */
        .content {
            margin-left: 220px; /* Adjusted margin for smaller sidebar */
            width: calc(100% - 220px); /* Adjusted to make more space for table */
            padding: 40px;
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        /* Header */
        header {
            background-color: #FF8F00; /* Darker Orange */
            color: white;
            padding: 15px;
            width: 100%;
            display: flex;
            justify-content: center;
            position: fixed;
            top: 0;
            left: 220px; /* Adjusted header position */
            z-index: 10;
        }

        h1 {
            margin: 0;
            font-size: 24px;
        }

        /* Search Bar and Button */
        .search-container {
            margin-top: 80px; /* Space below header */
            margin-bottom: 30px;
            display: flex;
            justify-content: center;
            gap: 15px;
        }

        input[type="text"] {
            padding: 12px;
            font-size: 16px;
            width: 300px;
            border-radius: 8px;
            border: 1px solid #bbb;
            outline: none;
            transition: border-color 0.3s ease;
        }

        input[type="text"]:focus {
            border-color: #FF8F00;
        }

        button {
            padding: 12px 20px;
            background-color: #FF8F00; /* Darker Orange */
            color: white;
            border: none;
            border-radius: 8px;
            font-size: 16px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        button:hover {
            background-color: #FF6F00; /* Darker shade on hover */
        }

        /* Table Styling */
        table {
            width: 95%; /* Increased table width */
            margin-top: 40px;
            border-collapse: collapse;
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
        }

        th, td {
            padding: 15px;
            text-align: left;
            font-size: 16px;
            border-bottom: 1px solid #ddd;
        }

        th {
            background-color: #FF8F00; /* Darker Orange */
            color: white;
        }

        tr:nth-child(even) {
            background-color: #f9f9f9; /* Light gray for even rows */
        }

        tr:hover {
            background-color: #f1f1f1;
        }

        /* No Results Text */
        .no-results {
            text-align: center;
            font-size: 18px;
            color: #FF6F00;
            margin-top: 20px;
        }

    </style>
</head>
<body>

    <!-- Sidebar -->
    <nav>
        <a href="menu.php">Menu</a>
        <a href="u3.php">Update</a>
        <a href="del3.php">Delete</a>
        <a href="in3.php">Insert</a>
    </nav>

    <!-- Main Content -->
    <div class="content">
        <header>
            <h1>Marriage Hall Management</h1>
        </header>

        <!-- Search Bar -->
        <div class="search-container">
            <input type="text" id="hallSearchInput" placeholder="Search by Hall Name">
            <button onclick="searchHall()">Search</button>
        </div>

        <?php
        include("database.php");

        $sql = "SELECT * FROM MarriageHall";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            echo "<table>
                    <tr>
                        <th>Hall ID</th>
                        <th>Hall Name</th>
                        <th>Capacity</th>
                        <th>Amenities</th>
                        <th>Booking Date</th>
                        <th>Booking Time</th>
                        <th>Manager ID</th>
                    </tr>";

            while($row = $result->fetch_assoc()) {
                echo "<tr>
                        <td>".$row["HallID"]."</td>
                        <td>".$row["HallName"]."</td>
                        <td>".$row["Capacity"]."</td>
                        <td>".$row["Amenities"]."</td>
                        <td>".$row["BookingDate"]."</td>
                        <td>".$row["BookingTime"]."</td>
                        <td>".$row["ManagerID"]."</td>
                    </tr>";
            }
            echo "</table>";
        } else {
            echo "<p class='no-results'>No halls found.</p>";
        }

        $conn->close();
        ?>
    </div>

    <script>
        function searchHall() {
            var input, filter, table, tr, td, i, txtValue;
            input = document.getElementById("hallSearchInput");
            filter = input.value.toUpperCase();
            table = document.querySelector("table");
            tr = table.getElementsByTagName("tr");

            for (i = 1; i < tr.length; i++) {
                td = tr[i].getElementsByTagName("td")[1]; // Hall Name column
                if (td) {
                    txtValue = td.textContent || td.innerText;
                    if (txtValue.toUpperCase().indexOf(filter) > -1) {
                        tr[i].style.display = "";
                    } else {
                        tr[i].style.display = "none";
                    }
                }
            }
        }
    </script>
</body>
</html>
