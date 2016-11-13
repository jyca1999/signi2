function RegisterUser() {
        if (document.getElementById("Password").value == document.getElementById("Password2").value) {
            var request = new XMLHttpRequest();
            var params = "?Id=" + document.getElementById("Id").value + "&Password=" + document.getElementById("Password").value
                + "&Name=" + document.getElementById("Name").value + "&PhoneNum=" + document.getElementById("PhoneNum").value
                + "&Email=" + document.getElementById("Email").value;

            request.open("GET", "register_user.php" + params, true);
            request.onreadystatechange = function () {
                if (request.readyState == 4) { //서버로부터 응답상태
                    if (request.status == 200 || request.status == 0) {//200 : 웹 서버의 응답처리상태
                        var str = request.responseText;
                        if (str == "1") {
                            alert("Success!!");
                        }
                        else {
                            alert("Fail!!");
                        }
                    }
                }
            }
            request.send(null);
        }
        else {
            alert("Passwords not same");
        }
    }
