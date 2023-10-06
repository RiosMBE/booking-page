<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./css/stylos.css">
  @vite('resources/css/app.css')
</head>
<body>
    <div class="md:container md:mx-auto">

        <nav class="bg-blue-950 py-[3rem]">
            <div class="text-center text-white">
                <ul>
                    <li>
                        <a class="py-[14px] px-[20px] hover:underline hover:text-gray-500" href="#">Tours</a>
                        <a class="py-[14px] px-[20px] hover:underline hover:text-gray-500" href="#">Experiences</a>
                        <a class="py-[14px] px-[20px] hover:underline hover:text-gray-500" href="#">Activities</a>
                        <a class="py-[14px] px-[20px] hover:underline hover:text-gray-500" href="#">Restaurants</a>
                        <a class="py-[14px] px-[20px] hover:underline hover:text-gray-500" href="#">Transportation</a>
                    </li>
                </ul>
            </div>
        </nav>

        <div class="bg-cover bg-center h-[60vh]" style="background-image: url('img/playa.jpg')">
            <div class="flex justify-center">
                <input class="mt-[40vh] w-2/4 p-4 rounded-xl border text-center" type="text" placeholder="Where's your next adventure?">
            </div>
        </div>

        <section class="flex justify-center pb-[2.7rem] -mt-[2.5rem]">
            <div class="bg-blue-950 rounded-lg grid grid-rows-2 p-6">
                <div class="text-[1.1rem]">
                    <input type="text" placeholder="Where are you going!">
                    <input type="text" placeholder="Check-In Date">
                    <input type="text" placeholder="Adults">
                    <input type="text" placeholder="Kids">    
                </div>

                <div class="flex justify-center">
                    <button class="bg-blue-300 hover:bg-blue-500 text-white font-bold py-2 px-18 rounded-lg w-3/5">SEARCH</button>
                </div>
            </div>
        </section>

        <section class="bg-blue-50 flex flex-auto justify-center">
            <div class="p-10">
                <h1 class="text-2xl pb-6">We Set-Up Your Trip</h1>
                <p class="text-gray-600 text-justify pb-6">
                    We take care of putting together and booking all
                    the experiences you need on your trip. On our
                    platform you can organize your itinerary, and
                    have everything you need on your adventure.
                </p>
                <a  class="text-xl text-blue-900" href="#">Download it NOW!</a>
            </div>
        </section>

        <section class="flex justify-center">
            <div class="">
                <nav class="text-center text-blue-700 font-light hover:text-blue-900 text-lg pt-[3.2rem] text-[1.6rem]">
                    <ul>
                        <li>
                            <a class="py-[0.70rem] px-[2rem] hover:inderline" href="#">Tours</a>
                            <a class="py-[0.70rem] px-[2rem] hover:underline" href="#">Experiences</a>
                            <a class="py-[0.70rem] px-[2rem] hover:underline" href="#">Activities</a>
                            <a class="py-[0.70rem] px-[2rem] hover:underline" href="#">Restaurants</a>
                            <a class="py-[0.70rem] px-[2rem] hover:underline" href="#">Transportation</a>
                        </li>
                    </ul>
                </nav>

                <div class="flex flex-auto pt-[4vh] pb-[6vh]">
                    <div class="w-[45rem] pr-[4rem]">
                        <img class="rounded-lg" src="{{asset('img/section 2 (1).png')}}" alt="1">
                    </div>

                    <div class="w-[45rem] pl-[4rem]">
                        <img class="rounded-lg" src="{{asset('img/section 2 (2).jpg')}}" alt="2">
                    </div>
                </div>
            </div>
        </section>

        <section class="bg-blue-50 flex flex-auto justify-center">
            <div class="p-10">
                <h1 class="text-2xl pb-6">Travel With Confidence</h1>
                <p class="text-gray-600 text-justify pb-6">
                    We want to take care of every detail of your adventures
                    with us. For that reason, we have created an itinerary
                    for you, with all the specifics and information, for you
                    to be able to have the best time.
                </p>
                <a class="text-xl text-blue-900" href="#">Download it NOW!</a>
            </div>
        </section>
    </div>
</body>
</html>