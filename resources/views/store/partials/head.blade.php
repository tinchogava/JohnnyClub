@inject('cart', 'App\Http\Controllers\CartController')

<header id="header"  style="height:60px">
    
                  <div class="top-bar navbar-inverse">
                        <div class="container navbar-collapse">
                              <div class="row">
                                    <div class="col-sm-6 col-xs-4">
                                          <div class="search collapse navbar-collapse navbar-left">
                                                <p>
                                                      <form role="form">
                                                            <input type="text" class="search-form" autocomplete="off" placeholder="Que estas buscando..?">
                                                            <i class="fa fa-search"></i>
                                                       </form>
                                          </div>
                                    </div>
                                     <div class="col-sm-3 col-xs-4">
                                     </div>
                                    <div class="col-sm-3 col-xs-8">
                                          <div class="collapse navbar-collapse navbar-left">
                                                <ul class="nav navbar-nav">
                                                      <li><a href="{{route('cart-show')}}"><i class ="fa fa-shopping-cart"></i>&nbsp;({{ $cart->cartCount() }})<span class="sr-only"></span></a></li>
                                                      <li class = "dropdown">
                                                      	@include('store.partials.menu-user')
            										  </li>	                                     
                                                </ul>                                      
                                          </div>
                                    </div>      
                              </div> 
                        </div> 
                  </div>
</header> 
