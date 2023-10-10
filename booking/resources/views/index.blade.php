<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  @vite('resources/css/stylos.css')
  @vite('resources/css/app.css')
</head>
<body>

    <div>
        {{--Banner y barra de busqueda--}}
        <section class="bg-cover bg-center h-[60vh]" style="background-image: url('img/banner.png')">
            <div class="md:container md:mx-auto">
                <div class="flex justify-center">
                    <input class="mt-[40vh] w-2/4 p-4 rounded-xl border text-center" type="text" placeholder="Where's your next adventure?">
                </div>
            </div>
        </section>

        {{--Boton de busqueda--}}
        <section class="md:container md:mx-auto">
            <div class="pb-[3.5rem] flex flex-auto justify-center">
                <div class="bg-blue w-[75%] grid grid-rows-2 grap-4 rounded-[1.2rem] pt-[1.5rem] pb-[1.5rem] -mt-[2rem]">
                    <div class="text-blue text-[1.1rem] pb-[0.6rem] flex flex-auto justify-center">
                        <input class="rounded-l-[0.6rem] border-[2px] p-2 w-1/5 h-sm" type="text" placeholder="Where are you going?">
                        <input class="border-[2px] p-2 w-1/5 h-sm" type="text" placeholder="Check-In Date">
                        <input class="border-[2px] p-2 w-1/5 h-sm" type="text" placeholder="Adults">
                        <input class="rounded-r-[0.6rem] border-[2px] p-2 w-1/5 h-sm" type="text" placeholder="Kids">
                    </div>

                    <div class="flex justify-center pt-[0.3rem]">
                        <button class="btnbuscar text-[1.4rem] text-base text-white rounded-lg py-2 px-18 w-[35%] tertiary">SEARCH</button>
                    </div>
                </div>
            </div>
        </section>

        {{--We set up your trip--}}
        <div class="bg-blue-50">
            <section class="md:container md:mx-auto flex flex-auto">
                <div class="justify-center p-10">
                    <h1 class="primary text-black text-[2.7rem] pb-6">We Set-Up Your Trip</h1>
                    <p class="primary text-gray text-[1.4rem] text-justify pb-8">
                        We take care of putting together and booking all
                        the experiences you need on your trip. On our
                        platform you can organize your itinerary, and
                        have everything you need on your adventure.
                    </p>
                    <a  class="text-[1.8rem] text-blue hover:font-medium" href="#">Download it NOW!</a>
                </div>
            </section>
        </div>

        {{--Filtro--}}
        <section class="md:container md:mx-auto">
            <nav class="text-center text-[1.9rem] text-blue pt-[3.2rem]">
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
                    <img class="rounded-lg" src="{{asset('img/section 1.png')}}" alt="1">
                </div>

                <div class="w-[45rem] pl-[2rem]">
                    <img class="rounded-lg" src="{{asset('img/section 1 (2).png')}}" alt="2">
                </div>
            </div>
        </section>

        {{--Travel with confidence--}}
        <div class="bg-blue-50 ">
            <section class="md:container md:mx-auto flex flex-auto">
                <div class="justify-center p-10">
                    <h1 class="primary text-black text-[2.7rem] font-light pb-6">Travel With Confidence</h1>
                    <p class="primary text-gray text-[1.4rem] text-justify pb-8">
                        We want to take care of every detail of your adventures
                        with us. For that reason, we have created an itinerary
                        for you, with all the specifics and information, for you
                        to be able to have the best time.
                    </p>
                    <a class="text-[1.8rem] text-blue hover:font-medium" href="#">Download it NOW!</a>
                </div>
            </section>
        </div>

        {{--Destinos populares--}}
        <section class="md:container md:mx-auto">
            <div class="p-10">
                <h1 class="text-[2.7rem] primary pb-6">Popular Destinations</h1>
                <div class="flex flex-auto justify-center">
                    <div class="grid grid-cols-3 gap-7">
                        <div class="text-[2.4rem] primary text-center">
                            <img class="w-[30.7rem] h-[30rem] rounded-lg" src="{{asset('img/Holbox.png')}}" alt="Holbox">
                            <p class="pt-3">Holbox</p>
                        </div>

                        <div class="text-[2.4rem] primary text-center">
                            <img class="w-[30.7rem] h-[30rem] rounded-lg" src="{{asset('img/Tulum.png')}}" alt="Tulum">
                            <p class="pt-3">Tulum</p>
                        </div>

                        <div class="text-[2.4rem] primary text-center">
                            <img class="w-[30.7rem] h-[30rem] rounded-lg" src="{{asset('img/Playa del carmen.png')}}" alt="Playa del carmen">
                            <p class="pt-3">Playa del Carmen</p>
                        </div>

                        <div class="text-[2.4rem] primary text-center">
                            <img class="w-[30.7rem] h-[30rem] rounded-lg" src="{{asset('img/Bacalar.png')}}" alt="Bacalar">
                            <p class="pt-3">Bacalar</p>
                        </div>

                        <div class="text-[2.4rem] primary text-center">
                            <img class="w-[30.7rem] h-[30rem] rounded-lg" src="{{asset('img/Mahahual.png')}}" alt="Mahahual">
                            <p class="pt-3">Mahahual</p>
                        </div>

                        <div class="text-[2.4rem] primary text-center">
                            <img class="w-[30.7rem] h-[30rem] rounded-lg" src="{{asset('img/Isla mujeres.png')}}" alt="Isla mujeres">
                            <p class="pt-3">Isla Mujeres</p>
                        </div>
                    </div>
                </div>

                <div class="text-center p-7">
                    <a class="text-[2.7rem] secondary text-blue" href="#">See All Destinations</a>
                </div>
            </div>
        </section>

        {{--Best tours--}}
        <section class="md:container md:mx-auto">
            <div class="p-10">
                <h1 class="text-[2.7rem] primary text-black pb-6">Best Tours</h1>
                <div class="flex flex-auto justify-center">
                    <div class="grid grid-cols-3 gap-7">
                        <div class="text-center">
                            <img class="w-[30rem] h-[20rem] rounded-lg" src="{{asset('img/Rio secreto (2).png')}}" alt="Rio secreto">
                            <p class="text-gray quaternary">1 DAY TOUR</p>
                            <p class="quaternary">RIO SECRETO</p>
                            <p class="text-[0.8rem] text-gray">$526 / persona</p>
                            <button class="border-[0.15rem] rounded-md text-[0.8rem] text-gray px-2 py-1">View Itinerary</button>
                        </div>

                        <div class="text-center">
                            <img class="w-[30rem] h-[20rem] rounded-lg" src="{{asset('img/Rio secreto (2).png')}}" alt="Rio secreto">
                            <h2 class="text-gray font-sans">1 DAY TOUR</h2>
                            <h3 class="font-sans">RIO SECRETO</h3>
                            <p class="text-[0.8rem] text-gray">$526 / persona</p>
                            <button class="border-[0.15rem] rounded-md text-[0.8rem] text-gray px-2 py-1">View Itinerary</button>
                        </div>

                        <div class="text-center">
                            <img class="w-[30rem] h-[20rem] rounded-lg" src="{{asset('img/Rio secreto.png')}}" alt="Rio secreto">
                            <h2 class="text-gray font-sans">1 DAY TOUR</h2>
                            <h3 class="font-sans">RIO SECRETO</h3>
                            <p class="text-[0.8rem] text-gray">$526 / persona</p>
                            <button class="border-[0.15rem] rounded-md text-[0.8rem] text-gray-500 hover:bg-gray-700 hover:text-white px-2 py-1">View Itinerary</button>
                        </div>
                    </div>
                </div>

                <div class="text-center p-7">
                    <a class="text-[2.7rem] secondary text-center text-blue" href="#">See All Tours</a>
                </div>
            </div>
        </section>

        {{--Rent Your Car--}}
        <section class="md:container md:mx-auto">
            <div class="p-10">
                <h1 class="text-[2.7rem] primary pb-6">Rent Your Car</h1>
                <nav class="text-center text-[1.9rem] text-blue pt-[3.2rem] pb-8">
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
                            <img class="w-[27rem] h-[25rem] rounded-lg" src="{{asset('img/Nissan.png')}}" alt="March">
                            <h2 class="text-gray">Nissan March</h2>
                            <p class="text-gray text-[0.7rem]">5 Passengers | A/C</p>
                            <div class="pt-1.5">
                                <button class="primary bg-blue text-white rounded-md px-2 py-1">RESERVE</button>
                            </div>
                        </div>

                        <div class="text-center border-[0.2rem] rounded-lg p-4">
                            <img class="w-[27rem] h-[25rem] rounded-lg" src="{{asset('img/Nissan.png')}}" alt="March">
                            <h2 class="text-gray">Nissan March</h2>
                            <p class="text-gray text-[0.7rem]">5 Passengers | A/C</p>
                            <div class="pt-1.5">
                                <button class="primary bg-blue text-white rounded-md px-2 py-1">RESERVE</button>
                            </div>
                        </div>

                        <div class="text-center border-[0.2rem] rounded-lg p-4">
                            <img class="w-[27rem] h-[25rem] rounded-lg" src="{{asset('img/Nissan.png')}}" alt="March">
                            <h2 class="text-gray">Nissan March</h2>
                            <p class="text-gray text-[0.7rem]">5 Passengers | A/C</p>
                            <div class="pt-1.5">
                                <button class="primary bg-blue text-white rounded-md px-2 py-1">RESERVE</button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="text-center p-7">
                    <a class="text-[2.7rem] secondary text-blue" href="#">See All Options</a>
                </div>
            </div>
        </section>

        {{--Informative video--}}
        <section class="md:container md:mx-auto">
            <div class="p-10">
                <div class="border-[0.2rem] rounded-lg p-[10rem]">
                    <h1 class="text-center text-[1.5rem] text-gray">INFORMATIVE VIDEO</h1>
                </div>
            </div>
        </section>
    </div>
</body>
</html>