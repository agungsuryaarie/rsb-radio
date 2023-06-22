@extends('admin.layouts.app')
@section('content')
    <section class="section">
        <x-breadcrumb menu="{{ $menu }}"></x-breadcrumb>
        <div class="row">
            <div class="col-12 col-md-12 col-lg-5">
                <x-datatable link="javascript:void(0)">
                    <th class="text-center"></th>
                    <th>Kategori</th>
                    <th class="text-center">Action</th>
                </x-datatable>
            </div>
            <div class="col-12 col-md-12 col-lg-7">
                <div class="card">
                    <div class="card-header">
                        <h4>Write Your Post</h4>
                    </div>
                    <form action="{{ route('post.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" name="post_id" id="post_id" value="{{ $posts->id ?? '' }}">
                        <div class="card-body">
                            <x-input type="text" name="title" label="Judul">
                            </x-input>
                            <div class="form-group">
                                <label>Kategori</label>
                                <select class="form-control" id="categories_id" name="categories_id">
                                </select>
                            </div>
                            <x-textarea name="content" label="Content">{{ $posts->content ?? '' }}</x-textarea>
                            <div class="form-group">
                                <div class="animated bounce">
                                    <label>Picture</label>
                                    <div class="text-center" id="pleasewait"></div>
                                    <div id='img_container'>
                                        <img id="preview" src="{{ asset('preview-img.jpg') }}" alt="your image" />
                                    </div>
                                    <div class="input-group">
                                        <div class="custom-file">
                                            <input type="file" name="image" id="inputGroupFile01"
                                                class="imgInp custom-file-input" aria-describedby="inputGroupFileAddon01">
                                            <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <x-dropdown name="status" label="Status">
                                <option value="1" {{ isset($posts) && '1' == $posts->status ? 'selected' : '' }}>
                                    Publish</option>
                                <option value="2" {{ isset($posts) && '2' == $posts->status ? 'selected' : '' }}>
                                    Draft</option>
                            </x-dropdown>
                            <div class="form-group row mb-4">
                                <div class="col-sm-12 col-md-7">
                                    <button class="btn btn-primary">Create Post</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <x-ajaxModel size="">
        <x-input type="text" name="name" label="Nama"></x-input>
    </x-ajaxModel>

    <x-modalDelete></x-modalDelete>
@endsection

@section('script')
    <script>
        $(function() {
            $.ajaxSetup({
                headers: {
                    "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
                },
            });

            // Datatable
            var myTable = DataTable("{{ route('category.index') }}", [{
                    data: "DT_RowIndex",
                    name: "DT_RowIndex",
                },
                {
                    data: "name",
                    name: "name",
                },
                {
                    data: "action",
                    name: "action",
                    orderable: false,
                    searchable: false,
                }
            ]);

            // Create
            var createHeading = "Tambah Kategori";
            createModel(createHeading)

            // Edit
            var editUrl = "{{ route('category.index') }}";
            var editHeading = "Edit Kategori";
            var field = ['name', 'email', 'role', 'broadcaster']; // disesuaikan dengan data yang ingin di tampilkan
            editModel(editUrl, editHeading, field)

            // Save
            saveBtn("{{ route('category.store') }}", myTable);

            $(document).ready(function() {
                var csrfToken = $('meta[name="csrf-token"]').attr('content');
                $.ajax({
                    url: "{{ url('admin/category/get-category') }}",
                    type: "GET",
                    dataType: 'json',
                    data: {
                        _token: csrfToken,
                    },
                    success: function(data) {
                        $('#categories_id').html(
                            '<option value="">:::Pilih Kategori:::</option>');
                        $.each(data, function(key, value) {
                            $("#categories_id").append('<option value="' + value
                                .id + '">' + value.name +
                                '</option>');
                        });
                        $('#categories_id option[value=' +
                            data.id + ']').prop(
                            'selected', true);
                    }
                });
            });

            $("#saveBtn").click(function(e) {
                var csrfToken = $('meta[name="csrf-token"]').attr('content');
                $.ajax({
                    url: "{{ url('admin/category/get-category') }}",
                    type: "GET",
                    dataType: 'json',
                    data: {
                        _token: csrfToken,
                    },
                    success: function(data) {
                        $('#categories_id').html(
                            '<option value="">:::Pilih Kategori:::</option>');
                        console.log(data);
                        $.each(data, function(key, value) {
                            $("#categories_id").append('<option value="' + value
                                .id + '">' + value.name +
                                '</option>');
                        });
                        $('#categories_id option[value=' +
                            data.id + ']').prop(
                            'selected', true);
                    }
                });
            });


            $("body").on("click", ".delete", function() {
                var deleteId = $(this).data("id");
                $("#modelHeadingHps").html("Hapus");
                $("#fitur").html("Kategori");
                $("#ajaxModelHps").modal("show");
                $.get("{{ route('category.index') }}/" + deleteId + "/edit", function(data) {
                    $("#field").html(data.name);
                });
                $("#hapusBtn").click(function(e) {
                    e.preventDefault();
                    var csrfToken = $('meta[name="csrf-token"]').attr('content');

                    $(this).html(
                        "<span class='spinner-border spinner-border-sm'></span><span class='visually-hidden'><i> menghapus...</i></span>"
                    );
                    $.ajax({
                        type: "DELETE",
                        url: "{{ route('category.store') }}/" + deleteId,
                        data: {
                            _token: csrfToken,
                        },
                        success: function(data) {
                            if (data.errors) {
                                $('.alert-danger').html('');
                                $.each(data.errors, function(key, value) {
                                    $('.alert-danger').show();
                                    $('.alert-danger').append('<strong><li>' +
                                        value + '</li></strong>');
                                    $(".alert-danger").fadeOut(5000);
                                    $("#hapusBtn").html(
                                        "<i class='fa fa-trash'></i>Hapus");
                                });
                            } else {
                                if (myTable) {
                                    myTable.draw();
                                }
                                alertToastr(data.success);
                                var csrfToken = $('meta[name="csrf-token"]').attr(
                                    'content');
                                $.ajax({
                                    url: "{{ url('admin/category/get-category') }}",
                                    type: "GET",
                                    dataType: 'json',
                                    data: {
                                        _token: csrfToken,
                                    },
                                    success: function(data) {
                                        $('#categories_id').html(
                                            '<option value="">:::Pilih Kategori:::</option>'
                                        );
                                        console.log(data);
                                        $.each(data, function(key, value) {
                                            $("#categories_id")
                                                .append(
                                                    '<option value="' +
                                                    value
                                                    .id + '">' +
                                                    value.name +
                                                    '</option>');
                                        });
                                        $('#categories_id option[value=' +
                                            data.id + ']').prop(
                                            'selected', true);
                                    }
                                });
                                $("#hapusBtn").html("<i class='fa fa-trash'></i>Hapus");
                                $('#ajaxModelHps').modal('hide');
                            }
                        },
                    });
                });
            });


            $("#inputGroupFile01").change(function(event) {
                RecurFadeIn();
                readURL(this);
            });
            $("#inputGroupFile01").on('click', function(event) {
                RecurFadeIn();
            });

            function readURL(input) {
                if (input.files && input.files[0]) {
                    var reader = new FileReader();
                    var filename = $("#inputGroupFile01").val();
                    filename = filename.substring(filename.lastIndexOf('\\') + 1);
                    reader.onload = function(e) {
                        $('#preview').attr('src', e.target.result);
                        $('#preview').hide();
                        $('#preview').fadeIn(500);
                        $('.custom-file-label').text(filename);
                    }
                    reader.readAsDataURL(input.files[0]);
                }
                $("#pleasewait").removeClass("loading").hide();
            }

            function RecurFadeIn() {
                FadeInAlert("Wait for it...");
            }

            function FadeInAlert(text) {
                $("#pleasewait").show();
                $("#pleasewait").text(text).addClass("loading");
            }

            var postId = $("#post_id").val();
            $.get("{{ route('post.index') }}" + "/" + postId, function(data) {
                $("#title").val(data.title);
                $("#content").val(data.content);
                $("#categories_id").val(data.categories_id);

            });

        });
    </script>
@endsection
