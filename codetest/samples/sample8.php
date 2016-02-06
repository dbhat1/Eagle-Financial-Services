

<?php
	print "<b>Sample 8 - Switching the Flow with an if statement<b><br><br>";

    $var1 = 6000;
    if ($var1 >= 5000 ) {
        print "Monthly subscriber number is good this month. It is $var1";
		    }
	else if ($var1<5000) {
	  print "Monthly subscriber number is low this month. It is $var1";
	        }
	else {
	 print "Monthly subscriber number is right on the money this month. It is $var1";
	}
	//end of if elseif else statement
?>	

