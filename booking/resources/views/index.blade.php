<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./css/stylos.css">
  @vite('resources/css/app.css')
</head>
<body>
    <div class="container max-w-full flex-auto">
        <div class="bg-blue-950">
            <nav class="mx-xl py-10  text-center text-white">
                <ul>
                    <li>
                        <a href="#">Tours</a>
                        <a href="#">Experiences</a>
                        <a href="#">Activities</a>
                        <a href="#">Restaurants</a>
                        <a href="#">Transportation</a>
                    </li>
                </ul>
            </nav>
        </div>

        <div class="bg-cover bg-center h-96" style="background-image: url('img/playa.jpg')">
            <div class="flex justify-center">
                <input class="w-2/4 p-4 rounded-lg border text-center" type="text" placeholder="Where's your next adventure?">
            </div>
        </div>

        <section class="bg-blue-950 py-6 px-5 rounded-lg">
            <div>
                <input type="text" placeholder="Where are you going!">
                <input type="text" placeholder="Check-In Date">
                <input type="text" placeholder="Adults">
                <input type="text" placeholder="Kids">    
            </div>

            <button class="bg-blue-300 hover:bg-blue-500 text-white font-bold py-2 px-18 rounded-lg">SEARCH</button>

        </section>

        <section class="bg-blue-50 flex-auto">
            <div>
                <h1 class="text-2xl">We Set-Up Your Trip</h1>
                <p class="text-gray-600 text-justify">
                    We take care of putting together and booking all
                    the experiences you need on your trip. On our
                    platform you can organize your itinerary, and
                    have everything you need on your adventure.
                </p>
                <a  class="text-xl text-blue-900" href="#">Download it NOW!</a>
            </div>
        </section>

        <section class="flex justify-center">
            <ul>
                <li>
                    <a href="#">Tours</a>
                    <a href="#">Experiences</a>
                    <a href="#">Activities</a>
                    <a href="#">Restaurants</a>
                    <a href="#">Transportation</a>
                </li>
            </ul>

            <img src="" alt="">
            <img src="" alt="">
        </section>

        <section class="bg-blue-50">
            <h1 class="text-2xl">Travel With Confidence</h1>
            <p class="text-gray-600 text-justify">
                We want to take care of every detail of your adventures
                with us. For that reason, we have created an itinerary
                for you, with all the specifics and information, for you
                to be able to have the best time.
            </p>
            <a class="text-xl text-blue-900" href="#">Download it NOW!</a>
        </section>
    </div>
</body>
</html>