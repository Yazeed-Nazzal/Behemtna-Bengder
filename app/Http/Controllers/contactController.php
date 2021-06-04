<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class contactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('contact');
    }

    public function management_contact()
    {
        $contacts = Contact::all();
        return view('admin.contact.management_contact', compact('contacts'));
    }

    public function create()
    {
        //
    }


    public function store(Request $request)
    {

        Contact::create($request->all());
        toast('Your Contact Send Successfully', 'success');
        return view('contact');
    }


    public function show($id)
    {
        $contact = Contact::find($id);

        return view('admin.contact.show', compact('contact'));
    }


    public function edit($id)
    {
        //
    }


    public function update(Request $request, $id)
    {
        //
    }


    public function destroy($id)
    {
        $contact = Contact::find($id);

        $contact->delete();
        toast('Delete Contact Successfully', 'success');
        return redirect('management-contact');
    }
}
