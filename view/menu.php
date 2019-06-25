<link rel="stylesheet" href="../css/main.css">
<div class="header">
  <ul>
    <li><a href="../index.php">HOME</a></li>
    <li><a href="#win3">ADD film</a></li>
    <li><a href="../sort_view.php">SORT film</a></li>
    <li><a href="#win2">SEARCH film</a></li>
    <li><a href="#win1">IMPORT file</a></li>
  </ul>
</div>

<!--Button work-->

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
     <form action="./view/search_view.php" method="post">
       <input class="add" name="title" type="text" placeholder="Title"/>
       <input class="add" name="name" type="text" placeholder="Actors name"/>
       <input type="submit" value="SEARCH"/>
     </form>
    <a class="close"title="Close" href="#close"></a>
  </div>
<a href="#x" class="overlay" id="win3"></a>
   <div class="popup">
     <h2 class="bold">ADD FILM</h2>
     <br>
     <form action="./script/add_film.php" method="post">
       <input required class="add" name="title" type="text" placeholder="Title"/>
       <input required class="add" name="year" type="text" placeholder="Release Year"/>
       <input required class="add" name="format" type="text" placeholder="Format"/>
       <input required class="add" name="actors" type="text" placeholder="Actors"/>
       <input type="submit" value="ADD film"/>
     </form>
    <a class="close"title="Close" href="#close"></a>
  </div>
