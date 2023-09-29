
const formCreate = document.querySelector('#form-create');

const validacion = []
console.log(validacion);

formCreate.addEventListener('submit',(e)=>{
    e.preventDefault();
    crearCuenta();
})

function crearCuenta() {

    const email = document.querySelector('#email_create').value;
    const password = document.querySelector('#password_create').value;

    fetch(`/register`, {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
                'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
            },
            body: JSON.stringify({
               email,
               password,
            })
        })
        .then(response => response.json())
        .then(data => {
            console.log(data);
            console.log(data.errors);
            if(data.errors.length !== 0 ){
                console.log(data.errors)
                validacion = [...data.errors];
                console.log("Hay errores")
            } else {
                window.location.href = "/dashboard"
            }
        })
        .catch(error => console.error('Error:', error));
}
