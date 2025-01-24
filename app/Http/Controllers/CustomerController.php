<?php

namespace App\Http\Controllers;

use App\Models\CustomerModel;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function index(){
        $customer = CustomerModel::all();
        return view("customer.index", compact('customer'));
    }

    public function show123($id){
        $item = CustomerModel::find($id);
        return view("customer.showXYZ", compact('item'));
    }
    
    public function edit($id){
        $item = CustomerModel::find($id);
        return view("customer.edit", compact('item'));
    }

    public function update(Request $request, int $id)
    {
        $request->validate(
            [
                'name' => 'required|string|max:255',
                'tel' => 'required|string|max:255',
            ]
        );

        $item = CustomerModel::find($id);
        $item->name = $request->input("name");
        $item->tel = $request->input("tel");
        $item->save();

        return redirect(route('customers.index'))
                ->with('success', 'Customer updated successfully');
    }

    public function destroy($id)
    {
        $item = CustomerModel::find($id);
        $item->delete();

        return redirect(route('customers.index'))
                ->with('success', 'Customer deleted successfully');
    }
}
