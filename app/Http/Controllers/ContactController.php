<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;
use App\Models\ContactInformation;

class ContactController extends Controller
{
    public function index()
    {
        $contacts = Contact::all();
        return view('kontak-kami.index', compact('contacts')); 
    }
        public function store(Request $request)
    {
        $request->validate([
            'subject' => 'required|string|max:255',
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'message' => 'required|string',
        ]);

        Contact::create([
            'subject' => $request->subject,
            'name' => $request->name,
            'email' => $request->email,
            'message' => $request->message,
        ]);

        return redirect()->back()->with('success', 'Pesan Anda telah terkirim!');
    }
    public function destroy($id)
{
    $contact = Contact::findOrFail($id);
    $contact->delete();

    return redirect()->route('contact.index')->with('success', 'Contact message deleted successfully!');
}
public function update(Request $request, $id)
{
    $contact = ContactInformation::find($id);
    $contact->update($request->all());

    return redirect()->back()->with('success', 'Contact information updated successfully.');
}
public function showContactInfoForm()
{
    $contactInfo = ContactInformation::first();
    return view('kontak-kami.index', compact('contactInfo'));
}

public function updateContactInfo(Request $request)
{
    $request->validate([
        'email' => 'required|email',
        'phone' => 'required|string',
        'location' => 'required|string',
    ]);

    $contactInfo = ContactInformation::first();
    if ($contactInfo) {
        $contactInfo->update($request->all());
    } else {
        ContactInformation::create($request->all());
    }

    return redirect()->back()->with('success', 'Contact information updated successfully.');
}


}
