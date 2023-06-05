document.getElementById("login-form").addEventListener("submit", function(e) {
  e.preventDefault();
  var username = document.getElementById("login-username").value;
  var password = document.getElementById("login-password").value;

  var defaultUsername = "John Cena";
  var defaultPassword = "ucantseeme";

  if (username === defaultUsername && password === defaultPassword) {
    // Login successful
    isLoggedIn = true;
    updateLoginLink();
    window.location.href = "index.php";
  } else {
    // Invalid login
    alert("Invalid username or password. Please try again.");
  }
});

// Function to update the login link based on the user's login status
function updateLoginLink() {
  // Select the login link element
  var loginLink = document.getElementById("login-link");

  // Clear any existing content within the login link container
  loginLink.innerHTML = "";

  // Create the login/logout link based on the user's login status
  var linkText = isLoggedIn ? "Sign Out" : "Sign In";
  var linkURL = isLoggedIn ? "logout.php" : "login.php";

  // Create the link element
  var link = document.createElement("a");
  link.href = linkURL;
  link.textContent = linkText;

  // Append the link to the login link container
  loginLink.appendChild(link);
}
isLoggedIn = localStorage.getItem("isLoggedIn") === "true";
// Update the login link initially
updateLoginLink();
