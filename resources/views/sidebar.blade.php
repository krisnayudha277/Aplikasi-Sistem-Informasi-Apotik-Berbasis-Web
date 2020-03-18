 <nav id="sidebar">
         <div class="sidebar-header">
            <h3>Apotik Kimia Furma</h3>
        </div>

        <ul class="list-unstyled components">
            <p>Dummy Heading</p>
            <li class="active">
                <a href="#homeSubmenu"  data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Home</a>
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
                         <a href="/admincrud/sampah_obat">Data Trash</a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="{{route ('total')}}">Total Data</a>
            </li>
            <li>
                <a href="#pageSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Pages</a>
                <ul class="collapse list-unstyled" id="pageSubmenu">
                    <li>
                        <a href="#">Page 1</a>
                    </li>
                    <li>
                        <a href="#">Page 2</a>
                    </li>
                    <li>
                        <a href="#">Page 3</a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="#">Suplier</a>
            </li>
            <li>
                <a href="#">Contact</a>
            </li>
        </ul>
            <ul class="list-unstyled CTAs">
                <li>
                    <a href="{{ route('user.attendance', ['id' => 1]) }}">Setting</a>
                 
                </li>
                <li>
                    <a href="{{ route('logout') }}" class="article">Keluar</a>
                </li>
            </ul>
        </nav>
