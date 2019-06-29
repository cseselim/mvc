<article class="adminright">
	<h2>Post List</h2>
	<?php 
	if (!empty($_GET['msg'])) {
		$msg = unserialize(urldecode($_GET['msg']));
		foreach ($msg as $value) {
			echo "<span style='color:blue;font-weight:bold'>".$value."</span>";
		}
	}
	?>
	<table class="postlist">
	  <tr>
	    <th>S.No</th>
	    <th>title</th>
	    <th>body</th>
	    <th>Status</th>
	    <th>Action</th>
	  </tr>
	  <?php $i=0; ?>
	 	<?php foreach ($posts as $value) { $i++; ?>
		  <tr>
		    <td><?php echo $i; ?></td>
		    <td><?php echo $value['title']; ?></td>
		    <td><?php echo text_shorter($value['body'],0,30); ?></td>
		    <td><?php 
		    	if ($value['status'] == '1') {
		    		echo "published";
		    	}else{
		    		echo "unpublished";
		    	} 
		    ?></td>
		    <td>
		    	<a href="<?php echo BASE_URL ?>/Adminpost/editpost/<?php echo $value['id'] ?>">Edit</a>&nbsp &nbsp
		    	<a onclick="return confirm('Are you sure to delete?');" href="<?php echo BASE_URL ?>/Adminpost/deletepost/<?php echo $value['id'] ?>">Delete</a>
		    </td>
		  </tr>
		<?php } ?>
	</table>
</article>

</section>