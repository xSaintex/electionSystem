<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CSG Results</title>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@200;400;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;700;800;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/results.css" />
</head>
<body>
    <!-- Header Navigation -->
    <nav class="navbar">
        <div class="nav-links">
            <a href="#" class="nav-link">About</a>
            <a href="#" class="nav-link">Contact</a>
            <a href="#" class="nav-link">Login</a>
        </div>
    </nav>
    
    <div class="page-container">
        <!-- Background Image -->
        <img src="https://cdn.builder.io/api/v1/image/assets/TEMP/fe992e701c7edc01644f69af503f11ed319f8132" 
             alt="CSG Logo" 
             class="background-logo" />
        
        <!-- Header Title and Divider -->
        <section class="results-container">
            <div class="results-header">
                <h1 class="results-title">Results</h1>
                
                <button class="action-button year-selector-button">
                    <svg class="chevron-icon" width="24" height="24" viewBox="0 0 29 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M7.07129 8.68604L14.1425 14.4768L21.2137 8.68604" stroke="#1E1E1E" stroke-width="4" stroke-linecap="round" stroke-linejoin="round"></path>
                    </svg>
                    <span class="button-text">School Year 2025</span>
                </button>
            </div>
            <hr class="results-divider" />
        </section>
        
        <!-- Candidate Results -->
        <article class="profile-card">
            <img src="https://cdn.builder.io/api/v1/image/assets/aa78da9d1a8c4ca2babcebcf463f7106/b3db0e8f6c044223994d646c2469da29dc5e5d26?placeholderIfAbsent=true" 
                 class="profile-image" 
                 alt="Player" />
            <p class="profile-position">Postition</p>
            <p class="profile-name">Name</p>
        </article>
        
        <!-- Statistics -->
        <section class="statistics-container">
            <h2 class="statistics-title">Statistics</h2>
        </section>
        
        <!-- Footer -->
        <footer class="candidate-footer">
            <hr class="divider" />
            <p class="system-name">College of Computing Education</p>
        </footer>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
