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
                            <form method="POST" action="{{ route('post.admin.message') }}">
                                @csrf

                                <div class="col-12">
                                    <label>YÖNETİM KURULU BAŞKANI ADI & SOYADI :</label>
                                    @if (!is_null($message))
                                        <input type="text" style="width: 100%;" name="name"
                                            placeholder="Yönetim Kurulu Başkanı Adı&Soyadı Giriniz"
                                            value="{{ $message->name }}">
                                    @else
                                        <input type="text" style="width: 100%;" name="name"
                                            placeholder="Yönetim Kurulu Başkanı Adı&Soyadı Giriniz">
                                    @endif
                                </div>

                                <div class="col-12">
                                    <label>YÖNETİM KURULU BAŞKANI MESAJI (TR) :</label>
                                    @if (!is_null($message))
                                        <textarea style="width: 100%;" name="tr_message" placeholder="Türkçe Yönetim Kurulu Başkanı Mesajı Giriniz">{{ $message->tr_message }}</textarea>
                                    @else
                                        <textarea style="width: 100%;" name="tr_message" placeholder="Türkçe Yönetim Kurulu Başkanı Mesajı Giriniz"></textarea>
                                    @endif
                                </div>
                                <div class="col-12">
                                    <label>YÖNETİM KURULU BAŞKANI MESAJI (EN) :</label>
                                    @if (!is_null($message))
                                        <textarea style="width: 100%;height:50%" name="en_message"
                                            placeholder="İngilizce Yönetim Kurulu Başkanı Mesajı Giriniz">{{ $message->en_message }}</textarea>
                                    @else
                                        <textarea style="width: 100%;height:50%" name="en_message"
                                            placeholder="İngilizce Yönetim Kurulu Başkanı Mesajı Giriniz"></textarea>
                                    @endif
                                </div>
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
@endsection
