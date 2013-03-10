<? /* CONVERTS ALL <img class="svg"> TAGS TO INLINE SVGS */ ?>
<script src="/Content/scripts/inline-svg-replace.js" type="text/javascript"></script>
<? /* FIXED-ON-SCROLL NAVIGATION */ ?>
<script src="/Content/scripts/scrollMonitor/scrollMonitor.js" type="text/javascript"></script>
<script>
	$(document).ready(function(){   
	var el = $('#theNav');
	var body = $('#content-wrapper');
	var headerWatcher = scrollMonitor.create('#header');
	var watcher = scrollMonitor.create(el);
	watcher.lock();
	watcher.partiallyExitViewport(function() {
			body.addClass('fixed-header');
			el.addClass('fixed');
		});

	headerWatcher.enterViewport(function() {
			body.removeClass('fixed-header');
			el.removeClass('fixed');
		});
	});	
</script>
<? /* ANALYTICS */ ?>
<? include_once("Shared/_analytics.php"); ?>
