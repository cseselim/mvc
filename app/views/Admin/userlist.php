<article class="adminright">
	<h2>User List</h2>
	<?php 
	if (Session::get('msg')) {
		$msg = Session::get('msg');
		echo "<p style='color:blue;font-weight:bold;margin-bottom:8px'>".$msg."</p>";
	}
	?>
	<table class="userlist">
	  <tr>
	    <th>S.No</th>
	    <th>Name</th>
	    <th>Email</th>
	    <th>Lavel</th>
	    <th>Action</th>
	  </tr>
	  <?php $i=0; ?>
	 	<?php foreach ($user as $value) { $i++; ?>
		  <tr>
		    <td><?php echo $i; ?></td>
		    <td><?php echo $value['username']; ?></td>
		    <td>
		    	<?php echo $value['email']; ?>		
		    </td>
		    <td>
		    	<?php 
		    		if ($value['level'] == 1) {
		    			echo "Admin";
		    		}elseif ($value['level'] == 2) {
		    			echo "Editor";
		    		}elseif ($value['level'] == 3) {
		    			echo "Subscriber";
		    		}elseif ($value['level'] == 4) {
		    			echo "Publisher";
		    		}else{
		    			echo "<span style='color:red'>DeActive</span>";
		    		}
		    	?>		
		    </td>
		    <td>
		    	<a href="<?php echo BASE_URL ?>/Usercontroller/useredit/<?php echo $value['id'] ?>">Edit</a>&nbsp &nbsp
		    	<a onclick="return confirm('Are you sure to delete?');" href="<?php echo BASE_URL ?>/Usercontroller/userdelete/<?php echo $value['id'] ?>">Delete</a>
		    </td>
		  </tr>
		<?php } ?>
	</table>
</article>

</section>