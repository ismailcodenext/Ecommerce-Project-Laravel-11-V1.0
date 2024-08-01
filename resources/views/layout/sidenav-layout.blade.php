<!DOCTYPE html>
<html lang="en" data-bs-theme="light">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Chowdhurani Ayruveda</title>

    <link rel="icon" type="image/x-icon" href="{{asset('/favicon.ico')}}" />
    <link href="{{asset('css/bootstrap.css')}}" rel="stylesheet" />
    <link href="{{asset('css/animate.min.css')}}" rel="stylesheet" />
    <link href="{{asset('css/fontawesome.css')}}" rel="stylesheet" />
    <link href="{{asset('css/style.css')}}" rel="stylesheet" />

    <link href="{{asset('css/print-invoice.css')}}" rel="stylesheet" />

    <link href="{{asset('css/toastify.min.css')}}" rel="stylesheet" />

    <script src="https://kit.fontawesome.com/b981429a8a.js" crossorigin="anonymous"></script>

    <link href="{{asset('https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css')}}"
        rel="stylesheet" />


    <script src="{{asset('js/toastify-js.js')}}"></script>
    <script src="{{asset('js/axios.min.js')}}"></script>
    <script src="{{asset('js/config.js')}}"></script>
    <script src="{{asset('js/bootstrap.bundle.js')}}"></script>

    <!-- Include Summernote CSS start -->
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.css" rel="stylesheet">
    <link href="{{asset('https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css')}}"
        rel="stylesheet" />


    <!-- Include Summernote js end -->


    <link href="https://cdn.datatables.net/2.0.4/css/dataTables.dataTables.css" rel="stylesheet" />
    <link href="https://cdn.datatables.net/buttons/3.0.2/css/buttons.dataTables.css" rel="stylesheet" />

    <script src="https://code.jquery.com/jquery-3.7.1.js"></script>
    <script src="https://cdn.datatables.net/2.0.4/js/dataTables.js"></script>
    <script src="https://cdn.datatables.net/buttons/3.0.2/js/dataTables.buttons.js"></script>
    <script src="https://cdn.datatables.net/buttons/3.0.2/js/buttons.dataTables.js"></script>
    <script src="https://cdn.datatables.net/buttons/3.0.2/js/buttons.print.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.10.1/jszip.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.2.7/pdfmake.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.2.7/vfs_fonts.js"></script>
    <script src="https://cdn.datatables.net/buttons/3.0.2/js/buttons.html5.min.js"></script>


    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>


    <!-- Include flatpickr CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">

    <!-- Include flatpickr JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>


    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.bundle.min.js"></script>

</head>



<body>

    <div id="loader" class="LoadingOverlay d-none">
        <div class="Line-Progress">
            <div class="indeterminate"></div>
        </div>
    </div>

    <div class="login_bg">
        <nav class="navbar fixed-top px-0 shadow-sm bg-white">
            <div class="container-fluid">

                <a class="navbar-brand" href="#">
                    <span class="icon-nav m-0 h5" onclick="MenuBarClickHandler()">
                        <img class="nav-logo-sm mx-2" src="{{asset('images/menu.svg')}}" alt="logo" />
                    </span>
                    <img class="nav-logo  mx-2" src="{{asset('front-end/assets/img/navbar-logo.png')}}" alt="logo" />
                    <h2 class="navbar_title">Ayurveda Chowdurani</h2>
                </a>

                <div class="float-right d-flex align-items-center">
                    {{-- <li class="dropdown_nav">--}}
                        {{-- <a class="text-center text-dark nav_link" href="{{url('/invoicePage')}}" --}} {{--
                            style="font-size: 16px; position: relative;"><i class="fa-solid fa-pen-to-square"></i>--}}
                            {{-- <span>Create Invoice</span> <i class="fa-solid fa-chevron-down"></i>--}}
                            {{-- <ul class="nav_dropdown_items">--}}
                                {{-- <li>--}}
                                    {{-- <a href="{{url('/invoicePage')}}" class="dropdown_nav_link"><i--}} {{--
                                            class="fa-solid fa-pen-to-square"></i> New Patient Invoice</a>--}}
                                    {{-- </li>--}}
                                {{-- <li>--}}
                                    {{-- <a href="{{url('/oldPatientsPage')}}" class="dropdown_nav_link"><i--}} {{--
                                            class="fa-solid fa-pen-to-square"></i> Old Patient Invoice</a>--}}
                                    {{-- </li>--}}
                                {{-- </ul>--}}
                            {{-- </a>--}}
                        {{-- </li>--}}

                    <div class="user-dropdown">
                        <img class="icon-nav-img" id="UserProfileImg" src="" alt="" />
                        <div class="user-dropdown-content">
                            <div class="mt-4 text-center">
                                <img class="icon-nav-img" id="UserImges" src="" alt="" />
                                <h6 id="Name"></h6>
                                <hr class="user-dropdown-divider  p-0" />
                            </div>
                            <a href="{{url('/userProfile')}}" class="profileBtn">
                                <span class="side-bar-item-caption"
                                    style="font-weight: 500; font-size: 1em">Profile</span>
                            </a>
                            <button onclick="userlogout()" class="logoutBtn">
                                <span class="side-bar-item-caption"
                                    style="font-weight: 500; font-size: 1.2em">Logout</span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
    </div>



    <div id="sideNavRef" class="side-nav-open">

        <a href="#" class="side-bar-item list_item_link">
            <i class="fa-solid fa-table-cells"></i>
            <span class="side-bar-item-caption">Dashboard</span>
        </a>
        <li class="side-bar-item">
            <a class="list_item_link" href="#ProductManagment" data-bs-toggle="collapse">
                <i class="fa-solid fa-hospital-user"></i>
                <span>Product Management</span>
                <i class="fa-solid fa-chevron-down"></i>
            </a>
            <div class="collapse" id="ProductManagment">
                <ul class="nav-second-level">
                    <li style="list-style-type: none !important">
                        <a href="{{url('/dashboard-product-category')}}" style="list-style-type: none">
                            <i class="fa-solid fa-hospital-user"></i>
                            <span class="side-bar-item-caption">Category</span>
                        </a>
                    </li>
                    <li style="list-style-type: none !important">
                        <a href="{{url('/dashboard-brand')}}" style="list-style-type: none">
                            <i class="fa-solid fa-hospital-user"></i>
                            <span class="side-bar-item-caption">Brand</span>
                        </a>
                    </li>
                    <li style="list-style-type: none !important">
                        <a href="{{url('dashboard-product')}}" style="list-style-type: none">
                            <i class="fa-solid fa-hospital-user"></i>
                            <span class="side-bar-item-caption">Product</span>
                        </a>
                    </li>
                </ul>
            </div>
        </li>



    </div>


    <div id="contentRef" class="content">
        @yield('content')
    </div>





    <script>
        getProfile();

        async function getProfile() {
            try {
                showLoader();
                let res = await axios.get("/api/user-profile", HeaderToken());
                hideLoader();
                document.getElementById('UserProfileImg').src = res.data.img_url;
                document.getElementById('UserImges').src = res.data.img_url;
                document.getElementById('Name').innerText = res.data['name'];
            } catch (e) {
                unauthorized(e.response.status)
            }
        }
    </script>



    <script>
        document.addEventListener("DOMContentLoaded", function () {
            const dropdownToggleList = document.querySelectorAll('[data-bs-toggle="collapse"]');

            dropdownToggleList.forEach(function (dropdownToggle) {
                dropdownToggle.addEventListener('click', function (event) {
                    event.preventDefault();
                    const targetCollapse = document.querySelector(this.getAttribute('href'));

                    document.querySelectorAll('.collapse').forEach(function (collapse) {
                        if (collapse !== targetCollapse && collapse.classList.contains('show')) {
                            collapse.classList.remove('show');
                        }
                    });

                    targetCollapse.classList.toggle('block');

                    // Store the ID of the currently active menu in local storage
                    if (targetCollapse.classList.contains('show')) {
                        localStorage.setItem('activeMenuId', targetCollapse.id);
                    } else {
                        localStorage.removeItem('activeMenuId');
                    }
                });
            });

            // Retrieve the ID of the active menu from local storage and show it
            const activeMenuId = localStorage.getItem('activeMenuId');
            if (activeMenuId) {
                const activeMenu = document.getElementById(activeMenuId);
                if (activeMenu) {
                    activeMenu.classList.add('show');
                }
            }
        });
    </script>





    <script>
        function MenuBarClickHandler() {
            let sideNav = document.getElementById('sideNavRef');
            let content = document.getElementById('contentRef');
            if (sideNav.classList.contains("side-nav-open")) {
                sideNav.classList.add("side-nav-close");
                sideNav.classList.remove("side-nav-open");
                content.classList.add("content-expand");
                content.classList.remove("content");
            } else {
                sideNav.classList.remove("side-nav-close");
                sideNav.classList.add("side-nav-open");
                content.classList.remove("content-expand");
                content.classList.add("content");
            }
        }

        async function userlogout() {

            try {
                let res = await axios.get("/userlogout", HeaderToken());
                localStorage.clear();
                sessionStorage.clear();
                window.location.href = "/ayrveda-login-page";
            } catch (e) {
                errorToast(res.data['message']);
            }
        }


    </script>
    <script>
        $('#ExpensesNote').summernote({
            placeholder: 'Content',
            tabsize: 2,
            height: 100
        });
    </script>
    <script>
        $('#UpdateExpensesNote').summernote({
            placeholder: 'Update Content',
            tabsize: 2,
            height: 100
        });
    </script>

    <script>
        $(document).ready(function () {
            // Initialize select2 with placeholder
            $('.js-example-basic-single').select2({
                placeholder: 'Select an option'
            });

            // Set background color to green
            $('.select2-dropdown').css('background-color', 'green');
        });
    </script>

    {{-- user permission work start--}}

    <!-- <script>
        getUserProfile();

        async function getUserProfile() {

            try {
                const response = await axios.get("/user-profile", HeaderToken());
                const user = response.data;

                // Check if user role is not admin
                if (user.role !== 'admin') {
                    hideDeleteEditBtn();
                }
            } catch (error) {
                console.error('Error fetching user profile:', error);
                unauthorized(error.response.status);
            }
        }

        function hideDeleteEditBtn() {
            const hideEditDelete = document.querySelectorAll('.hideEditDelete');
            hideEditDelete.forEach(element => {
                element.style.display = 'none';
            });
        }

    </script> -->
    {{--user permission work end--}}
</body>

</html>
