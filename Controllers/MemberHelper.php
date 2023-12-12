<?php

class MemberHelper{
    public static function Display_Members(){
        $result = //do your stuff pat :))
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
              echo "<div class='user-item'>";
              echo "<div class='user-top'>";
              echo "<h3>".$row['firstname']."</h3>";
              echo "</div>";
              echo "<p class='user-email'>".$row['email']."</p>";
              echo "<div class='user-sep'></div>";
              echo "<p>".$row['description']."<p>";
              echo "</div>";
            }
          } else {
            echo "<h2>You currently have no members on your programme</h2>";
          }
    }
}

?>