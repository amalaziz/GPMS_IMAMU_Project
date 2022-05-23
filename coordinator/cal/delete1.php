<?php

include_once("connect.php");

if ($_GET['mode'] == 'delete') {
  $row_id = (int)$_POST['row_id'];
  mysql_query("DELETE FROM topics WHERE id=" . $row_id); 
}

?>

<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1    /jquery.min.js"></script>
<script type="text/javascript">
  $(document).ready(function(){
    $('.delete-row').click(function() {
      $.post('delete.php?mode=delete', { row_id: $(this).data('row_id')}).done(function(data) {
        // Reload your table/data display
      });
    });
  });
</script>

<button class="delete-row" data-row_id="58">Delete</button>