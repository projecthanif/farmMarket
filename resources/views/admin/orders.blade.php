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
                            <li class="breadcrumb-item active">Orders</li>
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
                                <h3 class="card-title">Orders</h3>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <table id="categories" class="table table-bordered table-striped">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>ORDER ID</th>
                                            <th>IMAGE</th>
                                            <th>USER DETAILS</th>
                                            <th>ADDRESS</th>
                                            <th>PRODUCT</th>
                                            <th>PAYMENT</th>
                                            <th>TOTAL</th>
                                            <th>STATUS</th>
                                            <th>ACTION</th>

                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($orders as $index => $order)
                                            {{-- {{ dd($orders) }} --}}
                                            <tr>
                                                <td>{{ $index + 1 }}</td>
                                                <td>#{{ $order->id }}</td>
                                                <td>
                                                    @if (!empty($order->product->main_image))
                                                        <img src="{{ asset('images/product_images/small/' . $order->product->main_image) }}"
                                                            width="60px" height="60px">
                                                    @else
                                                        <img src="{{ asset('images/product_images/small/no_image.png') }}"
                                                            width="60px" height="60px">
                                                    @endif
                                                </td>
                                                <td>
                                                    <p>
                                                        {{ $order->user->addresses->fullname ?? 'Nil' }}
                                                    </p>
                                                    <p>
                                                        {{ $order->user->addresses->phone ?? 'Nil' }}
                                                    </p>
                                                </td>
                                                <td>{{ ($order->user->addresses->address ?? 'Nil') . ', ' . ($order->user->addresses->city ?? 'Nil') . ', ' . ($order->user->addresses->state ?? 'Nil') }}
                                                </td>
                                                <td>{{ $order->product->product_name ?? 'No Product Name' }}</td>
                                                <td>
                                                    @if ($order->payment_status == 'paid')
                                                        <a class="updateOrderStatus" id="order-{{ $order->id }}"
                                                            order_id="{{ $order->id }}" href="javascript:void(0)">
                                                            paid</a>
                                                    @else
                                                        <a class="updateOrderStatus" id="order-{{ $order->id }}"
                                                            order_id="{{ $order->id }}" href="javascript:void(0)">
                                                            unpaid</a>
                                                    @endif
                                                </td>
                                                <td>₦{{ $order->qty * ($order->product->price ?? '1') }}
                                                    ({{ $order->qty }}
                                                    Item{{ $order->qty > 1 ? 's' : '' }})
                                                </td>
                                                <td>{{ $order->order_status }}</td>
                                                <td>
                                                    <form method="post"
                                                        action="{{ url('/admin/update-order-status/' . $order->id) }}">
                                                        @csrf
                                                        <select class="form-control" name="order_status">
                                                            <option value="1"
                                                                @if ($order->track_order == '1') selected @endif>Order
                                                                confirmed</option>
                                                            <option value="2"
                                                                @if ($order->track_order == '2') selected @endif>Driver
                                                                assigned</option>
                                                            <option value="3"
                                                                @if ($order->track_order == '3') selected @endif>In transit
                                                            </option>
                                                            <option value="4"
                                                                @if ($order->track_order == '4') selected @endif>Completed
                                                            </option>
                                                        </select>
                                                        <button type="submit"
                                                            class="btn btn-primary w-100 mt-2">Update</button>
                                                    </form>
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
