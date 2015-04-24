<?php namespace App\Http\Controllers;

use Input;
Use Redirect;
use App\MedicalPractice;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


class MedicalPracticesController extends Controller
{
    protected $rules = [
        'name'      => ['required', 'min:3'],
        'slug'      => ['required'],
        'phone'     => ['min:10', 'max:10'],
    ];

    public function index()
    {
        // Show a listing of Winthrop Medical Practice Websites
        $medicalpractices = MedicalPractice::all();
        return view('medicalpractices.index', compact('medicalpractices'));
    }

    public function create()
    {
        return view('medicalpractices.create');
    }

    public function store(Request $request)
    {
        $this->validate($request, $this->rules);

        $input = Input::all();
        MedicalPractice::create( $input );

        return Redirect::route('medicalpractices.index')->with('message', 'Medical Practice Added');

    }

    public function show(Medicalpractice $medicalpractice)
    {
        return view('medicalpractices.show', compact('medicalpractice'));
    }

    public function edit(Medicalpractice $medicalpractice)
    {
        return view('medicalpractices.edit', compact('medicalpractice'));
    }

    public function update(Medicalpractice $medicalpractice, Request $request)
    {
        $this->validate($request, $this->rules);
        $input = array_except(Input::all(), '_method');
        $medicalpractice->update($input);
        return Redirect::route('medicalpractices.show', $medicalpractice->slug)->with('message', 'Medicalpractice updated.');
    }

    public function destroy(Medicalpractice $medicalpractice)
    {
        $medicalpractice->delete();
        return Redirect::route('medicalpractices.index')->with('message', 'Medicalpractice deleted.');
    }

}
