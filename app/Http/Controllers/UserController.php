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
        $template->setValue('name', $user->fname);
        $template->setValue('email', $user->email);
        $template->setValue('address', $user->address);

        // Set the file name for the generated document
        $fileName = $user->fname . '.docx'; // Include the name in the filename

        // Save the generated document to a temporary file
        $template->saveAs($fileName);

        // Return the generated document for download with the proper filename
        return response()->download($fileName)->deleteFileAfterSend(true);
    }

}
