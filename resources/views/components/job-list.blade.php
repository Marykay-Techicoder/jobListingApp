<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <div class="container">
    <h1>Available Jobs</h1>
    <div id="jobCards" class="job-card">
      <!-- Job cards will be dynamically generated here -->
    </div>
  </div>

  <!-- Modal -->
  <div class="overlay" id="overlay"></div>
  <div class="modal" id="jobModal">
    <div class="modal-header">
      <h3 id="jobTitle">Job Title</h3>
      <button class="modal-close" id="closeModal">&times;</button>
    </div>
    <div class="modal-body">
      <p><strong>Location:</strong> <span id="jobLocation"></span></p>
      <p><strong>Salary:</strong> $<span id="jobSalary"></span></p>
      <p><strong>Contact:</strong> <span id="jobContact"></span></p>
      <p><strong>Information:</strong></p>
      <p id="jobInformation"></p>
    </div>
  </div>
</body>

</html>