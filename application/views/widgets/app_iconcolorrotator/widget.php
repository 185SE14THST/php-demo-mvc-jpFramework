<!-- jQuery iconColorRotator -->
<script type="text/javascript">
		$(function () {
			// Update the status color every 2 seconds, for demo only
			// You can remove this!
			var $status = $(".status .color"),
				colors = ["green", "yellow", "red"],
				currentStatus = 0;

			function updateStatus() {
				currentStatus++;
				if (currentStatus >= 3) {
					currentStatus = 0;
				}
				color = colors[currentStatus];
				$status.removeClass().addClass("color").addClass(color);
			}

			setInterval(function () {
				updateStatus();
			}, 2000);
		});
</script>