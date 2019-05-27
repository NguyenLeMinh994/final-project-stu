@extends('admin.layouts.master')

@section('title', 'Home')

@section('css')
<link rel="stylesheet" href="asset/admin/js/vendor/colorpicker/css/bootstrap-colorpicker.min.css">
<link rel="stylesheet" href="asset/admin/js/vendor/touchspin/jquery.bootstrap-touchspin.min.css">
<link rel="stylesheet" href="asset/admin/js/vendor/datetimepicker/css/bootstrap-datetimepicker.min.css">
<link rel="stylesheet" href="asset/admin/js/vendor/chosen/chosen.css">
<link rel="stylesheet" href="asset/admin/js/vendor/summernote/summernote.css">
@endsection

@section('container')
<section id="content">

    <div class="page page-forms-common">

        <div class="pageheader">

            <h2>Common Elements <span>// You can place subtitle here</span></h2>

            <div class="page-bar">

                <ul class="page-breadcrumb">
                    <li>
                        <a href={{ route('user.home') }}><i class="fa fa-home"></i> Minovate</a>
                    </li>
                    <li>
                        <a href="#">Form Stuff</a>
                    </li>
                </ul>

            </div>

        </div>

        <!-- row -->
        <div class="row">
            <!-- col -->
            <div class="col-md-12">

                <!-- tile -->
                <section class="tile">

                    <!-- tile header -->
                    <div class="tile-header dvd dvd-btm">
                        <h1 class="custom-font"><strong>Form</strong> Elements</h1>
                        <ul class="controls">
                            <li class="dropdown">

                                <a role="button" tabindex="0" class="dropdown-toggle settings" data-toggle="dropdown">
                                    <i class="fa fa-cog"></i>
                                    <i class="fa fa-spinner fa-spin"></i>
                                </a>
                            </li>
                    </div>
                    <!-- /tile header -->

                    <!-- tile body -->
                    <div class="tile-body">

                        <form class="form-horizontal" role="form">

                            <div class="form-group">
                                <label for="input01" class="col-sm-2 control-label">Normal</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="input01">
                                </div>
                            </div>

                            <hr class="line-dashed line-full" />

                            <div class="form-group">
                                <label class="col-sm-2 control-label">Chosen</label>
                                <div class="col-sm-10">
                                    <select tabindex="3" class="chosen-select" style="width: 240px;">
                                        <optgroup label="Alaskan/Hawaiian Time Zone">
                                            <option value="AK">Alaska</option>
                                            <option value="HI">Hawaii</option>
                                        </optgroup>
                                        <optgroup label="Pacific Time Zone">
                                            <option value="CA">California</option>
                                            <option value="NV">Nevada</option>
                                            <option value="OR">Oregon</option>
                                            <option value="WA">Washington</option>
                                        </optgroup>
                                        <optgroup label="Mountain Time Zone">
                                            <option value="AZ">Arizona</option>
                                            <option value="CO">Colorado</option>
                                            <option value="ID">Idaho</option>
                                            <option value="MT">Montana</option>
                                            <option value="NE">Nebraska</option>
                                            <option value="NM">New Mexico</option>
                                            <option value="ND">North Dakota</option>
                                            <option value="UT">Utah</option>
                                            <option value="WY">Wyoming</option>
                                        </optgroup>
                                        <optgroup label="Central Time Zone">
                                            <option value="AL">Alabama</option>
                                            <option value="AR">Arkansas</option>
                                            <option value="IL">Illinois</option>
                                            <option value="IA">Iowa</option>
                                            <option value="KS">Kansas</option>
                                            <option value="KY">Kentucky</option>
                                            <option value="LA">Louisiana</option>
                                            <option value="MN">Minnesota</option>
                                            <option value="MS">Mississippi</option>
                                            <option value="MO">Missouri</option>
                                            <option value="OK">Oklahoma</option>
                                            <option value="SD">South Dakota</option>
                                            <option value="TX">Texas</option>
                                            <option value="TN">Tennessee</option>
                                            <option value="WI">Wisconsin</option>
                                        </optgroup>
                                        <optgroup label="Eastern Time Zone">
                                            <option value="CT">Connecticut</option>
                                            <option value="DE">Delaware</option>
                                            <option value="FL">Florida</option>
                                            <option value="GA">Georgia</option>
                                            <option value="IN">Indiana</option>
                                            <option value="ME">Maine</option>
                                            <option value="MD">Maryland</option>
                                            <option value="MA">Massachusetts</option>
                                            <option value="MI">Michigan</option>
                                            <option value="NH">New Hampshire</option>
                                            <option value="NJ">New Jersey</option>
                                            <option value="NY">New York</option>
                                            <option value="NC">North Carolina</option>
                                            <option value="OH">Ohio</option>
                                            <option value="PA">Pennsylvania</option>
                                            <option value="RI">Rhode Island</option>
                                            <option value="SC">South Carolina</option>
                                            <option value="VT">Vermont</option>
                                            <option value="VA">Virginia</option>
                                            <option value="WV">West Virginia</option>
                                        </optgroup>
                                    </select>
                                </div>
                            </div>

                            <hr class="line-dashed line-full" />

                            <div class="form-group">
                                <label class="col-sm-2 control-label">File Input</label>
                                <div class="col-sm-10">
                                    <input type="file" class="filestyle" data-buttonText="Find file"
                                        data-iconName="fa fa-inbox">
                                </div>
                            </div>



                            <div class="form-group">
                                <div class="col-sm-4 col-sm-offset-2">
                                    <button type="reset" class="btn btn-lightred">Cancel</button>
                                    <button type="submit" class="btn btn-default">Save changes</button>
                                </div>
                            </div>

                        </form>

                    </div>
                    <!-- /tile body -->

                </section>
                <!-- /tile -->



            </div>
            <!-- /col -->
        </div>
        <!-- /row -->

    </div>

</section>
@endsection


@section('js')
<script src="asset/admin/js/vendor/slider/bootstrap-slider.min.js"></script>

<script src="asset/admin/js/vendor/colorpicker/js/bootstrap-colorpicker.min.js"></script>

<script src="asset/admin/js/vendor/touchspin/jquery.bootstrap-touchspin.min.js"></script>

<script src="asset/admin/js/vendor/daterangepicker/moment.min.js"></script>

<script src="asset/admin/js/vendor/datetimepicker/js/bootstrap-datetimepicker.min.js"></script>

<script src="asset/admin/js/vendor/chosen/chosen.jquery.min.js"></script>

<script src="asset/admin/js/vendor/filestyle/bootstrap-filestyle.min.js"></script>

<script src="asset/admin/js/vendor/summernote/summernote.min.js"></script>
@endsection