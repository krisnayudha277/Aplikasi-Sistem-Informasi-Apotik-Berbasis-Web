 <nav id="sidebar">
         <div class="sidebar-header">
            <h3>Apotik Kimia Furma</h3>
        </div>

        <ul class="list-unstyled components">
            <p></p>
            <li class="active">
                <a href="#homeSubmenu"  data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Dasboard</a>
                <ul class="collapse list-unstyled" id="homeSubmenu">
                     <li>
                         <a href="/home" >Obat</a>
                    </li>
                    <li>
                         <a href="{{route ('jenisobat.index')}}" >Jenis Obat</a>
                    </li>
                    <li>
                         <a href="{{route ('admin.index')}}" >Admin</a>
                    </li>
                    <li>
                         <a href="/admincrud/sampah_obat">Sampah Obat</a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="{{route ('total')}}">Total Data</a>
            </li>
            <li>
                <a href="#pageSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Galeri</a>
                <ul class="collapse list-unstyled" id="pageSubmenu">
                    <li>
                        <a href="#">Data Obat</a>
                    </li>
                    <li>
                        <a href="#">Jenis Obat</a>
                    </li>
                    <li>
                        <a href="#">Admin</a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="/suplier/index">Suplier</a>
            </li>
            <li>
                <a href="/event/calendar">Event</a>
            </li>
        </ul>
            <ul class="list-unstyled CTAs">
                <li>
                    <a href="/admin/setting/{{ Auth::user()->id }}">Setting</a>
                 
                </li>
                <li>
                    <a href="{{ route('logout') }}" class="article">Keluar</a>
                </li>
            </ul>
        </nav>