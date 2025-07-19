<?php require_once 'app/views/templates/header.php' ?>

<div class="container mt-5">
  <nav aria-label="breadcrumb" class="mb-3">
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="/">Home</a></li>
      <li class="breadcrumb-item active" aria-current="page">Reports</li>
    </ol>  
  </nav>
  <h2>Reminders by All Users</h2>

  <!-- Chart -->
  <div class="mb-4">
    <div class="card card body" style="overflow-x: auto; min-height: 300px; max-width: 100%;">
      <canvas id="reminderChart" style="min-width: 800px; height: 400px;"></canvas>
      </div>
  </div>
<?php require_once 'app/views/templates/footer.php' ?>

<!--Begin the bootstrap imports -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

<!-- Chart.js -->
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<!-- Chart Script -->
<script>
    const ctx = document.getElementById('reminderChart').getContext('2d');

    new Chart(ctx, {
      type: 'bar',
      data: {
        labels: <?= json_encode(array_column($data['users'], 'username')) ?>,
        datasets: [{
          label: 'Total number of reminders',
          data: <?= json_encode(array_column($data['users'], 'reminder_count')) ?>,
          backgroundColor: 'rgba(54, 162, 235, 0.6)',
          borderColor: 'rgba(54, 162, 235, 1)',
          borderWidth: 1
        }]
      },
      options: {
        responsive: true,
        maintainAspectRatio: false,
        scales: {
          y: {
            beginAtZero: true,
            ticks: { stepSize: 1 }
          }
        },
        plugins: {
          legend: { display: true },
          tooltip: { enabled: true }
        }
      }
    });


</script>

<!-- Optional Chart Styling -->
<style>
    #reminderChart {
        min-width: 500px;
        min-height: 250px;
    }
</style>