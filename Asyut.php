<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
    <link rel="stylesheet" href="/HTML/CSS/Style.css" />
    <link rel="icon" type="image/png" sizes="32x32" href="/HTML/Images/favicon.ico.png">

    <title>Donors database</title>
    <style>
        table {
            border-collapse: collapse;
            width: 100%;
            color: #588c7e;
            font-family: sans-serif;
            font-size: 15px;
            text-align: left;
        }

        th {
            background-color: #790000;
            color: white;
            text-align: center;
        }

        tr {
            text-align: center;
        }

        tr:nth-child(even) {
            background-color: #f2f2f2
        }
    </style>
</head>

<body>
    <!-- nav-bar -->
    <!-- nav-bar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container ps-lg-4 ms-lg-4">
            <a href="/HTML/index.html" class="navbar-brand">
                <img class="logo" src="/HTML/images/Logo.jpg" alt="LOGO" />
            </a>
            <!-- toggler -->
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#nav-menu">
                <span class="navbar-toggler-icon"></span>
            </button>
            <!-- nav-list -->
            <div class="collapse navbar-collapse align-center justify-content-end" id="nav-menu">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a href="/HTML/index.html" class="nav-link">Home</a>
                    </li>
                    <!-- Dropdown -->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">
                            Learn
                        </a>
                        <ul class="dropdown-menu">
                            <li>
                                <h6 class="dropdown-header fw-bold">
                                    Learn more about
                                    <span class="text-danger">blood donation</span>
                                </h6>
                            </li>
                            <li>
                                <hr class="dropdown-divider" />
                            </li>
                            <li>
                                <a class="dropdown-item" href="/HTML/Collateral/Impact.html">Impact of donation</a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="/HTML/Collateral/Benefits.html">Donation benefits</a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="/HTML/Collateral/Process.html">Donation process</a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="/HTML/Collateral/Blood-types/Blood-types.html">Blood types</a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a href="/HTML/Collateral/Eligibility.html" class="nav-link">Eligibility</a>
                    </li>
                    <li class="nav-item">
                        <a href="/HTML/Collateral/Donation form/Donation-form.html" class="nav-link">Donation form</a>
                    </li>
                    <li class="nav-item">
                        <a href="/HTML/Collateral/Map.html" class="nav-link">Nearest location
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-geo" viewBox="0 0 16 16">
                                <path fill-rule="evenodd" d="M8 1a3 3 0 1 0 0 6 3 3 0 0 0 0-6zM4 4a4 4 0 1 1 4.5 3.969V13.5a.5.5 0 0 1-1 0V7.97A4 4 0 0 1 4 3.999zm2.493 8.574a.5.5 0 0 1-.411.575c-.712.118-1.28.295-1.655.493a1.319 1.319 0 0 0-.37.265.301.301 0 0 0-.057.09V14l.002.008a.147.147 0 0 0 .016.033.617.617 0 0 0 .145.15c.165.13.435.27.813.395.751.25 1.82.414 3.024.414s2.273-.163 3.024-.414c.378-.126.648-.265.813-.395a.619.619 0 0 0 .146-.15.148.148 0 0 0 .015-.033L12 14v-.004a.301.301 0 0 0-.057-.09 1.318 1.318 0 0 0-.37-.264c-.376-.198-.943-.375-1.655-.493a.5.5 0 1 1 .164-.986c.77.127 1.452.328 1.957.594C12.5 13 13 13.4 13 14c0 .426-.26.752-.544.977-.29.228-.68.413-1.116.558-.878.293-2.059.465-3.34.465-1.281 0-2.462-.172-3.34-.465-.436-.145-.826-.33-1.116-.558C3.26 14.752 3 14.426 3 14c0-.599.5-1 .961-1.243.505-.266 1.187-.467 1.957-.594a.5.5 0 0 1 .575.411z" />
                            </svg>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <h1 class="m-4 display-3">Asyut Hospital Index</h1>
    <table class="p-3">
        <tr>
            <th>id</th>
            <th>A+</th>
            <th>A-</th>
            <th>B+</th>
            <th>B-</th>
            <th>O+</th>
            <th>O-</th>
            <th>AB+</th>
            <th>AB-</th>
            <th>Plasma</th>
            <th>Platelets</th>
        </tr>
        <?php
        $conn = mysqli_connect("localhost", "root", "", "wbdms");
        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
        $sql = "SELECT id,Ap,Am,Bp,Bm,Op,Om,ABp,ABm,Plasma,Platelets FROM mansoura
WHERE id=3";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            // output data of each row
            while ($row = $result->fetch_assoc()) {
                echo "<tr><td class='p-3'>" . $row["id"] . "</td><td>" . $row["Ap"] . "</td><td>" . $row["Am"] . "</td><td>" . $row["Bp"] . "</td><td>" . $row["Bm"] . "</td><td>" . $row["Op"] . "</td><td>" . $row["Om"] . "</td><td>" . $row["ABp"] . "</td><td>" . $row["ABm"] . "</td><td>" . $row["Plasma"] . "</td><td>"
                    . $row["Platelets"] . "</td></tr>";
            }
            echo "</table>";
        } else {
            echo "0 results";
        }
        $conn->close();
        ?>
    </table>
    <br>
    <br>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>