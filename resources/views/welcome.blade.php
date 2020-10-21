<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
   <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <title>Card Divider</title>
      <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
      <!-- Fonts -->
      <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
      <style>
      </style>


      <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>

      <script type="text/javascript">
        
      $(function() {
          $( ".playerdiv" ).click(function() {
            var d = $(this).data('indextr');      
            $( "tr[indextoggle='"+d+"']" ).toggle( "slow" );
          });
      });
      </script>

   </head>
   <body class="antialiased">

      <div class="container mx-auto p-6">
         <div class="container mx-auto" style="background-color: white">
            <div class="w-full max-w-xs" style="margin: auto;">
               <form action="" method="post" class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
                  @csrf
                  <div class="mb-6">
                     <label class="block text-gray-700 text-sm font-bold mb-2" for="password">
                     Number of Players
                     </label>
                     <input class="shadow appearance-none border border-red-500 rounded w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline" id="playernumber" name="playernumber" type="text" placeholder="How many players ?" @if(!empty($playernum)) value="{{ $playernum }}" @endif>
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
                      <th class="px-4 py-3">Player</th>

                    </tr>
                  </thead>
                  <tbody class="bg-white divide-y dark:divide-gray-700 dark:bg-gray-800">
                  
                  @for ($n = 1; $n < $playernum+1; $n++)
                  <div>
                    
                        <tr class="playerdiv text-gray-700 dark:text-gray-400" data-indextr="{{ $n }}">
                          <td class="px-4 py-3">
                            <div class="flex items-center text-sm">
                              <div
                                class="relative hidden w-8 h-8 mr-3 rounded-full md:block"
                              >
                                <img
                                  class="object-cover w-full h-full rounded-full"
                                  src="{{URL::asset('/img/profilepic.jpg')}}"
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
                        <tr class="text-gray-700 dark:text-gray-400" style="border-top: none; display:none;" indextoggle="{{ $n }}">
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