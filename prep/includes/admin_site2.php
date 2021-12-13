<style>
    #sidebar {
    min-width: 250px;
    max-width: 250px;
    background: #4a3c8d;
    color: #fff;
    transition: all 0.3s;
    
}

#sidebar.active {
    max-height: none;
    margin-left: -250px;
}

#sidebar .sidebar-header {
    padding: 20px;
    background: #4a3c8d;
}

#sidebar ul.components {
    padding: 20px 0;
}

#sidebar ul p {
    color: #fff;
    padding: 10px;
}

#sidebar ul li a {
    padding: 10px;
    font-size: 1.1em;
    display: block;
}
#sidebar ul li a:hover {
    color: #fff;
    background: #6d7fcc;
}

#sidebar ul li.active > a, a[aria-expanded="true"] {
    color: #fff;
    background: #5564a4;
}
body {
    font-family: 'Poppins', sans-serif;
    background: #fafafa;
}

p {
    font-family: 'Poppins', sans-serif;
    font-size: 1.1em;
    font-weight: 300;
    line-height: 1.7em;
    color: #999;
}
#sidebarCollapse
{
    background-color: #4a3c8d;
    border-color: black; 
}
a, a:hover, a:focus {
    color: inherit;
    text-decoration: none;
    transition: all 0.3s;
}

.wrapper {
    display: flex;
   width: 100%;
}


ul ul a {
    font-size: 0.9em !important;
    padding-left: 30px !important;
    background: #6d7fcc;
}

.logo
{
    margin-right: 5px;
    width: 35px;
    height: 34px;
}
#content {
    
    width: calc(100% - 1000px);
    padding: 40px;
    transition: all 0.3s;
    top: 70px;
    right: 0;
    min-height:550px;
}

#content.active {
    width: 100%;
}
    </style>
<nav id="sidebar">
        <ul class="list-unstyled components">
            <li>
                <a href="#" >Admin Site</a>
            </li>
            <li >
                <a href="Question_Approval.php">Question Approval</a>
            </li>
            <li class="active">
                <a href="Company_Edit.php">Edit Company Info</a>
            </li>
            <li>
                <a href="Company.php">Add Company</a>
            </li>
        </ul>
</nav>
