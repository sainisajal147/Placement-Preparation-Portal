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
<?php include('includes/navbar1.php'); ?>
  <div class="wrapper">
  <div id="content" style="min-height: 550px;">
     <div class="page-content page-container" id="page-content">
      <div class="padding">
          <div class="row container d-flex justify-content-center">
              <div class="col-lg-10 grid-margin stretch-card">
                  <div class="card" style="width: 829px;     margin-left: 55px; margin-top: 36px;">
                  <div class="card-header text-center">
                  ADD QUESTIONS
                    </div>
                      <div class="card-body">
                          <div class="table-responsive">
                              <table id="faqs" class="table table-hover" >
                                  
                                  <tbody>
                                      <tr id="faqs-row0">
                                        <td>
                                          <select class="form-control mdb-select md-form" searchable="Search here..">
                                            <option value="" disabled selected>Choose type of Question</option>
                                            <option value="1">Coding</option>
                                            <option value="2">Technical</option>
                                            <option value="3">Apptitude</option>
                                            <option value="3">HR</option>
                                          </select>
                                        </td>
                                          <td>
                                            <select class="form-control mdb-select md-form" searchable="Search here..">
                                              <option value="" disabled selected>Choose Discipline of Question</option>
                                              <option value="1">Computer Science</option>
                                              <option value="2">Mechanical</option>
                                              <option value="3">Electrical</option>
                                            </select>
                                          </td>
                                          
                                          <td class="mt-10"><button onclick="document.getElementById('faqs-row0').remove();  document.getElementById('faqs-row1').remove();" class="badge badge-danger"><i class="fa fa-trash"></i> Delete</button></td>
                                      </tr>
                                      <tr id="faqs-row1">
                                        <td colspan="3">
                                          <div class="form-group">
                                            <textarea class="form-control" id="exampleFormControlTextarea1"  rows="6" placeholder="Type Question here.."></textarea>
                                          </div>
                                        </td>
                                      </tr>
                                  </tbody>
                              </table>
                          </div>
                          <div class="text-center float-right"><button onclick="addfaqs();" class="badge badge-success"><i class="fa fa-plus"></i> ADD NEW</button></div>
                          <br>
                          <div ><button type="submit" class="btn btn-primary">Submit</button></div>
                      </div>
                  </div>
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
  var faqs_row = 2;
  function addfaqs() {
      var row=faqs_row+1;
  html = '<tr id="faqs-row' + faqs_row + '">';
      html += '<td><select class="form-control mdb-select md-form"><option value="" disabled selected>Choose type of Question</option><option value="1">Coding</option><option value="2">Technical</option><option value="3">Apptitude</option><option value="4">HR</option></select></td>';
      html += '<td><select class="form-control mdb-select md-form"><option value="" disabled selected>Choose Discipline of Question </option><option value="1">Computer Science</option><option value="2">Mechanical</option><option value="3">Electrical</option></select></td>';
      html += '<td class="mt-10"><button class="badge badge-danger" onclick="$(\'#faqs-row' + faqs_row + '\').remove();  $(\'#faqs-row' + row + '\').remove();"><i class="fa fa-trash"></i> Delete</button></td>';

      html += '</tr>';
      faqs_row++;
      html += '<tr id="faqs-row' + faqs_row + '">';
      html += '<td colspan=3><div class ="form-group"><textarea class="form-control" id="exampleFormControlTextarea1" rows="6" placeholder="Type Question here.."></textarea></div></td>';
      
      html += '</tr>';  


  $('#faqs tbody').append(html);

  faqs_row++;
  }
</script>
</body>