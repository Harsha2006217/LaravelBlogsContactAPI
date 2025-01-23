<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactFormRequest;
use App\Models\ContactForm;

class ContactFormController extends Controller
{
    public function store(ContactFormRequest $request)
    {
        $contactForm = ContactForm::create($request->validated());

        return response()->json([
            'status' => true,
            'message' => 'Contact form submitted successfully',
            'data' => $contactForm,
        ], 201);
    }
}
