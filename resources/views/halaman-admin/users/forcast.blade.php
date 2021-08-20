@extends('halaman-admin.tamplate.index')

@section('content')
    <h1>{{ $dataBarang->namakopi }}</h1>

    <div class="container">
        <div class="row">
            <div class="col-8">
                <canvas id="myChart" width="200" height="100"></canvas>
            </div>
        </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.5.1/chart.js" integrity="sha512-b3xr4frvDIeyC3gqR1/iOi6T+m3pLlQyXNuvn5FiRrrKiMUJK3du2QqZbCywH6JxS5EOfW0DY0M6WwdXFbCBLQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script>
        var ctx = document.getElementById('myChart').getContext('2d');
        var data = {!! json_encode($resMonth1) !!}
        console.log(data)
        var myChart = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: [data[0].label, data[1].label, data[2].label],
                datasets: [{
                    label: 'Data Forecasting',
                    data: [data[0].result, data[1].result, data[2].result],
                    backgroundColor: [
                        'rgba(255, 99, 132, 0.2)',
                        'rgba(54, 162, 235, 0.2)',
                        'rgba(255, 206, 86, 0.2)'
                    ],
                    borderColor: [
                        'rgba(255, 99, 132, 1)',
                        'rgba(54, 162, 235, 1)',
                        'rgba(255, 206, 86, 1)'
                    ],
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
        </script> 
@endsection