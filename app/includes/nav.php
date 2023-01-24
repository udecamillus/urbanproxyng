 <header class="page-header sticky-top px-xl-4 px-sm-2 px-0 py-lg-2 py-1">
     <div class="container-fluid">

         <nav class="navbar">
             <!-- start: toggle btn -->
             <div class="d-flex">
                 <button type="button" class="btn btn-link d-none d-xl-block sidebar-mini-btn p-0 text-primary">
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
                 </button>
                 <a href="home" class="brand-icon d-flex align-items-center mx-2 mx-sm-3 text-primary">
                     <img src="<?= LOGOTEXT ?>" style="max-width: 100px;" class="d-none d-md-block" alt="">
                 </a>
             </div>
             <!-- start: search area -->
             <!-- <div class="header-left flex-grow-1 d-none d-md-block">
                 <div class="main-search px-3 flex-fill">
                     <input class="form-control" type="text" placeholder="Enter your search key word">
                     <div class="card shadow rounded-4 search-result slidedown">
                         <div class="card-body">
                             <small class="text-uppercase text-muted">Recent searches</small>
                             <div class="d-flex flex-wrap align-items-start mt-2 mb-4">
                                 <a class="small rounded py-1 px-2 m-1 fw-normal bg-primary text-white" href="dashboard-hrms.html">HRMS Admin</a>
                                 <a class="small rounded py-1 px-2 m-1 fw-normal bg-secondary text-white" href="dashboard-hospital.html">Hospital Admin</a>
                                 <a class="small rounded py-1 px-2 m-1 fw-normal bg-info text-white" href="app-project.html">Project</a>
                                 <a class="small rounded py-1 px-2 m-1 fw-normal bg-dark text-white" href="app-social.html">Social App</a>
                                 <a class="small rounded py-1 px-2 m-1 fw-normal bg-danger text-white" href="dashboard-university.html">University Admin</a>
                             </div>
                             <small class="text-uppercase text-muted">Suggestions</small>
                             <div class="card list-group list-group-flush list-group-custom mt-2">
                                 <a class="list-group-item list-group-item-action text-truncate" href="https://www.wrraptheme.com/templates/luno/documentation/doc-helperclass.html">
                                     <div class="fw-bold">Helper Class</div>
                                     <small class="text-muted">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</small>
                                 </a>
                                 <a class="list-group-item list-group-item-action text-truncate" href="https://www.wrraptheme.com/templates/luno/documentation/element-daterange.html">
                                     <div class="fw-bold">Date Range Picker</div>
                                     <small class="text-muted">There are many variations of passages of Lorem Ipsum available</small>
                                 </a>
                                 <a class="list-group-item list-group-item-action text-truncate" href="https://www.wrraptheme.com/templates/luno/documentation/element-imageinput.html">
                                     <div class="fw-bold">Image Input</div>
                                     <small class="text-muted">It is a long established fact that a reader will be distracted</small>
                                 </a>
                                 <a class="list-group-item list-group-item-action text-truncate" href="https://www.wrraptheme.com/templates/luno/documentation/plugin-table.html">
                                     <div class="fw-bold">DataTables for jQuery</div>
                                     <small class="text-muted">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</small>
                                 </a>
                                 <a class="list-group-item list-group-item-action text-truncate" href="https://www.wrraptheme.com/templates/luno/documentation/doc-setup.html">
                                     <div class="fw-bold">Development Setup</div>
                                     <small class="text-muted">Contrary to popular belief, Lorem Ipsum is not simply random text.</small>
                                 </a>
                             </div>
                         </div>
                     </div>
                 </div>
             </div> -->
             <!-- start: link -->
             <ul class="header-right justify-content-end d-flex align-items-center mb-0">
                 <!-- start: notifications dropdown-menu -->

                 <!-- start: Language dropdown-menu -->
                 <!-- <li class="d-none d-xl-inline-block">
                     <div class="dropdown morphing scale-left Language mx-sm-2">
                         <a class="nav-link dropdown-toggle after-none" href="#" role="button" data-bs-toggle="dropdown">
                             <svg viewBox="0 0 16 16" width="18px" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                 <path class="fill-secondary" d="M4.545 6.714 4.11 8H3l1.862-5h1.284L8 8H6.833l-.435-1.286H4.545zm1.634-.736L5.5 3.956h-.049l-.679 2.022H6.18z" />
                                 <path d="M0 2a2 2 0 0 1 2-2h7a2 2 0 0 1 2 2v3h3a2 2 0 0 1 2 2v7a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2v-3H2a2 2 0 0 1-2-2V2zm2-1a1 1 0 0 0-1 1v7a1 1 0 0 0 1 1h7a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H2zm7.138 9.995c.193.301.402.583.63.846-.748.575-1.673 1.001-2.768 1.292.178.217.451.635.555.867 1.125-.359 2.08-.844 2.886-1.494.777.665 1.739 1.165 2.93 1.472.133-.254.414-.673.629-.89-1.125-.253-2.057-.694-2.82-1.284.681-.747 1.222-1.651 1.621-2.757H14V8h-3v1.047h.765c-.318.844-.74 1.546-1.272 2.13a6.066 6.066 0 0 1-.415-.492 1.988 1.988 0 0 1-.94.31z" />
                             </svg>
                         </a>
                         <div class="dropdown-menu rounded-4 shadow border-0 p-0" data-bs-popper="none">
                             <div class="card border-0">
                                 <div class="list-group list-group-custom" style="width: 200px;">
                                     <a href="#" class="list-group-item"><span class="flag-icon flag-icon-gb me-2"></span>UK English</a>
                                     <a href="#" class="list-group-item"><span class="flag-icon flag-icon-us me-2"></span>US English</a>
                                     <a href="#" class="list-group-item"><span class="flag-icon flag-icon-de me-2"></span>Germany</a>
                                     <a href="#" class="list-group-item"><span class="flag-icon flag-icon-in me-2"></span>Hindi</a>
                                     <a href="#" class="list-group-item"><span class="flag-icon flag-icon-sa me-2"></span>Saudi Arabia</a>
                                 </div>
                             </div>
                         </div>
                     </div>
                 </li> -->
                 <!-- start: Grid app dropdown-menu -->
                 <!-- <li class="d-none d-lg-inline-block">
                     <div class="dropdown morphing scale-left grid-menu mx-sm-2">
                         <a class="nav-link dropdown-toggle after-none" href="#" role="button" data-bs-toggle="dropdown">
                             <svg viewBox="0 0 16 16" width="18px" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                 <path d="M2 10H5C5.26522 10 5.51957 10.1054 5.70711 10.2929C5.89464 10.4804 6 10.7348 6 11V14C6 14.2652 5.89464 14.5196 5.70711 14.7071C5.51957 14.8946 5.26522 15 5 15H2C1.73478 15 1.48043 14.8946 1.29289 14.7071C1.10536 14.5196 1 14.2652 1 14V11C1 10.7348 1.10536 10.4804 1.29289 10.2929C1.48043 10.1054 1.73478 10 2 10ZM11 1H14C14.2652 1 14.5196 1.10536 14.7071 1.29289C14.8946 1.48043 15 1.73478 15 2V5C15 5.26522 14.8946 5.51957 14.7071 5.70711C14.5196 5.89464 14.2652 6 14 6H11C10.7348 6 10.4804 5.89464 10.2929 5.70711C10.1054 5.51957 10 5.26522 10 5V2C10 1.73478 10.1054 1.48043 10.2929 1.29289C10.4804 1.10536 10.7348 1 11 1ZM11 10C10.7348 10 10.4804 10.1054 10.2929 10.2929C10.1054 10.4804 10 10.7348 10 11V14C10 14.2652 10.1054 14.5196 10.2929 14.7071C10.4804 14.8946 10.7348 15 11 15H14C14.2652 15 14.5196 14.8946 14.7071 14.7071C14.8946 14.5196 15 14.2652 15 14V11C15 10.7348 14.8946 10.4804 14.7071 10.2929C14.5196 10.1054 14.2652 10 14 10H11ZM11 0C10.4696 0 9.96086 0.210714 9.58579 0.585786C9.21071 0.960859 9 1.46957 9 2V5C9 5.53043 9.21071 6.03914 9.58579 6.41421C9.96086 6.78929 10.4696 7 11 7H14C14.5304 7 15.0391 6.78929 15.4142 6.41421C15.7893 6.03914 16 5.53043 16 5V2C16 1.46957 15.7893 0.960859 15.4142 0.585786C15.0391 0.210714 14.5304 0 14 0L11 0ZM2 9C1.46957 9 0.960859 9.21071 0.585786 9.58579C0.210714 9.96086 0 10.4696 0 11L0 14C0 14.5304 0.210714 15.0391 0.585786 15.4142C0.960859 15.7893 1.46957 16 2 16H5C5.53043 16 6.03914 15.7893 6.41421 15.4142C6.78929 15.0391 7 14.5304 7 14V11C7 10.4696 6.78929 9.96086 6.41421 9.58579C6.03914 9.21071 5.53043 9 5 9H2ZM9 11C9 10.4696 9.21071 9.96086 9.58579 9.58579C9.96086 9.21071 10.4696 9 11 9H14C14.5304 9 15.0391 9.21071 15.4142 9.58579C15.7893 9.96086 16 10.4696 16 11V14C16 14.5304 15.7893 15.0391 15.4142 15.4142C15.0391 15.7893 14.5304 16 14 16H11C10.4696 16 9.96086 15.7893 9.58579 15.4142C9.21071 15.0391 9 14.5304 9 14V11Z" />
                                 <path class="fill-secondary" d="M0.585786 0.585786C0.210714 0.960859 0 1.46957 0 2V5C0 5.53043 0.210714 6.03914 0.585786 6.41421C0.960859 6.78929 1.46957 7 2 7H5C5.53043 7 6.03914 6.78929 6.41421 6.41421C6.78929 6.03914 7 5.53043 7 5V2C7 1.46957 6.78929 0.960859 6.41421 0.585786C6.03914 0.210714 5.53043 0 5 0H2C1.46957 0 0.960859 0.210714 0.585786 0.585786Z" />
                             </svg>
                         </a>
                         <div class="dropdown-menu rounded-4 shadow border-0 p-0" data-bs-popper="none">
                             <div class="card border-0">
                                 <div class="row g-1 text-center p-3" style="width: 302px;">
                                     <div class="col-6">
                                         <a class="card p-3 color-600 lift align-items-center" href="dashboard.html" title="">
                                             <svg viewBox="0 0 16 16" width="30px" class="mb-3" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                 <path class="fill-secondary" d="M8 4a.5.5 0 0 1 .5.5V6a.5.5 0 0 1-1 0V4.5A.5.5 0 0 1 8 4zM3.732 5.732a.5.5 0 0 1 .707 0l.915.914a.5.5 0 1 1-.708.708l-.914-.915a.5.5 0 0 1 0-.707zM2 10a.5.5 0 0 1 .5-.5h1.586a.5.5 0 0 1 0 1H2.5A.5.5 0 0 1 2 10zm9.5 0a.5.5 0 0 1 .5-.5h1.5a.5.5 0 0 1 0 1H12a.5.5 0 0 1-.5-.5zm.754-4.246a.389.389 0 0 0-.527-.02L7.547 9.31a.91.91 0 1 0 1.302 1.258l3.434-4.297a.389.389 0 0 0-.029-.518z" />
                                                 <path fill-rule="evenodd" d="M0 10a8 8 0 1 1 15.547 2.661c-.442 1.253-1.845 1.602-2.932 1.25C11.309 13.488 9.475 13 8 13c-1.474 0-3.31.488-4.615.911-1.087.352-2.49.003-2.932-1.25A7.988 7.988 0 0 1 0 10zm8-7a7 7 0 0 0-6.603 9.329c.203.575.923.876 1.68.63C4.397 12.533 6.358 12 8 12s3.604.532 4.923.96c.757.245 1.477-.056 1.68-.631A7 7 0 0 0 8 3z" />
                                             </svg>
                                             <p class="mb-0 color-600">Dashboard</p>
                                             <small class="text-muted">View All</small>
                                         </a>
                                     </div>
                                     <div class="col-6">
                                         <a class="card p-3 color-600 lift align-items-center" href="app.html" title="">
                                             <svg viewBox="0 0 16 16" width="30px" class="mb-3" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                 <path d="M5.5 2A3.5 3.5 0 0 0 2 5.5v5A3.5 3.5 0 0 0 5.5 14h5a3.5 3.5 0 0 0 3.5-3.5V8a.5.5 0 0 1 1 0v2.5a4.5 4.5 0 0 1-4.5 4.5h-5A4.5 4.5 0 0 1 1 10.5v-5A4.5 4.5 0 0 1 5.5 1H8a.5.5 0 0 1 0 1H5.5z" />
                                                 <path class="fill-secondary" d="M16 3a3 3 0 1 1-6 0 3 3 0 0 1 6 0z" />
                                             </svg>
                                             <p class="mb-0 color-600">Application</p>
                                             <small class="text-muted">View All</small>
                                         </a>
                                     </div>
                                     <div class="col-6">
                                         <a class="card p-3 color-600 lift align-items-center" href="crafted-page.html" title="">
                                             <svg viewBox="0 0 16 16" width="30px" class="mb-3" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                 <path d="M14 4.5V9H13V4.5H11C10.6022 4.5 10.2206 4.34196 9.93934 4.06066C9.65804 3.77936 9.5 3.39782 9.5 3V1H4C3.73478 1 3.48043 1.10536 3.29289 1.29289C3.10536 1.48043 3 1.73478 3 2V9H2V2C2 1.46957 2.21071 0.960859 2.58579 0.585786C2.96086 0.210714 3.46957 0 4 0L9.5 0L14 4.5ZM13 12H14V14C14 14.5304 13.7893 15.0391 13.4142 15.4142C13.0391 15.7893 12.5304 16 12 16H4C3.46957 16 2.96086 15.7893 2.58579 15.4142C2.21071 15.0391 2 14.5304 2 14V12H3V14C3 14.2652 3.10536 14.5196 3.29289 14.7071C3.48043 14.8946 3.73478 15 4 15H12C12.2652 15 12.5196 14.8946 12.7071 14.7071C12.8946 14.5196 13 14.2652 13 14V12Z" />
                                                 <path class="fill-secondary" d="M0.146447 10.1464C0.240215 10.0527 0.367392 10 0.5 10H15.5C15.6326 10 15.7598 10.0527 15.8536 10.1464C15.9473 10.2402 16 10.3674 16 10.5C16 10.6326 15.9473 10.7598 15.8536 10.8536C15.7598 10.9473 15.6326 11 15.5 11H0.5C0.367392 11 0.240215 10.9473 0.146447 10.8536C0.0526784 10.7598 0 10.6326 0 10.5C0 10.3674 0.0526784 10.2402 0.146447 10.1464Z" fill="black" />
                                             </svg>
                                             <p class="mb-0 color-600">Pages</p>
                                             <small class="text-muted">Crafted Pages</small>
                                         </a>
                                     </div>
                                     <div class="col-6">
                                         <a class="card p-3 color-600 lift align-items-center" href="layouts.html" title="">
                                             <svg viewBox="0 0 16 16" width="30px" class="mb-3" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                 <path d="M14 2a1 1 0 0 1 1 1v10a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V3a1 1 0 0 1 1-1h12zM2 1a2 2 0 0 0-2 2v10a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V3a2 2 0 0 0-2-2H2z" />
                                                 <path class="fill-secondary" d="M3 4a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v8a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V4z" />
                                             </svg>
                                             <p class="mb-0 color-600">Layouts</p>
                                             <small class="text-muted">Crafted Layout</small>
                                         </a>
                                     </div>
                                 </div>
                             </div>
                         </div>
                     </div>
                 </li> -->
                 <!-- start: My notes toggle modal -->


                 <!-- start: quick light dark -->
                 <li>
                     <a class="nav-link quick-light-dark" href="#">
                         <svg viewBox="0 0 16 16" width="18px" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                             <path d="M6 .278a.768.768 0 0 1 .08.858 7.208 7.208 0 0 0-.878 3.46c0 4.021 3.278 7.277 7.318 7.277.527 0 1.04-.055 1.533-.16a.787.787 0 0 1 .81.316.733.733 0 0 1-.031.893A8.349 8.349 0 0 1 8.344 16C3.734 16 0 12.286 0 7.71 0 4.266 2.114 1.312 5.124.06A.752.752 0 0 1 6 .278zM4.858 1.311A7.269 7.269 0 0 0 1.025 7.71c0 4.02 3.279 7.276 7.319 7.276a7.316 7.316 0 0 0 5.205-2.162c-.337.042-.68.063-1.029.063-4.61 0-8.343-3.714-8.343-8.29 0-1.167.242-2.278.681-3.286z" />
                             <path class="fill-secondary" d="M10.794 3.148a.217.217 0 0 1 .412 0l.387 1.162c.173.518.579.924 1.097 1.097l1.162.387a.217.217 0 0 1 0 .412l-1.162.387a1.734 1.734 0 0 0-1.097 1.097l-.387 1.162a.217.217 0 0 1-.412 0l-.387-1.162A1.734 1.734 0 0 0 9.31 6.593l-1.162-.387a.217.217 0 0 1 0-.412l1.162-.387a1.734 1.734 0 0 0 1.097-1.097l.387-1.162zM13.863.099a.145.145 0 0 1 .274 0l.258.774c.115.346.386.617.732.732l.774.258a.145.145 0 0 1 0 .274l-.774.258a1.156 1.156 0 0 0-.732.732l-.258.774a.145.145 0 0 1-.274 0l-.258-.774a1.156 1.156 0 0 0-.732-.732l-.774-.258a.145.145 0 0 1 0-.274l.774-.258c.346-.115.617-.386.732-.732L13.863.1z" />
                         </svg>
                     </a>
                 </li>
                 <!-- start: User dropdown-menu -->
                 <li>
                     <div class="dropdown morphing scale-left user-profile mx-lg-3 mx-2">
                         <a class="nav-link dropdown-toggle rounded-circle after-none p-0" href="<?=APP_ROOT?>profile" role="button" data-bs-toggle="dropdown">
                             <img class="avatar img-thumbnail rounded-circle shadow" src="<?=userPic($acct_photo)?>" alt="">
                         </a>
                         <div class="dropdown-menu border-0 rounded-4 shadow p-0">
                             <div class="card border-0 w240">
                                 <div class="card-body border-bottom d-flex">
                                     <img class="avatar rounded-circle" src="<?=userPic($acct_photo)?>" alt="">
                                     <div class="flex-fill ms-3">
                                         <h6 class="card-title mb-0 text-break"><?= $name ?></h6>
                                         <span class="text-muted text-break"><?= $email ?></span>
                                     </div>
                                 </div>
                                 <div class="list-group m-2 mb-3">
                                     <a class="list-group-item list-group-item-action border-0" href="<?= APP_ROOT ?>profile"><i class="w30 fa fa-user"></i>Profile & account</a>
                                     <a class="list-group-item list-group-item-action border-0" href="account-settings.html"><i class="w30 fa fa-gear"></i>Settings</a>
                                     <a class="list-group-item list-group-item-action border-0" href="page-support-ticket.html"><i class="w30 fa fa-tag"></i>Support Ticket</a>
                                     <a class="list-group-item list-group-item-action border-0" href="page-teamsboard.html"><i class="w30 fa fa-users"></i>Manage team</a>
                                     <a class="list-group-item list-group-item-action border-0" href="dashboard-enevt.html"><i class="w30 fa fa-calendar"></i>My Events</a>
                                     <a class="list-group-item list-group-item-action border-0" href="account-billing.html"><i class="w30 fa fa-credit-card"></i>Billing</a>
                                 </div>
                                 <a href="<?= ROOT ?>processor/logout?target=app" class="btn bg-secondary text-light text-uppercase rounded-0">Sign out</a>
                             </div>
                         </div>
                     </div>
                 </li>
                 <!-- start: Settings toggle modal -->
                 <!-- <li>
                     <a class="nav-link" href="#" data-bs-toggle="modal" data-bs-target="#SettingsModal" title="Settings">
                         <svg viewBox="0 0 16 16" width="18px" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                             <path class="fill-secondary" d="M8 4.754a3.246 3.246 0 1 0 0 6.492 3.246 3.246 0 0 0 0-6.492zM5.754 8a2.246 2.246 0 1 1 4.492 0 2.246 2.246 0 0 1-4.492 0z"></path>
                             <path d="M9.796 1.343c-.527-1.79-3.065-1.79-3.592 0l-.094.319a.873.873 0 0 1-1.255.52l-.292-.16c-1.64-.892-3.433.902-2.54 2.541l.159.292a.873.873 0 0 1-.52 1.255l-.319.094c-1.79.527-1.79 3.065 0 3.592l.319.094a.873.873 0 0 1 .52 1.255l-.16.292c-.892 1.64.901 3.434 2.541 2.54l.292-.159a.873.873 0 0 1 1.255.52l.094.319c.527 1.79 3.065 1.79 3.592 0l.094-.319a.873.873 0 0 1 1.255-.52l.292.16c1.64.893 3.434-.902 2.54-2.541l-.159-.292a.873.873 0 0 1 .52-1.255l.319-.094c1.79-.527 1.79-3.065 0-3.592l-.319-.094a.873.873 0 0 1-.52-1.255l.16-.292c.893-1.64-.902-3.433-2.541-2.54l-.292.159a.873.873 0 0 1-1.255-.52l-.094-.319zm-2.633.283c.246-.835 1.428-.835 1.674 0l.094.319a1.873 1.873 0 0 0 2.693 1.115l.291-.16c.764-.415 1.6.42 1.184 1.185l-.159.292a1.873 1.873 0 0 0 1.116 2.692l.318.094c.835.246.835 1.428 0 1.674l-.319.094a1.873 1.873 0 0 0-1.115 2.693l.16.291c.415.764-.42 1.6-1.185 1.184l-.291-.159a1.873 1.873 0 0 0-2.693 1.116l-.094.318c-.246.835-1.428.835-1.674 0l-.094-.319a1.873 1.873 0 0 0-2.692-1.115l-.292.16c-.764.415-1.6-.42-1.184-1.185l.159-.291A1.873 1.873 0 0 0 1.945 8.93l-.319-.094c-.835-.246-.835-1.428 0-1.674l.319-.094A1.873 1.873 0 0 0 3.06 4.377l-.16-.292c-.415-.764.42-1.6 1.185-1.184l.292.159a1.873 1.873 0 0 0 2.692-1.115l.094-.319z"></path>
                         </svg>
                     </a>
                 </li> -->

                 <li>
                     <div class="dropdown morphing scale-left notifications">
                         <a class="nav-link dropdown-toggle after-none" href="<?= ROOT ?>processor/logout?target=app" title="Sign Out">
                             <span class=""><i class="icofont-power" style="font-size: 26px;"></i></span>

                         </a>
                     </div>
                 </li>
             </ul>
         </nav>

     </div>
 </header>