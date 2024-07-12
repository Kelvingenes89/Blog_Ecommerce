<!DOCTYPE html>
<html>

<head>
  @include('home.css')

  <style type="text/css">
    .div_center{
        display: flex;
        justify-content: center;
        align-items: center;
        padding: 30px;
    }
    .detail-box{
        padding: 10px;
    }


  </style>
</head>

<body>
  <div class="hero_area">
    <!-- header section strats -->
   @include('home.header')
    <!-- end header section -->




    <!-- product details section -->

    <section class="shop_section layout_padding">
        <div class="container">
          <div class="heading_container heading_center">
            <h2>
              Latest Products
            </h2>
          </div>
          <div class="row">
    
                
            
              <div class="col-md-10 ">
                <div class="box">
                  
                    <div class="div_center" >
                      <img width="400" src="/products/{{$data->image}}" alt="">
                    </div>
                    <div class="detail-box">
                      <h6>
                        {{($data->title)}}
                      </h6>
                      <h6>
                        Price
                        <span>Tsh{{($data->price)}}
                        </span>
                      </h6>
                    </div>

                    <div class="detail-box">
                        <h6>Category : {{($data->category)}}
                        </h6>
                        <h6>
                          Available Quantity
                          <span>{{($data->quantity)}}
                          </span>
                        </h6>
                      </div>
                
                   
                  
                </div>
              
              </div>

              <div class="col-md-10 ">
                <div class="box">
                  
                    <div class="div_center" >
                     
                    </div>
                    
                    <div class="detail-box">
                        <p>{{$data->description}}</p>
                      </div>
                
                   
                  
                </div>
              
              </div>






              
            </div>
               

          </div>
          <div class="btn-box">
            <a href="">
              View All Products
            </a>
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