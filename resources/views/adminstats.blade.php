<!doctype html>
<html data-theme="cupcake">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  @vite('resources/css/app.css')
</head>
<body class="h-full">

  <link href="https://fonts.googleapis.com/css?family=Material+Icons|Material+Icons+Outlined|Material+Icons+Two+Tone|Material+Icons+Round|Material+Icons+Sharp" rel="stylesheet" />

  <div class="min-h-screen">
    <div class="navbar bg-white py-4">
      <div class="flex-1">
        <div class="font-bold text-orange-600 text-xl px-6"><a  href="">Evento</a>  </div>
      </div>
      <div class="flex-none gap-2 px-6">
        <div class="form-control">
          <input type="text" placeholder="Search" class="input input-bordered w-24 md:w-auto" />
        </div>
        <div class="dropdown dropdown-end">
          <div tabindex="0" role="button" class="btn btn-ghost btn-circle avatar">
            <div class="w-10 rounded-full">
              <img alt="Tailwind CSS Navbar component" src="/images/users/" />
            </div>
          </div>
          <ul tabindex="0" class="mt-3 z-[1] p-2 shadow menu menu-sm dropdown-content bg-base-100 rounded-box w-52">
            <li>
              <a class="justify-between">
                Profile
                <span class="badge">New</span>
              </a>
            </li>
            <li><a>Settings</a></li>
            <li><a>Logout</a></li>
          </ul>
        </div>
      </div>
    </div>

    <div class="flex flex-row pt-10 px-10 pb-4">
      <div class=" w-2/12 mr-6 asidd">
        <div
            class="bg-white flex flex-col content-stretch justify-evenly rounded-xl shadow-lg mb-6 px-6 py-16 side h-5/6 gap-5">
            <a href=""
                class="inline-block text-gray-600 hover:text-black my-4 w-full">
                <span class="material-icons-outlined float-left pr-2">dashboard</span>
                <p class="admin-aside">Dashboard</p>

            </a>
            <a href=""
                class="inline-block text-gray-600 hover:text-black my-4 w-full">
                <span class="material-icons-outlined float-left pr-2">tune</span>
                <p class="admin-aside">Categories</p>

            </a>
            <a href=""
                class="inline-block text-gray-600 hover:text-black my-4 w-full">
                <div class="indicator">
                  <span class="indicator-item badge badge-secondary"></span>
                  <span class="material-icons-outlined float-left pr-2">file_copy</span>

                </div>

                <p class="admin-aside">Events</p>


            </a>
            <a href=""
                class="inline-block text-gray-600 hover:text-black my-4 w-full">
                <span class="material-icons-outlined float-left pr-2">face</span>
                <p class="admin-aside">Users</p>


            </a>
            <a href=""
                class="inline-block text-gray-600 hover:text-black my-4 w-full">
                <span class="material-icons-outlined float-left pr-2">power_settings_new</span>
                <p class="admin-aside">Logout</p>


            </a>
        </div>

    </div>

      <div class="w-10/12">
    <div class="flex flex-row">
  <div class="bg-no-repeat bg-white border border-black-300 rounded-xl w-7/12 mr-2 p-6"
      style="background-image: url(https://previews.dropbox.com/p/thumb/AAvyFru8elv-S19NMGkQcztLLpDd6Y6VVVMqKhwISfNEpqV59iR5sJaPD4VTrz8ExV7WU9ryYPIUW8Gk2JmEm03OLBE2zAeQ3i7sjFx80O-7skVlsmlm0qRT0n7z9t07jU_E9KafA9l4rz68MsaZPazbDKBdcvEEEQPPc3TmZDsIhes1U-Z0YsH0uc2RSqEb0b83A1GNRo86e-8TbEoNqyX0gxBG-14Tawn0sZWLo5Iv96X-x10kVauME-Mc9HGS5G4h_26P2oHhiZ3SEgj6jW0KlEnsh2H_yTego0grbhdcN1Yjd_rLpyHUt5XhXHJwoqyJ_ylwvZD9-dRLgi_fM_7j/p.png?fv_content=true&size_mode=5); background-position: 90% center;">
      <p class="text-5xl text-indigo-900">Welcome <br><strong class=" mt-4">{{Auth::user()->username}}</strong></p>
  </div>

  <div class="bg-no-repeat bg-white border border-black-300 rounded-xl w-5/12 ml-2 p-6"
      style="background-image: url(https://previews.dropbox.com/p/thumb/AAuwpqWfUgs9aC5lRoM_f-yi7OPV4txbpW1makBEj5l21sDbEGYsrC9sb6bwUFXTSsekeka5xb7_IHCdyM4p9XCUaoUjpaTSlKK99S_k4L5PIspjqKkiWoaUYiAeQIdnaUvZJlgAGVUEJoy-1PA9i6Jj0GHQTrF_h9MVEnCyPQ-kg4_p7kZ8Yk0TMTL7XDx4jGJFkz75geOdOklKT3GqY9U9JtxxvRRyo1Un8hOObbWQBS1eYE-MowAI5rNqHCE_e-44yXKY6AKJocLPXz_U4xp87K4mVGehFKC6dgk_i5Ur7gspuD7gRBDvd0sanJ9Ybr_6s2hZhrpad-2WFwWqSNkh/p.png?fv_content=true&size_mode=5); background-position: 100% 40%;">
      <p class="text-5xl text-indigo-900">Tags<br><strong></strong></p>


  </div>
</div>
<div class="flex flex-row h-64 mt-6">
  <div class="bg-white rounded-xl shadow-lg px-6 py-4 w-4/12">
    <p class="text-5xl text-indigo-900">Events <br><strong class=" mt-4">45</strong></p>
  </div>
  <div class="bg-white rounded-xl shadow-lg mx-6 px-6 py-4 w-4/12">
    <p class="text-5xl text-indigo-900">Tickects Selled<br><strong class=" mt-4">79</strong></p>
  </div>
  <div class="bg-white rounded-xl shadow-lg px-6 py-4 w-4/12">
    <p class="text-5xl text-indigo-900">Our Clients <br><strong class=" mt-4">5</strong></p>
  </div>
</div>
    </div>



</div>
</div>






<script src="/js/main.js"></script>
</body>


</html>
