<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width,minimum-scale=1">
  <title>Newsletter</title>
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v6.1.1/css/all.css">
</head>

<body>

  <h1>Newsletter</h1>

  <p>Hello world!</p>

  <div class="newsletter-popup">
    <div class="newsletter-popup-container">

      <a href="#" class="newsletter-popup-close-btn">&times;</a>

      <h3><i class="fa-regular fa-envelope"></i>Subscribe To Our Newsletter</h3>

      <p>Join our subscribers list to get the latest news, updates, and special offers directly in your inbox.</p>

      <form action="subscribe.php" method="post">
        <input type="email" name="email" placeholder="Your Email" required>
        <button type="submit">Subscribe</button>
      </form>

      <p class="newsletter-msg"></p>

    </div>
  </div>

</body>

</html>


<script>
  // Will prevent the popup from reopening when the close button is clicked
  let keepClosed = false;
  // Open the newsletter subscription popup
  const openNewsletterPopup = () => {
    // Update the style and element properties
    document.querySelector('.newsletter-popup').style.display = 'flex';
    document.querySelector('.newsletter-popup').getBoundingClientRect();
    document.querySelector('.newsletter-popup').classList.add('open');
    document.querySelector('.newsletter-popup-container').getBoundingClientRect();
    document.querySelector('.newsletter-popup-container').classList.add('open');
  };
  const closeNewsletterPopup = () => {
    // Revert the element properties
    document.querySelector('.newsletter-popup').style.display = 'none';
    document.querySelector('.newsletter-popup').classList.remove('open');
    document.querySelector('.newsletter-popup-container').classList.remove('open');
    // Keep it closed!
    keepClosed = true;
  };
  // Get the subscription form
  const newsletterForm = document.querySelector('.newsletter-popup form');
  // On submit event handler (submit button is pressed)
  newsletterForm.onsubmit = event => {
    event.preventDefault();
    // Bind the subscription form and execute AJAX request
    fetch(newsletterForm.action, {
      method: 'POST',
      body: new FormData(newsletterForm)
    }).then(response => response.text()).then(data => {
      // Output the response
      document.querySelector('.newsletter-msg').innerHTML = data;
    });
  };
  // Close button onclick event handler
  document.querySelector('.newsletter-popup-close-btn').onclick = event => {
    event.preventDefault();
    // CLose the popup widget
    closeNewsletterPopup();
  };
  // Open the popup widget when the user reaches a specific point while scrolling down
  document.addEventListener('scroll', () => {
    // If you want to open the widget further down the page, increase the 400 value
    if (window.scrollY >= 400 && !keepClosed) {
      // Open the widget
      openNewsletterPopup();
    }
  });

</script>
