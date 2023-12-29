<!DOCTYPE html>
<html lang="{{ $page->language ?? 'en' }}">
<header>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light shadow-elevation">
        <div class="container">
            <a class="navbar-brand logo-text" href="{{ $page->baseUrl }}/index"><span class="itr">ITR</span>etina</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ $page->baseUrl }}/index">Home</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="billingServicesDropdown" role="button"
                            data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Billing Services
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="billingServicesDropdown">
                            <li><a class="dropdown-item" href="{{ $page->baseUrl }}/index">Overview</a></li>
                            <li><a class="dropdown-item" href="{{ $page->baseUrl }}/medical-billing">Medical Billing</a></li>
                            <li><a class="dropdown-item" href="{{ $page->baseUrl }}/dental-billing">Dental Billing</a></li>
                            <li><a class="dropdown-item" href="{{ $page->baseUrl }}/medical-billing-pricing">Pricing</a></li>
                        </ul>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="{{ $page->baseUrl }}/about-us">About Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ $page->baseUrl }}/contact-us">Contact Us</a>
                    </li>

                </ul>
            </div>
        </div>
    </nav>
</header>

</html>