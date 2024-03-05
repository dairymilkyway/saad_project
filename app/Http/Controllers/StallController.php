<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use Storage;
use View;
use Validator;
use App\Models\Stall;
use Redirect;

class StallController extends Controller
{

    public function index()
    {
        $stalls = Stall::all();
        return View::make('admin.stall', compact('stalls'));
    }

    public function create()
    {
        return View::make('stall.create');
    }

    public function store(Request $request)
    {
        $rules = [
            'img_path' => 'mimes:jpg,bmp,png',
        ];

        $validator = Validator::make($request->all(), $rules);

        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }
        $stall = new Stall();
        $stall->codename = $request->codename;
        $stall->description = $request->description;
        $stall->status = $request->status;
        $stall->rental_rate = $request->rental_rate;

        $path = Storage::putFileAs(
            'public/images',
            $request->file('img_path'),
            $request->file('img_path')->getClientOriginalName()
        );

        $stall->img_path = 'storage/images/' . $request->file('img_path')->getClientOriginalName();
        $stall->save();
        return redirect()->route('stall.index');

    }

    public function edit(string $id)
    {
        $stall = Stall::find($id);
        return View::make('stall.edit', compact('stall'));
    }

    public function update(Request $request, $id)
    {
        $payment = Payment::findOrFail($id);

        $data = [
            'amount_paid' => $request->amount_paid,
            'remarks' => $request->remarks,
        ];

        if ($request->has('amount_paid')) {
            $previous_amount_paid = $payment->amount_paid;
            $data['amount_to_be_paid'] = $payment->amount_to_be_paid - ($request->amount_paid - $previous_amount_paid);
            $data['balance'] = $data['amount_to_be_paid'] - $request->amount_paid;
        }

        $payment->update($data);

        return redirect()->route('payment.index')->with('success', 'Payment updated successfully');
    }

    public function destroy(string $id)
    {
        Stall::destroy($id);
        return Redirect::to('stall');
    }
}
