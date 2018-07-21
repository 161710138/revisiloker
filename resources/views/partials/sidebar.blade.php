<aside class="menu-sidebar d-none d-lg-block">
            <div class="logo">
                <a href="#">
                    <img src="/assets/admin/images/icon/carikerjalogo.png" alt="Cool Admin" />
                </a>
            </div>
            <div class="menu-sidebar__content js-scrollbar1">
                <nav class="navbar-sidebar">
                    <ul class="list-unstyled navbar__list">
                        <li class="active has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fa fa-home fa-fw""></i>BERANDA</a>
                            <ul class="list-unstyled navbar__sub-list js-sub-list">
                                <li>
                                    <a href="{{url('/home')}}">Home</a>
                                
                                </li>
                                </li>
                            </ul>
                        </li>
                        @role('admin')
                        <li>
                            <a href="{{route('user.index')}}">
                                <i class="fa fa-user"></i><font size="2" color="black" face="Comic Sans MS">User</font></a>
                        </li>
                        <li>
                            <a href="{{ route('kategori.index')}}">
                                <i class="fa fa-book"></i><font size="2" color="black" face="Comic Sans MS"> Kategori Lowongan </a>
                        </li>
                        <li>
                            <a href="{{route('perusahaan.index')}}">
                                <i class="fa fa-suitcase"></i><font size="2" color="black" face="Comic Sans MS"> Perusahaan </a>
                        </li>
                        <li>
                           <a href="{{route('lowongan.index')}}">
                                <i class="fa fa-info"></i><font size="2" color="black" face="Comic Sans MS"> &nbsp Lowongan </a>
                        </li>
                        <li>
                           <a href="{{route('pelamar.index')}}">
                                <i class="fa fa-users"></i><font size="2" color="black" face="Comic Sans MS"> Pelamar </a>
                        </li>
                        
                            </ul>
                        </li>
                        @endrole
                        @role('perusahaan')
                        <li>
                           <a href="{{route('lowongan.index')}}">
                                <i class="fa fa-info"></i><font size="2" color="black" face="Comic Sans MS"> &nbsp Lowongan </a>

                        </li>
                                                <li>
                            <a href="{{ route('kategori.index')}}">
                                <i class="fa fa-book"></i><font size="2" color="black" face="Comic Sans MS"> Kategori Lowongan </a>
                        </li>
                        
                        <li>
                           <a href="{{route('pelamar.index')}}">
                                <i class="fa fa-users"></i><font size="2" color="black" face="Comic Sans MS"> Pelamar </a>
                        </li>
                        @endrole 
                         @role('pelamar')
                        <li>
                           <a href="{{route('pelamar.index')}}">
                                <i class="fa fa-users"></i><font size="2" color="black" face="Comic Sans MS"> Pelamar </a>
                        </li>
                        @endrole
                    </ul>
                </nav>
            </div>
        </aside>