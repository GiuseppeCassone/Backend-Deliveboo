@extends('layouts.app')

@section('content')
<div class="container animate__animated animate__fadeIn personal_color3 p-3">
    <h1>Statistiche degli ordini</h1>

    <a class="btn btn-dark personal_color3back mt-2 mb-2" href="{{route('admin.orders.index')}}">Torna alla lista totale degli ordini</a>

    <div class="row ">
        <div class=" col-12 col-md-6 py-3">
            <h2>Numero di Ordini per Mese</h2>
            <canvas id="orderCountChart"></canvas>
        </div>
        <div class="col-12 col-md-6 py-3">
            <h2>Totale Guadagno per Mese</h2>
            <canvas id="salesChart"></canvas>
            
        </div>

    </div>
    

</div>
@endsection

@section('scripts')
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
document.addEventListener("DOMContentLoaded", function() {
    fetch("{{ route('admin.orders.statistics.data') }}")
        .then(response => {
            if (!response.ok) {
                throw new Error('Network response was not ok ' + response.statusText);
            }
            return response.json();
        })
        .then(data => {
            const monthNames = ["Gennaio", "Febbraio", "Marzo", "Aprile", "Maggio", "Giugno", "Luglio", "Agosto", "Settembre", "Ottobre", "Novembre", "Dicembre"];
            const labels = data.map(item => `${monthNames[item.month - 1]}/${item.year}`);
            const orderCounts = data.map(item => item.order_count);
            const totalSales = data.map(item => item.total);

            // Number of Orders Chart
            const orderCountCtx = document.getElementById('orderCountChart').getContext('2d');
            new Chart(orderCountCtx, {
                type: 'bar',
                data: {
                    labels: labels,
                    datasets: [{
                        label: 'Numero Ordini',
                        data: orderCounts,
                        backgroundColor: 'rgba(54, 162, 235, 0.2)',
                        borderColor: 'rgba(54, 162, 235, 1)',
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

            // Total Sales Chart
            const salesCtx = document.getElementById('salesChart').getContext('2d');
            new Chart(salesCtx, {
                type: 'bar',
                data: {
                    labels: labels,
                    datasets: [{
                        label: 'Totale Guadagni',
                        data: totalSales,
                        backgroundColor: 'rgba(0, 255, 0, 0.5)',
                        borderColor: 'rgba(0, 150, 0, 1)',
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
        })
        .catch(error => {
            console.error('Error fetching the data:', error);
            alert('An error occurred while fetching the data.');
        });
});
</script>

<style>

    .personal_color3 {
        color: #006769; 
    }

    .personal_color3back {
        background-color: #006769; 
    }

</style>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
@endsection