<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Responsive Navbar</title>
  <style>
  .navbar {
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 10px 20px;
  }

  .navbar .logo {
    font-size: 2em;
    font-weight: bold;
  }

  .nav-links {
    display: flex;
    list-style: none;
  }

  .nav-links li {
    margin: 0 10px;
  }

  .nav-links a {
    text-decoration: none;
    font-size: 1.2em;
    transition: color 0.3s;
  }

  .nav-links a:hover {
    color: #ff6347;
  }

  .hamburger {
    display: none;
    flex-direction: column;
    cursor: pointer;
  }

  .hamburger div {
    width: 25px;
    height: 3px;
    background-color: #fff;
    margin: 3px 0;
  }

  /* Responsive Style */
  @media screen and (max-width: 768px) {
    .hamburger {
      display: flex;
    }

    .nav-links {
      display: none;
      flex-direction: column;
      position: absolute;
      top: 60px;
      left: 0;
      width: 100%;
      background-color: #333;
      text-align: center;
    }

    .nav-links.active {
      display: flex;
    }

    .nav-links li {
      margin: 15px 0;
    }
  }
  </style>
</head>

<body>
  <!-- Navbar -->
  <nav class="navbar">
    <div class="logo">JobHive</div>
    <ul class="nav-links" id="navLinks">
      <li><a href="{{ route('home') }}">Home</a></li>
      <li><a href="#">About</a></li>
      <li><a href="{{ route('recruiter.login.form') }}">Login</a></li>
      <li><a href="{{ route('recruiter.register.form') }}">Register</a></li>
      <li><a href="#">Contact</a></li>
    </ul>
    <div class="hamburger" id="hamburger">
      <div></div>
      <div></div>
      <div></div>
    </div>
  </nav>

  <script>
  const hamburger = document.getElementById("hamburger");
  const navLinks = document.getElementById("navLinks");

  hamburger.addEventListener("click", () => {
    navLinks.classList.toggle("active");
  });
  </script>
</body>

</html>