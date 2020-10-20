<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
   <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <title>Laravel</title>
      <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
      <!-- Fonts -->
      <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
      <style>
         body {
         font-family: 'Nunito';
         }
      </style>
   </head>
   <body class="antialiased">
      <!--         <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center sm:pt-0">
         @if (Route::has('login'))
             <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                 @auth
                     <a href="{{ url('/home') }}" class="text-sm text-gray-700 underline">Home</a>
                 @else
                     <a href="{{ route('login') }}" class="text-sm text-gray-700 underline">Login</a>
         
                     @if (Route::has('register'))
                         <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 underline">Register</a>
                     @endif
                 @endif
             </div>
         @endif
         
         
         
         
         </div> -->
      <div class="container mx-auto p-6">
         <div class="container mx-auto" style="background-color: white">
            <div class="w-full max-w-xs" style="margin: auto;">
               <form action="" method="post" class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
                  @csrf
                  <div class="mb-6">
                     <label class="block text-gray-700 text-sm font-bold mb-2" for="password">
                     Number of Players
                     </label>
                     <input class="shadow appearance-none border border-red-500 rounded w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline" id="playernumber" name="playernumber" type="text" placeholder="How many players ?">
@if ($errors->any())

            @foreach ($errors->all() as $error)
                <p class="text-red-500 text-xs italic">{{ $error }}</p>
            @endforeach

@endif
                     
                  </div>
                  <div class="flex items-center justify-between">
                     <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="submit">
                      Split the Cards
                     </button>
                  </div>
               </form>
            </div>
         </div>
<!--          <div>
            <div class="grid gap-6 grid-cols-3 sm:grid-cols-6 md:grid-cols-8 lg:grid-cols-9">
               <div class="rounded-md bg-gray-300">
                  <p class="mt-3 text-gray-700 text-left font-semibold px-2">1</p>
                  <div class="h-12 w-12 mx-auto"><img src="{{URL::asset('/img/dia.png')}}" ></img></div>
                  <p class="mt-3 text-gray-700 text-right font-semibold px-2">1</p>
               </div>
               <div class="rounded-md bg-gray-300">
                  <p class="mt-3 text-gray-700 text-left font-semibold px-2">1</p>
                  <div class="h-12 w-12 mx-auto"><img src="{{URL::asset('/img/hrt.png')}}" ></img></div>
                  <p class="mt-3 text-gray-700 text-right font-semibold px-2">1</p>
               </div>
               <div class="rounded-md bg-gray-300">
                  <p class="mt-3 text-gray-700 text-left font-semibold px-2">1</p>
                  <div class="h-12 w-12 mx-auto"><img src="{{URL::asset('/img/hrt.png')}}" ></img></div>
                  <p class="mt-3 text-gray-700 text-right font-semibold px-2">1</p>
               </div>
                         @foreach ($cards as $card)
                  <div class="rounded-md bg-gray-300">
                      <p class="mt-3 text-gray-700 text-left font-semibold px-2">{{ $card['ind'] }}</p>
                      <div class="h-12 w-12 mx-auto"><img src="{{URL::asset('/img/hrt.png')}}" ></img></div>
                      <p class="mt-3 text-gray-700 text-right font-semibold px-2">{{ $card['ind'] }}</p>
                  </div>
                  @endforeach
            </div> -->
         </div>
      </div>


@if(!empty($players))
<div class="container mx-auto p-6">
    
            <!-- New Table -->
            <div class="w-full overflow-hidden rounded-lg shadow-xs">
              <div class="w-full overflow-x-auto">
                <table class="w-full">
                  <thead>
                    <tr
                      class="text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800"
                    >
                      <th class="px-4 py-3">Client</th>

                    </tr>
                  </thead>
                  <tbody
                    class="bg-white divide-y dark:divide-gray-700 dark:bg-gray-800"
                  >
                  @for ($n = 1; $n < $playernum+1; $n++)
                  
                  <div>
                    
                        <tr class="text-gray-700 dark:text-gray-400">
                          <td class="px-4 py-3">
                            <div class="flex items-center text-sm">
                              <!-- Avatar with inset shadow -->
                              <div
                                class="relative hidden w-8 h-8 mr-3 rounded-full md:block"
                              >
                                <img
                                  class="object-cover w-full h-full rounded-full"
                                  src="https://images.unsplash.com/flagged/photo-1570612861542-284f4c12e75f?ixlib=rb-1.2.1&q=80&fm=jpg&crop=entropy&cs=tinysrgb&w=200&fit=max&ixid=eyJhcHBfaWQiOjE3Nzg0fQ"
                                  alt=""
                                  loading="lazy"
                                />
                                <div
                                  class="absolute inset-0 rounded-full shadow-inner"
                                  aria-hidden="true"
                                ></div>
                              </div>
                              <div >
                                <p class="font-semibold">{{ 'Player '.$n }}</p>
                                <p class="text-xs text-gray-600 dark:text-gray-400" >
                                    {{ $playercards[$n] ?? '' }}
                              </div>
                            </div>
                          </td>
                        </tr>

                        @if(!empty($players[$n]))
                        <tr class="text-gray-700 dark:text-gray-400" style="border-top: none;">
                          <td class="px-4 py-3">
                            <div class="">
                                <div class="grid gap-6 grid-cols-4 sm:grid-cols-7 md:grid-cols-10 lg:grid-cols-9 xl:grid-cols-16">
                                      @foreach ($players[$n] as $card)
                                      <div class="rounded-md bg-gray-300">
                                          <p class="mt-3 text-gray-700 text-left font-semibold px-2">{{ $card['ind'] }}</p>
                                          <div class="h-12 w-12 mx-auto"><img src="{{URL::asset('/img/'.$card['sym'].'.png')}}" ></img></div>
                                          <p class="mt-3 text-gray-700 text-right font-semibold px-2">{{ $card['ind'] }}</p>
                                      </div>
                                      @endforeach
                                </div>
                            </div>
                          </td>
                        </tr>
                        @endif

                  </div>
                  
                  @endfor

                  </tbody>
                </table>
              </div>
              
            </div>
</div>
@endif

   </body>
</html>