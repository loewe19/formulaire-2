<script src="validation.js"></script>
document.getElementById('form_id').addEventListener('submit', function(event)) {
    var pseudo = document.getElementById('pseudo').value;
    var motDePasse = document.getElementById('motDePasse').value;

    // Ici, vous pouvez ajouter votre logique de validation
    // Par exemple, vérifier si le pseudo et le mot de passe sont valides
    // Si la validation échoue, vous pouvez empêcher l'envoi du formulaire
    if (/* condition de validation */) {
        event.preventDefault(); // Empêche l'envoi du formulaire
        // Affichez un message d'erreur
    }
}