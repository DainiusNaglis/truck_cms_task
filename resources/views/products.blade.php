@extends('layout')

@section('content')

    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <h1 class="h3 mb-2 text-gray-800">Suvestų sunkvežimių informacija</h1>

        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                        <tr>
                            <th>@sortablelink('marke_id', 'Markė')</th>
                            <th>@sortablelink('gamybos_metai', 'Gamybos metai')</th>
                            <th>@sortablelink('vardas_pavarde', 'Savininko vardas, pavardė')</th>
                            <th>@sortablelink('savinink_sk', 'Savininkų skaičius')</th>
                            <th>Komentarai</th>
                        </tr>
                        </thead>
                        <tbody>
                        @if($products->count())
                            @foreach($products as $product)
                            <tr>
                                @if($product->marke_id == 1 )

                                <td>Volvo</td>
                                @endif
                                    @if($product->marke_id == 2 )

                                        <td>VAZ</td>
                                    @endif

                                    @if($product->marke_id == 3 )

                                        <td>Mercedes</td>
                                    @endif
                                    @if($product->marke_id == 4 )

                                        <td>GAZ</td>
                                    @endif

                                <td>{{$product->gamybos_metai}}</td>
                                <td>{{$product->vardas_pavarde}}</td>
                                <td>{{$product->savinink_sk}}</td>
                                <td>{{$product->komentaras}}</td>
                            </tr>
                            @endforeach
@endif
                        </tbody>
                    </table>
                    {!! $products->appends(\Request::except('page'))->render() !!}
                </div>
            </div>
        </div>

    </div>



@endsection

