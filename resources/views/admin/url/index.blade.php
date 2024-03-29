@extends('layouts.Admin.app')


@section('content')
    @push('customCss')
        <link href="{{ asset('admin/assets/libs/datatables.net-bs5/css/dataTables.bootstrap5.min.css') }}" rel="stylesheet"
            type="text/css" />
    @endpush
    <div class="col-12">
        <div class="page-title-box">
            <div class="page-title-right">
                <ol class="m-0 breadcrumb">
                    <li class="breadcrumb-item"><a href="javascript: void(0);">Dashboard</a></li>
                    <li class="breadcrumb-item"><a href="javascript: void(0);">
                            {{ $info->page_title }}</a></li>
                </ol>
            </div>
            <h4 class="page-title">
                @if (isset($row->title))
                    {{ $row->title }}
                @else
                    {{ $info->page_title }}
                @endif
            </h4>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-5">
            <div class="card">
                <div class="card-body">
                    <form
                        action="@if (isset($row->id)) {{ route($info->form_update, $row->id) }}@else{{ route($info->form_store) }} @endif"
                        method="post">
                        @csrf
                        @if (isset($row))
                            @method('PUT')
                        @endif
                        <div class="mb-3">
                            <label for="url" class="form-label">URL</label>
                            <input type="text" id="url"
                                class="form-control @error('url')
                                        is-invalid
                                        @enderror"
                                placeholder="URL" name="url"
                                @if (isset($row->url)) value="{{ $row->url }}" @endif>
                            @error('url')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <button class="btn btn-primary waves-effect waves-light">Submit</button>
                    </form>
                </div>

            </div> <!-- end card body-->
        </div>

        <div class="col-lg-7">
            <div class="card">
                <div class="card-body">
                    <h4 class="header-title">{{ $info->all_data }}</h4>
                    <div class="mb-3 table-responsive">
                        <table class="table mb-0 ">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Long URL</th>
                                    <th>Short URL</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($data as $key => $row)
                                    <tr>
                                        <td>{{ $key + 1 }}</td>
                                        <td>{{ Str::limit($row->url, 30, '...') }}</td>
                                        <td><a href="{{ route('admin.url.short', $row->code) }}" target="_blank">
                                                {{ route('admin.url.short', $row->code) }}</a>

                                        </td>
                                        <td>{{ $row->count }}</td>
                                        <td>
                                            <span class="delete d-inline-block" style="cursor: pointer"><i
                                                    class="material-symbols-outlined text-danger">delete</i></span>
                                            <form action="{{ route($info->form_destroy, $row->id) }}" method="post">
                                                @csrf
                                                @method('delete')
                                            </form>

                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="5" class="text-center">
                                            No Data
                                        </td>
                                    </tr>
                                @endforelse




                            </tbody>
                        </table>



                    </div>

                    <nav aria-label="Page navigation example">
                        <ul class="pagination">
                            <li class="page-item">{{ $data->links() }}
                            </li>
                        </ul>
                    </nav>


                </div> <!-- end card body-->
            </div> <!-- end card -->
        </div><!-- end col-->
        <!-- end row-->
    </div>
    @push('customJs')
        <script>
            $(document).ready(function() {
                $('.delete').on('click', function() {
                    var form = $(this).next('form');
                    Swal.fire({
                        title: 'Are you sure?',
                        text: "You won't be able to revert this!",
                        icon: 'warning',
                        showCancelButton: true,
                        confirmButtonColor: '#3085d6',
                        cancelButtonColor: '#d33',
                        confirmButtonText: 'Yes, delete it!'
                    }).then((result) => {
                        if (result.isConfirmed) {
                            Swal.fire(
                                'Deleted!',
                                'Your file has been deleted.',
                                'success'
                            )
                            form.submit()
                        }
                    })
                })
            })
        </script>
    @endpush
@endsection
