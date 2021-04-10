#include <stdio.h>
int main()
{

 int T[10]; /* tableau donné  */
 int N;     /* dimension      */
 int I;     /* indice courant */
 long SOM;  /* somme des éléments - type long à cause */
            /* de la grandeur prévisible du résultat. */

 /* Saisie des données */
 printf("Dimension du tableau (max.50) : ");
 scanf("%d", &N );
 for (I=0; I<N; I++)
    {
     printf("Elément %d : ", I);
     scanf("%d", &T[I]);
    }
  /* Affichage du tableau */
 printf("Tableau donné :\n");
 for (I=0; I<N; I++)
     printf("%d ", T[I]);
 printf("\n");
  /* Calcul de la somme */
 for (SOM=0, I=0; I<N; I++)
     SOM += T[I];
  /* Edition du résultat */
 printf("Somme de éléments : %ld\n", SOM);
 return 0;
}
