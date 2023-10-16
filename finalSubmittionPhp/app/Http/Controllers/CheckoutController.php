<?php

namespace App\Http\Controllers;

use App\Models\CartFunction;
use Illuminate\Http\Request;

class CheckoutController extends Controller
{
    public function checkout(Request $request)
{
    // Retrieve form data
    $formData = $request->only(['name', 'total_cost', 'item_count']); // Adjust field names as needed

    // Store the data in the "orders" table
    CartFunction::create($formData);

    // Redirect to a thank you page or wherever you want after checkout
    return redirect('thank-you')->with('success', 'Order placed successfully');
}
}
