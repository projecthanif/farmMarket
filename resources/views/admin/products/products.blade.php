<?php
use Illuminate\Support\Facades\Session;
?>
@extends('layouts.admin_layout.admin_layout')
@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Catalogues</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Products</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        @if (session::has('Success_message'))
                            <div class="alert alert-success alert-dismissible fade show" role="alert"
                                style="margin-top: 10px;">
                                {{ Session::get('Success_message') }}
                                <button type="button" class="close" data-dismiss="alert" aria-label="close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                        @endif
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">Products</h3>
                                <a class="btn btn-success float-right text-white"
                                    href="{{ url('admin/add-edit-product') }}">Add Product</a>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <table id="products" class="table table-bordered table-striped">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>PRODUCT NAME</th>
                                            <th>PRODUCT IMAGE</th>
                                            <th>CATEGORY</th>
                                            <th>STATUS</th>
                                            <th>ACTION</th>

                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            @foreach ($products as $index => $product)
                                                <td>{{ $index + 1 }}</td>
                                                <td>{{ $product->product_name }}</td>
                                                <td>
                                                    <?php $product_image_path = 'images/product_images/small/' . $product->main_image; ?>
                                                    @if (!empty($product->main_image))
                                                        <img src="{{ asset('images/product_images/small/' . $product->main_image) }}"
                                                            width="100px" height="100px">
                                                    @else
                                                        <img src="{{ asset('images/product_images/small/no_image.png') }}"
                                                            width="100px" height="100px">
                                                    @endif
                                                </td>
                                                <td>{{ $product->name }}</td>
                                                <td>
                                                    @if ($product->status == 1)
                                                        <a class="updateProductStatus" id="product-{{ $product->id }}"
                                                            product_id="{{ $product->id }}"
                                                            href="javascript:void(0)">Active</a>
                                                    @else
                                                        <a class="updateProductStatus" id="product-{{ $product->id }}"
                                                            product_id="{{ $product->id }}"
                                                            href="javascript:void(0)">Inactive</a>
                                                    @endif
                                                </td>
                                                <td>
                                                    <a title="Add images"
                                                        href=" {{ urL('admin/add-images/' . $product->id) }} "><i
                                                            class="fa fa-plus-circle"></i></a>
                                                    <a title="Edit product"
                                                        href=" {{ urL('admin/add-edit-product/' . $product->id) }} "><i
                                                            class="fa fa-edit"></i></a>
                                                    <a title="Delete product" href='javascript:void(0)'
                                                        class="confirmDelete" record="product"
                                                        recordid="{{ $product->id }}" <?php /*  href=" {{ urL('admin/delete-category/'.$product->id)}} " */ ?>><i
                                                            class="fa fa-trash"></i></a>
                                                </td>
                                        </tr>
                                        @endforeach

                                    </tbody>

                                </table>
                            </div>
                            <!-- /.card-body -->
                        </div>
                        <!-- /.card -->
                    </div>
                    <!-- /.col -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>
@endsection
