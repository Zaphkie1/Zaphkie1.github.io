// ModoOscuro.js

document.addEventListener('DOMContentLoaded', function() {
    var modoOscuroSwitch = document.getElementById('modoOscuroSwitch');

    modoOscuroSwitch.addEventListener('change', function() {
        console.log("Interruptor cambiado");
        if (this.checked) {
            console.log("Modo oscuro activado");
            document.body.classList.add('modo-oscuro');
        } else {
            console.log("Modo oscuro desactivado");
            document.body.classList.remove('modo-oscuro');
        }
    });
});
