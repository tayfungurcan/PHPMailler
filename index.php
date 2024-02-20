<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <style>
        td{
            width: 130px;
            height: 30px;
        }
        .inputAlani{
            width: 100%;
            height: 15px;
            margin: 0;
            padding: 5px 10px 5px 10px;
        }
        table{
            width: 500px;
           
        }
        textarea{
            resize: none;
            width: 100%;
            height: 55px;
            margin: 0;
            padding: 5px 10px 5px 10px;
        }
        .gonderButonu{
            width: 100%;
            height: 35px;
            padding: 5px 10px 5px 10px; 
            border: 1px solid #02FF00;  
            background: #009900;
            border-radius: 50px;
        }
        .tablo{
            width: 500px;
            border: 0;
            padding: 0;
            margin-left:auto; 
            margin-right:auto;   
        }
         
        
    </style>
    <form action="conclusion.php" method="post">
        <table class="tablo">
        <tr>
            <td >Adınız ve Soyadınız</td>
            <td style="width: 20px;">:</td>
            <td><input type="text" class="inputAlani" name="adisoyadi"></td>
        </tr>
        <tr>
            <td >Telefon Numaranız</td>
            <td style="width: 20px;">:</td>
            <td><input type="text" class="inputAlani" name="telefon"></td>
        </tr>
        <tr>
            <td >E-Posta Adresiniz</td>
            <td style="width: 20px;">:</td>
            <td><input type="email" class="inputAlani" name="emailadresi"></td>
        </tr>
        <tr>
            <td >Konu</td>
            <td style="width: 20px;">:</td>
            <td><input type="text" class="inputAlani" name="konusu"></td>
        </tr>
        <tr>
            <td >Mesajınız</td>
            <td style="width: 20px;">:</td>
            <td><textarea name="mesaji" ></textarea></td>
        </tr>
        <tr>
            <td >&nbsp;</td>
            <td style="width: 20px;">&nbsp;</td>
            <td><input type="submit" class="gonderButonu" values="Gönder" ></td>
        </tr>
        </table>
    </form>
</body>
</html>