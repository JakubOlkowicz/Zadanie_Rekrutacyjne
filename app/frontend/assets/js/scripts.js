const krs = document.getElementById('Numer-Krs');
const form = document.getElementById('form');

//Show input error messages
function showError(input, message) {
    const formControl = input.parentElement;
    formControl.classList.add('error');
    const small = formControl.querySelector('small');
    small.innerText = message;
}

//show success colour
function showSucces(input) {
    const formControl = input.parentElement;
    formControl.classList.add('success');
}

//check email is valid
function checkNumber(input) {
    if(!isNaN(input.value.trim())) {
        showSucces(input)
    }else {
        showError(input,'Numer nie jest poprawny');
    }
}


//checkRequired fields
function checkRequired(inputArr) {
    inputArr.forEach(function(input){
        if(input.value.trim() === ''){
            showError(input,`${getFieldName(input)} jest wymagane`)
        }else {
            showSucces(input);
        }
    });
}


//check input Length
function checkLength(input, min ,max) {
    if(input.value.length < min) {
        showError(input, `${getFieldName(input)} musi mieć ${min} znaków`);
    }else if(input.value.length > max) {
        showError(input, `${getFieldName(input)} musi mieć ${max} znaków`);
    }else {
        showSucces(input);
    }
}

//get FieldName
function getFieldName(input) {
    return input.id.charAt(0).toUpperCase() + input.id.slice(1);
}




//Event Listeners
window.addEventListener('load', function(){
    form.addEventListener('submit',function(e) {
        e.preventDefault();
        checkRequired([krs]);
        checkLength(krs,10,10);
        checkNumber(krs);
        if(!krs.parentElement.classList.contains('error')){
            form.submit();
        }
        krs.parentElement.classList.remove('error','success');
    });
});
