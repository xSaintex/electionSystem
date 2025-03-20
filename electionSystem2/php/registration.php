<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CSG Registration</title>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@200;400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/registration.css" />
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
    
    <!-- CSG LOGO -->
    <div class="content-wrapper">
        <figure class="image-container">
            <img src="csglogo_nobg.png" alt="Featured image" class="responsive-image">
        </figure>
        
        <!-- REGISTRATION CONTAINER -->
        <main class="form-container">
            <form class="registration-form">
                <h1 class="form-title">Registration Form</h1>
                
                <div class="form-row">
                    <div class="form-group full-width">
                        <label class="form-label">Name</label>
                        <div class="name-inputs">
                            <input type="text" placeholder="First name" class="form-input" />
                            <input type="text" placeholder="Last Name" class="form-input" />
                            <input type="text" placeholder="M.I" class="form-input" />
                        </div>
                    </div>
                </div>
                
                <div class="form-row">
                    <div class="form-group">
                        <label class="form-label">ID Number</label>
                        <input type="text" placeholder="ID Number" class="form-input" />
                    </div>
                    <div class="form-group">
                        <label class="form-label">Student Email</label>
                        <input type="email" placeholder="Email" class="form-input" />
                    </div>
                </div>
                
                <div class="form-row">
                    <div class="form-group">
                        <label class="form-label">Program</label>
                        <input type="text" placeholder="Program" class="form-input" />
                    </div>
                    <div class="form-group">
                        <label class="form-label">Year Level</label>
                        <input type="number" placeholder="Year Level" class="form-input" min="1" max="5" />
                    </div>
                </div>
                
                <div class="form-row">
                    <div class="form-group">
                        <label class="form-label">Contact Number</label>
                        <input type="tel" placeholder="Enter contact number" class="form-input" inputmode="numeric" pattern="[0-9]*" oninput="this.value = this.value.replace(/[^0-9]/g, '')" />
                    </div>
                    <div class="form-group">
                        <label class="form-label">Date of Birth</label>
                        <input type="date" placeholder="mm/dd/yy" class="form-input" />
                    </div>
                </div>
                
                <div class="form-row">
                    <div class="form-group">
                        <label class="form-label">Enter Password</label>
                        <input type="password" placeholder="6-12 characters" class="form-input" />
                    </div>
                    <div class="form-group">
                        <label class="form-label">Confirm Password</label>
                        <input type="password" placeholder="6-12 characters" class="form-input" />
                    </div>
                </div>
                
                <div class="button-container">
                    <button type="submit" class="register-button">Register</button>
                </div>
            </form>
        </main>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>