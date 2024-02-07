<?php

namespace App\Http\Controllers\Admin\Category;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Category;
use stdClass;

class CategoryController extends Controller
{
    public function index()
    {
        $data = Category::orderBy('id', 'DESC')->simplePaginate(5);
        $info = new stdClass();
        $info->page_title = 'Create URL';
        $info->all_data = 'All URL';
        $info->form_store = 'admin.url.store';
        $info->form_edit = 'admin.url.edit';
        $info->form_destroy = 'admin.url.destroy';
        return view('admin.url.index', compact('data', 'info'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'url' => 'required|string|max:80|unique:categories,title',
        ]);

        $row = new Category();
        $row->title = $request->title;
        $row->slug = $request->slug;
        $row->status = $request->status;
        $row->save();
        return redirect()->route('admin.url.index')->with('success', 'URL Successfully Created');
    }

    public function edit($id)
    {
        $data = Category::orderBy('id', 'DESC')->simplePaginate(5);
        $info = new stdClass();
        $info->page_title = 'Create uURLrl';
        $info->all_data = 'All URL';
        $info->form_update = 'admin.url.update';
        $info->form_edit = 'admin.url.edit';
        $info->form_destroy = 'admin.url.destroy';
        $row = Category::where('id', $id)->first();
        return view('admin.url.index', compact('data', 'info', 'row'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'url' => 'required|string|max:80',
        ]);

        $row = Category::where('id', $id)->first();
        $row->title = $request->title;
        $row->slug = $request->slug;
        $row->status = $request->status;
        $row->save();
        return redirect()->route('admin.url.index')->with('success', 'URL Successfully Updated');
    }

    public function destroy($id)
    {
        Category::where('id', $id)->delete();
        return redirect()->route('admin.url.index')->with('success', 'URL Successfully Deleted');
    }
}
