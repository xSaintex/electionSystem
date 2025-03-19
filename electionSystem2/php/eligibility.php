<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Check Eligibility</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@200;400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/eligibility.css" />
</head>
<body>

    <!-- HEADER TAB -->
    <nav class="navbar">
        <div class="nav-links">
            <a href="#" class="nav-link">About</a>
            <a href="#" class="nav-link">Contact</a>
            <a href="#" class="nav-link">Login</a>
        </div>
    </nav>

    <!-- BACKGROUND COLOR -->
    <div class="eligibility"></div>

    <!-- MAIN CONTENT CONTAINER -->
    <div class="content-container">

        <!-- Image Container -->
        <div class="image-container">
            <img src="csglogo_nobg.png" alt="Centered Image" class="responsive-image">
        </div>

        <!-- Eligibility Check Section -->
        <section class="eligibility-container">
            <div class="eligibility-wrapper">
                <h2 class="eligibility-title">Check Eligibility</h2>

                <form class="eligibility-form">
                    <label for="student-id" class="form-label">ID Number</label>
                    
                    <div class="input-wrapper">
                        <input type="text" id="student-id" placeholder="Student Number" class="student-input" />
                    </div>

                    <button type="submit" class="check-button">CHECK ELIGIBILITY</button>
                </form>
            </div>
        </section>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
