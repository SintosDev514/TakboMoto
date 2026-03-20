// Navbar button behaviors (About toggle + Sign Up redirect/toggle)

const aboutToggle = document.getElementById("aboutToggle");
// Works on both index.html and pages/about.html
const aboutSection =
  document.getElementById("about2") || document.getElementById("AboutSection");
const closebtn = document.getElementById("xbutton");
const signUpToggle = document.getElementById("SignUpToggle");
const loginToggle = document.getElementById("LoginToggle");

if (aboutToggle && aboutSection) {
  aboutToggle.addEventListener("click", () => {
    const isHidden =
      aboutSection.style.display === "none" ||
      getComputedStyle(aboutSection).display === "none";

    // on index.html (#about2) we need flex to show; on about.html (#AboutSection) default block is fine
    const showValue = aboutSection.id === "about2" ? "flex" : "";

    aboutSection.style.display = isHidden ? showValue : "none";
  });
}

if (closebtn && aboutSection) {
  closebtn.addEventListener("click", () => {
    aboutSection.style.display = "none";
    window.alert("Closed Card");
  });
}

if (signUpToggle) {
  signUpToggle.addEventListener("click", () => {
    // Navigate to the dedicated sign-up page
    const signupPath = window.location.pathname.includes("/pages/")
      ? "../signup.html"
      : "signup.html";
    window.location.href = signupPath;
  });
}

if (loginToggle) {
  loginToggle.addEventListener("click", () => {
    // Navigate to the dedicated login page
    const loginPath = window.location.pathname.includes("/pages/")
      ? "../login.html"
      : "login.html";
    window.location.href = loginPath;
  });
}
