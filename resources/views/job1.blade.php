<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<style>
  header ul {
    display: flex;
    justify-content: space-evenly;
  }

  li {
    list-style-type: none;
  }

  a {
    font-size: 20px;
    text-decoration: none;
    color: black;
  }

  .logo {
    font-size: 30px;
    font-weight: bold;
  }



  main {
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
    margin: 0;
    background-color: #f0f0f0;
  }

  .card {
    background-color: #ffffff;
    border-radius: 10px;
    border: 1px solid #ddd;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    padding: 40px;
    width: 450px;
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: flex-start;
    text-align: left;
    font-family: 'Arial', sans-serif;
  }

  .card h3 {
    font-size: 1.5em;
    margin-bottom: 10px;
    font-weight: bold;
    color: #333;
  }

  .card p {
    font-size: 0.95em;
    line-height: 1.5;
    margin-bottom: 8px;
    color: #555;
  }

  @media (max-width: 768px) {
    .card {
      width: 90%;
      padding: 15px;
    }

    .card h3 {
      font-size: 1.2em;
    }

    .card p {
      font-size: 0.9em;
    }
  }

  @media (max-width: 768px) {
    header ul {
      flex-direction: column;
      align-items: center;
      padding: 10px 0;
    }

    header .logo {
      margin-bottom: 15px;
    }

    header ul li {
      margin: 10px 0;
    }


    @media (max-width: 480px) {
      header ul {
        flex-direction: column;
        align-items: center;
        padding: 10px;
      }

      a {
        font-size: 18px;
      }
    }
  }
</style>

<body>
  <header>
    <ul>
      <div class="logo">
        <li><a href="">JobHive</a></li>
      </div>
      <li><a href="{{route('home')}}">Home</a></li>
      <li><a href="">Services</a></li>
      <li><a href="">Contact</a></li>
      <li><a href="">Register</a></li>
      <li><a href="">Login</a></li>
    </ul>
  </header>

  <main>
    <div class="card">
      <h3>Data Scientist</h3>
      <p> Education: Advanced degrees in Statistics, Mathematics, or Computer Science are advantageous.</p>
      <p> Programming Languages: Proficiency in Python, R, and SQL is essential.</p>
      <p> Tools & Platforms: Familiarity with Tableau, Power BI, or Hadoop.</p>
      <p> Key Techniques: Experience in machine learning, predictive modeling, and big data.</p>
      <p> Industries: Work in sectors like healthcare, finance, or e-commerce.</p>
      <p> Communication: Ability to present findings to non-technical stakeholders.</p>
      <p> Challenges: Handling incomplete or messy datasets.</p>
      <p> Certifications: Certifications like Google Data Analytics or IBM Data Science Professional Certificate add
        value.</p>

    </div>
  </main>
</body>

</html>