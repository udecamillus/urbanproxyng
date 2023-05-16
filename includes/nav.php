 <header class="page-header sticky-top px-xl-4 px-sm-2 px-0 py-lg-2 py-1">
     <div class="container-fluid">

         <nav class="navbar">
             <!-- start: toggle btn -->
             <div class="d-flex justify-content-center align-items-center align-content-center">
                 <!-- <button type="button" class="btn btn-link d-none d-xl-block sidebar-mini-btn p-0 text-primary">
                     <span class="hamburger-icon">
                         <span class="line"></span>
                         <span class="line"></span>
                         <span class="line"></span>
                     </span>
                 </button>
                 <button type="button" class="btn btn-link d-block d-xl-none menu-toggle p-0 text-primary">
                     <span class="hamburger-icon">
                         <span class="line"></span>
                         <span class="line"></span>
                         <span class="line"></span>
                     </span>
                 </button> -->
                 <a href="home" class="brand-icon d-flex align-items-center justify-content-center mx-2 mx-sm-3 text-primary">
                     <img src="<?= LOGOTEXT ?>" style="max-width: 100px;" class="d-table m-a" alt="">
                 </a>
             </div>
             <!-- start: search area -->

             <!-- start: link -->
             <ul class="header-right justify-content-end d-flex align-items-center mb-0">
                 <!-- start: quick light dark -->
                 <li>
                     <a class="nav-link quick-light-dark" href="#" id="themeMode">
                         <svg viewBox="0 0 16 16" width="18px" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                             <path d="M6 .278a.768.768 0 0 1 .08.858 7.208 7.208 0 0 0-.878 3.46c0 4.021 3.278 7.277 7.318 7.277.527 0 1.04-.055 1.533-.16a.787.787 0 0 1 .81.316.733.733 0 0 1-.031.893A8.349 8.349 0 0 1 8.344 16C3.734 16 0 12.286 0 7.71 0 4.266 2.114 1.312 5.124.06A.752.752 0 0 1 6 .278zM4.858 1.311A7.269 7.269 0 0 0 1.025 7.71c0 4.02 3.279 7.276 7.319 7.276a7.316 7.316 0 0 0 5.205-2.162c-.337.042-.68.063-1.029.063-4.61 0-8.343-3.714-8.343-8.29 0-1.167.242-2.278.681-3.286z" />
                             <path class="fill-secondary" d="M10.794 3.148a.217.217 0 0 1 .412 0l.387 1.162c.173.518.579.924 1.097 1.097l1.162.387a.217.217 0 0 1 0 .412l-1.162.387a1.734 1.734 0 0 0-1.097 1.097l-.387 1.162a.217.217 0 0 1-.412 0l-.387-1.162A1.734 1.734 0 0 0 9.31 6.593l-1.162-.387a.217.217 0 0 1 0-.412l1.162-.387a1.734 1.734 0 0 0 1.097-1.097l.387-1.162zM13.863.099a.145.145 0 0 1 .274 0l.258.774c.115.346.386.617.732.732l.774.258a.145.145 0 0 1 0 .274l-.774.258a1.156 1.156 0 0 0-.732.732l-.258.774a.145.145 0 0 1-.274 0l-.258-.774a1.156 1.156 0 0 0-.732-.732l-.774-.258a.145.145 0 0 1 0-.274l.774-.258c.346-.115.617-.386.732-.732L13.863.1z" />
                         </svg>
                     </a>
                 </li>
                 <!-- start: User dropdown-menu -->
                 <li>
                     <div class="dropdown morphing scale-left user-profile mx-lg-3 mx-2">
                         <a class="nav-link dropdown-toggle rounded-circle after-none p-0" href="#" role="button" data-bs-toggle="dropdown">
                             <img class="avatar img-thumbnail rounded-circle shadow" src="assets/images/profile_av.png" alt="">
                         </a>
                         <div class="dropdown-menu border-0 rounded-4 shadow p-0">
                             <div class="card border-0 w240">
                                 <a href="<?= ROOT ?>app/register" class="nav-btn text-light text-uppercase rounded-0">Register</a>
                                 <a href="<?= ROOT ?>app/login" class="nav-btn text-light text-uppercase rounded-0">Sign In</a>
                             </div>
                         </div>
                     </div>
                 </li>

             </ul>
         </nav>

         <div class=" row justify-content-center align-items-center">
             <div class="col-md-8 col-lg-7">
                 <div class="header-left flex-grow-1">
                     <div class="main-search px-3 flex-fill" style="z-index: 1;">
                         <input class="form-control" type="text" placeholder="Enter your search key word" style="z-index: 9999;">
                         <div class="card shadow rounded-4 search-result slidedown mt-5">
                             <div class="card-body">
                                 <small class="text-uppercase text-muted">Recent searches</small>
                                 <div class="d-flex flex-wrap align-items-start mt-2 mb-4">
                                     <a class="small rounded py-1 px-2 m-1 fw-normal bg-primary text-white" href="dashboard-hrms.html">Properties</a>
                                     <a class="small rounded py-1 px-2 m-1 fw-normal bg-primary text-white" href="dashboard-hospital.html">Hostels</a>
                                     <a class="small rounded py-1 px-2 m-1 fw-normal bg-primary text-white" href="app-project.html">Apartments</a>
                                     <a class="small rounded py-1 px-2 m-1 fw-normal bg-primary text-white" href="app-social.html">Duplex</a>
                                     <a class="small rounded py-1 px-2 m-1 fw-normal bg-primary text-white" href="dashboard-university.html">Land</a>
                                 </div>
                                 <small class="text-uppercase text-muted">Suggestions</small>
                                 <div class="card list-group list-group-flush list-group-custom mt-2">
                                     <a class="list-group-item list-group-item-action text-truncate" href="https://www.wrraptheme.com/templates/luno/documentation/doc-helperclass.html">
                                         <div class="fw-bold">Properties</div>
                                         <small class="text-muted">Land, Flats, Duplex, Apartments, Store...</small>
                                     </a>
                                     <a class="list-group-item list-group-item-action text-truncate" href="https://www.wrraptheme.com/templates/luno/documentation/element-daterange.html">
                                         <div class="fw-bold">Automobile</div>
                                         <small class="text-muted">Cars, Busses, Bikes, Tractors, Parts...</small>
                                     </a>
                                     <a class="list-group-item list-group-item-action text-truncate" href="https://www.wrraptheme.com/templates/luno/documentation/element-imageinput.html">
                                         <div class="fw-bold">Home Appliances </div>
                                         <small class="text-muted">Blender, T.V, Home Audio, furniture's...</small>
                                     </a>
                                     <a class="list-group-item list-group-item-action text-truncate" href="https://www.wrraptheme.com/templates/luno/documentation/plugin-table.html">
                                         <div class="fw-bold">Computer and Phones</div>
                                         <small class="text-muted">Laptops, Mobile Phones, Accessories...</small>
                                     </a>
                                     <a class="list-group-item list-group-item-action text-truncate" href="https://www.wrraptheme.com/templates/luno/documentation/doc-setup.html">
                                         <div class="fw-bold">Fashion</div>
                                         <small class="text-muted">Cloths, Bags, Belts, Watch....</small>
                                     </a>
                                 </div>
                             </div>
                         </div>
                     </div>
                 </div>

             </div>
         </div>
     </div>
 </header>