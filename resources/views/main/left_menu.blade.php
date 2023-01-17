<li class="nav-item menu-is-opening menu-open">
    <a href="#" class="nav-link">
        <p>AYARLAR</p>
    </a>
    <ul class="nav nav-treeview">
        <li>
            <a href="{{ route('get.admin.slider') }}" class="nav-link">
                <p>Slider Ayarları</p>
            </a>
        </li>
        <li>
            <a href="{{ route('get.admin.message') }}" class="nav-link">
                <p>Yönetim Kurulu Başkanının Mesajı</p>
            </a>
        </li>
        <li>
            <a href="{{ route('get.admin.team-members') }}" class="nav-link">
                <p>Ekip Üyeleri</p>
            </a>
        </li>

        <li class="nav-item">
            <a href="{{route('get.admin.section' , ["typeId" => 5])}}" class="nav-link">
                <i class="nav-icon"></i>
                <p>
                    ARGE Bölümü
                </p>
            </a>
        </li>

        <li class="nav-item">
            <a href="{{route('get.admin.section' , ["typeId" => 2])}}" class="nav-link">
                <i class="nav-icon"></i>
                <p>
                    Eğitim Bölümü
                </p>
            </a>
        </li>

        <li class="nav-item">
            <a href="{{route('get.admin.section' , ["typeId" => 1])}}" class="nav-link">
                <i class="nav-icon"></i>
                <p>
                    Proje Bölümü
                </p>
            </a>
        </li>

        <li class="nav-item">
            <a href="{{route('get.admin.section' , ["typeId" => 3])}}" class="nav-link">
                <i class="nav-icon"></i>
                <p>
                    Yönetim Bölümü
                </p>
            </a>
        </li>

        <li class="nav-item">
            <a href="{{route('get.admin.section' , ["typeId" => 4])}}" class="nav-link">
                <i class="nav-icon"></i>
                <p>
                    Denetim Bölümü
                </p>
            </a>
        </li>

        <li class="nav-item">
            <a href="{{route('get.admin.section' , ["typeId" => 6])}}" class="nav-link">
                <i class="nav-icon"></i>
                <p>
                    Organizasyon Bölümü
                </p>
            </a>
        </li>
        <li class="nav-item">
            <a href="{{route('get.admin.contact')}}" class="nav-link">
                <i class="nav-icon"></i>
                <p>
                    Bize Ulaşın Mesajları
                </p>
            </a>
        </li>
    </ul>
</li>
