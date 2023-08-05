const form = Document.getElementById('form')
const uname = Document.getElementById('name')
const password = Document.getElementById('psw')


form.addEventListener('submit',(e) => {
    e.preventDefault()

    validateInput();

});

const seterror= (element,message) =>{
    const inputcontrol = element.parentElement;
    const errordisplay = inputcontrol.queryselector('.error');
    
    errordisplay.innerText = message;
    inputcontrol.classlist.add('error');
    inputcontrol.classlist.remove('success')
}

const validateInput = () => {
    const usernamevalue = uname.value.trim();
    const passwordvalue = password.value.trim();

    if(usernamevalue===""){
        seterror(uname, "Username Required");
    }else{
        
    }
};



