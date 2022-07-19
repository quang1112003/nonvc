@extends("layout")
@section("title")
    <h1>Add Product</h1>
@endsection
@section("main")
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>ADD PRODUCT</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">General Form</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>
    <div class="col-md-12">
        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title">ADD SCORE</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form role="form">
                <div class="card-body">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Score ID</label>
                        <input type="text" class="form-control" id="exampleID" placeholder="Enter Score ID">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Mark</label>
                        <input type="text" class="form-control" id="exampleName" placeholder="Enter Mark">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Result</label>
                        <input type="text" class="form-control" id="examplePrice" placeholder="Enter Result">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Student ID</label>
                        <input type="text" class="form-control" id="exampleUnit" placeholder="Enter Student ID">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Subject ID</label>
                        <input type="text" class="form-control" id="exampleDescription" placeholder="Enter Subject ID">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputFile">Image</label>
                        <div class="input-group">
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" id="exampleImage">
                                <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                            </div>
                            <div class="input-group-append">
                                <span class="input-group-text" id="">Upload</span>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Add Product</button>
                </div>
            </form>
        </div>
    </div>
@endsection
