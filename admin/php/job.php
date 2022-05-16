<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Course Recommendation System</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="jobStyle.css">
</head>
<body>
  <div class="dropdown" id="dropdown">
    <button class="btn btn-default dropdown-toggle" type="button" id="course_catalog"><a href="admin\php\course.php">Available Jobs</a></button>
    <button class="btn btn-default dropdown-toggle" type="button" id="course_catalog"><a href="#">My Jobs</a></button>
    <button class="btn btn-default dropdown-toggle" type="button" id="course_catalog"><a href="index.html">Logout</a></button>
  </div>
    <div class="content" style="background: url(job.jpg); height: 100vh;">
        <?php
            require_once("getposts.php");
            getMainPosts();
        ?>
        <div class="container">
            <h3>Wordpress Development</h3>
            <div class="box">
              <h4>Work From Home</h4>
              <table>
                <tr>
                  <th>Start Date</th>
                  <th>Duration</th>
                  <th>Stipend</th>
                  <th>Apply By</th>
                </tr>
                <tr>
                  <td>Immediately</td>
                  <td>6 Months</td>
                  <td>3000-5000/month</td>
                  <td>22 May,2022</td>
                </tr>
              </table>
              <h2><a href="#">View Details</a></h2>
            </div>
        </div>
        <div class="container">
          <h3>Web Development</h3>
          <div class="box">
            <h4>Work From Home</h4>
            <table>
              <tr>
                <th>Start Date</th>
                <th>Duration</th>
                <th>Stipend</th>
                <th>Apply By</th>
              </tr>
              <tr>
                <td>Immediately</td>
                <td>2 Months</td>
                <td>9000/month</td>
                <td>22 May,2022</td>
              </tr>
            </table>
            <h2><a href="#">View Details</a></h2>
          </div>
      </div>
      <div class="container">
        <h3>Unity Development</h3>
        <div class="box">
          <h4>Work From Home</h4>
          <table>
            <tr>
              <th>Start Date</th>
              <th>Duration</th>
              <th>Stipend</th>
              <th>Apply By</th>
            </tr>
            <tr>
              <td>Immediately</td>
              <td>6 Months</td>
              <td>8000/month</td>
              <td>22 May,2022</td>
            </tr>
          </table>
          <h2><a href="#">View Details</a></h2>
        </div>
    </div>
    <div class="container">
      <h3>Unity Level Design</h3>
      <div class="box">
        <h4>Work From Home</h4>
        <table>
          <tr>
            <th>Start Date</th>
            <th>Duration</th>
            <th>Stipend</th>
            <th>Apply By</th>
          </tr>
          <tr>
            <td>Immediately</td>
            <td>2 Months</td>
            <td>7000/month</td>
            <td>22 May,2022</td>
          </tr>
        </table>
        <h2><a href="#">View Details</a></h2>
      </div>
  </div>
  <div class="container">
    <h3>Automation Engineer</h3>
    <div class="box">
      <h4>Work From Home</h4>
      <table>
        <tr>
          <th>Start Date</th>
          <th>Duration</th>
          <th>Stipend</th>
          <th>Apply By</th>
        </tr>
        <tr>
          <td>Immediately</td>
          <td>2 Months</td>
          <td>5000-8000/month</td>
          <td>22 May,2022</td>
        </tr>
      </table>
      <h2><a href="#">View Details</a></h2>
    </div>
</div>
<div class="container">
  <h3>Php/Laravel Developer</h3>
  <div class="box">
    <h4>Work From Home</h4>
    <table>
      <tr>
        <th>Start Date</th>
        <th>Duration</th>
        <th>Stipend</th>
        <th>Apply By</th>
      </tr>
      <tr>
        <td>Immediately</td>
        <td>6 Months</td>
        <td>11000/month</td>
        <td>22 May,2022</td>
      </tr>
    </table>
    <h2><a href="#">View Details</a></h2>
  </div>
</div>
</div>
    </div>
    <script>
        window.onscroll = function() {myFunction()};
        
        var navbar = document.getElementById("dropdown");
        var sticky = navbar.offsetTop;
          
        function myFunction() {
          if (window.pageYOffset >= sticky) {
            navbar.classList.add("sticky")
          } else {
            navbar.classList.remove("sticky");
          }
        }
        $(document).ready(function(){
          $('.dropdown-submenu a.test').on("click", function(e)
          {
            $(this).next('ul').toggle();
            e.stopPropagation();
            e.preventDefault();
          });
        });
    </script>
</body>
</html>