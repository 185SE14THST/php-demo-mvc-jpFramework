<script>
	var spinner = new Spinner().spin();
	target.appendChild(spinner.el);
</script>
<?php
/**
 * PHP MVC template
 *
 * @package jpFramework
 * @author JP
 * @link http://www.???.com
 * @version 0.3a
 *
 * @copyright 2016
 *
 *            Description:
 *
 */
// API

if ( isset($_GET['lId']) and !empty($_GET['lId']) ) {
	$data = array (
		'a' => 1,
		'b' => 2,
		'c' => 3,
		'd' => 4,
		'lId' => $_GET['lId'],
		);
} else {
	echo 'NULL';
}
echo json_encode($data);
?>
<div class="container">
    <div class="col-lg-6 col-md-6">
        <h3></h3>Map</h3>
        <p>Image</p>
    </div>
    <div class="col-lg-6 col-md-6">
        <h3></h3>Text</h3>
        <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32.</p>
    </div>
</div>

<script></script>
