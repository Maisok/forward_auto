<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <x-header/>
    <div class="bg-gray-900 min-h-screen flex flex-col items-center p-4">

        <h1 class="text-white text-2xl font-bold mb-6">МОЙ ПРОФИЛЬ</h1>
      
        <div class="w-full max-w-5xl flex flex-col md:flex-row gap-8">
          <!-- Левый блок - информация о профиле -->
          <div class="bg-fiol text-white rounded-lg p-6 flex flex-col gap-6 md:w-1/3">
            <h2 class="text-center text-lg font-bold">{{ Auth::user()->username }}</h2>
            
            <div class="flex flex-col items-center">
              <p class="text-sm">Номер телефона</p>
              <p class="text-lg border-2 border-white rounded-lg px-4 py-2 mt-1">+7 924-823-51-82</p>
            </div>
      
            <div class="flex flex-col items-center">
              <p class="text-sm">Электронная почта</p>
              <p class="text-lg border-2 border-white rounded-lg px-4 py-2 mt-1">MAISOK@GMAIL.COM</p>
            </div>

            <div class="flex flex-col items-center">
                <button class="text-lg border-2 border-white rounded-lg px-4 py-2 mt-1">Редактирвоать данные</button>
              </div>
      
            <div class="flex flex-col items-center">
              <p class="text-sm">ПОКУПОК</p>
              <p class="text-lg border-2 border-white rounded-lg px-4 py-2 mt-1">0</p>
            </div>
          </div>
      
          <!-- Правый блок - Бронирования -->
          <div class="flex flex-col md:w-2/3">
            <h2 class="text-white text-lg font-bold mb-4">Бронирования</h2>
            
            <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-3 lg:grid-cols-4 gap-4">
              <!-- Карточка авто -->
              <div class="flex flex-col items-center">
                <img src="{{asset('images/image1.png')}}" alt="BMW M5 F10" class="w-full h-32 object-cover rounded-lg">
                <p class="text-white mt-2 text-center text-sm">BMW M5 F10</p>
              </div>
              
              <div class="flex flex-col items-center">
                <img src="{{asset('images/image1.png')}}" alt="Mercedes CLK" class="w-full h-32 object-cover rounded-lg">
                <p class="text-white mt-2 text-center text-sm">MERCEDES CLK</p>
              </div>
              
              <div class="flex flex-col items-center">
                <img src="{{asset('images/image1.png')}}" alt="Mercedes CLS" class="w-full h-32 object-cover rounded-lg">
                <p class="text-white mt-2 text-center text-sm">MERCEDES CLS</p>
              </div>
      
              <div class="flex flex-col items-center">
                <img src="{{asset('images/image1.png')}}" alt="Mercedes GLE" class="w-full h-32 object-cover rounded-lg">
                <p class="text-white mt-2 text-center text-sm">MERCEDES GLE</p>
              </div>
      
              <div class="flex flex-col items-center">
                <img src="{{asset('images/image1.png')}}" alt="Mercedes GLS" class="w-full h-32 object-cover rounded-lg">
                <p class="text-white mt-2 text-center text-sm">MERCEDES GLS</p>
              </div>
      
              <div class="flex flex-col items-center">
                <img src="{{asset('images/image1.png')}}" alt="Mercedes C-Class" class="w-full h-32 object-cover rounded-lg">
                <p class="text-white mt-2 text-center text-sm">MERCEDES C-CLASS</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    <x-footer/>
</body>
</html>