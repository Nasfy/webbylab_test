<link rel="stylesheet" href="../css/main.css">
<div class="header">
  <ul>
    <li><a href="../index.php">HOME</a></li>
    <li><a href="../script/add_film.php">ADD film</a></li>
    <li><a href="../sort_view.php">SORT film</a></li>
    <li><a href="#win2">SEARCH film</a></li>
    <li><a href="#win1">IMPORT file</a></li>
  </ul>
</div>
<a href="#x" class="overlay" id="win1"></a>
   <div class="popup">
     <h2 class="bold">IMPORT FILE</h2>
     <br>
     <form class="import" action="../script/import_film.php" method="post" enctype="multipart/form-data">
       <label for="file">Choose file to upload </label>
       <input type="file" name="data" value="Choose file" title="Choose file">
       <p> </p>
       <input type="submit" name="button" value="IMPORT">
     </form>
    <a class="close"title="Close" href="#close"></a>
  </div>
<a href="#x" class="overlay" id="win2"></a>
   <div class="popup">
     <h2 class="bold">SEARCH FILM</h2>
     <br>
     <form action="./search_view.php" method="post">
       <input class="add" name="title" type="text" placeholder="Title"/>
       <p class="bold">OR</p>
       <input class="add" name="name" type="text" placeholder="Actors name"/>
       <input type="submit" value="SEARCH"/>
     </form>
    <a class="close"title="Close" href="#close"></a>
  </div>
