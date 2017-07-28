<div class="span2 main-menu-span">
				<div class="well nav-collapse sidebar-nav">
					<ul class="nav nav-tabs nav-stacked main-menu">

						<li class="nav-header hidden-tablet">Ekleme İşlemleri</li>
						<li><a class="ajax-link" href="{{ URL::to('admin/admin_add')}}"><i class="icon icon-add"></i><span class="hidden-tablet"> Yönetici Ekle</span></a></li>
						<li><a class="ajax-link" href="{{ URL::to('admin/user_add')}}"><i class="icon icon-add"></i><span class="hidden-tablet"> Kullanıcı Ekle</span></a></li>						
						<li class="nav-header hidden-tablet">Listeleme İşlemleri</li>
						<li><a class="ajax-link" href="{{ URL::to('admin/admins') }}"><i class="icon icon-tag"></i><span class="hidden-tablet"> Yönetici Listesi</span></a></li>
						<li><a class="ajax-link" href="{{ URL::to('admin/users')}}"><i class="icon icon-tag"></i><span class="hidden-tablet"> Kullanıcı Listesi</span></a></li>
						<li><a class="ajax-link" href="{{ URL::to('admin/humours')}}"><i class="icon icon-tag"></i><span class="hidden-tablet"> Mizah Listesi</span></a></li>
						<li class="nav-header hidden-tablet">Durum</li>
						<li><a class="ajax-link" href="{{ URL::to('admin/humours_ignore')}}"><i class="icon icon-trash"></i><span class="hidden-tablet"> Mizah Reddedilenler</span></a></li>
						<li><a class="ajax-link" href="{{ URL::to('admin/profile')}}"><i class="icon icon-envelope-closed"></i><span class="hidden-tablet"> Şikayetler</span></a></li>
						<li><a href="{{ URL::to('admin/logout')}}"><i class="icon icon-locked"></i><span class="hidden-tablet"> Çıkış</span></a></li>

						<li class="nav-header hidden-tablet">PDF</li>
						<li><a href="{{ URL::to('admin/user_pdf') }}"><i class="icon icon-pdf"></i><span class="hidden-tablet"> Download PDF</span></a></li>
					</ul>
				</div><!--/.well-->
			</div><!--/span-->
