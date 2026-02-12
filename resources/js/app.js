import './bootstrap';

import Inputmask from 'inputmask'
import swal from 'sweetalert';

document.addEventListener('DOMContentLoaded', function () {

    var cpfMask = new Inputmask('999.999.999-99');
    cpfMask.mask(document.querySelectorAll('.cpf'));

    var telefoneMask = new Inputmask('(99) 99999-9999');
    telefoneMask.mask(document.querySelectorAll('.telefone'));
})
