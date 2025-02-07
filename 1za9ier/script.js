// Navigate to a specific page
function navigateTo(pageUrl) {
  window.location.href = pageUrl; // Redirect to the specified URL
}

// Show specific page and hide others
function showPage(pageId) {
  document.querySelectorAll('.page').forEach(page => {
      page.classList.remove('visible');
  });
  document.getElementById(pageId).classList.add('visible');
}

// Toggle Login Modal (not used in this case anymore)
function toggleLoginModal() {
  const modal = document.getElementById('login-modal');
  modal.classList.toggle('hidden');
}

// Open Sign In Page on Login Button Click
document.addEventListener("DOMContentLoaded", function() {
  document.querySelector('.login-button').addEventListener("click", function() {
      window.location.href = "signin.php"; // Redirect to signin.php
  });
});

// Toogle visibility for password field
const eyeIcon = document.getElementById("eye");
const passwordField = document.getElementById("password");
if (eyeIcon) {
  eyeIcon.addEventListener("click", () => {
      if (passwordField.type === "password" && passwordField.value) {
          passwordField.type = "text";
          eyeIcon.classList.remove("fa-eye");
          eyeIcon.classList.add("fa-eye-slash");
      } else {
          passwordField.type = "password";
          eyeIcon.classList.remove("fa-eye-slash");
          eyeIcon.classList.add("fa-eye");
      }
  });
}

// Function to show and hide collections based on category
function showCategory(category) {
  var menContent = document.getElementById("men-collection");
  var womenContent = document.getElementById("women-collection");

  if (category === "men") {
      menContent.classList.remove("hidden");
      womenContent.classList.add("hidden");
  } else if (category === "women") {
      womenContent.classList.remove("hidden");
      menContent.classList.add("hidden");
  }
}

// Highlight the button for the current page
document.addEventListener('DOMContentLoaded', () => {
  const currentPage = window.location.pathname.split('/').pop(); // Get the current page name
  const navButtons = document.querySelectorAll('.nav-button'); // Select all navigation buttons

  navButtons.forEach(button => {
      // Compare the current page with the button's data-page attribute
      if (button.getAttribute('data-page') === currentPage) {
          button.classList.add('active');
      }
  });
});

// Cart Page Confirm Order Action
document.getElementById("pay-order")?.addEventListener("click", function() {
  alert("Your order has been placed!");
});

// Function to navigate directly to product pages
function navigateToProduct(productPage) {
  window.location.href = productPage;
}




