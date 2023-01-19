const form = document.getElementById("myForm");
const button = document.getElementById("duplicateButton");

button.addEventListener("click", function(){
    const formCopy = form.cloneNode(true);
    document.body.appendChild(formCopy);
    form.parentNode.insertBefore(formCopy,form.nextSibling) 
})