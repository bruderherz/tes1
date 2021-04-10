#include <stdio.h>
int monthfonction(int month){
  int result;
  if (month == 4 || month == 6 || month == 9 || month == 11) {
    result=1;
  }else
  result=0;
  return result;
}
int  main() {
  int month;
printf("Saisir un mois:\n");
scanf("%d", &month);
printf("*******************************\n");
printf(" Le resultat est %d \n", monthfonction(month));
printf("--------------------------------\n");
printf("1 : Signe de Mois 30 Jours\n");
printf("0 : Signe de Mois 28 Jours et 31 Jours\n");
printf("--------------------------------\n");
  return 0;
}
