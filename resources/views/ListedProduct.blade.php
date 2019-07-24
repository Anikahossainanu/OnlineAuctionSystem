<!DOCTYPE html>
<html lang="en">

<head>

    @include('layout.admin.header')

</head>

<body id="page-top">
  
    @include('layout.admin.navbar')
  
  <div id="wrapper">

    @include('layout.admin.sidebar')

    <div id="content-wrapper">
      <div class="container-fluid">

        <!-- Breadcrumbs-->
        <ol class="breadcrumb">
          <li class="breadcrumb-item">
            <a href="AdminPanel.php">Dashboard</a>
          </li>
          <li class="breadcrumb-item active">Tables</li>
        </ol>

        <!-- DataTables Example -->
        <div class="card mb-3">
          <div class="card-header">
            <i class="fas fa-table"></i>
            Listed Product</div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                  <tr>
                    <th>Product Name</th>
                    <th>Category</th>
                    <th>Description</th>
                    <th>Current Bid</th>
                    <th>Time</th>
                    <th>Action</th>
                  </tr>
                </thead>
                
                <tbody>
                  <tr>
                    <td>HP Laptop</td>
                    <td>Laptop</td>
                    <td>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</td>
                    <td>$1000</td>
                    <td>4day 5hr 2sec</td>
                    <td><button class="btn btn-success">View</button></td>
                  </tr>
                  <tr>
                    <td>HP Laptop</td>
                    <td>Laptop</td>
                    <td>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</td>
                    <td>$1000</td>
                    <td>4day 5hr 2sec</td>
                    <td><button class="btn btn-success">View</button></td>
                  </tr>
                  <tr>
                    <td>HP Laptop</td>
                    <td>Laptop</td>
                    <td>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</td>
                    <td>$1000</td>
                    <td>4day 5hr 2sec</td>
                    <td><button class="btn btn-success">View</button></td>
                  </tr>
                  <tr>
                    <td>HP Laptop</td>
                    <td>Laptop</td>
                    <td>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</td>
                    <td>$1000</td>
                    <td>4day 5hr 2sec</td>
                    <td><button class="btn btn-success">View</button></td>
                  </tr>
                  
                </tbody>
              </table>
            </div>
          </div>
        </div>


      </div>
    @include('layout.admin.footer')

    </div>

  </div>

  

    @include('layout.admin.logoutModal')

    @include('layout.admin.scripts')

</body>

</html>
