<?php 

global $inerest;

if (isset($_POST['calculation'])){

    #input
    $input = htmlspecialchars($_REQUEST['input']);
    $input = (int)$input;

    #RATE
    $rate = htmlspecialchars($_REQUEST['rate']);
    $rate = (int)$input;
    #month
    $month = htmlspecialchars($_REQUEST['month']);
    $month = (int)$input;
   $inerest = (($input * ($rate * 0.1)/$month));


}

?>

<!DOCTYPE html>
<html>
<head>
   <title>Loan calculator-KalyanMishra (TutorialsPoint)</title>
   <link rel="stylesheet" href="loan.css">
</head>
<body>
    <form method="POST">
   <div class="Loan_calcualtor">
      <h1>Loan Calculator </h1>
      <p>Loan amount: $
         <input type="text" placeholder="Enter amount.." name="input">
      </p>
      <p>Rate (Interest): %
         <input type="text"  placeholder="Enter rate.." name="rate">
      </p>
      <p>Months (Time):
         <input type="text"  placeholder="Enter time.." name="month">
      </p>
      <button class="btn" name="calculation">Submit</button>
      <p>Total EMI: $
         <span style="font-weight: 20px; color: white;" id="output"><?php echo $inerest; ?></span>
        
        </form>
      </p>
   </div>
</body>
</html>