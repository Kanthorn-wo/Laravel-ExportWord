<?php

namespace App\Http\Controllers;

use App\Models\Form;
use App\Models\Image;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class FormController extends Controller
{
    public function index($id)
    {
        $user = User::findOrFail($id);
        return view('form.index', compact('user'));
    }

    public function store(Request $request, $id)
    {
        // dd($request, $id);

        $data = array();
        $data['user_id'] = $id;
        $data['uuid'] = Str::uuid();
        $data['loan_1'] = filter_var($request->loan_1, FILTER_VALIDATE_BOOLEAN);
        $data['term_expenses_1'] = filter_var($request->term_expenses_1, FILTER_VALIDATE_BOOLEAN);
        $data['term_expenses_amout_1'] = $request->term_expenses_amout_1;
        $data['cost_living_1'] = filter_var($request->cost_living_1, FILTER_VALIDATE_BOOLEAN);
        $data['loan_2'] = filter_var($request->loan_2, FILTER_VALIDATE_BOOLEAN);
        $data['term_expenses_2'] = filter_var($request->term_expenses_2, FILTER_VALIDATE_BOOLEAN);
        $data['term_expenses_amout_2'] = $request->term_expenses_amout_2;
        $data['cost_living_2'] = filter_var($request->cost_living_2, FILTER_VALIDATE_BOOLEAN);
        $data['created_at'] = now();
        $data['updated_at'] = now();
        DB::table('forms')->insert($data);

        return redirect()->route('form.list')->withSuccess("อัพเดตข้อมูลสำเร็จ");
    }

    public function list()
    {
        $list = Form::all();
        return view('form.list', compact('list'));
    }

    public function uploadPage($id)
    {
        $user = User::findOrfail($id);

        return view('form.upload', compact('user'));
    }

    public function uploadFile(Request $request, $id)
    {

        $images = $request->file('images');

        $fullPaths = [];

        foreach ($images as $service_img) {
            $name_generate = hexdec(uniqid());
            $img_extension = strtolower($service_img->getClientOriginalExtension());
            $combine_name_ext = $name_generate . '.' . $img_extension;
            $upload_location = 'stored/images/';
            $full_path = $upload_location . $combine_name_ext;

            $service_img->move($upload_location, $combine_name_ext);

            $fullPaths[] = $full_path; // Store the full path in the $fullPaths array

        }
        // Remove backslashes from the paths

        $data = array();
        $data['path'] = json_encode($fullPaths);
        $data['user_id'] = $id;
        $data['created_at'] = now();
        $data['updated_at'] = now();
        DB::table('images')->insert($data);

        // foreach ($images as $image) {
        //     $originalName = $image->getClientOriginalName();
        //     $filename = $originalName; // You can customize the filename as needed.

        //     $image->storeAs('images', $filename, 'public');

        //     Image::create([
        //         'path' => $filename,
        //     ]);

        // }

        return redirect()->back()->with('success', 'Images uploaded successfully.');

    }

    public function showImages()
    {
        $images = Image::all();

        return view('form.show-img', compact('images'));
    }

}
