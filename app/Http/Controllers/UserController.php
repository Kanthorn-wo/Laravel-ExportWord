<?php

namespace App\Http\Controllers;

use App\Models\User;
use PhpOffice\PhpWord\TemplateProcessor;

class UserController extends Controller
{
    public function index()
    {
        $user = User::all();
        return view('user.index', compact('user'));
    }

    public function show($id)
    {

        $user = User::findOrfail($id);

        return view('user.show', compact('user'));

    }

    public function wordExport($id)
    {
        $user = User::findOrFail($id);

        // Load the Word template
        $template = new TemplateProcessor('word-template/user.docx');

        // Replace placeholders with user data
        $template->setValue('id', $user->id);
        $template->setValue('name', $user->name);
        $template->setValue('email', $user->email);
        $template->setValue('address', $user->address);

        // Set the file name for the generated document
        $fileName = $user->name;

        // Save the generated document to a temporary file
        $template->saveAs($fileName . '.docx');

        // Return the generated document for download
        return response()->download($fileName . '.docx')->deleteFileAfterSend(true);
    }

}
