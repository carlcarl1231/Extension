<style>
/* styles.css */

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
    background: url('../../img/side1.jpg') no-repeat;
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
    background: url('../../img/sksulogo.png') 50% 50% no-repeat rgb(249,249,249);
    opacity: 1;
}

/* Background styles */
.bg-style {
    background: url('../../img/bg1.avif') no-repeat;
    background-size: cover;
}

.navbar-bg {
    background-color: #009a3c;
}
</style>