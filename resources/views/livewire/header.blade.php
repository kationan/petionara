<div class="bg-white">
  <header class="absolute inset-x-0 top-0 z-50 sm:fixed sm:top-0 sm:right-0 p-0 md:p-6  text-right">
    <nav class="md:flex bg-white shadow md:items-center justify-between p-6 lg:px-8" aria-label="Global">
      <div class="flex lg:flex-1 justify-between items-center">
        <a href="#" class="-m-1.5 p-1.5">
          <span class="sr-only">MUDEPE</span>
          <img class="h-24 w-24 sm:h-16 sm:w-16 rounded-full border-orange-600 border-2" src="{{asset('images/logo_mudepe.png')}}" alt="Logo de MUDEPE" srcset="">
        </a>
        <span class="text-3xl cursor-pointer md:hidden block">
          <ion-icon name="menu-outline" onclick="Menu(this)"></ion-icon>
        </span>
      </div>
      <ul class="md:flex md:items-center z-[-1] md:z-auto md:static absolute bg-white md:bg-inherit
        w-full md:w-auto right-0 md:p-0 p-6 md:pr-0 mr-6 
       md:opacity-100 opacity-0 top-[-400px] transition-all duration-500">
        <li class="mx-4 my-6 md:my-0" >
          <span class="dropdown text-xl hover:text-green-600
            hover:border-2 
          hover:border-orange-500 hover:rounded-lg hover:p-2
            hover:duration-0 hover:translate-x-5
            duration-500 items-center hover:pr-6" onclick="dropDown(this)">
            <span>Evenements</span>
            <span class=""><ion-icon class="pt-1  absolute" name="chevron-down-outline"></ion-icon>
            </span>
          </span>

          <div id="dropdown-content" class="hidden">
            <ul class="dropdown border-2 md:absolute md:w-64 md:text-start bg-white border-blue-900 px-4 mt-2 rounded-md 
            top-[100px] transition-all duration-500">
              <li class="my-2 hover:bg-blue-500 hover:text-white text-blue-500">
                <a href="#">Assemblée Générale</a>
              </li>

              <li class="my-2 hover:bg-blue-500 hover:text-white text-blue-500">
                <a href="#">Photothèque</a>
              </li>

              <li class="my-2 hover:bg-blue-500 hover:text-white text-blue-500">
                <a href="#">Photothèque</a>
              </li>

              <li class="my-2 hover:bg-blue-500 hover:text-white text-blue-500">
                <a href="#">Photothèque</a>
              </li>
            </ul>
          </div>
        </li>
        <li class="mx-4 my-6 md:my-0">
          <a href="" class="text-xl hover:text-green-600 
          hover:border-2 
        hover:border-orange-500 hover:rounded-lg hover:p-2
          hover:duration-0 hover:translate-x-5
          duration-500">Communiqués</a>
          </li>
        <li class="mx-4 my-6 md:my-0">
          <a href="" class="text-xl hover:text-green-500 
          hover:border-2 
          hover:border-orange-500 hover:rounded-lg hover:p-2
            hover:duration-0 hover:translate-x-5
          duration-500">Projets</a>
          </li>
        <li class="mx-4 my-6 md:my-0">
          <a href="" class="text-xl hover:text-green-500 
          hover:border-2 
          hover:border-orange-500 hover:rounded-lg hover:p-2
            hover:duration-0 hover:translate-x-5
          duration-500">Cotisations</a>
          </li>
        
        <li class="mx-4 my-6 md:my-0">
          <a href="" class="text-xl hover:text-green-500 
          hover:border-2 
          hover:border-orange-500 hover:rounded-lg hover:p-2
            hover:duration-0 hover:translate-x-5
          duration-500">Status et reglements</a>
        </li>
        @if (Route::has('login'))
        <li>
          @auth
            <a href="{{ url('/dashboard') }}" class="font-semibold text-gray-600 hover:text-gray-900 focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Dashboard</a>
          @else
            <a href="{{ route('login') }}" class="rounded-md bg-green-600 px-3.5 py-2.5 text-sm font-semibold text-white shadow-sm hover:bg-green-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Log in</a>
            @if (Route::has('register'))
              <a href="{{ route('register') }}" class="rounded-md bg-indigo-600 px-3.5 py-2.5 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Register</a>
            @endif
          @endauth
          </li>
        @endif
      </ul>
      </div>
    </nav>
  </header>
</div>
<script>
  function Menu(e){
    let list = document.querySelector("ul")
    e.name ==='menu-outline' ? (e.name = "close-outline",list.classList.add('top-[140px]'), list.classList.add('opacity-100')
    ):(e.name="menu-outline", list.classList.remove('top-[140px]'), list.classList.remove('opacity-100'))
    console.log("event", e)
  }
  function dropDown(e){
    let dropdownItems = document.getElementById('dropdown-content')
    if(dropdownItems.classList.contains('hidden')){
      dropdownItems.classList.remove('hidden')
    }
    else{
      dropdownItems.classList.add('hidden')
    }
  }
  // window.onmouseover = function(event){
  //   var dropdowns = document.getElementById("dropdown-content");
  //   console.log("eee",event.fromElement.matches(".dropdown"))
  //   if(event.fromElement.matches(".dropdown")==true){
  //     dropdowns.classList.add('hidden')
  //   }
  // }
</script>