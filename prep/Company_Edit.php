
  <?php include('includes/header.php'); ?>
  <style>
  body {
    background-color: #f9f9fa;
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
.table-fixed{
    height: 300px;
    overflow-y: auto;
    width: 100%;
    display: block;
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
    overflow-y: auto;
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
    text-align: center;
}

.table td,
.jsgrid .jsgrid-table td {
    padding: .475rem 0.4375rem;
    text-align: -webkit-center;;
    width: 210px;
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
    font-size: 12px;
    line-height: 1;
    padding: .375rem .5625rem;
    font-weight: normal;
    border: none
}
.save{
  display: none;
}
.search{
  float:right;
}
.shift
{
  float:left;
  font-weight:bold;
}
  </style>
  </head>
<body>
<?php include('includes/navbar.php'); ?>
<div class="wrapper">
<?php include('includes/admin_site2.php'); ?>
  <div id="content">
     <div class="page-content page-container" id="page-content">
        <div class="padding">
          <div class="row container d-flex justify-content-center">
            <div class="col-lg-10 grid-margin stretch-card">
             
              <div class="card" style="width: 829px;">
                <div class="card-header" style="text-align: center;">
                    <div class="shift">Company Edit Table</div>
                    <div class="search">
                    <input class="form-control" id="myInput" onkeyup="func()" type="text" placeholder="Search..">
                    </div>
                </div>
                  <div class="card-body ">
                    <div>
                      <table class="table table-striped table-fixed">
                        <tbody id="myTable">   
                            <thead>
                              <tr>
                                <th>Company ID</th>
                                <th>Company Name</th>
                                <th>Opportunity</th>
                              </tr>
                            </thead>  
                                <tr class="company">
                                  <td id="name_row1">1</td>
                                  <td id="country_row1" >Amazon</td>
                                  <td id="level_row1">
                                    <select disabled class="mdb-select md-form"  searchable="Search here..">
                                    <option value="" disabled selected>Opportunity</option>
                                      <option value="1">Placement</option>
                                      <option value="2">Internship</option>
                                      <option value="3">Both</option>
                                    </select>
                                  </td>
                                  <td>
                                  <input type="button" id="edit_button1" value="Edit" class="edit"  onclick="edit_row('1');">
                                  <input type="button" id="save_button1" value="Save" class="save" onclick="save_row('1');" >
                                  </td>
                                </tr>
                  
                                <tr class="company">
                                  <td id="name_row2">2</td>
                                  <td id="country_row2" >Google</td>
                                  <td id="level_row2">
                                    <select disabled class="mdb-select md-form" searchable="Search here..">
                                      <option value="" disabled selected>Opportunity</option>
                                      <option value="1">Placement</option>
                                      <option value="2">Internship</option>
                                      <option value="3">Both</option>
                                    </select>
                                  </td>
                                  <td>
                                  <input type="button" id="edit_button2" value="Edit" class="edit" onclick="edit_row('2')">
                                  <input type="button" id="save_button2" value="Save" class="save" onclick="save_row('2')">
                                  </td>
                                </tr>
                  
                                <tr class="company">
                                  <td id="name_row3">3</td>
                                  <td id="country_row3" >Facebook</td>
                                  <td id="level_row3">
                                    <select disabled class="mdb-select md-form" searchable="Search here..">
                                      <option value="" disabled selected>Opportunity</option>
                                      <option value="1">Placement</option>
                                      <option value="2">Internship</option>
                                      <option value="3">Both</option>
                                      
                                    </select>
                                  </td>
                                  <td>
                                  <input type="button" id="edit_button3" value="Edit" class="edit" onclick="edit_row('3')">
                                  <input type="button" id="save_button3" value="Save" class="save" onclick="save_row('3')">
                                  </td>
                                </tr>
                                <tr class="company">
                                  <td id="name_row4" >4</td>
                                  <td id="country_row4">Zomato</td>
                                  <td id="level_row4">
                                    <select disabled class="mdb-select md-form" searchable="Search here..">
                                      <option value="" disabled selected>Opportunity</option>
                                      <option value="1">Placement</option>
                                      <option value="2">Internship</option>
                                      <option value="3">Both</option>
                                      
                                    </select>
                                  </td>
                                  <td>
                                  <input type="button" id="edit_button4" value="Edit" class="edit" onclick="edit_row('4')">
                                  <input type="button" id="save_button4" value="Save" class="save" onclick="save_row('4')">
                                  </td>
                                </tr>
                                <tr class="company">
                                  <td id="name_row5">5</td>
                                  <td id="country_row5" >KRG</td>
                                  <td id="level_row5">
                                    <select disabled class="mdb-select md-form" searchable="Search here..">
                                      <option value="" disabled selected>Opportunity</option>
                                      <option value="1">Placement</option>
                                      <option value="2">Internship</option>
                                      <option value="3">Both</option>
                                      
                                    </select>
                                  </td>
                                  <td>
                                  <input type="button" id="edit_button5" value="Edit" class="edit" onclick="edit_row('5')">
                                  <input type="button" id="save_button5" value="Save" class="save" onclick="save_row('5')">
                                  </td>
                                </tr>
                                <tr class="company">
                                  <td id="name_row6">6</td>
                                  <td id="country_row6">Uber</td>
                                  <td id="level_row6">
                                    <select disabled class="mdb-select md-form" searchable="Search here..">
                                      <option value="" disabled selected>Opportunity</option>
                                      <option value="1">Placement</option>
                                      <option value="2">Internship</option>
                                      <option value="3">Both</option>
                                      
                                    </select>
                                  </td>
                                  <td>
                                  <input type="button" id="edit_button6" value="Edit" class="edit" onclick="edit_row('6')">
                                  <input type="button" id="save_button6" value="Save" class="save" onclick="save_row('6')">
                                  </td>
                                </tr>
                                <tr class="company">
                                  <td id="name_row7">7</td>
                                  <td id="country_row7">Dell</td>
                                  <td id="level_row7">
                                    <select disabled class="mdb-select md-form" searchable="Search here..">
                                      <option value="" disabled selected>Opportunity</option>
                                      <option value="1">Placement</option>
                                      <option value="2">Internship</option>
                                      <option value="3">Both</option>
                                      
                                    </select>
                                  </td>
                                  <td>
                                  <input type="button" id="edit_button7" value="Edit" class="edit" onclick="edit_row('7')">
                                  <input type="button" id="save_button7" value="Save" class="save" onclick="save_row('7')">
                                  </td>
                                </tr>
                          </tbody>
                        </table>    
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
function func() {
var input, filter, ul, li, a, i, txtValue,l;
    input = document.getElementById("myInput");
    filter = input.value.toUpperCase();
    li=document.getElementsByClassName("company");
    for (i = 0; i < li.length; i++) {
        a = li[i];
        txtValue = a.textContent || a.innerText;
        if (txtValue.toUpperCase().indexOf(filter) > -1) {
            li[i].style.display = "";
        } else {
            li[i].style.display = "none";
        }
    }
}
</script>
<script>
    function edit_row(no)
   {
    document.getElementById("edit_button"+no).style.display="none";
    document.getElementById("save_button"+no).style.display="block";
  
    var name=document.getElementById("name_row"+no);
    var country=document.getElementById("country_row"+no);
    var level=document.getElementById("level_row"+no);
       
    var name_data=name.innerHTML;
    var country_data=country.innerHTML;
    var level_data=level.innerHTML;
       
    name.innerHTML="<input type='text' id='name_text"+no+"' value='"+name_data+"'>";
    country.innerHTML="<input type='text' id='country_text"+no+"' value='"+country_data+"'>";
    level.innerHTML='<select id="levels-list'+no+'">\
                    <option value="A" id="option-1">Placement</option>\
                    <option value="B" id="option-2">Internship</option>\
                    <option value="C" id="option-3">Both</option>\
                    </select>' ;
      
   }
   function save_row(no)
  {
  
  var name_val=document.getElementById("name_text"+no).value;
  var country_val=document.getElementById("country_text"+no).value;
  var level_data=document.getElementById("levels-list"+no).value;
  document.getElementById("name_row"+no).innerHTML=name_val;
  document.getElementById("country_row"+no).innerHTML=country_val;
  document.getElementById("levels-list"+no).value = level_data; 
  document.getElementById("levels-list"+no).disabled=true;

  document.getElementById("edit_button"+no).style.display="block";
    document.getElementById("save_button"+no).style.display="none";

  }

</script>

<script type="text/javascript">
            $(document).ready(function () {
                $('#sidebarCollapse').on('click', function () {
                    $('#sidebar, #content').toggleClass('active');
                });
            });
</script>
</body>
</html>
