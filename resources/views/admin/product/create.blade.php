@extends('master.admin')
@section('title', 'Add')
@section('main')
<style>
  .form-group{
    margin-top: 20px !important;
  }
  
  label{
    margin-bottom: 5px;
  }
</style>


<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h3> Create new a product </h3>

  </section>

  <!-- Main content -->
  <section class="content">

    <!-- Default box -->
    <div class="box">
      <div class="box-body">
                          

  <div class="row">
    <form action="{{route('product.store')}}" method="POST" enctype="multipart/form-data" >
      @csrf
          
          <div class="col-md-9">
                <div class="form-group">
                    <label for="">Product name</label>
                    <input type="text" name="name" class="form-control" id="" placeholder="Input field" required>
                </div>

                <div class="form-group">
                    <label for="">Product Description</label>
                    <textarea name="description" class="form-control description" placeholder="Product content" required></textarea>
                </div>
                </div>

          </div>
    
          <div class="col-md-3">
            
            <div class="form-group">
                <label for="">Product price</label>
                <input type="text" name="price" class="form-control" id="" placeholder="Input field" required>
            </div>


            <div class="form-group">
                <label for="">Product Status</label>

                <div class="radio">
                    <label>
                        <input type="radio" name="status" value="1" />
                        Publish
                    </label>
                </div>

                <div class="radio">
                    <label>
                        <input type="radio" name="status" value="0" />
                        Hidden
                    </label>
                </div>
            </div>

            <div class="form-group">
                <label for="">Product Image</label>
                <input type="file" name="img" class="form-control" onchange="showImage(this)" required>
                <img src="" id="show_img" alt="" width="100%">
            </div>

            <button type="submit" class="btn btn-primary"><i class="fa fa-save"></i> Save</button>
          </div>
    </form>
  </div>
</div>
@stop()