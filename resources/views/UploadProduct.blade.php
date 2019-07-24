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
            <label for="name">Product Name</label>
            <input type="text" class="form-control" id="name" placeholder="Enter product name">
          </div>
          <div class="form-group">
              <label for="exampleFormControlSelect1">Category</label>
              <select class="form-control" id="exampleFormControlSelect1">
                <option>1</option>
                <option>2</option>
                <option>3</option>
                <option>4</option>
                <option>5</option>
              </select>
            </div>
          
          <div class="form-group">
            <label for="name">Description</label>
            <input type="text" class="form-control" id="name" placeholder="Description">
          </div>
          
          <div class="form-group">
            <label for="name">Enter Base Price</label>
            <input type="number" class="form-control" id="name" placeholder="Enter base price">
          </div>

          

          <div class="form-group">
            <label for="name">Enter End Time</label>
            <input type="Time" class="form-control" id="name" placeholder="Enter End Time">
          </div>
          <div class="input-group">
                       <div class="input-group-prepend">
                         <span class="input-group-text" id="inputGroupFileAddon01">Upload</span>
                       </div>
                       <div class="custom-file">
                         <input type="file" class="custom-file-input" id="inputGroupFile01"
                           aria-describedby="inputGroupFileAddon01">
                         <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
                       </div>
                     </div>
                     <br>


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
