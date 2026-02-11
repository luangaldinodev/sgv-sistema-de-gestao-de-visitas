import './bootstrap';

import Inputmask from 'inputmask'

document.addEventListener('DOMContentLoaded', function(){
    
    var cpfMask = new Inputmask('999.999.999-99');
    cpfMask.mask(document.querySelectorAll('.cpf'));
})