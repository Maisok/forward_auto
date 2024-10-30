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
    <div class="bg-gray-900 min-h-screen py-10 px-4">
        <div class="container mx-auto grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
          <!-- Card 1 -->
          <div class="bg-gray-800 rounded-lg p-4 text-center">
            <a href="{{route('card')}}"><img class="w-full h-60 object-cover rounded-md mb-4" src="{{asset('images/image1.png')}}" alt="BMW M5 (F10)"></a>
            <h3 class="text-white font-semibold">BMW M5 (F10)</h3>
            <p class="text-gray-400">4 500 000 RUB</p>
          </div>
      
          <!-- Card 2 -->
          <div class="bg-gray-800 rounded-lg p-4 text-center">
            <img class="w-full h-60 object-cover rounded-md mb-4" src="{{asset('images/image1.png')}}" alt="BMW M3 (G80)">
            <h3 class="text-white font-semibold">BMW M3 (G80)</h3>
            <p class="text-gray-400">4 500 000 RUB</p>
          </div>
      
          <!-- Card 3 -->
          <div class="bg-gray-800 rounded-lg p-4 text-center">
            <img class="w-full h-60 object-cover rounded-md mb-4" src="{{asset('images/image1.png')}}" alt="MERCEDES AMG CLS 63">
            <h3 class="text-white font-semibold">MERCEDES AMG CLS 63</h3>
            <p class="text-gray-400">4 500 000 RUB</p>
          </div>
          

        </div>
      </div>
      <x-footer/>
</body>
</html>