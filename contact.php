<?php include 'navbar.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us - The Code Pulse</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/styles.css">
    <style>
        body {
            background: linear-gradient(135deg, #1f1c2c, #928dab);
            color: white;
        }
        .contact-container {
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            padding: 50px 20px;
        }
        .contact-card {
            background: rgba(255, 255, 255, 0.1);
            backdrop-filter: blur(10px);
            border-radius: 15px;
            padding: 30px;
            max-width: 600px;
            width: 100%;
            text-align: center;
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.3);
        }
        .form-control {
            background: rgba(255, 255, 255, 0.2);
            color: white;
            border: none;
        }
        .form-control::placeholder {
            color: white;
        }
        .btn-custom {
            background-color: #ff7eb3;
            border: none;
        }
        .btn-custom:hover {
            background-color: #ff5277;
        }
    </style>
</head>
<body>
    <div class="contact-container">
        <h2>Contact Us</h2>
        <p>Get in touch with The Code Pulse team.</p>
        
        <div class="contact-card">
            <form>
                <div class="mb-3">
                    <input type="text" class="form-control" placeholder="Your Name" required>
                </div>
                <div class="mb-3">
                    <input type="email" class="form-control" placeholder="Your Email" required>
                </div>
                <div class="mb-3">
                    <textarea class="form-control" rows="4" placeholder="Your Message" required></textarea>
                </div>
                <button type="submit" class="btn btn-custom w-100">Send Message</button>
            </form>
        </div>
    </div>

    <?php include 'footer.php'; ?>
</body>
</html>
