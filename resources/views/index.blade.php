<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  @vite('resources/css/app.css')
  <title>Document</title>
</head>
<body>

<div class="min-h-screen bg-gray-900 text-white">
 <x-header/>
  
    <!-- Hero Section -->
    <section class="text-center p-8 relative bg-cover bg-center" style="background-image: url('car-background.jpg');">
      <h1 class="text-3xl md:text-5xl font-bold mb-2">Автосалон лучших машин города Иркутска</h1>
      <p class="text-xl md:text-2xl mt-2">Мы ждем вас!</p>
    </section>
  
    <!-- Location Section -->
    <section class="p-8 flex flex-col md:flex-row items-center md:items-start md:justify-center gap-8">
      <div class="bg-gray-800 rounded-full p-4 h-60 w-60 flex items-center justify-center">
        <!-- Map Image Placeholder -->
        <img src="{{asset('images/map.png')}}" alt="Map of Иркутск" class="rounded-full">
      </div>
      <div>
        <h2 class="text-xl font-semibold mb-4">Найдем нужную вам машину в вашем городе</h2>
        <ul class="text-gray-300 space-y-2">
          <li>Hyundai Elantra 2018</li>
          <li>Mazda 6 2019</li>
          <li>Toyota Camry 2020</li>
          <li>Toyota Land Cruiser</li>
          <li>Toyota Yaris</li>
        </ul>
      </div>
    </section>
  
    <!-- Popular Offers Section -->
    <section class="p-8">
      <h2 class="text-2xl font-semibold text-center mb-6">Популярные предложения</h2>
      <div class="flex flex-wrap justify-center gap-6">
        <!-- Offer Item 1 -->
        <div class="bg-gray-800 rounded-lg overflow-hidden w-64">
          <img src="car1.jpg" alt="Car Image" class="w-full h-40 object-cover">
          <div class="p-4">
            <h3 class="text-lg font-semibold">Audi A6</h3>
            <p class="text-gray-400 text-sm">В наличии</p>
            <button class="mt-4 px-4 py-2 w-full bg-purple-500 rounded hover:bg-purple-600">Подробнее</button>
          </div>
        </div>
        <!-- Offer Item 2 -->
        <div class="bg-gray-800 rounded-lg overflow-hidden w-64">
          <img src="car2.jpg" alt="Car Image" class="w-full h-40 object-cover">
          <div class="p-4">
            <h3 class="text-lg font-semibold">Mercedes-Benz C-Class</h3>
            <p class="text-gray-400 text-sm">В наличии</p>
            <button class="mt-4 px-4 py-2 w-full bg-purple-500 rounded hover:bg-purple-600">Подробнее</button>
          </div>
        </div>
        <!-- Offer Item 3 -->
        <div class="bg-gray-800 rounded-lg overflow-hidden w-64">
          <img src="car3.jpg" alt="Car Image" class="w-full h-40 object-cover">
          <div class="p-4">
            <h3 class="text-lg font-semibold">BMW X5</h3>
            <p class="text-gray-400 text-sm">В наличии</p>
            <button class="mt-4 px-4 py-2 w-full bg-purple-500 rounded hover:bg-purple-600">Подробнее</button>
          </div>
        </div>
      </div>
    </section>
  

   <x-footer/>
  </div>
</body>
</html>