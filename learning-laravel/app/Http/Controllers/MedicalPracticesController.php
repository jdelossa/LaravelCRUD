<?php namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesCommands;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use View;
use App\MedicalPractice;

class MedicalPracticesController extends BaseController
{
    public function index()
    {
        // Show a listing of Winthrop Medical Practice Websites
        $medicalpractice = MedicalPractice::all();
        return View::make('index', compact('medicalpractice'));
    }

    public function create()
    {
        // Show the 'add a medical practice' form
        return View::make('create');
    }

    public function handleCreate()
    {
        // Handle create form submission
    }

    public function edit(MedicalPractice $medicalpractice)
    {
        return View::make('edit');
    }

    public function handleEdit()
    {
        // Handle edit form submission
    }

    public function delete()
    {
        // Show delete confirmation page
        return View::make('delete');
    }
    public function handleDelete()
    {
        // Handle the delete confirmation
    }
}
