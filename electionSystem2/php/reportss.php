<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CSG Reports</title>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@200;400;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;700;800;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/reportss.css" />
</head>
<body>

<div class="page-container">
        <!-- Background Image -->
        <img src="https://cdn.builder.io/api/v1/image/assets/TEMP/fe992e701c7edc01644f69af503f11ed319f8132" 
             alt="CSG Logo" 
             class="background-logo" />
        
        <!-- Header Title and Divider -->
        <div class="content-wrapper">
        <section class="reports-container">
            <div class="reports-header">
                <h1 class="reports-title">Reports</h1>
                    <div class="reports-actions"></div>

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
    <hr class="reports-divider" />

    <!-- List of Candidates -->
    <section class="candidate-comparison">
      <header class="position-title">Position</header>

      <article class="first-candidate-container">
        <div class="candidate-info-wrapper">
          <div class="candidate-profile">
            <figure>
              <img
                src="https://cdn.builder.io/api/v1/image/assets/aa78da9d1a8c4ca2babcebcf463f7106/9f352b90667e59892919b575fe8585a0e5532e02?placeholderIfAbsent=true"
                alt="Candidate 1 profile picture"
                class="candidate-image"
              />
            </figure>
            <h2 class="candidate-name">
              Candidate 1
              <br />
              Partylist
            </h2>
          </div>
          <img
            src="https://cdn.builder.io/api/v1/image/assets/aa78da9d1a8c4ca2babcebcf463f7106/f16f347d2a7c77f0e0689b9aa03d4f61c7f03101?placeholderIfAbsent=true"
            alt="Vote bar for Candidate 1"
            class="vote-bar"
          />
        </div>
        <p class="vote-count">1,225 votes</p>
      </article>

      <article class="second-candidate-container">
        <figure>
          <img
            src="https://cdn.builder.io/api/v1/image/assets/aa78da9d1a8c4ca2babcebcf463f7106/d6492c6a2c8dffd895883c811a5c24812930eff8?placeholderIfAbsent=true"
            alt="Candidate 2 profile picture"
            class="second-candidate-image"
          />
        </figure>
        <img
          src="https://cdn.builder.io/api/v1/image/assets/aa78da9d1a8c4ca2babcebcf463f7106/3c14e12fa43872f22bfab93e042c62e984df38ba?placeholderIfAbsent=true"
          alt="Vote bar for Candidate 2"
          class="second-vote-bar"
        />
        <p class="vote-percentage">30%</p>
      </article>

      <h2 class="second-candidate-name">
        Candidate 2
        <br />
        Partylist
      </h2>
    </section>

    <!-- Dropdown -->
    <section class="dark-background-container">
        <section class="custom-drop-container">
            <div class="custom-dropdown-wrapper">
                <button class="dropdown-item" id="customDemoBtn">
                    <svg class="drop-icon" viewBox="0 0 30 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M7.37744 7.875L14.7547 13.125L22.1319 7.875" stroke="white" stroke-width="4" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                    <span class="dropdown-labelDemo">Demographics</span>
                </button>
                <ul class="custom-dropdown-menu" id="customDemoMenu">
                    <li>Program</li>
                    <li>Year Level</li>
                    <li>Gender</l>
                </ul>
            </div>

            <div class="custom-dropdown-wrapper">
                <button class="dropdown-item" id="customPosiBtn">
                    <svg class="down-icon" viewBox="0 0 30 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M7.37744 7.875L14.7547 13.125L22.1319 7.875" stroke="white" stroke-width="4" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                    <span class="dropdown-labelPosi">Position</span>
                </button>
                <ul class="custom-dropdown-menu" id="customPosiMenu">
                    <li>President</li>
                    <li>Vice President</li>
                    <li>Secretary</li>
                    <li>Treasurer</li>
                    <li>Auditor</li>
                    <li>Student PIO</li>
                    <li>Business Manager</li>
                </ul>
            </div>
        </section>

      <!-- Demographics-->
      <div class="background-transparentWrapper">
        <svg
          width="1157"
          height="436"
          viewBox="0 0 1157 436"
          fill="none"
          xmlns="http://www.w3.org/2000/svg"
          class="background-svg"
        >
          <path
            opacity="0.8"
            d="M0 20C0 8.9543 8.95431 0 20 0H1137C1148.04 0 1157 8.95431 1157 20V416C1157 427.046 1148.04 436 1137 436H19.9999C8.95425 436 0 427.046 0 416V20Z"
            fill="#1E1E1E"
            fill-opacity="0.71"
          ></path>
        </svg>
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

// Demographics and Position Dropdown 
const demoBtn = document.getElementById('customDemoBtn');
  const posiBtn = document.getElementById('customPosiBtn');
  const demoMenu = document.getElementById('customDemoMenu');
  const posiMenu = document.getElementById('customPosiMenu');

  demoBtn.addEventListener('click', (e) => {
    e.stopPropagation();
    demoMenu.classList.toggle('active');
    posiMenu.classList.remove('active'); 
  });

  posiBtn.addEventListener('click', (e) => {
    e.stopPropagation();
    posiMenu.classList.toggle('active');
    demoMenu.classList.remove('active'); 
  });

  document.addEventListener('click', () => {
    demoMenu.classList.remove('active');
    posiMenu.classList.remove('active');
  });
</script>
</body>
</html>