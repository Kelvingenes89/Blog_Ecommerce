<!DOCTYPE html>
<html>
  <head> 
    @include('admin.css')
    
    <style type="text/css">
        input[type='text']{
            width: 400px;
            height: 50px;
        }
       .div_deg{
        dispay:flex;
        justify-content: center;
        align-items: center;
        margin: 30px;

       }


  </head> 
  <body>
   @include('admin.header')
    

   @include('admin.slidebar')
      <!-- Sidebar Navigation end-->
      <div class="page-content">
        <div class="page-header">
          <div class="container-fluid">
            
         <div class".div_deg >
            <form>

                <input type="text" name="category">
                <input class="btn btn-primary" type="submit" value"Add Category">

            </form>
        </div>


            
      </div>
    </div>
    <!-- JavaScript files-->
    <script src=" {{ asset('/admincss/vendor/jquery/jquery.min.js') }}"></script>
    <script src=" {{ asset('/admincss/vendor/popper.js/umd/popper.min.js') }}"> </script>
    <script src=" {{ asset('/admincss/vendor/bootstrap/js/bootstrap.min.js') }}"></script>
    <script src=" {{ asset('/admincss/vendor/jquery.cookie/jquery.cookie.js') }}"> </script>
    <script src=" {{ asset('/admincss/vendor/chart.js/Chart.min.js') }}"></script>
    <script src=" {{ asset('/admincss/vendor/jquery-validation/jquery.validate.min.js') }}"></script>
    <script src=" {{ asset('/admincss/js/charts-home.js') }}"></script>
    <script src=" {{ asset('/admincss/js/front.js') }}"></script>
  </body>
</html> 