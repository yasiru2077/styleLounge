<x-app-layout>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>


  @php
  $name = Auth::user()->name;
  
  @endphp
<nav class="bg-white border-gray-200 dark:bg-black">
    <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
      <a href="https://flowbite.com/" class="flex items-center">
         
          <span class="self-center text-2xl font-semibold whitespace-nowrap dark:text-white">{{$name}}</span>
      </a>
      <button data-collapse-toggle="navbar-default" type="button" class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-black dark:focus:ring-gray-600" aria-controls="navbar-default" aria-expanded="false">
          <span class="sr-only">Open main menu</span>
          <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
              <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h15M1 7h15M1 13h15"/>
          </svg>
      </button>
      <div class="hidden w-full md:block md:w-auto" id="navbar-default">
        <ul class="font-medium flex flex-col p-4 md:p-0 mt-4 border border-gray-100 rounded-lg bg-gray-50 md:flex-row md:space-x-8 md:mt-0 md:border-0 md:bg-white dark:bg-gray-800 md:dark:bg-black dark:border-gray-700">
          <li>
            <a href="#" class="block py-2 pl-3 pr-4 text-white bg-blue-700 rounded md:bg-transparent md:text-blue-700 md:p-0 dark:text-white md:dark:text-blue-500" aria-current="page">Home</a>
          </li>
          <li>
            <a href="{{ route('item.index') }}" class="block py-2 pl-3 pr-4 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">Clothes</a>
          </li>
          <li>
            <a href="#" class="block py-2 pl-3 pr-4 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">Services</a>
          </li>
          <li>
            <a href="#" class="block py-2 pl-3 pr-4 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">Pricing</a>
          </li>
          <li>
            <a href="#" class="block py-2 pl-3 pr-4 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">Contact</a>
          </li>
        </ul>
      </div>
    </div>
</nav>

@php
    $i = 1;
    $usersReviewsCount = count($reviews);
    $score5Count = 0;
    $score4Count = 0;
    $below4Count = 0;
@endphp

@foreach ($reviews as $review)
   
    @if ($review->score == 5)
        @php $score5Count++; @endphp
    @elseif ($review->score == 4)
        @php $score4Count++; @endphp
    @else
        @php $below4Count++; @endphp
    @endif
@endforeach

@php
    $averageScore = 0;
    if ($usersReviewsCount > 0) {
        $averageScore = ($score5Count * 5 + $score4Count * 4 + $below4Count * 3) / $usersReviewsCount;
    }
@endphp


@php
    $i = 1;
    $usersCount = count($user);
    $roleCounts = [0 => 0, 1 => 0];
    
    foreach ($user as $user) {
        $userRole = $user->role;
        if (array_key_exists($userRole, $roleCounts)) {
            $roleCounts[$userRole]++;
        }
    }
   
    $role0Count = $roleCounts[0];
    $role1Count = $roleCounts[1];
   
@endphp
@php
    // Initialize arrays to store browser and OS counts
    $browserCounts = [];
    $osCounts = [];

    // Count browser and OS occurrences
    foreach ($userAgent as $agent) {
        // Detect operating system
        if (preg_match('/\((.*?)\)/', $agent->user_agent, $osMatches)) {
            $osName = $osMatches[1];
            $osCounts[$osName] = ($osCounts[$osName] ?? 0) + 1;
        }

        // Detect browser
        if (preg_match('/(Chrome|Safari|Firefox|Edge|Opera|Internet Explorer)/i', $agent->user_agent, $browserMatches)) {
            $browserName = $browserMatches[0];
            $browserCounts[$browserName] = ($browserCounts[$browserName] ?? 0) + 1;
        }
    }

    // Find the most used browser and its associated OS
    arsort($browserCounts);
    $mostUsedBrowser = key($browserCounts);
    $associatedOS = '';

    foreach ($userAgent as $agent) {
        if (strpos($agent->user_agent, $mostUsedBrowser) !== false) {
           $b=1;
           $b++;
            preg_match('/\((.*?)\)/', $agent->user_agent, $osMatches);
            $associatedOS = $osMatches[1];
            break;
        }
    }
@endphp

@php
     $subCount = count($subscribers);
@endphp

@php
    // Retrieve all records from the 'cart' table
    $cartItems = \App\Models\Cart::all();

    // Group items by category
    $groupedItems = $cartItems->groupBy('item_category');

    // Initialize arrays to store category statistics
    $categoryStats = [];

    // Calculate statistics for each category
    foreach ($groupedItems as $category => $items) {
        $totalPrice = $items->sum('item_price');
        $averagePrice = $items->avg('item_price');
        $itemCount = $items->count();

        // Store statistics in an array
        $categoryStats[] = [
            'category' => $category,
            'total_price' => $totalPrice,
            'average_price' => $averagePrice,
            'item_count' => $itemCount,
        ];
    }
@endphp

@php
   // Calculate the total number of items in the cart
   $totalAdds = \App\Models\Cart::sum('item_count');
@endphp

@php
   // Calculate the number of items added to the cart per date for the last five days
   $itemsPerDate = \App\Models\Cart::whereDate('created_at', '>=', now()->subDays(5))
                     ->groupBy('date')
                     ->orderBy('date', 'desc')
                     ->get([
                         \DB::raw('DATE(created_at) as date'),
                         \DB::raw('SUM(item_count) as total_items')
                     ]);
@endphp






<div class="flex flex-wrap justify-center">

   
    <a href="#" class="m-3 block max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 dark:bg-gray-900 dark:border-gray-700 dark:hover:bg-gray-700">
        <h5 class="mb-2 text-4xl tracking-tight text-gray-900 dark:text-white">Total Items in Cart: {{ $totalAdds }}</h5>
        <h5 class="mb-2 text-2xl tracking-tight text-gray-900 dark:text-white">Items Added to Cart Per Date (Last Five Days):</h5>
        <ul>
            @foreach ($itemsPerDate as $item)
          
            <h5 class="mb-2 text-2xl tracking-tight text-gray-900 dark:text-white">{{ $item->date }}: {{ $item->total_items }} items</h5>
         @endforeach
      
        </ul>
       
    </a>
    
     
  
    @foreach ($categoryStats as $categoryStat)
    <a href="#" class="m-3 block max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 dark:bg-gray-900 dark:border-gray-700 dark:hover:bg-gray-700">
        <h5 class="mb-2 text-4xl tracking-tight text-gray-900 dark:text-white">Category: {{ $categoryStat['category'] }}</h5>
        <h5 class="mb-2 text-2xl tracking-tight text-gray-900 dark:text-white">Total Price: ${{ $categoryStat['total_price'] }}</h5>
        <h5 class="mb-2 text-2xl tracking-tight text-gray-900 dark:text-white">Average Price: ${{ $categoryStat['average_price'] }}</h5>
        <h5 class="mb-2 text-2xl tracking-tight text-gray-900 dark:text-white">Item Count: {{ $categoryStat['item_count'] }}</h5>
    </a>
    @endforeach

  <a href="#" class=" m-3 block max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 dark:bg-gray-900 dark:border-gray-700 dark:hover:bg-gray-700">
    <h5 class="mb-2 text-4xl tracking-tight text-gray-900 dark:text-white">Average Score: {{ number_format($averageScore) }}/5</h5>
    <h5 class="mb-2 text-2xl  tracking-tight text-gray-900 dark:text-white">{{$usersReviewsCount }} Total Reviews</h5>
    <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Count of reviews with 5 as the score: {{ $score5Count }}</p>
        <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">reviews with 4 as the score: {{ $score4Count }}</p>
        <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">reviews with lower scores: {{ $below4Count }}</p>
  </a>

  <a href="#" class=" m-3 block max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 dark:bg-gray-900 dark:border-gray-700 dark:hover:bg-gray-700">
    <h5 class="mb-2 text-4xl tracking-tight text-gray-900 dark:text-white">Subscribers {{$subCount}} </h5>
    <p class="font-normal text-gray-700 dark:text-gray-400">Subscribers to Users ratio: {{ $subCount }} / {{ $usersCount }}</p>
    <p class="font-normal text-gray-700 dark:text-gray-400">The subscription percentage is: <?php echo $subCount / $usersCount*100; ?>%</p>


  </a>
  
  <a href="#" class=" m-3 block max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 dark:bg-gray-900 dark:border-gray-700 dark:hover:bg-gray-700">
    <h5 class="mb-2 text-4xl tracking-tight text-gray-900 dark:text-white">User Agent Analysis</h5>
    <p class="font-normal text-gray-700 dark:text-gray-400">Most Used Browser: {{ $mostUsedBrowser }}</p>
    <p class="font-normal text-gray-700 dark:text-gray-400">Associated Operating System: {{ $associatedOS }}</p>
    <p class="font-normal text-gray-700 dark:text-gray-400">user count on  {{ $mostUsedBrowser }} :{{$b}}</p> 
  </a>
  
  
  <a href="#" class=" m-3 block max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 dark:bg-gray-900 dark:border-gray-700 dark:hover:bg-gray-700">
    <h5 class="mb-2 text-4xl tracking-tight text-gray-900 dark:text-white">{{$usersCount}} Active Users</h5>
    <p class="font-normal text-gray-700 dark:text-gray-400">number of admins: {{ $role1Count}}</p>
    <p class="font-normal text-gray-700 dark:text-gray-400">number of customers: {{ $role0Count}}</p>
  </a>
</div>
<table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
  <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">

      <tr>
      <th scope="col" class="px-6 py-3">
          UserName
          </th>
          <th scope="col" class="px-6 py-3">
              Email
          </th>
          <th scope="col" class="px-6 py-3">
              Role
          </th>
          <th scope="col" class="px-6 py-3">
              Action
          </th>
      </tr>
  </thead>
  <div class="flex justify-end">
    <a href="{{ url('adminfunction') }}">
     <button type="button" class="text-gray-900 bg-blue-500 border border-gray-300 focus:outline-none hover:bg-gray-100 focus:ring-4 focus:ring-gray-200 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-gray-800 dark:text-white dark:border-gray-600 dark:hover:bg-gray-700 dark:hover:border-gray-600 dark:focus:ring-gray-700">Add Users</button>
     </a>
  </div>
  <tbody>
      @php
      $i=1;
      @endphp
      @foreach ($data as $users)

          <tr class="bg-white border-b dark:bg-gray-900 dark:border-gray-700">
              <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                  {{$users->name}}
              </th>
              <td class="px-6 py-4">
                  {{$users->email}}
              </td>
              <td class="px-6 py-4">
                  {{$users->role}}
              </td>
              <td class="px-6 py-4">
                  <a href="{{url('edit-user/'.$users->id)}}" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>/
                  <a href="{{url('delete-user/'.$users->id)}}" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Delete</a>
              </td>
          </tr>
      @endforeach
  </tbody>
</table>
  
<canvas id="revenueChart" width="400" height="200"></canvas>



<script>
    // Function to create and render the chart
    function createRevenueChart() {
        // Get the monthly revenue data from PHP variable
        var monthlyRevenueData = @json($monthlyRevenue);

        // Get the canvas element
        var ctx = document.getElementById('revenueChart').getContext('2d');

        // Extract months and revenue data
        var months = monthlyRevenueData.map(function(item) {
            return item.month + '/' + item.year;
        });

        var revenue = monthlyRevenueData.map(function(item) {
            return item.total;
        });

        // Create the chart
        var myChart = new Chart(ctx, {
            type: 'bar', // You can use 'bar' or any other chart type you prefer
            data: {
                labels: months,
                datasets: [{
                    label: 'Monthly Revenue',
                    data: revenue,
                    backgroundColor: 'rgba(75, 192, 192, 0.2)', // Change the color as needed
                    borderColor: 'rgba(75, 192, 192, 1)', // Change the color as needed
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    y: {
                        beginAtZero: true,
                        title: {
                            display: true,
                            text: 'Revenue'
                        }
                    }
                }
            }
        });
    }

    // Attach the chart creation function to the window.onload event
    window.onload = function() {
        createRevenueChart();
    };
</script>




</x-app-layout>

