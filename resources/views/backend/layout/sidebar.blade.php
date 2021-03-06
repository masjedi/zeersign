<div class="sidebar-container">
				<div class="sidemenu-container navbar-collapse collapse fixed-menu">
					<div id="remove-scroll">
						<ul class="sidemenu page-header-fixed p-t-20" data-keep-expanded="false" data-auto-scroll="true"
							data-slide-speed="200">
							<li class="sidebar-toggler-wrapper hide">
								<div class="sidebar-toggler">
									<span></span>
								</div>
							</li>
							<li class="sidebar-user-panel">
								<div class="user-panel">
									<div class="row">
										<div class="sidebar-userpic">
											<img src="{{asset('logo.png')}}" style="height:80px; width:100px;" class="img-responsive" alt=""> </div>
									</div>
									<div class="profile-usertitle">
										<div class="sidebar-userpic-name"> POOHA </div>
										<div class="profile-usertitle-job">NGO </div>
									</div>
									<!-- <div class="sidebar-userpic-btn">
										<a class="tooltips" href="user_profile.html" data-placement="top"
											data-original-title="Profile">
											<i class="material-icons">person_outline</i>
										</a>
										<a class="tooltips" href="email_inbox.html" data-placement="top"
											data-original-title="Mail">
											<i class="material-icons">mail_outline</i>
										</a>
										<a class="tooltips" href="chat.html" data-placement="top"
											data-original-title="Chat">
											<i class="material-icons">chat</i>
										</a>
										<a class="tooltips" href="login.html" data-placement="top"
											data-original-title="Logout">
											<i class="material-icons">input</i>
										</a>
									</div> -->
								</div>
							</li>
							<li class="nav-item start active">
								<a href="{{url('dashboard')}}" class="nav-link nav-toggle">
									<i class="material-icons">dashboard</i>
									<span class="title">Dashboard</span>
									<span class="selected"></span>
								</a>
							</li>
							<li class="nav-item">
								<a href="{{route('news.index')}}" class="nav-link nav-toggle">
									<i class="material-icons">email</i>
									<span class="title">News</span>
								</a>
							</li>
							<li class="nav-item">
								<a href="{{route('events.index')}}" class="nav-link nav-toggle">
									<i class="material-icons">local_taxi</i>
									<span class="title">Events</span>
									<span class="arrow"></span>
								</a>
								<ul class="sub-menu">
								<li class="nav-item">
										<a href="{{route('events.index')}}" class="nav-link ">
											<span class="title">Events List</span>
										</a>
									</li>
									<li class="nav-item">
										<a href="{{route('types.index')}}" class="nav-link ">
											<span class="title">Add Event Type</span>
										</a>
									</li>
									<li class="nav-item">
										<a href="{{route('events.create')}}" class="nav-link ">
											<span class="title">Add Event</span>
										</a>
									</li>
									
									
								</ul>
							</li>
							<li class="nav-item">
								<a href="{{route('bids.index')}}" class="nav-link nav-toggle">
									<i class="material-icons">business_center</i>
									<span class="title">Biddings</span>
								</a>
							</li>
							<li class="nav-item">
								<a href="{{route('team.index')}}" class="nav-link nav-toggle">
									<i class="material-icons">business_center</i>
									<span class="title">Team Members</span>
								</a>
							</li>
							<li class="nav-item">
								<a href="{{route('careers.index')}}" class="nav-link nav-toggle">
									<i class="material-icons">vpn_key</i>
									<span class="title">Careers</span>
								</a>
							</li>
							<li class="nav-item">
								<a href="{{route('videos.index')}}" class="nav-link nav-toggle">
									<i class="material-icons">group</i>
									<span class="title">Video Gallery</span>
								</a>
							</li>
							<li class="nav-item">
								<a href="{{route('gallery.index')}}" class="nav-link nav-gallery">
									<i class="material-icons">group</i>
									<span class="title">Photo Gallery</span>
								</a>
							</li>
							
								</ul>
							</li>
						</ul>
					</div>
				</div>
			</div>