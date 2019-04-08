</div>

<script src="public/assets/js/vendor/jquery-2.2.4.min.js"></script>
<script src="public/assets/js/popper.min.js"></script>
<script src="public/assets/js/bootstrap.min.js"></script>
<script src="public/assets/js/metisMenu.min.js"></script>
<script src="public/assets/js/jquery.slimscroll.min.js"></script>
<script src="public/assets/js/jquery.slicknav.min.js"></script>
<?php
if (isset($datatable)) {
	?>
	<script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.js"></script>
	<script src="https://cdn.datatables.net/1.10.18/js/jquery.dataTables.min.js"></script>
	<script src="https://cdn.datatables.net/1.10.18/js/dataTables.bootstrap4.min.js"></script>
	<script src="https://cdn.datatables.net/responsive/2.2.3/js/dataTables.responsive.min.js"></script>
	<script src="https://cdn.datatables.net/responsive/2.2.3/js/responsive.bootstrap.min.js"></script>
	<?php
}
?>
<script src="public/assets/js/plugins.js"></script>
<script src="public/assets/js/scripts.js"></script>
<?php
if (isset($name))
	echo '<script src="public/custom/front/' . $name . '.js"></script>';
?>
</body>

</html>
