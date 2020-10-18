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
               <form class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
                  <div class="mb-6">
                     <label class="block text-gray-700 text-sm font-bold mb-2" for="password">
                     Password
                     </label>
                     <input class="shadow appearance-none border border-red-500 rounded w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline" id="password" type="password" placeholder="******************">
                     <p class="text-red-500 text-xs italic">Please choose a password.</p>
                  </div>
                  <div class="flex items-center justify-between">
                     <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="button">
                     Sign In
                     </button>
                  </div>
               </form>
            </div>
         </div>
         <div>
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
               <!--           @foreach ($cards as $card)
                  <div class="rounded-md bg-gray-300">
                      <p class="mt-3 text-gray-700 text-left font-semibold px-2">{{ $card['ind'] }}</p>
                      <div class="h-12 w-12 mx-auto"><img src="{{URL::asset('/img/hrt.png')}}" ></img></div>
                      <p class="mt-3 text-gray-700 text-right font-semibold px-2">{{ $card['ind'] }}</p>
                  </div>
                  @endforeach -->
            </div>
         </div>
      </div>
   </body>
</html>