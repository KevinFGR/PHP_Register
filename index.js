function get(id){ return document.getElementById(id);}

function verify() {
    let p = verifyPass();
    let d = verifyDate();
    let c = verifyCheck();
    let e = verifyEmpty();
    console.log(p,d,c,e);
    if (p && d && c && e) {
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

function verifyEmpty() {
    let final = true;
    let ids = ['fName','lName','email','pass1'];
    let x = ids.length;

    let inputs = [];
    for (i=0;i<x;i++){
        inputs.push(get(ids[i]));
    }

    let dFName = get('divFirstName');
    let dLName = get('divLastName');
    let dEmail = get('divEmail');
    let dPass = get('divPass1');
    let divs = [dFName, dLName, dEmail, dPass]; 
    
    let labels = [];

    for (let i=0; i<x;i++){
        labels.push('Lalbel'+ids[i]);
    }
    for (let i = 0; i < x; i++) {
        if (inputs[i].value == "") {
            final = false;
            if (count(labels[i])){
                addLabel(divs[i], "This text box can't be empty.", labels[i]);}
        }
    }
    return final;
}

function verifyPass() {
    let id = 'labelPass';
    if (count(id)) {
        const pass1 = get('pass1').value;
        const pass2 = get('pass2').value;

        if (!(pass1 === pass2)) {
            const div = get("divPass2");
            let mensage = 'The passwords must to be equal.';
            addLabel(div, mensage, id);
            return false;
        }
        else { return true; }
    }
}

function verifyDate() {
    let final = true;
    let id = 'labelDate';
    if (count(id)) {
        const today = new Date();
        const val = get('bornDate').value;
        date = new Date(val);
        let x = isNaN(date.getDay()) /*verifying if has a date*/
        if ((date - today) > 0 || x) {
            final = false;
            let mensage = 'The date is invalid';
            const div = get('divBornDate');
            addLabel(div, mensage, id);
        }
    }
    return final;
}

function verifyCheck() {
    let final = true;
    let id = 'labelCheck';
    if (count(id)) {
        const check = document.querySelector('#Check1:checked');
        if (check == null) {
            final = false;
            const div = get('check');
            let mensage = 'This item has to be checked.';
            addLabel(div, mensage, id);
        }
    }
    return final;
}

function count(id) {
    /*This function verifyes if a mensage alreary exist in the screen*/
    if (!get(id)) { return true; }
    else { return false; }

}