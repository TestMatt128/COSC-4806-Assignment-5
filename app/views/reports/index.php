<?php require_once 'app/views/templates/header.php' ?>


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
          label: 'Number of Reminders',
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
        min-width: 600px;
        min-height: 300px;
    }
</style>