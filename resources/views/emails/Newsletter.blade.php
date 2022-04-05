<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Hello, world!</title>
</head>

<body style="background-color: #385549;">
    <div class="container">
        <div style="display: flex;justify-content: center;margin-top: 20px;">
            <img src="https://media.discordapp.net/attachments/725917080175771770/872634059153604618/hero-logo.png" alt="">
        </div>
        <div style="border: 5px solid #1b4131;display: flex;justify-content: center;margin-top: 20px;">
            <p style="color: white;"><b>Holliday & Sons Newsletter Verification</b></p>
        </div>
        <div>
            <p style="color: white;">
                Welcome, <br> <br> To stay up to date with the latest products that we receive, you will be receiving a weekly update regarding the different products. <br>
                <br> To begin receiving weekly newsletter, please click on this <a href="https://holidayandsons.com/newsletter/verification/{{$encryptedemail}}">link here</a>
            </p>
        </div>
        <p style="text-align: center;color: #bb9754;"><b>To learn more about Holliday & Sons</b></p>
        <div class="row">

            <div class="col-sm" style="border: 5px solid #1b4131;margin-top: 20px;margin-bottom: 20x;margin-right: 20px;margin-left: 20px;">
                <p style="text-align: center;color: #bb9754;">Consultation</p>
                <div>
                    <a href="https://hollidayandsons.co.nz/services/consultation"><img src="https://media.discordapp.net/attachments/725917080175771770/872643394646728744/opinion_and_advice.png?width=841&height=468" style="width: 200px;" alt=""></a>
                </div>
            </div>
            <div class="col-sm" style="border: 5px solid #1b4131;margin-top: 20px;margin-bottom: 20x;margin-right: 20px;margin-left: 20px;">
                <p style="text-align: center;color: #bb9754;">Restoration</p>
                <div>
                    <a href="https://hollidayandsons.co.nz/services/restoration"><img src="https://cdn.discordapp.com/attachments/725917080175771770/872644139022418000/stock.png" style="width: 200px;" alt=""></a>
                </div>
            </div>
            <div class="col-sm" style="border: 5px solid #1b4131;margin-top: 20px;margin-bottom: 20x;margin-right: 20px;margin-left: 20px;">
                <p style="text-align: center;color: #bb9754;">Valuation</p>
                <div>
                    <a href="https://hollidayandsons.co.nz/services/valuation"><img src="https://media.discordapp.net/attachments/725917080175771770/872644442576785518/standards.png?width=832&height=468" style="width: 200px;" alt=""></a>
                </div>
            </div>
        </div>
        <div style="border: 5px solid #1b4131;display: flex;justify-content: center;margin-top: 20px;word-wrap: break-word;">
            <p style="color: white;">
                You received this email because you recently wanted to subscribed to the holliday & sons Newsletter. <br><br>If this wasn't you, please ignore this email. If clicking the above link does't work, copy the below URL into your address bar: <br>
                @php
                    echo "https://holidayandsons.com/newsletter/verification/{$encryptedemail}";
                @endphp
            </p>
        </div>
    </div>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
</body>

</html>