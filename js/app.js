const input =  document.getElementsByTagName('input');
const select = document.getElementsByTagName('select')[0]
document.getElementsByTagName('form')[0].addEventListener('submit', (e)=>{
   for(let i = 0 ; i < input.length; i++){
    if(input[i].value == '' || select.value == ''){
        input[i].style.borderColor = 'red'
        input[i].setAttribute('placeholder', 'required')
        input[i].addEventListener('keydown', function(e){
            this.style.borderColor = 'rgba(128, 128, 128, 0.397)'
            input[i].setAttribute('placeholder', this.getAttributeNS(this.placeholder).value)
            
        })
        select.style.borderColor = 'red'
        select.onchange = () =>{
            select.style.borderColor = ''
        }

        e.preventDefault()

    }
   }
})

const attr = document.createAttribute('onkeypress')
attr.value = 'return num(event)'
const phone = document.getElementById('phoneNumber');
phone.setAttributeNode(attr)
function num(e){
const keyc = e.keyCode || e.which;
    
if(keyc >= 97 && keyc <=122){
    return false
    
}
else{
    return true
}
}
