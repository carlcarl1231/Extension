<?php include 'header.php'; ?>
      <!-- Heading -->

      <!--Grid row-->
      <div class="row wow fadeIn">

        <!--Grid column-->
        <div class="col-md-5 mb-2">

          <!--Card-->
          <div class="card">

            <!--Card content-->
            <div class="card-body">

              <?php
                    // $con  = mysqli_connect("localhost","root","","barchart");
                    //  if (!$con) {
                    //      # code...
                    //     echo "Problem in database connection! Contact administrator!" . mysqli_error();
                    //  }else{

                       require_once("include/connection.php");

                             $sql ="SELECT *,count(EMAIL) as count FROM upload_files group by EMAIL;";
                             $result = mysqli_query($conn,$sql);
                             $chart_data="";
                             while ($row = mysqli_fetch_array($result)) { 
                     
                                $name[]  = $row['EMAIL']  ;
                                $counts[] = $row['count'];
                            }
                     
                    ?>


                <CENTER><h1 class="page-header" >ABOUT DEAN's OFFICE</h1></CENTER>  


                <h1 class="entry-title">Dean's Office</h1>

                <p class="word">The Dean’s Office serves as the administrative and academic hub of the College. It ensures the effective implementation of university policies, academic standards, and institutional goals. The office provides leadership in curriculum development, faculty management, student affairs, and research initiatives. Guided by the university’s mission and vision, the Dean’s Office strives to maintain academic excellence, foster innovation, and uphold the values of integrity, discipline, and service. Through coordinated efforts with department heads, faculty, and students, the Dean’s Office aims to create a dynamic and supportive learning environment that nurtures both personal and professional growth.</p>
             <br>   <h1 class="entry-title"> VISION</h1>
                  <p class="word">A leading University in advancing scholarly innovation, multi-cultural convergence, and responsive public service in a borderless Region.
 </p>

                <h1 class="entry-title"> MISSION</h1>
                  <p class="word">The University shall primarily provide advance instruction and professional training in science and technology. agriculture, fisheries, education and other relevant fields of study. It shall also undertake research and extension and services. leadership specialization. in provide progressive its areas o</p>
                    <br><br>          
                             
                <h1 class="entry-title">BIND TECH PROGRAM OBJECTIVES</h1>
                  <p class="word">

                    1. Assume professional, technical, managerial and leadership roles in industrial organizations with the desired competence in the fields practiced such as Automotive Technology, Civil Tech-nology, Drafting Technology, Electrical Technology, Electronics Technology, Food Service Management and its allied disciplines.<br>

                    2. Innovate explicit and modern technologies in the advancement of economy, society, technology and environmental sustainability. <br>

                    3. Generate research-based information and technologies at par from international standards; and <br>

                    4. Promote and transfer knowledge and technologies for effective and efficient school- industry partnerships. <br>
                  </p>
                  <br>
              <h1 class="entry-title"> BTVTE PROGRAM OBJECTIVES</h1>
                <p class="word">1. Articulate effectively and independently in multi-disciplinary and multi-cultural teams the latest development in the fields practiced such as Automotive Technology, Civil Technology, Drafting Technology, Electrical Technology, Electronics Technology, Food Service Management and its allied disciplines. <br>

                                2. Lead in the promotion and preservation of Filipino historical and cultural heritage, social empowerment and environmental sustainability in a professional and ethical approaches.<br>

                                3. Generate research-based information and technologies at par from international standards, and<br>

                                4. Promote and transfer knowledge and technologies for effective and efficient school-industry partnerships.</p>
                              <br><br>
                 <center><h3 class="entry-title"><b>CORE VALUES</b></h3></center>
                    <center><h2 class="title">P.R.I.Z.E</h2></center> 
                    <center><p class="word"> <b>P</b>atriotism <b>R</b>espect <b>I</b>ntegrity <b>Z</b>eal <b>E</b>xcellence in the Public Service</p></center>
                <div class="iframe-container">

            </div>

        </div>
      </div>

                          </div>
            
        <!--Grid column-->
        
        <div class="col-md-7 mb-4">
        
        <!-- <ul>Recent Uploads</ul> -->

        <h1 class="entry-title">Recent Uploads</h1>
      

        <!-- <div class="iframe-container">
             <iframe src="../uploads/IndustrialTechnologyExtensionProgram_Agenda.pdf" width="100%" height="800"></iframe> 


            <iframe src="../uploads/1.jpg" width="100%" height="800"></iframe>
                             this was the last "recent uploads " where it directly gets image to the uploads file but not found cause its deleted
        </div> -->
<?php
  $uploadDir = '../uploads/';
  $maxFilesToShow = 20;

  // Get all files, excluding . and ..
  $files = array_values(array_filter(scandir($uploadDir), function($file) {
      return $file !== '.' && $file !== '..';
  }));

  // Limit to first 20 files
  $filesToShow = array_slice($files, 0, $maxFilesToShow);

  // Display files
  echo "<h2>First $maxFilesToShow Files from Uploads Folder</h2>";
  foreach ($filesToShow as $file) {
    echo "<p>$file</p>";
}
?>

        </div>
                         
<!--
                          <div class="card">
  <img src="..." class="card-img-top" alt="Card image cap">
  <div class="card-body">
    <p class="card-text">Some text content...</p>
  </div>
</div>
                          -->   
    <!--Copyright-->
    <div class="footer-copyright py-3">
    <p>All right Reserved &copy; <?php echo date('Y');?> Developed By:Tundag & Franco</p>
    </div>
    <!--/.Copyright-->

  </footer>
  <!--/.Footer-->

  <!-- SCRIPTS -->
  <!-- JQuery -->
  <script type="text/javascript" src="js/jquery-3.4.0.min.js"></script>
  <!-- Bootstrap tooltips -->
  <script type="text/javascript" src="js/popper.min.js"></script>
  <!-- Bootstrap core JavaScript -->
  <script type="text/javascript" src="js/bootstrap.min.js"></script>
  <!-- MDB core JavaScript -->
  <script type="text/javascript" src="js/mdb.min.js"></script>
  <!-- Initializations -->
  <script type="text/javascript">
    // Animations initialization
    new WOW().init();

  </script>

  <!-- Charts -->
  <script>
    // Line
    var ctx = document.getElementById("myChart").getContext('2d');
    var myChart = new Chart(ctx, {
      type: 'bar',
     data: {
            labels:<?php echo json_encode($name); ?>,
            datasets: [{
                      backgroundColor: ["#F7464A", "#46BFBD", "#FDB45C", "#949FB1", "#4D5360", "#6ae27e", "#dc69e2", "#687be2", "#e28868", "#6c68e2", "#ab68e2", "#e268b7"],
                      // hoverBackgroundColor: ["#FF5A5E", "#5AD3D1", "#FFC870", "#A8B3C5", "#616774"],
                data:<?php echo json_encode($counts); ?>,
            }]
        },
      options: {
          legend: {
            display: false
          },
        scales: {
          yAxes: [{
            ticks: {
              beginAtZero: true
            }
          }]

        }
      }
    });



    //pie
    var ctxP = document.getElementById("pieChart").getContext('2d');
    var myPieChart = new Chart(ctxP, {
      type: 'pie',
      data: {
        labels: ["Red", "Green", "Yellow", "Grey", "Dark Grey"],
        datasets: [{
          data: [300, 50, 100, 40, 120],
          backgroundColor: ["#F7464A", "#46BFBD", "#FDB45C", "#949FB1", "#4D5360"],
          hoverBackgroundColor: ["#FF5A5E", "#5AD3D1", "#FFC870", "#A8B3C5", "#616774"]
        }]
      },
      options: {
        responsive: true,
        legend: false
      }
    });
    <?php include 'footer.php'; ?>



  
  </script>

<style>

.iframe-container {
  display: flex;
  width: 100%;
  height: 0; /* Set height to 0 and use aspect ratio */
  padding-bottom: 56.25%; /* Aspect ratio 16:9 */
}

.iframe-container iframe {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
}
.word {
  font-family: 'Merriweather Sans', sans-serif;
  font-weight: normal;
  margin: 0 0 15px;
  position: justify;  
}
.entry-title {

  color: #009a3c;
  font-family: 'Merriweather Sans', sans-serif;
  font-weight: normal;
  margin: 0 0 15px;
}


</style>

</body>
</html>