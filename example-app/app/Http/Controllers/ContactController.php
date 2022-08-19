<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ContactRequest;
use App\Models\Contact;
use App\Models\Category;
use App\Models\Tag;


function contactFieldsData ($request) 
{
    return 
    [
        'name' => $request->input('name'),
        'surname' => $request->input('surname'),
        'email' => $request->input('email'),
        'phone' => $request->input('phone'),
        'category_id' => $request->input('category_id'),
        'tags' => $request->input('tags'),
    ];
};



class ContactController extends Controller 
{

    public function index() 
    {
        $data = Contact::all();
        return view('contactList', compact('data'));
    }

    public function create() 
    {
        $categories = Category::all();
        $tags = Tag::all();
        return view('contactCreator', compact('categories', 'tags'));
    }

    public function store(ContactRequest $req) 
    {
        $data = contactFieldsData($req);
        $tags = $data['tags'];
        unset($data['tags']);

        $contact = Contact::create($data);

        $contact->tags()->attach($tags);
        
        return redirect()->route('contacts.index')->with('customSuccess', 'Post has been added');
    }

    public function show(Contact $id) 
    {
        $contact = $id;
        return view('contact', compact('contact'));
    }

    public function edit(Contact $id) 
    {
        $contact = $id;
        $categories = Category::all();
        $tags = Tag::all();
        return view('editContact', compact('contact', 'categories', 'tags'));
    }

    public function update(Contact $id, ContactRequest $req) 
    {
        $contact = $id;
        $data = contactFieldsData($req);
        $tags = $data['tags'];
        unset($data['tags']);
        $contact->tags()->sync($tags);
        
        return redirect()->route('contacts.update', $contact->id)->with('customSuccess', 'Post has been updated');
    }

    public function destroy(Contact $id) 
    {
        $contact = $id;
        $contact->delete();
        return redirect()->route('contacts.index')->with('customSuccess', 'Post has been deleted');
    }
}
