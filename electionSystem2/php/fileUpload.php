<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CSG File Upload</title>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@200;400;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;700;800;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/fileUpload.css" />
</head>
<body>

<div class="page-container">
        <!-- Background Image -->
        <img src="https://cdn.builder.io/api/v1/image/assets/TEMP/fe992e701c7edc01644f69af503f11ed319f8132" 
             alt="CSG Logo" 
             class="background-logo" />
        
        <!-- Header Title and Divider -->
        <div class="content-wrapper">
        <section class="upload-container">
            <div class="upload-header">
                <h1 class="upload-title">File Upload</h1>
                    <div class="upload-actions"></div>

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
    <hr class="upload-divider" />

    <!-- File Upload/Generate -->
    <section class="file-upload-container">
  <div class="upload-panel">
    <button class="upload-button">
      <strong>Upload a File</strong>
    </button>
    <div class="input-controls">
      <div class="file-input-wrapper">
        <input type="text" class="file-input" placeholder="File Name" />
      </div>
      <button class="generate-button">Generate Table</button>
    </div>
  </div>
</section>


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
</script>
</body>
</html>