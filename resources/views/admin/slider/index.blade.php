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
                            <form method="POST" action="{{ route('post.admin.slider') }}" enctype="multipart/form-data">
                                @csrf
                                <table id="sliderTable" class="table table-bordered table-striped">
                                    <thead>
                                        <tr>
                                            <th>SIRA</th>
                                            <th>RESİM</th>
                                            <th>BAŞLIK(TR)</th>
                                            <th>AÇIKLAMA(TR)</th>
                                            <th>BAŞLIK(EN)</th>
                                            <th>AÇIKLAMA(EN)</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @if (count($sliders) > 0)
                                            @for ($i = 1; $i < count($sliders) + 1; $i++)
                                                <tr>
                                                    <td>
                                                        <img src="/{{ $sliders[$i - 1]->path }}" width="225"
                                                            height="125">
                                                    </td>
                                                    <td>
                                                        <input type="file" name="file{{ $i }}">
                                                    </td>
                                                    <td>
                                                        <input type="text" name="file{{ $i }}_tr_header"
                                                            placeholder="Türkçe Başlık Giriniz"
                                                            value="{{ $sliders[$i - 1]->tr_title }}">
                                                    </td>
                                                    <td>
                                                        <textarea name="file{{ $i }}_tr_description" placeholder="Türkçe Açıklama Giriniz">{{ $sliders[$i - 1]->tr_description }}</textarea>
                                                    </td>
                                                    <td>
                                                        <input type="text" name="file{{ $i }}_en_header"
                                                            placeholder="İngilizce Başlık Giriniz"
                                                            value="{{ $sliders[$i - 1]->en_title }}">
                                                    </td>
                                                    <td>
                                                        <textarea name="file{{ $i }}_en_description" placeholder="İngilizce Açıklama Giriniz">{{ $sliders[$i - 1]->en_description }}</textarea>
                                                    </td>
                                                </tr>
                                            @endfor
                                        @else
                                            @for ($i = 1; $i < 5; $i++)
                                                <tr>
                                                    <td>
                                                        <img src="/" width="225"
                                                            height="125">
                                                    </td>
                                                    <td>
                                                        <input type="file" name="file{{ $i }}">
                                                    </td>
                                                    <td>
                                                        <input type="text" name="file{{ $i }}_tr_header"
                                                            placeholder="Türkçe Başlık Giriniz">
                                                    </td>
                                                    <td>
                                                        <textarea name="file{{ $i }}_tr_description" placeholder="Türkçe Açıklama Giriniz"></textarea>
                                                    </td>
                                                    <td>
                                                        <input type="text" name="file{{ $i }}_en_header"
                                                            placeholder="İngilizce Başlık Giriniz">
                                                    </td>
                                                    <td>
                                                        <textarea name="file{{ $i }}_en_description" placeholder="İngilizce Açıklama Giriniz"></textarea>
                                                    </td>
                                                </tr>
                                            @endfor
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
@endsection
