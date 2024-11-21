<!DOCTYPE html>
<html>
<head>
  <!-- Add Bootstrap CSS link -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css">
</head>
<body>
  <div class="container mt-5">
    <input type="text" id="numberInput" class="form-control">
  </div>

  <!-- Add Bootstrap JS and your custom script -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
  <script>
    const numberWithCommas = (number) => {
      return number.toLocaleString();
    };

    document.getElementById("numberInput").addEventListener("input", function() {
      const inputElement = this;
      const inputValue = inputElement.value.replace(/,/g, ''); // Remove existing commas
      const parsedValue = parseFloat(inputValue); // Parse the number

      // Check if the input is a valid number
      if (!isNaN(parsedValue)) {
        const formattedValue = numberWithCommas(parsedValue); // Format with commas
        inputElement.value = formattedValue;
      } else {
        inputElement.value = ''; // Clear the input if not a valid number
      }
    });
  </script>
</body>
</html>