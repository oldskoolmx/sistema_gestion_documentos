<?php

if (isset($_GET["opt"]) && $_GET["opt"] == "add") {

	$per = new AreasturData();
	$per->name = $_POST["name"];
	/*if($per->name==""){
        echo "<div class='alert alert-danger'>No Area Selected</div>";
    }*/
	$per->add();
?>
	<script type="text/javascript">
		Swal.fire(
			'Good job!',
			'You clicked the button!',
			'success'
		);
	</script>

<?php
	Core::redir("./?view=areastur&opt=all");
} else if (isset($_GET["opt"]) && $_GET["opt"] == "update") {

	$per = AreasturData::getById($_POST["_id"]);
	$per->name = $_POST["name"];
	$per->update();
	Core::redir("./?view=areastur&opt=all");
} else if (isset($_GET["opt"]) && $_GET["opt"] == "del") {
	$per = AreasturData::getById($_GET["id"]);
	$per->del();
	Core::redir("./?view=areastur&opt=all");
}
?>