@extends('admin.admin_master')
@section('admin')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

    <div class="content">
        <!-- Start Content-->
        <div class="container-xxl">
            <div class="py-3 d-flex align-items-sm-center flex-sm-row flex-column">
                <div class="flex-grow-1">
                    <h4 class="fs-18 fw-semibold m-0">Edit Review</h4>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="text-muted bg-white">
                                <div class="tab-pane pt-4 active show" id="profile_setting" role="tabpanel"
                                     aria-labelledby="setting_tab">
                                    <div class="row">

                                        <div class="row">
                                            <div class="col-lg-12 col-xl-12">
                                                <div class="card border mb-0">
                                                    <form action="{{ route('update.review') }}" method="POST"
                                                          enctype="multipart/form-data">
                                                        @csrf
                                                        <input type="hidden" name="id" value="{{ $review->id }}">
                                                        <div class="card-body">
                                                            <div class="form-group mb-3 row">
                                                                <label class="form-label">Name</label>
                                                                <div class="col-lg-12 col-xl-12">
                                                                    <input class="form-control" name="name"
                                                                           type="text" value="{{ $review->name }}">
                                                                </div>
                                                            </div>
                                                            <div class="form-group mb-3 row">
                                                                <label class="form-label">Position</label>
                                                                <div class="col-lg-12 col-xl-12">
                                                                    <input class="form-control" name="position"
                                                                           type="text" value="{{ $review->position }}">
                                                                </div>
                                                            </div>
                                                            <div class="form-group mb-3 row">
                                                                <label class="form-label">Messages</label>
                                                                <div class="col-lg-12 col-xl-12">
                                                                    <textarea class="form-control" rows="5"
                                                                              name="message">{{ $review->message }}</textarea>
                                                                </div>
                                                            </div>

                                                            <div class="form-group mb-3 row">
                                                                <label class="form-label">Photo</label>
                                                                <div class="col-lg-12 col-xl-12">
                                                                    <input id="image" class="form-control"
                                                                           name="image" type="file">
                                                                </div>
                                                            </div>

                                                            <div class="form-group mb-3 row">
                                                                <label class="form-label"></label>
                                                                <div class="col-lg-12 col-xl-12">
                                                                    <img id="showImage"
                                                                         src="{{ asset($review->image) }}"
                                                                         class="rounded-circle avatar-xxl img-thumbnail float-start"
                                                                         alt="image profile">
                                                                </div>
                                                            </div>

                                                            <div class="form-group row">
                                                                <div class="col-lg-12 col-xl-12">
                                                                    <button type="submit" class="btn btn-primary">Edit
                                                                        Review
                                                                    </button>
                                                                </div>
                                                            </div>

                                                        </div><!--end card-body-->
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div> <!-- end education -->

                            </div> <!-- Tab panes -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script type="text/javascript">
        $(document).ready(function () {
            $('#image').change(function (e) {
                var reader = new FileReader();
                reader.onload = function (e) {
                    $('#showImage').attr('src', e.target.result);
                }
                reader.readAsDataURL(e.target.files['0']);
            })
        })
    </script>
@endsection
