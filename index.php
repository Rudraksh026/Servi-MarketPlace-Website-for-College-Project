<!DOCTYPE html>
<html lang="en">

<head>
    <?php
    include 'icon.php';
    ?>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WELCOME | ALSP</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Varela+Round&display=swap');

        * {
            font-family: 'Varela Round', sans-serif;
            box-sizing: border-box;
        }

        .index_main {
            margin: auto;
            width: 90%;
            display: flex;
            margin-top: 50px;
        }

        .index_img {
            filter: drop-shadow(10px 10px 0px black);
        }

        .index_left,
        .index_right {
            max-width: 50%;
            color: black;
        }

        h1 {
            font-size: 45px;
            font-weight: 900;
        }

        p {
            font-size: 20px;
            margin: 5px 0px;
            font-weight: 100;
        }

        button {
            margin: 25px 0px;
            background-color: #094f5f;
            padding: 20px;
            border: none;
            transition: 0.7s ease-in-out;
        }

        a button {
            text-decoration: none;
            color: white;
        }

        button:hover {
            box-shadow: 7px 7px 0px black;
            cursor: pointer;
        }

        @media screen and (max-width:600px) {
            .index_main {
                flex-direction: column;
            }

            .index_left,
            .index_right {
                max-width: 100%;
            }
        }
    </style>
</head>

<body>
    <div class="index_main">
        <img class="index_left index_img" src="img/index_main_service.png" alt="" width="100%">
        <div class="index_right">
            <h1><b>Service <br>MarketPlace</h1>
            <h3>You can find the Service at Tehri Gharwal District</h3>
            <p>We connect service providers with consumers or businesses in need of specific services. These platforms create a digital marketplace where individuals or companies can offer their skills, expertise, or services, and potential clients can find and hire them.
            </p>
            <a href="login.php"><button>
                    <p> Find a Services</p>
                </button></a>
        </div>
    </div>
</body>

</html>