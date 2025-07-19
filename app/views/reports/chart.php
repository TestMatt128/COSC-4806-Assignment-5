<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
<title>Reminder Chart/Table</title>
  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
  <div class="container">
    <h1 class="text-center">Reminders By Users</h1>
    <canvas id="allReminders" width="75" height="75"></canvas>  
  </div>

 <script>
    const ctx = document.getElementById('reminderChart').getContext('2d');

    new Chart(ctx, {
      type: 'bar',
      data: {
        labels: <?= json_encode(array_column($reminderData, 'username')) ?>,
        datasets: [{
          label: 'Number of Reminders',
          data: <?= json_encode(array_column($reminderData, 'reminder_count')) ?>,
          backgroundColor: 'rgba(75, 192, 192, 0.6)',
          borderColor: 'rgba(75, 192, 192, 1)',
          borderWidth: 1
        }]
      },
      options: {
        responsive: true,
        scales: {
          y: {
            beginAtZero: true,
            ticks: { stepSize: 1 }
          }
        }
      }
    });
  </script>
</body>
</html>