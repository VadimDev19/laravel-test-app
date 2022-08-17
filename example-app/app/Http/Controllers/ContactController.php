<?php



namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ContactRequest;
use App\Models\Contact;
use App\Models\Category;


function contactFieldsData ($request) {
return [
            'name' => $request->input('name'),
            'surname' => $request->input('surname'),
            'email' => $request->input('email'),
            'phone' => $request->input('phone'),
        ];
};



class ContactController extends Controller {

    public function index() {
        $data = Contact::all();
       return view('contactList', compact('data'));
    }

    public function create() {
        return view('contactCreator');
    }

    public function store(ContactRequest $req) {
            Contact::create(contactFieldsData($req));

           return redirect()->route('home.index')->with('customSuccess', 'Post has been added');
    }

    public function show(Contact $id) {
        $contact = $id;
        return view('contact', compact('contact'));
    }

    public function edit(Contact $id) {
        $contact = $id;
        return view('editContact', compact('contact'));
    }

    public function update(Contact $id, ContactRequest $req) {
        $contact = $id;
        $contact->update(contactFieldsData($req));

        return redirect()->route('contacts.update', $contact->id)->with('customSuccess', 'Post has been updated');
    }

    public function destroy(Contact $id) {
            $contact = $id;
            $contact->delete();
        return redirect()->route('contacts.index')->with('customSuccess', 'Post has been deleted');
    }
}
