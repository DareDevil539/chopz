<template>
  <div id="navbar">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <a class="navbar-brand" href="#"
        ><img
          src="../assets/img/logo.png"
          width="30"
          height="30"
          class="d-inline-block align-top"
          alt=""
        />
        Чопський прикордонний загін</a
      >
      <button
        class="navbar-toggler"
        type="button"
        data-toggle="collapse"
        data-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent"
        aria-expanded="false"
        aria-label="Toggle navigation"
      >
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href="#"
              >Головна <span class="sr-only">(current)</span></a
            >
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Історія</a>
          </li>
          <li class="nav-item dropdown">
            <a
              class="nav-link dropdown-toggle"
              href="#"
              id="navbarDropdown"
              role="button"
              data-toggle="dropdown"
              aria-haspopup="true"
              aria-expanded="false"
            >
              Корисні посилання
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="#">Довідники</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="#">Програмне забезпечення</a>
            </div>
          </li>
        </ul>
        <form class="form-inline my-2 my-lg-0">
          <input
            class="form-control mr-sm-2 dd-search-input"
            type="search"
            placeholder="Пошук"
            aria-label="Search"
          />
          <button
            class="btn btn-outline-success my-2 my-sm-0 dd-search-btn"
            type="submit"
          >
            Пошук
          </button>
        </form>
      </div>
    </nav>
  </div>
</template>

<script>
export default {
  name: "Navbar"
};
</script>

<style lang="scss">
.dd-search-input,
.dd-search-btn {
  -webkit-border-radius: 3px;
  -moz-border-radius: 3px;
  border-radius: 3px;
}

.dd-search-btn {
  color: #fff;
  background-color: #4fac6a;
  -webkit-transition: all 0.5s;
  -moz-transition: all 0.5s;
  -ms-transition: all 0.5s;
  -o-transition: all 0.5s;
  transition: all 0.5s;
  &:hover {
    background-color: darken(#4fac6a, 5%);
    border-color: darken(#4fac6a, 5%);
    -webkit-box-shadow: 3px 3px 5px 0px rgba(0, 0, 0, 1);
    -moz-box-shadow: 3px 3px 5px 0px rgba(0, 0, 0, 1);
    box-shadow: 3px 3px 5px 0px rgba(0, 0, 0, 1);
    z-index: 10;
    -webkit-transition: all 0.5s;
    -moz-transition: all 0.5s;
    -ms-transition: all 0.5s;
    -o-transition: all 0.5s;
    transition: all 0.5s;
  }
}
</style>
