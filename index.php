<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>The Code Pulse</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/styles.css">
    <script src="https://unpkg.com/scrollreveal"></script>
</head>
<body>
    <?php include 'navbar.php'; ?>

    <header class="text-white text-center py-5" style="background: url('images/header-bg.jpg') no-repeat center center/cover;">
        <h1>Welcome to The Code Pulse</h1>
        <p>Innovating the Future of Technology</p>
    </header>

    <section class="container my-5">
        <h2 class="text-center" id="description">Description</h2>
        <p>The Code Pulse is a dynamic and innovative team of eight MCA students from Amal Jyothi College of Engineering (Autonomous), Kanjirappally. Under the expert guidance of our mentor, Amal K Jose, we are dedicated to exploring the latest advancements in software development and web technologies. Our team is passionate about building modern, scalable, and efficient digital solutions that align with industry standards and emerging trends.
</p>
<p>As part of our coursework in "Advanced Web Programming and Digital Public Infrastructure," we are committed to mastering full-stack web development, cloud computing, and digital transformation strategies. Our mission is to not only enhance our technical expertise but also contribute to the broader tech community by developing innovative and impactful projects.
</p>
<p>The Code Pulse thrives on collaboration, creativity, and continuous learning. With a strong foundation in various programming languages and frameworks, we aim to push the boundaries of what's possible in web technology. Join us on our journey as we innovate, create, and leave our mark in the world of digital solutions.</p>
    </section>

    <section class="container my-5">
        <h2 class="text-center">Powered by Bootstrap</h2>
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card shadow-lg border-0" id="bootstrap-card">
                    <div class="card-body text-center">
                        <h5 class="card-title">Built with Bootstrap</h5>
                        <p class="card-text">This website is designed with Bootstrap, ensuring a responsive and modern UI.</p>
                        <a href="https://getbootstrap.com/" target="_blank" class="btn btn-primary">Learn More</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="container my-5">
        <div class="row">
            <div class="col-md-4" id="feature1">
                <div class="card text-center shadow-sm">
                    <div class="card-body">
                        <h5 class="card-title">Responsive Design</h5>
                        <p class="card-text">Our website adapts seamlessly to all screen sizes.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4" id="feature2">
                <div class="card text-center shadow-sm">
                    <div class="card-body">
                        <h5 class="card-title">Modern UI/UX</h5>
                        <p class="card-text">Designed with the latest trends in web development.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4" id="feature3">
                <div class="card text-center shadow-sm">
                    <div class="card-body">
                        <h5 class="card-title">Optimized Performance</h5>
                        <p class="card-text">Ensuring smooth and fast user experience.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php include 'footer.php'; ?>

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            ScrollReveal().reveal('#bootstrap-card', { delay: 300, origin: 'left', distance: '50px', duration: 1000, reset: true });
            ScrollReveal().reveal('#feature1', { delay: 400, origin: 'right', distance: '50px', duration: 1000, reset: true });
            ScrollReveal().reveal('#feature2', { delay: 500, origin: 'bottom', distance: '50px', duration: 1000, reset: true });
            ScrollReveal().reveal('#feature3', { delay: 600, origin: 'left', distance: '50px', duration: 1000, reset: true });
        });
    </script>
</body>
</html>
