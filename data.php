<table class="table table-striped  table-hover table-condensed" style="text-align: center;">
	 <thead >
	    <tr style="border: none;">
	        <th ><h6>Names</h6></th>
	        <th><h6>Address</h6></th>
	        <th><h6>Pincode</h6></th>
	        <th><h6>Mobile Number</h6></th>
	        <th><h6>Profiles</h6></th>
	    </tr>
	</thead>
	<tbody>
	    <?php
			// $query=$con->prepare("SELECT * FROM customers WHERE is_delete=0 ");
	        // // $query->bind_param("s",$cp_id);
			// $query->execute();
            // $result=$query->get_result();
			// while($row=$result->fetch_assoc())
			// 	{
			//        // $title= $row['title'];
			// 		$cid=$row["c_id"];
			// 		$cust_name=$row["c_name"];
			// 	    $cust_mobile=$row["c_mobile"];
			// 		$address=$row["c_address"];
			// 		$postal_code=$row["c_pincode"];
			// 		// echo $formate;	                    
		?>
	    <tr>
	        <!-- <td>1</td> -->
	        <!-- <td><span></span>ANTENNE BAYERN</span></td> -->
	        <td style="border-top: hidden;"><?php //echo $cust_name;  ?></td>
	        <td style="border-top: hidden;"><?php //echo $address;  ?></td>
	        <td style="border-top: hidden;"><?php //echo $postal_code;  ?></td>
	        <td style="border-top: hidden;"><?php //echo $cust_mobile;  ?></td>
            <td style="border-top: hidden;"><?php //echo $cust_mobile;  ?></td>

	        <!-- <td>1</td> -->
	        <!-- <td style="border-top: hidden;">
                <form method="POST">
                    <a class="btn btn-secondary" href="<?php// echo "delete_cust.php?id=$cid" ; ?>"Delete</a>
                    <a class="btn btn-secondary" href="<?php //echo "edit_customer.php?id=$cid" ; ?>">Edit</a>
                </form>
	        </td> -->
                <!-- <td><a href="https://www.appsvista.com/versions/antenne-bayern/download-4-9-1-912"><i class="fas fa-download"></i></a></td> -->
	    </tr>
	    <?php //} //$query->close(); ?> 
	</tbody>
</table>