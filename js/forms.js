var email = document.forms['form']['email'];
var password = document.forms['form']['password'];

var email_error = document.getElementById('emailError');
var password_error = document.getElementById('passwordError');

// For Full Login Inputs

function fullLoginInput(e) {
    if (email.value == "") {
        email.style.border = "1px solid red";
        email_error.style.display = "block";
        e.preventDefault();
    } else {
        email_error.style.display = "none";  
        email.style.border = "1px solid gray";
    }
    if (password.value == "") {
        password.style.border = "1px solid red";
        password_error.style.display = "block";
        e.preventDefault();
    } else {
        password_error.style.display = "none";
        password.style.border = "1px solid gray";
    }
}

//  ___________________________________________________


var title = document.forms['form']['title'];
var category = document.forms['form']['category'];
var article = document.forms['form']['article'];

var title_error = document.getElementById('titleError');
var category_error = document.getElementById('categoryError');
var article_error = document.getElementById('articleError');

// For Full Articles Inputs
function fullArticleInput(e) {
    if (title.value == "") {
        title.style.border = "1px solid red";
        title_error.style.display = "block";
    } else {
        title_error.style.display = "none";
        title.style.border = "1px solid gray";
    }
    if (article.value == "") {
        article.style.border = "1px solid red";
        article_error.style.display = "block";
    } else {
        article_error.style.display = "none";
        article.style.border = "1px solid gray";
    }
    if (category.value === "Select Your Choice ..") {
        category.style.border = "1px solid red";
        category_error.style.display = "block";
    } else {
        category_error.style.display = "none";
        category.style.border = "1px solid gray";
    }
    submitForm();
}

// ________________________________________________________

function submitForm() {
    if (title.value != "" && category.value != "Select Your Choice .." && article.value != "") {
        document.forms['form'].submit();
    }
}