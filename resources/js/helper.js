import swal from 'sweetalert'
import http from './http';

export default {
    error: (err) => {
        if (err.response.data.errors) {
            let errors = err.response.data.errors;
            let i, html_error = '';
            let objKeys = Object.keys(errors);
            let objVal = Object.values(errors);

            for (i = 0; i < objKeys.length; i++) {
                html_error += `<div><b style="color: #993300">${objKeys[i].toUpperCase()}:</b> ${objVal[i][0]}</div>`;
            }

            const divElement = document.createElement('div');
            divElement.innerHTML = html_error;

            swal({
                title: 'Notification',
                icon: 'warning',
                content: divElement
            });
        }
    },
    success: (resp, url) => {
        if (resp.status) {
            swal('Notification', 'Staff Information created successfully', 'success')
            return this.$router.push(`/home/${url}`)
        }
        return swal('Notification', 'Error Occured while creating Staff Information', 'error')
    },
    storeFile: (formdata) => {
        http.object('picture', formdata).then((response) => {
            let preview = document.querySelectorAll('#preview img');
            Array.prototype.map.call(preview, (resp) => resp.style.opacity = '1');
        }).catch(function(err) {
            swal('Notification', 'Error Occured, please reload this page', 'error');
        })
    },
    testing: () => { console.log('Hello world !')}
}
