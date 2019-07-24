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

        

        <form>
          <div class="form-group">
            <label for="name">Name</label>
            <input type="text" class="form-control" id="name" placeholder="Rahat Arif">
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1">Email address</label>
            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="rahat@gmail.com">
          </div>
          <div class="form-group">
            <label for="name">Address</label>
            <input type="text" class="form-control" id="name" placeholder="Chittagong">
          </div>
          
          <button type="submit" class="btn btn-primary">Submit</button>
        </form>
        <br><br>
        <hr>
        <br><br>
        <h3>Change Password</h3>
        <form>
          <div class="form-group">
            <label for="exampleInputPassword1">Old Password</label>
            <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Old Password">
          </div>

          <div class="form-group">
            <label for="exampleInputPassword1">Password</label>
            <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">Repeat Password</label>
            <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Repeat Password">
          </div>
          
          <button type="submit" class="btn btn-primary">Submit</button>
        </form>

      </div>
    @include('layout.admin.footer')

    </div>

  </div>

  

    @include('layout.admin.logoutModal')

    @include('layout.admin.scripts')

</body>

</html>
