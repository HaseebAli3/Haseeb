function validateform() {
    var name = document.getElementById("name").value;
    if (name == "") {
        alert("Enter your name");
        document.getElementById("name").focus();
        return false;
    }

    var rollno = document.getElementById("rollno").value;
    if (rollno == "") {
        alert("Enter your roll no");
        document.getElementById("rollno").focus();
        return false;
    }

    var dep = document.getElementById("Department").value;
    if (dep == "") {
        alert("Enter your Department");
        document.getElementById("Department").focus();
        return false;
    }

    var pno = document.getElementById("pno").value;
    // Validate Pakistani phone number
    var phoneRegex = /^(?:\+92|0)[1-9]\d{9}$/;
    if (!phoneRegex.test(pno)) {
        alert("Enter a valid Pakistani phone number");
        document.getElementById("pno").focus();
        return false;
    }

    var salary = document.getElementById("salary").value;
    if (salary == "") {
        alert("Please enter your Samester Number");
        document.getElementById("salary").focus();
        return false;
    }

    return true;
}

function setAttribute() {
    var name = document.getElementById("name").value;
    if (name == "") {
        alert("Enter your name");
        document.getElementById("name").focus();
        return false;
    }

    var action = document.getElementById('data');
    action.setAttribute("action", "search.php");
    document.getElementsByTagName("h1");
}
