<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Receipt</title>
</head>
<body>
    <div id="first">
        <center>
            <h2 class="font">FORT OF JESUS BLOOD TRUST <br>(RELIGIOUS & CHARITABLE TRUST)<br>15/272,Peiyaselvam Nagar,Silluvarpatti Post,Thoothukudi-628-002</h2>
            
        </center>
        <br>
        <br>
        <center><label id="third"><b>RECEIPT</b></label></center>
        <br>
        <label id="sec">&nbsp;&nbsp;&nbsp;No:</label><label for="">{{ $receipt->id }}</label>
        <label id="four">{{ $receipt->receipt_date }}&nbsp;&nbsp;&nbsp;&nbsp;</label><label id="four">Date :</label>
        <br>
         <br>
        <P class="five"> &nbsp; &nbsp;Received with thanks From : <u>{{ $receipt->offering_with }}</u></P> 
        <br>
        <p class="five"> &nbsp; &nbsp;the Sum of Rupees : <u>{{ $receipt->get_amount }}</u></p>
        <br>
        <p class="five" > &nbsp; &nbsp;By Cash/Cheque No : <u>{{ $receipt->amount_type}}</u> &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp </p>
        <br>
        <p class="five"> &nbsp; &nbsp;Particulars : {{ $receipt->description }}</p>
        <br>
        <label id="six"> &nbsp;&nbsp;&nbsp;Rs. <input type="text" id="sev" value=' {{ $receipt->amount }}'></label>
        <br>
        <br>
        <div>
            <br>
            <br>
            <label id="eig">Treasure/Office Incharge  &nbsp; &nbsp;</label> 
        </div>
    </div>  
</body>
</html>
