<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Form</title>
    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Quicksand:300,400,500,700,900">
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
    <link rel="icon" href="images/logo.jpg">
    <link rel="stylesheet" href="owlcarousel/docs/assets/owlcarousel/assets/owl.carousel.css" type="text/css">
    <link rel="stylesheet" href="owlcarousel/dist/assets/owl.theme.default.css" type="text/css">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <link href="bootstrap/dist/css/bootstrap.css" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<form action="data/save-data.php" method="post" enctype="multipart/form-data">
    <div class="row container-css">
        <div class="col-md-3">
            <div class="form-group">
                <label class="control-label">Full Name</label>
                <input class="form-control" type="text" id="hoten" minlength="1" maxlength="20" placeholder="Full Name" name="User[name]">
            </div>
        </div>
        <div class="col-md-3">
            <div class="form-group">
                <label class="control-label">ID Name</label>
                <input class="form-control" type="text" id="dangnhap" required minlength="1" maxlength="20" placeholder="ID Name" name="User[id]">
            </div>
        </div>
        <div class="col-md-3">
            <div class="form-group">
                <label class="control-label">Date of Birth</label>
                <input class="form-control" type="date" id="ngaysinh" name="User[dob]">
            </div>
        </div>
        <div class="col-md-3">
            <div class="form-group">
                <label class="control-label">Password</label>
                <input class="form-control" type="password" id="matkhau" placeholder="Password" name="User[password]">
            </div>
        </div>
    <div class="row">
        <div class="col-md-3">
            <div class="form-group">
                <label class="control-label">Gender</label>
                <input type="radio" value="male" name="User[gender]">Male
                <input type="radio" value="female" name="User[gender]">Female
                <input type="radio" value="n/a" name="User[gender]">N/A
            </div>
        </div>
        <div class="col-md-3">
            <label class="control-label">Region</label>
            <select class="form-group" name="User[region]">
                <option>North</option>
                <option>Center</option>
                <option>South</option>
            </select>
        </div>
        <div class="col-md-3">
            <div class="form-group">
                <label class="control-label">Hobbies</label>
                <input type="checkbox" value="eat" name="User[hobbies][]">Eat
                <input type="checkbox" value="sleep" name="User[hobbies][]">Sleep
                <input type="checkbox" value="game" name="User[hobbies][]">Game
            </div>
        </div>
        <div class="col-md-3">
            <div class="avatar">
                <label class="control-label">Avatar</label>
                <input type="file" name="avatar[]" multiple> <!--upload multiple files-->
            </div>
        </div>
<!--        <div class="col-md-3">-->
<!--            <div class="form-group">-->
<!--                <label class="control-label">Note</label>-->
<!--                <textarea class="form-control" placeholder="Note" name="User[note]"></textarea>-->
<!--            </div>-->
<!--        </div>-->
    </div>
    <div id="action">
        <button type="submit" id="btn-saving" class="btn btn-success"><i class="glyphicon glyphicon-save"></i>Save</button>
    </div></div>
</form>
</body>
</html>