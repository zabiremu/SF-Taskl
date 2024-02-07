<?php

namespace App\Http\Controllers\Admin\URL;

use stdClass;
use App\Models\ShortURL;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class URLController extends Controller
{
    public function index()
    {
        $data = ShortURL::orderBy('id', 'DESC')->simplePaginate(5);
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
            'url' => 'required|string',
        ]);

        $row = new ShortURL();
        $row->url = $request->url;
        $row->code = Str::random(6);
        $row->save();
        return redirect()->route('admin.url.index')->with('success', 'URL Successfully Created');
    }

    public function url($code)
    {
        $data = ShortURL::where('code', $code)->first();
        $data->count = $data->count + 1;
        $data->save();
        return redirect($data->url);
    }

    public function destroy($id)
    {
        ShortURL::where('id', $id)->delete();
        return redirect()->route('admin.url.index')->with('success', 'URL Successfully Deleted');
    }
}
