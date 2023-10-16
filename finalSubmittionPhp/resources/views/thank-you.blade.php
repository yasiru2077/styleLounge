<x-app-layout>
<br>
<br>
    <div class="max-w-md mx-auto p-6 bg-white shadow-lg rounded-lg">
        <h1 class="text-2xl font-semibold mb-4">Receipt</h1>
    
        <div class="flex justify-between mb-4">
            <p class="text-gray-600">Order Number:</p>
            <p class="text-gray-800">#12345</p>
        </div>
    
        <div class="flex justify-between mb-4">
            <p class="text-gray-600">Date:</p>
            <p class="text-gray-800">October 10, 2023</p>
        </div>
    
        <div class="border-b border-gray-300 mb-4"></div>
    
        <div class="mb-4">
            <p class="text-gray-600">Items:</p>
            <ul>
                <li class="flex justify-between mt-2">
                    <span>Product 1</span>
                    <span>$10.00</span>
                </li>
                <li class="flex justify-between mt-2">
                    <span>Product 2</span>
                    <span>$15.00</span>
                </li>
                <!-- Add more items as needed -->
            </ul>
        </div>
    
        <div class="border-b border-gray-300 mb-4"></div>
    
        <div class="flex justify-between mb-4">
            <p class="text-gray-600">Subtotal:</p>
            <p class="text-gray-800">$25.00</p>
        </div>
    
        <div class="flex justify-between mb-4">
            <p class="text-gray-600">Tax (10%):</p>
            <p class="text-gray-800">$2.50</p>
        </div>
    
        <div class="flex justify-between mb-4">
            <p class="text-gray-600">Total:</p>
            <p class="text-gray-800">$27.50</p>
        </div>
    
        <div class="border-b border-gray-300 mb-4"></div>
    
        <div class="mb-4">
            <p class="text-gray-600">Payment Method:</p>
            <p class="text-gray-800">Credit Card (**** **** **** 1234)</p>
        </div>
    
        <button class="bg-indigo-500 hover:bg-indigo-600 text-white py-2 px-4 rounded-md mt-4">
            Print Receipt
        </button>
    </div>
    

</x-app-layout>