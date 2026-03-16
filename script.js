// Contact form / message
const msgBTN = document.getElementById("msgBtn");
const msgName = document.getElementById("name");
const msgEmail = document.getElementById("msgemail");
const message = document.getElementById("message");

if (msgBTN) {
  msgBTN.addEventListener("click", (e) => {
    if (e && e.preventDefault) e.preventDefault();

    if (
      !msgName?.value.trim() ||
      !msgEmail?.value.trim() ||
      !message?.value.trim()
    ) {
      alert("Please fill out all message fields before sending.");
      return;
    }

    alert("Thank you for your message! We'll get back to you soon.");
  });
}

// home
const viewmoreButtons = document.getElementsByClassName("viewmore");

Array.from(viewmoreButtons).forEach((btn) => {
  btn.addEventListener("click", () => {
    alert("View more clicked!");
  });
});

const signupForm = document.getElementById("signupForm");
const fullname = document.getElementById("fullname");
const email = document.getElementById("email");
const phone = document.getElementById("phone");
const address = document.getElementById("address");
const role = document.getElementById("role");
const password = document.getElementById("password");
const confirmPassword = document.getElementById("confirmPassword");

if (signupForm) {
  signupForm.addEventListener("submit", (e) => {
    e.preventDefault();

    if (!fullname.value.trim()) {
      alert("Full Name is required");
      return;
    }

    if (!email.value.trim()) {
      alert("Email is required");
      return;
    }

    const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    if (!emailRegex.test(email.value)) {
      alert("Please enter a valid email address");
      return;
    }

    if (!phone.value.trim()) {
      alert("Phone number is required");
      return;
    }

    if (!address.value.trim()) {
      alert("Address is required");
      return;
    }

    if (!role.value) {
      alert("Please select a role");
      return;
    }

    if (!password.value) {
      alert("Password is required");
      return;
    }

    if (password.value.length < 6) {
      alert("Password must be at least 6 characters");
      return;
    }

    if (!confirmPassword.value) {
      alert("Please confirm your password");
      return;
    }

    if (password.value !== confirmPassword.value) {
      alert("Passwords do not match");
      return;
    }

    // Submit to server for database-side signup
    signupForm.submit();
  });
}

const loginForm = document.getElementById("loginForm");
const loginEmail = document.getElementById("loginEmail");
const loginPassword = document.getElementById("loginPassword");

const showSignupLink = document.getElementById("showSignupLink");
const showLoginLink = document.getElementById("showLoginLink");
const signupSection = document.getElementById("signupSection");
const loginSection = document.getElementById("loginSection");

if (showSignupLink && signupSection && loginSection) {
  showSignupLink.addEventListener("click", (e) => {
    e.preventDefault();
    loginSection.style.display = "none";
    signupSection.style.display = "block";
  });
}

if (showLoginLink && signupSection && loginSection) {
  showLoginLink.addEventListener("click", (e) => {
    e.preventDefault();
    signupSection.style.display = "none";
    loginSection.style.display = "block";
  });
}

if (loginForm) {
  loginForm.addEventListener("submit", (e) => {
    e.preventDefault();

    if (!loginEmail.value.trim() || !loginPassword.value) {
      alert("Please enter your email and password.");
      return;
    }

    // Allow form submission to login.php
    loginForm.submit();
  });
}
