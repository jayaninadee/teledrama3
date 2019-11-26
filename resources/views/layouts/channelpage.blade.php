<?php
/**
 * Created by IntelliJ IDEA.
 * User: Jayani
 * Date: 11/5/2019
 * Time: 3:09 PM
 */
?>
@extends('layouts.app')

@section('content')

<div class="app-main__outer">
    <div class="app-main__inner">
        <div class="app-page-title">
            <div class="page-title-wrapper">
                <div class="page-title-heading">
                    <div class="page-title-icon">
                        <i class="fa fa-list-alt  icon-gradient bg-ripe-malin">
                        </i>
                    </div>
                    <div>Channel Category Section
                        <div class="page-title-subheading">Add Update Delete Channels.
                        </div>
                    </div>
                </div>
                <div class="page-title-actions">
                    <button type="button" data-toggle="tooltip" title="Example Tooltip" data-placement="bottom"
                            class="btn-shadow mr-3 btn btn-dark">
                        <i class="fa fa-star"></i>
                    </button>
                    <div class="d-inline-block dropdown">
                        <button type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"
                                class="btn-shadow dropdown-toggle btn btn-info">
                                        <span class="btn-icon-wrapper pr-2 opacity-7">
                                            <i class="fa fa-user-secret fa-w-20"></i>
                                        </span>
                            Sections
                        </button>
                        <div tabindex="-1" role="menu" aria-hidden="true"
                             class="dropdown-menu dropdown-menu-right">
                            <ul class="nav flex-column">
                                <li class="nav-item">
                                    <a class="nav-link">
                                        <i class="nav-link-icon lnr-inbox"></i>
                                        <span>Dashboard</span>
                                        <!--<div class="ml-auto badge badge-pill badge-secondary">86</div>-->
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link">
                                        <i class="nav-link-icon lnr-book"></i>
                                        <span>
                                                Channels
                                                    </span>
                                        <div class="ml-auto badge badge-pill badge-danger">10</div>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link">
                                        <i class="nav-link-icon lnr-picture"></i>
                                        <span>Teledrama</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link">
                                        <i class="nav-link-icon lnr-picture"></i>
                                        <span>Episodes</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <!---->

        <div class="tab-content">
            <div class="tab-pane tabs-animation fade show active" id="tab-content-0" role="tabpanel">
                <div class="col-md-12 main-card mb-3 card">
                    <div class="card-body"><h5 class="card-title">Add Channel</h5>
                        <form class="needs-validation" action="{{ route('channel') }}" method="post"
                              enctype="multipart/form-data">
                            {{ csrf_field() }}
                            <div class="form-row justify-content-center">
                                <div class="col-md-6">
                                    <div class="position-relative form-group">
                                        <label for="channelname">Channel Name</label>
                                        <input name="ch_Name" id="channelname"
                                               placeholder="Input Channel Name" type="text"
                                               class="form-control" required>
                                    </div>
                                </div>


                                <div class="col-md-6">
                                    <div class="position-relative form-group">
                                        <label for="channelvideoid">Channel Video ID</label>
                                        <input name="ch_videoID" id="channelvideoid"
                                               placeholder="Input Video ID" type="text"
                                               class="form-control" required>
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <label for="channelimage">Channel Image </label>
                                    <div class="form-group">
                                        <div class="input-group form-control" >

                                            <input id="logo-id" name="ch_Image" type="file"
                                                           class="attachment_upload" required>
                                        </div>
                                        <div class="main-img-preview">
                                            <img class="thumbnail img-preview" src="assets/imgs/upload.png"
                                                 title="Preview Logo">
                                        </div>
                                    </div>
                                </div>


                                <button type="submit" class="mt-2 btn btn-success" >Save Category</button>
                            </div>
                        </form>
                    </div>

                </div>


            </div>

        </div>

        <div class="app-main__inner">
            <div class="main-card mb-3 card">
                <div class="card-body">
                    <table style="width: 100%;" id="example"
                           class="table table-hover table-striped table-bordered">
                        <thead>
                        <tr>
                            <th>Channel Name</th>
                            <th>Video ID</th>
                            <th>Channel Image</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($channels as $channels)
                        <tr>
                            <td>{{$channels->ch_Name}}</td>
                            <td> {{$channels->ch_videoID}} </td>
                            <td><img height="42" width="42" src="images/{{$channels->ch_Image}}"></td>
                            <td style="text-align: center">
                                <a href="" title="Edit">
                                    <img width="30" src="assets/imgs/edit.png"> </a></td>
                            <td style="text-align: center">
                                <a href="" title="Delete">
                                    <img width="30" src="assets/imgs/delete.png">
                                </a>
                            </td>

                        </tr>
                        @endforeach
                        </tbody>
                        <tfoot>
                        <tr>
                            <th>Channel Name</th>
                            <th>Video ID</th>
                            <th>Channel Image</th>
                            <th></th>
                            <th></th>
                        </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
        </div>

    </div>
</div>

@endsection


