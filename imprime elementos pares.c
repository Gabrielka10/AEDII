
#include <stdio.h>
#define TAMANHO 9
int main()
{
    int v[TAMANHO]= {0,5,1,4,2,7,8,3,6};
    /*
    for (int i=TAMANHO -1; i>=0; i--){
        printf ("%d - ", v[i]);
        */
    
    /*Imprime o conteúdo com elementos PARES
    for (int i=0 ; i<TAMANHO ; i=i+2) {
        printf ("%d - ", v[i]);
        
    }
    return 0;*/
 
  for (int i = 1; i < TAMANHO; i++) {
     if (v[i]%2 == 0) {
         printf ("%d - ", v[i]);
     }
}
 
 
     return 0;
}


