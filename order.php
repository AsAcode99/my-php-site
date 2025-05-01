<?php include 'header.php'; ?>

<style>
  .order {
    padding: 40px;
    max-width: 600px;
    margin: 80px auto 40px;
    background-color: #fff1ec;
    border-radius: 12px;
    box-shadow: 0 2px 10px rgba(0,0,0,0.1);
  }

  form {
    display: flex;
    flex-direction: column;
    gap: 15px;
  }

  label {
    font-weight: bold;
    margin-bottom: 5px;
  }

  input[type="text"],
  input[type="email"],
  select {
    padding: 10px;
    border-radius: 8px;
    border: 1px solid #ccc;
    font-size: 16px;
  }

  input[type="submit"] {
    padding: 12px;
    background-color: #a0522d;
    color: white;
    border: none;
    border-radius: 8px;
    cursor: pointer;
    font-size: 16px;
    transition: background-color 0.3s;
  }

  input[type="submit"]:hover {
    background-color: #8b4513;
  }

  .confirmation-message {
    display: none;
    margin-top: 20px;
    padding: 15px;
    background-color: #d4edda;
    color: #155724;
    border: 1px solid #c3e6cb;
    border-radius: 8px;
    font-weight: bold;
    text-align: center;
  }
</style>

<section class="order">
  <h2>Order Your Product</h2>
  <form id="orderForm">
    <label>Name:</label>
    <input type="text" name="name" required>

    <label>Email:</label>
    <input type="email" name="email" required>

    <label>Select Product:</label>
    <select name="product">
      <option>Moisturizing Cream</option>
      <option>Herbal Toner</option>
    </select>

    <input type="submit" value="Submit Order">
  </form>

  <div class="confirmation-message" id="confirmationMessage">
   Your request has been sent successfully!
  </div>
</section>

<script>
  window.addEventListener("DOMContentLoaded", function() {
    const form = document.getElementById("orderForm");
    const message = document.getElementById("confirmationMessage");

    form.addEventListener("submit", function(e) {
      e.preventDefault();
      message.style.display = "block";
      form.reset();
    });
  });
</script>

<?php include 'footer.php'; ?>
