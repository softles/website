<!DOCTYPE html>
<html lang="en">
<?php include 'header.php'; ?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Softles: Our Team</title>
    <style>
        html {
            box-sizing: border-box;
        }

        *,
        *:before,
        *:after {
            box-sizing: inherit;
        }

        .column {
            float: left;
            width: 33.3%;
            margin-bottom: 16px;
            padding: 0 8px;
        }

        @media screen and (max-width: 650px) {
            .column {
                width: 100%;
                display: block;
            }
        }

        .card {
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
        }

        .container {
            padding: 0 16px;
        }

        .container::after,
        .row::after {
            content: "";
            clear: both;
            display: table;
        }

        .title {
            color: grey;
        }

    

        .team_button:hover {
            background-color: #555;
        }
    </style>
</head>

<body>

        <h2>Responsive "Meet The Team" Section</h2>
        <p>Resize the browser window to see the effect.</p>
        <br>

        <div class="row">
            <div >
                <div class="card">
                    <img src="/w3images/team1.jpg" alt="Jane" style="width:100%">
                    <div class="container">
                        <h2>Jane Doe</h2>
                        <p class="title">CEO & Founder</p>
                        <p>Some text that describes me lorem ipsum ipsum lorem.</p>
                        <p>example@example.com</p>
                        <p><button class="team_button">Contact</button></p>
                    </div>
                </div>
            </div>

            <div class="column">
                <div class="card">
                    <img src="/w3images/team2.jpg" alt="Mike" style="width:100%">
                    <div class="container">
                        <h2>Mike Ross</h2>
                        <p class="title">Art Director</p>
                        <p>Some text that describes me lorem ipsum ipsum lorem.</p>
                        <p>example@example.com</p>
                        <p><button class="team_button">Contact</team_button></p>
                    </div>
                </div>
            </div>
            <div class="column">
                <div class="card">
                    <img src="/w3images/team3.jpg" alt="John" style="width:100%">
                    <div class="container">
                        <h2>John Doe</h2>
                        <p class="title">Designer</p>
                        <p>Some text that describes me lorem ipsum ipsum lorem.</p>
                        <p>example@example.com</p>
                        <p><button class="team_button">Contact</button></p>
                    </div>
                </div>
            </div>
        </div>

        <?php include 'footer.php'; ?>
    </body>

</html>