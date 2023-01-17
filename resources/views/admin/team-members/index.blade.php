@extends('main.main')

@section('content')
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">EKİP ÜYELERİ</h3>
                        </div>
                        <div class="card-body">
                            <form method="POST" action="{{ route('post.admin.team-members') }}" enctype="multipart/form-data">
                                @csrf
                                <input type="hidden" name="id" value="{{ $id ?? '' }}">
                                <table id="membersTable" class="table table-bordered table-striped">
                                    <thead>
                                        <tr>
                                            <th>FOTOĞRAF</th>
                                            <th>ADI SOYADI</th>
                                            <th>GÖREVİ (EN)</th>
                                            <th>GÖREVİ (TR)</th>
                                            <th>FACEBOOK</th>
                                            <th>TWITTER</th>
                                            <th>LINKEDIN</th>
                                            <th></th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @if (count($members) > 0)
                                            @foreach ($members as $member)
                                                <tr>
                                                    <td>
                                                        <label>
                                                            <img src="/{{ $member->path }}" style="border: 1px solid gray;"
                                                               width="128" height="128" />
                                                            <input type="file" name="path[]" multiple />
                                                        </label>
                                                    </td>
                                                    <td>
                                                        <input type="text" name="name_surname[]"
                                                            value={{ $member->name_surname}}>
                                                    </td>
                                                    <td>
                                                        <input type="text" name="en_task[]"
                                                            value={{ $member->en_task}}>
                                                    </td>
                                                    <td>
                                                        <input type="text" name="tr_task[]"
                                                            value={{ $member->tr_task}}>
                                                    </td>
                                                    <td>
                                                        <input type="text" name="facebook[]"
                                                            value={{ $member->facebook}}>
                                                    </td>
                                                    <td>
                                                        <input type="text" name="twitter[]"
                                                            value={{ $member->twitter}}>
                                                    </td>
                                                    <td>
                                                        <input type="text" name="linkedin[]"
                                                            value={{ $member->linkedin}}>
                                                    </td>
                                                    <td>
                                                        <a class="delete" href="#">
                                                            <i class="fa fa-trash"></i>SİL
                                                        </a>
                                                    </td>
                                                    <td>
                                                        <a class="add" style="margin-left: 20px" href="#">
                                                            <i class="fa fa-pen"></i>EKLE
                                                        </a>
                                                    </td>
                                                </tr>
                                            @endforeach
                                            @else
                                        <tr>
                                            <td>
                                                <label>
                                                    <img src="/" style="border: 1px solid gray;" width="128" height="128" multiple />
                                                    <input type="file" name="path[]" />
                                                </label>
                                            </td>
                                            <td>
                                                <input type="text" name="name_surname[]">
                                            </td>
                                            <td>
                                                <input type="text" name="en_task[]">
                                            </td>
                                            <td>
                                                <input type="text" name="tr_task[]">
                                            </td>
                                            <td>
                                                <input type="text" name="facebook[]">
                                            </td>
                                            <td>
                                                <input type="text" name="twitter[]">
                                            </td>
                                            <td>
                                                <input type="text" name="linkedin[]">
                                            </td>
                                            <td>
                                                <a class="delete" href="#">
                                                    <i class="fa fa-trash"></i>SİL
                                                </a>
                                            </td>
                                            <td>
                                                <a class="add" style="margin-left: 20px" href="#">
                                                    <i class="fa fa-pen"></i>EKLE
                                                </a>
                                            </td>
                                        </tr>
                                        @endif
                                    </tbody>
                                </table>

                                <div class="float-right mt-3">
                                    <button type="submit" class="btn btn-primary">Kaydet</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('js')
    <script src="/plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>

    <script>
        $(function() {
            function removeItem() {
                $(this).closest('tr').remove();
            }

            function addItem() {
                var tbl = $('#membersTable tbody');
                tbl.append(
                    '<tr><td><label><img src="/img/tms/vehicle/camera.png" style="border: 1px solid gray;" id="img1" width="100" height="100" /><input type="file" name[]="path" /></label></td><td><input type="text" name[]="name_surname"></td><td><input type="text" name[]="en_task"></td><td><td><input type="text" name[]="tr_task"></td><td><input type="text" name[]="facebook"></td><td><input type="text" name[]="twitter"></td><td><input type="text" name[]="linkedin"></td><a class="delete" href="#"><i class="fa fa-trash"></i>SİL </a> </><td><a class="add" style="margin-left: 20px" href="#"><i class="fa fa-pen"></i>EKLE</a></td></tr>'
                );
            }

            $('.delete').on('click', function() {
                var numItems = $('.delete').length;
                if (numItems < 2)
                    return;
                $(this).closest('tr').remove();
            });

            $('.add').on('click', function() {
                var tbl = $('#membersTable tbody');
                tbl.append(
                    '<tr><td><label><img src="/img/tms/vehicle/camera.png" style="border: 1px solid gray;" id="img1" width="100" height="100" /><input type="file" name="path[]" /></label></td><td><input type="text" name="name_surname[]"></td><td><input type="text" name="en_task[]"></td><td><input type="text" name="tr_task[]"><td><input type="text" name="facebook[]"></td></td><td><input type="text" name="twitter[]"></td><td><input type="text" name="linkedin[]"></td><td><a class="delete" href="#"><i class="fa fa-trash"></i>SİL </a> </td><td></td></tr>'
                );

                $('.delete').click(removeItem);
            });
        });
    </script>
@endsection
