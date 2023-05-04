var fName = document.getElementById('first-name');
var lName = document.getElementById('last-name');
var email = document.getElementById('email');
var pass = document.getElementById("InputPassword1");

var dFName = document.getElementById('divFirstName');
var dLName = document.getElementById('divLastName');
var dEmail = document.getElementById('DivEmail');
var dPass = document.getElementById('divPass1');

function verify() {
    let p = verifyPass();
    let d = verifyDate();
    let c = verifyCheck();
    if (p && d && c){
        return formRegister.submit();
    }
}

function addLabel(div, mensage, id) {
    let label = document.createElement("label");
    let content = document.createTextNode(mensage);
    label.setAttribute("class", "text-danger");
    label.setAttribute("id", id);
    label.appendChild(content);
    div.append(label);
}

function verifyEmpty(){
    var inputs = [fName,lName,email,pass];
    var divs = [dFName,dLName,dEmail,dPass];

    let x = inputs.length
    for(let i = 0; i<x; i++){
        if (inputs[i].value == ""){
            //addLabel(divs[i], "This text box can't be empty.",)
        }
    }
    
}

function verifyPass() {
    let id = 'labelPass';
    if (count(id)) {
        const pass1 = pass.value;
        const pass2 = document.getElementById('InputPassword2').value;

        if (!(pass1 === pass2)) {
            const div = document.getElementById("divPass2");
            let mensage = 'The passwords must to be equal.';
            addLabel(div, mensage, id);
            return false;
        }
        else{return true;}
    }
}

function verifyDate() {
    let id = 'labelDate';
    if (count(id)) {
        const today = new Date();
        const val = document.getElementById('borndate').value;
        date = new Date(val);
        let x = isNaN(date.getDay()) /*verifying if has a date*/
        if ((date - today) > 0 || x) {
            let mensage = 'The date is invalid';
            const div = document.getElementById('divBornDate');
            addLabel(div, mensage, id);
            return false;
        }
        else{return true;}
    }
}

function verifyCheck() {
    let id = 'labelCheck';
    if (count(id)) {
        const check = document.querySelector('#Check1:checked');
        if (check == null) {
            const div = document.getElementById('check');
            let mensage = 'This item has to be checked.';
            addLabel(div, mensage, id);
            return false;
        }
        else{return true;}
    }
}

function count(id) {
    /*This function verifyes if a mensage alreary exist in the screen*/
    if (id == "labelCheck") {
        if (!document.getElementById(id)) { return true; }
        else {return false;}
    }
    else if (id == "labelPass") {
        if (!document.getElementById(id)) { return true; }
        else {return false;}
    }
    else if (id == "labelDate") {
        if (!document.getElementById(id)) { return true; }
        else {return false;}
    }

}
