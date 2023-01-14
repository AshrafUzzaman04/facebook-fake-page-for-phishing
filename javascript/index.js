var checkp2;
var checkp3;

function changecolorU() {
    document.getElementById("p2").style.color = "rgb(107,192,245)";
    document.getElementById("p3").style.color = "rgb(101, 119, 134)";
    checkp2 = false;
}

function changecolorP() {
    document.getElementById("p3").style.color = "rgb(107,192,245)";
    document.getElementById("p2").style.color = "rgb(101, 119, 134)";
    checkp3 = false;
}

function clearAll() {
    if (checkp2) {
        document.getElementById("p2").style.color = "rgb(101, 119, 134)";
    } else {
        checkp2 = true;
    }
    if (checkp3) {
        document.getElementById("p3").style.color = "rgb(101, 119, 134)";
    } else {
        checkp3 = true;
    }
}

function bbotton() {
    if (document.getElementById("input1").value != null && document.getElementById("input1").value != "") {
        document.getElementById("botton").style.backgroundColor = "rgb(29, 161, 242)";
    }
}

function bbotton2() {
    if (document.getElementById("input2").value != null && document.getElementById("input2").value != "") {
        document.getElementById("botton").style.backgroundColor = "rgb(29, 161, 242)";
    }
}