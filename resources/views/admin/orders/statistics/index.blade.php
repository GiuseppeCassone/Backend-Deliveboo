@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Order Statistics</h1>
    <canvas id="orderChart"></canvas>

    <a class="btn btn-primary" href="{{route('admin.orders.index')}}">Torna alla lista totale degli ordini</a>
</div>
@endsection

@section('scripts')
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
document.addEventListener("DOMContentLoaded", function() {
    fetch("{{ route('admin.orders.statistics.data') }}")
        .then(response => response.json())
        .then(data => {
            const labels = data.map(item => `${item.month}/${item.year}`);
            const orderCounts = data.map(item => item.order_count);
            const totalSales = data.map(item => item.total);

            const ctx = document.getElementById('orderChart').getContext('2d');
            new Chart(ctx, {
                type: 'bar',
                data: {
                    labels: labels,
                    datasets: [{
                        label: 'Number of Orders',
                        data: orderCounts,
                        backgroundColor: 'rgba(54, 162, 235, 0.2)',
                        borderColor: 'rgba(54, 162, 235, 1)',
                        borderWidth: 1
                    },
                    {
                        label: 'Total Sales',
                        data: totalSales,
                        backgroundColor: 'rgba(255, 99, 132, 0.2)',
                        borderColor: 'rgba(255, 99, 132, 1)',
                        borderWidth: 1
                    }]
                },
                options: {
                    scales: {
                        y: {
                            beginAtZero: true
                        }
                    }
                }
            });
        });
});
</script>
@endsection