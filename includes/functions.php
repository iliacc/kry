<?php

// Retourne une classe selon la demande atelier. 
function getClassForDemande($demande) {
    switch ($demande) {
        case 'add':
            return 'text-bg-success';
            break;
        case 'change':
            return 'text-bg-warning';
            break;
        case 'delete':
            return 'text-bg-danger';
            break;
        default:
            return '';
            break;
    }
}

?>