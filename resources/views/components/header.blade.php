
<header class="bg-gray-800 p-4 flex justify-between items-center">
    <div class="text-3xl font-bold text-purple-600">
      <img src="{{asset('images/logo.png')}}" alt="Logo" class="h-20">
    </div>
    <nav class="flex space-x-6 text-sm uppercase">
      <a href="{{route('home')}}" class="hover:text-purple-400 text-white">Главная</a>
      <a href="" class="hover:text-purple-400 text-white">Выбрать авто</a>

      @if(auth()->check())
      <a href="{{route('account')}}" class="hover:text-purple-400 text-white">Личный кабинет</a>
@else
<a href="{{route('account')}}" class="hover:text-purple-400 text-white">Личный кабинет</a>
@endif
     
    </nav>
  </header>