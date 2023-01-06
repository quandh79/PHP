<?php $title = "Home"; ?>
<!doctype html>
<html lang="en">
<head>
    <?php include ("head.php");?>
</head>
<body>
<div class="container">
   <form action="postSearch.php" method="get">
       <div class="input-group" >
           <input name="q" type="text" class="form-control rounded" placeholder="Search" aria-label="Search" aria-describedby="search-addon" />
           <button type="submit" class="btn btn-outline-primary">search</button>
       </div>
   </form>

</div>

</body>
</html>
