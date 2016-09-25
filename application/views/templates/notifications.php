
<div class="container">
	<?php
	/**
	 * Session alert management
	 * @package jpFramework
	 * @author JP
	 * @link http://www.???.com
	 * @version 0.3a
	 *
	 * @copyright 2016
	 *
	 *	Description: Add or remove div tags to display javascript based notification boxes with (x) closing.
	 *
	 *
	 */

	if (isset ( $_SESSION ['errors'] ) and ! empty ( $_SESSION ['errors'] )) {
		
		echo '<div class="alert alert-danger alert-dismissible" role="alert"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>' . $_SESSION ['errors'] . '</div>';
		unset ( $_SESSION ['errors'] );
	}
	if (isset ( $_SESSION ['warning'] ) and ! empty ( $_SESSION ['warning'] )) {
		
		echo '<div class="alert alert-warning" alert-dismissible role="alert"> <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>' . $_SESSION ['warning'] . '</div>';
		unset ( $_SESSION ['warning'] );
	}
	if (isset ( $_SESSION ['success'] ) and ! empty ( $_SESSION ['success'] )) {
		
		echo '<div class="alert alert-success" alert-dismissible role="alert"> <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>' . $_SESSION ['success'] . '</div>';
		unset ( $_SESSION ['success'] );
	}
	if (isset ( $_SESSION ['info'] ) and ! empty ( $_SESSION ['info'] )) {
		
		echo '<div class="alert alert-info" alert-dismissible role="alert"> <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>' . $_SESSION ['info'] . '</div>';
		unset ( $_SESSION ['info'] );
	}
    ?>
</div>