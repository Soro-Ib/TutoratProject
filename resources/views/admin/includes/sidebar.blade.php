<aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

        <li class="nav-item">
            <a class="nav-link " href="{{ route('dashboard.home') }}">
            <i class="fa fa-tachometer" aria-hidden="true"></i>
            <span>Tableau de bord</span>
            </a>
        </li><!-- End Dashboard Nav -->

            <li class="nav-item">
                <a class="nav-link collapsed" data-bs-target="#tables-nav" data-bs-toggle="collapse" href="#">
                <i class="fa fa-users" aria-hidden="true"></i><span>Groupes d'étudiants</span><i class="bi bi-chevron-down ms-auto"></i>
                </a>
                <ul id="tables-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                    <li>
                        <a href="{{ route('licence1.liste') }}">
                            <i class="bi bi-circle"></i><span>Licence 1</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('licence2.liste') }}">
                        <i class="bi bi-circle"></i><span>Licence 2</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('licence3.liste') }}">
                        <i class="bi bi-circle"></i><span>Licence 3</span>
                        </a>
                    </li>
                </ul>
            </li><!-- End Tables Nav -->
            <li class="nav-item">
                <a class="nav-link collapsed" data-bs-target="#charts-nav" data-bs-toggle="collapse" href="#">
                <i class="fa-solid fa-school"></i><span>Classes virtuelles</span><i class="bi bi-chevron-down ms-auto"></i>
                </a>
                <ul id="charts-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                    <li>
                        <a href="{{ route('classe.programmer') }}">
                        <i class="bi bi-circle"></i><span>Programmer</span>
                        </a>
                    </li>
                    {{-- <li>
                        <a href="{{ route('classe.encours') }}">
                        <i class="bi bi-circle"></i><span>En cours</span>
                        </a>
                    </li> --}}
                    <li>
                        <a href="{{ route('classe.terminer') }}">
                        <i class="bi bi-circle"></i><span>Terminées</span>
                        </a>
                    </li>
                </ul>
            </li>
            <li class="nav-item">
                <a class="nav-link collapsed" href="{{ route('classe.note') }}">
                <i class="fas fa-star"></i>
                <span>Noter une rencontre</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link collapsed" href="#">
                <i class="fa-solid fa-school"></i>
                <span>Classes Virtuelles</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link collapsed" href="#">
                <i class="fa fa-file"></i>
                <span>Support de Cours</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link collapsed" href="{{ route('doc.index') }}">
                <i class="fa fa-telegram" aria-hidden="true"></i>
                <span>Poster un document</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link collapsed" data-bs-target="#list-pre" data-bs-toggle="collapse" href="#">
                <i class="fa fa-list" aria-hidden="true"></i><span>Liste de présence</span><i class="bi bi-chevron-down ms-auto"></i>
                </a>
                <ul id="list-pre" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                    <li>
                        <a href="#">
                        <i class="bi bi-circle"></i><span>Licence 1</span>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                        <i class="bi bi-circle"></i><span>Licence 2</span>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                        <i class="bi bi-circle"></i><span>Licence 3 </span>
                        </a>
                    </li>
                </ul>
            </li>

        <!-- End Login Page Nav -->
        {{-- <li class="nav-item">
            <a class="nav-link collapsed" data-bs-target="#suivi" data-bs-toggle="collapse" href="#">
            <i class="fas fa-chart-line"></i><span>Progression des étudiants</span><i class="bi bi-chevron-down ms-auto"></i>
            </a>
            <ul id="suivi" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                <li>
                    <a href="{{ route('suivi.licence1') }}">
                    <i class="bi bi-circle"></i><span>Licence 1</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                    <i class="bi bi-circle"></i><span>Licence 2</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                    <i class="bi bi-circle"></i><span>Licence 3 </span>
                    </a>
                </li>
            </ul>
        </li> --}}
    </ul>
</aside>
