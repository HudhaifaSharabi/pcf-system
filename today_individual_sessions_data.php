<?php

include "include/header.php";
if (!isset($_SESSION['user'])) {

	echo "<script> window.open('logout.php','_self')</script>";
	// header("location:login.php");
}
if ($_SESSION['user']['rule_id'] == 7 || $_SESSION['user']['rule_id'] == 15 || $_SESSION['user']['rule_id'] == 2 || $_SESSION['user']['rule_id'] == 6 || $_SESSION['user']['rule_id'] == 16 || $_SESSION['user']['rule_id'] == 18) {
?>


	<?php
	include_once "include/query.php";
	include_once "include/table_actions.php";
	delete($con, 'individual_sessions');
	?>



	<div class="content">
		<div class="page-inner">


			<div class="row">
				<div class="col-md-12">
					<form action="" method="post">
						<div class="card">
							<div class="card-header">
								<div class="card-title">البيانات المدخلة لليوم جلسات فردية</div>

							</div>
							<div class="card-body">



								<?php
								$stmu = queryWithPagination($con, "individual_sessions");
								// $stmu = null;
								// if ($_SESSION['user']['rule_id'] == 2 || $_SESSION['user']['rule_id'] == 6) {

								// 	$date = date('Y-1-1');

								// 	$sql = "SELECT * FROM individual_sessions where Date(date_data_come) >= ? order by date_data_come desc  ";
								// 	$stmu = $con->prepare($sql);
								// 	$stmu->execute(array($date));
								// } else {
								// 	// find branch
								// 	$branch = $_SESSION['user']['branch_id'];

								// 	//end find branch and date_data_come=?  ,$date

								// 	$date = date('Y-m-d');
								// 	$user = $_SESSION['user']['id'];
								// 	$sql = "SELECT * FROM individual_sessions where sender_name =? and Date(date_data_come)=?   ";
								// 	$stmu = $con->prepare($sql);
								// 	$stmu->execute(array($user, $date));
								// }

								//عدد الحالات الكلية
								if ($stmu->rowCount() > 0) {



								?>
									<div class="table-responsive">
										<table id="multi-filter-select" class="table table-bordered table-head-bg-info table-bordered-bd-info mt-4">
											<thead>
												<tr>
													<th>نوع التسجيل</th>
													<th>الفرع</th>
													<th> العمر</th>
													<th> الجنس</th>
													<th> رقم كود الحالة</th>
													<th> الجلسة</th>
													<th> عنوان الجلسة</th>
													<th> الزمن من</th>
													<th> الزمن الى</th>
													<th> تحديد المشكلة</th>
													<th> أجرات الجلسة</th>
													<th> الاساليب العلاجية</th>
													<th> المهام والواجبات</th>
													<th> الاختبارات النفسية</th>


													<th>التاريخ</th>
													<th>تعديل</th>




												</tr>
											</thead>
											<tfoot>
												<th>نوع التسجيل</th>
												<th>الفرع</th>
												<th> العمر</th>
												<th> الجنس</th>
												<th> رقم كود الحالة</th>
												<th> الجلسة</th>
												<th> عنوان الجلسة</th>
												<th> الزمن من</th>
												<th> الزمن الى</th>
												<th> تحديد المشكلة</th>
												<th> أجرات الجلسة</th>
												<th> الاساليب العلاجية</th>
												<th> المهام والواجبات</th>
												<th> الاختبارات النفسية</th>
												<th>التاريخ</th>
												<th>تعديل</th>



											</tfoot>
											<tbody>
												<?php {
													foreach ($stmu->fetchAll() as $row) {

												?>

														<tr>
															<td><?php echo $row['type']; ?></td>
															<td>
																<?php
																$sql = "select * from branch where  id=? ";
																$stm = $con->prepare($sql);
																$stm->execute(array($row['branch']));
																$branch = $stm->fetch();
																$branch_name = $branch['branch_name'];
																echo $branch_name;
																?>
															</td>
															<td>
																<?php
																if ($_SESSION['user']['rule_id'] == 16) {
																	$sql = "SELECT TIMESTAMPDIFF(YEAR,brithday,CURDATE()) as age ,sex FROM hotline where code =?  and type=?    ";
																} else {
																	$sql = "SELECT 
    YEAR(CURDATE()) - YEAR(brithday) - 
    (DATE_FORMAT(CURDATE(), '%m-%d') < DATE_FORMAT(brithday, '%m-%d')) AS age ,sex
FROM resption
WHERE code = ? AND type = ?    ";
																}

																$stmu = $con->prepare($sql);
																$stmu->execute(array($row['code'], 'جديد'));
																$row_brithday_sex = $stmu->fetch();
																echo $row_brithday_sex['age']; ?>
															</td>
															<td><?php echo $row_brithday_sex['sex'] ?></td>
															<td><?php echo $row['code']; ?></td>
															<td><?php echo $row['section']; ?></td>
															<td><?php echo $row['address']; ?></td>
															<td><?php echo $row['from_time']; ?></td>
															<td><?php echo $row['to_time']; ?></td>
															<td><?php echo $row['select_s']; ?></td>
															<td><?php echo $row['agrat']; ?></td>
															<td><?php echo $row['alasalib']; ?></td>
															<td><?php echo $row['taks']; ?></td>

															<td><?php echo $row['violense']; ?></td>
															<td><?php echo $row['date']; ?></td>
															<td>
																<a href="individual_sessions_edit.php?action=edit&ids=<?php echo $row['id'] ?>">
																	<i class="fa fa-pencil"></i>تعديل
																</a>
															</td>

															<?php
															deleteAction($row['id']) ?>





														</tr>
											<?php


													}
												}
											} else {
												echo ' <div class="alert alert-danger">NO Row</div>';
											}


											?>


											</tbody>
										</table>
									</div>


							</div>
					</form>


				</div>
			</div>

		</div>
	</div>



	<!-- Custom template | don't include it in your project! -->

	<!-- End Custom template -->
	<?php

	include "include/footer.php";


	?>

<?php
	//تم وضع كود في الاخير من اجل تنفيذ رسالة التحدذير

} else {
	echo "<script> window.open('index.php','_self')</script>";
}
?>