@extends('dashboard.layouts.master')
@section('title', 'Blogs')
@section('css')
@endsection
@section('content')
    <div class="main-content">
        <div class="page-content">
            <div class="container-fluid">
                <x-dashboard.layouts.breadcrumb title1="Blogs" title2="Posts" title3="view Posts" />
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <div class="row g-1 mb-0">
                                    @can('createBlog')
                                        <div class="col-sm-auto">
                                            <a class="btn btn-success add-btn" href="{{ route('blogs.create') }}"
                                                data-bs-toggle="modal"
                                                data-bs-target="#createNewBlog">{{ ucwords('add blog') }}</a>
                                        </div>
                                    @endcan
                                    @can('exportBlogExcel')
                                        <div class="col-sm-auto">
                                            <a class="btn btn-info add-btn"
                                                href="{{ route('blogs.export') }}">{{ ucwords('export blogs') }}</a>
                                        </div>
                                    @endcan
                                    @can('importBlogExcel')
                                        <div class="col-sm-auto">
                                            <a class="btn btn-danger add-btn" href="" data-bs-toggle="modal"
                                                data-bs-target="#importBlogs">{{ ucwords('import blogs') }}</a>
                                        </div>
                                    @endcan
                                </div>
                            </div><!-- end card header -->
                            <div class="card-body">
                                <div id="customerList">
                                    <x-dashboard.layouts.error-verify errors="{{ $errors }}" />
                                    <div class="table">
                                        <table class="table align-middle mb-0 table_id">
                                            <thead class="table-dark">
                                                <tr>
                                                    <th width="10%">#</th>
                                                    <th width="20%">
                                                        Title</th>
                                                    <th width="10%">
                                                        Author</th>
                                                    <th width="20%">
                                                        slug</th>
                                                    <th width="30%">
                                                        Image</th>
                                                    <th width="10%">
                                                        action</th>
                                                </tr>
                                            </thead>
                                            <tbody class="list form-check-all">
                                                @foreach ($blogs as $key => $item)
                                                    <tr>
                                                        <td>{{ $loop->iteration }}</td>
                                                        <td>{{ $item->title }}</td>
                                                        <td>{{ $item->user->name }}</td>
                                                        <td>{{ $item->slug }}</td>
                                                        <td>
                                                            @if ($item->getFirstMediaUrl($item->slug))
                                                                <img src="{{ $item->getFirstMediaUrl($item->slug) }}"
                                                                    class="w-50 rounded object-cover" height="80">
                                                            @endif
                                                        </td>
                                                        <td>
                                                            <div class="d-flex gap-2">
                                                                @can('editBlog')
                                                                    <div class="edit">
                                                                        <a class="btn btn-sm btn-info edit-item-btn"
                                                                            href="" data-bs-toggle="modal"
                                                                            data-bs-target="#edit{{ $item->id }}">
                                                                            <i class="fas fa-edit"></i>
                                                                        </a>
                                                                    </div>

                                                                    <x-form.modal :id="'edit' . $item->id" :title="'update blog'"
                                                                        :action="route('blogs.update', $item->id)" :method="'PUT'">
                                                                        <div class="col-6">
                                                                            <label for="title" class="form-label">Blog
                                                                                title</label>
                                                                            <input type="text" id="title" name="title"
                                                                                value="{{ $item->title ?? '' }}"
                                                                                class="form-control" placeholder="Blog title"
                                                                                required>
                                                                            <x-form.error :name="'title'" />
                                                                        </div>
                                                                        <div class="col-6">
                                                                            <label for="slug"
                                                                                class="form-label">slug</label>
                                                                            <input type="text" id="slug" name="slug"
                                                                                class="form-control"
                                                                                placeholder="Enter Updated slug"
                                                                                value="{{ $item->slug ?? '' }}" required>
                                                                            <x-form.error :name="'slug'" />
                                                                        </div>
                                                                        <div class="col-12">
                                                                            <label for="content"
                                                                                class="form-label">content</label>
                                                                            <textarea id="content" name="content" class="form-control" placeholder=" Enter blog content" required rows="5">{{ $item->content ?? '' }}</textarea>
                                                                            <x-form.error :name="'content'" />
                                                                        </div>
                                                                        <div class="col-6">
                                                                            <label for="image"
                                                                                class="form-label">image</label>
                                                                            <input type="file" id="image" name="image"
                                                                                class="form-control"
                                                                                placeholder=" Enter blog image"
                                                                                accept="image/*">
                                                                            <x-form.error :name="'image'" />
                                                                        </div>
                                                                        @if (auth()->user()->hasRole('Admin'))
                                                                            <div class="col-6">
                                                                                <label class="form-label">Choose Author</label>
                                                                                <select class="form-control" id="user_id"
                                                                                    data-choices="" data-choices-search-false=""
                                                                                    data-choices-removeitem="" name="user_id">
                                                                                    @foreach ($authors as $author)
                                                                                        <option value="{{ $author->id }}"
                                                                                            {{ $author->id == $item->user_id ? 'selected' : '' }}>
                                                                                            {{ ucfirst($author->name) }}
                                                                                        </option>
                                                                                    @endforeach
                                                                                </select>
                                                                                <x-form.error :name="'user_id'" />
                                                                            </div>
                                                                        @else
                                                                            <input type="hidden" name="user_id"
                                                                                value="{{ auth()->user()->id }}">
                                                                        @endif
                                                                    </x-form.modal>
                                                                @endcan
                                                                @can('deleteBlog')
                                                                    <div class="remove">
                                                                        <a class="btn btn-sm btn-danger remove-item-btn"
                                                                            href="" data-bs-toggle="modal"
                                                                            data-bs-target="#delete{{ $item->id }}">
                                                                            <i class="fas fa-trash"></i>
                                                                        </a>
                                                                    </div>
                                                                @endcan
                                                                @can('createBlog')
                                                                    <x-form.modal :id="'delete' . $item->id" :title="'Remove Blog'"
                                                                        :action="route('blogs.destroy', $item->id)" :method="'DELETE'">
                                                                        <div class="col-12">
                                                                            {{ 'Are You Sure You Want To Remove' . '  ' . $item->name }}
                                                                        </div>
                                                                    </x-form.modal>
                                                                @endcan
                                                            </div>
                                                        </td>
                                                    </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div><!-- end card -->
                        </div>
                        <!-- end col -->
                    </div>
                    <!-- end col -->
                </div>
                <!-- end row -->

                <x-form.modal :id="'createNewBlog'" :title="'Add Blog'" :action="route('blogs.store')" :method="'POST'">
                    <div class="col-6">
                        <label for="title" class="form-label">Blog title</label>
                        <input type="text" id="title" name="title" class="form-control"
                            placeholder="Blog title" required>
                        <x-form.error :name="'title'" />
                    </div>
                    <div class="col-6">
                        <label for="slug" class="form-label">slug</label>
                        <input type="text" id="slug" name="slug" class="form-control"
                            placeholder="Enter Updated slug" value="" required>
                        <x-form.error :name="'slug'" />
                    </div>
                    <div class="col-12">
                        <label for="content" class="form-label">content</label>
                        <textarea id="content" name="content" class="form-control" placeholder=" Enter blog content" required
                            rows="5"></textarea>
                        <x-form.error :name="'content'" />
                    </div>
                    <div class="col-6">
                        <label for="image" class="form-label">image</label>
                        <input type="file" id="image" name="image" class="form-control"
                            placeholder=" Enter blog image" required accept="image/*">
                        <x-form.error :name="'image'" />
                    </div>
                    @if (auth()->user()->hasRole('Admin'))
                        <div class="col-6">
                            <label class="form-label">Choose Author</label>
                            <select class="form-control" id="user_id" data-choices="" data-choices-search-false=""
                                data-choices-removeitem="" name="user_id">
                                @foreach ($authors as $author)
                                    <option value="{{ $author->id }}">
                                        {{ ucfirst($author->name) }}
                                    </option>
                                @endforeach
                            </select>
                            <x-form.error :name="'user_id'" />
                        </div>
                    @else
                        <input type="hidden" name="user_id" value="{{ auth()->user()->id }}">
                    @endif
                </x-form.modal>
                <x-form.modal :id="'importBlogs'" :title="'import Blog'" :action="route('blogs.import')" :method="'POST'">
                    <div class="col-6">
                        <label for="title" class="form-label">Blogs images</label>
                        <input type="file" id="images" name="images[]" class="form-control"
                            placeholder="Blog images" required accept="image/*" multiple>
                        <x-form.error :name="'images'" />
                        <div class="mt-5" style="font-size: 90%"><span class="text-danger">
                                please upload images of all data related to excel file items
                            </span>
                        </div>
                    </div>
                    <div class="col-6">
                        <label for="file" class="form-label">Blogs Excel File</label>
                        <input type="file" id="file" name="file" class="form-control"
                            placeholder="Enter Updated file" required accept=".xls,.xlsx,.xlsm,.ods,.ots">
                        <x-form.error :name="'file'" />
                        <div class="mt-5" style="font-size: 90%"><span class="text-danger">
                                {{ ucwords('please insert images names inside the excel file') }}
                                <a href="{{ asset('dashboard/test.xlsx') }}">{{ ucwords('Example of exel file') }}</a>
                            </span>
                        </div>
                    </div>
                </x-form.modal>
            </div>
        </div>
        <!-- container-fluid -->
    </div>
    <!-- End Page-content -->
@endsection
@section('js')
@endsection
