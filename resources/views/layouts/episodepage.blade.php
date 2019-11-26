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
                    <div>Episode Category Section
                        <div class="page-title-subheading">Add Update Delete Episode.
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
                    <div class="card-body"><h5 class="card-title">Add Episode</h5>
                        <form class="needs-validation" action="{{ route('episode') }}" method="post"
                              enctype="multipart/form-data">
                            {{ csrf_field() }}
                            <div class="form-row justify-content-center">
                                <div class="col-md-6">
                                    <div class="position-relative form-group">
                                        @if($arry['teledramas'] !=null)
                                        <label for="teledrama_content">Select Teledrama</label>
                                        <select class="custom-select" name="te_Id">

                                            @foreach($arry['teledramas'] as $teledramas)

                                            <option value="{{$teledramas->id}}"> {{$teledramas->te_Name}}</option>
                                            @endforeach
                                        </select>
                                        @endif


                                    </div>
                                </div>


                                <div class="col-md-6">
                                    <div class="position-relative form-group">
                                        <label for="validationTooltip04">Video ID</label>
                                        <input type="text" class="form-control" id="ep_videoID" name="ep_videoID"
                                               placeholder="Input Video ID" >

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
                            <th scope="col">Video ID</th>
                            <th scope="col">Episode Title</th>

                            <th></th>
                            <th></th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($arry['episodes'] as $episodes)
                        <tr>
                            <td> {{$episodes->ep_videoID}}</td>
                            <td> {{$episodes->ep_Title}}</td>

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
                            <th scope="col">Video ID</th>
                            <th scope="col">Episode Title</th>

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


