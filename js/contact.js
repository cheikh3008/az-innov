// Traitememnt du formulaire de conatct
console.log('test ok');
var res_form = document.querySelector(".res-form");
console.log(res_form);
var form = document.querySelector("#contactForm");
form.addEventListener("submit", function(e){
    console.log('ok');
    e.preventDefault();
    var data = new FormData(form);
    var xhr = new XMLHttpRequest();
    var element_champs_error = document.querySelectorAll('.has-error');
    console.log(element_champs_error);
    for (let j = 0; j < element_champs_error.length; j++) {
        element_champs_error[j].classList.remove('has-error');
        var span = element_champs_error[j].querySelector('.alert-danger')
        if(span){
            span.parentNode.removeChild(span);
        }
    }
    var element_champs_success = document.querySelectorAll('.has-success');
    for (let j = 0; j < element_champs_success.length; j++) {
        element_champs_success[j].classList.remove('has-success');
        var span = element_champs_success[j].querySelector('.alert-success')
        if(span){
            span.parentNode.removeChild(span);
        }
    }
    
    xhr.onreadystatechange = function () {
       if(this.readyState == 4 && this.status == 200){
            console.log(this.responseText);
            var res  = JSON.parse(this.responseText);
            if(res.success){
                console.log(res.success);
                var champs = form.querySelectorAll('textarea , input')
                
                var paragraphe = document.createElement('div');
                
                paragraphe.className = 'alert alert-success';
                paragraphe.innerHTML = 'Votre message a été bien envoyé .';
                res_form.classList.add('has-success');
                res_form.appendChild(paragraphe);
                for (let i = 0; i < champs.length; i++) {
                    champs[i].value = "";
                    
                }
                Swal.fire(
                    {
                        icon: 'succes',
                        title: 'OK Super...',
                        text: 'Votre message a été bien envoyé',
                        confirmButtonColor: '#40c351',
                    }
                  ).then(function() {
                    window.location = "/index.php";
                })
                  
            } else {
                
                var paragraphe = document.createElement('div');
                
                paragraphe.className = 'alert alert-danger';
                paragraphe.innerHTML = res.msg;
                res_form.parentNode.classList.add('has-error');
                res_form.appendChild(paragraphe);
                const text = res.msg
                Swal.fire({
                    icon: 'error',
                    title: 'Erreur...',
                    text: text,
                    confirmButtonColor: '#df4759',
                    
                  })
            }
       } 
        // else if(this.readyState == 4) {
        //     alert('une erreur est survenue ...')
        // }
    };
    xhr.open("POST", "/pages/traitementMessage.php", true);
    // xhr.responseType = "json";
    xhr.setRequestHeader("X-Requested-With", "xmlhttprequest")
    xhr.send(data);
    return false;
});
