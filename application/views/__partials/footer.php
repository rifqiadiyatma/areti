</section>
    </main>
    <!-- Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="<?= base_url('assets/js/script.js') ?>"></script>
    <script>
      $(document).ready(function() {
        $('.sidebarCollapseDefault').on('click', function() {
          $('.sidebar').toggleClass('active');
          $('.content').toggleClass('active');
        });
      });
    </script>
    <script>
      const ctx = document.getElementById('myChart');
      new Chart(ctx, {
        type: 'line',
        data: {
          labels: ['January', 'February', 'March', 'April', 'Mei', 'June', 'July', ],
          datasets: [{
            label: 'Keuntungan',
            data: [65, 59, 80, 81, 56, 55, 40],
            fill: false,
            borderColor: 'rgb(13, 110, 253)',
            tension: 0.1,
          }, ],
        },
      });
    </script>
    <script>
      const ctx2 = document.getElementById('myChart2');
      new Chart(ctx2, {
        type: 'doughnut',
        data: {
          labels: ['Red', 'Blue', 'Yellow'],
          datasets: [{
            label: 'Penjualan',
            data: [300, 50, 100],
            backgroundColor: [
              'rgb(255, 99, 132)',
              'rgb(54, 162, 235)',
              'rgb(255, 205, 86)'
            ],
            hoverOffset: 4
          }, ],
        },
      });
    </script>
  </body>
</html>