@extends('main.main')

@section('content')
<!-- Main content -->
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-10 ml-auto">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Bize Ulaşın Mesajları</h3>
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>Mesaj Sahibinin Adı ve Soyadı</th>
                                    <th>Email Adresi</th>
                                    <th>Telefon Numarası</th>
                                    <th>Konu</th>
                                    <th>Mesaj</th>
                                </tr>
                            </thead>
                            <tbody>
                                @if ($contacts != null)
                                @foreach ($contacts as $contact)
                                <tr>
                                    <td>{{ $contact->name_surname }}</td>
                                    <td>{{ $contact->email }}</td>
                                    <td>{{ $contact->phone }}</td>
                                    <td>{{ $contact->info }}</td>
                                    <td>{{ $contact->message }}</td>
                                    <td>
                                        <a href="{{ route('get.admin.contact.delete' ,  ['id' => $contact->id]) }}">
                                            <i class="fa fa-trash" aria-hidden="true"></i>
                                            SİL
                                        </a>
                                    </td>
                                </tr>
                                @endforeach
                                @endif
                            </tbody>
                        </table>
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
</section>