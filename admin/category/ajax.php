<?php
header("content-type:text/html; charset=UTF-8");
?>
<?php
require_once('../database/dbhelper.php');

if (!empty($_POST)) {
	if (isset($_POST['action'])) {
		$action = $_POST['action'];

		switch ($action) {
			case 'delete':
				if (isset($_POST['id'])) {
					$id = $_POST['id'];

					$sql = "DELETE FROM collection WHERE id = $id";
					execute($sql);
				}
				break;
		}
	}
}?>