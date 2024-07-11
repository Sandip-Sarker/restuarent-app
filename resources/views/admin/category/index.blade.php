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

    <!-- Row -->
       <div class="row row-sm m-4">
           <div class="col-lg-12">
               <div class="card">
                   <div class="card-header border-bottom">
                       <h3 class="card-title">All Category Info</h3>
                   </div>
                   <div class="card-body">
                       <p class="text-success">{{session('message')}}</p>
                       <div class="table-responsive">
                           <table class="table table-bordered text-nowrap border-bottom" id="basic-datatable">
                               <thead>
                               <tr>
                                   <th class="wd-15p border-bottom-0">SL No</th>
                                   <th class="wd-15p border-bottom-0">Name</th>
                                   <th class="wd-20p border-bottom-0">Description</th>
                                   <th class="wd-15p border-bottom-0">Image</th>
                                   <th class="wd-10p border-bottom-0">Status</th>
                                   <th class="wd-25p border-bottom-0">Action</th>
                               </tr>
                               </thead>
                               <tbody>
                               @foreach($categories as $category)
                               <tr>
                                   <td>{{$loop->iteration}}</td>
                                   <td>{{$category->name}}</td>
                                   <td>{{$category->description}}</td>
                                   <td><img src="{{asset($category->image)}}" alt="" height="50"></td>
                                   <td>{{$category->status == 1 ? 'Published' : 'Unpublished'}}</td>
                                   <td>
                                       <a href="{{route('category.edit', $category->id)}}" class="btn btn-success btn-sm" title="Edit">
                                           <i class="bi bi-pencil"></i>
                                       </a>

                                       <a href="{{route('category.destroy', $category->id)}}" class="btn btn-danger btn-sm" title="Delete">
                                           <i class="bi bi-trash"></i>
                                       </a>
                                   </td>
                               </tr>
                               @endforeach
                               </tbody>
                           </table>
                       </div>
                   </div>
               </div>
           </div>
       </div>
    <!-- End Row -->


@endsection
