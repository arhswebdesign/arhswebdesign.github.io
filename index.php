<?php
	$teacherName = 'Mark Moriarty';
	$isClassroomTeacher = true;
	$arpsName = 'moriartm';
	$hasPhoto = false;
	$altText = '';
	$hasCustom = false;
	$hasQuotation = false;
	$pageTitle='ARHS Staff: '.$teacherName;	
	set_include_path('../../../hs/ContentManagement/modules');
	include 'Staff_Hit_Counter.php';
	include 'StartDocument.php';
	if ($hasPhoto){
		$photoSource = 'http://www.arps.org/users/hs/'.$arpsName.'/images/'.$arpsName.'.jpg';
	}
	//if no photo, $photoSource is null; checked in PhotoColumn.php
	include 'PhotoColumn.php';
?>

	<!-- open content plate container -->
	<div id="contentPlateContainer">
		<h2 class="titleBox">
			<!-- title of content plate -->
<?php 
echo "\n\t\t\t".$teacherName;
?>		
		 		
		</h2>
		
		<div class="contentPlate">
		
<?
	include 'modules/ContactInfo.html';
	if ($isClassroomTeacher){
		include 'modules/Courses.html';
	}
	if ($hasCustom){
		include 'modules/Custom.html';
	}
	if ($hasQuotation){
		include 'modules/Quotation.html';
	}
?>

		</div>
		<!-- close content plate -->
		
	</div>
	<!-- close content plate container -->
	
<?
	include 'EndDocument.php';
?>
