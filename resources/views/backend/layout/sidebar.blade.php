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

							<li class="nav-item start active">
								<a href="{{route('dashboard')}}" class="nav-link nav-toggle">
									<i class="material-icons">dashboard</i>
									<span class="title">Dashboard</span>
									<span class="selected"></span>
								</a>
							</li>
							<li class="nav-item">
								<a href="{{route('news.index')}}" class="nav-link nav-toggle">
									<i class="material-icons">email</i>
									<span class="title">Manage News / Blog</span>
								</a>
							</li>
							<li class="nav-item">
								<a href="{{route('bids.index')}}" class="nav-link nav-toggle">
									<i class="material-icons">business_center</i>
									<span class="title">Manage Bids</span>
								</a>
							</li>
							<li class="nav-item">
								<a href="{{route('careers.index')}}" class="nav-link nav-toggle">
									<i class="material-icons">vpn_key</i>
									<span class="title">Manage Careers</span>
								</a>
							</li>
							<li class="nav-item">
								<a href="{{route('events.index')}}" class="nav-link nav-toggle">
									<i class="material-icons">local_taxi</i>
									<span class="title">Manage Events</span>
									<span class="arrow"></span>
								</a>
								<ul class="sub-menu">
                                    <li class="nav-item">
                                        <a href="{{route('events.create')}}" class="nav-link ">
                                            <span class="title">Add New Event</span>
                                        </a>
                                    </li>
								<li class="nav-item">
										<a href="{{route('events.index')}}" class="nav-link ">
											<span class="title">Events List</span>
										</a>
									</li>
									<li class="nav-item">
										<a href="{{route('types.index')}}" class="nav-link ">
											<span class="title">Manage Event Types</span>
										</a>
									</li>
								</ul>
							</li>
							<li class="nav-item">
								<a href="{{route('competitions.index')}}" class="nav-link nav-toggle">
									<i class="material-icons">local_taxi</i>
									<span class="title">Manage Competitions</span>
									<span class="arrow"></span>
								</a>
								<ul class="sub-menu">
                                    <li class="nav-item">
                                        <a href="{{route('competitions.create')}}" class="nav-link ">
                                            <span class="title">Add New Competition</span>
                                        </a>
                                    </li>
								<li class="nav-item">
										<a href="{{route('competitions.index')}}" class="nav-link ">
											<span class="title">Competitions List</span>
										</a>
									</li>
									<li class="nav-item">
										<a href="{{route('categories.index')}}" class="nav-link ">
											<span class="title">Manage Competitions Categories</span>
										</a>
									</li>
								</ul>
							</li>
							
							<li class="nav-item">
								<a href="{{route('team.index')}}" class="nav-link nav-toggle">
									<i class="material-icons">business_center</i>
									<span class="title">Team Members</span>
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
					</div>
				</div>
			</div>
