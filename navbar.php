<style>
  .container-fluid {
  display: flex !important;
  flex-direction: row !important;
}

.container-logo {
  display: flex;
  flex-direction: row;
  justify-content: start;
  width: 400px;
  gap: 40px;
}
@media (max-width: 991px) {
  .container-logo {
    width: 100%;
    justify-content: space-between;
  }
}
.navbar-brand {
  font-size: 20px;
  font-weight: 600;
}
.span-text {
  color: #1b4b8e;
}
.container-logo {
  gap: 10px;
}
.logo {
  width: 45px;
}

.navbar-nav {
  gap: 5em;
}

.form-control {
  border-color: #144f9f;
  font-size: 14px;
  cursor: progress;
  box-shadow: none !important;
}

.btn {
  border-color: #144f9f;
  color: #144f9f;
}
.btn:hover {
  background-color: #144f9f;
  color: aliceblue;
}
</style>

<nav class="navbar navbar-expand-lg fixed-top px-5 py-3" style="background-color: rgba(255, 255, 255, 0.4); backdrop-filter: blur(1px); -webkit-backdrop-filter: blur(5px);">
  <div class="container-fluid">
    <div class="container-logo">
      <img class="logo" src="./Assets/Images/Logo.png" alt="">
      <a class="navbar-brand" href="#"> <span style="color:#144F9F">Erlangga</span> <span style="color: #1B1F22;">Book</span></a>
      <button class="navbar-toggler ml-auto" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    </div>


    <div class="container-menu collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" aria-current="page" style="cursor: progress;" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" style="cursor: progress;" href="#">Library</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" style="color: #144F9F; font-weight:500;" href="#">Submission</a>
        </li>
      </ul>
      <form class="d-flex ms-auto" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" style="cursor: progress;" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>
