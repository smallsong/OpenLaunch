
 <script type="text/javascript">
$(document).ready(function() {
	$(".admin-page-type-basic").height($(window).height()-120);
});
</script>

<form action="" method="post">
	<div class="admin-page-type-basic admin-full-editor">
		<?php echo Component::get("OpenLaunch.RichTextEditor", array("id" => $id, "value" => $page->get("html"))) ?>
	</div>
</form>