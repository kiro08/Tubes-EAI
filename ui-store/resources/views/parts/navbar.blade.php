<!-- navbar -->
  <nav class="navbar navbar-expand-lg navbar-light bg-transparent mt-2">
    <div class="container">
      <a class="navbar-brand" href="/">
        {{$datas['nama_toko']}}
      </a>
      <button
        class="navbar-toggler"
        type="button"
        data-bs-toggle="collapse"
        data-bs-target="#navbarNavDropdown"
        aria-controls="navbarNavDropdown"
        aria-expanded="false"
        aria-label="Toggle navigation"
      >
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav mx-auto">
          <li class="nav-item">
            <a class="nav-link" href="/">Home</a>
          </li>
          <li class="nav-item dropdown">
            <a
              class="nav-link dropdown-toggle"
              href="/"
              id="navbarDropdownMenuLink"
              role="button"
              data-bs-toggle="dropdown"
              aria-expanded="false"
            >
              Our products
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
              <li>
                <a class="dropdown-item" href="/">Ready stock</a>
              </li>
              <li>
                <a class="dropdown-item" href="/">Pre order</a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/">About us</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/">Our Reviews</a>
          </li>
        </ul>
        <a href="/"
          ><i class="fa-solid fa-cart-shopping"
            ><span>cart 0</span></i
          ></a
        >
      </div>
    </div>
  </nav>
  <!-- end navbar -->