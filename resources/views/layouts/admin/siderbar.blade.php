<div class="sidebar" data-background-color="testing">
    <div class="sidebar-logo">
        <!-- Logo Header -->
        <div class="logo-header" data-background-color="testing">
            <a href="/adm" class="logo">
                <img src="{{ asset('admin/assets/img/kaiadmin/ENNEAGRAMCORP.png') }}" alt="navbar brand" class="navbar-brand" height="30" />
            </a>

            <div class="nav-toggle">
                <button class="btn btn-toggle toggle-sidebar">
                    <i class="gg-menu-right"></i>
                </button>
                <button class="btn btn-toggle sidenav-toggler">
                    <i class="gg-menu-left"></i>
                </button>
            </div>
            <button class="topbar-toggler more">
                <i class="gg-more-vertical-alt"></i>
            </button>
        </div>
        <!-- End Logo Header -->
    </div>
    <div class="sidebar-wrapper scrollbar scrollbar-inner">
        <div class="sidebar-content">
            <ul class="nav nav-secondary">
                <hr class="sidebar-divider">
                <!-- Sidebar search form -->
                <form action="#" method="get" class="sidebar-form">
                    <div class="input-group">
                        <input type="text" name="q" class="form-control" placeholder="Search...">
                        <span class="input-group-btn">
                            <button type="button" id="clear-btn" class="btn btn-flat">
                                <i class="fa fa-times"></i>
                            </button>
                        </span>
                    </div>
                </form>

                <hr class="sidebar-divider">

                <!-- /.search form -->
                <li class="nav-item">
                    <a href="/adm">
                        <i class="fas fa-home"></i>
                        <p>Dashboard</p>
                    </a>
                </li>
                @if (Auth::check() && (Auth::user()->level === 'admin' || Auth::user()->level === 'superadmin'))
                <li class="nav-section">
                    <span class="sidebar-mini-icon">
                        <i class="fa fa-ellipsis-h"></i>
                    </span>
                    <h4 class="text-section">Data</h4>
                </li>
                <li class="nav-item">
                    <a data-bs-toggle="collapse" href="#base">
                        <i class="fas fa-database"></i>
                        <p>Master Data</p>
                        <span class="caret"></span>
                    </a>
                    <div class="collapse" id="base">
                        <ul class="nav nav-collapse">
                            <li>
                                <a href="{{ route('users.index') }}">
                                    <i class="fas fa-user-circle"></i> Users
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('target_users.index') }}">
                                    <i class="fas fa-bullseye"></i> User Target Scraping
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('spider_raw.index') }}">
                                    <i class="fas fa-link"></i> Scraping Raw
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('predicted.index') }}">
                                    <i class="fas fa-anchor"></i> Data Terprediksi
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
                @endif
                @if (Auth::check() && (Auth::user()->level === 'superadmin'))
                <li class="nav-section">
                    <span class="sidebar-mini-icon">
                        <i class="fa fa-ellipsis-h"></i>
                    </span>
                    <h4 class="text-section">Proses</h4>
                </li>
                <li class="nav-item">
                    <a data-bs-toggle="collapse" href="#preprocessing">
                        <i class="fas fa-code"></i>
                        <p>Preprocessing</p>
                        <span class="caret"></span>
                    </a>
                    <div class="collapse" id="preprocessing">
                        <ul class="nav nav-collapse">
                            <li>
                                <a href="{{ route('csv.show') }}">
                                    <i class="fas fa-circle"></i> Tahapan Preprocessing
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="nav-item">
                    <a data-bs-toggle="collapse" href="#modeling">
                        <i class="fas fa-code-branch"></i>
                        <p>Modeling</p>
                        <span class="caret"></span>
                    </a>
                    <div class="collapse" id="modeling">
                        <ul class="nav nav-collapse">
                            <li>
                                <a href="{{ route('csv.showxtest') }}">
                                    <i class="fas fa-circle"></i> Data Xtest
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('csv.showxtrain') }}">
                                    <i class="fas fa-circle"></i> Data Xtrain
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('csv.showEvaluation') }}">
                                    <i class="fas fa-circle"></i> Evaluasi Model
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="nav-section">
                    <span class="sidebar-mini-icon">
                        <i class="fa fa-ellipsis-h"></i>
                    </span>
                    <h4 class="text-section">Metode</h4>
                </li>
                <li class="nav-item">
                    <a href="/adm/tfidf">
                        <i class="fas fa-book-open"></i>
                        <p>TF-IDF</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="/adm">
                        <i class="fab fa-hornbill"></i>
                        <p>MultinomialNB</p>
                    </a>
                </li>
                
                @endif
            </ul>
        </div>
    </div>
</div>
