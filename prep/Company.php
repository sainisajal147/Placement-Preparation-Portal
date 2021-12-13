<?php //include('includes/header.php'); 
session_start ();
// Check if the user is logged in , if not then redirect

if (! isset ( $_SESSION ["loggedin"]) || $_SESSION ["loggedin"]!== true ) {
header ("location:login.php ");
exit ;
}
else if( $_SESSION [ "level"] !== "super") {
die ("You are not authorized to access this page !!");
exit ;
}
?>
<?php
include "config.php";
?>
<?php
//session_start();
if(isset($_POST['add']) && isset($_POST['company_name']) && isset($_POST['off_dis']) && isset($_POST['off_pro']) && isset($_POST['opp']))
{
  $com_name=htmlentities($_POST['company_name']);
  $of_dis=$_POST['off_dis'];
  $of_pro=$_POST['off_pro'];
  $op=$_POST['opp'];
  //echo "<div>".$_POST['company_name'],$_POST['off_dis'],$_POST['off_pro'],$_POST['opp']."</div>";
  $sql="INSERT INTO company(company_name,offered_program,offered_discipline,offered_opportunity)VALUES('$com_name','$of_dis','$of_pro','$op')";
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
 header("Location: Company.php");
 return;
}
?>
<?php include('includes/header.php'); ?>
<style>
  body {
    background-color: #f9f9fa
}
@media(min-width: 750px)
          {
            section{
              width: 40%;
              margin:5%;
            }
            #p1{
              float: left;
            }
            #p2{
              float: right;
            }
            #p3{
              clear: both;
              float: left;
            }
            #p4{
              float: right;
            }
          }
          @media(max-width: 749px)
          {
            section{
              width: 80%;
              margin:5%;
              margin-left: 10%;
          }
          }
          #default{
            width: 30%;
            margin:5%;
            clear: both;
            position: relative;
            left: 30%;
            margin-bottom: 0%;
          }
          #ref{
            width: 30%;
            margin:5%;
            clear: both;
            position: relative;
            left: 30%;
            margin-bottom: 0%;
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
  <?php include('includes/admin_site3.php'); ?>
  <div id="content">
     <div class="page-content page-container" id="page-content">
      <div class="padding">
          <div class="row container d-flex justify-content-center">
              <div class="col-lg-10 grid-margin stretch-card">
                  <div class="card" style="width: 829px;">
                  <div class="card-header text-center">
                  ADD COMPANY
                    </div>
                      <div class="card-body">
                          <div class="table-responsive">
                              <section id="p1" class="form-group">
      <form method="post">
      <input type="text" name="company_name" class="form-control" id="exampleInputName2" placeholder="Company Name">
    </section>
    <section id="p2" class="form-group">
      <select class="form-control mdb-select md-form" name="off_dis">
        <option disabled selected>Offered Discipline</option>
        <option>CSE</option>
        <option>EE</option>
        <option>ME</option>
      </select>
    </section>
    <section id="p3" class="form-group">
      <select class="form-control mdb-select md-form" name="off_pro">
        <option disabled selected>Offered Program</option>
        <option>M.tech</option>
        <option>B.tech</option>
      </select>
    </section>
    <section id="p4" class="form-group">
      <select class="form-control mdb-select md-form" name="opp">
        <option disabled selected>Opportunity</option>
        <option>Internship</option>
        <option>Placement</option>
        <option>Both</option>
      </select>
    </section>
    <button id="default" type="submit" class="btn btn-primary" name="add">ADD</button>
    </form>
                          </div>
                          
                          </div>
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
            this.textContent="ADDED";
            <?php
              $add=1;
             ?>
            //document.querySelector("button"),addEventListener("click",add());
            };
            document.querySelector("#default").addEventListener("click",add);
</script>

</body>