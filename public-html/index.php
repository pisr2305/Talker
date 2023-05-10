<?php
$website = 'https://www.esntls.co/';
?>


<!DOCTYPE html>  
<head>  
 <title>Hello World!</title>
</head>

<body>  
 <h1>I am Sreeraj</h1>
 <a href = "<?php echo $website; ?>" ><?php echo "Jose zuniga:  $website"; ?></a>
 <?php
 $truevalue = true;
 $falsevalue = false;
 ?>
 <p><?php echo "This is the content of truevalue: $truevalue";?></p>
 <p><?php echo "This is the content of falsevalue: $falsevalue";?></p>
 <p><?php echo strlen ('Hello World!');?></p>
 <p>
    <?php
      $countries = array('India' ,'America', 'UK');
      print_r ($countries);
      $countries[] = 'Italy';
      print_r($countries);
      ?>
  </p>
   <p>
    <?php
     echo $countries[1];
     ?>
    </p>
    <p>
      <?php
      echo count($countries);
      ?>
      </p>
    <p>
     <?php
     $age = array(
        'John'=> 25,
        'Sherlock' => 15,
        'Mycroft' => 10
     );
      print_r($age);
     ?>
    </p>
    <p>
      <?php
      $fighters = array(
        'Mike Tyson' => 30,
        'Donnie Yen' => 50,
        'Scott Adkins' => 28
      );
      print_r($fighters);
      ?>
    </p>
    <p>
      <?php
      echo $age['Sherlock'];
      ?>
      </p>
    <script>
      var cars = ["Mercedes", "Volvo", "BMW"];
      for (i in cars) {
        console.log("The current car is" + cars[i]);
      }    
    </script>

    <?php
     $cars = ["Mercedes", "Volvo", "BMW"];
     foreach ($cars as$i) {
        echo "The current car is $i</br>";
     }
     ?>
    <p>
      <?php
       class carblueprint {
          // here goes properties and methods
          
          // constructor
           public function __construct($NEWCOLOR, $NEWMAKE) {
             $this->color = $NEWCOLOR;
             $this->make = $NEWMAKE;
           }
        
          // SETTER METHOD 
          public function setColor($NEWCOLOR) {
            $this->color = $NEWCOLOR;
          }
            //GETTER METHOD
          public function getColor()  {
             return "<br>New color is:  "  . $this->color . "<br>";
          }
        
        
        
        
        
        
        





        }

         $firstrealcar = new carblueprint('green' , 'Volvo');
         

          var_dump($firstrealcar);
          echo $firstrealcar->color;


          
            echo $firstrealcar->getColor();

          $secondrealcar = new carblueprint('brown', 'Mercedes');
          
            echo $secondrealcar->getColor();
             var_dump($secondrealcar);
             

         ?>
    </p>
   <p>
    <?php
      class sportscarblueprint extends carblueprint {
          

        //constructor
         public function __construct($NEWCOLOR, $NEWMAKE, $NEWSPOILER) {
            parent::__construct($NEWCOLOR, $NEWMAKE);
            $this->spoiler = $NEWSPOILER;
         }

        public function activatespoiler() {
          return "<br><strong>SPOILER ACTIVE!</strong></br>";
         }
        }

        $firstsportscar = new sportscarblueprint('magenta', 'SF90', 'tail');
        $firstsportscar-> setColor("PINK");
        var_dump($firstsportscar);
        $firstsportscar->activatespoiler();
        ?>
      </p>
       <p>
         <?php

         function divideonebynumber($number)  {
              if ($number == 0)  {
                throw new exception("Division by zero is not allowed.");
              }
             return 1/$number;
               
            
            
            } 
            
            try {
            echo "The result of division is: " . divideonebynumber(0);
            }

            catch (exception  $e) {
              echo 'Message: ' . $e->getMessage();
            }

          ?>

          </p>


 </body>

