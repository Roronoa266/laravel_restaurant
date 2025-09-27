
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>FlavorFiesta - Restaurant App</title>
    @vite(['resources/css/app.css','resource/js/app.js'])
</head>
<body>
  <header class="site-header" role="banner">
    <div class="container header-inner">
      <div class="brand">
        <h1>FlavorFiesta 🍽️</h1>
        <p class="tagline">Your gateway to delicious dining experiences</p>
      </div>
    </div>
  </header>

  <main class="container" role="main">
    <section class="hero">
      <h2>Welcome to Our Restaurant App</h2>
      <p>Data Of every customer</p>
    </section>

    <section aria-labelledby="customers-heading" class="customers">
      <div class="controls">
        <label for="search" class="visually-hidden">Search customers</label>
        <input id="search" type="search" placeholder="Search name, address or ID" />
      </div>

      <div class="table-wrap" role="region" aria-label="Customer records">
        <table class="customers-table" summary="List of customers with id, name and address">
          <caption id="customers-heading">Customer records</caption>
          <thead>
            <tr>
              <th scope="col">Customer ID</th>
              <th scope="col">Customer Name</th>
              <th scope="col">Customer Address</th>
            </tr>
          </thead>
          <tbody>
            @foreach($customerData as $custData)
            <tr>
              <td data-label="Customer ID">{{ $custData->cust_id }}</td>
              <td data-label="Customer Name">{{ $custData->cust_name }}</td>
              <td data-label="Customer Address">{{ $custData->cust_address }}</td>
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </section>
  </main>

  <footer class="site-footer">
    <div class="container">
      <small>© {{ date('Y') }} FlavorFiesta</small>
    </div>
  </footer>

  <script>
    // Optional small client-side filter for quick searching
    (function(){
      const input = document.getElementById('search');
      const tbody = document.querySelector('.customers-table tbody');
      if (!input || !tbody) return;
      input.addEventListener('input', function () {
        const q = this.value.trim().toLowerCase();
        Array.from(tbody.rows).forEach(row => {
          const text = row.textContent.toLowerCase();
          row.style.display = text.includes(q) ? '' : 'none';
        });
      });
    })();
  </script>
</body>
</html>
