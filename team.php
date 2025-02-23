<?php include 'navbar.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Team - The Code Pulse</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/styles.css">
    <script src="https://unpkg.com/scrollreveal"></script>
    <style>
        body {
            background: white;
            color: black;
        }
        .team-section {
            padding: 80px 0;
            text-align: center;
        }
        .team-container {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 30px;
        }
        .team-card {
            background: rgba(0, 0, 0, 0.05);
            border-radius: 15px;
            padding: 20px;
            text-align: center;
            width: 280px;
            transition: transform 0.3s;
            cursor: pointer;
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);
        }
        .team-card:hover {
            transform: scale(1.05);
        }
        .team-card img {
            width: 100%;
            height: 250px;
            object-fit: cover;
            border-radius: 10px;
        }
        .team-card h5 {
            margin-top: 15px;
        }
    </style>
</head>
<body>
    <header class="text-white text-center py-5" style="background: url('images/team-bg.jpg') no-repeat center center/cover;">
        <div style="background: rgba(0, 0, 0, 0.6); padding: 50px;">
            <h1>Meet Our Team</h1>
            <p>Passionate minds shaping the future of technology</p>
        </div>
    </header>

    <section class="team-section">
        <h2 class="mb-5">Our Team Members</h2>
        <div class="team-container">
            <?php
                $members = [
                    ["name" => "Binil Jacob", "image" => "binil.jpg", "role" => "Team Lead"],
                    ["name" => "ALEENA RAICHEL ABEY", "image" => "aleena.jpg", "role" => "Team Member"],
                    ["name" => "AMY MARIYA VB", "image" => "amy.jpg", "role" => "Team Member"],
                    ["name" => "ANSU MARIA BENNY", "image" => "ansu.jpg", "role" => "Team Member"],
                    ["name" => "JOMY GEORGE", "image" => "jomy.jpg", "role" => "Team Member"],
                    ["name" => "MILAN SONY", "image" => "milan.jpg", "role" => "Team Member"],
                    ["name" => "REJITH RAJ", "image" => "rejith.jpg", "role" => "Team Member"],
                    ["name" => "SHIBIN SAJI", "image" => "shibin.jpg", "role" => "Team Member"]
                ];
                foreach ($members as $member) {
                    echo "<div class='team-card' data-sr onclick=\"location.href='member.php?name={$member['name']}'\">
                            <img src='images/{$member['image']}' alt='{$member['name']}'>
                            <h5>{$member['name']}</h5>
                            <p>{$member['role']}</p>
                          </div>";
                }
            ?>
        </div>
    </section>

    <script>
        ScrollReveal().reveal('.team-card', { interval: 200, origin: 'bottom', distance: '50px', duration: 1000, reset: true });
    </script>

    <?php include 'footer.php'; ?>
</body>
</html>
