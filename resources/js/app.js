import './bootstrap';

import * as bootstrap from 'bootstrap';


window.confirmAction = function (options) {
    const {
        formId,
        title = 'Yakin nie?',
        text = 'This action have consequences!',
        icon = 'warning',
        confirmButtonText = 'Yes, do it!',
        cancelButtonText = 'Cancel',
    } = options;

    Swal.fire({
        title,
        text,
        icon,
        showCancelButton: true,
        confirmButtonColor: '#d33',
        cancelButtonColor: '#6c757d',
        confirmButtonText,
        cancelButtonText
    }).then((result) => {
        if (result.isConfirmed) {
            document.getElementById(formId).submit();
        }
    });
};
