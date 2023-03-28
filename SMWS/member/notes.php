<?php
session_start();
include($_SERVER['DOCUMENT_ROOT'] . '/smws/protected/header.php');
include($_SERVER['DOCUMENT_ROOT'].'/smws/public/meta.php') ;
$info = $userInfo->getinfo();
$idOfChairPerson = $info['aId'];
?>
<main>
	<div class="head-title">
		<div class="left">
			<h1>
				List of All NOTES
			</h1>
		</div>
	</div>
    <style>
    table,
    th,
    td {
        border: 1px solid;
            text-align:center;
            padding: 10px 10px;
            margin-left: 10px;
        }
    
</style>
	<ul class="box-info">
		<li>
			<!-- <i class='bx bxs-smile'></i> -->
			<span class="text">
				<h3>
					<table class='table'>
						<thead>
							<tr>
								<th>Apartment Id</th>
								<th>Apartment Name</th>
								<th>Note Id</th>
								<th>Note Title</th>
								<th>Note Details</th>
							</tr>
						</thead>
						<tbody>
							<?php
							$sql = "SELECT apartment.aId, apartment.aptName, notes.n_Id, notes.n_Title, notes.n_Details FROM apartment JOIN notes ON apartment.aId = notes.n_Id WHERE apartment.aId = '$idOfChairPerson'";
							$result = $conn->query($sql);
							if (!$result) { ?>
								<tr>
									<td colspan="5">No Results found</td>
								</tr>
							<?php } else { ?>
								<?php
								while ($row = $result->fetch_assoc()) {
									echo
										"<tr>
                                        <td>" . $row['aId'] . "</td>
                                        <td>" . $row['aptName'] . "</td>
                                        <td>" . $row['n_Id'] . "</td>
                                        <td>" . $row['n_Title'] . "</td>
                                        <td>" . $row['n_Details'] . "</td>
                                    </tr>"
										?>
								<?php } ?>
							<?php } ?>
						</tbody>
					</table>
				</h3>
			</span>
		</li>
	</ul>
</main>