<?php use Cake\Routing\Router; ?>

<!DOCTYPE html>
<html>
<title>W3.CSS Template</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://www.w3schools.com/lib/w3-theme-blue-grey.css">
<link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Open+Sans'>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
html,body,h1,h2,h3,h4,h5 {font-family: "Open Sans", sans-serif}
</style>
<body class="w3-theme-l5">


<!-- Page Container -->
<div class="w3-container w3-content" style="max-width:1400px;margin-top:80px" ng-controller="ImagesIndex">    
  <!-- The Grid -->
  <div class="w3-row">
    <!-- Left Column -->
    <div class="w3-col m3">
      <!-- Profile -->
      <div class="w3-card w3-round w3-white">
        <div class="w3-container">
         <h4 class="w3-center">Mi perfil</h4>
         <p class="w3-center"><img src="{{primero[0].url}}" class="w3-circle" style="height:106px;width:106px" alt="Avatar"></p>
         <hr>
         <p><i class="fa fa-pencil fa-fw w3-margin-right w3-text-theme"></i> Designer, UI</p>
         <p><i class="fa fa-home fa-fw w3-margin-right w3-text-theme"></i> London, UK</p>
         <p><i class="fa fa-birthday-cake fa-fw w3-margin-right w3-text-theme"></i> April 1, 1988</p>
        </div>
      </div>
      <br>
    <!-- End Left Column -->
    </div>
    
    <!-- Middle Column -->



    <div class="w3-col m7">
      <div class="w3-row-padding">
        <div class="w3-col m12">
          <div class="w3-card w3-round w3-white">
            <div class="w3-container w3-padding">
              <img src="{{primero[0].url}}" alt="Avatar" class="w3-left w3-circle w3-margin-right" style="width:15%">
                <!-- <span class="w3-right w3-opacity">32 min</span> -->
                <h4>{{primero[0].name}}</h4><br>
                <hr class="w3-clear">
                <img src="{{primero[0].url}}" style="width:90%" class="w3-margin-bottom">
                <p>{{primero[0].description}}.</p>
                <!-- <button type="button" class="w3-button w3-theme-d1 w3-margin-bottom"><i class="fa fa-thumbs-up"></i>  Like</button> 
                <button type="button" class="w3-button w3-theme-d2 w3-margin-bottom"><i class="fa fa-comment"></i>  Comment</button> -->
            </div>
          </div>
        </div>
      </div>
      <div ng-repeat="img in images_muestro">
        <div class="w3-col m12">
          <div class="w3-container w3-card w3-white w3-round w3-margin" ><br>
            <img src="{{img.url}}" alt="Avatar" class="w3-left w3-circle w3-margin-right" style="width:15%">
            <!-- <span class="w3-right w3-opacity">32 min</span> -->
            <h4>{{img.name}}</h4><br>
            <hr class="w3-clear">
            <img src="{{img.url}}" style="width:90%" class="w3-margin-bottom">
            <p>{{img.description}}.</p>
            <!-- <button type="button" class="w3-button w3-theme-d1 w3-margin-bottom"><i class="fa fa-thumbs-up"></i>  Like</button> 
            <button type="button" class="w3-button w3-theme-d2 w3-margin-bottom"><i class="fa fa-comment"></i>  Comment</button>  -->
          </div>
        </div>
      </div>      
    <!-- End Middle Column -->
    </div>
    <!-- Right Column -->
    <div class="w3-col m2">
      <?php echo "<div class='w3-bar'>";
       
        #the 'first' page button
        echo "<div class='w3-button'>";
        echo $this->Paginator->first("<<");
        echo "</div>";
         if($this->Paginator->hasPrev()) {
          echo "<div class='w3-button'>";
           echo $this->Paginator->prev("<");
          echo "</div>";
        }
        
        // the 'number' page buttons
            echo $this->Paginator->numbers(array('modulus' => 2));
        // for the 'next' button
        
        if($this->Paginator->hasNext()) {
          echo "<div class='w3-button'>";
            echo $this->Paginator->next(">");
          echo "</div>";
        }
        // the 'last' page button
          echo "<div class='w3-button'>";
            echo $this->Paginator->last(">>");                                         
          echo "</div>";
        echo "</div>";
        
        ?>
    <!-- End Right Column -->
    </div>    
  <!-- End Grid -->
  </div>
  
<!-- End Page Container -->
</div>
<br>

 

<script type="text/javascript">
mainApp.controller('ImagesIndex', function($scope,$http){
    $scope.images = [];
    $scope.images_muestro = [];
    $scope.images = <?php echo json_encode($images) ?>;
    console.log($scope.images);
    $scope.primero = [];
    if($scope.images != []){
        $scope.primero[0] = $scope.images[0];
        $scope.url = "http://pruebapaez.hol.es";
        $scope.aux =  $scope.primero[0].url.split("http://127.0.0.1");
        $scope.url = $scope.url + $scope.aux[1];
        $scope.primero[0].url = $scope.url;
        

        for (var i = 1; i < $scope.images.length; i++) {
            /*debugger;*/
            $scope.url = "http://pruebapaez.hol.es";
            $scope.aux =  $scope.images[i].url.split("http://127.0.0.1");
            $scope.url = $scope.url + $scope.aux[1];
            $scope.images[i].url = $scope.url;
            $scope.images_muestro.push($scope.images[i]);
        };
    }
    /*console.log($scope.images_muestro);*/
    // debugger;
    $scope.search = function (){
      // debugger;
      

      // location.href = url;
    }



});
</script>

</body>
</html> 
