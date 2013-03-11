<canvas id="stripes" width="2000" height="80"></canvas>
<script>
  var canvas = document.getElementById('stripes');
  var context = canvas.getContext('2d');
  context.lineWidth = 10;
  context.beginPath();
  context.moveTo(0, 50);
  context.lineTo(10000, 50);
  context.strokeStyle = '#7f8c8d';
  context.stroke();

  var line2 = canvas.getContext('2d');
  line2.lineWidth = 10;
  line2.beginPath();
  line2.moveTo(0, 70);
  line2.lineTo(10000, 70);
  line2.strokeStyle = '#7f8c8d';
  line2.stroke();
</script>