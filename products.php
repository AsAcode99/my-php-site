<?php include 'header.php'; ?>

<style>
  .products-section {
    padding: 60px 40px;
    background-color: #fff8f4;
  }

  .products-section h2 {
    text-align: center;
    color: #a0522d;
    margin-bottom: 40px;
    font-size: 2em;
  }

  .products-grid {
    display: flex;
    flex-wrap: wrap;
    gap: 30px;
    justify-content: center;
  }

  .product-card {
    background-color: #fff1ec;
    border-radius: 12px;
    padding: 20px;
    width: 300px;
    box-shadow: 0 2px 10px rgba(0,0,0,0.1);
    text-align: center;
    display: flex;
    flex-direction: column;
    justify-content: space-between;
  }

  .product-card img {
    width: 100%;
    height: 180px;
    object-fit: cover;
    border-radius: 8px;
    margin-bottom: 15px;
  }

  .product-card h3 {
    color: #a0522d;
    margin-bottom: 10px;
    font-size: 1.4em;
  }

  .product-card p {
    font-size: 1em;
    line-height: 1.6;
    color: #333;
  }
</style>

<section class="products-section">
  <h2>Our Skincare Products</h2>

  <div class="products-grid">
    <div class="product-card">
      <img src="images/Fcream.jpg" alt="Moisturizing Cream">
      <h3>Moisturizing Cream</h3>
      <p>
        A rich, nourishing cream made from natural oils and botanical extracts. Perfect for dry or sensitive skin to stay soft, smooth, and hydrated all day long.
      </p>
    </div>

    <div class="product-card">
      <img src="images/toner2.jpg" alt="Herbal Toner">
      <h3>Herbal Toner</h3>
      <p>
        A gentle toner infused with chamomile and green tea to refresh and balance your skin. Use daily to reduce pores and enhance natural glow.
      </p>
    </div>

    <div class="product-card">
      <img src="images/facemask.jpg" alt="Clay Face Mask">
      <h3>Clay Face Mask</h3>
      <p>
        Deep-cleansing clay mask that draws out impurities and detoxifies the skin. Leaves your face feeling fresh, tight, and purified.
      </p>
    </div>
  </div>
</section>

<?php include 'footer.php'; ?>
