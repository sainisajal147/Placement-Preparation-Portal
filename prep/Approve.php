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
.table-fixed  {
    height: 300px;
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
    border-radius: 0;
    font-size: 1em;
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
.col1{
    width:16%;
    text-align:center
}
.col2{
    width:70%;
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
.btn-accept {
  color:#fff;
  background-color:green;
  border-color:green;
}
.btn-reject {
  color:#fff;
  background-color:red;
  border-color: red;
}
}
  </style>
<body>
<?php include('includes/navbar.php'); ?>
  <div class="wrapper">
      <?php include('includes/admin_side1.php'); ?>
  <div id="content">
     <div class="page-content page-container" id="page-content">
      <div class="padding">
          <div class="row container d-flex justify-content-center">
       <div class="col-lg-10 grid-margin stretch-card">

        <div class="card" style="width: 829px;">
            <div class="card-header" style="text-align: left;font-weight: bold; font-size: large;">
              Question
            </div>
            <div class="card-body">
              <h5 class="card-title">Given an unsorted array A of size N of non-negative integers, find a continuous sub-array which adds to a given number S. </h5>
              <div class="btn-toolbar float-right">
              <div style="padding-right: 10px;">
              <button type="button" class="btn btn-accept" data-toggle="modal" data-target="#modalaccept">Accept</button>
              </div>
              <div >
                <button type="button" class="btn btn-reject" data-toggle="modal" data-target="#modalreject">Reject</button>
              </div> 
                
            </div>
            </div>
          </div>
        <div>
          <br>
    <div class="card" style="width: 829px;">
        <div class="card-header"style="text-align: left;font-weight: bold; font-size: large;">
        Questions Table

<input class="form-control" id="myInput" type="text" style="float: right; width:50%;"placeholder="Search by question or id..">
                </div>
        <div class="card-body ">
     <br>

            <table class="table table-striped table-fixed">
              <thead>
                <tr>
                  <th class="col1" style=" text-align: center;">ID</th>
                  <th class="col2"style="text-align: center;">Question</th>
                </tr>
              </thead>

              <tbody id="myTable">
                <tr>
                  <td class="col1">1</td>
                  <td class="col2">Given two arrays, 1,2,3,4,5 and 2,3,1,0,5 find which number is not present in the second array </td>
                </tr>
                <tr>
                <td class="col1">1</td>
                <td class="col2" >Doe</td>
                </tr>
                <tr>
                  <td class="col1">2</td>
                  <td class="col2" >Doe</td>
                </tr>
                <tr>
                <td class="col1">3</td>
                <td class="col2" >Doe</td>
                </tr>
                <tr>
                  <td class="col1">4</td>
                  <td class="col2" >Doe</td>
                </tr>
                <tr>
                <td class="col1">5</td>
                <td class="col2" >Doe</td>
                </tr>
                <tr>
                  <td class="col1">6</td>
                  <td class="col2" >Doe</td>
                </tr>
                <tr>
                <td class="col1">7</td>
                <td class="col2" >Doe</td>
                </tr>
                <tr>
                  <td class="col1">8</td>
                  <td class="col2" >Doe</td>
                </tr>
                <tr>
                <td class="col1">9</td>
                <td class="col2" >Doe</td>
                </tr>
                <tr>
                  <td class="col1">10</td>
                  <td class="col2" >Doe</td>
                </tr>
                <tr>
                <td class="col1">11</td>
                <td class="col2" >Doe</td>
                </tr>
              </tbody>
              </div>
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
<div class="modal fade" id="modalaccept" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Accept Question</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <div class="form-group">
  <textarea id="form7" class="md-textarea form-control" rows="5">Given an unsorted array A of size N of non-negative integers, find a continuous sub-array which adds to a given number S.
                                    </textarea>
</div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-accept" data-dismiss="modal">Accept</button>
      </div>
    </div>
  </div>
</div>
<div class="modal fade" id="modalreject" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Reject Question</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <div class="form-group">
    <label for="formGroupExampleInput">Enter the corresponding Question ID:</label>
    <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Question ID">
  </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-reject" data-dismiss="modal">Reject</button>
      </div>
    </div>
  </div>
</div>
    </div>
  </div>

<?php include('includes/footer.php'); ?>
<script type="text/javascript">
            $(document).ready(function () {
    
                $('#sidebarCollapse').on('click', function () {
                    $('#sidebar, #content').toggleClass('active');
                });
            });
</script>
<script>
$(document).ready(function(){
  $("#myInput").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $("#myTable tr").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
});
</script>
