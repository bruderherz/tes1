#include<stdio.h>
#include<stdlib.h>
void myprocedur(/* By procedure */) {
  int i ;
  for ( i = 1; i < 100; i++) {
    printf("this is our message for the 1 st operation\n" );
  }
  return 0;
}
int main() {
myprocedur();
}
/* By fonction
int myprocedur() {
  int i ;
  for ( i = 1; i < 100; i++) {
    printf("this is our message for the 1 st operation\n" );
  }
  return 0;

}
int main() {
myprocedur();
}
*/
