function affichage() {
   FenetreAffichage = window.open('','NouvelleFenetre', 'toolbar=no,status=no,width=300,height=200')
   FenetreAffichage.document.write("souvenez-vous de vos informations");
   FenetreAffichage.document.write("Vous êtes connecté entant que : " + document.formulaire1.nom.value);
   FenetreAffichage.document.write("Voici votre mot de passe : " + document.formulaire1.adresse.value);
   FenetreAffichage.document.write("Et votre E-mail est : " + document.formulaire1.email.value);
   FenetreAffichage.document.write("");
}
