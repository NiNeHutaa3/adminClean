<!-- Tambahkan ini di dalam bagian <head> dari file Blade.php Anda -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<!-- Tambahkan ini di dalam bagian <body> dari file Blade.php Anda -->
    <div style="width:70%;">
        <canvas id="barChart"></canvas>
    </div>
    
    <script>
        // Ambil data dari controller atau siapkan data di sini
        var chartData = {
            labels: ["Data1", "Data2", "Data3", "Data4", "Data5"],
            datasets: [{
                label: 'Jumlah Pesanan Harian',
                data: [12, 19, 3, 5, 2], // Ganti ini dengan data yang sesuai
                backgroundColor: [
                    'rgba(255, 99, 132, 0.2)',
                    'rgba(54, 162, 235, 0.2)',
                    'rgba(255, 206, 86, 0.2)',
                    'rgba(75, 192, 192, 0.2)',
                    'rgba(153, 102, 255, 0.2)'
                ],
                borderColor: [
                    'rgba(255,99,132,1)',
                    'rgba(54, 162, 235, 1)',
                    'rgba(255, 206, 86, 1)',
                    'rgba(75, 192, 192, 1)',
                    'rgba(153, 102, 255, 1)'
                ],
                borderWidth: 1
            }]
        };
    
        // Inisialisasi Chart
        var ctx = document.getElementById('barChart').getContext('2d');
        var myBarChart = new Chart(ctx, {
            type: 'bar',
            data: chartData,
            options: {
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });
    </script>
    