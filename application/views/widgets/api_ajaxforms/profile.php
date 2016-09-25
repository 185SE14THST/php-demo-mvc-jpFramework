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
 * Description
 * This script is inserted into the view in order to execute JavaScript form processing
 * through AJAX calls without the need for the form page (view) to refresh.
 **/
?>

<script type="text/javascript">

	// JavaScript Document
	function submitdata() {

		function fieldValue(v) {
			var f = document.getElementById(v).value;
			return f;
		}
		var valid = 1;

		var profileCompany,
			profileShortName,
			profileCompanyUrl,
			profileMailingAddress1,
			profileMailingAddress2,
			profileMailingCity,
			profileMailingState,
			profileMailingZip,
			profileFirstName,
			profileLastName,
			profilePhone1,
			profilePhone1Ext,
			profilePhone2,
			profilePhone2Ext2;

		// Returns successful data submission message when the entered information is 
		// stored in database.

		var linkData = 
			'profileCompany' + profileCompany +
			'profileShortName' + profileShortName +
			'profileCompanyUrl' + profileCompanyUrl +
			'profileMailingAddress1' + profileMailingAddress1 +
			'profileMailingAddress2' + profileMailingAddress2 +
			'profileMailingCity' + profileMailingCity +
			'profileMailingState' + profileMailingState +
			'profileMailingZip' + profileMailingZip +
			'profileFirstName' +profileFirstName +
			'profileLastName' + profileLastName +
			'profilePhone1' + profilePhone1 +
			'profilePhone1Ext' + profilePhone1Ext +
			'profilePhone2' + profilePhone2 +
			'profilePhone2Ext2' + profilePhone2Ext2;

		/* var dataString = 'username=' + username + '&password=' + password; */
		if ( valid == 1) {
			console.log('URL' + link);
			// AJAX code to submit form.
			$.ajax({
				type: "POST",
				url: "profile.php",
				data: linkData,
				cache: false,
				success: function (html) {
					alert(html);
				}
			}); 
		}
		return false;
	}

</script>