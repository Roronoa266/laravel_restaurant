
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>FlavorFiesta - Restaurant App</title>
    @vite(['resource/css/app.css','resource/js/app.js'])
  <style>
    body {
      font-family: 'Segoe UI', sans-serif;
      background-color: #fff8f0;
      margin: 0;
      padding: 0;
      color: #333;
    }
    header {
      background-color: #ff6b6b;
      color: white;
      padding: 20px;
      text-align: center;
    }
    main {
      padding: 40px;
      text-align: center;
    }
    section {
      margin: 40px 0;
    }
    h1, h2 {
      margin-bottom: 10px;
    }
    p {
      font-size: 1.1em;
      max-width: 600px;
      margin: auto;
    }
    .menu-item {
      background-color: #ffe0b2;
      margin: 10px auto;
      padding: 15px;
      border-radius: 8px;
      max-width: 400px;
    }
    form {
      margin-top: 20px;
    }
    input, select, textarea {
      width: 80%;
      padding: 10px;
      margin: 10px 0;
      border-radius: 6px;
      border: 1px solid #ccc;
    }
    .cta-button {
      padding: 12px 24px;
      background-color: #ffa502;
      color: white;
      border: none;
      border-radius: 8px;
      font-size: 1em;
      cursor: pointer;
    }
    .cta-button:hover {
      background-color: #ff7f50;
    }
  </style>
</head>
<body>
  <header>
    <h1>FlavorFiesta 🍽️</h1>
    <p>Your gateway to delicious dining experiences</p>
  </header>

  <main>
    <section>
      <h2>Welcome to Our Restaurant App</h2>
      <p>Explore our menu, book a table, and enjoy a seamless dining experience. Whether you're craving comfort food or gourmet cuisine, FlavorFiesta brings the best of our kitchen to your fingertips.</p>
    </section>

    <section>
      <h2>Today's Menu</h2>
      <div class="menu-item"><strong>Grilled Chicken Adobo</strong> - ₱180</div>
      <div class="menu-item"><strong>Seafood Kare-Kare</strong> - ₱220</div>
      <div class="menu-item"><strong>Vegetarian Lumpia</strong> - ₱150</div>
    </section>

    <section>
      <h2>Reserve a Table</h2>
      <form>
        <input type="text" placeholder="Your Name" required />
        <input type="email" placeholder="Email Address" required />
        <input type="date" required />
        <select required>
          <option value="">Select Time</option>
          <option>12:00 PM</option>
          <option>3:00 PM</option>
          <option>6:00 PM</option>
          <option>8:00 PM</option>
        </select>
        <textarea placeholder="Special Requests (optional)"></textarea>
        <br />
        <button class="cta-button">Book Now</button>
      </form>
    </section>
  </main>
</body>
</html>