@extends('admin.master')

@section('body')

    <!-- App hero header starts -->
    <div class="app-hero-header d-flex align-items-center">
        <!-- Breadcrumb start -->
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <i class="bi bi-house lh-1 pe-3 me-3 border-end border-dark"></i>
                <a href="index.html" class="text-decoration-none">Category</a>
            </li>
            <li class="breadcrumb-item text-secondary" aria-current="page">
                Create Category
            </li>
        </ol>
        <!-- Breadcrumb end -->
    </div>
    <!-- App Hero header ends -->

    <div class="row">
        <div class="col-md-12">
            <div class="card m-4">
                <div class="card-header border-bottom">
                    <h3 class="card-title">Create Category Form</h3>
                </div>
                <div class="card-body">
                    <p class="text-success">{{session('message')}}</p>
                    {{-- Form Start --}}
                    <form class="form-horizontal" action="{{route('category.store')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row mb-4">
                            <label for="name" class="col-md-3 form-label">Category Name</label>
                            <div class="col-md-9">
                                <input class="form-control" name="name" id="name" placeholder="Enter category name" type="text">
                            </div>
                        </div>
                        <div class="row mb-4">
                            <label for="description" class="col-md-3 form-label">Category Description</label>
                            <div class="col-md-9">
                                <textarea class="form-control" name="description" id="description" placeholder="Text something here.."></textarea>
                            </div>
                        </div>
                        <div class="row mb-4">
                            <label for="image" class="col-md-3 form-label">Category Image</label>
                            <div class="col-md-9">
                                <input class="form-control-file" name="image" id="image" type="file">
                            </div>
                        </div>
                        <div class="row mb-4">
                            <label class="col-md-3 form-label">Publication Staus</label>
                            <div class="col-md-9">
                                <label><input  name="status"  type="radio" checked value="1"> Published</label>
                                <label><input  name="status"  type="radio" value="0"> Unublished</label>
                            </div>
                        </div>
                        <button class="btn btn-primary" type="submit">Create New Category</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
