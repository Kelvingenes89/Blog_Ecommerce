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
  
          display: flex;
          justify-content: center;
          align-items: center;
          
  
        }
        .table_deg{
          text-align: center;
          margin: auto;
          border: 3px solid rgb(63, 83, 83);
          margin-top: 50px;
        }
        th{
          background-color: rgb(32, 41, 45);
          padding: 15px;
          font-size: 20px;
          font-weight: bold;
        }
        td{
         
          padding: 15px;
          background-color: rgb(76, 89, 94);
          font-size: 20px;
          font-weight: bold;
          color: rgb(223, 209, 209); 
          border: 1px solid rgb(77, 41, 41);
        }
  
      </style>

  </head> 
  <body>
   @include('admin.header')
    

   @include('admin.slidebar')
      <!-- Sidebar Navigation end-->
      <div class="page-content">
        <div class="page-header">
          <div class="container-fluid">


            <form action="{{url('product_search')}}" method="get">

              @csrf
              <input type="search" name="search">
              <input type="submit" class="btn btn-secondary" value="Search"> 
            </form>
            
            <div>
             <table>
              <tr>
                <th>Product Title
                </th>
                <th> Description</th>
                <th>Category</th>
                <th>Price</th>
                 <th>Quantity</th>
                 <th>Image</th>
                 <th>Edit</th>
                 <th>Delete</th>
              </tr>
              @foreach($product as $products)
                <tr>
                    <td name="title" >{{$products->title}}</td>
                    <td name="description" >{{$products->description}}</td>
                    <td name="category">{{$products->category}}</td>
                    <td name="price">{{$products->price}}</td>
                    <td name="quantity">{{$products->quantity}}</td>
                     
                    <td>
                        <img height="100" width="100" src="{{ asset('products/' . $products->image) }}" alt="Product Image">
                    </td>
                    <td>
                      <a class="btn btn-success" href="{{url('update_product',$products->id)}}">Edit</a>
                  </td>

                    <td>
                        <a class="btn btn-danger" href="{{url('delete_product',$products->id)}}">Delete</a>
                    </td>

                </tr>
            @endforeach

             </table>
             










            </div>
          







      </div>
    </div>
    <!-- JavaScript files-->
    @include('admin.js')
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