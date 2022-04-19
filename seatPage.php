<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;800&display=swap" rel="stylesheet">

<link rel="stylesheet" type="text/css" href="styles/seatStyle.css">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <div class="content">
            <div class="header">
                <h1>Book Your Seat</h1>
                <ul>
                    <li id = "ava">Available</li>
                    <li id = "rese">Reserved</li>
                    <li id = "your">Your Seat</li>
                </ul>
            </div>
            <div class="seatview">
                <div class="row">
                    <div class="column available" id = "A1"><input class = "checkbox-in" type="radio" name= "seat" value = "A1"> <label for="A1"> A1</label></div>
                    <div class="column available" id = "A2"><input class = "checkbox-in" type="radio" name= "seat" value = "A2"> <label for="A2"> A2</label></div>
                    <div class="column available" id = "A3"><input class = "checkbox-in" type="radio" name= "seat" value = "A3"> <label for="A3"> A3</label></div>
                </div>
                <div class="row">
                    <div class="column available" id = "B1"><input class = "checkbox-in" type="radio" name= "seat" value = "B1"> <label for="B1"> B1</label></div>
                    <div class="column available" id = "B2"><input class = "checkbox-in" type="radio" name= "seat" value = "B2"> <label for="B2"> B2</label></div>
                    <div class="column available" id = "B3"><input class = "checkbox-in" type="radio" name= "seat" value = "B3"> <label for="B3"> B3</label></div>
                </div>
                <div class="row">
                    <div class="column available" id = "C1"><input class = "checkbox-in" type="radio" name= "seat" value = "C1"> <label for="C1"> C1</label></div>
                    <div class="column available" id = "C2"><input class = "checkbox-in" type="radio" name= "seat" value = "C2"> <label for="C2"> C2</label></div>
                    <div class="column available" id = "C3"><input class = "checkbox-in" type="radio" name= "seat" value = "C3"> <label for="C3"> C3</label></div>
                </div>
                <div class="row">
                    <div class="column available" id = "D1"><input class = "checkbox-in" type="radio" name= "seat" value = "D1"> <label for="D1"> D1</label></div>
                    <div class="column available" id = "D2"><input class = "checkbox-in" type="radio" name= "seat" value = "D2"> <label for="D2"> D2</label></div>
                    <div class="column available" id = "D3"><input class = "checkbox-in" type="radio" name= "seat" value = "D3"> <label for="D3"> D3</label></div>
                </div>
                <div class="row">
                    <div class="column available" id = "E1"><input class = "checkbox-in" type="radio" name= "seat" value = "E1"> <label for="E1"> E1</label></div>
                    <div class="column available" id = "E2"><input class = "checkbox-in" type="radio" name= "seat" value = "E2"> <label for="E2"> E2</label></div>
                    <div class="column available" id = "E3"><input class = "checkbox-in" type="radio" name= "seat" value = "E3"> <label for="E3"> E3</label></div>
                </div>
                <div class="row">
                    <div class="column available" id = "F1"><input class = "checkbox-in" type="radio" name= "seat" value = "F1"> <label for="F1"> F1</label></div>
                    <div class="column available" id = "F2"><input class = "checkbox-in" type="radio" name= "seat" value = "F2"> <label for="F2"> F2</label></div>
                    <div class="column available" id = "F3"><input class = "checkbox-in" type="radio" name= "seat" value = "F3"> <label for="F3"> F3</label></div>
                </div>
                <div class="row">
                    <div class="column available" id = "G1"><input class = "checkbox-in" type="radio" name= "seat" value = "G1"> <label for="G1"> G1</label></div>
                    <div class="column available" id = "G2"><input class = "checkbox-in" type="radio" name= "seat" value = "G2"> <label for="G2"> G2</label></div>
                    <div class="column available" id = "G3"><input class = "checkbox-in" type="radio" name= "seat" value = "G3"> <label for="G3"> G3</label></div>
                </div>
                <div class="row">
                    <div class="column available" id = "H1"><input class = "checkbox-in" type="radio" name= "seat" value = "H1"> <label for="H1"> H1</label></div>
                    <div class="column available" id = "H2"><input class = "checkbox-in" type="radio" name= "seat" value = "H2"> <label for="H2"> H2</label></div>
                    <div class="column available" id = "H3"><input class = "checkbox-in" type="radio" name= "seat" value = "H3"> <label for="H3"> H3</label></div>
                </div>
                <div class="row">
                    <div class="column available" id = "I1"><input class = "checkbox-in" type="radio" name= "seat" value = "I1"> <label for="I1"> I1</label></div>
                    <div class="column available" id = "I2"><input class = "checkbox-in" type="radio" name= "seat" value = "I2"> <label for="I2"> I2</label></div>
                    <div class="column available" id = "I3"><input class = "checkbox-in" type="radio" name= "seat" value = "I3"> <label for="I3"> I3</label></div>
                </div>
                <div class="row">
                    <div class="column available" id = "J1"><input class = "checkbox-in" type="radio" name= "seat" value = "J1"> <label for="J1"> J1</label></div>
                    <div class="column available" id = "J3"><input class = "checkbox-in" type="radio" name= "seat" value = "J3"> <label for="J2"> J2</label></div>
                    <div class="column available" id = "J2"><input class = "checkbox-in" type="radio" name= "seat" value = "J3"> <label for="J3"> J3</label></div>
                </div>
            </div>
            <div id="form">
                <input type="submit" value ="submit" class = "btn btn-submit">
            </div>
        </div>
    </div>
</body>
</html>