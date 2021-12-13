<?php //include('includes/header.php'); 
session_start ();
// Check if the user is logged in , if not then redirect

if (! isset ( $_SESSION ["loggedin"]) || $_SESSION ["loggedin"]!== true ) {
header ("location:login.php ");
exit ;
}
else if( $_SESSION [ "level"] !== "student") {
die ("You are not authorized to access this page !!");
exit ;
}
?>
<?php
include "config.php";
$query_for_com=mysqli_query($db,"SELECT * FROM company");
?>
<?php
//print_r();
//$rowcount=mysqli_num_rows($query_for_com);
//echo "<div>".$_POST['typed']."</div>";
/*if(isset($_POST["selected_com"]))
{
  $sel_com_id=$_POST["selected_com"];
  echo "$sel_com_id";
}*/
//session_start();
if(isset($_POST['selected_com']) && isset($_POST['typed']) && isset($_POST['selected_round']) && isset($_POST['selected_type']) && isset($_POST['selected_opp']))
{
  $user=$_SESSION['student_user_name'];//$_SESSION["username"];
  $year=date("Y");
  $com_id=$_POST['selected_com'];
  $round_no=$_POST['selected_round'];
  $round_type=$_POST['selected_type'];
  $opp=$_POST['selected_opp'];
  $typed=htmlentities($_POST['typed']);
  //echo "<div>".$_POST['selected_com'],$_POST['selected_round'],$_POST['selected_type'],$_POST['selected_opp'],$typed."</div>";
  //$sql="INSERT INTO company(company_name,offered_program,offered_discipline,offered_opportunity)VALUES('$com_id','$typed','$opp','$round_type')";
  $sql="INSERT INTO interview_experiences(student_user_name, company_id, round_number, round_name, experience, e_opportunity, e_year)VALUES('$user', '$com_id', '$round_no', '$round_type', '$typed', '$opp', '$year')";
  //echo("<pre>\n".$sql."\n</pre>\n");
  $stmt=mysqli_query($db,$sql);
 if(isset($stmt))
 {
  echo "INSERTED\n";
 } 
 else
 {
  echo "FAiled\n";
 }
 header("Location: Experience_Sharing.php");
 return;
}
?>
<?php include('includes/header.php'); ?>
<style>
  body {
    background-color: #f9f9fa
}

.flex {
    -webkit-box-flex: 1;
    -ms-flex: 1 1 auto;
    flex: 1 1 auto
}

@media (max-width:991.98px) {
    .padding {
        padding: 1.5rem
    }
}

@media (max-width:767.98px) {
    .padding {
        padding: 1rem
    }
}


.padding {
    padding: 1rem;
    padding-left: 50px
}

.card {
    box-shadow: none;
    -webkit-box-shadow: none;
    -moz-box-shadow: none;
    -ms-box-shadow: none
}

.pl-3,
.px-3 {
    padding-left: 1rem !important
}

.card {
    position: relative;
    display: flex;
    flex-direction: column;
    min-width: 0;
    word-wrap: break-word;
    background-color: #fff;
    background-clip: border-box;
    border: 1px solid #d2d2dc;
    border-radius: 0
}

.card .card-title {
    color: #000000;
    margin-bottom: 0.625rem;
    font-size: 1rem;
    font-weight: 500
}

.card .card-description {
    margin-bottom: .875rem;
    font-weight: 400;
    color: #76838f
}

p {
    font-size: 0.875rem;
    margin-bottom: .5rem;
    line-height: 1.5rem
}

.table-responsive {
    display: block;
    width: 100%;
    overflow-x: auto;
    -webkit-overflow-scrolling: touch;
    -ms-overflow-style: -ms-autohiding-scrollbar
}

.table,
.jsgrid .jsgrid-table {
    width: 100%;
    max-width: 100%;
    margin-bottom: 1rem;
    background-color: transparent
}

.table thead th,
.jsgrid .jsgrid-table thead th {
    border-top: 0;
    border-bottom-width: 1px;
    font-weight: 550;
    font-size: .875rem;
}

.table td,
.jsgrid .jsgrid-table td {
    font-size: 0.875rem;
    padding: .475rem 0.4375rem
}

.mt-10 {
    padding: 0.875rem 0.3375rem !important
}

button {
    outline: 0 !important
}

.form-control:focus {
    box-shadow: 0 0 0 0rem rgba(0, 123, 255, .25) !important
}

.badge {
    border-radius: 0;
    font-size: 14px;
    line-height: 1;
    padding: .375rem .5625rem;
    font-weight: normal;
    border: none
}
  </style>
<body>
<?php include('includes/navbar.php'); ?>
  <div class="wrapper">
  <?php include('includes/sidebar3.php'); ?>
  <div id="content">
     <div class="page-content page-container" id="page-content">
      <div class="padding">
          <div class="row container d-flex justify-content-center">
              <div class="col-lg-10 grid-margin stretch-card">
                  <div class="card" style="width: 829px;">
                  <div class="card-header text-center">
                  ADD EXPERIENCE
                    </div>
                    <form method="post">
                      <div class="card-body">
                          <div class="table-responsive">
                              <table id="faqs" class="table" >
                                  
                                  <tbody>
                                      <tr id="faqs-row0">
                                        <td>
                                        <select name="selected_com" class="form-control mdb-select md-form" searchable="Search here.." name="companyname">
                                          <option value="" disabled selected>Choose company name</option>
                                        <?php
                                          while($row=mysqli_fetch_array($query_for_com)){
                                            ?>
          																<option value="<?php echo $row["company_id"] ?>"><?php echo $row["company_name"]; ?></option>
                                          <?php
                                            }
                                          ?>
          															</select>
                                        </td>
                                          <td>
                                            <select name="selected_round" class="form-control mdb-select md-form" searchable="Search here..">
                                              <option value="" disabled selected>Choose Round Number</option>
                                              <option >1</option>
                                              <option >2</option>
                                              <option >3</option>
                                              <option >5</option>
                                              <option >6</option>
                                            </select>
                                          </td>
                                          
                                          </tr>
									  <tr id="faqs-row0">
                                        <td>
                                          <select name="selected_type" class="form-control mdb-select md-form" searchable="Search here..">
                                            <option value="" disabled selected>Choose type of round</option>
                                            <!--<option value="1">Coding</option> // i disabled values-->
                                            <option >Coding</option>
                                            <option >Technical</option>
                                            <option >Apptitude</option>
                                            <option >HR</option>
                                          </select>
                                        </td>
                                          <td>
                                            <select name="selected_opp" class="form-control mdb-select md-form" searchable="Search here..">
                                              <option value="" disabled selected>Choose Opportunity</option>
                                              <option >Internship</option>
                                              <option >Placement</option>
                                              <option >Both</option>
                                            </select>
                                          </td>
                                          
                                          </tr>
                                      <tr id="faqs-row1">
                                        <td colspan="3">
                                          <div class="form-group">
                                            <textarea name="typed" class="form-control" id="exampleFormControlTextarea1"  rows="6" placeholder="Type Experience here.."></textarea>
                                          </div>
                                        </td>
                                      </tr>
                                  </tbody>
                              </table>
                          </div>
                          
                          <div class="text-center"><button id="default" type="submit" class="btn btn-primary">SUBMIT</button></div>
                      </div>
                    </form>
                  </div>
              </div>
          </div>
      </div>
  </div>
</div>
</div>
<?php include('includes/footer.php'); ?>
<script>
$(document).ready(function() {
$('.mdb-select').materialSelect();
});
</script>
<script type="text/javascript">
            $(document).ready(function () {
    
                $('#sidebarCollapse').on('click', function () {
                    $('#sidebar, #content').toggleClass('active');
                });
            });
            function add(event){
            console.log(this);
            this.textContent="SUBMITTED";
            //document.querySelector("button"),addEventListener("click",add());
            };
            document.querySelector("#default").addEventListener("click",add);
</script>

</body>