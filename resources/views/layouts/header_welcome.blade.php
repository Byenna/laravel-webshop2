<nav class="header_welcome_nav navbar navbar-expand-md navbar-light shadow-sm">
    <div class="container">
    <a class="navbar-brand" href="{{ url('/') }}">
        <h2 class="cherk_title"  >&#x1D554;&#x1D559;&#x1D556;&#x1D563;&#x1D55C;&#x1D55C;&#x1D560;&#x1D557;&#x1D557;&#x1D55A;&#x1D556;</h2>
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
        <ul class="navbar-nav me-auto"></ul>

                    <!-- Right Side Of Navbar -->
        <ul class="navbar-nav ms-auto">
                        <!-- Authentication Links -->
                 
                  
            @guest
                @if (Route::has('login'))
                    <!-- webshop-link is visible only when user is nog logged in -->
                     <li class="nav-item">
                        <a class="nav-link" href="{{ url('/products') }}">{{ __('Webshop') }}</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                    </li>
                @endif

                @if (Route::has('register'))
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                    </li>
                @endif
                
            @else
                <li class="nav-item dropdown">
                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                       <b>{{ Auth::user()->first_name }}</b> 
                    </a>

                    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                                        document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>

                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown" style="color:beige">
                            <a class="dropdown-item" href="{{ route('logout') }}" 
                            onclick="event.preventDefault();
                                            document.getElementById('logout-form').submit();" style="color:beige">
                                {{ __('Logout') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </div>
                    </li>
                    @if (Route::has('login'))
                    <!-- webshop-link is visible only when user is nog logged in -->
                     <li class="nav-item">
                        <a class="nav-link" href="{{ url('/products') }}">{{ __('Webshop') }}</a>
                    </li>
                @endif


                @endguest
            </ul>
        </div>
            <cart-component ref="shoppingComponent" :shopping-cart="shoppingCart"  :total-quantity="totalQuantity" :total-price="totalPrice" :total-price-no-sale="totalPriceNoSale"></cart-component>
        </nav>
        

        
