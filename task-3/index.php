<?php 
  include "./data.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- stylesheet -->
  <link rel="stylesheet" href="style.css">
  <title>Resume</title>
</head>

<body>
  <div class="container">
    <section class="header-area">
      <div class="left-area">
        <h2><?php echo $resume['personalInfo']['name'] ?></h2>
        <address>
          House: <?php echo $resume['personalInfo']['house'] ?><br>
          Email: <a href="mailto:mohib.agu@gmail.com"> <?php echo $resume['personalInfo']['email'] ?></a><br>
          Tel:<a href="tel:+8801757364843"> <?php echo $resume['personalInfo']['tel'] ?><a>
        </address>
      </div>
      <div class="right-area">
        <img src="images/mohibbulla_munshi.jpg" alt="Mohibbulla Munshi">
      </div>
    </section>
    <section class="main-area">
      <div class="career-objective">
        <h2><?php echo $resume['careerObjective']['title'] ?></h2>
        <hr>
        <p><?php echo $resume['careerObjective']['des'] ?>
        </p>
      </div>
      <div class="present-status">
        <h2><?php echo $resume['presentStatus']['title'] ?></h2>
        <hr>
        <p><?php echo $resume['presentStatus']['des'] ?></p>
      </div>
      <div class="education">
        <h2>
          <?php echo $resume['education']['title'] ?>
        </h2>
        <hr>
        <table>
          <tr>
            <th>Exam</th>
            <th>Board/University</th>
            <th>Year</th>
            <th>Name of Institution</th>
            <th>Marks</th>
          </tr>
          <?php foreach($resume['education']['exam']as $exam): ?>
          <tr>
            <td>
              <?php echo $exam['name']; ?>
            </td>
            <td>
              <?php echo $exam['board']; ?>
            </td>
            <td>
              <?php echo $exam['year']; ?>
            </td>
            <td>
              <?php echo $exam['institute']; ?>
            </td>
            <td>
              <?php echo $exam['mark']; ?>
            </td>
          </tr>
          <?php endforeach; ?>
        </table>
      </div>
      <div class="computer-skills">
        <h2><?php echo $resume['computerskills']['title'] ?></h2>
        <hr>
        <table>
          <?php foreach($resume['computerskills']['skills'] as $key => $skill): ?>
          <tr>
            <td><?php echo ucfirst($key); ?></td>
            <td>:</td>
            <td><?php echo $skill; ?></td>
          </tr>
          <?php endforeach; ?>
        </table>
      </div>
      <div class="professional-experience">
        <h2><?php echo $resume['exprerience']['title']; ?></h2>
        <hr>
        <p>
          <?php echo $resume['exprerience']['des']; ?>
        </p>
      </div>
      <div class="projects">
        <h2>Projects</h2>
        <hr>
        <ul>
          <li>
            <b>
              <a href="http://www.raylifebd.com/">Raylifebd.com
              </a>
            </b>
            <ul>
              <li>RAY Life BD is an Ecommerce Website build using WordPress</li>
            </ul>
          </li>
          <li>
            <b>
              <a href="https://wordpress.org/plugins/simple-employee-list/">Employee List
              </a>
            </b>
            <ul>
              <li>Employee List is a WordPress Plugin</li>
            </ul>
          </li>
          <li>
            <b>
              <a href="https://wordpress.org/plugins/project-portal">Project Portal
              </a>
            </b>
            <ul>
              <li>Project Portal is a WordPress Plugin</li>
            </ul>
          </li>
        </ul>
      </div>
      <div class="academic-projects">
        <h2>Academic Projects</h2>
        <hr>
        <ul>
          <li>
            <b>
              <a href="https://www.anhenterprise.com/">Anhenterprise.com</a>
            </b>
            <ul>
              <li>ANH Enterprise Limited is a Portfolio Website build using WordPress</li>
            </ul>
          </li>
          <li>
            <b>
              <a href="https://www.srdlbd.com/">Srdlbd.com (Portfolio Website)
              </a>
            </b>
            <ul>
              <li>SRD Limited is a Portfolio Website build using WordPress</li>
            </ul>
          </li>
          <li>
            <b>
              <a href="http://www.raybangladesh.com/">Ray Bangladesh (Portfolio Website)</a>
            </b>
            <ul>
              <li>RAY Bangladesh is a Portfolio Website build using WordPress</li>
            </ul>
          </li>
        </ul>
      </div>
      <div class="achievements">
        <h2>Achievements</h2>
        <hr>
        <ul>
          <li>Skill Development Program
            on <i><a href="https://drive.google.com/file/d/1SyeVe3oKhK5851aM1G-ZFLOStyopSsSO/view">“Professional
                Project-
                based Training on Laravel”</a></i></li>
        </ul>
      </div>
      <div class="language">
        <h2>Language</h2>
        <hr>
        <ul>
          <li>Bangla</li>
          <li>English</li>
          <li>Hindi</li>
        </ul>
      </div>
      <div class="personal-info">
        <h2>Personal Information</h2>
        <hr>
        <table>
          <tr>
            <td>Full Name</td>
            <td>:</td>
            <td>Mohibbulla Munshi</td>
          </tr>
          <tr>
            <td>Father’s Name</td>
            <td>:</td>
            <td>Abdur Razzak Munshi</td>
          </tr>
          <tr>
            <td>Mother’s Name</td>
            <td>:</td>
            <td>Jahanara Begum</td>
          </tr>
          <tr>
            <td>Date of Birth</td>
            <td>:</td>
            <td>20 January 1998</td>
          </tr>
          <tr>
            <td>Sex</td>
            <td>:</td>
            <td>Male</td>
          </tr>
          <tr>
            <td>Marital Status</td>
            <td>:</td>
            <td>Married</td>
          </tr>
          <tr>
            <td>Nationality</td>
            <td>:</td>
            <td>Bangladeshi</td>
          </tr>
          <tr>
            <td>Religion</td>
            <td>:</td>
            <td>Islam</td>
          </tr>
          <tr>
            <td>Blood Group</td>
            <td>:</td>
            <td>O+</td>
          </tr>
          <tr>
            <td>Present Address</td>
            <td>:</td>
            <td>House #55, Arjotpara, Mohakhali, Dhaka 1214</td>
          </tr>
          <tr>
            <td>Permanent Address</td>
            <td>:</td>
            <td>Mukondoputty, Nagarkanda, Faridpur, Dhaka</td>
          </tr>
        </table>
      </div>
      <div class="hobbies">
        <h2>Hobbies</h2>
        <hr>
        <ul>
          <li>Traveling</li>
          <li>Learning a new things</li>
        </ul>
      </div>
      <div class="games">
        <h2>Games</h2>
        <hr>
        <ul>
          <li>Football</li>
          <li>Chess</li>
        </ul>
      </div>
      <div class="references">
        <h2>References</h2>
        <hr>
        <b>Mr. Raj Patel</b>
        <address>
          Address: House #05, Arjotpara, Mohakhali, Dhaka-1205<br>
          Email: <a href="mailto:mohib.agu@gmail.com">mohib.agu@gmail.com</a><br>
          Tel: <a href="tel:+8801757364843">+8801757364843</a>
        </address>

      </div>
    </section>
    <section class="footer-area">
      <div class="copyright">
        <p>Copyright © Mohibbulla Munshi, 2016</p>
      </div>
    </section>
  </div>
</body>

</html>