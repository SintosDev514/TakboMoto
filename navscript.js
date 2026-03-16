// Navbar button behaviors (About toggle + Sign Up redirect/toggle)

const aboutToggle = document.getElementById("aboutToggle");
// Works on both index.html and pages/about.html
const aboutSection =
  document.getElementById("about2") || document.getElementById("AboutSection");
const closebtn = document.getElementById("xbutton");
const signUpToggle = document.getElementById("SignUpToggle");
const loginToggle = document.getElementById("LoginToggle");
const signUpFormContainer = document.getElementById("HOME2");

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
    if (window.location.pathname.endsWith("index.html")) {
      // On index.html, toggle the sign-up form
      if (signUpFormContainer) {
        signUpFormContainer.classList.toggle("show");
      }
    } else {
      // On other pages, navigate to index.html#HOME2
      const indexPath = window.location.pathname.includes("/pages/")
        ? "../index.html"
        : "index.html";
      window.location.href = `${indexPath}#HOME2`;
    }
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

// If the user arrives with a hash pointing to the sign-up section, show it.
if (window.location.hash === "#HOME2" && signUpFormContainer) {
  signUpFormContainer.classList.add("show");
}
