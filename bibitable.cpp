#include <stdio.h>
#define taille 20 /*taille: constante de valeur 20*/
int main( )
{
int i, t [taille]; /*t: tableau de 20 entiers*/
for(i=0;i<taille;i++) /*lit les 20 entiers élément par élément*/
 scanf ("%d",&t[i]);
for(i=0;i<taille;i++) /*affiche les 20 entiers élément par élément*/
 printf ("%d\n",t[i]);
 return 0;
}
