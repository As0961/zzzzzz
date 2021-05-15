<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
  <main class="container bg-Secondary">
  <div class="d-flex align-items-center p-3 my-3 text-white bg-info rounded shadow-sm">
    <img class="me-3" src="https://placeimg.com/560/300/nature" alt="" width="48" height="38">
    <div class="lh-1">
      <h1 class="h6 mb-0 text-white lh-1">計算機</h1>
      <small>𓅀𓅀𓅀</small>
    </div>
  </div>
  </main>
  <?php
if(!isset($_POST["ans"]))
{
    $x=rand(10,99);
    $y=rand(10,99);
    $s=$x+$y;
}
else
{
    $x=$_POST["x"];
    $y=$_POST["y"];
    $s=$x+$y;
}
?>
  <div class="container">
       <h1 class="my-3 text-Secondary">請計算<small>以下試題☟☟☟</small></h1>
       <div class="row">
            <div class="col-lg-12 mb-4 ">
                <div class="card text-center border-info">
                    <h2 class="card-header bg-warning text-primary">    
                    <form action="" method="post">
                    ♛♛♛請問<?php echo "$x + $y =";?>
                    <input type="text" name="ans">
                    <input class="btn btn-success" type="submit" value="確認作答">♛♛♛
                    <input type="hidden" name="x" value="<?php echo $x;?>">
                    <input type="hidden" name="y" value="<?php echo $y;?>">
                    <h1 class="text-info">你的作答是:
                    <?php
                            if(isset($_POST["ans"]))
                            {
                                $ans = $_POST["ans"];
                                echo "$ans<br>";
                            }
                    ?>
                    </h1>
                    </form>
                    </h2>
                    <div class="card-body bg-success text-light">  
                        <h1 class="text-light">♠♠正確作答是:
                        <?php
                            if(isset($_POST["ans"]))
                            {
                                $ans = $_POST["ans"];
                                echo "$s";
                            }
                            ?>
                        ♣♣</h1>
                    </div>
                    <div class="card-body bg-warning">  
                        <h1 class="text-light">    
                        <?php
                            if(isset($_POST["ans"]))
                            {
                                $ans = $_POST["ans"];
                                if($ans==$s)
                                {
                                    echo "<h1 class='text-success'>作答正確</h1>";
                                    echo "<br><h1 class='text-success'>☻☻☻</h1>";
                                    echo "<br><h1 class='text-success'>恭喜您答對了;您回答的不錯喔</h1>";
                                    echo '<br><input class="btn btn-info type="button" value="下一題" onclick="document.location.href=\'index.php\';">';
                                }
                                else
                                
                                {
                                    echo "<h1 class='text-danger'>作答錯誤</h1>";
                                    echo "<br><h1 class='text-danger'>☹☹☹</h1>";
                                }
                            }
                        ?>
                        </h1>

                    </div>
               </div>
    
            </div>


       </div>
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>