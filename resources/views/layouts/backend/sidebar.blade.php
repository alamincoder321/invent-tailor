<nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
    <div class="sb-sidenav-menu">
        <div class="nav">
            <a class="nav-link" href="{{url('/')}}">
                <div class="sb-nav-link-icon"><i class="bi bi-house-door"></i></div>
                {{App\Models\Translator::translator('Dashboard')}}
            </a>
        </div>
    </div>
    <!-- <div class="sb-sidenav-footer">
        <div class="small">Logged in as:</div>
        Start Bootstrap
    </div> -->
</nav>