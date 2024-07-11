<?php
namespace App\Http\Controllers;

use App\Events\OptionSelected;
use Illuminate\Http\Request;

class OptionController extends Controller
{
    public function selectOption(Request $request)
    {
        event(new OptionSelected($request->option));
        return response()->json(['status' => 'Option selected successfully.']);
    }
}
?>