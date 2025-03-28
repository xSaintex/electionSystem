<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CSG Elect</title>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@200;400;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;700;800;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/admin.css" />
</head>
<body>

<div class="page-container">
        <!-- Background Image -->
        <img src="https://cdn.builder.io/api/v1/image/assets/TEMP/fe992e701c7edc01644f69af503f11ed319f8132" 
             alt="CSG Logo" 
             class="background-logo" />
        
        <!-- Header Title and Divider -->
        <div class="content-wrapper">
        <section class="admin-container">
            <div class="admin-header">
                <h1 class="admin-title">Admin</h1>
                    <div class="admin-actions"></div>

<!-- School Year 2025 -->
  <div class="dropdown">
    <button class="action-button year-selector-button" id="yearDropdownButton">
        <svg class="chevron-icon" width="24" height="24" viewBox="0 0 29 24" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M7.07129 8.68604L14.1425 14.4768L21.2137 8.68604" stroke="#1E1E1E" stroke-width="4" stroke-linecap="round" stroke-linejoin="round"></path>
        </svg>
        <span class="button-text">School Year 2025</span>
    </button>
    <ul class="dropdown-menu hidden" id="yearDropdown">
    </ul>
  </div>

    </div>   
    <hr class="admin-divider" />
    </section>

    <!-- Card Details -->
    <section class="ballot-container">
  <div class="ballot-content">
    <div class="candidate-section">

    <!-- President -->
      <h2 class="position-title president-title">President</h2>
      <article class="president-card">

    <!-- More Options Button -->
      <button class="more-options-button" aria-label="More options" onclick="toggleOptions()">
    <svg width="20" height="16" viewBox="0 0 20 16" fill="none" xmlns="http://www.w3.org/2000/svg" class="more-icon">
    <path d="M9.70312 12.9345C9.2584 12.9345 8.87769 12.8078 8.56099 12.5545C8.24429 12.3012 8.08594 11.9967 8.08594 11.641C8.08594 11.2853 8.24429 10.9808 8.56099 10.7275C8.87769 10.4742 9.2584 10.3476 9.70312 10.3476C10.1479 10.3476 10.5286 10.4742 10.8453 10.7275C11.162 10.9808 11.3203 11.2853 11.3203 11.641C11.3203 11.9967 11.162 12.3012 10.8453 12.5545C10.5286 12.8078 10.1479 12.9345 9.70312 12.9345ZM9.70312 9.05415C9.2584 9.05415 8.87769 8.9275 8.56099 8.6742C8.24429 8.4209 8.08594 8.1164 8.08594 7.7607C8.08594 7.40501 8.24429 7.10051 8.56099 6.84721C8.87769 6.59391 9.2584 6.46726 9.70312 6.46726C10.1479 6.46726 10.5286 6.59391 10.8453 6.84721C11.162 7.10051 11.3203 7.40501 11.3203 7.7607C11.3203 8.1164 11.162 8.4209 10.8453 8.6742C10.5286 8.9275 10.1479 9.05415 9.70312 9.05415ZM9.70312 5.17381C9.2584 5.17381 8.87769 5.04716 8.56099 4.79386C8.24429 4.54056 8.08594 4.23606 8.08594 3.88036C8.08594 3.52466 8.24429 3.22016 8.56099 2.96686C8.87769 2.71356 9.2584 2.58691 9.70312 2.58691C10.1479 2.58691 10.5286 2.71356 10.8453 2.96686C11.162 3.22016 11.3203 3.52466 11.3203 3.88036C11.3203 4.23606 11.162 4.54056 10.8453 4.79386C10.5286 5.04716 10.1479 5.17381 9.70312 5.17381Z" fill="#1D1B20"></path>
    </svg>
    </button>

    <!-- Dropdown Menu for More Options -->
    <div class="options-menu hidden" id="optionsMenu">
        <button class="option-button">Edit</button>
            <button class="option-button">Delete</button>
    </div>

        <figure class="candidate-figure">
          <img
            src="https://cdn.builder.io/api/v1/image/assets/aa78da9d1a8c4ca2babcebcf463f7106/567fdf519eb08658d3207d7508f0b1db1ca7b3a2?placeholderIfAbsent=true"
            class="president-candidate-image"
            alt="Presidential Candidate"
          />
          <figcaption class="president-candidate-details">
            Name
            <br />
            Program
            <br />
            Partylist
          </figcaption>
        </figure>
      </article>
    </div>
    <button class="president-icon-button" id="presidentIconButton">
    <img
    src="https://cdn.builder.io/api/v1/image/assets/aa78da9d1a8c4ca2babcebcf463f7106/d104a5502307640106c3586dc9010ea9a04b4473?placeholderIfAbsent=true"
    class="add-president"
    alt="plus/add"
    />
    </button>

    <!-- Vice President -->
    <h2 class="position-title vice-president-title">Vice President</h2>
    <button class="vice-icon-button" id="viceIconButton">
    <img
    src="https://cdn.builder.io/api/v1/image/assets/aa78da9d1a8c4ca2babcebcf463f7106/d104a5502307640106c3586dc9010ea9a04b4473?placeholderIfAbsent=true"
    class="add-vice"
    alt="plus/add"
    />
    </button>

    <!-- Secretary -->
    <h2 class="position-title secretary-title">Secretary</h2>
    <button class="secretary-icon-button" id="secretaryIconButton">
    <img
    src="https://cdn.builder.io/api/v1/image/assets/aa78da9d1a8c4ca2babcebcf463f7106/d104a5502307640106c3586dc9010ea9a04b4473?placeholderIfAbsent=true"
    class="add-secretary"
    alt="plus/add"
    />
    </button>

    <!-- Treasurer -->
    <h2 class="position-title treasurer-title">Treasurer</h2>
    <button class="treasurer-icon-button" id="treasurerIconButton">
    <img
    src="https://cdn.builder.io/api/v1/image/assets/aa78da9d1a8c4ca2babcebcf463f7106/d104a5502307640106c3586dc9010ea9a04b4473?placeholderIfAbsent=true"
    class="add-treasurer"
    alt="plus/add"
    />
    </button>

    <!-- Auditor -->
    <h2 class="position-title auditor-title">Auditor</h2>
    <button class="auditor-icon-button" id="auditorIconButton">
    <img
    src="https://cdn.builder.io/api/v1/image/assets/aa78da9d1a8c4ca2babcebcf463f7106/d104a5502307640106c3586dc9010ea9a04b4473?placeholderIfAbsent=true"
    class="add-auditor"
    alt="plus/add"
    />
    </button>

    <!-- Student PIO -->
    <h2 class="position-title PIO-title">Student PIO</h2>
    <button class="PIO-icon-button" id="PIOIconButton">
    <img
    src="https://cdn.builder.io/api/v1/image/assets/aa78da9d1a8c4ca2babcebcf463f7106/d104a5502307640106c3586dc9010ea9a04b4473?placeholderIfAbsent=true"
    class="add-PIO"
    alt="plus/add"
    />
    </button>

    <!-- Business Manager -->
    <h2 class="position-title BusMan-title">Business Manager</h2>
    <button class="BusMan-icon-button" id="BusManIconButton">
    <img
    src="https://cdn.builder.io/api/v1/image/assets/aa78da9d1a8c4ca2babcebcf463f7106/d104a5502307640106c3586dc9010ea9a04b4473?placeholderIfAbsent=true"
    class="add-BusMan"
    alt="plus/add"
    />
    </button>

</section>

</div>

<!-- JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<script>
    // School Year Dropdown
document.addEventListener("DOMContentLoaded", function () {
    const dropdownButton = document.getElementById("yearDropdownButton");
    const dropdownMenu = document.getElementById("yearDropdown");

    for (let year = 2025; year <= 2035; year++) {
        let listItem = document.createElement("li");
        listItem.textContent = `School Year ${year}`;
        listItem.addEventListener("click", function () {
            dropdownButton.querySelector(".button-text").textContent = `School Year ${year}`;
            dropdownMenu.classList.remove("show"); 
        });
        dropdownMenu.appendChild(listItem);
    }

    dropdownButton.addEventListener("click", function (event) {
        event.stopPropagation();
        dropdownMenu.classList.toggle("show");
    });

    document.addEventListener("click", function (event) {
        if (!dropdownButton.contains(event.target)) {
            dropdownMenu.classList.remove("show");
        }
    });
});

// More Options Dropdown 
function toggleOptions() {
    let menu = document.getElementById("optionsMenu");
    menu.classList.toggle("hidden");
}

document.addEventListener("click", function (event) {
    let menu = document.getElementById("optionsMenu");
    let button = document.querySelector(".more-options-button");

    if (!menu.contains(event.target) && !button.contains(event.target)) {
        menu.classList.add("hidden");
    }
});
</script>
</body>
</html>