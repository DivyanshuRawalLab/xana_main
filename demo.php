<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<style>
  .decorated::before {
    content: "⭐"; /* Adding a star before the text */
    margin-right: 8px; /* Space between the icon and text */
    color: gold; /* Icon color */
}

.decorated::after {
    content: "✨"; /* Adding a sparkle after the text */
    margin-left: 8px; /* Space between the text and sparkle */
    color: gold; /* Icon color */
}

</style>
<body>
<p class="decorated">Hello, World!</p>

</body>
</html>