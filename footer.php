<style>
   .inline{
      display:flex;
      justify-content: left;
      margin-left:20px;
   }
   span{
      position: relative;
      top: -20px;
   }
</style>

<div class="inline"> 
<?php if (file_exists("images/studiologo.png")==1) { 
   ?> <p><a href="../index.php"><img src="images/studiologo.png" width="10%" class="footerlogo"></a>
          <span> Copy Righted to Group 7 (<?php echo date("M-Y"); ?>)</span>   </p>
<?php } else { ?>
<p><a href="../index.php"><img src="../images/studiologo.png" width="10%" class="footerlogo"></a> 
         Copy Righted to Group 7 (<?php echo date("M-Y"); ?>)  </p>
<?php } ?>
</div>
