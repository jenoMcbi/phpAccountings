<?php 
    include "functions/_InstructorModule.php";

    $im = new InstructorModule();
?>  

<html>
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<form method="GET" action="">
		<?php $search = isset($_GET['q'])  ? $_GET['q']:'' ; ?>
		<input type="text" name="q" >
		<button>save</button>
	</form>
	<table>
		<thead>
			<tr>
				<th>Name</th>
				<th>Subject</th>
				<th>Credit</th>
				<th>lab</th>
				<th>total credit</th>
				<th>Credit</th>
			</tr>
		</thead>
		<tbody>

		<?php
			$count = 0; 
			foreach($im->getStudent($search) as $student) 
		: ?>
			<tr>
				<td><?php echo $student['fnam'].' '.$student['lname']; ?></td>
				<td><?php echo $student['subject_code']; ?></td>
				<td><?php echo $student['subject_description']; ?></td>
				<td><?php echo $student['credit_lec']; ?></td>
				<td><?php echo $student['credit_lab']; ?></td>
				<td><?php echo $student['total_credit']; ?></td>
				<td>
					<?php echo $im->getTotalLab($student['student_id']); ?>
				</td>
				<td>
					<?php echo $im->getTotalLec($student['student_id']); ?>
				</td>
			</tr>
		<?php endforeach; ?>
		</tbody>
	</table>
</body>
</html>