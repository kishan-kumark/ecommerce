@extends('admin-panal.layout.app')

@section('content')
    <div class="right_col" role="main">
        <div class="">
            <div class="page-title">
                <div class="title_left">
                    <h3>Form Elements</h3>
                </div>

                <div class="title_right">
                    <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Search for...">
                            <span class="input-group-btn">
                                <button class="btn btn-default" type="button">Go!</button>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="clearfix"></div>
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="x_panel">
                        <div class="x_title">
                            <h2>Form Design </h2>

                            <div class="clearfix"></div>
                        </div>
                        <div class="x_content">
                            <br />
                            <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">

                                <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="title">Title <span
                                            class="required">*</span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input type="text" name="title" id="title" required="required"
                                            class="form-control col-md-7 col-xs-12">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="price">Price <span
                                            class="required">*</span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input type="text" id="price" name="price" required="required"
                                            class="form-control col-md-7 col-xs-12">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="discount_price" class="control-label col-md-3 col-sm-3 col-xs-12">Discount
                                        Price</label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input id="discount_price" class="form-control col-md-7 col-xs-12" type="text"
                                            name="discount_price">
                                    </div>

                                </div>

                                <div class="form-group">
                                    <label for="image" class="control-label col-md-3 col-sm-3 col-xs-12">Image</label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input id="image" class="form-control col-md-7 col-xs-12" type="file"
                                            name="image">
                                    </div>

                                </div>
                                <div class="form-group">
                                    <label for="category" class="control-label col-md-3 col-sm-3 col-xs-12">Category</label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        {{-- <input id="category" class="form-control col-md-7 col-xs-12" type="text" name="category"> --}}
                                        <select name="category" id="category" class="form-control col-md-7 col-xs-12">
                                            <option value="">Select Category</option>
                                            @foreach ($categories as $category)
                                                <option style="display: none;" value="{{ $category->id }}">{{ $category->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>

                                </div>

                                <div class="form-group">
                                    <label for="subcategory"
                                        class="control-label col-md-3 col-sm-3 col-xs-12">SubCategory</label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <select name="subcategory" id="subcategory" class="form-control col-md-7 col-xs-12">
                                            <option value="">Select SubCategory</option>
                                            @foreach ($subCategories as $subCategory)
                                                <option style="display: none;" value="{{ $subCategory->id }}">{{ $subCategory->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>

                                </div>

                                <div class="form-group">
                                    <label for="description"
                                        class="control-label col-md-3 col-sm-3 col-xs-12">Description</label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        {{-- <input id="description" class="form-control col-md-7 col-xs-12" type="text" name="description"> --}}
                                        <textarea id="description" name="description" class="form-control col-md-7 col-xs-12"></textarea>
                                    </div>

                                </div>





                                <div class="ln_solid"></div>
                                <div class="form-group">
                                    <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                                        <button class="btn btn-primary" type="button">Cancel</button>
                                        <button class="btn btn-primary" type="reset">Reset</button>
                                        <button type="submit" class="btn btn-success">Submit</button>
                                    </div>
                                </div>

                            </form>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection
@push('script')



@endpush
