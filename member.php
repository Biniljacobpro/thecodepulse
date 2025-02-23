<?php include 'navbar.php'; ?>

<?php
    $members = [
        "Binil Jacob" => ["image" => "binil.jpg", "role" => "Team Lead", "skills" => "Project Management, Backend Development, Leadership"],
        "ALEENA RAICHEL ABEY" => ["image" => "aleena.jpg", "role" => "Team Member", "skills" => "Frontend Development, UI/UX Design"],
        "AMY MARIYA VB" => ["image" => "amy.jpg", "role" => "Team Member", "skills" => "Database Management, PHP Development"],
        "ANSU MARIA BENNY" => ["image" => "ansu.jpg", "role" => "Team Member", "skills" => "JavaScript, React, API Integration"],
        "JOMY GEORGE" => ["image" => "jomy.jpg", "role" => "Team Member", "skills" => "Python, Machine Learning, Data Analysis"],
        "MILAN SONY" => ["image" => "milan.jpg", "role" => "Team Member", "skills" => "Cybersecurity, Ethical Hacking"],
        "REJITH RAJ" => ["image" => "rejith.jpg", "role" => "Team Member", "skills" => "Cloud Computing, DevOps"],
        "SHIBIN SAJI" => ["image" => "shibin.jpg", "role" => "Team Member", "skills" => "Mobile App Development, Flutter"]
    ];

    $name = $_GET['name'] ?? "Unknown";
    $member = $members[$name] ?? null;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $name; ?> - Profile</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
    <div class="container py-5 text-center">
        <?php if ($member): ?>
            <div class="card mx-auto" style="max-width: 400px;">
                <img src="images/<?php echo $member['image']; ?>" class="card-img-top" alt="<?php echo $name; ?>">
                <div class="card-body">
                    <h3 class="card-title"><?php echo $name; ?></h3>
                    <h5 class="text-muted">Role: <?php echo $member['role']; ?></h5>
                    <p><strong>Skills:</strong> <?php echo $member['skills']; ?></p>
                </div>
            </div>
        <?php else: ?>
            <p class="text-danger">Member not found.</p>
        <?php endif; ?>
    </div>

    <?php include 'footer.php'; ?>
</body>
</html>
