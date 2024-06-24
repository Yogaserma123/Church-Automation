<!DOCTYPE html>
<html>
<head>
    <title>Voucher</title>
    <style>
        #one{
                text-align: center;
            }
            table{
                width: 100%;
                margin: 25px 0;
                border-collapse: collapse;
            }
            .class{
                border: 1px solid black;
                
            }
            .two{
                padding: 1px;
            }#three{
                float: left;
            }
            #four{
                height: 20px;
                width: 145px;
                border: 1px solid black;
            }
            #fiv{
                float: right;
            }
            #ten{
                float: right;
            }
            body{
                width: 700px;
                height: 550px;
                border: 1px solid black;
            }
            #sev{
                float: right;
            }
    </style>
</head>
<body>
    <div id="one">
        <h3>FORT OF JESUS BLOOD TRUST <br> (RELIGIOUS & CHARITABLE TRUST) <br> 15.272.Periyaselvam Nagar,Silluvaipatti Post,Thoothukudi-628 002.</h3>
         
            
    </div>

    <!-- Receipt details -->
    <div>
        <p>No: {{ $voucher->id }}</p>
        <p>Date: {{ date("d/m/Y", strtotime($voucher->voucher_date)) }}</p>       
    </div>

    <!-- Table structure -->
    <table>
        <!-- Table headers -->
        <thead>
            <th class="class">PARTICULARS</th>
            <th class="class">Rs.</th>
            <th class="class">Ps.</th>
        </thead>
        <tbody>
            <!-- Table rows -->
            <tr>
                <td class="class">{{ $voucher->description }}</td>
                <td class="class" style="text-align:right;">{{ $voucher->amount }}</td>
                <td class="class" style="text-align:right;">00</td>
            </tr>
            <!-- Other rows and total -->
        </tbody>
    </table>
<div id="six"></div>
        <br>
        <br>
        <label>Authorised By</label><label style="float:right;">Receivers Signature</label>
        
        <div></div>
    
</body>
</html>
