<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite('resources/css/app.css')
</head>
<body>
    <x-header/>
    <div class="min-h-screen bg-gray-900 text-white p-4">
        <!-- Header Section -->
        <div class="text-center text-2xl font-bold text-white mb-6">
          BMW M5 F10
        </div>
      
        <!-- Carousel Section -->
        <div class="flex items-center justify-center gap-4 mb-8">
          
          <div class="flex gap-4">
            <img src="{{asset('images/image1.png')}}" alt="BMW M5 F10" class="w-48 h-48 object-cover rounded-lg">
            <img src="{{asset('images/image1.png')}}" alt="BMW M5 F10" class="w-48 h-48 object-cover rounded-lg">
            <img src="{{asset('images/image1.png')}}" alt="BMW M5 F10" class="w-48 h-48 object-cover rounded-lg">
          </div>
          
        </div>
      
        <!-- Color Options -->
        <div class="flex justify-center gap-4 mb-8">
          <div class="w-8 h-8 rounded-full bg-blue-600 border-2 border-gray-300"></div>
          <div class="w-8 h-8 rounded-full bg-red-600 border-2 border-gray-300"></div>
          <div class="w-8 h-8 rounded-full bg-white border-2 border-gray-300"></div>
          <div class="w-8 h-8 rounded-full bg-gray-400 border-2 border-gray-300"></div>
        </div>
      
        <!-- Specifications Section -->
        <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-6 gap-4 text-center text-sm mb-8">
          <div>
            <p class="text-gray-400">Пробег</p>
            <p class="font-semibold">999KM</p>
          </div>
          <div>
            <p class="text-gray-400">Год</p>
            <p class="font-semibold">2013</p>
          </div>
          <div>
            <p class="text-gray-400">Объем двигателя</p>
            <p class="font-semibold">4.4</p>
          </div>
          <div>
            <p class="text-gray-400">Мощность</p>
            <p class="font-semibold">560 л.с.</p>
          </div>
          <div>
            <p class="text-gray-400">Коробка</p>
            <p class="font-semibold">МТ</p>
          </div>
          <div>
            <p class="text-gray-400">Тип двигателя</p>
            <p class="font-semibold">Бензиновый</p>
          </div>
        </div>
      
        <!-- Buttons Section -->
        <div class="flex justify-center gap-4">
          <button class="px-6 py-2 bg-white text-gray-800 rounded-md font-semibold hover:bg-gray-200">Избранное</button>
          <button class="px-6 py-2 bg-purple-700 text-white rounded-md font-semibold hover:bg-purple-600">Забронировать</button>
        </div>
      </div>
</body>
</html>