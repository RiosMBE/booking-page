<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./css/stylos.css">
  @vite('resources/css/app.css')
</head>
<body>

    {{--Navegador--}}
    <div class="bg-blue-950">
        <nav class="md:container md:mx-auto">
            <div class="py-[2.5rem]">
                <img class="w-36" src="{{asset('img/booking-com.svg')}}" alt="booking">
                <div class="md:container md:mx-auto text-center text-[1.2rem] text-white">
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
            </div>
        </nav>
    </div>

    {{--Banner y barra de busqueda--}}
    <section class="bg-cover bg-center h-[60vh]" style="background-image: url('img/playa.jpg')">
        <div class="md:container md:mx-auto">
            <div class="flex justify-center">
                <input class="mt-[40vh] w-2/4 p-4 rounded-xl border text-center" type="text" placeholder="Where's your next adventure?">
            </div>
        </div>
    </section>

    {{--Boton de busqueda--}}
    <section class="md:container md:mx-auto">
        <div class="pb-[3.5rem] flex flex-auto justify-center">
            <div class="bg-blue-950 w-[75%] grid grid-rows-2 grap-4 rounded-[1.2rem] pt-[1.5rem] pb-[1.5rem] -mt-[2rem]">
                <div class="text-[1.1rem] pb-[0.6rem] flex flex-auto justify-center">
                    <input class="rounded-l-[0.6rem] border-[2px] p-2 w-1/5 h-sm" type="text" placeholder="Where are you going?">
                    <input class="border-[2px] p-2 w-1/5 h-sm" type="text" placeholder="Check-In Date">
                    <input class="border-[2px] p-2 w-1/5 h-sm" type="text" placeholder="Adults">
                    <input class="rounded-r-[0.6rem] border-[2px] p-2 w-1/5 h-sm" type="text" placeholder="Kids">
                </div>

                <div class="flex justify-center pt-[0.3rem]">
                    <button class="text-[1.4rem] font-bold text-white bg-blue-300 hover:bg-blue-400 rounded-lg py-2 px-18 w-[35%]">SEARCH</button>
                </div>
            </div>
        </div>
    </section>

    {{--We set up your trip--}}
    <div class="bg-blue-50">
        <section class="md:container md:mx-auto flex flex-auto">
            <div class="justify-center p-10">
                <h1 class="text-[2.7rem] font-light pb-6">We Set-Up Your Trip</h1>
                <p class="text-gray-600 text-[1.4rem] text-justify pb-8">
                    We take care of putting together and booking all
                    the experiences you need on your trip. On our
                    platform you can organize your itinerary, and
                    have everything you need on your adventure.
                </p>
                <a  class="text-[1.8rem] text-blue-900 hover:font-medium" href="#">Download it NOW!</a>
            </div>
        </section>
    </div>

    {{--Filtro--}}
    <section class="md:container md:mx-auto">
        <nav class="text-center text-[1.9rem] text-blue-800 hover:text-blue-900 pt-[3.2rem]">
            <ul>
                <li>
                    <a class="py-[0.70rem] px-[2.5rem] hover:underline" href="#">Tours</a>
                    <a class="py-[0.70rem] px-[2.5rem] hover:underline" href="#">Experiences</a>
                    <a class="py-[0.70rem] px-[2.5rem] hover:underline" href="#">Activities</a>
                    <a class="py-[0.70rem] px-[2.5rem] hover:underline" href="#">Restaurants</a>
                    <a class="py-[0.70rem] px-[2.5rem] hover:underline" href="#">Transportation</a>
                </li>
            </ul>
        </nav>

        <div class="flex flex-auto justify-center pt-[4vh] pb-[6vh]">
            <div class="w-[45rem] pr-[2rem]">
                <img class="rounded-lg" src="{{asset('img/section 2 (1).png')}}" alt="1">
            </div>

            <div class="w-[45rem] pl-[2rem]">
                <img class="rounded-lg" src="{{asset('img/section 2 (2).jpg')}}" alt="2">
            </div>
        </div>
    </section>

    {{--Travel with confidence--}}
    <div class="bg-blue-50 ">
        <section class="md:container md:mx-auto flex flex-auto">
            <div class="justify-center p-10">
                <h1 class="text-[2.7rem] font-light pb-6">Travel With Confidence</h1>
                <p class="text-gray-600 text-[1.4rem] text-justify pb-8">
                    We want to take care of every detail of your adventures
                    with us. For that reason, we have created an itinerary
                    for you, with all the specifics and information, for you
                    to be able to have the best time.
                </p>
                <a class="text-[1.8rem] text-blue-900 hover:font-medium" href="#">Download it NOW!</a>
            </div>
        </section>
    </div>

    {{--Destinos populares--}}
    <section class="md:container md:mx-auto">
        <div class="p-10">
            <h1 class="text-[2.7rem] font-light pb-6">Popular Destinations</h1>
            <div class="flex flex-auto justify-center">
                <div class="grid grid-cols-3 gap-7">
                    <div class="text-[2.4rem] font-light text-center">
                        <img class="w-[30.7rem] h-[30rem] rounded-lg" src="{{asset('img/Holbox.jpg')}}" alt="Holbox">
                        <p class="pt-3">Holbox</p>
                    </div>

                    <div class="text-[2.4rem] font-light text-center">
                        <img class="w-[30.7rem] h-[30rem] rounded-lg" src="{{asset('img/Tulum.jpg')}}" alt="Tulum">
                        <p class="pt-3">Tulum</p>
                    </div>

                    <div class="text-[2.4rem] font-light text-center">
                        <img class="w-[30.7rem] h-[30rem] rounded-lg" src="{{asset('img/Playa del carmen.jpg')}}" alt="Playa del carmen">
                        <p class="pt-3">Playa del Carmen</p>
                    </div>

                    <div class="text-[2.4rem] font-light text-center">
                        <img class="w-[30.7rem] h-[30rem] rounded-lg" src="{{asset('img/Bacalar.jpg')}}" alt="Bacalar">
                        <p class="pt-3">Bacalar</p>
                    </div>

                    <div class="text-[2.4rem] font-light text-center">
                        <img class="w-[30.7rem] h-[30rem] rounded-lg" src="{{asset('img/Mahahual.jpg')}}" alt="Mahahual">
                        <p class="pt-3">Mahahual</p>
                    </div>

                    <div class="text-[2.4rem] font-light text-center">
                        <img class="w-[30.7rem] h-[30rem] rounded-lg" src="{{asset('img/Isla mujeres.png')}}" alt="Isla mujeres">
                        <p class="pt-3">Isla Mujeres</p>
                    </div>
                </div>
            </div>

            <div class="text-center p-7">
                <a class="text-[2.7rem] font-light text-blue-600 hover:text-blue-900" href="#">See All Destinations</a>
            </div>
        </div>
    </section>

    {{--Best tours--}}
    <section class="md:container md:mx-auto">
        <div class="p-10">
            <h1 class="text-[2.7rem] font-light pb-6">Best Tours</h1>
            <div class="flex flex-auto justify-center">
                <div class="grid grid-cols-3 gap-7">
                    <div class="text-center">
                        <img class="w-[30rem] h-[20rem] rounded-lg" src="{{asset('img/Rio secreto.jpg')}}" alt="Rio secreto">
                        <h2 class="text-gray-500 font-sans">1 DAY TOUR</h2>
                        <h3 class="font-sans">RIO SECRETO</h3>
                        <p class="text-[0.8rem] text-gray-500">$526 / persona</p>
                        <button class="border-[0.15rem] rounded-md text-[0.8rem] text-gray-500 hover:bg-gray-700 hover:text-white px-2 py-1">View Itinerary</button>
                    </div>

                    <div class="text-center">
                        <img class="w-[30rem] h-[20rem] rounded-lg" src="{{asset('img/Rio secreto.jpg')}}" alt="Rio secreto">
                        <h2 class="text-gray-500 font-sans">1 DAY TOUR</h2>
                        <h3 class="font-sans">RIO SECRETO</h3>
                        <p class="text-[0.8rem] text-gray-500">$526 / persona</p>
                        <button class="border-[0.15rem] rounded-md text-[0.8rem] text-gray-500 hover:bg-gray-700 hover:text-white px-2 py-1">View Itinerary</button>
                    </div>

                    <div class="text-center">
                        <img class="w-[30rem] h-[20rem] rounded-lg" src="{{asset('img/Rio secreto.jpg')}}" alt="Rio secreto">
                        <h2 class="text-gray-500 font-sans">1 DAY TOUR</h2>
                        <h3 class="font-sans">RIO SECRETO</h3>
                        <p class="text-[0.8rem] text-gray-500">$526 / persona</p>
                        <button class="border-[0.15rem] rounded-md text-[0.8rem] text-gray-500 hover:bg-gray-700 hover:text-white px-2 py-1">View Itinerary</button>
                    </div>
                </div>
            </div>

            <div class="text-center p-7">
                <a class="text-[2.7rem] font-light text-blue-600 hover:text-blue-900" href="#">See All Tours</a>
            </div>
        </div>
    </section>

    {{--Rent Your Car--}}
    <section class="md:container md:mx-auto">
        <div class="p-10">
            <h1 class="text-[2.7rem] font-light pb-6">Rent Your Car</h1>
            <nav class="text-center text-[1.9rem] text-blue-800 hover:text-blue-900 pt-[3.2rem] pb-8">
                <ul>
                    <li>
                        <a class="py-[0.70rem] px-[2.5rem] hover:underline" href="#">Economy</a>
                        <a class="py-[0.70rem] px-[2.5rem] hover:underline" href="#">Compact</a>
                        <a class="py-[0.70rem] px-[2.5rem] hover:underline" href="#">Intermediate</a>
                        <a class="py-[0.70rem] px-[2.5rem] hover:underline" href="#">Standard</a>
                        <a class="py-[0.70rem] px-[2.5rem] hover:underline" href="#">Premium</a>
                    </li>
                </ul>
            </nav>

            <div class="flex flex-auto justify-center">
                <div class="grid grid-cols-3 gap-7">
                    <div class="text-center border-[0.2rem] rounded-lg p-4">
                        <img class="w-[27rem] h-[25rem] rounded-lg" src="{{asset('img/Nissan.jpg')}}" alt="March">
                        <h2 class="text-gray-600">Nissan March</h2>
                        <p class="text-gray-600 text-[0.7rem]">5 Passengers | A/C</p>
                        <div class="pt-1.5">
                            <button class="bg-blue-500 rounded-md px-2 py-1">RESERVE</button>
                        </div>
                    </div>

                    <div class="text-center border-[0.2rem] rounded-lg p-4">
                        <img class="w-[27rem] h-[25rem] rounded-lg" src="{{asset('img/Nissan.jpg')}}" alt="March">
                        <h2 class="text-gray-600">Nissan March</h2>
                        <p class="text-gray-600 text-[0.7rem]">5 Passengers | A/C</p>
                        <div class="pt-1.5">
                            <button class="bg-blue-500 rounded-md px-2 py-1">RESERVE</button>
                        </div>
                    </div>

                    <div class="text-center border-[0.2rem] rounded-lg p-4">
                        <img class="w-[27rem] h-[25rem] rounded-lg" src="{{asset('img/Nissan.jpg')}}" alt="March">
                        <h2 class="text-gray-600">Nissan March</h2>
                        <p class="text-gray-600 text-[0.7rem]">5 Passengers | A/C</p>
                        <div class="pt-1.5">
                            <button class="bg-blue-500 rounded-md px-2 py-1">RESERVE</button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="text-center p-7">
                <a class="text-[2.7rem] font-light text-blue-600 hover:text-blue-900" href="#">See All Options</a>
            </div>
        </div>
    </section>

    {{--Informative video--}}
    <section class="md:container md:mx-auto">
        <div class="p-10">
            <div class="border-[0.2rem] rounded-lg p-[10rem]">
                <h1 class="text-center text-[1.5rem] text-gray-400">INFORMATIVE VIDEO</h1>
            </div>
        </div>
    </section>

    {{--footer--}}
    <div class="bg-blue-950">
        <footer class="md:container md:mx-auto">
            <div class="grid grid-cols-4">
            <div class="w-40">
                <img src="{{asset('img/booking-com.svg')}}" alt="booking">
            </div>

            <div>
                <h2>Contactanos</h2>
                <h2>Desde México</h2>
                <input type="text" placeholder="998 201 8044">
                <input type="text" placeholder="bookingadventure@gmail.com">
            </div>

            <div>
                <h2>Desde E.U.A.</h2>
                <input type="text" placeholder="998 201 8044">
                <input type="text" placeholder="bookingadventure@gmail.com">
            </div>

            <div>
                <h2>Síguenos</h2>
            </div>
            </div>
        </footer>
    </div>
</body>
</html>