
<h1>Daftar Movies dan Rental</h1>

@foreach($movies as $movie)
    <h2>{{ $movie->movie_title }}</h2>
    <p>{{ $movie->movie_description }}</p>

    <h3>Rental:</h3>
    @foreach($movie->rentals as $rental)
        <p>Rental ID: {{ $rental->item_rental_id }}</p>
        <p>Customer ID: {{ $rental->customer_id }}</p>
        <p>Tanggal Rental: {{ $rental->rental_date_out }}</p>
        <p>Tanggal Kembali: {{ $rental->rental_date_returned }}</p>

        <h4>Transaksi:</h4>
        @if($rental->transaction)
            <p>Transaction ID: {{ $rental->transaction->transaction_id }}</p>
            <p>Tanggal Transaksi: {{ $rental->transaction->transaction_date }}</p>
            <p>Jumlah Transaksi: {{ $rental->transaction->transaction_amount }}</p>
        @else
            <p>Belum ada transaksi.</p>
        @endif
    @endforeach
    <hr>
@endforeach
