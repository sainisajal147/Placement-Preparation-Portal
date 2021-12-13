<?php
include("config.php");
error_reporting(0);
$data=array();
$res_data=array();
$res_label=array();
$i=0;
for($x=2021;$x>=2019;$x--)
{
$query = "SELECT COUNT(*) FROM questions WHERE question_year=$x";
$data[$i] = mysqli_query($db,$query);
$total = mysqli_num_rows($data[$i]);
$result = mysqli_fetch_assoc($data[$i]);
array_push($res_data,$result['COUNT(*)']);
array_push($res_label,$x);
$i++;
}
#print_r($res_data);
#print_r($res_label);
$json1=json_encode($res_data);
$json2=json_encode($res_label);
//echo $result['COUNT(*)'];
?>
<meta name="viewport" content="width=device-width, initial-scale=1">
<?php include('includes/header.php'); ?>
<style>
        .button-primary
        {
            
    
    margin-top: 2%;
    margin-bottom: 2%;
    
    border-radius: 1em;
    margin-right: 4%;
    margin-left: 4%;
    height: 100px;
        }
        body {
    background-color: #fff;
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

.title {
    text-shadow: 0 0 15px rgba(0, 0, 0, 0.15);
    vertical-align: middle;
    padding: 10px;
    display: table-cell;
    font-size: 16px;
    color: white;
    font-weight: 400;
    font-weight: bold;
}
.padding {
    padding: 1rem;
    padding-left: 50px
}
.btn-change{
    -webkit-transition: all 0.5s ease-in-out;=
}
.btn-change:hover{
    -webkit-transform: scale(1.1);
}
.card2{

    background:  #cc2900;
    background: -webkit-gradient(linear, left top, left bottom, from(#ff9999), to( #cc2900));
    background: -o-linear-gradient(#ff9999,  #cc2900);
    background: linear-gradient(#ff9999,  #cc2900);
}
.card3{
    background:#006600;
    background: -webkit-gradient(linear, left top, left bottom, from(#00e600), to(#006600));
    background: -o-linear-gradient(#00e600, #006600);
    background: linear-gradient(#00e600, #006600);
}
.inner1 {
    background-image: url(https://assets.leetcode.com/static_assets/public/webpack_bundles/images/algorithm_bg.90562ce29.png);
    background-size: 100% 100%;
    height: 97;
    width: 101%;
    display: table;
}
.inner2{
    background-image: url(https://assets.leetcode.com/static_assets/public/webpack_bundles/images/database_bg.f3bec933a.png);
    background-size: 100% 100%;
    height: 97;
    width: 101%;
    display: table;
}

.card1{
    background: #0000e6;
    background: -webkit-gradient(linear, left top, left bottom, from(#ccccff), to(#0000e6));
    background: -o-linear-gradient(#ccccff, #0000e6);
    background: linear-gradient(#ccccff, #0000e6);
}
.card4{
    background: #8365cd;
    background: -webkit-gradient(linear, left top, left bottom, from(#d891c9), to(#8365cd));
    background: -o-linear-gradient(#d891c9, #8365cd);
    background: linear-gradient(#d891c9, #8365cd);
}
.inner3 {
    background-image: url(https://assets.leetcode.com/static_assets/public/webpack_bundles/images/shell_bg.c91db4414.png);
    background-size: 100% 100%;
    border-radius: 10px;
    height: 100px;
    width: 100%;
    display: table;
}
.inner4{
    background-image: url(https://assets.leetcode.com/static_assets/public/webpack_bundles/images/concurrency_bg.6ea4e46e1.png);
    background-size: 100% 100%;
    border-radius: 10px;
    height: 100px;
    width: 100%;
    display: table;
}
.table-fixed  {
    height: 375px;
    overflow-y: auto;
    width: 100%;
}

.table-fixed {
    display: block;
    font-size: medium;
}

.table-fixed  {
    float: left;
    position: relative;

    &::after {
        content: '';
        clear: both;
        display: block;
    }
}
.padding {
    padding: 1rem
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
    font-weight: 500;
    font-size: .875rem;
    text-transform: uppercase
}

.table td,
.jsgrid .jsgrid-table td {
    font-size: 0.875rem;
    padding: .475rem 0.4375rem
}
#link:hover{
     color:blue;
     text-decoration:underline
 }

    </style>
    <body>
    <?php include('includes/navbar1.php'); ?>
    <div class="wrapper">
    <div id="content">
			<div class="page-content page-container">
     				<div class="padding">
     				<div class="row container d-flex justify-content-center">
              			<div class="col-lg-10 grid-margin stretch-card">
    <!--?php include('includes/sidebar.php'); ?-->
    <nav class="container-fluid">
        <nav class = "row">
            <div class="card1 btn-change button-primary col-md-2 col-lg-2 "><div class="inner1"><div class="text-center title"><a href="Question_List.php" style="color: #fff">Question Archives</a></div></div></div>
            <div class="card2 btn-change button-primary col-md-2 col-lg-2 "><div class="inner2"><div class="text-center title"><a href="Experience_List.php" style="color: #fff">Interview Experience </a></div></div></div>
            <div class="card3 btn-change button-primary col-md-2 col-lg-2 "><div class="inner3"><div class="text-center title"><a href="Bookmark_List.php" style="color: #fff">Bookmarked Questions</a></div></div></div>
            <div class="card4 btn-change button-primary col-md-2 col-lg-2 "><div class="inner4"><div class="text-center title"><a href="Experience_Sharing.php" style="color: #fff">Share your Experience</a></div></div></div>
        </nav>
        <html>
          <style>
        #c1{
            position: relative;
            width: 80%;
            clear: both;
            left:-20%;
            margin-top: 5%;
            margin-bottom: 2%;
        }
        </style>
        <head>
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
            <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
            <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.js"></script>
            <title>bar</title>
        </head>
        <body>
            <div class="container col-md-10 col-lg-10" id="c1">
            <canvas id="myChart"></canvas>
            </div>
        
        <script>
        var years=<?=$json2?>;
        var number_of_ques=<?=$json1?>;
        /*for (i in data){
            years.push()
        }*/
        let myChart = document.getElementById('myChart').getContext('2d');
        let massPopChart = new Chart(myChart, {
        type:'bar', // bar, horizontalBar, pie, line, doughnut, radar, polarArea
            data:{
                labels:years,//['2021', '2020', '2019'],
                datasets:[{
                    label:'Number of Questions',
                        data:number_of_ques,/*[
                                100,100,100
                            ],*/
          //backgroundColor:'green',
                        backgroundColor:[
                            'rgba(255, 99, 132, 0.6)',
                            'rgba(54, 162, 235, 0.6)',
                            'rgba(255, 206, 86, 0.6)',
                            'rgba(75, 192, 192, 0.6)',
                            'rgba(153, 102, 255, 0.6)',
                            'rgba(255, 159, 64, 0.6)',
                            'rgba(255, 99, 132, 0.6)'
                            ],
                    borderWidth:1,
                    borderColor:'#777',
                    hoverBorderWidth:3,
                    hoverBorderColor:'#000'
                }]
        },
        options:{
            title:{
                display:true,
                text:'Number of Questions per year',
                fontSize:15,
                position:'bottom',
                float:'left'
            },
            legend:{
                display:true,
                position:'right',
                labels:{
                    fontColor:'#000'
                     }
                },
            layout:{
                padding:{
                left:50,
                right:0,
                bottom:0,
                top:0
                }
            },
            tooltips:{
                enabled:true
            }
        }
    });
  </script>
</body>

</html>
<html>
    <style>
        
    
        #c2{
            position: absolute;
            float: left;
            width: 70%;
            left:55%;
            top: 34%;
        }

}
        </style>
        <head>
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
            <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
            <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.js"></script>
            <title>bar</title>
        </head>
        <body>
            <div class="container col-md-9 col-lg-9 " id="c2">
            <canvas id="myChart1"></canvas>
            </div>

        <script>
        let myChart1 = document.getElementById('myChart1').getContext('2d');
        let massPopChart1= new Chart(myChart1, {
        type:'pie', // bar, horizontalBar, pie, line, doughnut, radar, polarArea
            data:{
                labels:['Computer Science', 'Electrical', 'Mechanical'],
                datasets:[{
                    label:'Number of Questions',
                        data:[
                                350,
                                320,
                                300,
                            ],
          //backgroundColor:'green',
                        backgroundColor:[
                            'rgba(255, 99, 132, 0.6)',
                            'rgba(54, 162, 235, 0.6)',
                            'rgba(255, 206, 86, 0.6)',
                            'rgba(75, 192, 192, 0.6)',
                            'rgba(153, 102, 255, 0.6)',
                            'rgba(255, 159, 64, 0.6)',
                            'rgba(255, 99, 132, 0.6)'
                            ],
                    borderWidth:1,
                    borderColor:'#777',
                    hoverBorderWidth:3,
                    hoverBorderColor:'#000'
                }]
        },
        options:{
            title:{
                display:true,
                text:'Number of Questions Asked per Department',
                fontSize:15,
                position:'bottom',
            },
            legend:{
                display:true,
                position:'right',
                labels:{
                    fontColor:'#000'
                     }
                },
            layout:{
                padding:{
                left:50,
                right:0,
                bottom:0,
                top:0
                }
            },
            tooltips:{
                enabled:true
            }
        }
    });
  </script>
</body>

</html>
    </div>
        </div>
    </nav>
    </div>
    <footer>
    <?php include('includes/footer.php'); ?>
    </footer>
<script type="text/javascript">
            $(document).ready(function () {
    
                $('#sidebarCollapse').on('click', function () {
                    $('#sidebar, #content').toggleClass('active');
                });
            });
</script>
    </body>