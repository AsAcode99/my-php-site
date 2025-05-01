<?php include 'header.php'; ?>

<style>
  .contact-section {
    padding: 60px 40px;
    background-color: #fff8f4;
    max-width: 600px;
    margin: auto;
    border-radius: 12px;
    box-shadow: 0 2px 10px rgba(0,0,0,0.1);
  }

  .contact-section h2 {
    text-align: center;
    color: #a0522d;
    margin-bottom: 30px;
  }

  .contact-form label {
    display: block;
    margin-bottom: 5px;
    font-weight: bold;
    color: #333;
  }

  .contact-form input,
  .contact-form textarea {
    width: 100%;
    padding: 10px;
    margin-bottom: 20px;
    border-radius: 6px;
    border: 1px solid #ccc;
    font-size: 1em;
  }

  .contact-form input[type="submit"] {
    background-color: #a0522d;
    color: white;
    cursor: pointer;
    border: none;
    transition: background 0.3s;
  }

  .contact-form input[type="submit"]:hover {
    background-color: #844321;
  }

  .success-message {
    background-color: #d4edda;
    color: #155724;
    padding: 15px;
    border-radius: 6px;
    margin-bottom: 20px;
  }
</style>

<section class="contact-section">
  <h2>Contact With Us</h2>

  <?php if (isset($_GET['sent']) && $_GET['sent'] == 'true'): ?>
    <div class="success-message">
      ✅ Your message has been sent successfully. Thank you for contacting us!
    </div>
  <?php endif; ?>

  <form class="contact-form" method="post" action="contact.php">
    <label>Name:</label>
    <input type="text" name="name" required>

    <label>Email:</label>
    <input type="email" name="email" required>

    <label>Message:</label>
    <textarea name="message" rows="5" required></textarea>

    <input type="submit" value="Submit">
  </form>
</section>

<?php
// معالجة النموذج بعد الضغط على "Submit"
if ($_SERVER["REQUEST_METHOD"] === "POST") {
  // هنا ممكن تضيف إرسال الإيميل باستخدام mail()
  // mail($to, $subject, $message, $headers); (اختياري)

  // إعادة التوجيه مع باراميتر للإظهار
  header("Location: contact.php?sent=true");
  exit;
}
?>

<?php include 'footer.php'; ?>
