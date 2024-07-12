<!DOCTYPE html>
<html>

<head>
  @include('home.css')
  


  <style type="text/css">
    .div_center{
        display: flex;
        justify-content: center;
        align-items: center;
        margin: 60px;
        
    }
    table{
        border: 2px solid black;
        text-align: center;
        width: 800px;

    }

    th{
        border: 2px solid black;
        text-align: center;
        color: white;
        font: 20px;
        font-weight: bold;
        background-color: rgb(140, 202, 195); 
    }
    

    td{
        border: 2px solid skyblue;
    }
  </style>
  
</head>

<body>
  
    <!-- header section strats -->
   @include('home.header')
    <!-- end header section -->




    <!-- cart details section -->

    <div>
        <div class="div_center">

        <table>
            <tr>
            <th>Product Title</th>
            <th>Price</th>
            <th>Image</th>
            </tr>
          @foreach($cart as $cart)
            <tr>
                <td>{{$cart->product->title}}</td>
                <td>{{$cart->product->price}}</td>
                <td>
                    <img width="150" src="/products/{{$cart->product->image}}" alt="">
                </td>
            </tr>
            @endforeach
        </table>
    </div>

   


              
            
               

          </div>
          
        </div>
      </section>
    



    <!-- end product details section -->
  </div>
  <!-- end hero area -->

  <!-- shop section -->

  
  <!-- end shop section -->

  <!-- saving section -->

  @include('home.saving')

  <!-- end saving section -->

  <!-- why section -->

  @include('home.why')
  <!-- end why section -->


  <!-- gift section -->
  @include('home.gift')
  

  <!-- end gift section -->


  <!-- contact section -->

  
  <!-- end contact section -->

  <!-- client section -->
  @include('home.footer')

</body>

</html>