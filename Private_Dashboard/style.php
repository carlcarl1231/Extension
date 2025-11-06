<style>
/* styles.css */
/* custom style for the profile of staffs start */
.custom-card {
  max-width: 700px;
  margin: auto;
  background: #fff;
  border-radius: 12px;
  box-shadow: 0 4px 12px rgba(18, 87, 246, 0.1);
  font-family: "Segoe UI", Arial, sans-serif;
  padding: 20px;
}

.card.custom-card img {
  width: 100%;
  height: 100%;
  object-fit: cover;
}


/* for the profile picture text */
.name-display {
     color: black !important; 
  text-shadow: 1.5px 1.5px 2px white;
  font-weight: bold;       
  font-size: 20px;

}
.nav-item.dropdown > .nav-link::after {
  display: none !important;
}


.name-display-viewfiles {
     color: black !important; 
  text-shadow: 1px 1px 1px white;
  font-weight: bold;       
  font-size: 20px;
  background: #4cb1daff; 
}



/* Header with image + name */
.card-header {
  display: flex;
  align-items: center;
  gap: 15px;
  margin-bottom: 20px;
   background: #4cb1daff; 
}

/* Fixed image inside the container */
.card-header img {
  width: 120px;   /* fixed width */
  height: 120px;  /* fixed height */
  object-fit: cover; /* keeps proportions without stretching */
  border-radius: 10px;
  flex-shrink: 0; /* prevent shrinking */
}

.card-header h1 {
  font-size: 22px;
  color: #ffffffff;
  margin: 0;
}

/* Two-column details */
.two-columns {
  display: flex;
  gap: 15px;
  margin-bottom: 15px;
}

.two-columns .column {
  flex: 1;
}

.two-columns h2 {
  font-size: 16px;
  margin-bottom: 6px;
  color: #444444ff;
}

/* Social links */
.socials a {
  font-size: 18px;
  margin: 0 8px;
  color: #555;
  transition: color 0.3s;
}

.socials a:hover {
  color: #0077b5;
}

/* Contact button */
.custom-card button {
  border: none;
  outline: 0;
  padding: 10px 20px;
  color: #fff;
  background-color: #0077b5;
  cursor: pointer;
  font-size: 15px;
  border-radius: 25px;
  transition: background 0.3s;
}

.custom-card button:hover {
  background-color: #106894ff;
}


/* custom style for the profile of staffs end */
/* Custom styles for nested dropdown */
.dropdown-submenu {
    position: relative;
}

.dropdown-submenu .dropdown-menu {
    top: 0;
    left: 100%;
    margin-top: -6px;
    margin-left: 0;
    display: none;
    color: white;
}

.dropdown-submenu:hover .dropdown-menu {
    display: block;
}

/* Select box styles */
select[multiple], select[size] {
    height: auto;
    width: 20px;
}

.pull-right {
    float: right;
    margin: 2px !important;
}

.map-container {
    overflow: hidden;
    padding-bottom: 56.25%;
    position: relative;
    height: 0;
}

.map-container iframe {
    left: 0;
    top: 0;
    height: 100%;
    width: 100%;
    position: absolute;
}

/* Navbar styles */
.navbar-nav {
    background-color: #009a3c;
}

.sidebar {
    background: url('../img/side1.jpg') no-repeat;
    background-size: cover;
}
.nav-link.dropdown-toggle {
    color: white !important; /* Text color */
}

/* Dropdown menu styles */
.dropdown-menu {
    background-color: #009a3c; /* Green background for dropdown */
    min-width: 200px; /* Set a minimum width for uniform size */
    border: none; /* Remove default border */
    padding: 0; /* Remove default padding */
}

/* Dropdown menu item styles */
.dropdown-menu .dropdown-item {
    color: white !important; /* Default text color */
    background-color: #009a3c; /* Ensure background color is green */
    padding: 10px 15px; /* Uniform padding */
    width: 100%; /* Ensure full width */
    box-sizing: border-box; /* Include padding in width calculations */
    display: block; /* Ensure each item is displayed as a block */
    text-align: left; /* Align text to the left */
}

/* Custom styles for dropdown items on hover */
.dropdown-menu .dropdown-item:hover {
    background-color: yellow; /* Background color on hover */
    color: black !important; /* Text color on hover */
    font-weight: bold; /* Font weight on hover */
}

/* Custom styles for dropdown items on active */
.dropdown-menu .dropdown-item:active {
    background-color: #009a3c; /* Ensure background stays green when clicked */
    color: white; /* Ensure text color stays white when clicked */
}

/* Custom styles for dropdown toggles on hover */
.dropdown-menu .dropdown-toggle:hover {
    background-color: yellow; /* Background color on hover */
    color: black; /* Text color on hover */
    font-weight: bold; /* Font weight on hover */
}

/* Dropdown divider */
.dropdown-divider {
    height: 1px; /* Thin divider line */
    margin: 0; /* No margin */
    background-color: white; /* White background for the divider */
    width: 100%; /* Full width */
}


/* List group item styles */
.list-group-item {
    background-color: #009a3c;
    color: white;
}

.list-group-item:hover {
    background-color: #fffe00;
    color: black;
    font-weight: 700;
}

/* Font color for nav-top */
.fontcolor-nav-top {
    color: yellow;
}

/* Loader styles */
#loader {
    position: fixed;
    left: 0px;
    top: 0px;
    width: 100%;
    height: 100%;
    z-index: 9999;
    background: url('../img/sksulogo.png') 50% 50% no-repeat rgb(249,249,249);
    opacity: 1;
}

/* Background styles */
.bg-style {
    background: url('../img/bg1.avif') no-repeat;
    background-size: cover;
}

.navbar-bg {
    background-color: #009a3c;
}
</style>