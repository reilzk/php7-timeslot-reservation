<?php
function build_calendar($month, $year) {
    $mysqli = new mysqli('localhost', 'root', '', 'bookingcalendar');
    $stmt = $mysqli->prepare("select * from bookings where MONTH(date) = ? AND YEAR(date) = ?");
    $stmt->bind_param('ss', $month, $year);
    $bookings = array();
    if($stmt->execute()){
        $result = $stmt->get_result();
        if($result->num_rows>0){
            while($row = $result->fetch_assoc()){
                $bookings[] = $row['date'];
            }

            $stmt->close();
        }
    }

     $daysOfWeek = array('Sunday','Monday','Tuesday','Wednesday','Thursday','Friday','Saturday');
     $firstDayOfMonth = mktime(0,0,0,$month,1,$year);
     $numberDays = date('t',$firstDayOfMonth);
     $dateComponents = getdate($firstDayOfMonth);
     $monthName = $dateComponents['month'];
     $dayOfWeek = $dateComponents['wday'];
    $datetoday = date('Y-m-d');
    $calendar = "<table class='table table-bordered'>";
    $calendar .= "<center><h2>$monthName $year</h2>";
    $calendar.= "<a class='btn btn-xs btn-primary' href='?month=".date('m', mktime(0, 0, 0, $month-1, 1, $year))."&year=".date('Y', mktime(0, 0, 0, $month-1, 1, $year))."'>Previous Month</a> ";
    $calendar.= " <a class='btn btn-xs btn-primary' href='?month=".date('m')."&year=".date('Y')."'>Current Month</a> ";
    $calendar.= "<a class='btn btn-xs btn-primary' href='?month=".date('m', mktime(0, 0, 0, $month+1, 1, $year))."&year=".date('Y', mktime(0, 0, 0, $month+1, 1, $year))."'>Next Month</a></center><br>";


      $calendar .= "<tr>";

     foreach($daysOfWeek as $day) {
          $calendar .= "<th  class='header'>$day</th>";
     }
     $currentDay = 1;
     $calendar .= "</tr><tr>";
     if ($dayOfWeek > 0) {
         for($k=0;$k<$dayOfWeek;$k++){
                $calendar .= "<td  class='empty'></td>";

         }
     }

     $month = str_pad($month, 2, "0", STR_PAD_LEFT)
     while ($currentDay <= $numberDays) {
          if ($dayOfWeek == 7) {
               $dayOfWeek = 0;
               $calendar .= "</tr><tr>";
          }
          $currentDayRel = str_pad($currentDay, 2, "0", STR_PAD_LEFT);
          $date = "$year-$month-$currentDayRel";
            $dayname = strtolower(date('l', strtotime($date)));
            $eventNum = 0;
            $today = $date==date('Y-m-d')? "today" : "";
         if($date<date('Y-m-d')){
             $calendar.="<td><h4>$currentDay</h4> <button class='btn btn-danger btn-xs'>N/A</button>";
         }elseif(in_array($date, $bookings)){
             $calendar.="<td class='$today'><h4>$currentDay</h4> <button class='btn btn-danger btn-xs'>Already Booked</button>";
         }else{
             $calendar.="<td class='$today'><h4>$currentDay</h4> <a href='book.php?date=".$date."' class='btn btn-success btn-xs'>Book</a>";
         }

          $calendar .="</td>";
          $currentDay++;
          $dayOfWeek++;

     }

     if ($dayOfWeek != 7) {

          $remainingDays = 7 - $dayOfWeek;
            for($l=0;$l<$remainingDays;$l++){
                $calendar .= "<td class='empty'></td>";

         }

     }

     $calendar .= "</tr>";
     $calendar .= "</table>";
     echo $calendar;

}
?>
<html>
<head>
  <title> Reservasi </title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="/style/style.css"
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <?php
                     $dateComponents = getdate();
                     if(isset($_GET['month']) && isset($_GET['year'])){
                         $month = $_GET['month'];
                         $year = $_GET['year'];
                     }else{
                         $month = $dateComponents['mon'];
                         $year = $dateComponents['year'];
                     }
                    echo build_calendar($month,$year);
                ?>
            </div>
        </div>
    </div>
</body>

</html>
