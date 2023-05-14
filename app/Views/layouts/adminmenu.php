

<div class="sidebar-menu">
            <ul class="menu">
              <li class="sidebar-title">Menu Admin</li>

              <li class="sidebar-item <? if(uri_string() == '') ? 'active' : '' ?> ">
                <a href="/" class="sidebar-link">
                  <i class="bi bi-grid-fill"></i>
                  <span>Dashboard</span>
                </a>
              </li>

              <li class="sidebar-item has-sub">
                <a href="#" class="sidebar-link">
                  <i class="bi bi-stack"></i>
                  <span>Kategori</span>
                </a>
                <ul class="submenu">
                  <li class="submenu-item <? if(uri_string() == 'katnasabah') ? echo('active') : echo('') ?> ">
                    <a href="/katnasabah">Kategori Nasabah</a>
                  </li>
                  <li class="submenu-item <?= uri_string('katrx') ? 'active': '' ?>">
                    <a href="/katrx">Kategori Transaksi</a>
                  </li>
                  <li class="submenu-item">
                    <a href="/">Kategori </a>
                  </li>
                  
                </ul>
              </li>

             

               <li class="sidebar-item has-sub">
                <a href="#" class="sidebar-link">
                  <i class="bi bi-stack"></i>
                  <span>Data Global</span>
                </a>
                <ul class="submenu">
                  <li class="submenu-item">
                    <a href="/katnasabah">Data Nasabah</a>
                  </li>
                  <li class="submenu-item">
                    <a href="/">Data Transaksi</a>
                  </li>
                  <li class="submenu-item">
                    <a href="/">Data Collector </a>
                  </li>
                  <li class="submenu-item">
                    <a href="/">Data Surveyor </a>
                  </li>
                </ul>
              </li>

              <li class="sidebar-item">
                <a href="<?= base_url('logout') ?>" class="sidebar-link">
                  <i class="bi bi-arrow-return-left"></i>
                  <span>Logout</span>
                </a>
              </li>

              
            </ul>
          </div>