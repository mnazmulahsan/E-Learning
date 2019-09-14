<header class="header">
			


	<!-- Header Content -->
	<div class="header_container">
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="header_content d-flex flex-row align-items-center justify-content-start">
						<div class="logo_container">
							<a href="{{'/'}}">
								<div class="logo_text">skilled<span>B</span></div>
							</a>
						</div>

						@section('category')

						@show

						
						
						<nav class="main_nav_contaner ml-auto">
							<ul class="main_nav">
							<li><a href="{{'/'}}">Home</a></li>
							<li><a href="{{'/about'}}">About</a></li>
							<li><a href="{{'/allcourses'}}">Courses</a></li>
							<li><a href="{{'/contact'}}">Contact</a></li>
									              
							<!-- Right Side Of Navbar -->
		                    
		                        <!-- Authentication Links -->
								@guest
								<li class="nav-item dropdown">
									<a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>Instructor!</a>

									<div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">   
										@if (Auth::guard('instructor')->check())

										    <a class="dropdown-item" href="{{ route('instructor.login')}}">
												{{ __('Your Profile') }}
											</a>
											
										@else
										    <a class="dropdown-item" href="{{ route('instructor.register')}}">
												{{ __('Register Here') }}
											</a>
											<a class="dropdown-item" href="{{ route('instructor.login')}}">
												{{ __('Login Here') }}
											</a>
										@endif     
									</div>
								</li>
		                            <li class="nav-item">
		                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
		                            </li>
		                            @if (Route::has('register'))
		                                <li class="nav-item">
		                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
		                                </li>
		                            @endif
		                        @else
		                            <li class="nav-item dropdown">
		                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
		                                    {{ Auth::user()->name }} <span class="caret"></span>
		                                </a>

		                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
		                                	<a class="dropdown-item" href="{{ route('enrolled', Auth::user()->id)}}">
		                                        {{ __('Your Courses') }}
		                                    </a>
		                                    <a class="dropdown-item" href="{{ route('user.about', Auth::user()->id)}}">
		                                        {{ __('Your Profile') }}
		                                    </a>
		                                    <a class="dropdown-item" href="{{ route('user.logout') }}"
		                                       onclick="event.preventDefault();
		                                                     document.getElementById('logout-form').submit();">
		                                        {{ __('Logout') }}
		                                    </a>

		                                    <form id="logout-form" action="{{ route('user.logout') }}" method="POST" style="display: none;">
		                                        @csrf
		                                    </form>
		                                    
		                                </div>
		                            </li>		                            
		                        @endguest
		                    
							</ul>
							
						</nav>

					</div>
				</div>
			</div>
		</div>
	</div>
</header>

<!-- Menu mobile view-->

<div class="menu d-flex flex-column align-items-end justify-content-start text-right menu_mm trans_400">
	<div class="menu_close_container"><div class="menu_close"><div></div><div></div></div></div>
	<div class="search">
		<form action="#" class="header_search_form menu_mm">
			<input type="search" class="search_input menu_mm" placeholder="Search" required="required">
			<button class="header_search_button d-flex flex-column align-items-center justify-content-center menu_mm">
				<i class="fa fa-search menu_mm" aria-hidden="true"></i>
			</button>
		</form>
	</div>
	<nav class="menu_nav">
		<ul class="menu_mm">
			<li class="menu_mm"><a href="index.html">Home</a></li>
			<li class="menu_mm"><a href="#">About</a></li>
			<li class="menu_mm"><a href="#">Courses</a></li>
			<li class="menu_mm"><a href="#">Blog</a></li>
			<li class="menu_mm"><a href="#">Page</a></li>
			<li class="menu_mm"><a href="contact.html">Contact</a></li>
		</ul>
	</nav>
</div>
