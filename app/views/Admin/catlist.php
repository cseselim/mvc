<article class="adminright">
	<h2>Category List</h2>
	<?php 
	if (!empty($_GET['msg'])) {
		$msg = unserialize(urldecode($_GET['msg']));
		foreach ($msg as $value) {
			echo "<span style='color:blue;font-weight:bold'>".$value."</span>";
		}
	}
	?>
	<table class="catlist">
	  <tr>
	    <th>S.No</th>
	    <th>Name</th>
	    <th>Action</th>
	  </tr>
	  <?php $i=0; ?>
	 	<?php foreach ($cat as $value) { $i++; ?>
		  <tr>
		    <td><?php echo $i; ?></td>
		    <td><?php echo $value['name']; ?></td>
		    <td>
		    	<a href="<?php echo BASE_URL ?>/Admin/editcat/<?php echo $value['id'] ?>">Edit</a>&nbsp &nbsp
		    	<a onclick="return confirm('Are you sure to delete?');" href="<?php echo BASE_URL ?>/Admin/deletecat/<?php echo $value['id'] ?>">Delete</a>
		    </td>
		  </tr>
		<?php } ?>
	</table>
</article>

</section>