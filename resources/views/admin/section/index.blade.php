@extends('main.main')

@section('content')
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">SLİDER</h3>
                        </div>
                        <div class="card-body">
                            <form method="POST" action="{{ route('post.admin.section') }}">
                                @csrf
                                <input type="hidden" name="type" value="{{ $typeId }}">
                                <table id="sectionsTable" class="table table-bordered table-striped">
                                    <thead>
                                        <tr>
                                            <th>MADDE (TR)</th>
                                            <th>MADDE (EN)</th>
                                            <th></th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @if (count($sections) > 0)
                                            @foreach ($sections as $section)
                                                <tr>
                                                    <td>
                                                        <input type="text" name="tr_texts[]"
                                                            value="{{ $section->tr_text }}">
                                                    </td>
                                                    <td>
                                                        <input type="text" name="en_texts[]"
                                                            value="{{ $section->en_text }}">
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
                                        @endif
                                        <tr>
                                            <td>
                                                <input type="text" name="tr_texts[]">
                                            </td>
                                            <td>
                                                <input type="text" name="en_texts[]">
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
                var tbl = $('#sectionsTable tbody');
                tbl.append(
                    '<tr><td><input type="text" name[]="tr_texts"></td><td><input type="text" name[]="en_texts"></td><td><a class="delete" href="#"><i class="fa fa-trash"></i>SİL </a> </td><td><a class="add" style="margin-left: 20px" href="#"><i class="fa fa-pen"></i>EKLE</a></td></tr>'
                );
            }

            $('.delete').on('click', function() {
                var numItems = $('.delete').length;
                if (numItems < 2)
                    return;
                $(this).closest('tr').remove();
            });

            $('.add').on('click', function() {
                var tbl = $('#sectionsTable tbody');
                tbl.append(
                    '<tr><td><input type="text" name="tr_texts[]"></td><td><input type="text" name="en_texts[]"></td><td><a class="delete" href="#"><i class="fa fa-trash"></i>SİL </a> </td><td></td></tr>'
                );

                $('.delete').click(removeItem);
            });
        });
    </script>
@endsection
